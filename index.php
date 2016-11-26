<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Générateur de cd</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="app">
		<div class="main">
			<div v-for="exp_pro in exps_pro">
				<p>{{exp_pro.desc}}</p>
			</div>
		</div>
		<div class="sidebar">
			<form action="generator.php" method="post" enctype="multipart/form-data">	

				<h2>Infos personnelles</h2>	

				<div class="form-group">
					<label for="photo">Photo(optionel)</label>
					<input type="file" class="form-control">
				</div>	

				<div class="form-group">
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
					<input class="form-control" type="text" id="date-naissance" name="date"/>
				</div>	

				<div class="form-group">
					<label for="Tel">Tel :</label>
					<input class="form-control" type="text" id="Tel" name="tel"/>
				</div>	

				<h2>Formations</h2>	

				<div class="form-group" v-for="formation in formations">
					<label for="debut_formation">Debut :</label><input v-model="formation.debut" id="debut_formation" class="width40 form-control" type="number" name="debut_formation[]">
					<label for="fin_formation">Fin :</label><input v-model="formation.fin"  id="fin_formation" class="width40 form-control" type="number" name="fin_formation[]">			<br/><br/>
					<label for="">Descriptif :</label>
					<textarea v-model="formation.desc" name="formations[]" class="form-control" id="" rows="5"></textarea>
				</div>
				<button type="button" @click="addFormation">add</button>	

				<h2>Expérience profesionnelles</h2>	

				<div class="form-group" v-for="exp_pro in exps_pro">
					<label for="debut_exp">Debut :</label><input v-model="exp_pro.debut" id="debut_exp" class="width40 form-control" type="number" name="debut_exp[]">
					<label for="fin_exp">Fin :</label><input v-model="exp_pro.fin" id="fin_exp" class="width40 form-control" type="number" name="fin_exp[]">
					<br/><br/>
					<label for="">Descriptif</label>
					<textarea v-model="exp_pro.desc" name="exp_pro[]" class="form-control" id="" rows="5"></textarea>
				</div>
				<button type="button" @click="addExpsPro">add</button>
				<input type="submit" class="btn btn-primary pull-right" />
			</form>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.8/vue.js"></script>
	<script>
		
		new Vue({
			el: "#app",
			data:{
				formations:[{
					debut : '',
					fin : '',
					desc : ''
				}],
				exps_pro : [{
					debut : '',
					fin : '',
					desc : ''
				}]
			},
			methods : {
				addFormation : function(){
					this.formations.push({debut : '', fin : '', desc : ''});
				},
				addExpsPro : function(){
					this.exps_pro.push({debut :'', fin : '', desc : ''});
				}
			}
		});

	</script>
</body>
</html>