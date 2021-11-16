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
        <th>lugar</th>
        <th>Descripcion</th>
    </tr>';
  foreach($_SESSION['incidencias'] as $clave=>$valor)
{//si el tipo seleccionado coincide con la posicion [2] del array (la 3 fisicamente)
    //entonces nos imprima el valor que queremos $valor[x] en la tabla
    if($valor[2]==$tipo)//selecionamos [] comenzando desde 0 si hay 7 del 0-6
    {
      echo '<tr>
        <td>'.$valor[0].' </td>
        <td>'.$valor[2].' </td>
        <td>'.$valor[4].' </td>
        <td>'.$valor[6].' </td>
                    
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
                                     
        <div   class="postcontent"><form action="listar.php" method="post">
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

