<div class="row">
    <?php foreach($model as $pData){?>
        <div class="col-md-6">
            <?=$this->render("//package/include/single-package-layout-6",['model'=>$pData]);?>
        </div>
        <?php }?>
</div><!-- End of row -->