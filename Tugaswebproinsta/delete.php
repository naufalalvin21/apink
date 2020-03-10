<!-- Nama: Naufal Alvin Chandrasa
NIM: 1301180214
Kelas: IF-42-11 -->
<?php
include "koneksi.php";

$image = $_FILES['image']['name'];
$target = 'images/' . $image;


//if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
//  $like = 255;
// <!-- $query = mysqli_query($conn, "INSERT INTO photo VALUES ('" . $target . "', '" . $_POST["caption"] . "', $like)");
//  $query = mysqli_query($conn, "DELETE FROM photo WHERE  ('" . $target . "', '" . $_POST["caption"] . "', $like)" like (array_key_exists("caption", $_GET)) ); -->
//}

session_start();

header('Location: profile.php');
