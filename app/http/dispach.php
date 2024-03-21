<?php

require_once('controller/controller.php');
require_once('controller/api/api.php');
/**Controller trigger for business model*/
$searchCep= new SearchCep;
$searchCep->cep($_POST);
$data =  json_encode($searchCep->result);

echo $data;



