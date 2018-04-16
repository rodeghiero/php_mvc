<div class="wrapper">
	<div class="content home">

		<h1>Informações Gerais</h1>
		<div class="clearfix">
			<div class="bx">
				<div>
					<h3>Últimos médicos cadastrados</h3>
					<table class="tbl-tp1">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Especialidade</th>
							</tr>
						</thead>
						<tbody>
						<?php
							foreach ($listaMedicos as $medico) {
								?>
								<tr>
									<td><?php echo $medico['me_nome']; ?></td>
									<td><?php echo $medico['me_especialidades']; ?></td>
								</tr>
								<?php
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="bx">
				<div>
					<h3>Últimos pacientes cadastrados</h3>
					<table class="tbl-tp1">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Fone</th>
							</tr>
						</thead>
						<tbody>
						<?php
							foreach ($listaPacientes as $paciente) {
								?>
								<tr>
									<td><?php echo $paciente['pc_nome']; ?></td>
									<td><?php echo $paciente['pc_fone']; ?></td>
								</tr>
								<?php
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>