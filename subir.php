<?php
    session_start();
    $conexion = mysql_connect("localhost","root","root");
    mysql_select_db("residencia",$conexion);

    
?>

<?php 
          $envio=$_POST["envio"];
          $fecha=$_POST["fecha"];



                      if(isset($_POST['radio']))
                      {
                         //subir la imagen del articulo
                        $nameEXCEL = $_FILES['archivo']['name'];
                        $tmpEXCEL = $_FILES['archivo']['tmp_name'];
                        $extEXCEL = pathinfo($nameEXCEL);
                        $urlnueva = "xls/empleados.xls";    
    
                       if(is_uploaded_file($tmpEXCEL))
                            {
                             copy($tmpEXCEL,$urlnueva);  
                          
                             echo '<strong>Datos Actualizados con Exito</strong>';
                            }
                      }
   ?>

            <?php

    if(isset($_POST['radio']))
    {

      
        require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
      
      $objPHPExcel = PHPExcel_IOFactory::load('xls/empleados.xls');
      $objHoja=$objPHPExcel->getActiveSheet()->toArray(null,true,true,true,true,true,true,true,true,true,true,true,true,true,true);
      foreach ($objHoja as $iIndice=>$objCelda) {
  
            echo '      
                       <tr>
                <td>'.$objCelda['A'].'</td>
                <td>'.$objCelda['B'].'</td>
                <td>'.$objCelda['C'].'</td>
                <td>'.$objCelda['D'].'</td>
                <td>'.$objCelda['E'].'</td>
                <td>'.$objCelda['F'].'</td>
                <td>'.$objCelda['G'].'</td>
                <td>'.$objCelda['H'].'</td>

                <td>'.$objCelda['I'].'</td>
                <td>'.$objCelda['J'].'</td>
                <td>'.$objCelda['K'].'</td>
                <td>'.$objCelda['L'].'</td>
                <td>'.$objCelda['M'].'</td>
                <td>'.$objCelda['N'].'</td>
              
              </tr>    




                     '
            ;
                
                    
                    $n_expediente2=$objCelda['A'];
                    $nombre_region=$objCelda['B'];
                    $region=$objCelda['C'];
                    $municipio2=$objCelda['D'];
                    $localidad2=$objCelda['E'];
                    $organizacion2=$objCelda['F'];
                    $elector_rep=$objCelda['G'];
                    $nombre_rep=$objCelda['H'];
                    $elector_ben=$objCelda['I'];
                    $nombre_ben=$objCelda['J'];
                    $monto_sol=$objCelda['K'];
                    $cantidad=$objCelda['L'];
                    $curp_ben=$objCelda['M'];
                    $curp_rep=$objCelda['N'];

                    if (persona==$persona_rep) 
                    {
                      $categoria=1;
                    }
                    else
                    {
                      $categoria=2;
                    }

                           
                  
        if($_POST['radio']=='s'){
            $sql_general="INSERT INTO general
            (g_expediente, g_region, g_nombre_region, g_municipio, g_localidad, g_organizacion, g_elector_rep, g_nombre_rep, g_elector_ben, g_nombre_ben, g_monto_sol, g_cantidad, g_curp_ben, g_curp_rep, g_envio, g_fecha_r)
            VALUES ('$n_expediente2','$region','$nombre_region','$municipio2','$localidad2','$organizacion2','$elector_rep','$nombre_rep','$elector_ben','$nombre_ben','$monto_sol','$cantidad','$curp_ben','$curp_rep','$envio','$fecha')";
            

             /*$sql_municipio="INSERT INTO municipio
            ( nombre_municipio)
            VALUES ('$municipio2')";

             $sql_localidad="INSERT INTO localidad
            ( nombre_localidad)
            VALUES ('$localidad2')";

             $sql_organizacion="INSERT INTO organizacion
            ( nombre_org)
            VALUES ('$organizacion2')";

            $sql_representante="INSERT INTO persona(nombre_persona, elector, curp, categoria) 
            VALUES('$nombre_rep','$elector_rep','$curp_rep','$categoria','id_municipio')";

            $sql_beneficiario="INSERT INTO persona(nombre_persona,elector,curp,categoria)
            VALUES('$elector_ben','$nombre_ben','$curp_ben','$categoria' )";

            $sql_monto="INSERT INTO monto(monto_sol)
            VALUES('$monto_sol')";
             
           $sql_expediente="INSERT INTO expediente(exp, envio, fecha_r,)
           VALUES('$n_expediente2','$envio','$fecha')";*/

            
            



            mysql_query($sql_general);
           /* mysql_query($sql_municipio);
            mysql_query($sql_localidad);
            mysql_query($sql_organizacion);
            mysql_query($sql_representante);
            mysql_query($sql_beneficiario);
            mysql_query($sql_monto);
            mysql_query($sql_expediente); */

           

        }

            
          }








      }
      /*echo"<script>window.location.href=\"inicio.php\"</script>"*/
  ?>