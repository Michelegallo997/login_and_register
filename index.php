<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login y registro</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main>
        <div class="contenedor">
            <div class="caja_trasera">
                <div class="caja_tracera_derecha">
                    <h3>Ya tienes una cuenta?</h3>
                    <p>Inica sesion para entrar a la pag</p>
                    <button id="btn_iniciar_seccion">Iniciar Seccion</button>
                </div>
                <div class="caja_tracera_izq">
                    <h3>Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn_Register">Registrase</button>
                </div>
            </div>
        
        
        <div class="contenedor_login_register">
            <form action="login_usuario.php" method="POST" class="formulario_login">
                <h2>Iniciar sesion</h2>
                <input type="text" placeholder="Correo electronico" name="correo">
                <input type="password" placeholder="password" name="contrasena">
                <button class="">Entrar</button>
            </form>
            <form action="registro_usuario.php" method="POST"  class="formulario_register">
                <h2>Registrase</h2>
                <input type="text" placeholder="nombre" name="nombre_completo">
                <input type="text" placeholder="Correo electronico" name="correo">
                <input type="text" placeholder="Usuario"name="usuario">
                <Input type="password" placeholder="password" name="contrasena">
                <button class="">registrarse</button>
            </form>
        </div>
    </div>

    </main>
    <script src="javascripts/app.js"></script>
</body>
</html>