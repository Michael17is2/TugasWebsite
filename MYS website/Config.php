<?php$server = "localhost"; // server web anda.$database = "mydata"; // nama dari database yang anda buat.$db_user = "myusername"; // username dari mysql anda.$db_pass = "mypassword"; // password untuk mengakses mysql anda tersebut.$table = "users"; //nama table yang akan dibuat di database.?>

$qry = mysql_query($check) or die ("Could not match data because ".mysql_error());
$num_rows = mysql_num_rows($qry);
if ($num_rows != 0) {
echo "Maaf, username $username sudah ada yang punya<br>";
echo "<a href=register.html>Anda belum beruntung, silakan dicoba kembali</a>";
exit;
} else {
// masukkan data
$insert = mysql_query("insert into $table values (’NULL’, '".$_POST['username']."',
'".$_POST['password']."')")
or die("Could not insert data because ".mysql_error());
// tampilkan pesan sukses
echo "Akun Anda Telah Selesai Dibuat!<br>";
echo "Sekarang anda bisa <a href=login.html>Login sebagai member web Cyber4rt</a>";
}
?>