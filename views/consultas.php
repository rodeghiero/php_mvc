<div class="wrapper">
	<div class="content consultas">

		<h1>Consultas</h1>
		<div class="bxFiltro">
			<ul class="form clearfix">
				<li>
					<p>Filtrar por:</p>
				</li>
				<li>
					Nome: <input type="text" class="large" id="nome" name="nome">
				</li>
				<li>
					Data de: <input type="text" class="small maskDate" name="data_init" id="data_init">
				</li>
				<li>
					a <input type="text" class="small maskDate" name="data_end" id="data_end">
				</li>
				<li>
					<a class="btn" href="javascript:;" id="filtrar"> FILTRAR </a>
				</li>
			</ul>
		</div>

		<div class="tablePanel mgLR20">
			<table class="tbl-tp1 list-items">
				<thead>
					<tr>
						<th>Data</th>
						<th>Hora</th>
						<th>Paciente</th>
						<th>Médico</th>
						<th>Compareceu?</th>
					</tr>
				</thead>
				<tbody class="items">
				<?php
					foreach ($listaConsultas as $consulta) {
						?>
						<tr>
							<td><?php echo $consultas->inverte_data($consulta['dt_consulta']); ?></td>
							<td><?php echo $consultas->fltra_hora($consulta['hora_consulta']); ?></td>
							<td><?php echo $consulta['pc_nome']; ?></td>
							<td><?php echo $consulta['me_nome']; ?></td>
							<td><?php if($consulta['compareceu'] == 'S') { echo "Sim"; } else { echo "Não"; } ?></td>
						</tr>
						<?php
					}
				?>
				</tbody>
			</table>
		</div>

	</div>
</div>