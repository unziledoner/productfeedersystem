<?php

use src\Repository\ProductRepository;
use src\Component\JsonResponse;

class JsonController
{
    public function getProductList($mapping)
    {
        $productRepository = new ProductRepository;
        $product = $productRepository->getProductList($mapping);
        $jsonResponse = new JsonResponse($product);
        $response = $jsonResponse->serialize();
        return $response;
    }
}
