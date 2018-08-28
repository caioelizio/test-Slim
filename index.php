<?php
  use \Psr\Http\Message\ServerRequestInterface as Request;
  use \Psr\Http\Message\ResponseInterface as Response;

  require 'bootstrap.php';


  /**
   * Lista de todos os Livros
   */
  $app->get('/book', function(Request $request, Response $response) use ($app){
    //$response->getBody()->write("Lista de Livros");
    //return $response;
    
    //$return = $response->withJson(['msg' => "Lista de Livros"], 200);
    $return = $response->withJson(['msg' => "Lista de Livros"], 200)
                       ->withHeader('Content-type', 'application/json');
    return $return;
  });
  
  /**
   * Retornando mais informações do livro informado pelo id
   */
  $app->get('/book/{id}', function(Request $request, Response $response) use ($app){
    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');
    //$response->getBody()->write("Exibindo o livro {$id}");
    //return $response;
    
    //$return = $response->withJson(['msg' => "Exibindo o livro {$id}"], 200);
    
    $return = $response->withJson(['msg' => "Exibindo o livro {$id}"], 200)
                       ->withHeader('Content-type', 'application/json');
    return $return;
  });

  /**
   * Cadastra um novo Livro
   */
  $app->post('/book', function(Request $request, Response $response) use ($app){
    //$response->getBody()->write("Cadastrando um livro");
    //return $response;
    
    //$return = $response->withJson(['msg' => "Cadastrando um livro"], 201);
    
    $return = $response->withJson(['msg' => "Cadastrando um livro"], 201)
                       ->withHeader('Content-type', 'application/json');
    return $return;
  });

  /**
   * Atualiza os dados de um livro
   */
  $app->put('/book/{id}', function (Request $request, Response $response) use ($app){
    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');
    //$response->getBody()->write("Modificando o livro {$id}");
    //return $response;
    
    //$return = $response->withJson(['msg' => "Modificando o livro {$id}"], 200);
    
    $return = $response->withJson(['msg' => "Modificando o livro {$id}"], 200)
                       ->withHeader('Content-type', 'application/json');
    return $return;
  });

  /**
   *  Deleta o livro informado pelo ID
   */
  $app->delete('/book/{id}', function(Request $request, Response $response) use ($app){
    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');
    //$response->getBody()->write("Deletando o livro {$id}");
    //return $response;
    
    //$return = $response->withJson(['msg' => "Deletando o livro {$id}"], 204);

    $return = $response->withJson(['msg' => "Deletando o livro {$id}"], 204)
                       ->withHeader('Content-type', 'application/json');
    return $return;
  });


  $app->run();