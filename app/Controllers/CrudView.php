<?php

namespace App\Controllers;

class CrudView extends BaseController
{
    public function index()
    {
        return view('view_list');
    }
    public function add_new()
    {
        return view('add_new');
    }
}
