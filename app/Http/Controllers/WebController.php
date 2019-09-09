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

        /** Carga la seccion principal. */
        public function inicio(){
            $validation = (object) [
                'rules' => json_encode([
                    'nombre' => 'required|min:2|max:60',
                    'correo' => 'required|email|max:100',
                    'mensaje' => 'required',
                ]), 'messages' => json_encode([
                    'nombre:required' => 'El nombre no puede estar vacío.',
                    'nombre:min' => 'El nombre debe tener al menos :min caracteres.',
                    'nombre:max' => 'El nombre no puede tener mas de :max caracteres.',
                    'correo:required' => 'El correo no puede estar vacío.',
                    'correo:email' => 'El correo no tiene formato valido.',
                    'correo:max' => 'El correo no puede tener mas de :max caracteres.',
                    'mensaje:required' => 'El mensaje no puede estar vacio.',
                ]),
            ];
            
            return view('web.inicio', [
                'validation' => $validation,
            ]);
        }

        /** Carga el panel de administrador. */
        public function panel(){
            return view('web.panel', [
                //
            ]);
        }
    }