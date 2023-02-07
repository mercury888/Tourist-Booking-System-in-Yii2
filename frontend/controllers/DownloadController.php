<?php
namespace frontend\controllers;

// use frontend\models\ResendVerificationEmailForm;
// use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;

use common\models\Package;
use kartik\mpdf\Pdf;
/**
 * Site controller
 */
class DownloadController extends Controller
{
    public $enableCsrfValidation = false;
    
  

    // $this->layout= "/layouts/print";
    // $criteria = new CDbCriteria;
    // $criteria->select = "t.*,pd.*,t.id";
    // $criteria->condition = "t.slug='".$slug."' AND t.visible=1 AND pd.language_id='".$this->langid."'";
    // $criteria->join = " LEFT OUTER JOIN tbl_package_desc as pd ON pd.package_id=t.id";
    // $model = Package::model()->find($criteria);
    // if(!$model)
    // {
    //     throw new CHttpException('404','Page not found');
    //     die;    
    // }
    
    // $criteria = new CDbCriteria;
    // $criteria->select = "t.*,ad.*";
    // $criteria->condition = "t.id='".$model->activity_id."' AND ad.language_id='".$this->langid."'";
    // $criteria->join = " LEFT OUTER JOIN tbl_activity_desc as ad ON ad.activity_id=t.id";
    // $activity = Activity::model()->find($criteria);

    // $highlights = Highlight::model()->findAllByAttributes(array('package_id'=>$model->id,'language_id'=>$this->langid));
    
    // $criteria = new CDbCriteria;
    // $criteria->select = "t.*,sd.*";
    // $criteria->condition = "t.package_id='".$model->id."' AND sd.language_id='".$this->langid."'";
    // $criteria->join = " LEFT OUTER JOIN  tbl_custom_tab_desc as sd ON sd.tab_id=t.id";
    // $customtabs = Customtab::model()->findAll($criteria);
    
    // $extras = AdditionalField::model()->findAllByAttributes(array('package_id'=>$model->id,'language_id'=>$this->langid));
    // $itineraries = PackageItinerary::getAllItineraryByPackage($model->id,$this->langid);
    // $videos = Video::model()->findAllByAttributes(array('package_id'=>$model->id));
    // $faqs = PackageFaqs::getAllFaqs($this->langid,$model->id);
    // $dates_prices = PackageDatePrice::getAllByPackage($model->id);
    // /*echo "<div style='font-weight: bold; font-size: 8pt; font-style: italic;border-bottom:solid 1px #DEDEDE; padding-bottom:5px;'>"
    //                         . "<span style='float: left;vertical-align:bottom;display: inline-block;'>".Setting::getValue('company-name')."</span>"
    //                         . "<img src='".$this->createUrl('/images/logo.png')."' height='30px' alt='".Setting::getValue('site-name')."' style='float: right; ' />"
    //                         ."<div style='clear:both;'></div></div>";*/
    // $html = $this->render('packagedetail/package_pdf',array(
    //     'model'=>$model,
    //     'activity'=>$activity,
    //     'packages'=>$packages,
    //     'highlights'=>$highlights,
    //     'customtabs'=>$customtabs,
    //     'videos'=>$videos,
    //     'extras'=>$extras,
    //     'itineraries'=>$itineraries,
    //     'faqs'=>$faqs,
    //     'dates_prices'=>$dates_prices),true);//echo $html;die;
    // $filename = $model->slug.".pdf";    

    // $mPDF1= Yii::app()->ePdf->mpdf('','A4',0,'',15,15,24,24);
    
    // $mPDF1->SetHTMLHeader("<div style='font-weight: bold; font-size: 8pt; font-style: italic;border-bottom:solid 1px #DEDEDE; padding-bottom:5px;display: table-cell;'>"
    //                         . "<span style='float: left;margin-bottom:0px;'>".Setting::getValue('company-name')."</span>"
    //                         . "<img src='".$this->createUrl('/images/logo-blue-wide.png')."' height='30px' alt='".Setting::getValue('site-name')."' style='float: right; ' />"
    //                         ."<div style='clear:both;'></div></div>");
    // $mPDF1->SetHTMLFooter("<div style='text-align: center; font-weight: bold; font-size: 7pt; font-style: italic;border-top:solid 1px #DEDEDE; padding-top:5px;'>"
    //                         .Setting::getValue('contact-email')." | ".Setting::getValue('contact-number')
    //                         ." | ".Setting::getValue('contact-number-2')
    //                         ."</div>");
    // # render (full page)
    // $mPDF1->WriteHTML($html);

    // # Load a stylesheet
    // $stylesheet = file_get_contents(Yii::app()->basePath . '/../css/print.css');
    // $mPDF1->WriteHTML($stylesheet, 1);

    // # Renders image
    // //$mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));

    // # Outputs ready PDF
    // $mPDF1->Output($filename,'D');

    public function actionSlug($slug){
        $model = Package::find()->where(['slug'=>$slug])->one();
         // get your HTML raw content without any layouts or scripts
        $content = $this->renderPartial('_reportView',['model'=>$model]);
       // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_CORE, 
            // A4 paper format
            'format' => Pdf::FORMAT_A4, 
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT, 
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER, 
            // your html content input
            'content' => $content,  
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting 
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required
            'cssInline' => '.kv-heading-1{font-size:18px}', 
            // set mPDF properties on the fly
            'options' => ['title' => 'Krajee Report Title'],
            // call mPDF methods on the fly
            'methods' => [ 
                'SetHeader'=>['Krajee Report Header'], 
                'SetFooter'=>['{PAGENO}'],
            ]
    ]);
    
    // return the pdf output as per the destination setting
    return $pdf->render(); 
    }
 
}
