<?php
namespace App\Controllers;
use \DraftMVC\DraftView as View;
class MainController extends \DraftMVC\DraftController {
    public function home() {
        $this->setLayout(new View('layouts/main2'));
    }
}