<?php if($model->video){?>
    <div class="reviewSectionVideo">
    <div class="video-testimonial-block">
        <!-- <div class="video-thumbnail"><img src="https://img.youtube.com/vi/zd9IWLYiIPc/maxresdefault.jpg" alt="" class="img-fluid"></div> -->
        <div class="video">
            <iframe width="100%" height="" src="https://www.youtube.com/embed/<?=$model->video->videocode;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <a href="#" class="video-play"></a>
    </div>
</div><!-- End of reviewSectionVideo -->
<?php }?>
