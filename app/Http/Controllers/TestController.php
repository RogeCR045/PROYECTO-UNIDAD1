<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tests.index');
        //print("Hola mundo");
        //cargar una vista
        //cargar view('ruta.vista');-->Cargar vista sin datos
       
        //cargar vista con datos
        //$data = query--variable que almacena datos
        //return view('ruta.vista', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lineaHorizontal = '----------------------------------------------------';
        $lineaVacia  = PHP_EOL;
        $titulo      = 'Pelicula: ';
        $dir         = 'Director: ';
        $fecha       = 'Fecha de estreno: ';
        $sinopsis    = 'Sinopsis: '; 

        $archivo = fopen('C:\Users\karina\Desktop\Archivos\Datos\datos.txt', 'a');

        $title     = $_REQUEST['title'];
        $director  = $_REQUEST['director'];
        $date      = $_REQUEST['date'];
        $synopsis  = $_REQUEST['synopsis'];

        fwrite($archivo, $titulo.$title.$lineaVacia.$lineaVacia);
        fwrite($archivo, $dir.$director.$lineaVacia.$lineaVacia);
        fwrite($archivo, $fecha.$date).$lineaVacia.$lineaVacia;
        fwrite($archivo, $sinopsis.$synopsis.$lineaVacia.$lineaHorizontal.$lineaVacia);

        fclose($archivo);

        return view('tests.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }

    public function downloadFile(){
        //
    }

    public function zip(){
        //
        return view('tests.zip');
    }

    public function readCSV(){
        return view('tests.readCSV');
    }

    public function compress(){
       
    }
}
