<?php

namespace App\Http\Controllers;

use App\User;
// use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index($username) {

    $user = User::findOrFail($username);

    return view ('profile.index', [
      'user' => $user
    ]);
  }
}
