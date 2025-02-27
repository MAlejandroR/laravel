<nav class="md:h-10v bg-nav flex flex-col md:flex-row space-y-2 justify-start items-center px-4
space-x-3">
<button class="btn btn-sm btn-success">About</button>
<button class="btn btn-sm btn-glass">Noticias</button>
<button class="btn btn-sm btn-warning">Contacta</button>
@auth
    <a href="{{route('alumnos.index')}}" class="btn btn-sm btn-primary">Alumnos</a>
@endauth

</nav>
