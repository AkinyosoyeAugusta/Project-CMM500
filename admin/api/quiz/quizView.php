<?php

// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require "../../model/Quiz.php";


$quiz = new Quiz();
$quiz = $quiz->getQuiz();

if($quiz){
    $post_arr = [];
    $post_arr['data']= array();

    while($row = $quiz->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $post_item = [
            'quiz_id'=>trim($quiz_id),
            'course_id'=>trim($course_id),
            'question'=>htmlentities(strip_tags(trim($question))),
            'answer'=>htmlentities(strip_tags($answer)),
            'optionA'=>htmlentities(strip_tags(trim($optionA))),
            'optionB'=>htmlentities(strip_tags(trim($optionB))),
            'optionC'=>htmlentities(strip_tags(trim($optionC))),
            'optionD'=>htmlentities(strip_tags(trim($optionD))),
        ];

        array_push($post_arr['data'],$post_item);

    }
    //Turn to json
    echo json_encode($post_arr);

}else{
    echo json_encode(["message"=>"No items found"]);
}
?>