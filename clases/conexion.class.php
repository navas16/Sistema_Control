<?php
@session_start();
class conexion
{
	function conectar()
	{
		$conexion=mysql_connect("localhost","root","");
		if($conexion==false)
		{
			echo "Error Al Conectarse Al Servidor";
		}
		else
		{
			$bd=mysql_select_db("sistema_control",$conexion);
		}
		if($bd==false)
		{
			echo "Error Al Conectarse A La Base Datos";
		}
		else
		{
			return $conexion;
		}
	}

	function iniciar_sesion($con_bd,$usuario,$clave)
	{
		$sql="select * from usuario where ema_usu='$usuario' and cla_usu='$clave'";
		$ok=mysql_query($sql,$con_bd);
		$datos=mysql_fetch_assoc($ok);
	    
	    	if($datos["est_usu"]=="A")
		{
		  $_SESSION["usuario"]=$usuario;
		  return true;
		}else
		 return false;
				
    }
}
?>