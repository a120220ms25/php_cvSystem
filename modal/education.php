<?php include_once "../base.php";?>

<h3 class='cent mt-3 fs-6'><?=$as['education'];?></h3>
<hr>

<form action="api/add.php" method="post" >
<table style="margin:auto;">
    <tr>
        <td class="fs-6" style="text-align:right">學校名稱/科系：</td>
        <td class="fs-6 " ><input type="text" name="title"></td>
    </tr>
    <tr>
        <td class="fs-6" style="text-align:right">年份：</td>
        <td class="fs-6"><input type="text" name="content"></td>
    </tr>
</table>
<div class="cent">
    <input class="fs-6" type="submit" value="新增">
    <input class="fs-6" type="reset" value="重置">
    <input type="hidden" name="table" value="education">
</div>
</form>