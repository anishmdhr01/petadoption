<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdoptController extends Controller
{
    function Register(Request $request){
    	$this->validate($request,[
         'FirstName'=>'required',
         'LastName'=>'required',
         'Email'=>'required|email|unique:register',
         'Password'=>'required|min:5|max:10',
         'ConfirmPassword'=>'required|same:Password'
        ]);

        $first_name = $request->input('FirstName');
        $last_name = $request->input('LastName');
        $email = $request->input('Email');
        $password = Hash::make($request->input('Password'));
        $data=array('FirstName'=>$first_name,"LastName"=>$last_name,"Email"=>$email,"Password"=>$password);
        $insert=DB::table('register')->insert($data);
        if($insert){
        	alert()->success('You have been registered.')->persistent('Close');
        	return redirect("login");
        }
        else{
        	alert()->error('Something went wrong. Please try again.')->persistent('Close');
        	return back();
        }
    }

    function Surrender(Request $request){
        if(session()->has('data')){
            $this->validate($request,[
             'pet'=>'required|min:1',
             'category'=>'required|max:1',
             'vaccine'=>'required|max:1',
             'Reason'=>'required'
            ]);

            $pet =implode(",",$request->input('pet'));
            $category=implode(",",$request->input('category'));
            $vaccine=implode(",",$request->input('vaccine'));
            $reason= $request->input('Reason');

            $name=$request->session()->get('data');
            $demail = DB::table('register')->where('FirstName',$name)->value('Email');
            $did = DB::table('register')->where('FirstName',$name)->value('Id');

            $data=array("Pet"=>$pet,"Category"=>$category,"Reason"=>$reason,"Email"=>$demail,"Vaccination"=>$vaccine,"User_Id"=>$did);
            $insert=DB::table('surrender')->insert($data);
            if($insert){
            	alert()->success('Thank You for surrendering your pet for us.')->persistent('Close');
            	return back();
            }
            else{
            	alert()->error('Something went wrong. Please try again.')->persistent('Close');
            	return back();
            }
        }
        else{
            alert()->error('You are not loged in. Please login to adopt.')->persistent('Close');
            return back();
        }
    }

    function Login(Request $request){
    	$email = $request->get('email');
        $password = $request->get('password');

		$demail = DB::table('register')->where('Email',$email)->value('Email');
        $dpassword = DB::table('register')->where('Email',$email)->value('Password');
        $dname = DB::table('register')->where('Email',$email)->value('FirstName');
 		if($demail=="adminbinodkr@gmail.com"){
 			if(Hash::check($password,$dpassword)){
 				$request->session()->put('data',$dname);
 				return redirect('/admindetail');
 			}
            else{
 				alert()->error('Your password is wrong.')->persistent('Close');
        		return back();
 			}
 		}
        elseif($demail){
            if(Hash::check($password,$dpassword)){
                $request->session()->put('data',$dname);
                return redirect('/homepage');
            }
            else{
                alert()->error('Your password is wrong.')->persistent('Close');
                return back();
            }
        }
        else{
 			alert()->error('Your email is wrong.')->persistent('Close');
        	return back();
 		}
    }

    function Adoption(Request $request){
        if(session()->has('data')){
            $name=$request->session()->get('data');
            $did = DB::table('register')->where('FirstName',$name)->value('id');
            $petid=$request->input('petid');
            $data=array('User_Id'=>$did,"Pet_Id"=>$petid);
            $insert=DB::table('adopted')->insert($data);
            alert()->success('Thank You for adoption. We will contact you soon.')->persistent('Close');
            return back();
        }
        else{
            alert()->error('You are not loged in. Please login to adopt.')->persistent('Close');
            return back();
        }
    }

    function EditDetail($Pet_Id){
        $data=DB::select('select * from detail where Pet_Id = ?',[$Pet_Id]);
        return view('editeddetail',['data'=>$data]);
    }

    function UpdateDetail(Request $request,$Pet_Id){
        $this->validate($request,[
            'Breed'=>'required',
            'Weight'=>'required',
            'Color'=>'required',
            'Gender'=>'required',
            'Age'=>'required',
            'Fee'=>'required',
            'Description'=>'required'
        ]);

        $breed = $request->input('Breed');
        $weight = $request->input('Weight');
        $color = $request->input('Color');
        $age = $request->input('Age');
        $gender = $request->input('Gender');
        $fee = $request->input('Fee');
        $description=$request->input('Description');

        $update=DB::update('update detail set Breed=?,Weight=?,Color=?,Gender=?,Age=?,Fee=?,Description=? where Pet_Id = ?',[$breed,$weight,$color,$gender,$age,$fee,$description,$Pet_Id]);
        if($update){
            alert()->success('Data have been updated.')->persistent('Close');
            return redirect("admindetail");
        }
        else{
            alert()->error('Something went wrong. Please try again.')->persistent('Close');
            return back();
        }
    }

    function DeleteDetail($Pet_Id){
        $delete=DB::delete('delete from detail where Pet_Id=?',[$Pet_Id]);
        if($delete){
            alert()->success('Data have been deleted.')->persistent('Close');
            return back();
        }
        else{
            alert()->error('Something went wrong. Please try again.')->persistent('Close');
            return back();
        }
    }

    function DeleteSurrender($User_Id){
        $delete=DB::delete('delete from surrender where User_Id=?',[$User_Id]);
        if($delete){
            alert()->success('Data have been deleted.')->persistent('Close');
            return back();
        }
        else{
            alert()->error('Something went wrong. Please try again.')->persistent('Close');
            return back();
        }
    }

    function DeleteRegister($User_Id){
        $delete=DB::delete('delete from register where User_Id=?',[$User_Id]);
        if($delete){
            alert()->success('Data have been deleted.')->persistent('Close');
            return back();
        }
        else{
            alert()->error('Something went wrong. Please try again.')->persistent('Close');
            return back();
        }
    }

    function DeleteAdopted($User_Id,$Pet_Id){
        $delete=DB::delete('delete from adopted where User_Id=? and Pet_Id=?',[$User_Id,$Pet_Id]);
        if($delete){
            alert()->success('Data have been deleted.')->persistent('Close');
            return back();
        }
        else{
            alert()->error('Something went wrong. Please try again.')->persistent('Close');
            return back();
        }
    }

    function AddDetail(Request $request){
        $this->validate($request,[
            'Breed'=>'required',
            'Weight'=>'required',
            'Color'=>'required',
            'Gender'=>'required',
            'Age'=>'required',
            'Fee'=>'required',
            'Description'=>'required'
        ]);

        $breed = $request->input('Breed');
        $weight = $request->input('Weight');
        $color = $request->input('Color');
        $age = $request->input('Age');
        $gender = $request->input('Gender');
        $fee = $request->input('Fee');
        $description=$request->input('Description');

        $data=array('Breed'=>$breed,"Weight"=>$weight,"Color"=>$color,"Age"=>$age,"Gender"=>$gender,"Fee"=>$fee,"Description"=>$description);
        $insert=DB::table('detail')->insert($data);

        if($insert){
            alert()->success('Data have been added.')->persistent('Close');
            return redirect("admindetail");
        }
        else{
            alert()->error('Something went wrong. Please try again.')->persistent('Close');
            return back();
        }
    }
}