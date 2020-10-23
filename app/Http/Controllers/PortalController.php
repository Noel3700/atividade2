<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    
   public function index(){
       return view('index');
   } 
    
    public function noticias(){
       return view('noticias');
   } 
    
    public function empresa(){
       return view('empresa');
   }
    
    public function ondestamos(){
       return view('onde-estamos');
   }
    
    public function contactos(){
       return view('contactos');
   }
    
    
    
    
    
    
    
    
    
    
    
    
  
    
}
