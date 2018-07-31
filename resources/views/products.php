<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Storage Management</title>
    <link href='/css/app.css' type='text/css' rel='stylesheet' />
</head>
<body>
<h1>Products list</h1>
<table class='table table-bordered table-striped'>
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Description</td>
        </tr>
    </thead>
    <tbody>
        <? foreach($products as $product) { ?>
        <tr>
            <td><?= $product->id ?></td>
            <td><?= $product->name ?></td>
            <td><?= $product->description ?></td>
            <td><a href='products/details/<?= $product->id?>'>View details</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>
