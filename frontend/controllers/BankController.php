<?php
namespace frontend\controllers;


use yii\web\Controller;
use \frontend\services\BankService;

/**
 * Bank controller
 *
 */
class BankController extends Controller
{

    /**
     * @var BankService - service model
     */
    private $bankService;

    /**
     * BankController constructor.
     * @param $id
     * @param $module
     * @param BankService $model
     * @param array $config
     */
    public function __construct($id, $module,BankService $model, $config = [])
    {
        $this->bankService = $model;
        parent::__construct($id, $module, $config);
    }

    /**
     * give the funeral for the formation of the bank
     * @return object
     */
    public function actionGet()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $this->bankService->getBank();
    }
}
