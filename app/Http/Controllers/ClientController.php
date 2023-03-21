<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
 

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients=Client::all();
        return response()->json($clients);

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
       
      
/*metodo1 insert

 $client->name=$request->name;
        $client->email=$request->email;
        $client->phone=$request->phone;
        $client->address=$request->address;
        $client->save();
        $data=[
            'message'=> 'Actualizado correctamente',
            'cliente'=> $client
        ];
       return response()->json($data);


**metodo2
       $arrayObjeto = array(
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'address'=>$request->address,
       );
        $resultado = DB::table('clients')->insert($arrayObjeto);
           $data=[
            'message'=> 'Registrado correctamente',
            'cliente'=> $resultado
        ];
       return response()->json($data);
       */
      $name=$request->name;
      $phone=$request->phone;
      $email=$request->email;
      $address=$request->address;

  $sql = "INSERT INTO clients(name,phone,email,address) VALUES ('$name','$phone','$email','$address')";
        
  $resultado = DB::insert($sql);
           $data=[
            'message'=> 'Registrado correctamente',
            'cliente'=> $resultado
        ];
       return response()->json($data);

       
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
        return response()->json($client);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
        $client->name=$request->name;
        $client->email=$request->email;
        $client->phone=$request->phone;
        $client->address=$request->address;
        $client->save();
        $data=[
            'message'=> 'Actualizado correctamente',
            'cliente'=> $client
        ];
       return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
        $client->delete();
        $data=[
            'message'=> 'Actualizado correctamente',
            'cliente'=> $client
        ];
       return response()->json($data);
    }

    public function ListarClientes(){
         $data=Client::ListClientes();
        return response()->json($data);


    }
    
}
