<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Générateur de cd</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="app">
		<div class="main">
			<p>vrgcermbvmvmazmdzem</p>
			<div v-for="exp_pro in exps_pro">
				<p>{{exp_pro.desc}}</p>
			</div>
		</div>
		<div class="sidebar">
			<form action="generator.php" method="post" enctype="multipart/form-data">	

				<h2>Infos personnelles</h2>	

				<div class="form-group">
					<label for="photo">Photo(optionel)</label>
					<input type="file" name="photo" id="photo" class="form-control">
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
					<div class="width40">
					<label for="debut_formation">Debut :</label><input v-model="formation.debut" id="debut_formation" class=" form-control" type="number" name="debut_formation[]">
					</div>
					<div class="width40">
					<label for="fin_formation">Fin :</label><input v-model="formation.fin"  id="fin_formation" class="form-control" type="number" name="fin_formation[]">
					</div >
					<br/><br/>
					<label for="">Descriptif :</label>
					<textarea v-model="formation.desc" name="formations[]" class="form-control" id="" rows="5"></textarea>
					<i v-on:click="removeFormation(formation)" class="fa fa-minus-circle my-button minus pull-right"></i>
				</div>
				<div class="clear"></div>				
				<i @click="addFormation" class="fa fa-plus-circle my-button plus pull-right"></i>	

				<h2>Expériences profesionnelles</h2>	

				<div class="form-group" v-for="exp_pro in exps_pro">
					<div class="width40">
					<label for="debut_exp">Debut :</label><input v-model="exp_pro.debut" id="debut_exp" class=" form-control" type="number" name="debut_exp[]">
					</div>
					<div class="width40">
					<label for="fin_exp">Fin :</label><input v-model="exp_pro.fin" id="fin_exp" class="form-control" type="number" name="fin_exp[]">
					</div>
					<br/><br/>
					<label for="">Descriptif</label>
					<textarea v-model="exp_pro.desc" name="exp_pro[]" class="form-control" id="" rows="5"></textarea>
					<i @click="removeExp(exp_pro)" class="fa fa-minus-circle my-button minus pull-right"></i>
				</div>
				<div class="clear"></div>
				<i @click="addExpsPro" class="fa fa-plus-circle my-button plus pull-right"></i>

				<input type="submit" class="btn btn-primary form-control" />
			</form>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.js"></script>
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
				},
				removeExp: function (exp_pro) {
      				this.exps_pro.$remove(exp_pro);
   				},
   				removeFormation: function (formation) {
      				this.formations.$remove(formation);
   				}

			}
		});

	</script>
</body>
</html>