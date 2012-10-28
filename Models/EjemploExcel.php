<?php
	if(!isset($_SESSION)){
		session_start();
	}
	if(isset($_SESSION['user_type'])&&$_SESSION['user_type']==3){
		$matricula=$_SESSION['user_id'];
		include_once("../Models/Documentos.php");
		$convocatoria=$_GET['conv'];
		file_exists("../Documentos/".$convocatoria) or mkdir("../Documentos/".$convocatoria);
		file_exists("../Documentos/".$convocatoria."/".$matricula) or mkdir("../Documentos/".$convocatoria."/".$matricula);
		if(!empty($_FILES)){
			if (file_exists($_FILES['kardex']['tmp_name'])){
				if(isset(glob("../Documentos/".$convocatoria."/".$matricula."/".$matricula."_kardex.*")[0]))
					unlink(glob("../Documentos/".$convocatoria."/".$matricula."/".$matricula."_kardex.*")[0]);
				move_uploaded_file($_FILES['kardex']['tmp_name'], "../Documentos/".$convocatoria."/".$matricula."/".$_FILES['kardex']['name']);
				rename("../Documentos/".$convocatoria."/".$matricula."/".$_FILES['kardex']['name'], "../Documentos/".$convocatoria."/".$matricula."/".$matricula."_kardex.".pathinfo("../Documentos/".$convocatoria."/".$matricula."/".$_FILES['kardex']['name'])['extension']);
			}
			if((int)$_POST['formAction']){
				Documentos::documento($matricula, $convocatoria);
			}
		}
		if(!Documentos::getDocumentos($matricula, $convocatoria)){
			include("../Views/subirDocumentos.php");
		}else{
			include("../Views/documentosListos.php");
		}
	} else{
		http_response_code(403);
		$error='a%3A1%3A%7Bi%3A0%3Bs%3A64%3A"No+tienes+los+permisos+necesarios+para+accesar+a+este+contenido."%3B%7D';
		include('../Controllers/error.php');
	}
?>