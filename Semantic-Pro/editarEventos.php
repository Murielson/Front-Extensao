<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<link rel="shortcut icon" href="_imagem/_icone/ifpe.png">
	<title>Portal de Eventos - IFPE</title>
	<style type="text/css">	
	*{margin:0;padding: 0;}
	body{background-color: #ccc;}
	</style>
</head>
<body>
	<?php include 'NavbarUser.php'; ?>	
		<div class="ui container" style="margin-top: 100px;">
			<div class="ui green segment">
				<div class="ui vertically divided grid">
					<div class="column">
						<center><h2 class="ui header">Editar Evento</h2></center>
						<br>
						<strong><h3 class="ui dividing header">Sobre o evento</h3></strong>
						<form class="ui form" action="previewEvento.php">
							<div class="field">
								<br>
								<label>Nome*<input type="text" name="nome" placeholder="Nome do evento" value="" ></label>
							</div>
							<div class="field">
								<br>
								<label>Descrição*
									<textarea placeholder="Descrição do Evento" name="descricao" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae faucibus quam. Donec turpis enim, mollis convallis eleifend vel, viverra sit amet ex. Etiam interdum elit sed vulputate viverra. Nullam commodo tellus purus, sit amet accumsan mauris suscipit feugiat. Nulla facilisi. Fusce varius vitae elit non consectetur. Aenean libero odio, dignissim ut iaculis sed, mattis ultricies nunc. Duis at finibus nibh. Sed tincidunt porta libero, in efficitur ante pulvinar non. Pellentesque fringilla fringilla urna eu posuere. Nulla volutpat pretium turpis ut auctor. Nullam ac finibus dui. Cras consequat varius justo, sagittis dapibus turpis faucibus at. Duis aliquam luctus eros, ut fringilla lorem consequat sed.
									</textarea>
								</label>
							</div>
							<div class="four fields">
								<div class="field">
									<br>
									<label>Email<input type="text" name="email" placeholder="Email para contato" value="XXXXX@XXX.XXX" ></label>
								</div>
								<div class="field">
									<br>
									<label>
										Telefone
										<input type="text" name="telefone" placeholder="Telefone para contato" value="000-000-00" >
									</label>
								</div>
								<div class="field">
									<br><label>Vagas*
										<input type="number" name="vagas" placeholder="Limite máximo de participantes." min="0" max="300">
									</label>
								</div>
								<div class="field">
									<br><br>
									<label for="file" class="ui icon green button" style="color: white;">
										<i class="file image icon"></i> 
										Adicionar-Imagem
										<input type="file" name="imagem" placeholder="Telefone para contato" style="display: none;" id="file">
									</label>
								</div>
							</div>
							<br>
							<strong>
								<h3 class="ui dividing header">Data e hora do evento</h3>
							</strong>
							<div class="five fields">
								<div class="field">
									<br>
									<label>
										Inicio*
										<input type="date" name="data" placeholder="Data do evento"  >
									</label>
								</div>
								<div class="field">
									<br>
									<label>
										Hora de Inicio*
										<input type="text" name="horainicio" placeholder="Telefone para contato" value="00:00"  >
									</label>
								</div> 
								<div class="field">
									<input type="hidden" name="">
								</div>
								<div class="field">
									<br>
									<label>
										Término*
										<input type="date" name="terminio" >
									</label>
								</div>
								<div class="field">
									<br>
									<label>
										Hora de Finalização*
										<input type="text" name="finish" value="00:00" >
									</label>
								</div>
							</div>
							<br>
							<strong>
								<h3 class="ui dividing header">Endereço do evento</h3>
							</strong>
							<div class="field">
								<br>
								<label>Campus do evento*</label>
								<select name="campus" class="ui fluid dropdown" value="Escolha um campus">
									<option value=""></option>
									<option value="AL">IFPE - CAMPUS - ABREU E LIMA</option>
									<option value="AF">IFPE - CAMPUS - AFOGADOS</option>
									<option value="BR">IFPE - CAMPUS - BARREIROS</option>
									<option value="BE">IFPE - CAMPUS - BELO JARDIM</option>
									<option value="IG">IFPE - CAMPUS - IGARASSU</option>
									<option value="RC">IFPE - CAMPUS - RECIFE</option>
								</select>
							</div>
							<div class="ui dividing header"></div>
								<center><input type="submit" value="Finalizar Edição" class="ui green button submit"></center>
						</form>
					</div>
				</div>
			</div>
		</div>	
		<br><br>
	<?php include 'footer.php';?>
</body>
</html>