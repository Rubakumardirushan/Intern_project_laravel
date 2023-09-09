<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1> <a href="register">signup</a>

    <!-- Category Dropdown -->
    <form action="{{ route('filterByCategory1') }}" method="POST">
        @csrf
        <label for="category">Select a Category:</label>
        <select name="category" id="category">
            <option value="">All</option>
            @foreach($categories1 as $category1)
                <option value="{{ $category1->category }}">{{ $category1->category }}</option>
            @endforeach
        </select>
        <button type="submit">Filter</button>
    </form>

    <!-- Product List -->
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products1 as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

<style>
    /* Add CSS for the table borders */
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>


</body>
</html>
