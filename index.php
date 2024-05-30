<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/login.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="./IMG/Egram.jpg" style="width: 100px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">EGRAM</h4>
                                    </div>

                                    <form>
                                        <p>Inicio de Sesión:</p>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="usuario">Usuario</label>
                                            <input type="email" id="usuario" class="form-control" placeholder="Introduce el Usuario." />
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="password">Contraseña</label>
                                            <input type="password" id="password" class="form-control" placeholder="Introduce la Contraseña." />
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">¿No tienes cuenta?</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                        <button type="button" onclick="location.href='./crearUsuario.php'" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger button-space">Crea una nueva.</button>
                                            <button type="button" onclick="location.href='./inicio.php'" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary">Iniciar Sesión</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center bg-green">
                                <div class="text-black px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Egram: La Nueva Era de las Redes Sociales.</h4>
                                    <p class="small mb-0">Bienvenido a Egram, la plataforma de redes sociales más innovadora y dinámica del momento. Diseñada para conectar personas, inspirar creatividad y fomentar la autenticidad, Egram está destinada a ser tu nueva aplicación favorita para compartir y descubrir contenido.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php

?>
</html>
