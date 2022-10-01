<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function test()
    {
        User::query()->create([
            'name' => 'Test',
            'nickname' => 'test1',
            'email' => 'phanxuansy812@gmail.com',
            'password' => Hash::make('123123123'),
            'role' => 3,
            'avatar' => 'storage\user_images\user_2\avatar.jpg',
        ]);
    }
}
