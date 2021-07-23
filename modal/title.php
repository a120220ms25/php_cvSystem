<?php include_once '../base.php';?>

<h3 class="cent"><?=$as['title'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <td><?=$hs['title']?>:</td>
        <td><input type="file" name="image" src="" alt=""></td>
      </tr>
      <tr>
        <td>標題區替代文字:</td>
        <td>
          <input type="text" name="text" id="">
        </td>
      </tr>
    </table>
    <div class="cent">
      <input type="submit" value="新增">
      <input type="reset" value="重置">
      <input type="hidden" name="table" value="title">
    </div>

</form>
