<x-layouts.layout>
    <div class="max-h-full overflow-x-auto">
        @if (session()->has("status"))
            <div role="alert" class="alert alert-success">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 shrink-0 stroke-current"
                    fill="none"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{session()->get("status")}}</span>
            </div>





       @endif
        <a class="btn btn-sm m-3  btn-warning" href= {{route("alumnos.create")}}>Crear Alumno</a>

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
                    <!--Editar-->
                    <td>
                        <a href="{{route("alumnos.edit",$alumno->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="size-6 hover:bg-blue-600 hover:text-white hover:cursor-pointer">
                            <path
                                d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z"/>
                            <path
                                d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z"/>
                        </svg>
                        </a>

                    </td>
                    <td>
                        <form onsubmit=event.preventDefault() id="formulario{{$alumno->id}}" action="{{route("alumnos.destroy",$alumno->id)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button onclick=confirmarDelete({{$alumno->id}})>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                     class="size-6 hover:bg-red-700 hover:text-white hover:cursor-pointer">
                                    <path
                                        d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z"/>
                                    <path fill-rule="evenodd"
                                          d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087Zm6.133 2.845a.75.75 0 0 1 1.06 0l1.72 1.72 1.72-1.72a.75.75 0 1 1 1.06 1.06l-1.72 1.72 1.72 1.72a.75.75 0 1 1-1.06 1.06L12 15.685l-1.72 1.72a.75.75 0 1 1-1.06-1.06l1.72-1.72-1.72-1.72a.75.75 0 0 1 0-1.06Z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </form>

                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <script>
        function confirmarDelete (id){
            swal({
                title: "Confimar borrado",
                text: "Esta acción es irreversible",
                icon:"warning",
                buttons:true
            }).then(
                 (ok)=>{
                     if (ok){
                         const formulario =document.getElementById("formulario"+id);
                         formulario.submit();

                     }

            }

            )
        }
    </script>
</x-layouts.layout>


