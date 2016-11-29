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
			<div class="preview">	
				<div class="prev{{themeNumber}}-sidebar"></div>
				<img src="img/default-user-avatar.png" class="prev{{themeNumber}}-photo"/>
				<div class="prev{{themeNumber}}-img"></div>
				<div class="prev{{themeNumber}}-ribbon"></div>
				<div class="prev{{themeNumber}}-header">
					<p>Nom: {{name}}</p>
					<p>Prénom: {{first_name}}</p>	
					<p>Mail: {{email}}</p>	
					<p>Tel: {{tel}}</p>	
					<p>Date de naissance: {{date_naissance}}</p>	
				</div>
				<div class="prev{{themeNumber}}-formations">
					<div class="prev{{themeNumber}}-section-name">Formations</div>
					<div v-for="formation in formations">
						<p class="date prev{{themeNumber}}-date">{{formation.debut}}-{{formation.fin}}</p>
						<p class="prev{{themeNumber}}-text">{{formation.desc}}</p>
					</div>
				</div>
				<div class="prev{{themeNumber}}-exp">	
					<div class="prev{{themeNumber}}-section-name">Expériences professionnelles</div>
					<div v-for="exp_pro in exps_pro">
						<p class="date prev{{themeNumber}}-date">{{exp_pro.debut}}-{{exp_pro.fin}}</p>
						<p class="prev{{themeNumber}}-text">{{exp_pro.desc}}</p>
					</div>
				</div>
				<div class="prev{{themeNumber}}-comp">	
					<div class="prev{{themeNumber}}-section-name">Langues et compétences</div>
					<div v-for="competence in competences">
						<p class="prev{{themeNumber}}-text">{{competence.desc}}</p>
					</div>
				<div class="prev{{themeNumber}}-footer-img"></div>
				</div>

			</div>
		</div>
		<div class="sidebar">
			<form action="generator.php" method="post" enctype="multipart/form-data">

				<h2>Thèmes</h2>

				<div class="form-group">
					<label for="theme1" class="radio-inline"><input type="radio" name="theme" id="theme1" value="1" @click="changeTheme(1)"></label>
					<label for="theme2" class="radio-inline"><input type="radio" name="theme" id="theme2" value="2" @click="changeTheme(2)"></label>
					<label for="theme3" class="radio-inline"><input type="radio" name="theme" id="theme3" value="3" @click="changeTheme(3)"></label>
				</div>

				<h2>Infos personnelles</h2>	

				<div class="form-group">
					<label for="photo">Photo(optionel)</label>
					<input type="file" name="photo" id="photo" class="form-control">
				</div>	

				<div class="form-group">
					<label for="nom">Nom :</label>
					<input v-model="name" class="form-control" type="text" id="nom" name="nom" required/>
				</div>	

				<div class="form-group">
					<label for="prenom">Prenom :</label>
					<input v-model="first_name" class="form-control" type="text" id="prenom" name="prenom" required/>
				</div>	

				<div class="form-group">
					<label for="email">Email :</label>
					<input v-model="email" class="form-control" type="text" id="email" name="mail" required/>
				</div>	

				<div class="form-group">
					<label for="date-naissance">Date de naissance :</label>
					<input v-model="date_naissance" class="form-control" type="text" id="date-naissance" name="date" required/>
				</div>	

				<div class="form-group">
					<label for="Tel">Tel :</label>
					<input v-model="tel" class="form-control" type="text" id="Tel" name="tel" required/>
				</div>	

				<h2>Formations</h2>	

				<div class="form-group" v-for="formation in formations">
					<div class="width40">
					<label for="debut_formation">Debut :</label><input v-model="formation.debut" id="debut_formation" class=" form-control" type="number" name="debut_formation[]" required>
					</div>
					<div class="width40">
					<label for="fin_formation">Fin :</label><input v-model="formation.fin"  id="fin_formation" class="form-control" type="number" name="fin_formation[]" required>
					</div >
					<br/><br/>
					<label for="">Descriptif :</label>
					<textarea v-model="formation.desc" name="formations[]" class="form-control" id="" rows="5" required></textarea>
					<i v-on:click="removeFormation(formation)" class="fa fa-minus-circle my-button minus pull-right"></i>
				</div>
				<div class="clear"></div>				
				<i @click="this.size < 140 ? addFormation() : maxSize()" class="fa fa-plus-circle my-button plus pull-right"></i>	

				<h2>Expériences profesionnelles</h2>	

				<div class="form-group" v-for="exp_pro in exps_pro">
					<div class="width40">
					<label for="debut_exp">Debut :</label><input v-model="exp_pro.debut" id="debut_exp" class=" form-control" type="number" name="debut_exp[]" required>
					</div>
					<div class="width40">
					<label for="fin_exp">Fin :</label><input v-model="exp_pro.fin" id="fin_exp" class="form-control" type="number" name="fin_exp[]" required>
					</div>
					<br/><br/>
					<label for="">Descriptif</label>
					<textarea v-model="exp_pro.desc" name="exp_pro[]" class="form-control" id="" rows="5" required></textarea>
					<i @click="removeExp(exp_pro)" class="fa fa-minus-circle my-button minus pull-right"></i>
				</div>
				<div class="clear"></div>
				<i @click="this.size < 140 ? addExpsPro() : maxSize()" class="fa fa-plus-circle my-button plus pull-right"></i>
				
				<h2>Langues et compétences</h2>

				<div class="form-group" v-for="competence in competences">
					<label for="competences">Descriptif</label>
					<input v-model="competence.desc" name="competences[]" class="form-control" id="competences" required></textarea>
					<i @click="removeCompetence(competence)" class="fa fa-minus-circle my-button minus pull-right"></i>
				</div>
				<div class="clear"></div>
				<i @click="this.size < 140 ? addCompetences() : maxSize()" class="fa fa-plus-circle my-button plus pull-right"></i>

				<input type="submit" class="btn btn-primary form-control" />
			</form>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.js"></script>
	<script>
		
		app = new Vue({
			el: "#app",
			data:{
				themeNumber: 2,
				size: 0,
				formations:[{
					debut : '',
					fin : '',
					desc : ''
				}],
				exps_pro : [{
					debut : '',
					fin : '',
					desc : ''
				}],
				competences:[{
					desc:'',
				}]
			},
			methods : {
				addFormation : function(){
					this.formations.push({debut : '', fin : '', desc : ''});
					this.size += 20;
				},
				addExpsPro : function(){
					this.exps_pro.push({debut :'', fin : '', desc : ''});
					this.size += 20;
				},
				addCompetences : function(){
					this.competences.push({desc : ''});
					this.size += 20;
				},
				removeExp: function (exp_pro) {
      				this.exps_pro.$remove(exp_pro);
      				this.size -= 20;
   				},
   				removeFormation: function (formation) {
      				this.formations.$remove(formation);
      				this.size -= 10;
   				},
   				removeCompetence: function (competence) {
      				this.competences.$remove(competence);
      				this.size -= 10;
   				},
   				maxSize(){
   					alert('Vous avez atteint le nombre maximum de champs!');
   				},
   				changeTheme: function (themeNumber) {
   					this.themeNumber = themeNumber;
   				}
			}
		});

	</script>
</body>
</html>