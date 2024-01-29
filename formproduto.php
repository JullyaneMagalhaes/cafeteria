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
				<form action="cadastroproduto.php" method="post">
					<div class="container-fluid p-0">
						<h1 class="h3 mb-3">Cadastro do produto</h1>

						<div class="row">
							<div class="mb-3 col-6">
								<label for="produto" class="form-label">Produto</label>
								<input type="text" class="form-control" id="produto" name="produto"
									placeholder="Nome do produto">
							</div>
							<div class="mb-3 col-6">
								<label for="descricao" class="form-label">Descrição</label>
								<textarea class="form-control" id="descricao" name="descricao" rows="1"
									placeholder="Descreva o produto"></textarea>
							</div>
							<div class="mb-3 col-12">
								<label for="categoria" class="form-label">Categoria de produto</label>
								<select class="form-select form-select" name="categoria" id="categoria">
									<option value="bebidaquente">Bebida quente</option>
									<option value="bebidagelada">Bebida gelada</option>
									<option value="boloesobremesa">Bolo e sobremesa</option>
									<option value="sanduicheesalgado">Sanduíches e Salgados</option>
								</select>
							</div>
							<div class="mb-3 col-6">
								<label for="estoque" class="form-label">Estoque</label>
								<input type="number" class="form-control" name="estoque" id="estoque" min="0" max="200"
									step="1">
							</div>
							<div class="mb-3 col-6">
								<label for="preco" class="form-label">Preço</label>
								<input type="number" class="form-control" name="preco" id="preco" min="0" max="5"
									step="1">
							</div>
						</div>
						<div style="text-align: center">
						<input type="submit" value="Salvar" class="btn btn-primary"
								style="text-align: center">
						</div>
				</form>
			</main>

			<div class="main">
				<div class="container">

				
					<div
						class="table-responsive"
					>
						<table
							class="table table-striped table-light"
						>
							<thead>
								<tr>
									<th scope="col">ID Produto</th>
									<th scope="col">Produto</th>
									<th scope="col">Preço</th>
									<th scope="col">Categoria</th>
									<th scope="col">Ações</th>
								</tr>
							</thead>
							<tbody>
									<?php
										include 'conexao.php';
										$sql = "SELECT * FROM produtos";
										$busca =mysqli_query($conexao,$sql);
										while ($dados = mysqli_fetch_array($busca)) {
											$idprodutos = $dados['idprodutos'];
											$produto = $dados['produto'];
											$preco = $dados['preco'];
											$categoria = $dados['categoria'];									$categoria = $dados['categoria'];
					
										?>
										<tr>
											<td><?php echo $idprodutos ?></td>
											<td><?php echo $produto ?></td>
											<td><?php echo $preco ?></td>
											<td><?php echo $categoria ?></td>
											<td>
												<button
													type="button"
													class="btn btn-warning btn-lg"
													data-bs-toggle="modal"
													data-bs-target="#modaleditar"
												>
												<i class="fa-solid fa-user-pen"></i>
											
												</button>
												
										
												<div
													class="modal fade"
													id="modaleditar"
													tabindex="-1"
													data-bs-backdrop="static"
													data-bs-keyboard="false"
													
													role="dialog"
													aria-labelledby="modalTitleId"
													aria-hidden="true"
												>
													<div
														class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
														role="document"
													>
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="modalTitleId">
																	Editar
																</h5>
																<button
																	type="button"
																	class="btn-close"
																	data-bs-dismiss="modal"
																	aria-label="Close"
																></button>
															</div>
															<div class="modal-body">Body</div>
															<div class="modal-footer">
																<button
																	type="button"
																	class="btn btn-secondary"
																	data-bs-dismiss="modal"
																>
																	Fechar
																</button>
																<button type="button" class="btn btn-primary">Salvar</button>
															</div>
														</div>
													</div>
												</div>
												
												<button
													type="button"
													class="btn btn-danger btn-lg"
													data-bs-toggle="modal"
													data-bs-target="#modalexcluir"
												>
												<i class="fa-solid fa-trash"></i>
											
												</button>
												
												<!-- Modal Body -->
												<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
												<div
													class="modal fade"
													id="modalexcluir"
													tabindex="-1"
													data-bs-backdrop="static"
													data-bs-keyboard="false"
													
													role="dialog"
													aria-labelledby="modalTitleId"
													aria-hidden="true"
												>
													<div
														class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
														role="document"
													>
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="modalTitleId">
																	Excluir item
																</h5>
																<button
																	type="button"
																	class="btn-close"
																	data-bs-dismiss="modal"
																	aria-label="Close"
																></button>
															</div>
															<div class="modal-body">Deseja excluir este item?</div>
															<div class="modal-footer">
																<button
																	type="button"
																	class="btn btn-secondary"
																	data-bs-dismiss="modal"
																>
																	Voltar
																</button>
																<button type="button" class="btn btn-danger">Excluir</button>
															</div>
														</div>
													</div>	
												</div>
												




												<!-- Optional: Place to the bottom of scripts -->
												<script>
													const myModal = new bootstrap.Modal(
														document.getElementById("modalId"),
														options,
													);
												</script>
												
											</td>
										</tr>
										
										
										<?php } ?>

							
							</tbody>
						</table>
					</div>
					
				</div>
				
			</div>

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