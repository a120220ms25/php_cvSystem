<div style="width:99%;  margin:auto; overflow:auto; class="p-4">
<div class="container d-flex flex-wrap px-5 py-2">
<p class="col-lg-2 titleString fs-6 p-3 fw-bold mb-0"><?=$ts[$do]?>
    <span class="color01"></span>
</p>
<form class="col-lg-10" method="post" action="api/edit.php" autocomplete="off">
          <table class="w-100 table cent auto ">
            <thead>
              <tr>
                <th style="width:30%" >公司名稱(職稱)</th>
                <th style="width:30%">任職時間</th>
                <th>職務內容</th>
                <th style="width:5%">顯示</th>
                <th style="width:5%">刪除</th>  
              </tr>
            </thead>
            <tbody>
              <div class="table-title">
              <?php
                $rows=$Work->all();
                foreach($rows as $key=> $value){
                  ?>
              </div>
                  <tr>
                    <td>
                    <input class="w-100" type="text" name='title[]' value="<?=$value['title'];?>">
                    </td>
                    <td>
                    <input class="w-100" type="text" name='time[]' value="<?=$value['time'];?>">
                    </td>
                    <td>
                      <textarea name="content[]" id="" cols="20" rows="3"><?=$value['content'];?></textarea>
                    </td>
                    <td>
                      <input type="checkbox" name="sh[]" value="<?=$value['id'];?>" <?=$value['sh']==1?"checked":"";?>>
                    </td>
                    <td>
                      <input type="checkbox" name="del[]" value="<?=$value['id'];?>">
                      <input type="hidden" name="id[]" value="<?=$value['id'];?>" >
                      <input type="hidden" name="table" value="<?=$do;?>">
                    </td>
                </tr>
                <?php
                  }
                ?>
              <tr class="form-btns">
                <td width="200px">
                <input class="basicBtn" type="button"
                       onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?=$do;?>.php&#39;)" 
                       value="<?=$as[$do];?>">
                </td>
                <td class="btn-group">
                  <input class="basicBtn checkBtn"  type="submit" value="修改確定">
                  <input class="basicBtn" type="reset" value="重置">
                </td>
              </tr>
            </tbody>
          </table>
        </form>
  

</div>

</div>



  