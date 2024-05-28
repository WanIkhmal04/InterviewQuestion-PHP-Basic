<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .input-container {
            margin-bottom: 15px;
        }
        input[type="text"] {
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: darkgreen;
        }
        .message {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Your Username</h2>
        <div class="input-container">
            <input type="text" id="username" placeholder="Username">
        </div>
        <button id="submit">Submit</button>
        <div class="message" id="message"></div>
    </div>

    <script src="verify_ajax.js"></script>
</body>
</html>
