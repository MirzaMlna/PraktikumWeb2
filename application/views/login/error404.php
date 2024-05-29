<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .error-code {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .error-message {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .error-image {
            width: 500px;
            height: auto;
            margin-bottom: 20px;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="error-code">404</h1>
        <p class="error-message">The requested page could not be found.</p>
        <img src="https://www.dreamstime.com/photos-images/sad-robot.html" alt="404 Error" class="error-image">
        <a href="/" class="button">Go Home</a>
    </div>
</body>

</html>