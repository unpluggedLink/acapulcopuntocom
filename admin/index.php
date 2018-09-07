<?php 

require_once('../Connections/acapulco.php');
session_start();

$usuario = $_SESSION['sesionusuario'];

if ($usuario == '') {

	header("Location: login.php");

}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin | Acapulco</title>
<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
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
	
	
	
	
	
	/* Estilo de inicio */
	
	
.plan:hover{
	background-color: orange;
	color: white;
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

	/*ELEMENTOS QUE VAN A CAMBIAR EN MOVIL*/
	
		
#textoenimagen{
	
	top:-250px; 
}

#subtituloseccion2 {
	
	 font-size: 18px; 
}

#menudeplanes{
	
    margin: 50px 0px 0px 50px;
}

#plan1{
	
	width:25%;
}

#plan2{
	
	width:25%;
}

#plan3{
	
	width:25%;
}

#plan4{
	
	width:25%;
}

#evento1{
	
	width: 23%;
}
#evento2{
	
	width: 23%;
}
#evento3{
	
	width: 23%;
}
#evento4{
	
	width: 23%;
}


	/*CAMBIOS PARA LA VERSION MOVIL*/
	
@media only screen and (max-width: 700px) {
		
	
	#textoenimagen{
	
		top:-350px; 
		
	}
	
	#subtituloseccion2 {
	
	 font-size: 14px; 
	}
	
	#plan1{
	
		width:50%;
	}
	
	#plan2{
	
		width:50%;
	}
	
	#plan3{
	
		width:50%;
	}
	
	#plan4{
	
		width:50%;
	}
	
	#menudeplanes{
	
    	margin: 0px;
	}
	
	#evento1{
	
		width: 48%;
	}
	#evento2{
	
		width: 48%;
	}
	#evento3{
	
		width: 48%;
	}
	#evento4{
	
		width: 48%;
	}

	
}

	


</style>
</head>

