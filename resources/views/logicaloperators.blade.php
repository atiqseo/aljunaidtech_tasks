<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
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
        <h2>Logical Operators</h2>

        <div class="operation">
            <p><strong>Value of A:</strong> {{ $results['a'] ? 'true' : 'false' }}</p>
            <p><strong>Value of B:</strong> {{ $results['b'] ? 'true' : 'false' }}</p>
        </div>

        <div class="operation">
            <p><strong>Logical AND (A && B):</strong> {{ $results['andResult'] ? 'true' : 'false' }}</p>
        </div>

        <div class="operation">
            <p><strong>Logical OR (A || B):</strong> {{ $results['orResult'] ? 'true' : 'false' }}</p>
        </div>

        <div class="operation">
            <p><strong>Logical NOT for A (!A):</strong> {{ $results['notResultA'] ? 'true' : 'false' }}</p>
        </div>

        <div class="operation">
            <p><strong>Logical NOT for B (!B):</strong> {{ $results['notResultB'] ? 'true' : 'false' }}</p>
        </div>
    </div>
</body>
</html>