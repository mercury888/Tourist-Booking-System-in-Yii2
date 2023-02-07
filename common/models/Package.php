<?php

namespace common\models;

use Yii;
use common\models\PackageDesc;
use yii\behaviors\SluggableBehavior;
use yii\web\UploadedFile;    
use yii\helpers\Url;

/**
 * This is the model class for table "tbl_package".
 *
 * @property int $id
 * @property int $activity_id
 * @property int $subactivity_id
 * @property int $destination_id
 * @property int $region_id
 * @property string $name
 * @property string $duration
 * @property float $grade (0-5 rating)
 * @property string $image
 * @property string $map_image
 * @property int $book_now (0=> dont display book now btn; 1=> display)
 * @property int $enquire (0=> dont display enquire btn; 1=> display)
 * @property float $price
 * @property float $price_3 price for 3 star package
 * @property float $price_5 price for 5 star package
 * @property float $supplement_3 supplement for 3 star package
 * @property float $supplement_5 supplement for 5 star package
 * @property string $date_added
 * @property int $visible (0=>not visible; 1=>visible)
 * @property string $slug
 * @property int $highpriority 0=>no high priority; 1=> high priority
 * @property int $show_on_menu 0=no, 1=yes
 * @property string|null $other_data
 */
class Package extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'name',
                'immutable' => true,
                'ensureUnique' => true
                // 'slugAttribute' => 'slug',
            ],
            // BlameableBehavior::className(),
            // [
            //     'class' => TimestampBehavior::className(),
            //     'createdAtAttribute' => 'created_time',
            //     'updatedAtAttribute' => 'updated_time',
            //     'value' => time(),
            // ],
        ];
    }

    public $detail_form;
    // public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_package';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_id', 'destination_id', 'name', 'duration',
            'price_3', 'price_5', 'supplement_3', 'supplement_5','grade','visible','trip_style','trip_defficulty','tool_tip'], 'required'],

            [['activity_id', 'subactivity_id', 'destination_id', 'region_id', 'book_now', 'enquire', 'visible', 'highpriority', 'show_on_menu','region_id'], 'integer'],
            [['price', 'price_3', 'price_5', 'supplement_3', 'supplement_5'], 'number'],
            [['date_added','grade','overview_text'], 'safe'],
            [['other_data'], 'string'],
            // ['image','safe'],
            [['name', 'duration', 'map_image', 'slug'], 'string', 'max' => 255],
            ['image','validateImageField'],
            ['detail_form','validateDetailForm']
        ];
    }

    public function validateDetailForm(){
       $package_desc = new PackageDesc;
       $package_desc->attributes = $this->detail_form;
       if(!$package_desc->validate()) {
           $this->addError('detail_form',$package_desc->getErrors());
       }
    }


    public function saveMedia()  
    { 
        $instance = UploadedFile::getInstanceByName('image');
        $dirThumb = Yii::getAlias('@webroot/uploads/package');
        if ($instance) {
            // $image_name = $instance->baseName . '.' . $instance->extension;  
            $image_name = Yii::$app->security->generateRandomString(). '.' . $instance->extension;  
            $filePath =  'uploads/package/' . $image_name;
            $instance->saveAs($filePath);
            $this->image = Url::base(true) .'/'.$filePath;

        }else{
			if(!empty($this->oldAttributes)) $this->image = $this->oldAttributes['image'];
		}
        return true;
    }    

    public function validateImageField(){
        
        $this->addError("image",'Please provide the main package image');
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'activity_id' => Yii::t('app', 'Activity ID'),
            'subactivity_id' => Yii::t('app', 'Subactivity ID'),
            'destination_id' => Yii::t('app', 'Destination ID'),
            'region_id' => Yii::t('app', 'Region ID'),
            'name' => Yii::t('app', 'Name'),
            'duration' => Yii::t('app', 'Duration'),
            'grade' => Yii::t('app', 'Grade'),
            'image' => Yii::t('app', 'Image'),
            'map_image' => Yii::t('app', 'Map Image'),
            'book_now' => Yii::t('app', 'Book Now'),
            'enquire' => Yii::t('app', 'Enquire'),
            'price' => Yii::t('app', 'Price'),
            'price_3' => Yii::t('app', 'Price 3'),
            'price_5' => Yii::t('app', 'Price 5'),
            'supplement_3' => Yii::t('app', 'Supplement 3'),
            'supplement_5' => Yii::t('app', 'Supplement 5'),
            'date_added' => Yii::t('app', 'Date Added'),
            'visible' => Yii::t('app', 'Visible'),
            'slug' => Yii::t('app', 'Slug'),
            'highpriority' => Yii::t('app', 'Highpriority'),
            'show_on_menu' => Yii::t('app', 'Show On Menu'),
            'other_data' => Yii::t('app', 'Other Data'),
        ];
    }

    public function getActivityLevel(){
        return [
            0 => 'Moderate',
            1 => 'Leisurely',
            2 => 'Moderate',
            3 => 'Challenging',
            4 => 'Tough',
            5 => 'Tough +',
        ];
    }

    public function getPackageDesc(){
        return $this->hasOne(PackageDesc::className(),['package_id'=>'id']);
    }

    public function getPackagePriceDate(){
        return $this->hasMany(PackageDatePrice::className(),['package_id'=>'id'])
        ->onCondition ( [ 'and' ,
            [ '>' , PackageDatePrice::tableName () . '.start_date' , date('Y-m-d') ]
            // [ '=' , static::tableName () . '.branch_id' , 2 ]
        ] );
    }

    public function getVideo(){
        return $this->hasOne(Video::className(),['package_id'=>'id']);
    }


    public function getFormatedPackageDates(){
        $i=0;foreach($this->packagePriceDate as $dpData){
            $year = date('Y',strtotime($dpData->start_date));
            $formated_date_price[$year][$i]['start_date'] = $dpData->start_date;
            $formated_date_price[$year][$i]['end_date'] = $dpData->end_date;
            $formated_date_price[$year][$i]['year'] = $year;
            $formated_date_price[$year][$i]['id'] = $dpData->id;
            $formated_date_price[$year][$i]['between_dates'] = date('M d',strtotime($dpData->start_date)).' To '.date('M d',strtotime($dpData->end_date));
            $period = new \DatePeriod(
                new \DateTime($dpData->start_date),
                new \DateInterval('P1D'),
                new \DateTime($dpData->end_date)
           );
           $days_array = [];
           $l = 1;foreach($period as $date){
                    $days_array[$date->format('d')] = $date->format('D');
            $l++;}
            $lastDate = new \DateTime($dpData->end_date);
            $days_array[$lastDate->format('d')] = $lastDate->format('D');
            $formated_date_price[$year][$i]['calaender_days'] = $days_array;
            
            $i++; }
            return $formated_date_price;
              
           
    }

    public function getSelectedDate(){
        
    }

    public function getFormatedPackageDatesNew(){
        $new_formated_data = [];
        $formated_date_price = $this->getFormatedPackageDates();
        foreach($formated_date_price as $year => $yearData){
        
            foreach($yearData as $key => $datesData){
                $new_formated_data[$year][$key]['start_date'] =  $datesData['start_date'];
                $new_formated_data[$year][$key]['start_date'] =  $datesData['start_date'];
                $new_formated_data[$year][$key]['end_date'] =  $datesData['end_date'];
                $new_formated_data[$year][$key]['year'] =  $datesData['year'];
                $new_formated_data[$year][$key]['id'] =  $datesData['id'];
                $new_formated_data[$year][$key]['between_dates'] =  $datesData['between_dates'];
                // $new_formated_data[$year][$key]['year'] =  $datesData['year'];

                $start_date = $datesData['start_date'];
                $end_date = $datesData['end_date'];
                $new_calendar_array = [];
                $bb=1;foreach($datesData['calaender_days'] as $keyy => $cData){
                    if($bb==1){
                        $wd = $cData;
                        $day_no_to_back = $this->getPostiveWDDifference()[$wd];

                        for($ii=$day_no_to_back ;$ii>0;$ii--){
                            $date = new \DateTime($start_date);
                            $date->modify("-$ii day");
                            $nwd = $date->format('D');
                            $new_calendar_array[$date->format('d')] = 'n/a';
                        }
                    }
                    $new_calendar_array[$keyy] = $cData;
                    $bb++;}
                $new_formated_data[$year][$key]['calaender_days'] =  $new_calendar_array;
            }

        }
        return $new_formated_data;
    }

    public function getRatingCount(){
        return count($this->packageReview);
    }

    public function getAvgRating(){
        $sql = "select avg(rating) as avg_rating from {{%review}} where package_id=".$this->id;
        return Yii::$app->db->createCommand($sql)->queryScalar();
    }


    public function getDestination(){
        return $this->hasOne(Destination::className(),['id'=>'destination_id']);
    }
    public function getPackageItenerary(){
        return $this->hasMany(PackageItinerary::className(),['package_id'=>'id']);
    }
    public function getPackageFaq(){
        return $this->hasMany(PackageFaqs::className(),['package_id'=>'id']);
    }
    public function getPackageRoute(){
        return $this->hasManey(PackageRoute::className(),['package_id'=>'id']);
    }
    public function getPackagePhoto(){
        return $this->hasMany(PackageImage::className(),['package_id'=>'id']);
    }

    public function getPackageReview(){
        return $this->hasMany(Review::className(),['package_id'=>'id']);
    }
    public function getPostiveWDDifference(){
        return [
            'Sun' => 0,
            'Mon' => 1,
            'Tue' => 2,
            'Wed' => 3,
            'Thu' => 4,
            'Fri' => 5,
            'Sat' => 6,
        ];
    }
    public function getNegetiveWDDifference(){
        return [
            'Sun' => 6,
            'Mon' => 5,
            'Tue' => 4,
            'Wed' => 3,
            'Thu' => 2,
            'Fri' => 1,
            'Sat' => 0,
        ];
    }

    public function getImageUrl(){
        return Yii::$app->urlManager->baseUrl.'/images/frontend/main/'.$this->image;
    }
    
    public function getMapImage($map_image){
        return Yii::$app->urlManager->baseUrl.'/images/banner/'.$map_image;
    }


    /**
     * {@inheritdoc}
     * @return \common\models\query\PackageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PackageQuery(get_called_class());
    }
}
