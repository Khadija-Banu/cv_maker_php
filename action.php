<?php


// print_r($_POST);

$conn=new PDO('mysql:host=localhost;dbname=add_more','root', '');

foreach($_POST['exam_title'] as $key=>$value){
    $sql='insert into items(title,institute,result,passing_year,duration) values (:title,:institute,:result,:passing_year,:duration)';
    var_dump($sql);
    $stmt->execute([
        'title'=>$value,
        'institute'=>$_POST['institute'][$key],
        'result'=>$_POST['result'][$key],
        'respassing_yearult'=>$_POST['passing_year'][$key],
        'duration'=>$_POST['duration'][$key]
    ]);

}
echo 'item successgull';