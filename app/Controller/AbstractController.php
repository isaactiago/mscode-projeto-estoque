<?php

namespace App\Controller;

abstract class AbstractController
{
    //metodo responsavel por retornar o centeudo (view) 
    public function render(string $viewName, array $data = []): void
    {
        require_once($_SERVER['DOCUMENT_ROOT'] . '/' . '/view/' . $viewName);
    }

    public function showJson(array $data): never
    {
        header("Content-Type: application/json");
        echo json_encode($data);
        die();
    }

    public function redirect(string $route): never
    {
        header("Location: {$route}");
        die();
    }

    /** Deve fazer o include da view */
    abstract public function index(array $requestData): void;
}
