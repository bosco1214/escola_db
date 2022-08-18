<?php

namespace app\controllers;

use \app\core\Pages;

class Site extends Pages{

    public function home(){
        self::render('layout/home');
    }
}