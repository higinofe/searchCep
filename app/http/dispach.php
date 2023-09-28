<?php

require_once('/xampp/htdocs/searchCep/app/http/controller/controller.php');
require_once('/xampp/htdocs/searchCep/app/http/controller/api/api.php');


$post = '03356060';

$searchCep= new SearchCep;
$searchCep->cep($post);
$data =  json_encode($searchCep->result);

echo $data;

