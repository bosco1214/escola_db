<?php

namespace app\controllers;

use \app\core\Pages;

class Site extends Pages{

    public function home(){
        self::render('layout/home');
    }

    public function exit(){
        unset($_SESSION['idAluno']);
        header("Location: http://localhost/escola_db/site/home/");
    }
}