<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 800px;
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
        .data-type {
            margin-bottom: 20px;
        }
        .data-type h3 {
            color: #555;
        }
        .data-type p {
            font-size: 16px;
            color: #333;
        }
        .var-dump {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 4px;
            font-family: monospace;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Types and var_dump() Output</h2>

        @foreach ($types as $varName => $type)
            <div class="data-type">
                <h3>{{ ucfirst($varName) }}</h3>
                <p><strong>Type:</strong> {{ $type }}</p>
                <div class="var-dump"><strong>Var Dump:</strong> {!! $dump[$varName] !!}</div>
            </div>
        @endforeach
    </div>
</body>
</html>