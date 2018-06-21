<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Alert;
use yii\widgets\linkPager;
?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="favicon.ico" >
    <link rel="Shortcut Icon" href="favicon.ico" />
    <!--[if lt IE 9]>
    <![endif]-->
    <?=Html::cssFile('@web/h-ui/css/H-ui.min.css')?>
    <?=Html::cssFile('@web/h-ui/css/iconfont.css')?>
    <?=Html::cssFile('@web/h-ui.admin/css/H-ui.admin.css')?>
    <?=Html::cssFile('@web/h-ui.admin/skin/default/skin.css')?>
    <?=Html::cssFile('@web/h-ui.admin/css/style.css')?>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->
</head>
<?php echo $content; ?>

