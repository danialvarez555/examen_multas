<?php
session_start();
include 'head.php';
if(isset($_REQUEST['borrar']))
{
  $idmulta=count($_SESSION['multas']);
  $matricula=$_REQUEST['matricula'];
  $fechahora=['fecha_hora'];
  foreach($_SESSION['multas'] as $clave=>$vector)
  {
    if($vector['matricula']==$matricula)
    {
      unset($_SESSION['multas'][$idmulta]);
    }
 }
} 
echo' 
Introduce los datos de la Multa a Borrar<mark>(1.5 Puntos)<br><br>
                         
<div   class="postcontent"><form action="" method="post">
<table align="center" class="content-layout">
  
  
  <tr>
  <td align="right">
  <strong>Matricula :</strong></td><td>
  <div align="left">
        <input type="text" name="matricula" size="10"/>
  </div>
  </td>
  </tr>
  <tr>
    <td align="right"><strong>Fecha y Hora :</strong></td>
     <td>
        <input  type="datetime-local" name="fecha_hora" size="20" />
     </td>
  </tr>
  
  <tr ><td colspan="2"><div align="center"><strong>
<input name="borrar" type="submit"  value="Borrar Multa"/>
</strong></div></td></tr>
</table>
</form>
</div>';        
include 'pie.php';

