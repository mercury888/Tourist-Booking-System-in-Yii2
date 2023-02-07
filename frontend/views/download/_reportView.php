<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400,600|Open+Sans:600italic,400,700,600' rel='stylesheet' type='text/css'>
<?php error_reporting(0);?>
<div id="pagecontent">
<h1><?=$model->name;?></h1>
<img src="<?=$model->imageUrl;?>" />
<div><?=$model->packageDesc->description;?></div>

<table class="list-unstyled">
<?php /*?>
    <?php $grade = $model->grade;
    $grading = GradeLookup::getGradeDetails($this->langid,array('t.id'=>$grade));
    if($grading){
    ?>
    <tr><td width="20%"><?php echo Yii::t('sherpa','ACTIVITY_LEVEL');?>:</td>
        <td>
            <div class="row grading-box">
                <?php 
                $red = ($grade * 2);
                $maxgrade = 10;
                for($n=1;$n<=$maxgrade; $n++){
                    if($n <= $red){?>
                        <img src="<?php echo $this->createUrl('images/red-bar.png');?>"/>
                    <?php }else{?>
                        <img src="<?php echo $this->createUrl('images/green-bar.png');?>"/>
                    <?php }
                }?>

                    <strong><?php echo $grading->title;?></strong>
                <p>
                    <?php echo $grading->description;?>
                </p>   
            </div>
        </td>
    </tr>
    <?php }  ?>
    <?php */?>
    <?php if($model->duration){?>
    <tr>
        <td>DURATION:</td> <td><?php echo $model->duration;?> days</td>
    </tr>
    <?php }?>

    
</table>
<?php /*?>
<h2><?php echo Yii::t('package','GLANCE');?></h2>
<?php if($highlights)
{?>
<div class="panel-body">
    <ul class="highligh-list">
    <?php foreach($highlights as $highlight)
    {?>
    <li>
        <div class="ico-holder">
            <i class="fa fa-check-square-o"></i>
        </div>
        <div class="text-block"> <?php echo $highlight->feature;?></div>
    </li>
    <?php }?>
    </ul>
</div>
<?php }?>
<?php */?>
<?=$model->packageDesc->description;?>
<?php if($model->packageDesc->cost_detail || $model->packageDesc->cost_excludes){?>
<div class="cost-block">
    <?php if($model->packageDesc->cost_detail){?>
    <div class="cost-includes">
    	<strong class="title">Cost Includes</strong>
        <?php echo $model->packageDesc->cost_detail;?>
    </div>
    <?php }
    if($model->packageDesc->cost_excludes){?>
    <div class="cost-excludes">
    	<strong class="title">Cost Excludes</strong>
        <?php echo $model->packageDesc->cost_excludes;?>
    </div>
    <?php }?>
</div>
<?php }?>

<?php if($model->packageItenerary){?>
<h2>ITINERARY</h2>
<ul class="list-unstyled">
    <?php foreach($model->packageItenerary as $itinerary){?>
    <li>
        <strong><?php echo $itinerary->day_no;?>: <?php echo $itinerary->short_desc;?></strong><br/>
         <?php echo $itinerary->full_desc;?>
    </li>
    <?php }?>
</ul>
<?php }?>

<?php if($model->packageDesc->accomodation)
{?>
<h2>ACCOMODATION</h2>
<div class="panel-body">
    <?php echo $model->packageDesc->accomodation;?>
</div>
<?php }?>

<?php /*?>
<?php if($model->info){?>
<h2><?php echo Yii::t('package','VITAL_INFO');?></h2>
<div class="panel-body">
    <?php echo $model->info;?>
</div>
<?php }?>
<?php */?>

<?php if($model->packageFaq){?>
<h2>FAQS</h2>
<ul class="list-unstyled">
    <?php foreach($model->packageFaq as $faq){?>
    <li>
        <strong><?php echo $faq->question;?></strong><br>
        <?php echo $faq->answer;?>
    </li>
    <?php }?>
</ul>
<?php }?>

</div>