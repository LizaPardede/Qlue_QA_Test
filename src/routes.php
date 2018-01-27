<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->post('/auth', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    $data = array();
    $data["status"] = true;
    $data["message"] = "OK";

    // $name=  $this->jwt->name;
    $arr= array();
    $arr ["name"]= $this->jwt->name;
    $arr ["email"] = $this ->jwt->email;
    $arr ["namaCluster"] = $this->jwt->cluster;
    $arr ["namaPerumahan"] = $this->jwt->perumahan;
    $data ["result"] = $arr;
    // $response->getBody()->write($name);
    $newResponse = $response->withJson($data, 200);
    return $newResponse;
});

$app->get('/tagihan', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");


    // $name=  $this->jwt->name;
    $arr= array();
    $arr ["id"]= "j7hdmxbd";
    $arr ["month"] = "June 17" ;
    $arr ["dueDate"] = "20/06/17" ;
    $arr ["countDown"] = "3 months ago";
    $arr ["total"] = "300000";
    $data ["status"] = "terbayar";
    // $response->getBody()->write($name);
    $newResponse = $response->withJson($arr, 200);
    return $newResponse;
});


