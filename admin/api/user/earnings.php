<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require "../../model/User.php";

    $user = strip_tags(trim($_POST['user']));
    $course = strip_tags(trim($_POST['course']));
    $win = strip_tags(trim($_POST['win']));
    $score = strip_tags(trim($_POST['score']));
    $wincoin = strip_tags(trim($_POST['wincoin']));

    $coin = new User();
    $result = $coin->Coin($wincoin, $user);
    

    if ($result !== false) {
        // Return a success response
        echo json_encode(['status' => 200, 'message' => 'User experience points updated successfully']);
   
    } else {
        // Return an error response
        echo json_encode(['status' => 500, 'message' => 'Error updating user experience points']);
    
    }
    //
    $exists = $coin->checkUserCourseExistence($user, $course);

    if (!$exists) {
        // If the record doesn't exist, insert a new one
        $resp = $coin->insertUserCourseEarning($user, $course, $win, $score);
    } else {
        // If the record exists, update it
        $resp = $coin->updateUserCourseEarning($user, $course, $win, $score);
    }
    
    echo json_encode(["message" => $resp]);
    
      

} else {
    // Return an error response for invalid or missing data
    echo json_encode(['status' => 400, 'message' => 'Invalid data or request method']);
}
?>
