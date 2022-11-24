<?php
namespace app\controllers;

class Subviews extends \app\core\Controller{
    public function test(){
        echo "<div id='test'>
            <h2>Subview test</h2>
        </div>";
    }
}