<?php

use src\Repository\ProductRepository;
use src\Component\XmlResponse;

class XMLController
{
    public function getProductList($mapping)
    {
        $productRepository = new ProductRepository;
        $product = $productRepository->getProductList($mapping);
        $xmlResponse = new XmlResponse($product);
        $response = $xmlResponse->serialize();
        return $response;
    }
}
