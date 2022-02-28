<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  //
  public function user()
  {
    return $user = User::with('wishlist')->get();
  }

  public function validationUser(Request $request)
  {

    $user = User::where("user_name", "=", $request->user_name)->where("password", "=", $request->password)->get()->toArray();
    return $user;
    
  }
}
