<?php
session_start();
include 'head.php';
if(isset($_REQUEST['borrar']));
{
    $num_incidencia=$_REQUEST['num_incidencia'];
    //numero elementos en el array antes de borrar
    $contador_antes=count($_SESSION['incidencias']);//los contadores se ponen para luego cuando se borren las tapas o no existan que nos salga la alerta
    //borro en el array [$codigo_tapa es el indice que queremos borrar]
    unset($_SESSION['incidencia'][$num_incidencia]);
    $contador_despues=count($_SESSION['incidencias']);
    if($contador_antes==$contador_despues)
    {
        echo '<script>alert("No existe esa incidencia");</script>';
    }
    else
    {
        unset($_SESSION['incidencias'][$numero_incidencia]);//metiendo codigo_tapa nos elimina el registro de votos
        
        echo '<script language="javascript">';
        echo 'alert("Incidencia borrada con exito");';
        echo '</script>';
    }
}                                  
 print' 
            <strong>INTRODUCE EL IDENTIFICADOR DE LA INCIDENCIA A BORRAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              
              
              <tr><td align="right"><strong>Num Incidencia :</strong></td><td>
              <div align="left">
                    <input type="text" name="num_incidencia"/>
              </div></td></tr>
              
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="borrar" type="submit" id="borrar" value="Dar de Baja"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>';
 include 'pie.php';