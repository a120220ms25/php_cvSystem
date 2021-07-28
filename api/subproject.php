
_<?php include_once '../base.php';


//新增新資料 text2
if(isset($_POST['text2'])){
    foreach($_POST['text2'] as $key => $text){
        if(!empty($text)){
            $new['content']=$text;
            $new['sh']=1;
            $new['parent']=$_POST['parent'];
            $Project->save($new);
        }
    }
}

//編輯舊資料 text
if(isset($_POST['text'])){
    foreach ($_POST['id'] as $key => $id) {
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $Project->del($id);
        }else{
            $row=$Project->find($id);
            print_r ($row);
            
            $row['content']=$_POST['text'][$key];
            // print_r ($_POST['text'][$key]);
            // print_r ($row['content']);
            // $row['href']=$_POST['href'][$key];
            $Project->save($row);
        }
    }
}


to("../backend.php?do=project");
?>