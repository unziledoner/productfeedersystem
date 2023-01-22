<?php

namespace src\Component;

class Response
{
    protected $contentType;
    protected $data;

    function __construct($contentType, $data)
    {
        $this->setContentType($contentType);
        $this->data = $data;
    }

    function setContentType($contentType)
    {
        if ($contentType === 'json') {
            $contentTypes = 'application/json';
        } else if ($contentType === 'xml') {
            $contentTypes = 'text/xml';
        }
        header('Content-Type: ' . $contentTypes . '; charset=utf-8');
    }
}
