<?php
use yii\helpers\Html;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\MessageInterface the message being composed */
/* @var $content string main view render result */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        div {
            padding: 10px;
        }
    </style>    
</head>
<body>
    <?php $this->beginBody() ?>
    <table width="600" align="center" cellspacing="0" cellpadding="0">
                              <tbody><tr style="background: #006498;">
                                  <td width="40%">
                                      <a href="https://www.mountainsherpatrekking.com" target="_blank">
                                          <img src="https://www.mountainsherpatrekking.com/images/logo.png" alt="Mountain Sherpa" style="margin: 10px auto;">
                                      </a>
                                  </td>
                                  <td style="padding: 5px;float:right;color:#FFF;">
                                      <table width="100%">
                                          <tbody><tr>
                                              <td style="padding: 5px;float:left;color:#FFF;">

                                              </td>
                                              <td style="padding: 5px;float:right;color:#FFF;font-size: 11px">
                                                  mountainsherpatrek@gmail.com                        </td>
                                          </tr>
                                          <tr>
                                              <td style="padding: 5px;float:left;color:#FFF;">
                                                  <img src="https://www.mountainsherpatrekking.com/images/phone_ffffff_32.png" alt="phone">
                                              </td>
                                              <td style="padding: 5px;float:right;color:#FFF;">
                                                  977-9851060947 <br>
                                                  977-9849643731                        </td>
                                          </tr>
                                         

                                      </tbody></table>
                                      
                                  </td>
                              </tr>
                              <tr>
                                                <td colspan="2">
                                                <div style="height:8px; display:block; background:#f2c319; margin-bottom: 3px;"></div>
                                                </td>
                                          <tr>
                            <?= $content ?>

                              
                            <tr>
                                  <td colspan="3">
                                      <div style="height:8px; display:block; background:#f2c319; margin-bottom: 3px;"></div>
                                      <div style="text-align:center;color:#000000; font-size:18px;background:#006498;margin-bottom:3px;padding:5px;">
                                          <a href="https://www.mountainsherpatrekking.com" target="_blank">
                                              <img src="https://www.mountainsherpatrekking.com/images/logo.png" alt="Mountain Sherpa">
                                          </a>
                                          <div style="clear:both"></div>
                                      </div>
                                      <div style="color:#000000; margin:20px 0; line-height: 22px;">
                                          <div style="text-align: center;">
                                          <p style=" margin-bottom: 25px;"><a href="https://www.mountainsherpatrekking.com" style="font-size:20px; line-height:25px; font-weight:bold; color:#006498; display:block; text-decoration:none;" target="_blank">https://www.mountainsherpatrekking.com</a></p> 
                                          </div>
                                      </div>
                                  </td> 
                              </tr>
                          </tbody>
                          </table>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
