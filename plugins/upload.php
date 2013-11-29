//Upload datotek na strežnik
<?php include('../documents/credentals.php'); ?>

<?php

 function normalize_str($str) {
    $invalid = array('Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z',
    'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A',
    'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E',
    'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
    'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y',
    'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a',
    'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e',  'ë'=>'e', 'ì'=>'i', 'í'=>'i',
    'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
    'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y',  'ý'=>'y', 'þ'=>'b',
    'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', "`" => "'", "´" => "'", "„" => ",", "`" => "'",
    "´" => "'", "“" => "\"", "”" => "\"", "´" => "'", "&acirc;€™" => "'", "{" => "",
    "~" => "", "–" => "-", "’" => "'", chr(149) => "-");

    $str = str_replace(array_keys($invalid), array_values($invalid), $str);

    return $str;
}

 
 
 
 
$upload = '$initialdest\slike';
$name = $_FILES["myfile"]["name"];
$type = $_FILES["myfile"]["type"];
$size = $_FILES["myfile"]["size"];
$temp = $_FILES["myfile"]["tmp_name"];
$error =  $_FILES["myfile"]["error"];


//_____________________________________________________________________________________

if ($type=="image/png") {
	// Get the original image.
	$src = imagecreatefrompng('$initialdest\uploads\$name');
	
	// Get the width and height.
	$width = imagesx($src);
	$height = imagesy($src);
	
	// Create a white background, the same size as the original.
	$bg = imagecreatetruecolor($width, $height);
	$white = imagecolorallocate($bg, 255, 255, 255);
	imagefill($bg, 0, 0, $white);
	
	// Merge the two images.
	imagecopyresampled(
		$bg, $src,
		0, 0, 0, 0,
		$width, $height,
		$width, $height);
	
	// Save the finished image.
	imagepng($bg, '$name', 0);
};
//_____________________________________________________________________________________


$name=normalize_str($name);


 if($type=="image/png")
 	{echo"res je";}
else
	{echo"nedela";}
	
 
 
 
 
if($error > 0)
die("Error uploading file! Code $error.");
else
{
move_uploaded_file($temp, "$upload/$name");
		
echo "Datoteka $name uspesno nalozena!";
echo "<a href='$initialdest'>Domov</a>";
//echo "<img src='$temp/$name'>";


}
 
?>




?>
