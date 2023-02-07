<?php
$sql = "select *from {{%seo}} where slug='home'";
$result = Yii::$app->db->createCommand($sql)->queryOne();
$this->title = $result['title'];
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $result['description']
]); 
Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $result['keywords']
]); 
?>
<?=$this->render('//layouts/includes/banner');?>
<?=$this->render('//layouts/includes/toptrekking');?>
<?=$this->render('//layouts/includes/experience');?>
<?=$this->render('//layouts/includes/trekandclimbingexp');?>
<?=$this->render('//layouts/includes/traveller-reivews');?>
<?=$this->render('//layouts/includes/luxurytravelexperience');?>
<?=$this->render('//layouts/includes/natureandculturalexp');?>
<?=$this->render('//layouts/includes/blogvideo');?>
<?php 
$sql = "select author,title,content,rating from {{%review}} where status = 2";
$results = Yii::$app->db->createCommand($sql)->queryAll();
$reivews = [];
if(!empty($results)){
    $i=0;foreach($results as $rData){
        $reivews[$i] = [
            "author" =>  [
                "@type" => "Person",
                "name" => $rData['author']
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" =>  "Mountain Sherpa Trekking"
            ],
            "description" => $rData['content'],
            "inLanguage" => "en",
            "reviewRating" => [
                "@type" => "Rating",
                "bestRating" => "5",
                "worstRating" => "1",
                "ratingValue" => $rData['rating']
            ]

        ];
   $i++; }
}
$reivew_str = json_encode($reivews);
?>

<script type="application/ld+json">
   {
     "@context": "http://schema.org",
     "@type": "Organization",
     "name": "<?=$this->title;?>",
     "url": "https://www.mountainsherpatrekking.com/",
     "logo": "https://www.mountainsherpatrekking.com/images/logo_footer.png",
      "description": "<?=$result['description'];?>",
   
     "image": [{
       "@type": "ImageObject",
       "url": "https://www.mountainsherpatrekking.com/images/frontend/main/MountainSherpa_1577260100.jpg",
       "height": 640,
       "width": 1350
   
     }],
   
     "AggregateRating": [{
       "@type": "AggregateRating",
       "ratingValue": "100",
       "ratingCount": "163",
       "bestRating": "100",
       "worstRating": "1"
     }],
   
     "address": [{
       "@type": "PostalAddress",
       "telephone": "+977-9851060947,  +977 14435828",
       "streetAddress": "Bhagwan Bahal, Dabali Marg-29",
       "addressLocality": "Thamel , Kathmandu",
       "addressRegion": "Bagmati",
       "postalCode": "44600"
   
     }],
   
   
     "sameAs": [
       "https://www.facebook.com/Mountainsherpatrek/",
       "https://twitter.com/MsherpaTrekking",
       "https://www.youtube.com/watch?v=zd9IWLYiIPc",
       "https://www.instagram.com/mountainsherpatrekking/",
       "https://www.tripadvisor.com/Attraction_Review-g293890-d7914898-Reviews-Mountain_Sherpa_Trekking_Expeditions-Kathmandu_Kathmandu_Valley_Bagmati_Zone_Cent.html",
     ],
   
   
   "review": <?=$reivew_str;?>
   
   }
               
  </script>

<script type="application/ld+json">
   {
     "@context": "http://schema.org",
     "@type": "WebSite",
     "name": "<?=$this->title;?>",
     "url": "https://www.mountainsherpatrekking.com/"
   
   },
  </script> 