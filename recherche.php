<?php
include"recherche-back.php"
        ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php include"menu.php" ?>
	<div class="container text-center">
		<form method="post" action="recherche">
			<h1>Resultats des recherches</h1>

	<div id="booking" class="container">
	<div class="table-responsive">
	<table class="table">
	<?php 
	 $row_cnt = $result->num_rows; 
	 if($row_cnt <= 0)
	 echo "<h3 class='text-danger'>Aucun résultat trouvé <h3>";
	  else {
	   	  echo"<thead>
		  <tr>
		  <th> Depart </th>
		  <th> Destination </th>
		  <th> Date depart </th>
		  <th> Nombre de places </th>
		  <th> Prix </th>
		  <th> Reservation </th>
		  </tr>
	  </thead>
	  <tbody>";
	  while($row = $result->fetch_assoc()) {
							echo "<tr>
								  <td> ".$row['date_depart']."</td>
								  <td> ".$row['depart']." </td>
								  <td> ".$row['destination']." </td>
								  <td> ".$row['num_place']."</td>
								  <td> ".$row['prix']."</td>
								  <td>
								  	<a class='btn btn-success' href='reservation.php?id=".$row['id']."' type='button'>Reserver</i></a>
				  </td>
						  </tr>";
						   } 
						   echo "</tbody>";}
						   ?>
	
	 
	  					  
  
	</table> 
	</div>
  </div>	
  </form>	
	</div>
	<?php include"footer.php" ?>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>