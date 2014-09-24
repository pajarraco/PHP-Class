<?php
include "img_uploader.php";
$imgUpload = new ImgUploader();
$msg = "Cargar Imagen";
$dir = "";
if (isset($_POST['form'])){
	$msg = $imgUpload->img_uploader($_FILES['img_file']);
	$dir = get_object_vars($imgUpload);
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Subir Imagen</title>


</head>

<body>
<div align="center" class="Titulos"><?php echo $msg ;?><br />
<?php if (isset($dir)){echo $dir["path_imgs"]."/". $dir["filename"];}?></div>
<form name="form" method="POST" enctype="multipart/form-data">
  <table width="100%" border="0" align="center">
    <tr>
      <td width="50%" align="right">Selecciona una imagen:
      </td>
      <td><input name="img_file" type="file" size="35" id="img_file" /></td>
    </tr>
    <tr>
      <td width="50%" align="right">
      <input name="MM_insert" type="hidden" id="MM_insert" value="form" />
      <input name="codigotexto" type="hidden" id="codigotexto" /></td>
      <td><input type="submit" name="form" value="Subir Archivo"  /></td>
    </tr>
  </table>
</form>
</body>
</html>