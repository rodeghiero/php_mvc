<?php
/**
 * MedicosController
 */

class ConsultasController extends MainController
{

    public function index() {
		// Título da página
		$this->title = 'Consultas';
		$this->templatePage = 'consultas';

		$consultas = $this->load_model('consultas-model');
		$listaConsultas = $consultas->listar_consultas();
		
		// carrega o template master dos sistema........
        require ABSPATH . '/views/master.php';
		
    }


    public function filtro() {
        if ($_POST) {
			$consultas = $this->load_model('consultas-model');
			$listaConsultasFiltro = $consultas->listar_consultas_filtro();
			$qtResults = count($listaConsultasFiltro);

            //verifica a query aqui com os dados retornados..............................
            if($qtResults > 0){
            	header('Content-type: application/json');
                $contents = json_encode($listaConsultasFiltro);
                echo $contents;

            } else {
                $status = 'nada';
                $message = 'Ops, nada foi encontrado para a busca efetuada!';
                echo "{ \"status\" : \"".$status."\", \"message\" : \"".$message."\" }";
            }

        } else {
            $status = 'notpost';
            $message = 'Este envio não é um Post do sistema!';
            echo "{ \"status\" : \"".$status."\", \"message\" : \"".$message."\" }";
        }
    }

}
