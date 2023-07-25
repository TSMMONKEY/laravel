<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function client() {
        $allClients = Clients::paginate(10);
        // return $allClients;

        return view( 'pages.clients.clients', [
            'allClients' => $allClients,
        ] );
    }

    /**
    * Display a listing of the resource.
    */

    public function add_client() {
        return view( 'pages.clients.add-client' );
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
        $clients = new Clients;
        $clients->company_name = $request->input( 'company_name' );
        $clients->service = $request->input( 'services' );
        $clients->sites = $request->input( 'sites' );
        $clients->status = $request->input( 'status' );
        $clients->billed = $request->input( 'billed' );
        $clients->paid = $request->input( 'paid' );
        $clients->address1 = $request->input( 'address1' );
        $clients->address2 = $request->input( 'address2' );
        $clients->postalCode = $request->input( 'postcode' );
        $clients->state = $request->input( 'state' );
        $clients->city = $request->input( 'city' );
        $clients->phoneNumber = $request->input( 'phoneNumber' );

        $clients->save();
        return redirect( '/' );
    }

    /**
    * Display the specified resource.
    */

    public function show( Clients $clients ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( Clients $clients, $name, $id ) {
        $clientDetails = clients::where( [
            'id'=> $id,
            'company_name'=> $name,
        ] )->first();

        return view( 'pages.clients.edit-client', [
            'clientDetails' => $clientDetails
        ] );
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, Clients $clients, $name, $id ) {
        // return $clients;
        $clients = Clients::find( $id );
        $clients->company_name = $request->input( 'company_name' );
        $clients->service = $request->input( 'services' );
        $clients->sites = $request->input( 'sites' );
        $clients->status = $request->input( 'status' );
        $clients->billed = $request->input( 'billed' );
        $clients->paid = $request->input( 'paid' );
        $clients->address1 = $request->input( 'address1' );
        $clients->address2 = $request->input( 'address2' );
        $clients->postalCode = $request->input( 'postcode' );
        $clients->state = $request->input( 'state' );
        $clients->city = $request->input( 'city' );
        $clients->phoneNumber = $request->input( 'phoneNumber' );

        $clients->save();
        return redirect( '/dashboard' )->with( 'updateSuccess', $clients->company_name );
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( Clients $clients, $name,$id ) {
        $clients = Clients::find( $id );

        $clients->delete();

        return redirect('/clients')->with("deleteClient",$name);
    }
}
