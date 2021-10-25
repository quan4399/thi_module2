<?php

namespace App\Models;

class ProductModel
{
    public $pdo;

    public function __construct()
    {
        $database = new DBConnect("root", "");
        $this->pdo = $database->connect();
    }
    public function getAllProduct()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }
    public function addProduct($array)
    {
        $sql = "INSERT INTO products (nameProduct,typeProduct,priceProduct,quantityProduct,description,dateCreate)
                VALUES (?,?,?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $array["nameProduct"]);
        $stmt->bindParam(2, $array["typeProduct"]);
        $stmt->bindParam(3, $array["priceProduct"]);
        $stmt->bindParam(4, $array["quantityProduct"]);
        $stmt->bindParam(5, $array["description"]);
        $stmt->bindParam(6, $array["dateCreate"]);
        $stmt->execute();
    }
    public function deleteProductById($id)
    {
        $sql = "DELETE FROM products where id= :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
    public function updateProduct($id,$product)
    {
        $sql = "UPDATE products 
                SET  nameProduct = :nameProduct , typeProduct = :typeProduct,
                    priceProduct = :priceProduct, quantityProduct = :quantityProduct ,dateCreate = :dateCreate,
                    description= :description
                where id = :id" ;
        $stmt= $this->pdo->prepare($sql);
        $stmt->bindParam("nameProduct",$product['nameProduct']);
        $stmt->bindParam("typeProduct",$product['typeProduct']);
        $stmt->bindParam("priceProduct",$product['priceProduct']);
        $stmt->bindParam("quantityProduct",$product['quantityProduct']);
        $stmt->bindParam("dateCreate",$product['dateCreate']);
        $stmt->bindParam("description",$product['description']);
        $stmt->bindParam("id",$id);
        $stmt->execute();

    }
    public function getDetailById($id)
    {
        $sql = "SELECT * FROM products where id= :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }
}