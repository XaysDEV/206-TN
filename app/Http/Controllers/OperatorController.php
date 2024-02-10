<?php

namespace App\Http\Controllers;


use App\Models\Role;
use App\Models\operas;
use App\Models\opera_status;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Operator;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('operator.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $opera_status = opera_status::where('del',1)->get();
        return view('operator.create', compact('opera_status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
