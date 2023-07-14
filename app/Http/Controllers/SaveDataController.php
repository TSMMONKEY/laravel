<?php

namespace App\Http\Controllers;

use App\Models\SaveData;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SaveDataController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index( Request $request ) {
        return view( 'pages.home' );
    }

    /**
    * Display a listing of the resource.
    */

    public function about( Request $request ) {
        return view( 'pages.about' );
    }

    /**
    * Display a listing of the resource.
    */

    public function contact( Request $request ) {
        return view( 'pages.contact' );
    }

    /**
    * Display a listing of the resource.
    */

    public function thank_you( Request $request ) {
        return view( 'pages.thank-you' );
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {
        $name =  $request->input( 'first-name' );
        $lastName =  $request->input( 'last-name' );
        $email =  $request->input( 'subscribe-email' );
        $textArea =  $request->input( 'message' );

        $SaveData = new SaveData();
        $SaveData->name = $name;
        $SaveData->last_name = $lastName;
        $SaveData->email = $email;
        $SaveData->text_area = $textArea;

        try {
            $SaveData->save();
            return redirect( '/thank-you' );
        } catch ( QueryException $e ) {
            if ( $e->getCode() == '23000' && strpos( $e->getMessage(), 'save_data_email_unique' ) !== false ) {
                return redirect()->back()->withErrors( [ 'subscribe-email' => 'This email is already registered.' ] )->withInput();
            }
        }
    }

    /**
    * Display the specified resource.
    */

    public function show( SaveData $saveData ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( SaveData $saveData ) {
        //
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, SaveData $saveData ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( SaveData $saveData ) {
        //
    }
}
