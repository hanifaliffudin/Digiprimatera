<?php
if(isset($_POST['submit'])){
	$admin = 'support@digiprimatera.co.id'; //ganti email dg email admin (email penerima pesan)
	
	$name	= htmlentities($_POST['name']);
	$email	= htmlentities($_POST['email']);
	$subject	= htmlentities($_POST['subject']);
	$message	= htmlentities($_POST['message']);
	$body	= "Nama: ". $name ."\nEmail: ".$email. "\nPesan: ".$message." " ;


	
	$pengirim	= 'From: <'.$email.'>';
	
	if(mail($admin, $subject, $body, $pengirim)){
		header("Location: /");
	}else{
		echo 'ERROR: Pesan anda gagal dikirim silahkan coba lagi. <a href="/">Kembali</a>';
	}
}else{
	echo "Error";
	// header("Location: index.php");
}
?>