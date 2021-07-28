_<?php include_once '../base.php';

$db= new DB($_POST['table']);
$table = $_POST['table'];

if(isset($_FILES['photo'])){
  // 把檔案移動到指定資料夾  然後把檔案存到資料庫
move_uploaded_file($_FILES['photo']['tmp_name'],"../img/".$_FILES['photo']['name']);
$data['photo']=$_FILES['photo']['name'];
}


if(isset($_FILES['img01'])){
  // 把檔案移動到指定資料夾  然後把檔案存到資料庫
move_uploaded_file($_FILES['img01']['tmp_name'],"../img01/".$_FILES['img01']['name']);
$data2['img01']=$_FILES['img01']['name'];
}

if(isset($_FILES['img02'])){
  // 把檔案移動到指定資料夾  然後把檔案存到資料庫
move_uploaded_file($_FILES['img02']['tmp_name'],"../img02/".$_FILES['img02']['name']);
$data2['img02']=$_FILES['img02']['name'];
}



switch($table){

  case 'about':
    $name=$_POST['name'];
    $About->save(['id'=>1,'name'=>$name]);
  break;

  case 'introduction':
    $introduction=$_POST['introduction'];
    $Introduction->save(['content'=>$introduction]);
  break;

  case 'contact':
    $title=$_POST['title'];
    $content=$_POST['content'];
    $Contact->save(['title'=>$title,'content'=>$content]);
  break;

  case 'skills':
    $data['title']=$_POST['title'];
  break;

  case 'project':
    $title=$_POST['title'];
    $content=$_POST['content'];
    $gitlink=$_POST['gitlink'];
    $demolink=$_POST['demolink'];
    $img01 = $data2['img01'];
    $img02 = $data2['img02'];
    $Project->save(['title'=>$title,'content'=>$content,'img01'=>$img01,'img02'=>$img02,'gitlink'=>$gitlink,'demolink'=>$demolink]);
  break;

  case 'work':
    $title=$_POST['title'];
    $time=$_POST['time'];
    $content=$_POST['content'];
    $Work->save(['title'=>$title,'content'=>$content,'time'=>$time]);
  break;

  case 'education':
    $title=$_POST['title'];
    $content=$_POST['content'];
    $english=$_POST['english'];
    $Education->save(['title'=>$title,'content'=>$content,'english'=>$english]);
  break;

  case 'basic':
    $title=$_POST['title'];
    $content=$_POST['content'];
    $Basic->save(['title'=>$title,'content'=>$content]);
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


