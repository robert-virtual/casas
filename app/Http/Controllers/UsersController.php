<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
  //
  public function login(Request $req)
  {
    $user = User::where('email', $req->email)->first();
    if (!$user) {
      return redirect()->back()->with('email', $req->email);
    }
    if (!Hash::check($req->password, $user->password)) {
      return redirect()->back()->with('email', $req->email);
    }

    session(['uid' => $user->id]);
    session(['username' => $user->name]);
    return redirect('/');
  }
  public function registro(Request $req)
  {
    $user = new User;
    $user->name = $req->name;
    $user->email = $req->email;
    $user->password = Hash::make($req->password);
    $user->save();
    session(['uid' => $user->id]);
    session(['username' => $user->name]);
    return redirect('/');
  }

  public function logout()
  {
    session()->invalidate();
    return redirect('/');
  }
}
