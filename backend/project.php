<div style="width:99%;  margin:auto; overflow:auto; class="p-4">
    <div class="container d-flex flex-wrap px-5 py-2">
    <p class="col-lg-2 titleString fs-6 p-3 fw-bold mb-0"><?=$ts[$do]?>
        <span class="color01"></span>
    </p>
    <form class="col-lg-10" method="post" action="api/edit.php">
              <table class="w-100 table cent auto ">
                <thead>
                  <tr>
                    <th width="20%">作品標題</th>
                    <th width="30%">內容說明</th>
                    <th width="15%">圖片一</th>
                    <th width="15%">圖片二</th>
                    <th width="10%">顯示</th>
                    <th width="10%">刪除</th>  
                    <th ></th>  
                  </tr>
                </thead>
                <tbody>
                  <div class="table-title">
                  <?php
                  //  只撈出主選單 'parent'=>0
                    $rows=$Project->all();
                    foreach($rows as $key=> $value){
                      ?>
                  </div>
                      <tr>
                        <td>
                        <input class="w-100" type="text" name='title[]' value="<?=$value['title'];?>">
                        </td>
                        <td>
                          <textarea name="content[]" id="" cols="30" rows="5"><?=$value['content'];?></textarea>
                        </td>
                        <td>
                        <img src="img01/<?=$value['img01'];?>" style="width:120px;height:100px" alt="">
                        </td>
                        <td>
                        <img src="img02/<?=$value['img02'];?>" style="width:120px;height:100px" alt="">
                        </td>
                        <td>
                        <input type="checkbox" name="sh[]" value="<?=$value['id'];?>" <?=$value['sh']==1?"checked":"";?>>
                        </td>
                        <td>
                        <input type="checkbox" name="del[]" value="<?=$value['id'];?>">
                        </td>
                    </tr>
                    <input type="hidden" name="id[]" value="<?=$value['id'];?>" >
                    <input type="hidden" name="table" value="<?=$do;?>">
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



  
