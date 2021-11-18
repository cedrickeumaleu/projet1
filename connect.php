<?php


if((isset($_POST['prenom']) && !empty($_POST['prenom']))
&& (isset($_POST['nom']) && !empty($_POST['nom']))
&& (isset($_POST['tel']) && !empty($_POST['tel']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['objet']) && !empty($_POST['objet']))
&& (isset($_POST['message']) && !empty($_POST['message']))){

    //print_r($_POST);
	$prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $tel = $_POST['tel'];
	$email = $_POST['email'];
    $objet = $_POST['objet'];
	$message = $_POST['message'];
	
	$to = "keumaleucedrick@gmail.com";
	$headers = "From : " . $email;
	
	if( mail($to, $subject, $message, $headers)){
		echo "E-Mail Sent successfully, we will get back to you soon.";
		
		$query = "INSERT INTO `contact` (prenom, nom, tel, email, objet, message ) VALUES ('$prenom', '$nom', '$tel', '$email', '$objet', '$message')";
		$result = mysqli_query($connection, $query);
	}
}

?>