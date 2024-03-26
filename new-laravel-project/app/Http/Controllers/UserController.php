<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('crud.index', compact('users'));
    }

    public function create()
    {
        // Return view for creating a new user
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
        ]);

        // Create a new user
        User::create($validatedData);

        // Redirect back with success message
        return redirect()->route('crud.index')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('crud.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
        ]);

        // Update the user
        $user = User::findOrFail($id);
        $user->update($validatedData);

        // Redirect back with success message
        return redirect()->route('crud.index')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        // Delete the user
        User::destroy($id);

        // Redirect back with success message
        return redirect()->route('crud.index')->with('success', 'User deleted successfully.');
    }
}
