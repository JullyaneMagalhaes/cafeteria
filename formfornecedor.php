<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php
	include 'header.php';
	?>
</head>

<body>
	<div class="wrapper">
		<?php
		include 'menu.php';
		?>
		<div class="main">
			<main class="content">
				<form action="" method="post">
					<div class="container-fluid p-0">
						<h1 class="h3 mb-3">Cadastro do fornecedor</h1>	
						<div class="row">
							<form class="row g-3">
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Nome da empresa</label>
									<input type="email" class="form-control mb-3" id="inputEmail4" placeholder="Digite o nome da empresa">
								</div>
								<div class="col-md-6">
									<label for="inputPassword4" class="form-label">Endereço</label>
									<input type="password" class="form-control mb-3" id="inputPassword4" placeholder="Digite o endereço">
								</div>
								<div class="col-12">
									<label for="inputAddress" class="form-label">Número de telefone</label>
									<input type="text" class="form-control mb-3" id="inputAddress"
										placeholder="(85) 9 9999-9999">
								</div>
								<div class="col-12">
									<label for="inputAddress2" class="form-label ">Address 2</label>
									<input type="text" class="form-control mb-3" id="inputAddress2"
										placeholder="Apartment, studio, or floor">
								</div>
								<div class="col-md-6">
									<label for="inputCity" class="form-label">City</label>
									<input type="text" class="form-control" id="inputCity">
								</div>
								<div class="col-md-4">
									<label for="inputState" class="form-label">State</label>
									<select id="inputState" class="form-select">
										<option selected>Choose...</option>
										<option>...</option>
									</select>
								</div>
								<div class="col-md-2">
									<label for="inputZip" class="form-label">Zip</label>
									<input type="text" class="form-control" id="inputZip">
								</div>
								<div class="col-12">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="gridCheck">
										<label class="form-check-label" for="gridCheck">
											Check me out
										</label>
									</div>
								</div>
								<div class="col-12">
 
							</form>
						</div>

						<div style="text-align: center"><input type="button" value="Salvar" class="btn btn-primary"
								style="text-align: center"></div>
				</form>
			</main>



			<footer class="footer">
				<?php
				include 'footer.php';
				?>
			</footer>
		</div>

	</div>

	<script src="js/app.js"></script>

</body>

</html>