<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ToysController extends Controller
{
   public function index()
   {
       try {
           dd(DB::connection()->getPdo());
       } catch (\Exception $e) {
           die("Could not connect to the database.  Please check your configuration.");
       }
       dd(1);
   }
}
