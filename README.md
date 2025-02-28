## Acceso a ficheros html: vistas
> para acceder a página html 
> > ./resources/views
> todas son con extensíon **blade.php**
> Puedo (debo) establecer carpetas para organizarlo
> No me dejo impresionar por la cantidad de ficheros que hay
> Si quiero acceder o referenciar una carpeta
> > carpeta.nombre

## Controladores
> están en app/http/controllers
> El código php que quiero que se ejecute ante una solicitud de una ruta
## Rutas
> La ruta es la url que quiero que mi app tenga
> LAs rutas se establecen en ./routes/web.php
> Se especifican con Route::verbo("url", ....)
> PAra poner nombre o alias a la ruta Route::verbo("url", ....)->name("alumnos.index")
> para referenciar una ruta por su nombre uso la funcion route("nombre")
> Las rutas puedes ser parametrizada (sobre todo haciendo un crud de un recurso).
> Una ruta parametrizda es aquella que en la url hay un parámetro (valor que puede cambiar), pe http://alumnos/1 o http://alumnos/5, donde 1 y 5 son el parámetro.
> cuando referencio una ruta por su nombre con la función route, para pasar el parémtro siempre lo haré como segundo argumento de la funcion route("nombre_ruua", parámetro)
> 
> 
> 
> 
> 
