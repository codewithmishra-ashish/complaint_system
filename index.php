<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myMANIT</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/en/4/4f/Maulana_Azad_National_Institute_of_Technology_Logo.png" type="image/x-icon" />
    <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
                'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
                sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background-color: #050a30;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 250px;
        }

        .logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 100px;
            height: 100px;
        }

        .logo h1 {
            font-size: 24px;
            font-weight: bold;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .scholar-input {
            width: 100%;
            padding: 5px;
            border: 1px solid black;
            border-radius: 5px;
        }

        .otp-section {
            display:none;
        }

        .otpInput {
            width: 50%;
            padding: 8px 10px;
            height: 25px;
            font-size: 15px;
            border: 1px solid black;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        .submit_button{
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            margin-top: 5px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .verify{
            background-color: #4CAF50;
            color: white;
            padding: 5px 5px;
            border: none;
            margin-top: 5px;
            margin-left: 3px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 17px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .line{
            display: flex;
        }
        .submit_button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/en/4/4f/Maulana_Azad_National_Institute_of_Technology_Logo.png" alt="Logo">
            <h1>
                <span>myMANIT</span>
            </h1>
        </div>

        <form method="post">
            <div class="scholar-no" id="scholarSection">
                
                <div class="scholar_input">
                    <label for="scholar-number" class="form-label">Scholar Number:</label>
                    <input type="text" class="scholar-input" name="scholarNumber" id="scholarnum">
                </div>
                
                <div id="otpSection" class="otp-section">
                    <label for="otp-entry" class="form-label">OTP:</label>
                    <input type="text" id="otpInput" class="otpInput" name="otp">
                    <button class="verify" name="otpVerify">Verify</button>
                </div>
                
                <button id="submit" class="submit_button" name="submit">Continue</button>
            
            </div>
        </form>
    </div>
</body>
</html>
