<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="utf-8"/>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>
  <body>
    <header>
      <figure class="banner">
        <img src="campo.jpg" widtch="100px" height="150px">
      </figure>

       <figure class="banner">
        <img src="gobierno.png"  widtch="400px" height="200px" >
      </figure>

       <figure class="banner">
        <img src="chiapas.png" widtch="800px" height="130px">
      </figure>
      </header>
    <nav id="menu">
      <ul>
        <li></li>
      </ul>
    </nav>
    <section class="content">
      <section class="login">
        <article>
          <form id="logueo" action="control.php" method="post">
            <input class="form_logueo" type="text"     name="usuario" id="usuario" required placeholder="Usuario">
            <input class="form_logueo" type="password" name="clave" id="clave" required placeholder="password">
          <input class="form_logueo" type="submit" name="hola ">
          </form>
        </article>
      </section>
    </section>
    <footer>
      footer
    </footer>
    
  </body>
</html>