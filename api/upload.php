<?php include_once "../base.php";

$db=new DB($_POST['table']);
$row=$db->find($_POST['id']);





if(isset($_FILES['img01']['tmp_name'])){
    move_uploaded_file($_FILES['img01']['tmp_name'],'../img01/'.$_FILES['img01']['name']);
    $row['img01']=$_FILES['img01']['name'];
    $db->save($row);

}


if(isset($_FILES['img02']['tmp_name'])){
  move_uploaded_file($_FILES['img02']['tmp_name'],'../img02/'.$_FILES['img02']['name']);
  $row['img02']=$_FILES['img02']['name'];
  $db->save($row);

}

to("../backend.php?do=".$_POST['table']);