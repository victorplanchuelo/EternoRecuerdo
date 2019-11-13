<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <a href="{{url('/')}}" class="navbar-brand">ETERNO RECUERDO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}" tag="li"><a href="{{url('/')}}" class="nav-link pl-0">Home</a></li>
                <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}" tag="li"><a href="{{url('about')}}" class="nav-link">Sobre nosotros</a></li>
                <li class="nav-item {{ (request()->is('homenajes')) ? 'active' : '' }}"><a href="teacher.html" class="nav-link">Homenajes</a></li>
                <li class="nav-item {{ (request()->is('colaboradores')) ? 'active' : '' }}"><a href="courses.html" class="nav-link">Colaboradores</a></li>
                <li class="nav-item {{ (request()->is('contacto')) ? 'active' : '' }}"><a href="{{url('contacto')}}" class="nav-link">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>