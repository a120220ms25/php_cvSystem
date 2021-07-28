<?php include_once '../base.php';?>

<h3 class="cent mt-3 fs-6"><?=$as['photo'];?><h3>
<hr>
<form action="api/upload.php" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td class="fs-6" style="text-align:right"><?=$hs['photo']?>:</td>
        <td  class="fs-6" ><input type="file" name="img02" src="" alt=""></td>
    </tr>
   
</table>
<div class="cent">
    <input  class="fs-6"  type="submit" value="新增">
    <input  class="fs-6"  type="reset" value="重置">
    <input type="hidden" name="table" value="project">
    <input type="hidden" name='id' value='<?=$_GET['id'];?>'>
</div>
</form>



