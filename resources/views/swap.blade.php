<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap Values</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        p {
            font-size: 18px;
            color: #555;
        }
        p strong {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Swap Values</h2>

        <h3>Before Swapping</h3>
        <p><strong>Value of A:</strong> {{ $beforeSwap['a'] }}</p>
        <p><strong>Value of B:</strong> {{ $beforeSwap['b'] }}</p>

        <h3>After Swapping</h3>
        <p><strong>Value of A:</strong> {{ $afterSwap['a'] }}</p>
        <p><strong>Value of B:</strong> {{ $afterSwap['b'] }}</p>
    </div>
</body>
</html>