<?php include_once '../base.php';?>

<h3 class="cent mt-3 fs-6 "><?=$as['skills'];?><h3>
<hr>

<form action="api/add.php" method="post" >
<table style="margin:auto;">
    <tr>
        <td class="fs-6" style="text-align:right">技能名稱：</td>
        <td>
            <input class="fs-6" type="text" name="title" id="">
        </td>
    </tr>
</table>
<div class="cent">
    <input class="fs-6" type="submit" value="新增">
    <input class="fs-6" type="reset" value="重置">
    <input class="fs-6" type="hidden" name="table" value="skills">
</div>
</form>