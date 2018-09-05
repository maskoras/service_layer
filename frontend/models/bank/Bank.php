<?php

namespace frontend\models\bank;

use frontend\baseInterfaces\bank\BankInterface;

use yii\db\ActiveRecord;

class Bank extends ActiveRecord implements BankInterface
{


    public static function tableName()
    {
        return 'bank';
    }

    public function attributes()
    {
        return [
             'bankMoney',
             'countInvestor',
             'lastOwner',
             'addTime',
             'stepTime',
        ];
    }


    public function rules()
    {
        return [
        ];
    }

    public function scenarios()
    {
        return [
            self::SCENARIO_DEFAULT => [  ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    /**
     * @return object
     */
    public function getOne() : object
    {
       return Bank::find()->orderBy([ 'id' => SORT_DESC ])->one();
    }
}
