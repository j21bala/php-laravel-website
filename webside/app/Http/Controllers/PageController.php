<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Aunque no se usa en este ejemplo básico, es bueno tenerlo por si necesitas el Request más adelante.

class PageController extends Controller // Importante: extiende el 'Controller' base que vimos arriba
{
    /**
     * Muestra la página de inicio.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('home'); // Devuelve la vista 'resources/views/home.blade.php'
    }

    /**
     * Muestra la página de proyectos.
     *
     * @return \Illuminate\View\View
     */
    public function proyecto()
    {
        return view('proyecto'); // Devuelve la vista 'resources/views/proyecto.blade.php'
    }

    /**
     * Muestra la página de contacto.
     *
     * @return \Illuminate\View\View
     */
    public function contacto()
    {
        return view('contacto'); // Devuelve la vista 'resources/views/contacto.blade.php'
    }
}