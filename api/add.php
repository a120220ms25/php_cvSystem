_<?php include_once '../base.php';

$db= new DB($_POST['table']);


if(isset($_FILES['photo'])){
  // 把檔案移動到指定資料夾  然後把檔案存到資料庫
move_uploaded_file($_FILES['photo']['tmp_name'],"../img/".$_FILES['photo']['name']);
$data['photo']=$_FILES['photo']['name'];
}



$db->save($data);

to("../backend.php?do=".$_POST['table']);