<body style="margin:0px;">
	
		<div id="navegacion" style="width: 20%; position: fixed; top: 0px; bottom: 0px; left: 0px; min-height: 60px; background-color: #1b437f; float:left;">
			
			<div id="imagebox" style="float: left; width: 100%; height: 150px;"><img src="../images/nautica.jpg" alt="navegacion" style="width: 100%; z-index: -1000;  opacity:0.4; object-fit: cover; height: inherit;"></div>
			
			<div id="logotipo" align="center" style="float: left; width: 100%; margin:20px 0px;"><img src="../images/logotipo.png" alt="logotipo acapulco" style="height:40px;  padding-top:10px"></div>
		
			<div id="contenedormenu" style="margin-top: 20px;">
				
				<div id="inicio" class="menuactive" style="color: white; float:left; padding:15px 5px; width: 100%; border-top: 1px solid #5b86c7; border-bottom: 1px solid #5b86c7; box-sizing: border-box;">Inicio</div>
				
				<a href="usuarios.php"><div id="menu2" class="menuhover" style="color: white; float:left; padding:15px 5px; width: 100%; border-bottom: 1px solid #5b86c7; box-sizing: border-box;">Usuarios</div></a>
				
				<a href="eventos.php"><div id="eventos" class="menuhover" style="color: white; float:left; padding:15px 5px; width: 100%; border-bottom: 1px solid #5b86c7; box-sizing: border-box;">Eventos</div></a>
			
			</div>
		
		</div><!--Fin de navegacion-->
	
	
	<!-- El contenido de la pagina de inicio -->
			
			<div id="contenido" style="width:80%; margin-left:20%;">
				
				<!--Seccion 1-->
	
                <div id="galeríaprincipal" style="margin-top:0px; height: 500px; text-align: center; color: white; background-color: black;">
                
                    <img src="../images/nautica.jpg" alt="navegacion" style="width: 100%; z-index: -1000;  opacity:0.7; object-fit: cover; height: inherit;">
                    
                    <div id="textoenimagen" style="width:100%; text-align: center; color: #fbfae3; position: relative; text-shadow: 1px 1px 10px #000;">
                        
                        <div id="titulogaleria" style="font-size: 60px;font-family: 'Francois One', sans-serif;">Bienvenido a Acapulco</div>
                        
                        <div id="subtitulogaleria" style="font-size: 20px; margin-top: 2%; margin-bottom: 2%;">Déjanos ayudarte a encontrar el hotel perfecto</div>
                                    
                        <a href="https://hoteles.acapulco.com/?s=1#1"><span style="text-shadow:1px 1px 1px #333; background-color: darkorange; font-size: 14px; margin-top: 2%; padding: 5px 30px 5px 30px; border-radius: 2px; user-select: none;">Encontrar hotel</span></a>
                        
                    </div>
                
                </div><!--Fin de Galeria principal-->
                
            <!--Seccion 2-->
                
                <div id="seccion2" align="center" style="width: 100%; margin-bottom:150px;">
                    
                    <input type="text" style="padding: 10px 0px; width:80%; text-align: center; color:darkorange; margin-top: 80px; font-size: 28px; text-shadow: 1px 1px 1px #232323; font-family: 'Francois One', sans-serif;" value="Tambien de día hay muchos lugares que visitar">
                    
                    <textarea style="font-size: 14px; padding:10px; resize: vertical; max-height: 200px; text-align: center; margin-top: 40px; width:80%;">Te recomendamos los mejores lugares para pasar tus vacaciones, de una manera completamente segura. No te pierdas de las mejores experiencias.</textarea>
                    
                    <div id="menudeplanes" style="width:90%;">
                    
                        <div id="plan1" class="plan" style="float: left; padding: 20px 0px 20px 0px ;">
                            
                            <img src="../images/planes/cardiac.png" alt="Aventuras" style="height:90px;  padding:10px 5px 10px 5px;">						
                            <input style="text-align: center; font-size: 20px; margin-top:10px; width:100%; box-sizing: border-box; border:none;" value="Aventuras">
                            <input type="file" name="imagen1" id="imagen1" value="Subir imagen" style="width:100%; box-sizing: border-box; ">
							
                        </div>
                        
                        <div id="plan2" class="plan" style="float: left; padding: 20px 0px 20px 0px ;">
                            
                            <img src="../images/planes/beach.png" alt="Playas" style="height:90px;  padding:10px 5px 10px 5px;">
							<input style="text-align: center; font-size: 20px; margin-top:10px; width:100%; box-sizing: border-box; border:none;" value="Playa">
							<input type="file" name="imagen2" id="imagen2" value="Subir imagen" style="width:100%; box-sizing: border-box; ">
	
							
                            
                        </div>
                        
                        <div id="plan3" class="plan" style="float: left; padding: 20px 0px 20px 0px ;">
                        
                            <img src="../images/planes/event.png" alt="Eventos" style="height:90px;  padding:10px 5px 10px 5px;">
							<input type="file" name="imagen3" id="imagen3" value="Subir imagen" style="width:100%; box-sizing: border-box; ">
                            <input style="text-align:center; font-size: 20px; margin-top:10px; width:100%; box-sizing: border-box; border:none;" value="Eventos">
                        
                        </div>
                        
                        <div id="plan4" class="plan" style="float: left; padding: 20px 0px 20px 0px ;">
                        
                            <img src="../images/planes/rest.png" alt="Relajación" style="height:90px;  padding:10px 5px 10px 5px;">
							<input type="file" name="imagen4" id="imagen4" value="Subir imagen" style="width:100%; box-sizing: border-box; ">
                            <input style="text-align:center; font-size: 20px; margin-top:10px; width:100%; box-sizing: border-box; border:none;" value="Eventos">

                        </div>
                        
                    </div><!--Fin de menu de planes-->
                    
                </div><!--Fin de la seccion 2-->
                
            <!--Seccion 3-->
                    
                <div id="seccion3" align="center">
                    
                    <div id="explorar" style="background-color: #1b1b1b; width:100%; float:left; margin-top:90px; padding-bottom:200px;">
                        
                        <div id="tituloexplorar" style="text-align: center; color:white; margin: 90px 0px 30px 0px; font-size: 35px; text-shadow: 1px 1px 1px #000;font-family: 'Francois One', sans-serif;">Explora la ciudad</div>
                        
                        <div id="contenedorexplorar" style="width:90%;">
                        
                            <div id="explorar1" style="margin:1%; overflow:hidden; box-sizing: border-box; float: left; width: 23%; height: 200px; position:relative;">
                        
                                <img src="../images/explorar/copacabana.jpg" alt="Copa Cabana" style="height:inherit; width:100%; object-fit: cover;">
								
								<div id="contenedorboton1" style="position: absolute; bottom: 10px;">
									
									<input type="file" name="explorarimagen1" id="explorarimagen1" value="Subir imagen" style="width:100%; box-sizing: border-box; background-color: rgba(255, 255, 255, 0.72); height:25px;">
								
								</div>
								
                            </div>
							
							<div id="explorar1" style="margin:1%; overflow:hidden; box-sizing: border-box; float: left; width: 23%; height: 200px; position:relative;">
                        
                                <img src="../images/explorar/copacabana.jpg" alt="Copa Cabana" style="height:inherit; width:100%; object-fit: cover;">
								
								<div id="contenedorboton1" style="position: absolute; bottom: 10px;">
									
									<input type="file" name="explorarimagen1" id="explorarimagen1" value="Subir imagen" style="width:100%; box-sizing: border-box; background-color: rgba(255, 255, 255, 0.72); height:25px;">
								
								</div>
								
                            </div>
							
							<div id="explorar1" style="margin:1%; overflow:hidden; box-sizing: border-box; float: left; width: 23%; height: 200px; position:relative;">
                        
                                <img src="../images/explorar/copacabana.jpg" alt="Copa Cabana" style="height:inherit; width:100%; object-fit: cover;">
								
								<div id="contenedorboton1" style="position: absolute; bottom: 10px;">
									
									<input type="file" name="explorarimagen1" id="explorarimagen1" value="Subir imagen" style="width:100%; box-sizing: border-box; background-color: rgba(255, 255, 255, 0.72); height:25px;">
								
								</div>
								
                            </div>
							
							<div id="explorar1" style="margin:1%; overflow:hidden; box-sizing: border-box; float: left; width: 23%; height: 200px; position:relative;">
                        
                                <img src="../images/explorar/copacabana.jpg" alt="Copa Cabana" style="height:inherit; width:100%; object-fit: cover;">
								
								<div id="contenedorboton1" style="position: absolute; bottom: 10px;">
									
									<input type="file" name="explorarimagen1" id="explorarimagen1" value="Subir imagen" style="width:100%; box-sizing: border-box; background-color: rgba(255, 255, 255, 0.72); height:25px;">
								
								</div>
								
                            </div>
							

                            
                        </div><!--Fin de contenedorexplorar-->
                        
                    </div><!--Fin de explorar-->
                
                </div><!--Fin de la seccion 3-->
                
            <!--Seccion 4-->
                
                    <div id="seccion4" align="center" style="width: 100%; float: left;">
                    
                        <div id="tituloseccion4" style="text-align: center; color:black; margin-top: 120px; font-size: 32px; font-family: 'Francois One', sans-serif;">Los eventos de este mes</div>
                    
                        <div id="contenedoreventos" style="width: 90%; margin-top: 60px;">
                            
                            <div id="evento1" style="margin:1%; float:left; box-shadow: 0px 0px 1px #444;">
                                
                                <div id="contenedorimagen" style="height: 150px; width: 100%; float: left; position: relative;">
                                    
                                    <img src="../images/nautica.jpg" alt="playa" style="object-fit: cover; width:100%; height:inherit;">
									
									<div id="contenedorbotonevento1" style="position: absolute; bottom: 2px; background-color: rgba(255, 255, 255, 0.72); height:25px;">
										
										<input type="file" name="explorarimagen1" id="explorarimagen1" value="Subir imagen" style="width:100%; box-sizing: border-box; ">
										
									</div>
                                    
                                </div>
                                
                                <div id="contenedortexto" style="padding: 5px; overflow: hidden;">
                                    
                                    <input type="text" style="text-align: center; width:100%; box-sizing: border-box; margin: 5px 0px; font-size: 15px;" value="TEXTO">
                                    
                                    <textarea style="font-size:9px; width:100%; box-sizing: border-box; resize: vertical; height: 80px;"> Una descripcion de la foto que estamos mostrando.Una descripcion de la foto que estamos mostrando.Una descripcion de la foto que estamos mostrando.</textarea>
                                    
                                </div>
                                
                            </div>
                            
                            <div id="evento2" style="margin:1%; float:left; box-shadow: 0px 0px 1px #444;">
                                
                                <div id="contenedorimagen" style="height: 150px; width: 100%;">
                                    
                                    <img src="../images/nautica.jpg" alt="playa" style="object-fit: cover; width:100%; height:inherit;">
									
									<div id="contenedorbotonevento2" style="position: relative; top: -30px; background-color: rgba(255, 255, 255, 0.72); height: 25px;">
										
										<input type="file" name="explorarimagen1" id="explorarimagen1" value="Subir imagen" style="width:100%; box-sizing: border-box;">
										
									</div>
                                    
                                </div>
                                
                                <div id="contenedortexto" style="padding: 5px; overflow: hidden;">
                                    
									<input type="text" style="text-align: center; width:100%; box-sizing: border-box; margin: 5px 0px; font-size: 15px;" value="TEXTO">
                                    
                                    <textarea style="font-size:9px; width:100%; box-sizing: border-box; resize: vertical; height: 80px;"> Una descripcion de la foto que estamos mostrando.Una descripcion de la foto que estamos mostrando.Una descripcion de la foto que estamos mostrando.</textarea>

                                </div>
                            </div>
                            
                            <div id="evento3" style="margin:1%; float:left; box-shadow: 0px 0px 1px #444;">
                                
                                
                                <div id="contenedorimagen" style="height: 150px; width: 100%;">
                                    
                                    <img src="../images/nautica.jpg" alt="playa" style="object-fit: cover; width:100%; height:inherit;">
									
									<div id="contenedorbotonevento3" style="position: relative; top: -30px; background-color: rgba(255, 255, 255, 0.72); height:25px;">
										
										<input type="file" name="explorarimagen1" id="explorarimagen1" value="Subir imagen" style="width:100%; box-sizing: border-box; ">
										
									</div>
                                    
                                </div>
                                
                                <div id="contenedortexto" style="padding: 5px; overflow: hidden;">
                                    
                                    <input type="text" style="text-align: center; width:100%; box-sizing: border-box; margin: 5px 0px; font-size: 15px;" value="TEXTO">
                                    
                                    <textarea style="font-size:9px; width:100%; box-sizing: border-box; resize: vertical; height: 80px;"> Una descripcion de la foto que estamos mostrando.Una descripcion de la foto que estamos mostrando.Una descripcion de la foto que estamos mostrando.</textarea>
                                    
                                </div>
                                
                            </div>
                            
                            <div id="evento4" style="margin:1%; float:left; box-shadow: 0px 0px 1px #444;">
                                
                                <div id="contenedorimagen" style="height: 150px; width: 100%;">
                                    
                                    <img src="../images/nautica.jpg" alt="playa" style="object-fit: cover; width:100%; height:inherit;">
									
									<div id="contenedorbotonevento4" style="position: relative; top: -30px; background-color: rgba(255, 255, 255, 0.7); height:25px;">
										
										<input type="file" name="explorarimagen1" id="explorarimagen1" value="Subir imagen" style="width:100%; box-sizing: border-box; ">
										
									</div>
                                    
                                </div>
                                
                                <div id="contenedortexto" style="padding: 5px; overflow: hidden;">
                                    
                                    <input type="text" style="text-align: center; width:100%; box-sizing: border-box; margin: 5px 0px; font-size: 15px;" value="TEXTO">
                                    
                                    <textarea style="font-size:9px; width:100%; box-sizing: border-box; resize: vertical; height: 80px;"> Una descripcion de la foto que estamos mostrando.Una descripcion de la foto que estamos mostrando.Una descripcion de la foto que estamos mostrando.</textarea>
                                    
                                </div>
                            
                        	</div>
                        
                    	</div><!--Fin de la contenedor eventos-->
					
				</div><!--Fin de la seccion4-->
                
                    
                    <div id="footer" style="width: 100%; min-height: 200px; background-color: darkgrey; float:left; margin-top: 100px;">
                        
                        <div id="prueba" style="color: white; margin-top:20px; float:left; margin: 5px;">Castillo Uribe No. 86</div>
                        
                    </div><!--Fin de footer-->
                
                            
			</div><!--Fin de contenido-->
                    
                
</body>
</html>
