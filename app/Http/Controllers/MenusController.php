<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function index_1(){
        return view("menus.le-fasaec");
    }
    public function index_2(){
        return view("menus.droits-protection-sociale");
    }
    public function index_3(){
        return view("menus.artistes-numerique-ia");
    }
    public function index_4(){
        return view("menus.aides-accompagnement");
    }
    public function index_5(){
        return view("menus.actualites");
    }
    public function index_6(){
        return view("menus.contact");
    }

}
