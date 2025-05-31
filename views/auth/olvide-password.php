<h1 class="nombre-pagina">Olvidé Contraseña</h1>
<p class="descripcion-pagina">Reestablece tu contraseña ingresando tu E-Mail a continuación</p>
<?php include_once __DIR__ . "/../templates/alertas.php"; ?>
<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tu Email" name="email">
    </div>
    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>
<div class="acciones">
    <a href="/">¿Ya tenés una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tenés una cuenta? Crear Una</a>
</div>