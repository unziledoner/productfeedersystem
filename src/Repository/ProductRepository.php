<?php 
namespace src\Repository;
use PDO;
use MySQL;

class ProductRepository{

    public function getProductList($mapping){
        $sql = "select * from productfeedersystem.products order by id asc";
        $pdo = MySQL::getInstance()->getConnection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $product  = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $newProduct = array();
        $keys = array_keys($mapping);

        foreach ($product as $key => $val) {
            foreach ($keys as $vals) {
                $newProduct[$key][$mapping[$vals]] = $val[$vals];
            }
        }
        return $newProduct;
    }

}



?>