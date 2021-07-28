<?php include_once "../base.php";?>

<h3 class='cent mt-3 fs-6'><?=$as['project'];?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td class="fs-6" style="text-align:right">作品標題：</td>
        <td class="fs-6 " ><input type="text" name="title"></td>
    </tr>
    <tr>
        <td class="fs-6" style="text-align:right">gitHub連結網址：</td>
        <td class="fs-6 " ><input type="text" name="gitlink"></td>
    </tr>
    <tr>
        <td class="fs-6" style="text-align:right">Demo連結網址：</td>
        <td class="fs-6 " ><input type="text" name="demolink"></td>
    </tr>
    <tr>
        <td class="fs-6" style="text-align:right">內容說明：</td>
        <td><textarea name="content" id="" cols="30" rows="5"></textarea></td>
    </tr>
    <tr>
        <td class="fs-6" style="text-align:right">圖片一 ：</td>
        <td  class="fs-6" ><input type="file" name="img01" src="" alt=""></td>
    </tr>
    <tr>
        <td class="fs-6" style="text-align:right">圖片二 ：</td>
        <td  class="fs-6" ><input type="file" name="img02" src="" alt=""></td>
    </tr>
</table>
<div class="cent">
    <input class="fs-6" type="submit" value="新增">
    <input class="fs-6" type="reset" value="重置">
    <input type="hidden" name="table" value="project">
</div>
</form>