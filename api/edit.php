<?php include_once '../base.php';

$ids = $_POST['id'];
$table = $_POST['table'];

$db = new DB($table);

foreach ($ids as $key => $id) {
  
  // 看del陣列有沒有存在 裡面的id是要刪除的資料
  if(isset($_POST['del']) && in_array($id,$_POST['del'])){
    $db->del($id);
  }else{
     $row=$db->find($id);

     switch($table){
      // 如果sh有值且和id一樣 則要顯示
      //當sh 是單選的時候
      case 'photo':
     // 如果sh有值且和id一樣 則要顯示 單選情況
      $row['sh']=(isset($_POST['sh']) && $_POST['sh']== $id ) ? 1 : 0;
      break;

      case 'introduction':
        // 如果sh有值且和id一樣 則要顯示 單選情況
         $row['content']=$_POST['introduction'][$key];
         $row['sh']=(isset($_POST['sh']) && $_POST['sh']== $id ) ? 1 : 0;
      break;

      case 'contact':
        $row['title']=$_POST['title'][$key];
        $row['content']=$_POST['content'][$key];
        $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh'])) ? 1 : 0;
      break;

      case 'skills':
          $row['title']=$_POST['title'][$key];
          $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh'])) ? 1 : 0;
      break;

      case 'project':
        $row['title']=$_POST['title'][$key];
        $row['content']=$_POST['content'][$key];
        $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh'])) ? 1 : 0;
      break;

      case 'work':
        $row['title']=$_POST['title'][$key];
        $row['content']=$_POST['content'][$key];
        $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh'])) ? 1 : 0;
      break;

      case 'education':
        $row['title']=$_POST['title'][$key];
        $row['content']=$_POST['content'][$key];
        $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh'])) ? 1 : 0;
      break;
      
      default: 
      // 多選情形
      // $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh'])) ? 1 : 0;
      // $row['text']=$_POST['text'][$key];
    }

  

   $db->save($row);
  }
 
}

to("../backend.php?do=$table");

?>