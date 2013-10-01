
<? include("seguridad.php"); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="utf-8"/>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script languague="javascript">
        function mostrar() 
        {
            div = document.getElementById('busqueda');
            div.style.display = 'block';
        }

        function cerrar() {
            div = document.getElementById('busqueda');
            div.style.display = 'none';
        }


      
            
        
</script>
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
         <li><a href="inicio.php">Inicio</a>
        <li><a href="">Altas</a>
          <ul>
            <li><a href="#1">Organizacion</a></li>
            <li><a href="#1">Persona</a></li>
            <li><a href="#1">boton44</a></li>
          </ul>
        </li>
        <li><a href="">Consultas</a>
            <ul>
            <li><a href="#1">Predefinidas</a></li>
            <li><a href="#1">Especializadas</a></li>
            <li><a href="#1">Crear consulta</a></li>
            <li><a href="#1">ver ultimas</a></li>
          </ul>
        </li>
        <li><a href="">Estadisticas</a>
          
          <ul>
            <li><a href="#1">Consultas</a></li>
            <li><a href="#1">boton22</a></li>
            <li><a href="#1">boton33</a></li>
            <li><a href="#1">boton44</a></li>
          </ul>

        </li>
         <li>
          <a href="#"onclick="mostrar()">Busqueda</a>
          </li>
          <div id="busqueda">
                 <section class="avanzada">
                  <select>
                   <option value="Fecha">Fecha</option>
                   <option value="Representante">Representante</option>
                   <option value="Expediente">Expediente</option>
                   <option value="Organizacion">Organizacion</option>
                   <option value="Municipio">Municipio</option>
                 </select>
                 <input type=“search” name=“busqueda”>
                 <p></p>
                 <input type="submit" value="BUSCAR" name="enviar">
                  <a href="javascript:cerrar()">Cerrar</a>
                   
                 </section>
          </div>

      </ul>
    </nav>
    <section class="content">

      <section class="cuerpo">
        
        
        <article class="banner_principal">
          <ul class="principal_seccion">
             <li>
                <figure id="user">
                    <img src="user.png" widtch="40px" height="80px">
                </figure>
                <p>Usuario:
                   <? echo $_SESSION["usuarioactual"] ?></p>
                   <a href="salir.php">Salir</a>
             </li>

             <li>  
                 <table class="tabla1" >
                     
                   <tr>
                       <td>ENVIO</td>
                       <td>FECHA</td>
                     </tr>
                   <tr>
                       <td>1</td>
                       <td>2013-09-14</td>
                       </td></tr>
                   <tr>
                       <td>5</td>
                       <td>2013-09-14</td>
                     </tr>

                     <tr>
                       <td>6</td>
                       <td>2013-09-14</td>
                     </tr>
                     <tr>
                       <td>7</td>
                       <td>2013-09-14</td>
                     </tr>
                  
                 </table>
             </li>
             <li>Estadisticas</li>
          </ul>       
            
        </article>
      </section>

      <section class="consulta">
        <article>

       <select>
                    <option value="Envio">Envio</option>
                   <option value="Representante">Representante</option>
                   <option value="Expediente">Expediente</option>
                   <option value="Organizacion">Organizacion</option>
                   <option value="Municipio">Municipio</option>
                   <option value="Municipio">Beneficiario</option>

</select>
          
          </article class="consulta2">
            
          <label class="check"><input type="checkbox" name="Representante"> Representante</label>
          <label class="check"><input type="checkbox" name="Representante"> Beneficiario</label>
      </section>
      



    </section>
    <footer>
      footer
    </footer>
    
  </body>
</html>