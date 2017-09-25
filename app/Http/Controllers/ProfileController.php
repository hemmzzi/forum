<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class ProfileController extends Controller
{
  public function index(){
    $profilethreads = DB::select('select * from threads');
    $email = DB::select('select email from users');
    $threadsinfo = [
      ['nafn' => 'Hermann Snorri Hermannsson',
       'published' => 'Laravel Controller',
       'body' => 'Hvernig býr maður til controller í Laravel?',
       'anchor' => 'https://laravel.com/docs/5.5/controllers'
      ],
      ['nafn' => 'Hermann Snorri Hermannsson',
       'published' => 'Laravel 5.5',
       'body' => 'Hver er munurinn á Laravel útgáfu 5.4 og 5.5?',
       'anchor' => 'https://laravel.com/docs/5.5/releases'
     ],
  ];
    return view('profile.profile', compact('threadsinfo', 'profilethreads', 'email'));
  }
}