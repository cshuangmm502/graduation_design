<?php
/**
 * Created by PhpStorm.
 * User: 75157
 * Date: 2018/3/22
 * Time: 8:49
 */

class BaseApp{
    protected function getInformation(){}

    protected function outputHead(){}

    protected function outputBody(){}

    protected function outputTail(){}

    public function run(){
        $this->getInformation();
        $this->outputHead();
        $this->outputBody();
        $this->outputTail();
    }
}