
<?php

require "../../config/database.php";
class User extends Database{

    public function Xps($xps, $user) {
        $stmt = $this->connect()->prepare('UPDATE users SET xps_coin = xps_coin + ? WHERE user_id = ?');
    
        if ($stmt->execute([$xps, $user])) {
            // Check the number of affected rows
            return "XPS updated successfully"; // or any message you prefer
        } else {
            // Execution failed, return false
            return "Failed to update XPS";
        }
    }
    

    public function Coin($coin,$user){
        $stmt = $this->connect()->prepare('UPDATE users SET earnings = earnings + ? WHERE user_id = ?');
       if($stmt->execute([$coin,$user])) {
      
        return  $stmt;
        
       }else{
        return false;
       }

    }

    public function checkUserCourseExistence($userId, $courseId)
    {
        $sql = $this->connect()->prepare("SELECT * FROM track WHERE user_id = ? AND course_id = ?");
        
        if ($sql->execute([$userId, $courseId])) {
            // Fetch the result
            $result = $sql->fetch(PDO::FETCH_ASSOC);
    
            // Check if the result exists
            if ($result) {
                // If exists, you can access the data, but for now, let's just return true
                return true;
            } else {
                // If doesn't exist, return false
                return false;
            }
        } else {
            // Handle the case where the query execution fails
            return false;
        }
    }
    
    public function insertUserCourseEarning($userId, $courseId, $earning,$score){

        $sql = $this->connect()->prepare("INSERT INTO track (user_id, course_id, win,score) VALUES (?, ?, ?,?)");
        $result = $sql->execute([$userId, $courseId, $earning,$score]);
        if($result){

        return json_encode(["message"=>"insert data successful"]);
        }else{
            return false;
        }

    }
    public function updateUserCourseEarning($userId, $courseId, $earning,$score)
    { 
        $sql = $this->connect()->prepare("UPDATE track SET win = ?,score = ? WHERE user_id = ? AND course_id = ?");
       
        $result = $sql->execute([$earning, $score,$userId, $courseId]);
        if($result){

            
            return json_encode(["message"=>"update data successful"]);
            }else{
                return false;
            }
    }





    public function UserRecord(){


                    $sql = $this->connect()->prepare("
                        SELECT
                            track.track_id,
                            track.user_id,
                            track.course_id,
                            track.win,
                            track.score,
                            users.username,
                            users.xps_coin,
                            users.earnings,
                            course.name,
                            course.image,
                            course.coin,
                            course.challenge
                        FROM
                            track
                        INNER JOIN users ON track.user_id = users.user_id
                        INNER JOIN course ON track.course_id = course.course_id
                    ");

                    if ($sql->execute()) {
                    // Process the result as needed
                    return  $sql;
                    } else {
                        // Handle the case where the query execution fails
                        return "Query failed.";
                    }                  


    }

    public function allUser(){

        $sql = $this->connect()->prepare("
                    SELECT *
                    FROM users
                    WHERE role != 'admin'
                ");

                if ($sql->execute()) {
                    

                    // Process the result as needed
                    return $sql;
                } else {
                    // Handle the case where the query execution fails
                    echo "Query failed.";
                }

                    }



                    
  
}



?>