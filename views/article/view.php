<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Article $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-muted"> 
        <small>
            Created at: <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?><br>
                By: <b><i><?php echo $model->createdBy->username ?></i></b>
        </small>
    </p>

    <?php if (!Yii::$app->user->isGuest && Yii::$app->user->id === $model->created_by): ?>
        <p>
            <?php echo Html::a('Update', ['update', 'slug' => $model->slug], ['class' => 'btn btn-primary']) ?>
            <?php echo Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    <?php endif ?>

    <div>
        <?php echo $model->getEncodeBody();  ?>
    </div>
</div>
