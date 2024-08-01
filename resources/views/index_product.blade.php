<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    @foreach ($products as $product)
        <img src="{{ url('storage/' . $product->image) }}" alt="" height="100px">
        <p>Product : {{ $product->name }}</p>
        <p>Price: Rp {{ $product->price }}</p>
        <form action="{{ route('show_product', $product)}}" method="get">
            <button type="submit">Show Detail</button>
        </form>
        <form action="{{ route('delete_product', $product) }}" method="post">
            @method('delete')
            @csrf
            <button type="submit">Delete</button>
        </form>
    @endforeach
</body>
</html>