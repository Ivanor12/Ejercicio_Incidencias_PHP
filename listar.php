<?php
session_start();
include 'head.php';
if(isset($_REQUEST['listar']))//si he pulsado listar
{
  $tipo=$_REQUEST['tipo'];
  echo '<table> 
    <tr>
        <th>id</th>
        <th>tipo</th>
        <th>fecha</th>
        <th>lugar</th>
    </tr>';
  foreach($_SESSION['incidencias'] as $clave=>$valor)
  {
    if ($tipo == $valor[2])
    {
      echo '<tr>
        <td>'.$valor[0].' </td>
        <td>'.$valor[1].' </td>
        <td>'.$valor[2].' </td>
        <td>'.$valor[3].' </td>
        <td>'.$valor[4].' </td>

      </tr>';
    }
  }
 echo '</table>';
}
else{
    echo "no existe esa incidencia";
}
echo '</table>';
                          
 print' 
         <strong>SELECCIONA EL TIPO DE INCIDENCIA A LISTAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              										  </td></tr>
              <tr>
                <td align="right"><strong>Tipo :</strong></td><td>
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
                </div>
               </td>
              </tr>
              <tr >
              <td colspan="2"><div align="center"><strong>
                <input name="listar" type="submit" id="listar" value="Listar"/>
                </strong>
                </div>
              </td>
            </tr>
              
        </table>
    </form>
        </div>';
 include 'pie.php';

