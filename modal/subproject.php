<?php include_once "../base.php";?>

<h3 class='cent fs-6 mt-3'>編輯技能項目</h3>
<hr>

<form action="api/subproject.php" method="post" enctype="multipart/form-data">
<table style="margin:auto;text-align:center" id='sub'>
    <tr>
        <td>技能項目</td>
        <td>刪除</td>
    </tr>
    <?php
        $rows=$Project->all(['parent'=>$_GET['id']]);
        foreach ($rows as $key => $value) {
            # code...
        
    ?>
    <tr>
        <td><input type="text" name="text[]" value="<?=$value['content'];?>"></td>
        <td>
            <input type="checkbox" name="del[]" value="<?=$value['id'];?>">
        </td>
        <input type="hidden" name="id[]" value="<?=$value['id'];?>">
    </tr>
    <?php
        }
    ?>

</table>
<div class="cent">
    <input type="submit" value="修改確定">
    <input type="reset" value="重置">
    <input type="button" value="更多次選單" onclick="more()">
    <!-- 把parent table 隨form過去 -->
    <input type="hidden" name="parent" value="<?=$_GET['id'];?>">
    <input type="hidden" name="table" value="project">
</div>
</form>

<script>
  // 點擊增加次選單
function more(){
    let str=`
                <tr>
                    <td><input type="text" name="text2[]"></td>            
                </tr>
            `
    $("#sub").append(str)

}


</script>