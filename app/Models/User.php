<?php

namespace App\Models;

use App\Enums\UserRoleEnum;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'nickname',
        'email',
        'password',
        'role',
        'status',
        'avatar',
        'location',
        'gender',
        'phone',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getGenderNameAttribute()
    {
        if ($this->gender === 0) return 'Male';

        return 'Female';
    }

    public function getRoleNameAttribute()
    {
        $role = UserRoleEnum::getKey($this->role);

        $role = Str::title(Str::replace('_', ' ', $role));

        return $role;
    }

    public function getCreatedAtTimeAttribute()
    {
        return $this->created_at->format('d/m/Y H:i');
    }
}
