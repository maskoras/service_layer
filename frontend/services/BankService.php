<?php
/**
 * Created by PhpStorm.
 * User: koras
 * Date: 05.09.18
 * Time: 2:32
 */
namespace frontend\services;

use frontend\models\bank\Bank;

/**
 * Class BankService
 * business logic for working with a bank
 * The bank is replenished from the contract
 * @package frontend\services
 */
class BankService
{

    private $bank;

    /**
     * BankService constructor.
     * @param Bank $bank
     */
    public function __construct(Bank $bank)
    {
        $this->bank = $bank;
    }

    /**
     * @return object
     */
    public function getBank()
    {
        return $this->bank->getOne();
    }
}
