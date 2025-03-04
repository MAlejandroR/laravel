<x-layouts.layout>
{{--    @if ($errors->any)--}}
{{--        <ul>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <li> {{$error}}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    @endif--}}

    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Crear Alumno</h1>
        <!-- Es el tocken CSRF que envia correctamente el formulario -->
        <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="label">Nombre</label>
                <input type="text" name="nombre" value="{{old('nombre')}}" class="input input-bordered w-full" >
                @error("nombre")
                    <div class="text-red-600 text-sm">{{$message}}</div>
                @enderror
            </div>



            <div class="mb-4">
                <label class="label">Dni</label>
                <input type="text" name="dni" value="{{old('dni')}}" class="input input-bordered w-full" >
                @error("dni")
                    <div class="text-red-600 text-sm">{{$message}}</div>
                @enderror

            </div>

            <div class="mb-4">
                <label class="label">Email</label>
                <input type="email" name="email" value="{{old('email')}}" class="input input-bordered w-full">
                @error("email")
                    <div class="text-red-600 text-sm">{{$message}}</div>
                @enderror

            </div>



            <button type="submit" class="btn bg-green-600 text-white w-full">Guardar Alumno</button>
        </form>
    </div>

</x-layouts.layout>


