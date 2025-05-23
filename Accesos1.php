
<?php

session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];

$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>": '';
};

function isActiveForms($formName, $activeForm) {
    return $formName === $activeForm ? 'active': '';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesos</title>


    <link rel="stylesheet" href="../MHB/CSS/Accesos.css">
    <link rel="stylesheet" href="../MHB/login/error.css">

    
    
   
    <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&family=Reggae+One&display=swap" rel="stylesheet">
</head>
<body>
    <header>

    </header>
    <main>
      <div class="container">
         <div class="form-box <?= isActiveForms('login', $activeForm); ?>" id="login-form">
             <form action="login/login_register.php" method="post">
             <h2>Login</h2>
             <?= showError($errors['login']); ?>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit" name="login">Login</button>
                <p>Aun no tienes cuenta? <a href="#" onclick="showForm('register-form')">Ingresa aqui</a></p>
                <p><a href="index.html">Volver</a></p>
            </form>

         </div>
      </div>


      <div class="container">
         <div class="form-box <?= isActiveForms('register', $activeForm); ?>" id="register-form">
            <form  action="login/login_register.php" method="post">
                <h2>Register</h2>
                <?= showError($errors['register']); ?>
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <select name="role" required>
                    <option value="">--Secciona un Rol--</option>
                    <option value="candidato">Candidato</option>
                    <option value="reclutador">Reclutador</option>
                    <option value="influencer">Influencer</option>
                </select>
                <button type="submit" name="register">Register</button>
                <p>Ya tienes una cuenta? <a href="Accesos1.php" onclick="showForm('login-form')">Iniciar Seccion</a></p>
                <p><a href="index.html">Volver</a></p>
            </form>

         </div>
      </div>
    </main>
    <script src="JS/script.js"></script>
</body>
</html>