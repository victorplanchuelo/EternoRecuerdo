<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <a href="#" class="navbar-brand">ETERNO RECUERDO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}" tag="li"><a href="#" class="nav-link pl-0">Home</a></li>
                <li class="nav-item {{ (request()->is('/about*')) ? 'active' : '' }}" tag="li"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item {{ (request()->is('/teacher')) ? 'active' : '' }}"><a href="teacher.html" class="nav-link">Teacher</a></li>
                <li class="nav-item {{ (request()->is('/courses')) ? 'active' : '' }}"><a href="courses.html" class="nav-link">Courses</a></li>
                <li class="nav-item {{ (request()->is('/pricing')) ? 'active' : '' }}"><a href="pricing.html" class="nav-link">Pricing</a></li>
                <li class="nav-item {{ (request()->is('/blog')) ? 'active' : '' }}"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item {{ (request()->is('/contact*')) ? 'active' : '' }}"><a href="contact.html" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>