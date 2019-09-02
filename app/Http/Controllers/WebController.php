<?php
    namespace App\Http\Controllers;

    use App\Models\Producto;
    use Illuminate\Http\Request;

    class WebController extends Controller{
        /** Carga el modo construccion. */
        public function construccion(){
            return view('web.construccion', [
                //
            ]);
        }

        /** Carga la demo. */
        public function demo(){
            return view('web.inicio', [
                //
            ]);
        }

        /** Carga la seccion principal. */
        public function inicio(){
            return view('web.inicio', [
                //
            ]);
        }

        /** Carga el panel de administrador. */
        public function panel(){
            return view('web.panel', [
                //
            ]);
        }
    }