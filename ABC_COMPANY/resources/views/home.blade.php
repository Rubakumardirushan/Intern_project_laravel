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
    <h1>Products</h1>

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
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
<a href="logout">Logout</a>


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
