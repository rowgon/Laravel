<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Empresa;

class StaticPageController extends Controller
{
    /**
     * Muestra la página de inicio.
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Muestra la página "Acerca de nosotros".
     */
    public function about()
    {
        // return view('pages.about');
        
            // $datas= Empresa::where("id",">=",1)->get();
            $datas= Empresa::all();
            // $data= Empresa::where("id",2)->first();
            $data= Empresa::find(1);
            // echo $data;
            // foreach($datas as $data){
            //     // dd($data->name);
            //     echo $data->name;
            // dd($data->name);
            // return view('empresa');
            return view('pages.about', compact(['data','datas']));
        
        

    }

    /**
     * Muestra la página de servicios.
     */
    public function services()
    {
        return view('pages.services');
    }

    /**
     * Muestra la página de contacto.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Procesa el formulario de contacto.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleContact(Request $request)
    {
        // Validar los datos enviados por el formulario.
        $request->validate([
            'name' => 'required', // Nombre es obligatorio
            'email' => 'required|email', // Email válido es obligatorio
            'message' => 'required', // Mensaje es obligatorio
        ]);

        // Simular el envío del correo (puedes usar Mailtrap para pruebas).
        Mail::raw($request->message, function ($mail) use ($request) {
            $mail->to('example@mailtrap.io') // Dirección de destino
                 ->from($request->email, $request->name) // Remitente
                 ->subject('Mensaje del formulario de contacto'); // Asunto
        });

        // Redirigir de vuelta con un mensaje de éxito.
        return redirect()->back()->with('success', '¡Tu mensaje ha sido enviado!');
    }
}
