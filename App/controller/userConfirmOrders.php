<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConfirmOrders
 *
 * @author lenovo
 */
//var_dump("hhhh");
require_once '../model/Order.php';
$model = new Order();

if(isset($_POST) && count($_POST) >0)
{
    $model->addOrder($_POST);
}
$result=$model->getUserProducts();
//var_dump($result);
//var_dump($result['users']);
include ("../../views/userConfirmOrders.php");
