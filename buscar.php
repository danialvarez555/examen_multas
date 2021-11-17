
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
  <td>Nombre Equipo</td> 
  <td>Puntuación</td> 
  </thead> 
  <tbody>';
  foreach($_SESSION['multas'] as $clave=>$vector)
  { 
     foreach($vector as $indice=>$valor) 
     { 
             if($indice=='matricula' && $valor==$matricula) 
             echo
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
