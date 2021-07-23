<?php include_once '../base.php';?>

<h3 class="cent"><?=$as['news'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
    <table  class="auto">
      <tr>
        <td><?=$hs['news']?>:</td>
        <td>
          <textarea name="news" id="" cols="10" rows="1"></textarea>
        </td>
      </tr>
      <tr>
        <td</td>
      
      </tr>
    </table>
    <div class="cent">
      <input type="submit" value="新增">
      <input type="reset" value="重置">
    </div>

</form>
