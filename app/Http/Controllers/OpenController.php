<?php

namespace App\Http\Controllers;

use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

class OpenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function open()
    {
        try {

            $connector = new WindowsPrintConnector("open2");
            
            $printer = new Printer($connector);
            $printer -> text("Hello World!\n");
            $printer -> text("Hello World!\n");
            $printer -> text("Hello World!\n");
            $printer -> text("Hello World!\n");
            $printer -> text("Hello World!\n");
            $printer -> text("Hello World!\n");
            $printer -> text("Hello World!\n");
            $printer -> text("Hello World!\n");
            $printer -> text("Hello World!\n");
            $printer -> text("Hello World!\n");
            $printer -> text("Hello World!\n");
            $printer -> text("Hello World!\n");
            $printer -> cut();
            
            $printer -> close();

            return response()->json(['message' => 'ok']);
        } catch (\Exception $e) {
            return response()->json(['message' =>  "".$e -> getMessage().""]);
        }
    }
}
