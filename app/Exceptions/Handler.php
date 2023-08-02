<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        // Tratamento da exceção 404 (página não encontrada)
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
            return new JsonResponse(['status' => false, 'message' => 'Recurso não encontrado'], 404);
        }

        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\HttpException && $exception->getStatusCode() === 500) {
            return new JsonResponse(['status' => false, 'message' => 'Erro interno do servidor'], 500);
        }

        // Tratamento de outros erros HTTP
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\HttpException) {
            return new JsonResponse(['status' => false, 'message' => $exception->getMessage()], $exception->getStatusCode());
        }

        // Tratamento de erros não encontrados em rotas (404)
        if ($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
            return new JsonResponse(['status' => false, 'message' => 'Registro não encontrado'], 404);
        }

        return parent::render($request, $exception);
    }
}
