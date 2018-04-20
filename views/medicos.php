<div class="wrapper">
	<div class="content medicos">

		<h1>Médicos</h1>
		<div class="tablePanel mgLR20 pdB30">
			<table class="tbl-tp1">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>Especialidade</th>
						<th>Valor</th>
						<th>Fone</th>
						<th>Cadastrado desde</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<?php
					foreach ($listaMedicos as $medico) {
						?>
						<tr>
							<td><?php echo $medico['me_nome']; ?></td>
							<td><?php echo $medico['me_email']; ?></td>
							<td><?php echo $medico['me_especialidades']; ?></td>
							<td><?php echo $medicos->valorToBr($medico['me_valor']); ?></td>
							<td><?php echo $medico['me_fone']; ?></td>
							<td><?php echo $medicos->inverte_data($medico['me_dt_cadastro']); ?></td>
							<td>
								<a href="javascript:;" class="editItem">Editar</a>
								<div class="contentEdit">
									<a href="javascript:;" class="closeEdit">Fechar edição</a>
									<div class="centerItem">
										<form action="<?php echo HOME_URI;?>/medicos/edit" method="POST">
											<input type="hidden" name="medicoId" id="medicoId" value="<?php echo $medico['id_medico']; ?>">
											<ul class="lst-tp1 clearfix">
												<li>
													<label for="nome">Nome</label>
													<input type="text" name="nome" id="nome" value="<?php echo $medico['me_nome']; ?>">
												</li>
												<li>
													<label for="email">Email</label>
													<input type="text" name="email" id="email" value="<?php echo $medico['me_email']; ?>">
												</li>
												<li class="small">
													<label for="especialidades">Especialidades</label>
													<input type="text" name="especialidades" id="especialidades" value="<?php echo $medico['me_especialidades']; ?>">
												</li>
												<li class="small">
													<label for="valor">Valor</label>
													<input type="text" value="<?php echo $medicos->valorToBr($medico['me_valor']); ?>" name="valor" id="valor">
												</li>
												<li class="small">
													<label for="fone">Fone</label>
													<input type="text" value="<?php echo $medico['me_fone']; ?>" class="maskFone" name="fone" id="fone">
												</li>
												<li>
													<input class="btn" type="submit" value="Alterar dados">
												</li>
											</ul>
										</form>
									</div>
								</div>
							</td>
							<td><a href="<?php echo HOME_URI;?>/medicos/remove?itm=<?php echo $medico['id_medico']; ?>">Remover</a></td>
						</tr>
						<?php
					}
				?>
				</tbody>
			</table>
		</div>

		<div class="insertItem mgLR20">
			<form action="<?php echo HOME_URI;?>/medicos/add" method="POST">
				<strong>Adicionar médico</strong>
				<ul class="lst-tp1 clearfix">
					<li>
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome">
					</li>
					<li>
						<label for="email">Email</label>
						<input type="text" name="email" id="email">
					</li>
					<li class="small">
						<label for="especialidades">Especialidades</label>
						<input type="text" name="especialidades" id="especialidades">
					</li>
					<li class="small">
						<label for="valor">Valor</label>
						<input type="text" name="valor" id="valor">
					</li>
					<li class="small">
						<label for="fone">Fone</label>
						<input type="text" class="maskFone" name="fone" id="fone">
					</li>
					<li class="small">
						<input class="btn" type="submit" value="Adicionar">
					</li>
				</ul>
			</form>
		</div>

	</div>
</div>