
  <!-- <div class="product-view-banner-section">
    <img src="images/aboutimg.jpg" alt="" title="" class="img-fluid productBannerImg" style="background-size: cover !important;">

    <div class="parallax-content-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Booking Success</h1>
            <span></span>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- <div class="pageTitleSection">
    <img src="images/customer-reviews.png" alt="" title="" class="img-fluid productBannerImg" style="background-size: cover !important;">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pageTitleContent">
            <h1>Travellers's Reviews</h1>
            <span>Travel experiences of our clients who recently returned from their trips.</span>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="breadcrumb-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul>
            <li><a href="#">Home</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li>
            <li><a href="#">Booking</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li>
            <li>Booking Success</li>
          </ul>
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of breadcrumb-nav -->

  <div class="package-view-overview">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-div">
            <div class="aboutUs">
              <!-- <div class="heading sc-sp-data-dis sticky-rt-main-title">Reviews</div> -->

              <div class="bookingSection">
                <div class="row">
                  <div class="col-md-12">
                    <div class="bookingContent">
                        <h1>Booking Success</h1>
                        <div class="bookingMainContent">
                        <p><strong><span style="color:green">Congratulation</span>, your booking has been successfully completed. Your booked package is <span style="color:#14659a"><?=$model->trip_name;?></span> which starts from <span style="color:#14659a"><?=$model->trip_start_date;?></span> and ends on <span style="color:#14659a"><?=$model->trip_end_date;?></span></strong> </p>
                        <p><strong>Your booking number is <span style="color:#14659a">#<?=$model->booking_no;?></span>, if any issue please contact our support team</strong> </p>
                        
                        </div>
                      </div>
                  </div><!-- End of col-md-8 -->

                </div><!-- End of row -->
              </div>


            </div><!-- End of aboutUs -->
          </div>
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of package-view-overview -->
