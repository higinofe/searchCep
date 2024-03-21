<?php

class SearchCep
{

    public $result;

    public function cep($data)
    {
        $cep = $this->checkCep($data);
        if(empty($cep['error'])){
            $consume = new ApiViaCep($data);
            $consume->search();
            $consume = (array)$consume->result;
            return $this->result = $consume;
        }
        return $this->result = $cep;
    }

    private function checkCep($data)
    {
        if(empty($data['cep'])){
            return $data=['error' => "CEP Não informado!"];
        }
        if(strlen($data['cep']) !=8){
            return $data=['error' => "CEP Precisa ter 8 Caracteres!"];
        }
        return $data;
    }

}


