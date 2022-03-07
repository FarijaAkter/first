<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function index($id=' ')
    {
        //echo $id;
      //echo "index faru jh". $id;
        return view('user.header').view ('user.index',array('userid'=>$id)).view('user.footer');

    }
    function about()
    {
        return view('user.header').view ('user.about').view('user.footer');
    }
    function services()
    {
        return view('user.header').view ('user.services').view('user.footer');
    }

}
