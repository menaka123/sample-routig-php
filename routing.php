<?php
/**
 * Created by PhpStorm.
 * User: menakafernando
 * Date: 8/31/18
 * Time: 12:43 PM
 */

class Route{

    private $_uri = [];
    private $_method = [];

    public function add($uri, $method = null) {
        $this->_uri[] =  '/' .trim($uri, '/') ;

        if($method != null) {
            $this->_method[] = $method;
        }
    }

    public function submit(){

        $uriParam = isset( $_GET['uri']) ? '/' .$_GET['uri'] : '/';

        foreach ($this->_uri as $key => $value) {

            if(preg_match("#^$value$#", $uriParam)) {

                if(is_string( $this->_method[$key])){
                    $method = $this->_method[$key];
                    new $method();
                } else{
                    call_user_func($this->_method[$key]);
                }

            }
        }
    }

}