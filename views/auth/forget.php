<h1 class="nombre-pagina">Recuperar Cuenta</h1>
<p class="descripcion-pagina">Escribe tu Email para restablecer tu cuenta</p>

<?php  
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form action="/forget" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu Email">
    </div>

    <input type="submit" class="boton" value="Enviar">
</form>

<div class="acciones">
    <a href="/registro">Registrate</a>
    <a href="/">Inicia Sessión</a>
</div>