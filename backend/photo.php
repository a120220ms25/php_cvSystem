<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
  <p class="t cent botli"><?=$ts[$do]?></p>
  <hr>
  <form method="post" action="./api/edit.php">
    <table class="w-100 border border-info">
      <tbody>
        <tr>
          <td>大頭照</td>
          <td >使用此照片</td>
          <td>刪除</td>  
        </tr>
          <?php
          $rows=$Photo->all();
          foreach($rows as $key=> $value){
            ?>
            <tr>
              <td>
                <img src="img/<?=$value['photo'];?>" style="width:150px;height:150px" alt="">
              </td>
              <td>
                <input type="radio" name="sh" value="<?=$value['id'];?>" <?=$value['sh']==1?"checked":""?>>
              </td>
              <td>
                <input type="checkbox" name="del[]" value="<?=$value['id']?>">
                <input type="hidden" name="id[]" value="<?=$value['id']?>">
              </td>
          </tr>
          <?php
            }
          ?>
      </tbody>
    </table>
    <table>
      <tbody>
        <tr>
          <td width="200px"><input type="button"
          onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?=$do;?>.php&#39;)" 
              value="<?=$as[$do]?>" >
          </td>
          <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>
</div>