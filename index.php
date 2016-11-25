<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Générateur de cd</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="sidebar">
		<form action="generator.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<h2>Infos personnelles</h2>
				<label for="nom">Nom :</label>
				<input class="form-control" type="text" id="nom" name="nom"/>
			</div>
			<div class="form-group">
				<label for="prenom">Prenom :</label>
				<input class="form-control" type="text" id="prenom" name="prenom"/>
			</div>
			<div class="form-group">
				
				<label for="email">Email :</label>
				<input class="form-control" type="text" id="email" name="mail"/>
			</div>
			<div class="form-group">
				
				<label for="date-naissance">Date de naissance :</label>
				<input class="form-control" type="text" id="date-naissance" name="date-naissance"/>
			</div>
			<div class="form-group">
				
				<label for="Tel">Tel :</label>
				<input class="form-control" type="text" id="Tel" name="tel"/>
			</div>
			<div class="form-group">
				<h2>Formations</h2>
				<label for="">1</label>
				<textarea name="formation1" class="form-control" id="" rows="5"></textarea>
			</div>
			<div class="form-group">
				
				<label for="">2</label>
				<textarea name="formation2" class="form-control" id="" rows="5"></textarea>

			</div>
			<div class="form-group">
				<label for="">3</label>
				<textarea name="formation3" class="form-control" id="" rows="5"></textarea>
			</div>
			<div class="form-group">
				<h2>Expérience profesionnelles</h2>
				<label for=""></label>
				<textarea name="exp-pro1" class="form-control" id="" rows="5"></textarea>
			</div>
			<div class="form-group">
				<label for=""></label>
				<textarea name="exp-pro2" class="form-control" id="" rows="5"></textarea>
			</div>
			<input type="submit" class="btn btn-primary pull-right" />
		</form>
	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.8/vue.common.js"></script>
</body>
</html>