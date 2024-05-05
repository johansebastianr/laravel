<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pqrsd;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::orderBy('id', 'desc')->get();
        $pqrsds = Pqrsd::orderBy('id', 'desc')->get();
        
        return view('formulario.view', compact('clientes', 'pqrsds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
// Store a newly created resource in storage.
public function store(Request $request)
{
    // Crear un nuevo cliente
    $cliente = new Cliente();
    $cliente->primerNombre = $request->primerNombre;
    $cliente->segundoNombre = $request->segundoNombre;
    $cliente->primerApellido = $request->primerApellido;
    $cliente->segundoApellido = $request->segundoApellido;
    $cliente->tipoDocumento = $request->tipoDocumento;
    $cliente->numeroIdentificacion = $request->numeroIdentificacion;
    $cliente->fechaNacimiento = $request->fechaNacimiento;
    $cliente->genero = $request->genero;
    $cliente->direccion = $request->direccion;
    $cliente->save();

    // Crear un nuevo Pqrsd
    $pqrsd = new Pqrsd();
    $pqrsd->idCliente = $cliente->id;
    $pqrsd->correoElectronico = $request->correoElectronico;
    $pqrsd->esAnonima = $request->esAnonima;
    $pqrsd->tipoPqrsd = $request->tipoPqrsd;
    $pqrsd->tipoPersona = $request->tipoPersona;
    $pqrsd->descripcionSolicitud = $request->descripcionSolicitud;
    $pqrsd->estado = $request->estado;

    // Verificar si se ha enviado un archivo

    if ($request->hasFile("urlPdf") && $request->file("urlPdf")->isValid()) {
        $file = $request->file("urlPdf");
        $extension = $file->getClientOriginalExtension();
        $nombreArchivo = "pdf_" . time() . "." . $extension;
        $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo);
        $pqrsd->urlPdf = $nombreArchivo;
        $pqrsd->save();
    }
    

    // Redireccionar a alguna vista o ruta
    return redirect()->route('formulario.index');
}


    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
