<?php

namespace src\Component;

class XmlResponse extends Response
{
    function __construct($data)
    {
        parent::__construct('xml', $data);
    }

    function arrayToXml($data, &$xml_data)
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                if (is_numeric($key)) {
                    $key = 'product_' . $key;
                }
                $subnode = $xml_data->addChild($key);
                $this->arrayToXml($value, $subnode);
            } else {
                $xml_data->addChild("$key", htmlspecialchars("$value"));
            }
        }
    }
    
    function serialize()
    {
        $xml = new \SimpleXMLElement('<Products/>');
        $this->arrayToXml($this->data, $xml);
        return $xml->asXML();
    }
}
