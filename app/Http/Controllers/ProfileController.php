<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yoeunes\Toastr\Toastr;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $transaction = Transaction::with('itemsSelecteds')
            ->withCount('itemsSelecteds')
            ->where('user_id',auth()->id())
            ->get();


        $indonesia = json_decode(file_get_contents(base_path('/storage/indonesia.json')),true);
        return view('account')->with(["indonesia" => $indonesia,"transactions" => $transaction]);
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'frontName' => ['required', 'string', 'max:255'],
            'behindName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phoneNumber' => ['required','numeric', 'string'],
            'address' => ['required','string'],
            'province' => ['required','string'],
            'city' => ['required','string'],
            'postalCode' => ['required','string','numeric'],
        ]);

        //check validation
        if ($validation->fails()){
            //redirect back if not valid
            toastError($validation->errors()->first());
            return redirect()->back();
        }

        try {
            //update user data
            $user = User::find($id);
            $user->name = $request->frontName.' '.$request->behindName;
            $user->email = $request->email;
            $user->phone_number = $request->phoneNumber;
            $user->full_address = $request->address;
            $user->province = $request->province;
            $user->city = $request->city;
            $user->postal_code = $request->postalCode;
            $user->save();

            //redirect back with success message
            toastSuccess("Success update your profile");
            return redirect()->back();
        }catch (\Exception $exception){
            //redirect back with error message
            toastError($exception->getMessage());
            return redirect()->back();
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
