<?php


namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class AboutController extends BaseController
{
public function showAbout(){
    return 'About Details Information';
}
public function showSubject($theSubject){
    return"Details information about $theSubject";
}
}
