<?php
$sql = "select *from {{%seo}} where slug='sitemap'";
$result = Yii::$app->db->createCommand($sql)->queryOne();
$this->title = $result ?$result['title']:'Our Sitemap';
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $result ?$result['description']:'Our Sitemap'
]); 
Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $result ?$result['keywords']:'Our Sitemap'
]); 
?>
  <div class="product-view-banner-section">
    <img src="images/aboutimg.jpg" alt="" title="" class="img-fluid productBannerImg" style="background-size: cover !important;">

    <div class="parallax-content-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>About Mountain Sherpa Trekking & Expeditions</h1>
            <span>Sherpa Owned & Operated Company since 1998 / 15,000+ Happy Guests </span>
          </div>
        </div>
      </div>
    </div>
  </div>

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
            <!-- <li><a href="#">About</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li> -->
            <li>Sitemap</li>
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
              <div class="siteMap">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li>
                    <a href="#">Destinations</a>
                    <ul>
                      <li>
                        <a href="#">Nepa</a>
                        <ul>
                          <li><a href="#">Everest Region</a></li>
                          <li><a href="#">Langtang Region</a></li>
                          <li><a href="#">Peak Climbing</a></li>
                          <li><a href="#">Annapurna Region</a></li>
                          <li><a href="#">Short Treks in Nepal</a></li>
                          <li><a href="#">Camping Trek in Nepal</a></li>
                          <li><a href="#">Off the beaten Treks</a></li>
                          <li><a href="#">6000 M Peaks</a></li>
                          <li><a href="#">Best Treks in Nepal</a></li>
                          <li><a href="#">Nepal Cultural Tour</a></li>
                          <li><a href="#">Nepal Adventure tours</a></li>
                          <li><a href="#">Long Treks</a></li>
                          <li><a href="#">Nepal Luxury Trekking</a></li>
                          <li><a href="#">Expeditions above 7000 M</a></li>
                          <li><a href="#">Peaks Above 8000 meters</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Tibet</a></li>
                      <li><a href="#">Bhutan</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Trips</a>
                    <ul>
                      <li><a href="#">Day Tours</a></li>
                      <li><a href="#">Tours in Nepal</a></li>
                      <li><a href="#">Trekking in Nepal</a></li>
                      <li><a href="#">Peak Climbing</a></li>
                      <li><a href="#">Tibet Tours</a></li>
                      <li><a href="#">Hiking in Nepal</a></li>
                      <li><a href="#">Tibet Cultural Tour</a></li>
                      <li><a href="#">Bhutan Festival Tours</a></li>
                      <li><a href="#">Bhutan Cultural Tour</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Special Trips</a></li>
                  <li><a href="#">Luxury Trips</a></li>
                  <li>
                    <a href="#">Packages</a>
                    <ul>
                      <li><a href="#">Manaslu Expedition</a></li>
                      <li><a href="#">Everest Expeditions</a></li>
                      <li><a href="#">Tilicho Peak Expeditions</a></li>
                      <li><a href="#">Annapurna South Expeditions</a></li>
                      <li><a href="#">Baruntse Expedition</a></li>
                      <li><a href="#">Himlung Himal Expedition</a></li>
                      <li><a href="#">Nepal to Tibet Everest base camp Tour</a></li>
                      <li><a href="#">Luxury Nepal, Tibet & Bhutan Tour</a></li>
                      <li><a href="#">Nepal Jungle safari & wildlife tour</a></li>
                      <li><a href="#">Everest base camp Heli Trek</a></li>
                      <li><a href="#">Kathmandu to Tibet Tour</a></li>
                      <li><a href="#">Lhasa and Holy Lake Namtso Tour</a></li>
                      <li><a href="#">Tamang Heritage trail Trek</a></li>
                      <li><a href="#">Thimphu Tshechu festival</a></li>
                      <li><a href="#">Nepal Heritage Luxury Tour</a></li>
                      <li><a href="#">Druk Path Trek with cultural Tour in Bhutan</a></li>
                      <li><a href="#">Naya Kanga Peak Climbing</a></li>
                      <li><a href="#">Island peak expedition</a></li>
                      <li><a href="#">Annapurna Base Camp Trek 7 days</a></li>
                      <li><a href="#">Tiji Festival Trek</a></li>
                      <li><a href="#">Mera Peak climb by Phaplu</a></li>
                      <li><a href="#">Volunteering in Nepal</a></li>
                      <li><a href="#">Nepal Luxury Tour</a></li>
                      <li><a href="#">Nepal Helicopter Tour</a></li>
                      <li><a href="#">Tsum valley trek</a></li>
                      <li><a href="#">Rara Lake Trek</a></li>
                      <li><a href="#">Numbur Cheese Circuit trek</a></li>
                      <li><a href="#">Nar Phu Valley Trek</a></li>
                      <li><a href="#">Mardi Himal Trek</a></li>
                      <li><a href="#">Kathmandu –Everest base camp Lhasa Tour</a></li>
                      <li><a href="#">Nepal,Tibet,Bhutan & India Tour</a></li>
                      <li><a href="#">Annapurna sanctuary trek</a></li>
                      <li><a href="#">Nepal and India Golden triangle tour</a></li>
                      <li><a href="#">Nepal and Bhutan Tour</a></li>
                      <li><a href="#">Bhutan,Nepal and Tibet Tours</a></li>
                      <li><a href="#">Mani Rimdu Festival Trek in Everest</a></li>
                      <li><a href="#">Singu Chuli climbing</a></li>
                      <li><a href="#">Tharpu Chuli (Tent Peak) climbing</a></li>
                      <li><a href="#">Lobuche East Peak Climbing</a></li>
                      <li><a href="#">Pisang Peak Climbing</a></li>
                      <li><a href="#">Chulu west peak climbing</a></li>
                      <li><a href="#">Luxury Everest Base camp trek</a></li>
                      <li><a href="#">Luxury Annapurna Everest Trek</a></li>
                      <li><a href="#">Nepal Buddhist pilgrimage tour</a></li>
                      <li><a href="#">Everest helicopter Trek</a></li>
                      <li><a href="#">Annapurna Adventure Tour</a></li>
                      <li><a href="#">Best Adventure tour in Nepal</a></li>
                      <li><a href="#">Everest adventure Tour</a></li>
                      <li><a href="#">Nepal Budget Tour</a></li>
                      <li><a href="#">Trek, Rebuild & Volunteering</a></li>
                      <li><a href="#">Gosaikunda lake trek</a></li>
                      <li><a href="#">Lower Dolpo Trekking</a></li>
                      <li><a href="#">Makalu Base Camp Trekking</a></li>
                      <li><a href="#">Everest, Bhaktapur & Nagarkot Tour</a></li>
                      <li><a href="#">Hiking around Kathmandu Valley</a></li>
                      <li><a href="#">Chisopani and Nagarkot Trek</a></li>
                      <li><a href="#">Trishuli River Rafting one day</a></li>
                      <li><a href="#">Monastery & Stupa Day Tour</a></li>
                      <li><a href="#">The Hidden lake and Glacier trek</a></li>
                      <li><a href="#">The Whole of Everest part trek</a></li>
                      <li><a href="#">Annapurna View Comfort trek</a></li>
                      <li><a href="#">Trekking the Annapurna far and wide</a></li>
                      <li><a href="#">Tilicho Lake and Mesokanto Pass Trek</a></li>
                      <li><a href="#">Machhapuchhre Model Trek</a></li>
                      <li><a href="#">Bhutan Cultural Experience Tour</a></li>
                      <li><a href="#">A Glimpse of Bhutan</a></li>
                      <li><a href="#">Annapurna Circuit Trek</a></li>
                      <li><a href="#">Annapurna Round Trek</a></li>
                      <li><a href="#">Gokyo-Cholo Pass Everest base camp Trek</a></li>
                      <li><a href="#">Langtang Valley Trek</a></li>
                      <li><a href="#">Manaslu & Annapurna High Passes</a></li>
                      <li><a href="#">Manaslu circuit Trek</a></li>
                      <li><a href="#">Mountains and Monasteries Trek</a></li>
                      <li><a href="#">Nepal Home Stay & Cultural Tour</a></li>
                      <li><a href="#">Nepal mountain bike tour</a></li>
                      <li><a href="#">Rafting to Trekking & Paragliding</a></li>
                      <li><a href="#">Chulu Far East Climbing</a></li>
                      <li><a href="#">Island Peak Climbing</a></li>
                      <li><a href="#">Mera Peak Climbing-19 Days</a></li>
                      <li><a href="#">Saribung Peak Climbing</a></li>
                      <li><a href="#">Best of Nepal Tour</a></li>
                      <li><a href="#">Kathmandu and Nagarkot Tour</a></li>
                      <li><a href="#">Kathmandu and Pokhara Tour</a></li>
                      <li><a href="#">Kathmandu,Chitwan and Pokhara Tour</a></li>
                      <li><a href="#">Adventure Tour in Nepal</a></li>
                      <li><a href="#">Trek Nepal & Bungy Jump</a></li>
                      <li><a href="#">Jiri Gokyo Everest Base camp trek</a></li>
                      <li><a href="#">Gokyo Valley Trek</a></li>
                      <li><a href="#">Trekking Holy Hills and Holy Lakes</a></li>
                      <li><a href="#">Everest View Trek</a></li>
                      <li><a href="#">Ghorepani poon hill trek</a></li>
                      <li><a href="#">Kopra Ridge Trek</a></li>
                      <li><a href="#">Shivapuri day hiking Tours</a></li>
                      <li><a href="#">Everest High Passes Trekking</a></li>
                      <li><a href="#">Gokyo Valley Renjo La Pass Trek</a></li>
                      <li><a href="#">Everest Circuit Trek</a></li>
                      <li><a href="#">Jiri To Everest Base Camp Trek</a></li>
                      <li><a href="#">Everest Base Camp Trek</a></li>
                      <li><a href="#">Mustang Trek</a></li>
                      <li><a href="#">Lhasa Tour- 4 Days</a></li>
                      <li><a href="#">Annapurna Base Camp Trek</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Blog</a>
                    <ul>
                      <li><a href="#">Why is tourism a flourishing industry in Nepal ???</a></li>
                      <li><a href="#">How Tough is Mera Peak? 10 Tips for a Safe and Successful Climb !!!</a></li>
                      <li><a href="#">why it is important to "Visit Nepal 2020" to get once in a lifetime experience ?</a></li>
                      <li><a href="#">Why Luxury trekking in Everest Region is the perfect choice?</a></li>
                      <li><a href="#">Training and Preparation for Annapurna Base Camp Trek</a></li>
                      <li><a href="#">Top 10 reasons to trek to Upper Mustang</a></li>
                      <li><a href="#">Ultimate Guide to Gosaikunda Lake and Langtang Valley Trek</a></li>
                      <li><a href="#">15 Things You Need To Know Before Trekking To Annapurna Base Camp</a></li>
                      <li><a href="#">15 Things You Need to Know Before Trekking to Everest Base Camp</a></li>
                      <li><a href="#">10 Reasons The Manaslu and Tsum Valley Trek Needs To Be On Your Nepal Trekking Bucket List</a></li>
                      <li><a href="#">How much does it cost to Annapurna round trek?</a></li>
                      <li><a href="#">Top 7 Reasons Why You Should Do the Annapurna circuit Trek</a></li>
                      <li><a href="#">My Everest Base Camp Trek experience with this Sherpa Company</a></li>
                      <li><a href="#">How to Choose best Sherpa Guide for Everest Base Camp Trek?</a></li>
                      <li><a href="#">How to trek Everest base camp safely?</a></li>
                      <li><a href="#">Everest Base Camp Trek tea houses</a></li>
                      <li><a href="#">Best Time to Trek Everest Base Camp</a></li>
                      <li><a href="#">How to choose the best travel agency for Your Nepal Tour and Trekking</a></li>
                      <li><a href="#">Why Nepal is the best country for Adventure Travel</a></li>
                      <li><a href="#">The 7 Best Himalaya trekking in 2019</a></li>
                      <li><a href="#">Nepal Manaslu trekking Photos 2018</a></li>
                      <li><a href="#">Manaslu trek difficulty: How Difficult is the Manaslu trek?</a></li>
                      <li><a href="#">Nepal Trekking Guide: Top 7 Best treks in Nepal</a></li>
                      <li><a href="#">Best Sherpa Trekking & Climbing Guide in Nepal</a></li>
                      <li><a href="#">How to get fit for Everest Base Camp Trek</a></li>
                      <li><a href="#">Tengboche Monastery</a></li>
                      <li><a href="#">kala patthar Nepal</a></li>
                      <li><a href="#">Namche Bazaar</a></li>
                      <li><a href="#">Best Time to trek in Nepal</a></li>
                      <li><a href="#">Everest base camp trek 14 Days</a></li>
                      <li><a href="#">Everest base camp trek in top 10 Photos</a></li>
                      <li><a href="#">Sherpa guides</a></li>
                      <li><a href="#">Best Everest Base Camp Trek Company</a></li>
                      <li><a href="#">How to Prepare for Everest Base Camp Trek?</a></li>
                      <li><a href="#">Top 10 Everest Base Camp Trek Packages</a></li>
                      <li><a href="#">Why are Sherpa Guides best for Mount Everest Base Camp Trek?</a></li>
                      <li><a href="#">Mount Everest Base Camp Trek details itinerary 2018</a></li>
                      <li><a href="#">Mount Everest Base Camp trek 2018 Ultimate Guide</a></li>
                      <li><a href="#">Everest base camp trek itinerary</a></li>
                      <li><a href="#">How to choose best Company for Nepal trekking</a></li>
                      <li><a href="#">How to Choose and Prepare Your First Trek in Nepal</a></li>
                      <li><a href="#">Everest Base camp trek 2018</a></li>
                      <li><a href="#">The Sherpas and Everest</a></li>
                      <li><a href="#">Best trekking in Nepal</a></li>
                      <li><a href="#">How Much Does the Everest Base Camp Trek Cost?</a></li>
                      <li><a href="#">5 Best Annapurna hike and treks</a></li>
                      <li><a href="#">Everest base camp trek packing list</a></li>
                      <li><a href="#">7 Most essential Everest Base camp trek Tips</a></li>
                      <li><a href="#">Increased number of permit seekers to scale Mt. Everest</a></li>
                      <li><a href="#">The National Geographic has put Pokhara, the Lake City, of Nepal on its list of Best Spring Trips 2017.</a></li>
                      <li><a href="#">Merry Christmas & advance happy New Year 2017</a></li>
                      <li><a href="#">Lonely Planet says Nepal the world's best value destination for 2017</a></li>
                      <li><a href="#">Everest base camp trek difficulty</a></li>
                      <li><a href="#">Annapurna base camp trek difficulty</a></li>
                      <li><a href="#">Best treks in nepal</a></li>
                      <li><a href="#">Everest base camp trek reviews</a></li>
                      <li><a href="#">Great Welcome for Wonderful trek</a></li>
                      <li><a href="#">Best Family Trekking & tours holiday in Nepal</a></li>
                      <li><a href="#">Best of Annapurna Round trek & Everest base camp Trek</a></li>
                      <li><a href="#">Trek for two adventure ladies from Singapore</a></li>
                      <li><a href="#">UK Prince Harry rafts at Bardiya National Park</a></li>
                      <li><a href="#">Prince Harry's Patan Durbar Square visit in photos</a></li>
                      <li><a href="#">Prince Harry is on a five-day visit to Nepal</a></li>
                      <li><a href="#">Mr. Pasang Sherpa Managing director of Mountain Sherpa Trekking speaking on Cincinnati enquirer.</a></li>
                      <li><a href="#">We will be at Dallas adventure Travel Show (30-31 Jan. 2016)</a></li>
                      <li><a href="#">ANNAPURNA TREKKING REGION IS SAFE</a></li>
                      <li><a href="#">Most of the villages on Everest trail safe: Report</a></li>
                      <li><a href="#">Is Everest Base Camp Trek Safe after Nepal Earthquake</a></li>
                      <li><a href="#">Is Nepal safe to travel after earthquakes</a></li>
                      <li><a href="#">Why visiting Nepal after Earthquake can be your most fulfilling Trip? 12 Reasons</a></li>
                      <li><a href="#">We delivered direct humanitarian aid to villages throughout the poverty-stricken Himalayan region.</a></li>
                      <li><a href="#">We successfully distributed immediate relief items to 250 of families in Sindhupalchok.</a></li>
                      <li><a href="#">Knowing Kathmandu</a></li>
                      <li><a href="#">Record number of climbers likely to make Everest bid</a></li>
                      <li><a href="#">List of mountains of Nepal</a></li>
                      <li><a href="#">About Sherpa People</a></li>
                      <li><a href="#">Nepal Travel information</a></li>
                      <li><a href="#">Essentials before getting started with Nepal Trek</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">News Event</a>
                    <ul>
                      <li><a href="#">Sir Edmund Hillary: Son Peter says life with his father was</a></li>
                      <li><a href="#">China bans non-climbers from Mount Everest base camp</a></li>
                      <li><a href="#">Danish Prince’s Visit reflects that Nepal is Safe for Travel</a></li>
                      <li><a href="#">Nepal is Safe say European Journalists</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Terms</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div><!-- End of siteMap -->
            </div><!-- End of aboutUs -->
          </div>
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of package-view-overview -->
