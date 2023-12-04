<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index()
    {
        // Lấy danh sách người dùng
        $users = User::all();
        // Hiển thị view với danh sách người dùng
        return view('admin.index', ['users' => $users]);
    }

    public function edit(User $user)
    {
        // Hiển thị form chỉnh sửa thông tin người dùng
        return view('admin.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        // Cập nhật thông tin người dùng dựa trên dữ liệu từ form
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        // Chuyển hướng trở lại trang danh sách người dùng
        return redirect()->route('admin.index');
    }

    public function destroy(User $user)
    {
        // Xóa người dùng
        $user->delete();

        // Chuyển hướng trở lại trang danh sách người dùng
        return redirect()->route('admin.index');
    }

}

