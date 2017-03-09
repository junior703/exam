<!DOCTYPE html>
        <html>
        <head>
        <meta charset="utf-8">
            <title>Junior</title>
            <link rel="stylesheet" href="css/main.css">
        </head>
        <body>
        <header>
    <div class="contenedor">
        <h1 class="icon-dog">Junior703</h1>
        <input type="checkbox" id="menu-bar">
        <label class="fontawesome-align-justify" for="menu-bar"></label>
                <nav class="menu">
                    <a href="index.html">Inicio</a>
                    <a href="agregar.php">Agregar</a>
                    <a href="editar.php">Editar</a>
                    <a href="borrar.php">Borrar</a>
                </nav>
            </div>
</header>
        
        <main>
 
            
            
            <section id="info">
                <h3><br></br>Seccion Agregar.</h3>
                <div class="contenedor">
                    <div class="info-pet">
                        <img src="jr.jpg" alt="">
                        <h4>Agregar</h4>
<table border="0" align="center" valign="middle">
        <tr>
        <td rowspan=2>
        

<form action="insertar.php" method="post" name="form">

<fieldset>
    <legend  style="font-size: 18pt"><b>Registro de Producto</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Producto</b></label>
      <input type="text" name="realname" class="form-control" placeholder=" nombre del producto" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;"><b>Descripcion</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="descripcion del producto"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; "><b>Existencias</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="numero de producto" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Precio de Compra</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="en peso mexicano" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Precio de Venta</b></label>
      <input type="password" name="pv" class="form-control" required placeholder="en peso mexicano" />
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>

</form>
</div>

<!--Fin formulario registro
              <form action="borrador.php" method="post" name="form">
        <input type="text" name="nombre" placeholder=" ingresa el nombre del producto"/>
        <input type="submit" value="Borrar"/>
    

</form>
 -->

        </td>
        </tr>
        </table>

            </section>
        </main>
        
        <footer>
            <div class="contenedor">
                <p class="copy">Junior703 &copy; 2017</p>
                <div class="sociales">
                    <a class="fontawesome-facebook-sign" href="#"></a>
                    <a class="fontawesome-twitter" href="#"></a>
                    <a class="fontawesome-camera-retro" href="#"></a>
                    <a class="fontawesome-google-plus-sign" href="#"></a>
                </div>
            </div>
        </footer>
        </body>
        </html>