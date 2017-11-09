<?php
@session_start();
require("utilidades.class.php");

class estudiante_1 extends utilidades
{
	function registrar($con_bd,$nom_est,$ape_est,$eda_est,$nac_est,$ced_est,$lug_nac,$est_nac,$fec_nac,$fec_bau,$dir_est,$tlf_fij,$tlf_cel,$ins_esc,$gra_esc,$sec_esc,$nom_mam,$ape_mam,$nom_pap,$ape_pap,$est_civ,$nom_cat,$ape_cat,$obs_est)
	{
		$sql="insert into nivel_1(nom_est,ape_est,eda_est,nac_est,ced_est,lug_nac,est_nac,fec_nac,fec_bau,dir_est,tlf_fij,tlf_cel,ins_esc,gra_esc,sec_esc,nom_mam,ape_mam,nom_pap,ape_pap,est_civ,nom_cat,ape_cat,obs_est) values('$nom_est','$ape_est','$eda_est','$nac_est','$ced_est','$lug_nac','$est_nac','$fec_nac','$fec_bau','$dir_est','$tlf_fij','$tlf_cel','$ins_esc','$gra_esc','$sec_esc','$nom_mam','$ape_mam','$nom_pap','$ape_pap','$est_civ','$nom_cat','$ape_cat','$obs_est')";

		$ok=mysql_query($sql,$con_bd);
		if($ok==false){
			$this->validarErrores($con_bd,"nivel_1");
		}
		else
		{
		
		 ?><center>Registrado Exitosamente<center><?php
		}

	function modificar($con_bd,$nom_est,$ape_est,$eda_est,$nac_est,$ced_est,$lug_nac,$est_nac,$fec_nac,$fec_bau,$dir_est,$tlf_fij,$tlf_cel,$ins_esc,$gra_esc,$sec_esc,$nom_mam,$ape_mam,$nom_pap,$ape_pap,$est_civ,$nom_cat,$ape_cat,$obs_est){
	
		$sql="update nivel_1 set nom_est='$nom_est',ape_est='$ape_est',eda_est='$eda_est',nac_est='$nac_est',ced_est='$ced_est',lug_nac='$lug_nac',est_nac='$est_nac',fec_nac='$fec_nac',fec_bau='$fec_bau',dir_est='$dir_est',tlf_fij='$tlf_fij',tlf_cel='$tlf_cel',ins_esc='$ins_esc',gra_esc='$gra_esc',sec_esc='$sec_esc',nom_mam='$nom_mam',ape_mam='$ape_mam',nom_pap='$nom_pap',ape_pap='$ape_pap',est_civ='$est_civ',nom_cat='$nom_cat',ape_cat='$ape_cat',obs_est='$obs_est' where ced_est='$ced_est'";

		$ok=mysql_query($sql,$con_bd);
		$sql="$nom_est $ape_est $eda_est $nac_est $ced_est $lug_nac $est_nac $fec_nac $fec_bau $dir_est $tlf_fij $tlf_cel $ins_esc $gra_esc $sec_esc $nom_mam $ape_mam $nom_pap $ape_pap $est_civ $nom_cat $ape_cat $obs_est";
		if($ok==true){
			$afectadas=mysql_affected_rows($con_bd);
			if($afectadas>0)
			{
				
				//echo "Cliente modificado correctamente";
				$this->listar_cliente($con_bd,$ced_est);
				$respuesta=array(true,$sql);
		        return $respuesta;
			}
			else
				echo "No se modifico ningun Cliente";
				$respuesta=array(false,$sql);
		        return $respuesta;	
		}else
		$this->validarErrores($con_bd,"nivel_1");
	
	
	}

    function filtrar($con_bd,$ced_est)
    {
		$sql="select nom_est,ape_est,eda_est,nac_est,ced_est,lug_nac,est_nac,fec_nac,fec_bau,dir_est,tlf_fij,tlf_cel,ins_esc,gra_esc,sec_esc,nom_mam,ape_mam,nom_pap,ape_pap,est_civ,nom_cat,ape_cat,obs_est from nivel_1 where ced_est='$ced_est'";
		$ok=mysql_query($sql,$con_bd);
		$resultado=mysql_fetch_assoc($ok);
		if($resultado["ced_est"]=="")
		echo "Estudiante no encontrado en la base de datos";
		else
		header("Location: ../pantallas/modificar_estudiante.php?&nom=$resutado[nom_est]&ape=$resutado[ape_est]&eda=$resultado[eda_est]&nac=$resultado[nac_est]&ced=$resultado[ced_est]&lug=$resultado[lug_nac]&est=$resultado[est_nac]&fecn=$resultado[fec_nac]&fecb=$resultado[fec_bau]&dir=$resultado[dir_est]&tlff=$resultado[tlf_fij]&tlfc=$resultado[tlf_cel]&ins=$resultado[ins_esc]&gra=$resultado[gra_esc]&sec=$resultado[sec_esc]&nomm=$resultado[nom_mam]&apem=$resultado[ape_mam]&nomp=$resultado[nom_pap]&apep=$resultado[ape_pap]&estc=$resultado[est_civ]&nomc=$resultado[nom_cat]&apec=$resultado[ape_cat]&obs=$resultado[obs_est]");
		
	}

	function listar($con_bd,$ced_est)
	{
		$sql="select * from nivel_1";
		$ok=mysql_query($sql,$con_bd);

    ?>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <table class="formulario1" width="80%">
    <tr class="titulo" align="center">
    <td>Cédula</td>
    <td>Nombre</td>
    <td>Apellidos</td>
    <td>Edad</td>
    <td>telefono</td>
    <td>nacionalidad</td>
    <td>Editar</td>
    <td>Borrar</td>	
    </tr>    	
    </table>
    <?php

    		while(($datos=mysql_fetch_assoc($ok))>0){
			
			if($datos["ced_est"]==$ced_est)
			$clase="class='buscado'";
			else
			$clase="";
			
echo "<tr $clase>
<td>$datos[ced_est]</td>
<td>$datos[nom_est]</td>
<td>$datos[ape_est]</td>
<td>$datos[eda_est]</td>
<td>$datos[tel_fij]</td>
<td>$datos[nac_est]</td>
<td align='center'><a href='../controladores/controlador_cliente.php?accion=filtrar_cliente&ide_cli=$datos[ide_cli]' ><img src=../icono/índice.png height=15px width=15px> </a></td>
<td><a href='../controladores/controlador_cliente.php?accion=borrar_cliente&ide_cli=$datos[ide_cli]'><img src=../icono/basura.jpg height=15px width=15px></a></td>
</tr>";	
		}
		
        echo "</table>"		;
       }
	}

}
?>