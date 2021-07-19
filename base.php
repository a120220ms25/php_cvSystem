<?php 
session_start();
date_default_timezone_set("Asia/Taipei");



class DB{
  private $dsn="mysql:host=localhost;charset=utf8;dbname=db01";
  private $root='root';
  private $password='';
  private $table;
  private $pdo;

  public function __construct($table){
    $this->table=$table;
    $this->pdo=new PDO($this->dsn,$this->root,$this->password);
  }
 

  //function01=>all 撈出資料
  // ...不定參數，不確定參數會有幾個，但都會放到陣列中，如果有多個參數這個參數要放到最後
  //select * from table
  //select * from table (where col='qqq' && col2='www'...order by limit)多筆特定資料
 
  //$arg[] [陣列] [sql字串] [陣列,sql字串]
 
  public function all(...$arg){
    $sql="select * from $this->table ";
   
    if(isset($arg[0])){
           if(is_array($arg[0])){
               //陣列["欄位"=>"值","欄位"=>"值"]
               //  where `欄位＝'值' &&  `欄位＝'值'
              //  要把陣列參數轉換成字串
               foreach($arg[0] as $key => $value){
                $tmp[] = sprintf("`%s`='%s'",$key,$value);
               }
               $sql = $sql. " where " . implode(" && ", $tmp);
           }else{
             //是字串
             $sql = $sql . $arg[0];
           }
           if(isset($arg[1])){
            //  當他是字串
             $sql = $sql . $arg[1];
           }
    }
    // echo $sql;
    // fetchAll是二維陣列
    return $this->pdo->query($sql)->fetchAll();
  }

  // function02=>count(...$arg) 計算筆數
  public function count(...$arg){
    $sql="select count(*) from $this->table ";
   
    if(isset($arg[0])){
           if(is_array($arg[0])){
               //陣列["欄位"=>"值","欄位"=>"值"]
               //  where `欄位＝'值' &&  `欄位＝'值'
              //  要把陣列參數轉換成字串
               foreach($arg[0] as $key => $value){
                $tmp[] = sprintf("`%s`='%s'",$key,$value);
               }
               $sql = $sql. " where " . implode(" && ", $tmp);
           }else{
             //是字串
             $sql = $sql . $arg[0];
           }
           if(isset($arg[1])){
            //  當他是字串
             $sql = $sql . $arg[1];
           }
    }
    // echo $sql;
    // column裡面可以放第幾個欄位 dafault是0
    //fetchColumn return 值 幾筆
    return $this->pdo->query($sql)->fetchColumn();
  }

    // function03=>find($id) 取得單筆資料 指定id或指定條件
    // 參數放num=>id 放string=>sql語法 放[]=>where後面的語句
    public function find($id){
      $sql="select * from $this->table ";

      // 判斷是陣列或是id
      if(is_array($id)){
                 foreach($id as $key => $value){
                  $tmp[] = sprintf("`%s`='%s'",$key,$value);
                 }
                 $sql = $sql. " where " . implode(" && ", $tmp);
             }else{
               //是字串
               $sql = $sql. " where `id`='$id' ";
             }
          
      
      // echo $sql;
      // PDO::FETCH ASSOC只留下欄位和值
      return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

// function04=>del($id)  刪除資料
 public function del($id){
  $sql="delete from $this->table ";

// 判斷是陣列或是id
  if(is_array($id)){
             foreach($id as $key => $value){
              $tmp[] = sprintf("`%s`='%s'",$key,$value);
             }
             $sql = $sql. " where " . implode(" && ", $tmp);
         }else{
           //是字串
           $sql = $sql. " where `id`='$id' ";
         }
      
  
  // echo $sql;
  // 刪除不需要return資料 所以不用query查詢->fetch回傳資料
  // exec回傳結果 >1成功0失敗
  return $this->pdo->exec($sql);
}


// function05=>save($arr) 規定傳入參數一定是一個陣列 (把insert 和  updatet 寫成一個function)


// 有id就是要更新，沒有id是要更新
public function save($arr){
  if(isset($arr['id'])){
    //update
    // update user set `name`='cehen',`add`='kao' where id='2'
    foreach($arr as $key => $value){
      $tmp[]=sprintf("`%s`='%s'",$key,$value);
    }
    $sql = "update $this->table set ".implode(',',$tmp)." where `id` = '{$arr['id']}' ";
       
  }else{
    //insert
    // insert into(`name`,`add`,`tel,) values ('amy','taipei','0911111111')
    // array_keys()
    //array_values()
    // $tmp = []
    $sql =" insert into  $this->table 
                                  (`".implode("`,`" , array_keys($arr))."`) values 
                                  ('".implode("','" , $arr)."')";
                              
  }
  //exec  return 1/0
  // echo $sql;
  return $this->pdo->exec($sql); 
}

// function06=>to($url) 網頁導向功能

}

function to($url){
  header("location:".$url);
}


$Member = new DB("member");
$About = new DB("about");
$Skills = new DB("skill");
$Project = new DB("project");
$Work = new DB("work");
$Education = new DB("education");

?>