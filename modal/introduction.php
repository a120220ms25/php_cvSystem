<?php include_once '../base.php';?>

<h3 class="cent mt-3 fs-6 "><?=$as['introduction'];?><h3>
<hr>

<form action="api/add.php" method="post" >
<table style="margin:auto;">
    <tr>
        <td class="fs-6" style="text-align:right">自我介紹：</td>
        <td>
         <textarea class="fs-6" name="introduction" id="" cols="30" rows="3"></textarea>
        </td>
    </tr>
</table>
<div class="cent">
    <input class="fs-6" type="submit" value="新增">
    <input class="fs-6" type="reset" value="重置">
    <input class="fs-6" type="hidden" name="table" value="introduction">
</div>
</form>