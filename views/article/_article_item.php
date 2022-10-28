<?php
    /** @var $model \app\models\Article */
?>

<!-- <div>
    <a href="<?php //echo \yii\helpers\Url::to(['view', 'slug' => $model->slug]) ?>">
        <h3><?php //echo \yii\helpers\Html::encode($model->title) ?></h3>
    </a>
    <div>
        <?php //echo \yii\helpers\StringHelper::truncateWords(\yii\helpers\Html::encode($model->body), 40) ?>
    </div>
    <hr>
</div> -->

<!-- <div>
    <h3> <?php //echo \yii\helpers\Html::encode($model->title) ?></h3>
    <div>
        <?php //echo \yii\helpers\Html::encode($model->body) ?>
    </div>
</div><br> -->

<div>
    <a href="<?php echo \yii\helpers\Url::to(['/article/view', 'slug' => $model->slug]) ?>">
        <h3><?php  echo \yii\helpers\Html::encode($model->title) ?></h3>
    </a>
    <div>
        <?php echo \yii\helpers\StringHelper::truncateWords($model->getEncodeBody(), 40) ?>
    </div>
</div><br>
