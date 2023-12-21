<?php

// Headers


if($_POST){
    require "../../controller/quizcontroller.php";
    $quiz = new QuizController();
    $quiz->question  = strip_tags(trim($_POST['question']));
    $quiz->course = (int) strip_tags(trim($_POST['course']));
    $quiz->optionA = strip_tags(trim($_POST['optionA']));
    $quiz->optionB = strip_tags(trim($_POST['optionB']));
    $quiz->optionC = strip_tags(trim($_POST['optionC']));
    $quiz->optionD = strip_tags(trim($_POST['optionD']));
    $quiz->answer = strip_tags(trim($_POST['answer']));

    echo $quiz->Create();
}else{
    echo json_encode(["message"=>"error"]);
}

?>