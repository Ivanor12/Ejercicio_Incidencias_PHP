<?php
session_start();
include 'head.php';
  if(isset($_REQUEST['enviar']))//si he pulsado el boton enviar
  {
      $tipo=$_REQUEST['tipo'];
      if(isset($_REQUEST['urgente'])) 
            $urgente='SI';
      else 
            $urgente='NO';   
      $lugar=$_REQUEST['lugar'];
      $descripcion=$_REQUEST['descripcion'];
      // Obteniendo la fecha actual con hora, minutos y segundos en PHP
      $fechaActual = date('d-m-Y H:i:s', time());
      echo $fechaActual;
      //ip desde la que se envio la incidencia
      $ip=$_SERVER['REMOTE_ADDR']; 
      echo 'Tu direccion IP es:' .$_SERVER['REMOTE_ADDR'];'<br>' ;
      $contador_incidencias=count($_SESSION['incidencias'])+1;
      $_SESSION['incidencias']=array($tipo,$urgente,$lugar,$descripcion);
      echo'<pre>';
      var_dump($_SESSION['incidencias']);
      echo '</pre>';
  }

 print' 
        <h2 class="postheader">FORMULARIO ALTA INCIDENCIA</h2>
                                     
        <div   class="postcontent"><form action="alta.php" method="post">
            <table align="center" class="content-layout">
              <tr>
              <td align="right"><strong>Urgente? :</strong></td>
              <td>

              <input type="checkbox" name="urgente" value="urg"/>Si      </td></tr>
              <tr><td align="right"><strong>Tipo :</strong></td><td>
              <div align="left">
                    <select name="tipo">
                      <option value="Basuras">Basuras</option>
                      <option value="Aseo Urbano">Aseo Urbano</option>
                      <option value="Mobiliario Urbano">Mobiliario Urbano</option>
                      <option value="Vandalismo">Vandalismo</option>
                       <option value="Transporte">Transporte</option>
                      <option value="Señales y Semaforos">Señales y Semaforos</option>
                      <option value="Mobiliario Urbano">Otros</option>
                      
                    </select>
              </div></td></tr>
              
              <tr><td align="right"><strong>Lugar :</strong></td><td>
              <div align="left">
                    <input type="text" name="lugar" size=35"/>
              </div></td></tr>
              <tr><td align="right"><strong>Descripcion: </strong></td><td>
              <div align="left">
                    <textarea cols=50 rows=4 name="descripcion"></textarea>
              </div></td></tr>
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="enviar" type="submit" id="enviar" value="Dar de alta"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>
<div id="imagen1">
        

        </div>        
';

 include 'pie.php';
											
                           