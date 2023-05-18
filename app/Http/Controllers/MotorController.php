<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Manager;

class MotorController extends Controller
{

   public function index()
   {
        $users = DB::table('motor')->get();

        dd($users);

        return view('motor', $users);
   }

}
