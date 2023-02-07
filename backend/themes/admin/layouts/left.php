<?php
use mdm\admin\components\MenuHelper;
use yii\helpers\Url;
use yii\helpers\Html;
?>
<!-- Side Menu -->
<div class="sidemenu-area default"> <!-- sidemenu-toggle -->
    <nav class="sidemenu navbar navbar-expand navbar-light"> <!-- hide-nav-title -->
        <div class="navbar-collapse collapse">
            <div class="navbar-nav">               
                <?php
                    $callback = function($menu){                        
                        $data = $menu['data'];
                        return [
                            'label' => $menu['name'],
                            'url' => [$menu['route']],
                            'option' => $data,
                            'icon' => $menu['data'], 
                            'items' => $menu['children'],
                        ];
                    };
                    /*
                    $menus = MenuHelper::getAssignedMenu(Yii::$app->user->id, null, $callback, true);
                    foreach ($menus as $menu) {
                        if(!empty($menu["items"])) { ?>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="dropdown-title">
                                        <?php
                                        if (!empty($menu['icon'])) {
                                            echo Html::tag('i', '', ['data-feather' => $menu['icon'], 'class' => 'icon']);   
                                        }
                                        ?>
                                        <span class="title">
                                            <?php echo $menu["label"]; ?>
                                            <i data-feather="chevron-right" class="icon fr"></i>
                                        </span>
                                    </div>
                                </a>
                                <div class="dropdown-menu">
                                    <?php foreach($menu["items"] as $item) { ?>
                                    <a class="dropdown-item" href="<?php echo $item['url'][0]; ?>">
                                        <!-- <i data-feather="<?= $menu['icon'];?>" class="icon"></i> -->
                                        <?php echo $item["label"]; ?>
                                    </a>
                                    <?php } ?>                                        
                                </div>
                            </div>
                        <?php } else { ?>
                            <a class="nav-link" href="<?php echo $menu['url'][0]; ?>">
                                <?php
                                    if (!empty($menu['icon'])) {
                                        echo Html::tag('i', '', ['data-feather' => $menu['icon'], 'class' => 'icon']);   
                                    }
                                ?>
                                <span class="title"><?php echo $menu["label"]; ?></span>
                            </a>
                        <?php }
                    } */
                ?>                
            </div>
        </div>
    </nav>
</div>