<?php

// Headers

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require "../../model/Module.php";


$cour = new Module();
$check = $cour->CModule();

if($check){
    $post_arr = [];
    $post_arr['data']= array();

    while($row = $check->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $post_item = [
            'module_id'=> trim($module_id),
            'course_id'=>trim($course_id),
            'name'=>html_entity_decode(strip_tags(trim($name))),
            'title'=>html_entity_decode(strip_tags(trim($title))),
            'description'=>html_entity_decode(nl2br(strip_tags(trim($description)))),
            'content'=>html_entity_decode(nl2br(strip_tags($content))),
           
            'link'=>html_entity_decode($link),
            'material'=>$material,
            'poster'=>$poster,
            'posted' => $posted
            
        ];

        array_push($post_arr['data'],$post_item);

    }
    //Turn to json
    echo json_encode($post_arr);

}else{
    echo json_encode(["message"=>"No items found"]);
}
?>