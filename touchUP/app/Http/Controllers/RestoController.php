<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\User;
use Session;
use Crypt;
class RestoController extends Controller
{
    function index()
    {
        return view('home');

    }

    function list()
    {
        $data= Restaurant::all();
        return view('list',["data"=>$data]);
    }

    function add(Request $req)
    {
        //return $req->input();
        $resto = new Restaurant;
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->address=$req->input('address');
        $resto->save();
        $req->session()->flash('status','Restaurant Submitted Successfully');
        return redirect('list');
    }
    function delete($id)
    {
        //return $id;
        $restaurant = Restaurant::find($id); // First try to find the data based on id in database
        if(!empty($restaurant)) // check empty or not, if not empty then delete otherwise will give error
        {
               $restaurant->delete();
        }
        Session::flash('status','Restaurant deleted Successfully');// Earlier, there was wrong syntax here.
        return redirect('list');
    }
    function edit($id)
    {
        $data=Restaurant::find($id);
        return view('edit',['data'=>$data]);
    }

    function update(Request $req)
    {
        $resto = Restaurant::find($req->input('id'));
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->address=$req->input('address');
        $resto->save();
        $req->session()->flash('status','Restaurant updated successfully');
        return redirect('list');
    }
    function register(Request $req)
    {
        //echo Crypt::encrypt('123@abc');
        //return $req->input();
        $user= new User;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->password=Crypt::encrypt($req->input('password'));
        $user->contact=$req->input('contact');
        $user->save();
        $req->session()->put('user',$req->input('name'));
        return redirect('/');
    }
    function login(Request $req)
    {
        $user = User::where("email",$req->input('email'))->get();
        if(Crypt::decrypt($user[0]->password)==$req->input('password'))
        {
            $req->session()->put('user', $user[0]->name);
            return redirect('/');
        }

    }
}
