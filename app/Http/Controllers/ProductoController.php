<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $registros = Producto::where('nombre', 'like', '%' . $texto . '%')->paginate(10);
        return view('producto.index', compact('registros', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $producto = new Producto();
        return view('producto.action', ['producto' => $producto]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductoRequest $request)
    {
        $producto = new Producto;
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->activo = $request->input('activo');
        $producto->categoria_id = $request->input('categoria_id');
        $producto->save();
    
        return response()->json([
            'status' => 'success',
            'message' => 'Producto creado satisfactoriamente',
            //'data' => $producto
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return "Mostrar";
        //return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.action', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductoRequest $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->activo = $request->activo;
        $producto->categoria_id = $request->categoria_id;
        $producto->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Producto actualizado satisfactoriamente',
            //data' => $producto
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return response()->json([
            'status' => 'success',
            'message' => $producto->nombre . ' Eliminado'
        ]);
    }
}