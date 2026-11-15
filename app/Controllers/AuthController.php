<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthController extends BaseController
{

    private $userModel;
    public function __construct()
    {
        // Initialize any required services or dependencies here
        $this->userModel = new UserModel();
    }

    public function loginForm()
    {
        return view('Auth/login', [
            'title' => 'Login'
        ]);
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        // Perform authentication logic here
        $user = $this->userModel->where('email', $email)->first();
        if ($user && password_verify($password, $user->password)) {
            // Authentication successful
            // Set user session or token here
            session()->regenerate();
            session()->set([
                'user_id' => $user->id,
                'username' => $user->username
            ]);
            return redirect()
                ->with('message', 'Login successful')
                ->to('/'); // Redirect to a protected page after login
        } else {
            // Authentication failed
            // Redirect back with error message
            return redirect()
                ->with('message', 'Invalid email or password')
                ->withInput()
                ->back()->with('errors', ['Invalid email or password']);
        }

    }
    public function register()
    {
        //
    }

    public function logout() {
        // Destroy the user session or authentication token
        session()->remove(['user_id', 'username']);
        session()->regenerate(true);
        return redirect()
            ->with('message', 'Logged out successfully')
            ->to('/auth/login');
    }
}
