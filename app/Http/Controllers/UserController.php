<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // index method
    public function index()
    {
        // get all users from database with isAdmin = 0 with pagination
        $users = User::where('isAdmin', 0)->paginate(10);
        // return with users = $users
        return view('admin/users', ['users' => $users]);
    }
    // destroy method
    public function destroy(User $user)
    {
        // delete user
        $user->delete();
        // redirect to admin/users
        return redirect()->route('admin.users');
    }
}
