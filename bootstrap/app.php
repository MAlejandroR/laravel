<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use App\Http\Middleware\ValidateHeaderMiddleware;
use App\Http\Middleware\SetHeaderMiddleware;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->api(append:ValidateHeaderMiddleware::class );
        $middleware->api(append:SetHeaderMiddleware::class );
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(fn(QueryException $e)=>errorQueryException($e));
        $exceptions->render(fn(ValidationException $e)=>errorValidationData($e));
        //
    })->create();


function errorQueryException(QueryException $e){
    return response()->json([
        "errors" => [
            "status" => 500,
            "title" => "Error en Base de Datos". $e->getMessage(),
            "datail"=>"LA base de datos no responde, Intentalo más tarde"
        ]
    ]);
}

function errorValidationData(ValidationException $e){

    return response()->json([
        "errors" => [
            "status" => 422,
            "title" => "Error Validando campo ",
            "datail"=> "Error en el campo ".key($e->errors()),
        ]
    ]);
}


