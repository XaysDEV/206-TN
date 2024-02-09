<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone'=>'required',
            'password'=>'required',
        ],[
            'phone.required'=>'ກະລຸນາໃສ່ເບີໂທກ່ອນ!',
            'password.required'=>'ກະລຸນາໃສ່ລະຫັດຜ່ານກ່ອນ!',
        ]);
        if  (Auth::attempt([
            'phone'=>$request->phone,
            'password'=>$request->password,
        ]))
        {
            return redirect()->route('dashboard.index')->with('success', 'ເຂົ້າລະບົບສຳເລັດ');
        }else
        {
            return redirect()->back()->with('message','ເບີໂທ ຫຼື ລະຫັດຜ່ານບໍຖືກຕ້ອງ ກະລຸນາກວດຄືນໃໝ່');
        }

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
