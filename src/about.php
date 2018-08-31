<?php
/**
 * Created by PhpStorm.
 * User: menakafernando
 * Date: 8/31/18
 * Time: 1:43 PM
 */

Class About{
    public function __construct()
    {
        echo 'Im about';
        $this->other();
    }

    protected function other(){
        echo 'about other';
    }
}