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
						</tr>
						<?php
					}
				?>
				</tbody>
			</table>
		</div>

	</div>
</div>