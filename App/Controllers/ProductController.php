<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController
{
    protected $productModel;

    public function __construct()
    {
        $productModel = new ProductModel();
        $this->productModel = $productModel;
    }

    function index()
    {
        $products = $this->productModel->getAllProduct();
        include_once "Views/list.php";
    }

    public function addProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            include_once "Views/add.php";
        } else {
            include_once "Views/add.php";
            $array = [
                "nameProduct" => $_POST["nameProduct"],
                "typeProduct" => $_POST["typeProduct"],
                "priceProduct" => $_POST["priceProduct"],
                "quantityProduct" => $_POST["quantityProduct"],
                "description" => $_POST["description"],
                "dateCreate" => $_POST["dateCreate"],
            ];
            $this->productModel->addProduct($array);
            header("location:index.php");
        }
    }

    public function deleteProductById()
    {
        include_once "Views/delete.php";
        $id = $_GET['id'];//lay tren thanh URL
        $this->productModel->deleteProductById($id);
        header("location: index.php");//or $this->index()
    }

    public function updateProduct()
    {
        $id = $_GET['id'];
        $product = $this->productModel->getDetailById($id);
        include_once 'Views/edit.php';


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include_once 'Views/edit.php';

            $product = [
                'nameProduct' => $_POST['nameProduct'],
                'typeProduct' => $_POST['typeProduct'],
                'priceProduct' => $_POST['priceProduct'],
                'quantityProduct' => $_POST['quantityProduct'],
                'description' => $_POST['description'],
                'dateCreate' => $_POST['dateCreate'],
            ];
            $this->productModel->updateProduct($id, $product);
            header("location: index.php");
        }
    }
}