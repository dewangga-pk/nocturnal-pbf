<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users')->with(["users" => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $indonesia = json_decode(file_get_contents(base_path('/storage/indonesia.json')),true);
        return view('admin.edit_user')->with(["user"=>$user,"indonesia"=>$indonesia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //make validation
        $validation = Validator::make($request->all(),[
            "name" => ["required","string"],
            "email" => ["required","email"],
            "postalCode" => ["required","numeric"],
            "province" => ["required","string"],
            "city" => ["required","string"],
            "phoneNumber" => ["required","string"],
            "address" => ["required","string"],
        ]);

        //check validation
        if ($validation->fails()){
            toastError($validation->errors()->first());
            return redirect()->back();
        }

        try {

            //save image
            if ($request->has("password")){
                //update User with password
                User::where('id',$id)->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "postal_code" => $request->postalCode,
                    "province" => $request->province,
                    "city" => $request->city,
                    "phone_number" => $request->phoneNumber,
                    "full_address" => $request->address,
                    "password" => Hash::make($request->password)
                ]);
            }else{

                //update User without password
                User::where('id',$id)->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "postal_code" => $request->postalCode,
                    "province" => $request->province,
                    "city" => $request->city,
                    "phone_number" => $request->phoneNumber,
                    "full_address" => $request->address,
                    "password" => Hash::make($request->password)
                ]);
            }

            //return success message
            toastSuccess("Success update user");
            return redirect(route('users.index'));

        }catch (\Exception $exception){

            //return error message
            toastError($exception->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
