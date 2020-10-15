<?php
/**
 * UserController - Controller de usuários
 * @author Cândido Farias
 * @package mvc
 * @since 0.1
 */
class UserController extends MainController
{

	/**
	 * Carrega a página "/views/user/index.php"
	 * @author Cândido Farias
	 */
    public function index() {
		// Título da página
		echo $this->title = 'User';
	} // index
	
	

    /**
	 * Carrega a página "/views/user/login.php"
	 * @author Cândido Farias
	 */
    public function login() {
		// Título da página
		$this->title = 'Login';
		/** Carrega os arquivos do view **/
		require PATH . '/views/user/login.php';
	} // login


    /**
	 * Encerra a sessão do usuário
	 * @author Cândido Farias
	 */
    public function logout() {
		$this->unsetUser();

		//$msg['class']="sucess";
	    //$msg['msg']="Logout realizado com sucesso";
		//$_SESSION['msg'][]=$msg;

		$txt = 'Logout realizado com sucesso';
		$this->mensagem($txt);

		header("Refresh: 2; url =".HOME_URI);
    } // logout

    /**
	 * Autentica o usuario"
	 * @author Cândido Farias
	 */
    public function autenticar() {
		if(isset($_POST['user'])){
			$userModel=$this->load_model("user");
			$user=$userModel->autenticar($_POST['user']['email'],md5($_POST['user']['password']));
			if($user){
				$this->setUser($user);

				//$msg['class']="sucess";
				//$msg['msg']="Login realizado com sucesso";
 
				$txt='Login realizado com sucesso';
				$this->mensagem($txt);

			}else{
				$txt='Falha no login';
				$this->mensagemError($txt);
			}
			
			
		}
		
		header("Refresh: 2; url =".HOME_URI);
	
    } // autenticar
	
} // class UserController

