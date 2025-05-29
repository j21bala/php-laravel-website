<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request; // Asegúrate de que esta línea 'use' esté presente

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * En entornos como Codespaces, configurar esto a '*' es lo más sencillo
     * para confiar en el proxy que reenvía las solicitudes.
     * Para producción, serías más específico.
     *
     * @var array|string|null
     */
    protected $proxies = '*'; // Confía en todos los proxies (importante para Codespaces)

    /**
     * The headers that should be used to detect proxies.
     *
     * Configura Laravel para usar todos los encabezados X-Forwarded estándar
     * para determinar correctamente el esquema, host y puerto de la solicitud original.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}