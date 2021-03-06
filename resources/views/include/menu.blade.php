<div class="collapse navbar-collapse" id="sidenav-collapse-main">
    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link {{(request()->segment(1)=='home') ? 'active':'' }}" href="{{ route('home') }}">
                <i class="ni ni-tv-2 text-orange"></i>
                <span class="nav-link-text">Inicio</span>
            </a>
        </li>

        @canany(['isAdmin','isUser'])
        <li class="nav-item">
            <a class="nav-link {{(request()->segment(1)=='user') ? 'active':'' }}" href="{{ route('user.index') }}">
                <i class="ni ni-single-02 text-orange"></i>
                <span class="nav-link-text">Usuarios</span>
            </a>
        </li>
        @endcanany

        @canany(['isAdmin'])
        <li class="nav-item">
            <a class="nav-link {{(request()->segment(1)=='roles') ? 'active':'' }}" href="{{ route('roles.index') }}">
                <i class="ni ni-paper-diploma text-orange"></i>
                <span class="nav-link-text">Roles</span>
            </a>
        </li>
        @endcanany

       
        <li class="nav-item">
            <a class="nav-link {{(request()->segment(1)=='clientes') ? 'active':'' }}" href="{{ route('clientes.index') }}">
                <i class="ni ni-single-02 text-orange"></i>
                <span class="nav-link-text">Clientes</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{(request()->segment(1)=='facturacion') ? 'active':'' }}" href="{{ route('facturacion.index') }}">
                <i class="ni ni-paper-diploma text-orange"></i>
                <span class="nav-link-text">Facturacion</span>
            </a>
        </li>
        

    </ul>
</div>
