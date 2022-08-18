<?php

namespace app\core;

class Pages {

    public static function getHeader(){
        require_once __DIR__ . '/../../app/views/layout/header.php';
    }

    public static function getFooter(){
        require_once __DIR__ . '/../../app/views/layout/footer.php';
    }

    public static function getPage($view, $dados = array()) {
        require_once __DIR__ . '/../../app/views/' . $view . '.php';
    }

    public static function render($view, $dados = array()) {
        self::getHeader();
        self::getPage($view, $dados);
        self::getFooter();
    }
}
