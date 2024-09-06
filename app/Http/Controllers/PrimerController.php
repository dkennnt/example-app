<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
class Controller extends BaseController
{
    public function showText($texto){
        return '<h1>'.$texto.'</h1>';
    }
}