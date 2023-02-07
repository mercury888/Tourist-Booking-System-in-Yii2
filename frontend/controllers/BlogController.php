<?php
namespace frontend\controllers;

// use frontend\models\ResendVerificationEmailForm;
// use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;
// use yii\filters\VerbFilter;
// use yii\filters\AccessControl;
// use common\models\LoginForm;
use common\models\Content;
use common\models\PostSearch;
use common\models\Post;
use common\models\BlogCategory;
// use frontend\models\PasswordResetRequestForm;
// use frontend\models\ResetPasswordForm;
// use frontend\models\SignupForm;
// use frontend\models\ContactForm;

/**
 * Site controller
 */
class BlogController extends Controller
{
    public $enableCsrfValidation = false;
    
    public function actionIndex(){

        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder = 'id desc';

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        // return $this->render('index');
    }


    public function actionSlug($slug){
        $model = Post::find()->where(['slug'=>$slug])->one();
        return $this->render('view',['model'=>$model]);
    }

    public function actionCategory($slug){
        $category = BlogCategory::find()->where(['slug'=>$slug])->one();
        $searchModel = new PostSearch();
        $searchModel->category_id = $category->id;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder = 'id desc';

        return $this->render('category-list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'category' => $category
        ]);
    }


   


  
}
