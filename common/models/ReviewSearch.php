<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Review;

/**
 * ReviewSearch represents the model behind the search form of `common\models\Review`.
 */
class ReviewSearch extends Review
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status', 'author_id', 'package_id', 'rating', 'posted_to_facebook', 'allow_fb_post', 'help_full_yes_count', 'help_full_no_count'], 'integer'],
            [['title', 'content', 'create_time', 'author', 'email', 'url', 'image', 'photos', 'slug', 'why_did_you_choose', 'would_you_recomend', 'advice_traveller'], 'safe'],
            [['pre_trip_info_rating', 'meal_rating', 'staffs_rating', 'transportation_rating', 'accommodation_rating', 'vale_of_money_rating'], 'number'],
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
    public function search($params)
    {
        $query = Review::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
            'create_time' => $this->create_time,
            'author_id' => $this->author_id,
            'package_id' => $this->package_id,
            'rating' => $this->rating,
            'posted_to_facebook' => $this->posted_to_facebook,
            'allow_fb_post' => $this->allow_fb_post,
            'pre_trip_info_rating' => $this->pre_trip_info_rating,
            'meal_rating' => $this->meal_rating,
            'staffs_rating' => $this->staffs_rating,
            'transportation_rating' => $this->transportation_rating,
            'accommodation_rating' => $this->accommodation_rating,
            'vale_of_money_rating' => $this->vale_of_money_rating,
            'help_full_yes_count' => $this->help_full_yes_count,
            'help_full_no_count' => $this->help_full_no_count,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'photos', $this->photos])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'why_did_you_choose', $this->why_did_you_choose])
            ->andFilterWhere(['like', 'would_you_recomend', $this->would_you_recomend])
            ->andFilterWhere(['like', 'advice_traveller', $this->advice_traveller]);
        $query->orderBy('id desc');    
        return $dataProvider;
    }
}
