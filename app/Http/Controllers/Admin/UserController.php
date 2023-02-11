<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends AdminController
{
    private $model;
    public function __construct()
    {
        // dd(auth()->check());
        $this->model = new User();
        $currentRoute = 'users';

        view()->share([
            'currentRoute' => $currentRoute,
            'table' => "admin." . $this->model->getTable(),
        ]);
    }
    public function index(Request $request)
    {
        $users = $this->model->query();

        if ($request->has('q')) {
            $users = $users->where('name', 'like', '%' . $request->get('q') . '%');
        }

        $users = $users->select([
            'id',
            'email',
            'avatar',
            'name',
            'nickname',
            'role',
            'phone',
            'location',
            'description',
            'gender',
            'created_at'
        ])
            ->paginate();

        foreach ($users as $user) {
            $user->role = $user->role_name;
            $user->gender = $user->gender_name;
        }

        return view('clients.admin.index', [
            'users' => $users,
        ]);
    }

    public function destroy($id)
    {
        $user = $this->model->query()->find($id);

        if ($user) {
            $user->delete();
        }

        return redirect()->back();
    }
}
