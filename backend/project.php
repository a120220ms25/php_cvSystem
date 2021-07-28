<div style="width:99%;  margin:auto; overflow:auto; class="p-4">
    <div class="container d-flex flex-wrap px-5 py-2">
    <p class="col-lg-1 titleString fs-6 p-3 fw-bold mb-0"><?=$ts[$do]?>
        <span class="color01"></span>
    </p>
    <form class="col-lg-11" method="post" action="api/edit.php" enctype="multipart/form-data">
              <table class="w-100 table cent auto ">
                <thead>
                  <tr>
                    <th width="20%">作品標題</th>
                    <th width="30%">內容說明</th>
                    <th width="15%">圖片一</th>
                    <th width="15%">圖片二</th>
                    <th width="10%">顯示</th>
                    <th width="10%">刪除</th>  
                    <th width="10%"></th>  
                    <th ></th>  
                  </tr>
                </thead>
                <tbody>
                  <div class="table-title">
                  <?php
                  //  只撈出主選單 'parent'=>0
                    $rows=$Project->all(['parent'=>0,'sh'=>1]);
                    foreach($rows as $key=> $value){
                      ?>
                  </div>
                      <tr>
                        <td>
                        <input class="w-100"  style="font-size:8px" type="text" name='title[]' value="<?=$value['title'];?>">
                        <div class="gitlink ">請輸入gitHub連結網址:</div>
                        <input class="w-100"  style="font-size:8px" type="text" name='gitlink[]' value="<?=$value['gitlink'];?>">
                       
                        <div class="demolink">請輸入Demo連結網址:</div>   
                        <input class="w-100"  style="font-size:8px" type="text" name='demolink[]' value="<?=$value['demolink'];?>">
                       
                        </td>
                        <td>
                          <textarea style="font-size:8px" name="content[]" id="" cols="30" rows="7"><?=$value['content'];?></textarea>
                        </td>
                        <td>
                        <img src="img01/<?=$value['img01'];?>" style="width:120px;height:100px" class="cover" alt="">
                          <input type="button" value="更換圖檔"
                              onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/project_img.php?id=<?=$value['id'];?>&#39;)">    
                        </td>
                        <td>
                        <img src="img02/<?=$value['img02'];?>" style="width:120px;height:100px" class="cover" alt="">
                        <input type="button" value="更換圖檔"
                              onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/project_img02.php?id=<?=$value['id'];?>&#39;)">    
                        </td>
                        <td>
                        <input  type="checkbox" name="sh[]" value="<?=$value['id'];?>" <?=$value['sh']==1?"checked":"";?>>
                        </td>
                        <td>
                        <input type="checkbox" name="del[]" value="<?=$value['id'];?>">
                        </td>
                        <td>
                          <input type="button" value="編輯技能項目"
                              onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/subproject.php?id=<?=$value['id'];?>&#39;)">   
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



  
