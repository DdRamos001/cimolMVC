<?php

class AlunoController extends MainController{
    public function __construct(){
       parent::__construct();
       $this->login_required=true;
    }
    
    public function msg($txt){

		$msg['msg']=$txt;

		return $msg['msg'];
}

    public function index(){
        if($this->login_required)
            /* verificar se temum uusario logado */

        /**Criar objeto do modelo */
        $modelo=$this->load_model("aluno");
        $alunos=$modelo->select();
       
        /** Carrega os arquivos do view **/
		require header;
       			
        require menu;
		
	    require PATH . '/views/aluno/index.php';
		
		require footer;
    }

    public function add(){
        $aluno['id']='';
        $aluno['nome']='';
        $aluno['matricula']='';
        $aluno['data_nascimento']='';

        /** Carrega os arquivos do view **/
		require header;
       			
        require menu;
		
	    require form_aluno;
		
		require footer;
    }

    public function salvar(){
        if(isset($_POST['aluno']['enviar'])){
            /**Remove o campo do POST */
            unset($_POST['aluno']['enviar']);
            /**Criar objeto do modelo */
            $modelo=$this->load_model("aluno");
        
            if(!empty($_POST['aluno']['id'])){
                $acao="update";
            }else{
                $acao="insert";
                unset($_POST['aluno']['id']);
            }
            
            if($alunos=$modelo->{$acao}($_POST['aluno'])){
                /**Mensagem de sucesso */
                $msg['msg']="Aluno salvo com sucesso!";
                $msg['class']="success";
            }else{
                /**Mensagem de erro */
                $msg['msg']="Falha ao salvar o aluno!";
                $msg['class']="danger";
            }
            $_SESSION['msg'][]=$msg;

            
        }

        header("location:".HOME_URI."aluno/");
    }

    public function editar($id){
        $modelo=$this->load_model("aluno");  
        $resultado=$modelo->select($id);
        
        $aluno=$resultado[0];


       
        require header;
       			
        require menu;
		
	    require form_aluno;
		
        require footer;
        
    }

    public function excluir($id){
        $modelo=$this->load_model("aluno");  
        if($modelo->delete($id)){
            /**Mensagem de sucesso */
            $msg['msg']="Aluno excluído com sucesso!";
            $msg['class']="success";
        }else{
            /**Mensagem de erro */
            $msg['msg']="Falha ao excluir o aluno!";
            $msg['class']="danger";
        }
        $_SESSION['msg'][]=$msg;
        header("location:".HOME_URI."aluno/");
    }

}