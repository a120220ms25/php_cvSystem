<?php include_once '../base.php';?>

<h3 class="cent"><?=$as['mvim'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
    <table class="auto">
      <tr>
        <td><?=$hs['mvim']?>:</td>
        <td><input type="file" name="image" src="" alt=""></td>
      </tr>
    </table>
    <div class="cent">
      <input type="submit" value="新增">
      <input type="reset" value="重置">
    </div>

</form>
