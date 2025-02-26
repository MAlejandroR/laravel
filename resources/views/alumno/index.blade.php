<x-layouts.layout>
    <div class="max-h-full overflow-x-auto">
        <table class="table table-xs table-pin-rows">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>DNI</th>
                <th>email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{$alumno->nombre}}</td>
                    <td>{{$alumno->dni}}</td>
                    <td>{{$alumno->email}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</x-layouts.layout>


