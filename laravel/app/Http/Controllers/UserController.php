<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all()
            //  ->get();
            ->where('id'); //(tên trường, toán tử điều kiện, giá trị)
            // ->with('room') //Truy vấn thêm quan hệ trước khi trả kết quả ra view
            // ->where('id', '<=', 7)
            // ->paginate(5);
        return view('admin.User.index', compact('users'));
    }
    public function status(User $user)
    {
        if ($user->status == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }
        $user->save();
        return back();
    }
}
