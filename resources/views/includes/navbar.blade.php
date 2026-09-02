<div class="sidebar">
    <div class="logo">
        <h1>SENA</h1>
        <img src="{{ asset('Img/sena-logo.png') }}" alt="sena-logo" width="100">
        <br>
        <p>Panel Administrativo</p>
    </div>
    <ul class="menu">
        <li>
            <a class="{{ request()->routeIs('area.*') ? 'active' : '' }}" href="{{ route('area.create') }}">
                <i class="fas fa-layer-group"></i>
                Áreas
            </a>
            <hr>
        </li>
        <li>
            <a class="{{ request()->routeIs('computer.*') ? 'active' : '' }}" href="{{ route('computer.computador') }}">
                <i class="fas fa-desktop"></i>
                Computadores
            </a>
            <hr>
        </li>

        <li>
            <a class="{{ request()->routeIs('trainingcenter.*') ? 'active' : '' }}"
                href="{{ route('trainingcenter.registro') }}">
                <i class="fas fa-building"></i>
                Centros
            </a>
            <hr>
        </li>
        <li>
            <a class="{{ request()->routeIs('course.*') ? 'active' : '' }}" href="{{ route('course.registro') }}">
                <i class="fas fa-book"></i>
                Cursos
            </a>
            <hr>
        </li>
        <li>
            <a class="{{ request()->routeIs('teacher.*') ? 'active' : '' }}" href="{{ route('teacher.registro') }}">
                <i class="fas fa-chalkboard-user"></i>
                Instructores
                <hr>
            </a>
        </li>
        <li>
            <a class="{{ request()->routeIs('aprendiz.*') ? 'active' : '' }}" href="{{ route('aprendiz.registro') }}">
                <i class="fas fa-user-graduate"></i>
                Aprendices
                <hr>
            </a>
        </li>
        <li>
            <a class="{{ request()->routeIs('noticias.*') ? 'active' : '' }}" href="{{ route('noticias.index') }}">
                <i class="fas fa-newspaper"></i>
                Noticias
            </a>
        </li>

        <li>
            <a class="{{ request()->routeIs('informacion.*') ? 'active' : '' }}"
                href="{{ route('informacion.index') }}">
                <i class="fas fa-newspaper"></i>Quienes somos?
            </a>
        </li>
        <li>
            <a class="{{ request()->routeIs('uniforme.*') ? 'active' : '' }}" href="{{ route('uniforme.index') }}">
                <i class="fas fa-shirt"></i> Uniforme SENA
            </a>
        </li>
    </ul>
</div>
