<?php
/**
 * Exemplo - Controller de exemplo
 * @author Cândido Farias
 * @package mvc.controller
 * @since 0.1
 */
class ExemploController extends MainController
{
	/**
	 * URL: dominio.com/exemplo/
	 * 
	 * 
	 *  */ 
	public function index() {
		$this->title="Exemplo";
		$tituloPagina="Exemplo";
		/** Carrega os arquivos do view **/
		require header;
       			
        require menu;
		
		//require PATH . '/views/exemplo/index.php';
		
		require footer;
	}
	
	/**
	 * Método teste, com o objetivo de demonstrar a interação com Model
	 * URL: dominio.com/exemplo/outra-acao
	 *  */ 
	public function teste() {
		/**Instanciar um objeto da classe ExemploModel */
		$model=$this->load_model("Exemplo");
		
		$dadosExemplo=$model->teste();
		/** Carrega os arquivos do view **/
		require header;
       			
        require menu;
		require_once PATH . '/views/exemplo/index.php';
		require footer;
	}
	

	public function select($id=null){
		$model=$this->load_model("exemplo");
		
		$dadosExemplo=$model->select($id);
		/** Carrega os arquivos do view **/
		require header;
       			
        require menu;
		require_once PATH . '/views/exemplo/index.php';
		require footer;
	
	}
	
	public function insert(){
		require header;
       			
        require menu;
		
		$exemplo=$this->load_model("exemplo");
		if($result=$exemplo->insert()){
			echo "Registro Realizado!";
		}else{
			echo "Falha ao realizar o registro";
		}

		require footer;
	}

	
	public function selecta(){
		$exemplo=$this->load_model("exemplo");
		$result=$exemplo->select2();
		print_r($result);
	}

	public function selectb(){
		$exemplo=$this->load_model("exemplo");
		$result=$exemplo->select3();
		print_r($result);
	}

}