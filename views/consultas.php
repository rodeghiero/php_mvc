<strong>Content - Consultas</strong>

<div>
	<p>Filtrar por:</p>
	<hr>
		<div>
			Nome: <input type="text" id="nome" name="nome">
			Data de: <input type="text" name="data_init" id="data_init">
			a <input type="text" name="data_end" id="data_end">
			<a href="javascript:;" id="filtrar"> FILTRAR </a>
		</div>
	<hr>
</div>

<div>
	<?php
		foreach ($listaConsultas as $consulta) {
			// print_r($consulta);
			?>
			
			<?php
			echo "(" . $consulta['id_medico'] . ") " . $consulta['me_nome'] . " | ";
			echo "(" . $consulta['id_paciente'] . ") " . $consulta['pc_nome'] . " | ";
			echo $consultas->inverte_data($consulta['dt_consulta']) . " | ";
			echo $consulta['queixas_paciente'];
		}
	?>
</div>