<?php
/**
 * Created by PhpStorm.
 * User: akinak1
 * Date: 2016-11-12
 * Time: 11:52
 */



class Main {
    public $name;

    public function printHello(){
        echo ($this->name);
    }
}


class Sergey extends Main{
   public $name = 'Sergey';

}