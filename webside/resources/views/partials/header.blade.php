{{-- resources/views/partials/header.blade.php --}}

<header>
    <nav>
        <a href="{{ route('home') }}">
            <i class="fas fa-home icon"></i>Inicio
        </a>
        <a href="{{ route('proyecto') }}">
            <i class="fas fa-project-diagram icon"></i>Proyecto
        </a>
        <a href="{{ route('contacto') }}">
            <i class="fas fa-envelope icon"></i>Contacto
        </a>
    </nav>
</header>