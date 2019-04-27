<?php
/**
 * Created by PhpStorm.
 * User: kumfo
 * Date: 2019-04-03
 * Time: 16:00
 */

namespace app\controllers;


use yii\filters\ContentNegotiator;
use yii\rest\Controller;
use yii\web\Response;

class SharingController extends FoundationController
{

    public function actions()
    {
        return [];
    }

    public function actionIndex()
    {
        return [];
    }

    public function actionCreate()
    {}

    public function actionUpdate()
    {}

    public function actionView($ie)
    {}

    public function actionDelete($id)
    {}
}