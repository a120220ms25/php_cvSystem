<?php include_once '../base.php';?>

<h3 class="cent mt-3"><?=$as['photo'];?><h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <td class="fs-6"><?=$hs['photo']?>:</td>
        <td class="fs-6"><input type="file" name="photo" src="" alt=""></td>
      </tr>
    </table>
    <div class="cent">
      <input class="fs-6" type="submit" value="新增">
      <input class="fs-6" type="reset" value="重置">
       <!-- 送隱藏欄位讓api知道是哪張table的 -->
      <input type="hidden" name="table" value="photo">
    </div>

</form>
