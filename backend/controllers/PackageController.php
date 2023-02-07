<?php

namespace backend\controllers;

use Yii;
use common\models\Package;
use common\models\PackageDesc;
use common\models\PackageSearch;
use yii\web\Controller;
use yii\web\Response;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\base\DynamicModel;
use backend\models\TripFactsForm;
use backend\models\VitalInfoForm;
use common\components\ArrayValidator;

/**
 * PackageController implements the CRUD actions for Package model.
 */
class PackageController extends Controller
{
    public $enableCsrfValidation;
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Package models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PackageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionUploadMedia(){
        $this->enableCsrfValidation = false;
        print_r($_FILES);
        print_r($_POST); exit;
    }
    /**
     * Displays a single Package model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionLoadRegionActivity() {
        $post = Yii::$app->request->post();
        $sql = 'select *from tbl_region where destination_id='.$post['id'];
        $regions = Yii::$app->db->createCommand($sql)->queryAll();
       
        $sql = 'select da.activity_id as id, a.name from tbl_destination_activity as da
        left join tbl_activity as a on a.id = da.activity_id
        where a.name IS NOT NULL and da.destination_id='.$post['id'];
        $activities = Yii::$app->db->createCommand($sql)->queryAll();
        Yii::$app->response->format = Response::FORMAT_JSON;
        return [
            'status' => 'success',
            'region' => $regions,
            'activity' => $activities
        ];
    }

    /**
     * Creates a new Package model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Package();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionCreateVue()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii::$app->request->post();
        $data = json_decode($post['data'],true);
        $image = $_FILES;
        if(isset($data['id']) && !empty($data['id'])) {
            $id = $data['id'];
            $model = Package::find()->where(['id' => $id])->one();
        } else {
            unset($data['id']);
            unset($data['date_added']);
            $model = new Package;
            $model->date_added = date('Y-m-d');
            // echo 'I am in'; exit;
        }
        $model->attributes = $data;
        
        $detail_form = $data['detail_form'];
        if ($model->validate() && $model->saveMedia() && $model->save(false)) {
            
            $detail_model = $model->packageDesc?$model->packageDesc:new PackageDesc;
            $detail_model->package_id = $model->id;
            $detail_model->attributes = $detail_form;
            $detail_model->save(false);
            return [
                'status' => 'success',
                'package' => $model->attributes,
                'package_desc' => $model->packageDesc?$model->packageDesc->attributes:$detail_model->attributes
            ];
        } else {
           return [
               'status' => 'failed',
               'error' => $model->getErrors()
           ];
        }
      
    }
    public function actionValidateError(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii::$app->request->post();
        $data = json_decode($post['data'],true);
        $image = $_FILES;
        
        $model = new Package();
        unset($data['id']);
        $model->attributes = $data;
        if ($model->validate()) {
            return [
                'status' => 'failed',
                'error' => [],
                'error1' => []
            ];
        } else {
           return [
               'status' => 'failed',
               'error' => $model->getErrors()
              
           ];
        }
    }

    public function actionSaveGroupPricing(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii::$app->request->post();
    }

    public function actionSaveGroupDatePricing(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii::$app->request->post();
    }

    public function actionSaveItinerary(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii::$app->request->post();
    }

    public function actionSaveFaq(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii::$app->request->post();
    }
    public function actionSaveTripFact(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii::$app->request->post();
        $model = new TripFactsForm;
        $model->attributes = $post;
        if($model->validate()) {
            return [
                'status' => 'success',
                'data' => $model->attributes               
            ];
        } else {
            return [
                'status' => 'failed',
                'error' => $model->getErrors()
               
            ];
        }
    }

    public function actionSaveVitalInfo(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii::$app->request->post();
        $model = new VitalInfoForm;
        $model->attributes = $post;
        if($model->validate()) {
            return [
                'status' => 'success',
                'data' => $model->attributes               
            ];
        } else {
            return [
                'status' => 'failed',
                'error' => $model->getErrors()
               
            ];
        }
    }
    public function actionSaveBespokePrivate(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii::$app->request->post();
    }
    
    public function actionSaveInclusion(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii::$app->request->post();
        $model = new TripFactsForm;
        $model->attributes = $post;
        if($model->validate()) {
            return [
                'status' => 'success',
                'data' => $model->attributes               
            ];
        } else {
            return [
                'status' => 'failed',
                'error' => $model->getErrors()
               
            ];
        }
    }

    public function actionSaveExclusion(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii::$app->request->post();
        $model = new TripFactsForm;
        $model->attributes = $post;
        if($model->validate()) {
            return [
                'status' => 'success',
                'data' => $model->attributes               
            ];
        } else {
            return [
                'status' => 'failed',
                'error' => $model->getErrors()
               
            ];
        }
    }

  



    /**
     * Updates an existing Package model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Package model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Package model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Package the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Package::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
