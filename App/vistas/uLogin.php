<?php
    use App\Controladores\ControladorUsuario;
    include_once "includes/autoload.php";
?>
<br><br>

<form method="post" action="">
    <input type="text" name="codigo" placeholder="Ingrese su codigo"><br>
    <input type="password" name="pass" placeholder="Ingrese su contraseña"><br>
    <input type="submit" class="btn btn-success" name="submit" value="Login"><br>
</form>
<?php
    if(isset($_POST["pass"])){
        $codigo = (int) $_POST["codigo"];
        $password = $_POST["pass"];
        $controladorUsuario = new ControladorUsuario();
        $controladorUsuario->login($codigo, $password);
    }