<?php
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Settings;
/* @var $this \yii\web\View */
/* @var $content string */

$logo = null;
// $logo = Settings::getCachedSetting('APP_LOGO');
$logo = $logo ? $logo : "/images/imgpsh_fullsize_anim.png";
?>
<script type="text/javascript">
    var timestamp = '<?=time();?>';
    function updateTime(){
      $('#clock').html(Date(timestamp));
      timestamp++;
    }
    $(function(){
      setInterval(updateTime, 1000);
    });    
</script>
<!-- Main Header -->
<nav class="navbar navbar-expand fixed-top top-menu" style="padding: 0px;">
    <a class="navbar-brand" href="/">
        <!-- Large logo -->
        <img class="large-logo" src="<?= $logo ?>" alt="Logo">
        <img class="small-logo" src="<?= $logo ?>" alt="Logo">    
    </a>

    <!-- Burger menu -->
    <div class="burger-menu toggle-menu">
        <span class="top-bar"></span>
        <span class="middle-bar"></span>
        <span class="bottom-bar"></span>
    </div>
    <div>
        <span id="clock"></span>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Right nav -->
        <ul class="navbar-nav right-nav ml-auto">            

            <!-- Profile dropdown -->
            <li class="nav-item dropdown profile-nav-item">
                <a class="nav-link dropdown-toggle" href="index.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="menu-profile">
                        <span class="name"><?= Yii::$app->user->identity->username ?></span>
                        <?php if(Yii::$app->user->identity->username) { ?>
                        <img class="rounded-circle" src="<?= Yii::$app->user->identity->username ?>" alt="Profile Image">
                    <?php } else { ?>
                        <img class="rounded-circle" src="/images/user/1.jpg" alt="Profile Image">
                    <?php } ?>
                    </div>
                </a>
                <div class="dropdown-menu">
                    <!-- <a class="dropdown-item" href="page/profile">
                        <i data-feather="user" class="icon"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="app/inbox">
                        <i data-feather="inbox" class="icon"></i>
                        Mailbox
                    </a>
                    <a class="dropdown-item" href="app/chat">
                        <i data-feather="help-circle" class="icon"></i>
                        Support
                    </a>-->
                    <a class="dropdown-item" href="<?= Url::toRoute('/user/profile', true); ?>">
                        <i data-feather="settings" class="icon"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="<?= Url::toRoute('/site/logout', true); ?>">
                        <i data-feather="log-out" class="icon"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
