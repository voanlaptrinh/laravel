<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use App\Http\Requests\registerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }
    public function postLogin(loginRequest $request)
    {
        $data = $request->all();
    //    dd($data);
        $email = $data['email'];
        $password = $data['password'];

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            if(Auth::user()->role == 0 && Auth::user()->status == 1){
                session()->flash('success', 'Đăng nhập thành công');
                return redirect()->route('admin.users.master');
            }elseif(Auth::user()->role == 1 && Auth::user()->status == 1){
                session()->flash('success', 'Đăng nhập thành công');
                return redirect()->route('client.Home');
            }else{
                session()->flash('false', 'Tài khoản này đã bị khóa!');
                Auth::logout();
                return redirect()->route('auth.getLogin');
            }
        }
        session()->flash('false','Tài khoản hoặc mật khẩu không đúng');
        return redirect()->route('auth.getLogin');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->route('auth.getLogin');
    }
    public function Register()
    {
        // $users = User::select('*')->get();
        return view('auth.register');
    }
    public function post_Register(registerRequest $request)
    {
        $users = new User();
        $users->fill($request->all());
        $users->password = bcrypt($request->password);
        if ($request->hasFile('images')) {
            $avatar = $request->avatar;
            $avatarName = $avatar->hashName();
            $users->avatar = $avatar->storeAs('images/images', $avatarName);
            //storage
        } else {
            $users->avatar = '';
        }
        $users->save();
        session()->flash('dang_ky', 'Đăng ký thành công');
        return redirect()->route('auth.getLogin');
    }
}
