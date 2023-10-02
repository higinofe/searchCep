<?php

class ApiViaCep
{
    public $result;
    public $url;
    private $data;
    private $type;


    public function __construct($data) {
        $this->url = 'https://viacep.com.br/ws/';
        $this->data = $data['cep'];
        $this->type = '/json';
    }

    public function search()
    {
        $url = $this->url.$this->data.$this->type;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result=json_decode(curl_exec($ch));
        $this->result = $result;
    }
}