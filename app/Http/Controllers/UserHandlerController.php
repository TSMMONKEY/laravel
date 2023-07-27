<?php

namespace App\Http\Controllers;

use App\Models\UserHandler;
use App\Models\Clients;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserHandlerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = DB::table('clients')->paginate(15);
        $user = Auth::user();

        return view('user.home',[
            "clients" => $client,
            "userDetails" => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(UserHandler $userHandler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserHandler $userHandler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserHandler $userHandler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserHandler $userHandler)
    {
        //
    }
}