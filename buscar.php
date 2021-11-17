
<?php
session_start();


echo '<pre>';
var_dump($_SESSION['multas']);
echo '</pre>'; 
include 'head.php';
if(isset($_REQUEST['buscar']
{
  echo ' 
  <table> 
  <thead> 
  <td>Matricula</td> 
  <td>Radar</td>
  <td>Limite</td>
  <td>Velocidad</td>
  <td>Cuantia</td>
  <td>Fecha y hora</td>
  <td>Pagada</td>
  </thead> 
  <tbody>';
  foreach($_SESSION['multas'] as $clave=>$vector)
  { 
     foreach($vector as $indice=>$valor) 
     { 
             if($indice=='matricula' && $valor==$matricula) 
             {
                 if($indice=='pagada' && $valor=='NO')
                 {
                     echo' <tr> 
                     <td>$valor[0]</td> 
                     <td>$valor[1]</td> 
                     <td>$valor[2]</td> 
                     <td>$valor[3]</td>
                     <td>$valor[4]</td>
                     <td>$valor[5]</td>
                     <td>$valor[6]</td>
                     </tr> 
                     </tfoot> 
                     </table>';
                 }
                 else
                 {
                    echo "La multa seleccionada ya esta pagada";
                 }
              }
     }
}
echo' 
Introduce la Matricula de la Multa/s <mark> NO PAGADAS</mark> a Buscar<mark>(1 Puntos)<br><br>
                         
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
 
  
  <tr ><td colspan="2"><div align="center"><strong>
<input name="buscar" type="submit" id="buscar" value="Buscar"/>
</strong></div></td></tr>
</table>
</form>
</div>';        
include 'pie.php';
