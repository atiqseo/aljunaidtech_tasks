<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Operators</title>
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
        <h2>Assignment Operators</h2>

        <div class="operation">
            <p><strong>Initial Value:</strong> {{ $results['initialValue'] }}</p>
        </div>

        <div class="operation">
            <p><strong>After Addition (+= 5):</strong> {{ $results['additionResult'] }}</p>
        </div>

        <div class="operation">
            <p><strong>After Subtraction (-= 3):</strong> {{ $results['subtractionResult'] }}</p>
        </div>

        <div class="operation">
            <p><strong>After Multiplication (*= 2):</strong> {{ $results['multiplicationResult'] }}</p>
        </div>

        <div class="operation">
            <p><strong>After Division (/= 4):</strong> {{ $results['divisionResult'] }}</p>
        </div>

        <div class="operation">
            <p><strong>After Modulo (%= 3):</strong> {{ $results['moduloResult'] }}</p>
        </div>
    </div>
</body>
</html>