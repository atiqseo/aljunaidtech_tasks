<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operations</title>
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
        .operation {
            margin-bottom: 15px;
        }
        .operation p {
            font-size: 18px;
            color: #555;
        }
        .operation p strong {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Arithmetic Operations</h2>

        <div class="operation">
            <p><strong>Value of A:</strong> {{ $results['a'] }}</p>
            <p><strong>Value of B:</strong> {{ $results['b'] }}</p>
        </div>

        <div class="operation">
            <p><strong>Addition (A + B):</strong> {{ $results['addition'] }}</p>
        </div>

        <div class="operation">
            <p><strong>Subtraction (A - B):</strong> {{ $results['subtraction'] }}</p>
        </div>

        <div class="operation">
            <p><strong>Multiplication (A * B):</strong> {{ $results['multiplication'] }}</p>
        </div>

        <div class="operation">
            <p><strong>Division (A / B):</strong> {{ $results['division'] }}</p>
        </div>

        <div class="operation">
            <p><strong>Modulo (A % B):</strong> {{ $results['modulo'] }}</p>
        </div>
    </div>
</body>
</html>