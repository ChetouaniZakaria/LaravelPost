<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
       
        return view('about');
    }

    // //     public function posts(  $myid, $auteur = 'Auteur par défaut'){
      
// //         $posts = [
// //       1 => ['title' => 'Zakaria profile'],
// //       2 => ['title' => 'Hala Profile'],
// //   ];
// //   return view('posts.show', [
// //       'data' => $posts[$myid],
// //       'auteur' => $auteur
// //   ]);
//         return view('posts.show');
//     }
}
