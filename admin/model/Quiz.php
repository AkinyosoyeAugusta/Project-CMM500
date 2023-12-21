<?php
require "../../config/database.php";
class Quiz extends Database{
    protected function setQuiz($course_id,$question,$optionA,$optionB,$optionC,$optionD,$answer){
        // Your SQL query here
        $query = "INSERT INTO quiz (course_id,question, optionA, optionB, optionC, optionD, answer) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($query);
       
        
        if( $stmt->execute([$course_id,$question, $optionA, $optionB, $optionC, $optionD, $answer]))
        {
            return true;
        }else{
    
            throw new Exception ("Module can not be created");
        }

    }

    
    public function getQuiz(){
        $sql= $this->connect()->prepare('SELECT * FROM quiz');
        if($sql->execute()){
            return $sql;
        }else{
            return false;
        }

        
        
        
       
    }


    public function deletequiz($courseId) {
            
        $sql = "DELETE FROM quiz WHERE quiz_id = ?";
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