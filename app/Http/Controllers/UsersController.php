<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
use App\Handlers\ImageUploadHandler;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user, ImageUploadHandler $uploader)
    {
        $data = $request->all();

        if ($request->avatar) {
            $result = $uploader->save($request->avatar, 'avatars', $user->id, 200);
            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }

        $user->update($data);
        return back()->with('success', '个人资料更新成功！');
    }
}
