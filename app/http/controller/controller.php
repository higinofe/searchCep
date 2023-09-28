<?php

class SearchCep
{

    public $result;

    public function cep($data)
    {
        $cep = $this->checkCep($data);
        $consume = new ApiViaCep($data);
        $consume->search();
        $consume = (array)$consume->result;

        $this->result = $consume;
    }

    private function checkCep($data)
    {
        $data = intval($data);
        return $data;
    }

}


