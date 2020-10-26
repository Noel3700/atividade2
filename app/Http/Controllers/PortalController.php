<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public $sites=[
        'Yamaha'=>'https://www.yamaha-motor.eu/pt/pt/',
        'BMW'=>'https://www.bmw-motorrad.pt/pt/home.html#/filter-todos',
        'Beta'=>'http://www.betaportugal.com/'
    ];
    
    public $noticias=[
        'BMW'=>['Nova BMW M 1000 RR'=>'https://www.bmw-motorrad.pt/pt/models/sport/m1000rr.html','imagem'=>'imagens/BMW.jpg'],
        'Campeao'=>['Campeao'=>'https://www.mxbars.net/2020/10/23/thibault-benistant-what-it-takes-to-win/','imagem'=>'imagens/yamahacamp.jpeg'],
        
    ];
    
    
   public function index(){
       return view('index',['sites'=>$this->sites]);
   } 
    
    public function noticias(){
       return view('noticias',['noticias'=>$this->noticias]);
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
    
    public function formulario(){
       return view('formulario');
   }
    
    public function enviado(){
       return view('');
   }
    
    
    
    
    
    
    
    
    
  
    
}
