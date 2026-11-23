
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f4f4f4;
        }

        h2 {
            text-align: center;
            color: salmon;
            font-weight: bold;
        }

        .form-login {
            border: 2px solid skyblue;
            width: 30%;
            margin: auto;
            padding: 20px;
            border-radius: 30px;
            box-shadow: 5px 8px 3px 2px navy;
            text-align: center;
            background: white;
        }

        .input {
            width: 80%;
            height: 40px;
            border-radius: 20px;
            font-size: 15px;
            padding: 2px 10px;
        }

        .tombol {
            width: 50%;
            height: 45px;
            border-radius: 20px;
            background-color: lightsalmon;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Login Users</h2>

    <form method="POST" action="/login">
        @csrf

        <div class="form-login">
            <p>
                <input type="text" class="input"
                    name="email" placeholder="Masukkan Email" required>
            </p>

            <p>
                <input type="password" class="input"
                    name="password" placeholder="Masukkan Password" required>
            </p>

            <p>
                <button class="tombol" type="submit">LOGIN</button>
            </p>
        </div>
    </form>

</body>
</html>
