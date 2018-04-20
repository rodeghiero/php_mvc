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
						<th></th>
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
							<td><a href="<?php echo HOME_URI;?>/consultas/remove?itm=<?php echo $consulta['id_consulta']; ?>">Remover</a></td>
						</tr>
						<?php
					}
				?>
				</tbody>
			</table>
		</div>


		<div class="insertItem mgLR20">
			<form action="<?php echo HOME_URI;?>/consultas/add" method="POST">
				<strong>Inserir nova consulta</strong>
				<ul class="clearfix">
					<li class="large">
						<select name="paciente" id="paciente">
							<option value="">selecione</option>
							<?php
								foreach ($listaPacientes as $paciente) {
								?>
									<option value="<?php echo $paciente['id_paciente']; ?>"><?php echo $paciente['pc_nome']; ?></option>
								<?php
								}
							?>
						</select>
					</li>
					<li class="large">
						<select name="medico" id="medico">
							<option value="">selecione</option>
							<?php
								foreach ($listaMedicos as $medico) {
								?>
									<option value="<?php echo $medico['id_medico']; ?>"><?php echo $medico['me_nome']; ?></option>
								<?php
								}
							?>
						</select>
					</li>
					<li class="small">
						<input type="text" class="small maskDate" name="data" id="data">
					</li>
					<li class="small">
						<input type="text" class="small maskHour" name="hora" id="hora">
					</li>
					<li>
						<input class="btn" type="submit" value="Marcar consulta">
					</li>
				</ul>
			</form>
		</div>

	</div>
</div>