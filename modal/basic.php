<?php include_once "../base.php";?>

<h3 class='cent mt-3 fs-6'><?=$as['basic'];?></h3>
<hr>

<form action="api/add.php" method="post" >
<table style="margin:auto;">
    <tr>
        <td class="fs-6" style="text-align:right">基本資料：</td>
        <td class="fs-6 " ><input type="text" name="title"></td>
    </tr>
    <tr>
        <td class="fs-6" style="text-align:right">內容：</td>
        <td class="fs-6 "><input type="text" name="content"></td>
    </tr>
</table>
<div class="cent">
    <input class="fs-6" type="submit" value="新增">
    <input class="fs-6" type="reset" value="重置">
    <input type="hidden" name="table" value="basic">
</div>
</form>