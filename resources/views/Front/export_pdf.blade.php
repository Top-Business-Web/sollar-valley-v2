<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 8 HTML to PDF Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body class="antialiased container mt-5">

<table class="table">
    <thead>
    <tr class="table-primary">
        <td>Part Number</td>
        <td>Item Weight</td>
        <td>Product Dimensions</td>
        <td>Item model number</td>
    </tr>
    </thead>
    <tbody>

        <td>{{ $product->part_number }}</td>


        <td>{{ $product->weight }} pounds</td>


        <td>{{ $product->dimensions }} inches</td>


        <td>{{ $product->model_number }}</td>

    </tbody>
</table>
</body>

</html>
