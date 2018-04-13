<strong>Content - Pacientes</strong>

<div>
	<?php
		foreach ($listaPacientes as $paciente) {
			// print_r($paciente);
			?>
			
			<?php
			echo $paciente['pc_nome'] . " | ";
		}
	?>
</div>