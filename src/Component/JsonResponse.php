<?php

namespace src\Component;

class JsonResponse extends Response
{
    function __construct($data)
    {
        parent::__construct('json', $data);
    }
    
    function serialize()
    {
        $json = json_encode($this->data, JSON_UNESCAPED_UNICODE);
        return $json;
    }
}
