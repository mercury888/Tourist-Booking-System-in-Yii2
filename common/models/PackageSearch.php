<?php

namespace common\models;

use yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Package;
use common\models\Activity;
use common\models\Destination;
use common\models\Region;
use yii\helpers\ArrayHelper;


/**
 * PackageSearch represents the model behind the search form of `common\models\Package`.
 */
class PackageSearch extends Package
{
    public $featured_id;
    public $new_grade;
    public $price_range;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'subactivity_id', 'region_id', 'book_now', 'enquire', 'visible', 'highpriority', 'show_on_menu','grade'], 'integer'],
            [['price_range','name', 'duration', 'image', 'map_image', 'date_added', 'slug', 'other_data','destination_id','activity_id','new_grade','featured_id'], 'safe'],
            [[ 'price', 'price_3', 'price_5', 'supplement_3', 'supplement_5'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params = [])
    {
        $query = Package::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

            // print_r($params);
        $this->load($params);
        // print_r($this->attributes);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }else {
            // print_r($this->getErrors());
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'activity_id' => $this->activity_id,
            'subactivity_id' => $this->subactivity_id,
            'destination_id' => $this->destination_id,
            'region_id' => $this->region_id,
            'grade' => $this->grade,
            'book_now' => $this->book_now,
            'enquire' => $this->enquire,
            'price' => $this->price,
            'price_3' => $this->price_3,
            'price_5' => $this->price_5,
            'supplement_3' => $this->supplement_3,
            'supplement_5' => $this->supplement_5,
            'date_added' => $this->date_added,
            'visible' => $this->visible,
            'highpriority' => $this->highpriority,
            'show_on_menu' => $this->show_on_menu,
        ]);
       
        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'duration', $this->duration])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'map_image', $this->map_image])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'other_data', $this->other_data]);
            $query->orderBy('id desc');  
        return $dataProvider;
    }

    public function handleActivityQuery($get){
        
        $activty = Activity::find()->where(['slug'=>$get['activity']])->one();
        // echo '<pre>';
        // print_r($activty);
        // exit;
        return $activty->id;
    }
    public function handleDestinationQuery($get){
        
        $dest = Destination::find()->where(['slug'=>$get['destination']])->one();
        return $dest->id;
    }

    public function handleRegionQuery($get){
        
        $region = Region::find()->where(['slug'=>$get['region']])->one();
        return $region->id;
    }


    public function newSearch()
    {
        $query = Package::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $post = Yii::$app->request->post();
        if(!empty($post) && isset($post['PackageSearch']['new_grade'])){
            $this->grade = $post['PackageSearch']['new_grade'];
        }
        

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'activity_id' => $this->activity_id,
            'subactivity_id' => $this->subactivity_id,
            'destination_id' => $this->destination_id,
            'region_id' => $this->region_id,
            'grade' => $this->grade,
            'book_now' => $this->book_now,
            'enquire' => $this->enquire,
            'price' => $this->price,
            'price_3' => $this->price_3,
            'price_5' => $this->price_5,
            'supplement_3' => $this->supplement_3,
            'supplement_5' => $this->supplement_5,
            'date_added' => $this->date_added,
            'visible' => $this->visible,
            'highpriority' => $this->highpriority,
            'show_on_menu' => $this->show_on_menu,
        ]);

        $get = Yii::$app->request->get();
        if(!$this->activity_id && isset($get['activity']) && !empty($get['activity']) && empty($get['region'])){
            // if(!$this->activity_id && )
            $this->activity_id = $this->handleActivityQuery($get);
            $query->andFilterWhere(['activity_id' => $this->activity_id]);
        }

        if(!$this->destination_id && isset($get['destination']) && !empty($get['destination'])){
            $this->destination_id = $this->handleDestinationQuery($get);
            $query->andFilterWhere(['destination_id' => $this->destination_id]);
        }
        
        if(!$this->region_id && isset($get['region']) && !empty($get['region']) && empty($get['activity'])){
            $this->region_id = $this->handleRegionQuery($get);
            $query->andFilterWhere(['region_id' => $this->region_id]);
        }

        if(!$this->region_id && !$this->activity_id && isset($get['region']) && !empty($get['region']) && isset($get['activity']) && !empty($get['activity'])){
            $this->activity_id = $this->handleActivityQuery($get);
            $this->region_id = $this->handleRegionQuery($get);
            $query->andFilterWhere(['region_id' => $this->region_id,'activity_id' => $this->activity_id]);
        }

        
        if((!empty($post) && isset($post['PackageSearch']['featured_id'])) || (isset($get['featured_id']) && !empty($get['featured_id']))){

            if(isset($get['featured_id']) && !empty($get['featured_id'])){
                $featured_arry[] = (int) $get['featured_id'];
            }
               
            if(!empty($post) && isset($post['PackageSearch']['featured_id'])){
                $featured_arry = $post['PackageSearch']['featured_id'];
            }

            

            $featured_data = FeaturedItems::find()->select('package_id')->where(['in','id',$featured_arry])->asArray()->all();
            $pids = [];
            if(!empty($featured_data)){
                foreach($featured_data as $key=>$val){
                    $pids[] = $val['package_id'];
                }

                if(!empty($pids)){
                    $query->andWhere(['in','id',$pids]);
                }

            }
            
        }

        if(!empty($post) && isset($post['PackageSearch']['price_range'])){
            $price_range =$post['PackageSearch']['price_range'];
            $pieces = explode('-',$price_range);
            // print_r($pieces); exit;
            if(is_array($pieces) && sizeof($pieces)==2){
                $min = $pieces[0];
                $max = $pieces[1];
                $query->andWhere("price>=$min and price<=$max");
            } else {
                $query->andWhere('price'.$price_range);
            }
        }

        if(!empty($post) && isset($post['PackageSearch']['duration'])){
            $duration =$post['PackageSearch']['duration'];
            $pieces = explode('-',$duration);
            // print_r($pieces); exit;
            if(is_array($pieces) && sizeof($pieces)==2){
                $min = $pieces[0];
                $max = $pieces[1];
                $query->andWhere("duration>=$min and duration<=$max");
            } else {
                $query->andWhere('duration'.$duration);
            }
        }


        // echo '<pre>';
        // print_r($query);
        // exit;
        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'map_image', $this->map_image])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'other_data', $this->other_data]);
            $query->orderBy('id desc');  
        return $dataProvider;
    }


    public function getDestinations(){
        return Destination::find()->select('id,name')->where(['visible'=>1])->all();
    }
    public function getActivities(){
        return Activity::find()->select('id,name')->all();
        // return Activity::find()->select('id,name')->where(['visible'=>1])->all();
    }
    public function getFeatured(){
        return Featured::find()->select('id,name')->all();
    }
    public function getRegions(){
        return Region::find()->select('id,name')->where(['visible'=>1])->all();
    }

  
    
}
