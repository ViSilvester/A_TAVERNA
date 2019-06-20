<!DOCTYPE html>
<html>
<head>
	<title> Opções de Sala</title>
	<?php session_start();  ?>
	<script type = "text/javascript">
		function AtivaSuasSalas(el) {
			var display = document.getElementById(el).style.display;
			if(display == "none")
				document.getElementById(el).style.display = 'block';
				document.getElementById('CriarSala').style.display = 'none';
				document.getElementById('BuscarSalas').style.display = 'none';
				document.getElementById('VisualizarSala').style.display = 'none';
		}
		
		function AtivaCriarSala(el) {
			var display = document.getElementById(el).style.display;
			if(display == "none")
				document.getElementById(el).style.display = 'block';
				document.getElementById('BuscarSalas').style.display = 'none';
				document.getElementById('SuasSalas').style.display = 'none';
				document.getElementById('VisualizarSala').style.display = 'none';
		}
		
		function AtivaBuscarSalas(el) {
			var display = document.getElementById(el).style.display;
			if(display == "none")
				document.getElementById(el).style.display = 'block';
				document.getElementById('SuasSalas').style.display = 'none';
				document.getElementById('CriarSala').style.display = 'none';
				document.getElementById('VisualizarSala').style.display = 'none';
		}

		function AtivaVisualizarSala(el) {
			var display = document.getElementById(el).style.display;
			if(display == "none")
				document.getElementById(el).style.display = 'block';
				document.getElementById('SuasSalas').style.display = 'none';
				document.getElementById('CriarSala').style.display = 'none';
				document.getElementById('BuscarSalas').style.display = 'none';
		}
	</script>
</head>

<body>
	<div>
		<divid id = sair>
			<button onclick="hide('popup');" style="border-radius: 20px; height:40px; width:40px;">X</button>
		</divid>
		<div id= "popupSectionL" class="popupSection" style="width:75% ! important;">

			<div id='SuasSalas' style ="display: block;">

				<h3>Suas Salas<h3/>

				<div id="areaExibicao" style="background-color: FFFFFF; width: 95%; height: 70%;">
					<a href="#" onclick = "AtivaVisualizarSala('VisualizarSala')"> Super Sala Super Legal<a/><br/>
				</div>

			</div>

			<div id='BuscarSalas' style ="display: none;">

				<h3>Encontre uma sala<h3/>

				<form id = "formBuscaSala">
					<input type="text" name="string">
					<button type="reset" onclick="buscaSala()"> Buscar </button>
				</form>

				<div id="areaBusca">
					
				</div>

			</div>
			
			<div id='CriarSala' style ="display: none;">
				<h3>Criar Sala</h3>
				<form method="post" action="../Controller/criaSala.php">
					Nome da nova sala <br/>
					<input type="text" name="nome" ><br/><br/>
					Descricao<br/>
					<textarea name="descricao" class = "textArea"></textarea><br/>
					<input type="submit" value="Criar Sala" >
				</form>				
				
			</div>

			<div id='VisualizarSala' style ="display: none;">
				<h3>Visualizar Sala</h3>
				
					Nome:  <br/>
					<input type="text" name="nome" value="Super Sala Super Legal"><br/><br/>
					Descricao<br/>
					<textarea name="descricao" class = "textArea"> Sala divertida</textarea><br/>
					Chats
					<div id="areaExibicao" style="background-color: FFFFFF; width: 90%; height: 30%;">
						Seja bem vindo    <button onclick="popupChat()">Editar</button><br/>
	
					</div>
					<button>adicionar chat</button>
			</div>


		</div>




		<div id="popupSectionR" class="popupSection" style="width:19% ! important;">
		
			<button type="button" onclick="AtivaSuasSalas('SuasSalas')" class="botao" style="height:50px ! important;" >Suas Salas</button><br/><br/>
			
			<button type="button" onclick="AtivaCriarSala('CriarSala')" class="botao" style="height:50px ! important;">Criar Sala</button><br/><br/>
			
			<button type="button" onclick="AtivaBuscarSalas('BuscarSalas')" class="botao" style="height:50px ! important;">Buscar Sala</button><br/><br/>
		</div>
	</div>

</body>
</html>