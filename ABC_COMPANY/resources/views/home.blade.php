<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h2>Hello {{auth()->user()->name}}!</h2>


    <!-- Category Dropdown -->
    <form action="{{ route('filterByCategory') }}" method="POST">
        @csrf
        <label for="category">Select a Category:</label>
        <select name="category" id="category">
            <option value="">All</option>
            @foreach($categories as $category)
                <option value="{{ $category->category }}">{{ $category->category }}</option>
            @endforeach
        </select>
        <button type="submit">Filter</button>
    </form>

    <!-- Product List -->
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->product_description }}</td>
                    <td>
                        <form  action="{{ route('deleteProduct', ['product_name' => $product->product_name]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
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

<a href="logout">logout</a>
</body>
</html>
