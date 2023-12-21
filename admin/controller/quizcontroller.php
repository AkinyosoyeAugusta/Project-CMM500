<?php

require "../../model/Quiz.php";
class QuizController extends Quiz{
    public $question;
    public $course;
    public $optionA;
    public $optionB;
    public $optionC;

    public $optionD;
    public $answer;
   

    public $result;

    private function emptyInput(){
       
        if(empty($this->question) || empty ($this->course) || empty ($this->optionA) || empty ($this->optionB) || empty ($this->optionC) || empty ($this->optionD) || empty ($this->answer)){

            $this->result = false;
        }else{
            $this->result = true;
        }

        return $this->result;
    }

    public function Create(){
        if($this->emptyInput()){
            if($this->setQuiz($this->course,$this->question,$this->optionA,$this->optionB,$this->optionC,$this->optionD,$this->answer)){
                return json_encode(["message"=>"successful","status"=>201]);
            }else{
                return json_encode(["message"=>"error","status"=>401]);
            }
            

        }else{
            return json_encode(["message"=>"empty fields","status"=>401]);
        }
    }
}

?>