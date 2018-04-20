<div class="wrapper">
	<div class="content pacientes">

		<h1>Pacientes</h1>
		<div class="tablePanel mgLR20 pdB30">
			<table class="tbl-tp1">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>Fone</th>
						<th>Cadastrado desde</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<?php
					foreach ($listaPacientes as $paciente) {
						?>
						<tr>
							<td><?php echo $paciente['pc_nome']; ?></td>
							<td><?php echo $paciente['pc_email']; ?></td>
							<td><?php echo $paciente['pc_fone']; ?></td>
							<td><?php echo $pacientes->inverte_data($paciente['pc_dt_cadastro']); ?></td>
							<td>
								<a href="javascript:;" class="editItem">Editar</a>
								<div class="contentEdit">
									<a href="javascript:;" class="closeEdit">Fechar edição</a>
									<div class="centerItem">
										<form action="<?php echo HOME_URI;?>/pacientes/edit" method="POST">
											<input type="hidden" name="pacienteId" id="pacienteId" value="<?php echo $paciente['id_paciente']; ?>">
											<ul class="lst-tp1 clearfix">
												<li>
													<label for="nome">Nome</label>
													<input type="text" name="nome" id="nome" value="<?php echo $paciente['pc_nome']; ?>">
												</li>
												<li>
													<label for="email">Email</label>
													<input type="text" name="email" id="email" value="<?php echo $paciente['pc_email']; ?>">
												</li>
												<li class="small">
													<label for="fone">Fone</label>
													<input type="text" value="<?php echo $paciente['pc_fone']; ?>" class="maskFone" name="fone" id="fone">
												</li>
												<li>
													<input class="btn" type="submit" value="Alterar dados">
												</li>
											</ul>
										</form>
									</div>
								</div>
							</td>
							<td><a href="<?php echo HOME_URI;?>/pacientes/remove?itm=<?php echo $paciente['id_paciente']; ?>">Remover</a></td>
						</tr>
						<?php
					}
				?>
				</tbody>
			</table>
		</div>

		<div class="insertItem mgLR20">
			<form action="<?php echo HOME_URI;?>/pacientes/add" method="POST">
				<strong>Adicionar paciente</strong>
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
						<label for="fone">Fone</label>
						<input type="text" class="maskFone" name="fone" id="fone">
					</li>
					<li>
						<input class="btn" type="submit" value="Adicionar paciente">
					</li>
				</ul>
			</form>
		</div>


	</div>
</div>