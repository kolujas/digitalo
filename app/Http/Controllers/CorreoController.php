<?php
    namespace App\Http\Controllers;

    use App\Mail\ContactarMail;
    use App\Mail\PreguntarMail;
    use App\Models\Web;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;

    class CorreoController extends Controller{
        /** 
         * Contacta a un Usuario con los Administradores.
         * 
         * @param $request Request
         */
        public function contactar(Request $request){
            $inputData = $request->input();

            $request->validate(Web::$reglas['contactar'], [
                'nombre.required' => 'El nombre no puede estar vacío.',
                'nombre.min' => 'El nombre debe tener al menos :min caracteres.',
                'nombre.max' => 'El nombre no puede tener mas de :max caracteres.',
                'correo.required' => 'El correo no puede estar vacío.',
                'correo.email' => 'El correo no tiene formato valido.',
                'correo.max' => 'El correo no puede tener mas de :max caracteres.',
                'mensaje.required' => 'El mensaje no puede estar vacio.',
            ]);

            $objDemo = new \stdClass();
            $objDemo->nombre = $inputData['nombre'];
            $objDemo->correo = $inputData['correo'];
            $objDemo->mensaje = $inputData['mensaje'];

            Mail::to('hola@digitalo.com.ar')->send(new ContactarMail($objDemo));

            return redirect()->route('correo.gracias');
        }

        /** 
         * Contacta a un Usuario con los Administradores.
         * 
         * @param $request Request
         */
        public function preguntar(Request $request){
            $inputData = $request->input();

            $request->validate(Web::$reglas['preguntar'], [
                'correo.required' => 'El correo es obligatorio.',
                'correo.max' => 'El correo no puede tener más de :max caracteres.',
                'suscriptor.numeric' => 'El número de suscripcion debe ser un valor numerico.',
                'suscriptor.exists' => 'El número de suscripcion debe ser un numero existente.',
                'descripcion.required' => 'El mensaje no puede estar vacío.',
            ]);

            $objDemo = new \stdClass();
            $objDemo->correo = $inputData['correo'];
            if(isset($inputData['suscriptor']) && $inputData['suscriptor'] != ''){
                $objDemo->suscriptor = $inputData['suscriptor'];
            }else{
                $objDemo->suscriptor = 'No cuenta o no aporto el número de suscriptor';
            }
            $objDemo->descripcion = $inputData['descripcion'];

            Mail::to('info@mutualcoop.org.ar')->send(new PreguntarMail($objDemo));

            return redirect()->route('suscripcion.listado')->with('status', 'Gracias por contactarte, te responderemos en la brevedad.');
        }

        /** De vuelve la visgta de mensaje de exito. */
        public function gracias(){
            return view('correo.gracias');
        }
    }