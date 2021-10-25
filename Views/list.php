<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang sản phẩm</title>
</head>
<body class="container">
<h3>Quản lý sản phẩm</h3>
<table class="table">
    <thead class="thead-dark text-center" >
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên hàng</th>
        <th scope="col">Loại hàng</th>
    </tr>
    </thead>
    <tbody>
    <a href="index.php?page=add-product"><button type="button" class="btn btn-primary">Thêm sản phẩm</button></a>
    <?php foreach ($products as $index => $product): ?>
        <tr style="text-align: center ">
            <th scope="row"><?php echo $index + 1 ?></th>
            <td><?php echo $product['nameProduct'] ?></td>
            <td><?php echo $product['typeProduct'] ?></td>
            <td><a href="index.php?page=edit-product&id=<?php echo $product['id'] ?>"><button type="button" class="btn btn-warning text-white"> Chỉnh sửa</button></a></td>
            <td><a onclick="confirm('are you sure delete this ?')" href="index.php?page=delete-product&id=<?php echo $product['id'] ?>"><button type="button" class="btn btn-danger">Xóa</button></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
