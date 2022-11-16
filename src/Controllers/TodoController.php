<?php

namespace App\Controllers;

use App\Models\TodoModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class TodoController
{
    private TodoModel $todoModel;
    private PhpRenderer $renderer;

    public function __construct(PhpRenderer $renderer, TodoModel $todoModel)
    {
        $this->todoModel = $todoModel;
        $this->renderer = $renderer;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $data = $this->todoModel->getTasks();
        return $this->renderer->render($response, 'todo.php', ['tasks' => $data]);
    }
}