<?php

namespace App\Http\Controllers\AdminAuth;

use App\Application\Admin\AdminLogout;
use App\Application\Admin\SignInAsAdmin;
use App\Domain\Admin\AdminNotActive;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        try {
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $this->dispatch(new SignInAsAdmin(
                trim($request->input('email')),
                $request->input('password')
            ));

            return redirect('admin');
        } catch (AuthorizationException $e) {

            return redirect(route('admin.login.form'))
                ->withInput($request->only('email', 'remember'))
                ->withErrors([
                    'email' => 'These credentials do not match our records.',
                ]);
        } catch (AdminNotActive $e) {

            return redirect(route('admin.login.show'))
                ->withInput($request->only('email', 'remember'))
                ->withErrors([
                    'email' => 'This user has not confirm email.',
                ]);
        }
    }

    public function logout()
    {
        $this->dispatch(new AdminLogout());

        return redirect(route('admin.login.show'));
    }
}
