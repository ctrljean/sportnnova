<?php
class Enrutador extends Controlador
{
    public function __construct()
    {
        $this->userModel    =   $this->modelo('Usuario');
        $this->userSession  =   $this->modelo('Sesion');
    }
    public function index()
    {
        $this->vista('login/login');
    }
    public function validation()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo true;
        } else {
            echo false;
        }
        if (isset($_SESSION['user'])) {
            $this->vista('/inicio/inicio');
        } else if (isset($_POST['documento']) && ($_POST['password'])) {
            $userForm = $this->userModel->limpiarDatos($_POST['documento']);
            $passForm = $this->userModel->limpiarDatos($_POST['password']);
            if ($user  = $this->userModel->userExists($userForm, $passForm)) {
                $userSession = $this->userSession->setCurrentUser($userForm);
                $this->vista('/inicio/inicio');
            } else {
                $errorLogin = 'Nombre de usuario y/o password es incorrecto';
                $datos = [
                    'usuarios' => $errorLogin
                ];
                header('Location:' . RUTA_URL . '?b=Nombre de usuario y/o password es incorrecto');
            }
        } else {
            header('Location:' . RUTA_APP);
        }
    }
    public function user_registration() //Accion de registrar usuarios
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (
                !empty($_POST['complete_name'])
                && !empty($_POST['document_number'])
                && !empty($_POST['password'])
                && !empty($_POST['birth_date'])
                && !empty($_POST['sports'])
                && !empty($_POST['position'])
            ) {
                settype($_POST['document_number'], "integer");
                settype($_POST['sports'],          "integer");
                settype($_POST['position'],        "integer");

                switch ($_POST['document_number']
                    && $_POST['sports']
                    && $_POST['position']) {
                    case 'integer':
                        $datos = [
                            'complete_name'   => filter_var(trim($_POST['complete_name']),   FILTER_SANITIZE_STRING),
                            'document_number' => filter_var(trim($_POST['document_number']), FILTER_SANITIZE_NUMBER_INT),
                            'password'        => filter_var(trim($_POST['password']),        FILTER_SANITIZE_STRING),
                            'birth_date'      => filter_var(trim($_POST['birth_date']),      FILTER_SANITIZE_STRING),
                            'sports'          => filter_var(trim($_POST['sports']),          FILTER_SANITIZE_NUMBER_INT),
                            'position'        => filter_var(trim($_POST['position']),        FILTER_SANITIZE_NUMBER_INT)
                        ];
                        if ($this->userModel->insert_new_user($datos)) {
                            echo true;
                        } else {
                            echo false;
                        }
                        break;
                    default:
                        echo false;
                        break;
                }
            } else {
                echo false;
            }
        }
    }
}
