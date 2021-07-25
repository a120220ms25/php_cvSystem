
_<?php include_once '../base.php';


//新增新資料 text2
if(isset($_POST['text2'])){
    foreach($_POST['text2'] as $key => $text){
        if(!empty($text)){
            $new['title']=$text;
            $new['sh']=1;
            $new['parent']=$_POST['parent'];
            $Skills->save($new);
        }
    }
}

//編輯舊資料 text
if(isset($_POST['text'])){
    foreach ($_POST['id'] as $key => $id) {
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $Skills->del($id);
        }else{
            $row=$Skills->find($id);
            $row['title']=$_POST['text'][$key];
            $row['href']=$_POST['href'][$key];
            $Skills->save($row);
        }
    }
}


to("../backend.php?do=skills");
?>