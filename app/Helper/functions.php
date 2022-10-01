<?php

use App\Enums\UserRoleEnum;
use Illuminate\Support\Str;

if (!function_exists('user')) {
    function user(): ?object
    {
        return auth()->user();
    }
}

if (!function_exists('getRoleByKey')) {
    function getRoleByKey($key)
    {
        return UserRoleEnum::getKey($key);
    }
}

if (!function_exists('redirectTo')) {
    function redirectTo()
    {
        if (user()->role === UserRoleEnum::SUPER_ADMIN) {
            return redirect()->route('admin.index');
        } else {
            $role = Str::lower(getRoleByKey(user()->role));

            return redirect()->route("$role.index");
        }
    }
}
