<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;

class ComicController extends AdminController
{
    public function index()
    {
        return view('admin.comic.index');
    }
}
