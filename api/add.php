_<?php include_once '../base.php';

$db= new DB($_POST['table']);
$table = $_POST['table'];



switch($table){
  case 'photo':
    if(isset($_FILES['photo'])){
      // 把檔案移動到指定資料夾  然後把檔案存到資料庫
    move_uploaded_file($_FILES['photo']['tmp_name'],"../img/".$_FILES['photo']['name']);
    $data['photo']=$_FILES['photo']['name'];
    }

  break;

  case 'about':
  $name=$_POST['name'];
  $About->save(['id'=>1,'name'=>$name]);
  break;

  case 'introduction':
  $introduction=$_POST['introduction'];
  $Introduction->save(['sh'=>1,'content'=>$introduction]);
  break;

  case 'contact':
    $title=$_POST['title'];
    $content=$_POST['content'];
    $Contact->save(['sh'=>1,'title'=>$title,'content'=>$content]);
    break;

  default: 

 
}

 $db->save($data);


// if(isset($_FILES['photo'])){
//   // 把檔案移動到指定資料夾  然後把檔案存到資料庫
// move_uploaded_file($_FILES['photo']['tmp_name'],"../img/".$_FILES['photo']['name']);
// $data['photo']=$_FILES['photo']['name'];
// }

// $db->save($data);



to("../backend.php?do=$table");


