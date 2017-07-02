<html>  
    <head>
    <title> Taxis de Lujo </title>
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
 
     
  <div class="principal" align="center">
      
    
  <!-- Menú Public Page-->
    <div class="menu1">
 
        <center>
            
           TAXIS DE LUJO
            <br>
            <a href="index.php" >Inicio</a>
    
            <a href="Servicios.php">Servicios</a>
    
            <a href="Registro.php" ></i>Registro</a> 
    
            <a href="Contacto.php">Contacto</a>
    
            <a href="Ayuda.php">Ayuda</a>

            <a href="Login.php" ></i>Iniciar Sesión</a>
        </center>
    </div>
 
    <div class="contenido">    
        
        <div>
            <center>
                
		<h1>LOGIN</h1>
                <form method="POST" action="lib/validarLogin.php">
		<table>
		<tr>
		<td><input type="text" required name="nombre" placeholder="Usuario"/></td>
		</tr>
		<tr>
		<td><input type="password" required name="clave" placeholder="Contraseña" /></td>
		</tr>
		</table>
		<button type="submit">Entrar</button>
            </center>
        </div>
    </div>
   
  </div>
  
  </body>
</html>