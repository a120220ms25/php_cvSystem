<?php include_once '../base.php';

$ids = $_POST['id'];


foreach ($ids as $key => $id) {
  
  // 看del陣列有沒有存在 裡面的id是要刪除的資料
  if(isset($_POST['del']) && in_array($id,$_POST['del'])){
    $Photo->del($id);
  }else{
     $row=$Photo->find($id);

    // 如果sh有值且和id一樣 則要顯示
    if(isset($_POST['sh'])&& $_POST['sh']==$id){
        $row['sh'] = 1;
      }else{
        $row['sh'] = 0;
      }
      $Photo->save($row);
  }
 
}

to('../backend.php?do=photo');

?>