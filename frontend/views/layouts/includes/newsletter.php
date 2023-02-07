<div class="subscribe-newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8">
          <h1 class="newsletter-title">Subscribe for Newsletter</h1>
          <p>Sign up for our newsletter and dont loose your chance to win a free Everest Trek. Get alerts on amazing travels deals and latest news.</p>

          <div class="content input-group">
            <input type="email" id="newsletter-email" class="form-control" placeholder="Enter your email">
            <span class="input-group-btn">
            <button class="btn news-letter-btn" type="submit" data-aurl="<?=Yii::$app->urlManager->createUrl(['site/newsletter']);?>">Subscribe Now</button>
            </span>
          </div>
        </div><!-- End of col-md-8 -->

        <div class="col-md-2"></div>
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of subscribe -newsletter -->
<?php 
$js = <<<JS
$(".news-letter-btn").on('click',function(ev){
  var obj = $(this);
  var email = $("#newsletter-email").val();
  if(!email){
    alert("Email can't be empty");
  }else {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(regex.test(email)){
      $.ajax({
        type: 'post',
        url: obj.data('aurl'),
        data: { email : email},
        dataType: 'json',
        success: function(res){

        }
      })

    } else {
    alert(" Invalid email");

    }
  }
 
})
JS;
$this->registerJS($js)
?>