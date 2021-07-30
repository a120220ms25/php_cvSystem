<div style="width:99%;  margin:auto; overflow:auto; class="p-4">
    <div class="container row px-5 py-2">
        <p class="col-lg-2 titleString fs-6 p-3 fw-bold mb-0"><?=$ts[$do]?>
         <span class="color01"></span>
        </p>

        <div class="form col-10 row">
            <!-- 表單name -->
            <form class="col-lg-12 p-3 form-group" method="post" action="api/add.php" autocomplete="off">
              <div class="name d-flex align-items-center">
                <label for="name" ><span>姓名:&nbsp;</span></label>
                <input id="name" class="form-control" type="text" name="name" value="<?=$About->find(1)['name']?>">
                <input class="basicBtn checkBtn "  type="submit" value="修改確定">
                <input class="basicBtn" type="reset" value="重置">
                <input type="hidden" name="table" value="<?=$do?>">
            </from>
       </div>
   </div>
</div>




  