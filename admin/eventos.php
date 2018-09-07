<?php 

require_once('../Connections/acapulco.php');
session_start();

$usuario = $_SESSION['sesionusuario'];

if ($usuario == '') {

	header("Location: login.php");

}

mysql_select_db($database_acapulco, $acapulco);	
$query_Recordset1 = "SELECT * FROM usuarios";
$Recordset1 = mysql_query($query_Recordset1, $acapulco) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

if ($_POST){

    $titulo = addslashes( $_POST['titulo'] );
    $descripcion = addslashes( $_POST['descripcion'] );
    $ubicacion = addslashes( $_POST['ubicacion'] );
	$orden = addslashes( $_POST['orden'] );
    //$imagen = addslashes( $_POST['imagen'] );

    mysql_select_db($database_acapulco, $acapulco);

    mysql_query("INSERT INTO eventos( titulo, descripcion, ubicacion, orden ) VALUES('$titulo', '$descripcion', '$ubicacion', '$orden')");

    header('Location: eventos.php');

} // Termina el POST



?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin | Acapulco</title>
<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
<script>
function eliminar(valorid, mensaje){
    if(confirm(mensaje)==1){
        location.href=eval('\"eliminar.php?tabla=usuarios&id='+valorid+'\"');
    }
}
</script>
<style>
	a:link {
    	text-decoration: none;
		color: white;
	}

	a:visited {
    	text-decoration: none;
		color: white;
	}

	a:hover {
    	text-decoration: underline;
	}
	
	a:active {
    	text-decoration: underline;
	}
	
	/* Estilo de eventos */
	
	.toprow{
		width:90%;
	}
	
	.row{
		width: 90%;
	}
	
	.topcell{
		 
		float:left;
		width:20%;
		padding:20px;
		box-sizing: border-box;
		color: #fbfae3;
		background-color: #1b437f;
		border-top: 10px solid #123354;
		border-bottom: 1px solid #6380bc;
		text-shadow: 0px 2px 3px #222;

	}
	
	.cell{
		float:left;
		width:20%;
		padding:10px;
		box-sizing: border-box;
		color: #fff;
		background-color: rgba(27,67,127,0.82);;
		border-bottom: 1px solid #6380bc;
		text-shadow: 0px 2px 3px #000;
		font-size: 12px;
		height: 40px;
		line-height: 20px;
	}

	.menuhover:hover{

    	background: orange;
    	color: white;
	    cursor:pointer;
    	select:none;

	}

	.menuactive{
    
    	background: orange;
	    color: white;
    	select:none;
	}
	

	


</style>
</head>

