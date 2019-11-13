<form method="POST" action="" enctype="multipart/form-data">
Datoteka za upload:<br/>
<input type="file" name="datoteka" value="" /><br/>
<input type="submit" name="upload_btn" value="Upload" />

<?php
	echo '<pre>';
	print_r($_FILES);
	echo '</pre>';

/*
 $uploaddir = './abc/';
    $uploadfile = $uploaddir . basename($_FILES['datoteka']['name']);
    echo $uploadfile;

    if (move_uploaded_file($_FILES['datoteka']['tmp_name'], $uploaddir)) {
        echo "<br><br>File is valid, and was successfully uploaded.\n";
    } else {
        echo "Error Occured while uploading file. <br><br>Please try later.";
    }
*/


$uploaddir ='./doc/';
$uploadfile = basename($_FILES['datoteka']['name']);
echo '<br/>'.$uploadfile;
$file_array = explode(".",$uploadfile);
//echo '<br/>'.$file_array;
$file_ext = end($file_array);
echo '<br/>'.$file_ext;

$file_onserver="file_".time().".".$file_ext;

echo '<br/>'.$file_onserver;

$new_file_name=$uploaddir.$file_onserver;
echo '<br/>'.$new_file_name;
//move_uploaded_file($_FILES['datoteka']['tmp_name'],$new_file_name)
if(move_uploaded_file($_FILES['datoteka']['tmp_name'],$new_file_name))
{
	echo '<br/>Uspješan Upload!';
}
else
{
	echo '<br/>Nije uspješan Upload!';
}

?>
</form>