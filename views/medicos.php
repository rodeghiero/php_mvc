<strong>Content - Médicos</strong>

<div>
	<?php
		foreach ($listaMedicos as $medico) {
			// print_r($medico);
			?>
			
			<?php
			echo $medico['me_nome'] . " | ";
			echo $medico['me_especialidades'];
		}
	?>
</div>