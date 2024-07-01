<?php

/// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        dd('Method called');
        $users = User::all();
        // dd($users);
        return view('admin.home', compact('users'));
    }
    public function edit(User $user)
{
    return view('admin.edit-user', compact('user'));
}

public function update(Request $request, User $user)
{
    $user->update($request->all());
    return redirect()->route('admin.dashboard')->with('success', 'User updated successfully.');
}

public function destroy(User $user)
{
    $user->delete();
    return redirect()->route('admin.dashboard')->with('success', 'User deleted successfully.');
}

}
