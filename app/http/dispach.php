<?php

require_once('/xampp/htdocs/searchCep/app/http/controller/controller.php');
require_once('/xampp/htdocs/searchCep/app/http/controller/api/api.php');

/**Controller trigger for business model*/
$searchCep= new SearchCep;
$searchCep->cep($_POST);
$data =  json_encode($searchCep->result);

echo $data;



