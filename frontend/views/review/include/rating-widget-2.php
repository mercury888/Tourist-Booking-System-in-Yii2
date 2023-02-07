<div class="package-view-ratinrating">
    <?php 
    $rating = round($rating);
    for($i=1;$i<=5;$i++){?>
        <?php if($rating>=$i){?>
            <i class="fa fa-star" aria-hidden="true"></i>
        <?php } else if($rating<$i && $rating>$i-1){?>
        <i class="fa fa-star-half-o" aria-hidden="true"></i>
       <?php } else { ?>
            <i class="fa fa-star-o" aria-hidden="true"></i>
       <?php }?>
    
    <?php }?>
    
</div><!-- end rating -->