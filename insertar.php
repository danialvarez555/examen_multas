<?php

include 'head.php';
session_start();
if(isset($_REQUEST['insertar']))
{
  $matricula=$_REQUEST['matricula'];
  $radar=$_REQUEST['identificador'];
  switch($radar)
  {
    case 1: $radar=1;
    break;
    case 2: $radar=2;
    break;
    case 3: $radar=3;
    break;
    case 4: $radar=4;
    break;
  }
  $velocidad=$_REQUEST['velocidad'];
  $fechahora=date('d-m-Y H:i:s');
  $idmulta=count($_SESSION['multas'])+1; //se le suma 1 porque los array empiezan desde la posicion 0
  $_SESSION['multas'][$idmulta]=array ('matricula' =>$matricula, 'radar' => $radar, 'velocidad' =>$velocidad, 'fecha_hora' => $fechahora, 'pagada'=> 'NO');

}
echo'Introduce los siguientes datos de la Multa<mark>(2 Puntos)<br><br>
                                     
              <div   class="postcontent">
              <form action="" method="post">
                    <table align="center" class="content-layout">
                    <tr>
                      <td align="right"><strong>Matricula:</strong></td>
                      <td>
                        <input type="text" name="matricula" size="10" required/>
                      </td>
                     </tr>
                    <tr>
                        <td align="right"><strong>Selecciona el Radar :</strong></td>
                        <td>
                          <div align="left">
                                <select name="identificador">
                                  <option value="1">Radar 1</option>
                                  <option value="2">Radar 2</option>
                                  <option value="3">Radar 3</option>
                                  <option value="4">Radar 4</option>
                                 
                                </select>
                           </div>
                          </td>
                    </tr>
                    
                     <tr>
                      <td align="right"><strong>Velocidad:</strong></td>
                      <td>
                        <input type="number" name="velocidad" size="5" required />
                      </td>
                     </tr>
                     
                     <tr>
                      <td align="right"><strong>Fecha y Hora :</strong></td>
                      <td>
                        <input  type="datetime-local" name="fecha_hora" size="20" />
                      </td>
                     </tr>
                     
                    
                    
                    
                    <tr>
                        <td colspan="2">
                          <div align="center"><strong>
                            <input name="insertar" type="submit" id="insertar" value="Insertar"/>
                            </strong>
                          </div>
                        </td>
                    </tr>
                    </table>
        </form>';


include 'pie.php';
