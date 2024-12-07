<?php

namespace App\Controllers\Web;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    public function crear_usuario()
    {
        $usuarioModel = new UsuarioModel();

        $usuarioModel->insert(
            [
                'usuario' => 'julio',
                'email' => 'julio@gmail.com',
                'contrasena' => $usuarioModel->contrasenaHash('123'),
            ]
        );
    }

    public function probar_contrasena()
    {
        $usuarioModel = new UsuarioModel();
        var_dump($usuarioModel->contrasenaVerificar('123', '$2y$10$w6CQgRb4b2Xoap7dnmQQXecf3Qv6NgiSiXIoPudnz7jxMzh1gu046'));
    }

    public function login()
    {
        echo view('web/usuario/login');
    }

    public function login_post()
    {

        $usuarioModel = new UsuarioModel();

        $email = $this->request->getPost('email'); // email or usuario
        $contrasena = $this->request->getPost('contrasena'); // pw

        $usuario = $usuarioModel->select('id,usuario,email,contrasena,tipo')
            ->orWhere('email', $email)
            ->orWhere('usuario', $email)
            ->first();

        if (!$usuario) {
            return redirect()->back()->with('message', 'Usuario y/o contrasena invalida');
        }

        if ($usuarioModel->contrasenaVerificar($contrasena, $usuario->contrasena)) {
            unset($usuario->contrasena);
            session()->set('usuario', $usuario);

            return redirect()->to('/')->with('message', "Bienvenid@ $usuario->usuario");
        }

        return redirect()->back()->with('message', 'Usuario y/o contrasena invalida');
    }
    public function register()
    {
        echo view('web/usuario/register');
    }

    public function register_post()
    {

        $usuarioModel = new UsuarioModel();

        if ($this->validate('usuarios')) {
            $usuarioModel->insert([
                'usuario' => $this->request->getPost('usuario'),
                'email' => $this->request->getPost('email'),
                'contrasena' => $usuarioModel->contrasenaHash($this->request->getPost('contrasena')),
            ]);

            return redirect()->to(route_to('usuario.login'))->with('message', "Usuario registrado exitosamente");
        }

        session()->setFlashdata([
            'validation' => $this->validator
        ]);

        return redirect()->back()->withInput();
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(route_to('usuario.login'));
    }
}
