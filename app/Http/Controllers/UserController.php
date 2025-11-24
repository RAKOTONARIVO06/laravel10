<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facadesuse\DB;
use App\Models\User;
class UserController extends Controller
{
  public function index()
  { //Pour creer de query builder on le fait soit avec le model comme ci dessous:
    $data['users']=User::orderBy('id','desc')->paginate(5);
    //soit avec l'objet DB:
    // $data=DB::table('users')->get(); //equivalent: select * from users
    // $data1=DB::table('users')->where('name','manohy')->first();//équivalent : select * from users where name='manohy' 
    // $data3=DB::table('users')->find(1); //équiv à: select * from users where id=1;
    // $data4=DB::table('users')->count();//equiv à: select count(id) from users


    return view('index',$data);
  }

  public function create(){
    return view('home',['framework'=>'laravel']);
  }

  public function show(User $user){
    return view('show',['user' => $user]);
  }
}