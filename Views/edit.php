<!doctype html>
<html lang="en">
<head>
    <title>Thêm mới</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center p-3 mb-2 bg-success text-white">
            EDIT PRODUCT
        </div>
        <form class="p-3 mb-2 " action="" method="POST">
            <div class="col-6 container">
                <label for="inputN" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control " id="inputN" name="nameProduct" value="<?php echo $product['nameProduct'] ?>">

            </div>
            <div class="col-6 container">
                <label for="inputD" class="form-label">Loại sản phẩm</label>
                <input type="text" class="form-control " id="inputD" name="typeProduct" value="<?php echo $product['typeProduct'] ?>">
            </div>
            <div class="col-6 container">
                <label for="inputA" class="form-label">Price</label>
                <input type="text" class="form-control t" id="inputA" name="priceProduct" value="<?php echo $product['priceProduct'] ?>">
            </div>
            <div class="col-6 container">
                <label for="inputJ" class="form-label">Quantity</label>
                <input type="text" class="form-control " id="inputJ" name="quantityProduct" value="<?php echo $product['quantityProduct'] ?>">

            </div>
            <div class="col-6 container">
                <label for="inputJs" class="form-label">Date Created</label>
                <input type="date" class="form-control " id="inputJs" name="dateCreate" value="<?php echo $product['dateCreate'] ?>">

            </div>
            <div class="col-6 container">
                <label for="inputJ" class="form-label">Description</label>
                <input type="text" class="form-control " id="inputJ" name="description" value="<?php echo $product['description'] ?>"
                       placeholder="Description">

            </div>
            <div class="col-1 container">
                <button type="submit" class="btn btn-primary mt-3 mb-3">Sửa</button>
            </div>

        </form>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
