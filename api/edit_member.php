<?php

include_once "../base.php";

// 傳兩筆資料要怎麼處理
$account=$_POST['account'];
$password=$_POST['password'];
$member=$_POST['member']; //signup login

$Member = new DB("member");

// echo $account;
$memberArr = $Member->all();


if($member =='login'){
  if(!$account){
    echo "<script>alert('帳號不得為空!'); location.href = '../index.php';</script>";
  }elseif(!$password){
    echo "<script>alert('密碼不得為空!'); location.href = '../index.php';</script>";
  }
}else{
  if(!$account){
    echo "<script>alert('帳號不得為空!'); location.href ='../index.php?do=signup';</script>";
  }elseif(!$password){
    echo "<script>alert('密碼不得為空!'); location.href ='../index.php?do=signup';</script>";
  }
}


if($member =='signup'){
  foreach ($memberArr  as $key => $value) {
      if (($value['account']) == $account) {
        echo "<script>alert('此帳號已註冊!'); location.href ='../index.php?do=signup';</script>";
        return;
      } 
  } 
  $Member->save(['account'=>$account,'password'=>$password]);
  echo "<script>alert('註冊成功，請重新登入!'); location.href = '../index.php';</script>";
}else{
  foreach ($memberArr  as $key => $value) {
    if ($value['account'] == $account && $value['password'] == $password ) {
      echo "<script>alert('登入成功，歡迎使用履歷表生成系統!'); location.href = '../backend.php';</script>";
    } 
  }
  echo "<script>alert('帳號或密碼錯誤，請重新登入!');location.href = '../index.php';</script>";
  return;
}


// 登入 和資料庫確認帳密是否正確=>正確導到後台主頁
// 註冊 把新的帳號密碼存到資料庫=>導到登入頁登入=>確認正確導到後台主頁


?>


