<?php 

require_once('../Connections/acapulco.php');
session_start();

$usuario = $_SESSION['sesionusuario'];

if ($usuario != '') {

	header("Location: index.php");

}
	
if ($_POST) {
	
	$usuario = $_POST['username'];
    $password = $_POST['password'];

    //Conecta con la base de datos
    //
    mysql_select_db($database_acapulco ,$acapulco);	

    //Checa si el usuario existe
    //
    $query_Recordset1 = "SELECT * FROM usuarios WHERE nombre = '$usuario'";
    $Recordset1 = mysql_query($query_Recordset1, $acapulco) or die(mysql_error());
    $row_Recordset1 = mysql_fetch_assoc($Recordset1);
    $totalRows_Recordset1 = mysql_num_rows($Recordset1);

    //Si el usuario no existe
    //
    if ($totalRows_Recordset1 == 0) {

        $e1 = "El usuario ".$usuario." no existe";

    } else {

        //El usuario si existe, comprobamos la contraseña
        //
        $query_Recordset2 = "SELECT * FROM usuarios WHERE nombre = '$usuario' AND password = '$password'";
        $Recordset2 = mysql_query($query_Recordset2, $acapulco) or die(mysql_error());
        $row_Recordset2 = mysql_fetch_assoc($Recordset2);
        $totalRows_Recordset2 = mysql_num_rows($Recordset2);

        if ($totalRows_Recordset2 == 0) {

            $e2 = "La contraseña es incorrecta.";

        } else { //Si la contraseña es correcta

            if ($e1 == '' && $e2 == '' && $e3 == ''){ // Si no hay nigún error

                $_SESSION['sesionusuario'] = $usuario;

                header("Location: index.php");

            }//termina if e = a nada

        }//else - si la contraseña y usuario son correctos

    }//else - si el usuario es correcto

}
?>
<!doctype html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta charset="UTF-8">
<title>Log in</title>
</head>

<body style="margin:0px;">
	
<div id="wrapper" style="background-color: #1b437f; position: absolute; top:0px; left:0px; right:0px; bottom:0px;">
	
	<div id="contenedorlogin" style="color: black; border-radius:15px; margin: 0 auto; width:340px; background-color: white; padding:20px 0px; margin-top:200px;">
		
		<div id="logintag" align="center" style="color: #333; font-size: 40px; font-family: 'Francois One', sans-serif; margin-top:20px; margin-bottom:30px;">Login</div>
		
		<form id="formlogin" name="formlogin" align="center" style="margin: 10px 10px; border 1px solid #5b86c7;" action="login.php" method="post" onsubmit="return (valida_login())">
			
			<div id="contenedorusername">
			
				<input id="username" name="username" type="text" placeholder="usuario" style="width:90%; background-color:#e2e0e0; padding: 15px 10px; border:none; text-align:center; "/>
			
			</div>
			
			<div id="contenedorpassword" style="margin-top: 15px;">
		
				<input id="password" name="password" type="password" placeholder="contraseña" style="width:90%; background-color:#e2e0e0; padding: 15px 10px; border:none; text-align:center; "/>
			
			</div>
			
			<div id="enviar" align="center" style="width: 100%;"><input type="submit" value="Entrar" style="margin-top:20px; width:90%; padding: 15px 10px; cursor: pointer; color:white; text-shadow: 0px 0px 1px #666; background-color: darkorange; font-size:10px; border:0px;"></div>
			
		</form><!--Fin de Login-->
		
	</div><!--Fin de contenedorlogin-->
	
</div>
	
</body>
</html>
