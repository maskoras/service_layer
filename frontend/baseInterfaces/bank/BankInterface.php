<?php
/**
 * Created by PhpStorm.
 * User: koras
 * Date: 05.09.18
 * Time: 2:36
 */

namespace frontend\baseInterfaces\bank;

interface BankInterface
{
    public function getOne(): object;
}