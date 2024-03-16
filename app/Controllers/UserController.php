<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    
    public function index()
    {
        return view('includes/header')
        . view('user/create');
    }

    public function store(){

        $user = new User();

        $data = array(
            'username' => $this->request->getPost('username'),
            'role' => $this->request->getPost('role'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        );

        $user->addUser($data);
        
        return redirect()->to('login', null, 'refresh');

    }

    public function edit($id){

        $user = new User();

        $data = $user->getUser($id);

        return view('includes/header')
        . view('user/edit', ["data" => $data->getResult()]);
    }

    public function update($id){

        $user = new User();

        $data = array(
            'username' => $this->request->getPost('username'),
            'role' => $this->request->getPost('role'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        );

        $user->updateUser($id, $data);

        return redirect()->to('users', null, 'refresh');

    }

    public function login()
    {
        return view('includes/header')
        . view('auth/login');
    }

    public function sigin(){

        // Formulario válido, verifica las credenciales del usuario
        $user = new User();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $data = $user->getUserByUsername($username)[0];

        if ($data && password_verify($password, $data->password)) {
            // Inicio de sesión exitoso, establece la sesión y redirige al dashboard
            session()->set(['id' => $data->id, 'username' => $data->username, 'role' => $data->role]);
            if($data->role == "talent"){
                return redirect()->to('/dashboard/talent', null, 'refresh');
            }else{
                return redirect()->to('dashboard/recluiter', null, 'refresh');        
            }
        } else {
            // Credenciales inválidas, muestra un mensaje de error
            $data['error'] = 'Invalid username or password';
            return redirect()->back();
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/', null, 'refresh');  
      }   

    
}
