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
						</tr>
						<?php
					}
				?>
				</tbody>
			</table>
		</div>

	</div>
</div>