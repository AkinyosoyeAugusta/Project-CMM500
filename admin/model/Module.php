


<?php

require "../../config/database.php";

class Module extends Database {

    //Inserting new data into the database
        protected function setModule($course_id,$title,$content){
            
            $sql = $this->connect()->prepare("INSERT  INTO module(course_id,title,content) VALUES (?,?,?)");
            if($sql->execute([$course_id,$title,$content])){
                return true;
            }else{
        
                throw new Exception ("Module can not be created");
            }

        }

        //joining the module and course table together and select required data from database 
        public function CModule(){
            $sql= $this->connect()->prepare("SELECT `module`.*,`course`.`name`,`course`.`description`,`course`.`image` AS poster,`course`.`created` AS posted,`course`.`link`,`course`.`material` FROM `module` LEFT JOIN `course` ON `module`.`course_id` = `course`.`course_id`
            ORDER BY `module`.`module_id` ASC");
           if($sql->execute()){
            return $sql;
           }else{
            throw new Exception("Error Processing Request",1);
           }
        }


        //get all data from modules table
        public function getModule(){
            $sql= $this->connect()->prepare('SELECT * FROM module');
             $sql->execute();

             return $sql;
            
           
        }


//delete data from the module table
        public function deletemodule($courseId) {
            
            $sql = "DELETE FROM module WHERE module_id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(1, $courseId);
            if($stmt->execute()){
                return true;
                }
                else
                {
                    return false;
                 }
    
           
    
            
        }



}


?>