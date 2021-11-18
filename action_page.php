<?php
include('connection.php');
/* Traitement de l'envoi de l'email */

$errors = '';
$myemail = 'keumaleucedrick@gmail.com';
if(
    empty($_POST['prenom'])||
    empty($_POST['nom'])||
    empty($_POST['tel'])||
    empty($_POST['email'])||
    empty($_POST['objet'])||
    empty($_POST['message'])

){
    $errors .="\n error: all fields are required";
}

// on stock iciles chams du formulaire dans des variables (name...)

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$objet = $_POST['objet'];
$message = $_POST['message'];

// si la variable $error est vide => aucune erreur detectée => on prépare le mail à envoie


// if (!preg_match(
// "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
// $email_address))
// {
//     $errors .= "\n Error: Invalid email address";
// }

if( empty($errors))
{


    $query = "INSERT INTO `contact` (prenom, nom, tel, email, objet, message ) VALUES ('$prenom', '$nom', '$tel', '$email', '$objet', '$message')";
    $result = mysqli_query($connection, $query);


	$to = $myemail; 
	$email_subject = "Contact form submission: $nom";
	$email_body =  $email_body = '

    <div style="margin-top: 20px;
    padding: 0px;
    border: 0px;
    color: #1b1e21;
    background-color: #d6d8d9;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
    ">
    <h3 class="titre">Message de la part de :'.$prenom .' '.$nom.'</h3>
</div>

<div style="margin-top: 20px;
padding: 0px;
border: 0px;
color: #1b1e21;
background-color: #17a2b8;
margin-bottom: 1rem;
border: 1px solid transparent;
border-radius: .25rem;
">
<h3 class="titre"> mobile :<br> '.$tel .' </h3>
<h3 class="titre">adresse :<br> '.$email.'</h3>
</div>

<div style="margin-top: 20px;
padding: 0px;
border: 0px;
color: #1b1e21;
background-color: #ccc;
margin-bottom: 1rem;
border: 1px solid transparent;
border-radius: .25rem;
">
<h3 class="titre">objet : '.$objet .'</h3>
</div>

<div style="margin-top: 20px;
padding: 0px;
border: 0px;
color: #1b1e21;
background-color: #ccc;
margin-bottom: 1rem;
border: 1px solid transparent;
border-radius: .25rem;
">
<h3 class="titre"> '.$message .'</h3>
</div>


    

    ';

    $headers[] = "From: $myemail";
    $headers[] = "Reply-To: $email";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=UTF-8';



    //envoi du mail
	mail($to,$email_subject,$email_body, implode("\r\n", $headers));

	//redirect to the 'thank you' page
	header('Location: contact.html');
}


?>





