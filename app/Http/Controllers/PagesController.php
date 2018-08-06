<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
     public function getLicences() { 		
   		return view('pages/licences');
   }

   public function getUsers() {
   	return view('pages/users');
   }

    public function getAdmin() {
   	return view('pages/admin');
   }
   
   public function getIndex() {
   	return view('pages/welcome');
   }

}


