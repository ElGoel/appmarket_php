<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia Sessión con tus datos</p>

<?php  
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email" 
            id="email" 
            placeholder="Tu Email" 
            name="email"
        >
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Tu Password" name="password">
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/registro">Registrate</a>
    <a href="/forget">Recupera tu Cuenta</a>
</div>