<body style="margin:0px;">
	
	<div id="navegacion" style="width: 20%; position: fixed; top: 0px; bottom: 0px; left: 0px; min-height: 60px; background-color: #1b437f; float:left;">
			
		<div id="imagebox" style="float: left; width: 100%; height: 150px;"><img src="../images/nautica.jpg" alt="navegacion" style="width: 100%; z-index: -1000;  opacity:0.4; object-fit: cover; height: inherit;"></div>
			
		<div id="logotipo" align="center" style="float: left; width: 100%; margin:20px 0px;"><img src="../images/logotipo.png" alt="logotipo acapulco" style="height:40px;  padding-top:10px"></div>
		
		<div id="contenedormenu" style="margin-top: 20px;">
			
			<a href="index.php"><div id="inicio" class="menuhover" style="color: white; float:left; padding:15px 5px 15px 5px; width: 100%; border-top: 1px solid #5b86c7; border-bottom: 1px solid #5b86c7; box-sizing: border-box;">Inicio</div></a>
				
			<a href="usuarios.php"><div id="menu2" class="menuhover" style="color: white; float:left; padding:15px 5px; width: 100%; border-bottom: 1px solid #5b86c7; box-sizing: border-box;">Usuarios</div></a>
			
			<div id="eventos" class="menuactive" style="color: white; float:left; padding:15px 5px; width: 100%; border-bottom: 1px solid #5b86c7; box-sizing: border-box;">Eventos</div>
				
			
		</div>
		
	</div><!--Fin de navegacion-->
	
	
	<!-- El administrador de eventos -->
	
	<div id="contenido"  style="width:80%; margin:0px 0px 0px 20%;">
		
	<div id="seccion-crearevento" align="center">
		
		<div id="window-title" style="background-color: #1b437f; color:#fbfae3; width:500px; border-top-left-radius: 5px; border-top-right-radius: 5px; margin-top:30px; padding: 10px 0px;">
		Crear evento
		</div>
		
		<form id="formcrearevento" name="formcrearevento" style="background-color: rgba(27,67,127,0.82); color:white; width:500px; padding: 20px 0px;" action="eventos.php" method="post">
					
			<div style="font-size: 12px; margin-bottom: 3px; text-align: left; width:430px;">Titulo: 	</div>
				
			<input id="username" name="username" type="text" style="width:430px; height: 25px; padding: 5px; border:0px;"/>
			
			<div style="font-size: 12px; margin-bottom: 3px; text-align: left; width:430px; margin-top:20px; ">Descripción: 	</div>
			
			<textarea id="descripcion" name="descripcion" style="width:430px; height: 25px; padding: 5px; border:0px; resize: vertical; height: 100px; max-height: 300px; min-height: 100px;"></textarea>
			
			<div id="contenedor" style="width:440px; margin-top: 20px; ">
				
				<div style="font-size: 12px; margin-bottom: 3px; text-align: left; width:330px; float:left; padding-left:5px;">Ubicación: </div>
				
				<div style="float: left; font-size: 12px; margin-bottom: 3px; margin-left: 20px; text-align: left; width:80px;">Orden: </div>
			
				<input id="ubicacion" name="ubicacion" type="text" style="width:300px; height: 25px; padding: 5px; border:0px;"/>
				
				<input id="orden" name="orden" type="text" style="margin-left:31px; width:80px; height: 25px; padding: 5px; border:0px;"/>
				
			</div>
			
			<input type="submit" value="ENVIAR" style="cursor:pointer; width:440px; height: 35px; padding: 5px; border:0px; margin-top:40px; color:white; text-shadow: 0px 0px 1px #000; background-color: darkorange;">
		
		</form>

		
	</div>
	
	<div id="seccion-vereventos" align="center" style="width:100%; margin:50px 0px 50px 0px; ">
		
		<div class="toprow">
			
			<div class="topcell" style="width:15%;">Num</div>

             <div class="topcell" style="width:25%">Título</div>

             <div class="topcell">Ubicación</div>

             <div class="topcell">Orden</div>

             <div class="topcell">Eliminar</div>
		
		</div>
		
<?php
        
if ( $row_Recordset1 != "") {

$contador = 1;
do{ 

    $usuario = stripslashes( $row_Recordset1['nombre'] );
    $nivel = stripslashes( $row_Recordset1['nivel'] );
    $id = stripslashes( $row_Recordset1['id'] );
	
	if ( $nivel == 1){
		
		$nivel = "Usuario";
		
	}else if ( $nivel == 2){
		
		$nivel = "Editor";
		
	}else if ( $nivel == 3){
		
		$nivel = "Administrador";
		
	}

?>
		
		<div class="row">
		
			<div class="cell" style="width:15%;"><?php echo $contador; ?></div>

            <div class="cell" style="width:25%;"><?php echo $usuario; ?></div>

            <div class="cell"><?php echo $nivel; ?></div>

            <div class="cell"><input type="button" value="Modificar" style="margin:0px; cursor: pointer;" onclick="location.href='modificar-usuario.php?id=<?php echo $id; ?>'"></div>

            <div class="cell"><input type="button" value="Eliminar" style="margin:0px; cursor: pointer;" onclick="eliminar('<?php echo  $id; ?>', '¿Estas seguro de eliminar este usuario?')"></div>
			
		</div>
		
<?php 
$contador++; 
}while( $row_Recordset1 = mysql_fetch_assoc($Recordset1) );

} 
?>
	
		
	</div><!--Fin de la seccion-usuarios-->
	
	</div><!--Fin de contenido-->

                
</body>
</html>
