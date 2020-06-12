<?php
session_start(); 
include"vol.php";
include"ClassReservation.php";
$vol=new Vol();
$reservation=new Reservation();
$user=$_SESSION['id'];
$id=$_GET['id'];
$result=$vol->getVolById($id);
$row = $result->fetch_assoc();

  if(isset($_POST['add'])){
	
	                            $nom = $_POST['nom'];
								$prenom = $_POST['prenom'];
								$age = $_POST['age'];
								$pays = $_POST['pays'];
								$adresse = $_POST['adresse'];
								$tele = $_POST['tele'];
								$email = $_POST['email'];
								$passeport = $_POST['passeport'];
								$id=$_POST['id'];
								$last_id=$reservation->addPassager($nom, $prenom, $age, $pays, $adresse, $tele, $email, $passeport);
								$last_id_res=$reservation->addReservation($id,$user,$last_id);
	  header("Location: confirmation.php?id=$last_id_res");
	 
	 
  }
								
?>