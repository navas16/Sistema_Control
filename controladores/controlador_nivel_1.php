<?php
session_start();
require("../clases/conexion.class.php");
require("../clases/estudiante_1.class.php");
$obj_con=new conexion;
$con_bd=$obj_con->conectar();
$obj_est=new estudiante;

$nom_est=@$_POST["nom_est"];
$ape_est=@$_POST["ape_est"];
$eda_est=@$_POST["eda_est"];
$nac_est=@$_POST["nac_est"];
$ced_est=@$_POST["ced_est"];
$lug_nac=@$_POST["lug_nac"];
$est_nac=@$_POST["est_nac"];
$fec_nac=@$_POST["fec_nac"];
$fec_bau=@$_POST["fec_bau"];
$dir_est=@$_POST["dir_est"];
$tlf_fij=@$_POST["tlf_fij"];
$tlf_cel=@$_POST["tlf_cel"];
$ins_esc=@$_POST["ins_esc"];
$gra_esc=@$_POST["gra_esc"];
$sec_esc=@$_POST["sec_esc"];
$nom_mam=@$_POST["nom_mam"];
$ape_mam=@$_POST["ape_mam"];
$nom_pap=@$_POST["nom_pap"];
$ape_pap=@$_POST["ape_pap"];
$est_civ=@$_POST["est_civ"];
$nom_cat=@$_POST["nom_cat"];
$ape_cat=@$_POST["ape_cat"];
$obs_est=@$_POST["obs_est"];

switch($_REQUEST["accion"]){

	case 'registrar':
		$obj_est->registrar($con_bd,$nom_est,$ape_est,$eda_est,$nac_est,$ced_est,$lug_nac,$est_nac,$fec_nac,$fec_bau,$dir_est,$tlf_fij,$tlf_cel,$ins_esc,$gra_esc,$sec_esc,$nom_mam,$ape_mam,$nom_pap,$ape_pap,$est_civ,$nom_cat,$ape_cat,$obs_est);
		break;
	case 'modificar':
		$obj_est->modificar($con_bd,$nom_est,$ape_est,$eda_est,$nac_est,$ced_est,$lug_nac,$est_nac,$fec_nac,$fec_bau,$dir_est,$tlf_fij,$tlf_cel,$ins_esc,$gra_esc,$sec_esc,$nom_mam,$ape_mam,$nom_pap,$ape_pap,$est_civ,$nom_cat,$ape_cat,$obs_est);
		break;
    case 'filtrar':
	    $obj_est->filtrar($con_bd,$ced_est);
	    break;
	case 'listar':
		$obj_est->listar($con_bd,"");
		break;

}
?>