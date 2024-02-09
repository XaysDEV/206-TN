<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rank;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('del',1)->get();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $role = Role::where('del',1)->get();
        $rank = Rank::where('del',1)->get();
        return view('user.create', compact('role','rank'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'rank_id'=>'required',
            'name'=>'required',
            'phone'=>'required|unique:users',
            'password'=>'required|min:6',
            'confirmpassword'=>'required|same:password',
            'role_id'=>'required'

        ],[
            'rank_id.required'=>'ທ່ານຍັງບໍໄດ້ເລືອກຊັ້ນຜູ້ໃຊ້!',
            'name.required'=>'ໃສ່ຊື່ຜູ້ໃຊ້ງານກ່ອນ!',
            'phone.required'=>'ກະລຸນາໃສ່ເບີໂທກ່ອນ!',
            'phone.unque'=>'ເບີໂທນີ້ໄດ້ມີຝນລະບົບແລ້ວ!',
            'password.required'=>'ໃສ່ລະຫັດຜ່ານກ່ອນ!',
            'password.min'=>'ລະຫັດຜ່ານໜ້ອຍກວ່າ 6 ຕົວ!',
            'confirmpassword.required'=>'ກະລຸນາຢືນຢັນລະຫັດຜ່ານກ່ອນ!',
            'confirmpassword.same'=>'ຢືນຢັນລະຫັດບໍຕົງກັນ!',
            'role_id.required'=>'ທ່ານຍັງບໍໄດ້ເລືອກສິດຜູ້ໃຊ້'
        ]);
        User::create([
            'rank_id'=>$request->rank_id,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'password'=>bcrypt($request->password),
            'address'=>$request->address,
            'role_id'=>$request->role_id
        ]);
        return redirect()->route('user.index')->with('success','ເພີ່ມຂໍ້ມູນສຳເລັດ');
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
        $user = User::find($id);

        $role = Role::where('del',1)->get();
        $rank = Rank::where('del',1)->get();
        return view('user.edit', compact('user','role','rank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
            'rank_id'=>'required',
            'name'=>'required',
            'phone'=>'required',
            'role_id'=>'required'

        ],[
            'rank_id.required'=>'ທ່ານຍັງບໍໄດ້ເລືອກຊັ້ນຜູ້ໃຊ້!',
            'name.required'=>'ໃສ່ຊື່ຜູ້ໃຊ້ງານກ່ອນ!',
            'phone.required'=>'ກະລຸນາໃສ່ເບີໂທກ່ອນ!',
            'role_id.required'=>'ທ່ານຍັງບໍໄດ້ເລືອກສິດຜູ້ໃຊ້'
        ]);
        if($request->input('password'))
        {
            $user_data = [
                'rank_id'=>$request->rank_id,
                'name'=>$request->name,
                'phone'=>$request->phone,
                'password'=>bcrypt($request->password),
                'address'=>$request->address,
                'role_id'=>$request->role_id
            ];
        }
        else
        {
            $user_data = [
                'rank_id'=>$request->rank_id,
                'name'=>$request->name,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'role_id'=>$request->role_id
            ];
        }
        $user->update($user_data);
        return redirect()->route('user.index')->with('success', 'ແກ້ໄຂຂໍ້ມູນສຳເລັດ!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->del=0;
        $user->save();
        return redirect()->back()->with('success', 'ລືມຂໍ້ມູນສຳເສັດ');
    }

}
