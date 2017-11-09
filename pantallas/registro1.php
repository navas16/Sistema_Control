<html>
<head>
	<meta charset="utf-8">
	<title>Registro Nivel 1</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<script src="../javascript/validaciones.js" language="javascript" type="text/javascript"></script>
</head>
<body>
	<form method="POST" action="../controladores/controlador_nivel_1.php" id="for_est">
  <input name="accion" value="registrar" type="hidden">
	<table class="formulario1">
		<tr>
			<td colspan="2" class="titulo"> Diócesis De San Cristóbal<br>Parroquia San Juan Bautista De Ureña<br>Primera Comunión 2017<br><B>FICHA DEL CATEQUIZANDO</B></td>
		</tr>
		<tr>
			<td class="subtitulo"> Datos Personales </td>
		</tr>
		<tr>
			<td> Nombres: </td> 
			<td><input type="text" name="nom_est" id="nom_est" size="60" maxlength="40"></td>
		</tr>
		<tr>
			<td> Apellidos: </td>
			<td><input type="text" name="ape_est" id="ape_est" size="60" maxlength="30"></td>
		</tr>
		<tr>
			<td> Edad: </td>  
			<td>
			 <input type="text" name="eda_est" id="eda_est" size="5" maxlength="2"> 
			  Nacionalidad:
			 <input type="text" name="nac_est" id="nac_est" size="11" maxlength="15">
			  Cédula: 
			 <input type="text" name="ced_est" id="ced_est" size="10" maxlength="8">
			</td>
		</tr>
		<tr>
			<td> Nació En: </td>
			<td>
			 <input type="text" name="lug_nac" id="lug_nac" size="26">
              Estado:
             <input type="text" name="est_nac" id="est_nac" size="20">
			</td>

		</tr>
		<tr>
			<td> Fecha De Nacimiento: </td>
			<td>
			 <input type="date" name="fec_nac" id="fec_nac" size="30">
			 Fecha De Bautizo:
             <input type="date" name="fec_bau" id="fec_bau" size="30" maxlength="11">
			 </td>
		</tr>
		<tr>
			<td> Direccion: </td>
			<td> <textarea rows="2" cols="50" name="dir_est" id="dir_est"></textarea></td>
		</tr>
		<tr>
			<td> Teléfono: </td>
			<td>
			 Fijo:
			 <input type="tel" name="tlf_fij" id="tlf_fij" size="20" pattern="[A-Za-z]{4-11}" maxlength="11">
             Celular:
             <input type="text" name="tlf_cel" id="tlf_cel" size="21" pattern="[A-Za-z]{4-11}" maxlength="11">
			</td>
		</tr>
		<tr>
			<td class="subtitulo"> Datos Escolares </td>
		</tr>
		<tr>
			<td> Institución: </td>
			<td><input type="text" name="ins_esc" id="ins_esc" size="60"></td>
		<tr> 
			<td> Grado De Instrucción: </td>
			<td>
			<input type="text" name="gra_esc" id="gra_esc" maxlength="1" pattern="[1-6]" size="22">
			Sección:
			<input type="text" name="sec_esc" id="sec_esc" maxlength="1" pattern="[A-Da-d]" size="23">
			</td> 
		</tr>
		<tr>
			<td  class="subtitulo"> Datos De Los Padres </td>
		</tr>
		<tr>
			<td class="subtitulo"> Madre </td>
        </tr>
		<tr>
			<td> Nombre: </td>
			<td>
				<input type="text" name="nom_mam" id="nom_mam" size="22" maxlength="15">
				Apellido:
				<input type="text" name="ape_mam" id="ape_mam" size="23" maxlength="15">
			</td>
		</tr>
		<tr>
			<td class="subtitulo"> Padre </td>
        </tr>
		<tr>
			<td > Nombre: </td>
			<td>
				<input type="text" name="nom_pap" id="nom_pap" size="22" maxlength="15">
				Apellido:
				<input type="text" name="ape_pap" id="ape_pap" size="23" maxlength="15">
			</td>
		</tr>
		<tr>
			<td >Casados Por Lo Civil:</td>
			<td>
			<input type="radio" required name="est_civ" id="cas_civ" value="civil" checked >
            Casados Por La Iglesia:
            <input type="radio" required name="est_civ" id="cas_igl" value="Iglesia">
            No Casados:
            <input type="radio" required name="est_civ" id="no_cas" value="no Casados">
			</td>
		</tr>
		<tr>
			<td class="subtitulo"> Datos Del Catequista </td>
		</tr>
		<tr>
			<td> Nombre: </td>
			<td>
				<input type="text" name="nom_cat" id="nom_cat" size="22" maxlength="15">
				Apellido:
				<input type="text" name="ape_cat" id="ape_cat" size="22" maxlength="15">
			</td>
		</tr>
		<tr>
		 <td class="subtitulo"> Observaciones </td>
		</tr>
		<tr>
			<td></td>
			<td><textarea rows="2" cols="50" name="obs_est" id="obs_est"></textarea></td>
		</tr> 
		<tr>
        	<td colspan="2" align="center">
        	<input type="button" value="Guardar" onClick="validarEstudiante()">
        	</td>
        </tr>		
	</table>
  </form>
</body>
</html>