<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <style>
        :root {
            --bg-color: #E8FFD7;
            --form-bg: #93DA97;
            --text-color: #5E936C;
            --heading-color: #3E5F44;
            --input-bg: #f9fff7;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-container {
            background-color: var(--form-bg);
            padding: 50px 40px;
            border-radius: 15px;
            width: 480px;
            max-width: 95%;
            animation: slideUp 0.8s ease-out;
            box-shadow: 0 8px 20px rgba(62, 95, 68, 0.3);
        }

        @keyframes slideUp {
            0% {
                transform: translateY(40px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .form-container h2 {
            text-align: center;
            color: var(--heading-color);
            font-size: 30px;
            margin-bottom: 35px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: var(--heading-color);
        }

        input {
            width: 100%;
            padding: 12px 8px;
            margin-bottom: 22px;
            border: 1px solid var(--text-color);
            border-radius: 8px;
            font-size: 15px;
            background-color: var(--input-bg);
            color: var(--heading-color);
            transition: box-shadow 0.3s ease;
        }

        input:focus {
            outline: none;
            box-shadow: 0 0 6px var(--text-color);
        }

        .button-wrapper {
            text-align: center;
        }

        button[type="submit"] {
            width: 50%;
            padding: 12px 20px;
            background-color: #438b50;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button[type="submit"]:hover {
            background-color: #4CAF50;
            transform: scale(1.02);
        }

        .register-link {
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
        }

        .register-link a {
            color: #3E5F44;
            text-decoration: none;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 500px) {
            .form-container {
                padding: 30px 20px;
                width: 90%;
            }

            button[type="submit"] {
                width: 80%;
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Login Here</h2>
        <form action="#" method="POST">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="id">ID Number:</label>
            <input type="text" id="id" name="id" required>

            <div class="button-wrapper">
                <button type="submit">Login</button>
            </div>

            <div class="register-link">
                Don't have an account? <a href="./Registration.php">Register here</a>
            </div>
        </form>
    </div>
</body>

</html>
