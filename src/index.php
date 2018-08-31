<?php
/**
 * Created by PhpStorm.
 * User: menakafernando
 * Date: 8/31/18
 * Time: 1:44 PM
 */

Class Index{
    public function __construct()
    {
        echo 'Im Index';
        $this->other();
    }

    protected function other(){
        echo 'index other';
    }
}