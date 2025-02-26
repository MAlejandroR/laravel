<x-layouts.layout>
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Crear Alumno</h1>
        <!-- Es el tocken CSRF que envia correctamente el formulario -->
        <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="label">Nombre</label>
                <input type="text" name="nombre" class="input input-bordered w-full" >
            </div>


            <div class="mb-4">
                <label class="label">Edad</label>
                <input type="text" name="dni" class="input input-bordered w-full" >
            </div>

            <div class="mb-4">
                <label class="label">Email</label>
                <input type="email" name="email" class="input input-bordered w-full">
            </div>



            <button type="submit" class="btn bg-green-600 text-white w-full">Guardar Alumno</button>
        </form>
    </div>

</x-layouts.layout>


