<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .profile-info {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .profile-info h2 {
            text-align: center;
            color: #333;
        }
        .profile-info p {
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }
        .profile-info p strong {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="profile-info">
        <h2>Profile Information</h2>
        <p><strong>Name:</strong> {{ $perinfo['name'] }}</p>
        <p><strong>Gender:</strong> {{ $perinfo['gender'] }}</p>
        <p><strong>Age:</strong> {{ $perinfo['age'] }}</p>
        <p><strong>Address:</strong> {{ $perinfo['address'] }}</p>
        <p><strong>Degree:</strong> {{ $perinfo['degree'] }}</p>
        <p><strong>Date of Birth:</strong> {{ $perinfo['dob'] }}</p>
    </div>
</body>
</html>