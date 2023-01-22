<?php 

$product_list = [];
$parseUrlResponse = parseUrl();
$company = $parseUrlResponse['company'];
$output_type = $parseUrlResponse['outputType'];

switch ($output_type) {
    case 'json' :
        require __DIR__ . '/../src/Controller/JsonController.php';
        $json_controller = new JsonController;
        $product_list = $json_controller->getProductList($productMapping[$company]);
        break;
    case 'xml' :
        require __DIR__ . '/../src/Controller/XMLController.php';
        $xml_controller = new XMLController;
        $product_list = $xml_controller->getProductList($productMapping[$company]);
        break;
    default:
        echo "Undefined output type!";
        break;
}
print_r($product_list); exit;

function parseUrl(){
    $request = $_SERVER['REQUEST_URI'];
    $uri = str_replace('/productfeedersystem','',$request);
    $uri_parse = explode('/',$uri);
    $company = $uri_parse[2];
    $output_type = $uri_parse[1];
    $response = array('company'=>$company,'outputType'=>$output_type);
    return $response;
}

?>