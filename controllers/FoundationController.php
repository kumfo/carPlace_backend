<?php
/**
 * Created by PhpStorm.
 * User: kumfo
 * Date: 2019-04-03
 * Time: 17:04
 */

namespace app\controllers;

use yii\rest\Controller;
use yii\web\Response;

class FoundationController extends Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator'] = [
            'class' => 'yii\filters\ContentNegotiator',
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
            ]
        ];
        return $behaviors;
    }
}