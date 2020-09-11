<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\clientes;
use Yajra\DataTables\DataTables;
class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       $cli = clientes::all();
        return view('clientes.index')-> with('cli',$cli);;
        }
        public function dataTable()
        {
            
            return DataTables::of(clientes::select('id', 'Nombre', 'Primer_apellido','Segundo_apellido', 'telefono', 'correo', 'documento', 'direccion', 'fecha_de_nacimiento')->get())
                
                ->addColumn('btn', 'clientes.dataTable.btn')
                ->rawColumns(['btn'])
                ->toJson();
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
