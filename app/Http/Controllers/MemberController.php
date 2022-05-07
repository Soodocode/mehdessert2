<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;


class MemberController extends Controller
{
    
    function listed(Request $req)
    {
      return DB::table('users')
      ->where('id',3)
      ->get();
    }
}
