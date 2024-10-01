<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = User::orderByRaw("FIELD(role, 'admin') DESC")->get();

        return UserResource::collection($data);
    }

    public function userById($id){
        $user = User::where('id', $id)->first();

        if(!$user){
            return response()->json([
                'message' => 'Pengguna tidak ditemukan'
            ], 404);
        }
        
        return new UserResource($user);
    }

    public function profile(){
        $user = Auth::id();

        $me = User::where('id', $user)->get();

        return new UserResource($me);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'username' => 'required|string|max:50|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'role' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return response()->json([
            'message' => 'Pengguna baru berhasil ditambahkan',
            'User' => $validatedData
        ], 200);
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:50',
            'email' => 'sometimes|required|email',
            'username' => 'sometimes|required|string|max:50',
            'password' => 'sometimes|required',
            'role' => 'sometimes|required'
        ]);

        if(!empty($validatedData['password'])){
            $validatedData['password'] = bcrypt($validatedData['password']);
        }else {
            
            unset($validatedData['password']);
        }

        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'message' => 'Pengguna tidak ditemukan'
            ], 404);
        }

        $user->update($validatedData);

        return response()->json([
            'message' => 'Pengguna berhasil diperbarui',
            'Pengguna' => $user
        ], 200);
    }

    public function destroy($id){
        $data = User::find($id);

        if (!$data) {
            return response()->json([
                'message' => 'Pengguna tidak ditemukan'
            ], 404);
        }

        $data->delete();

        return response()->json([
            'message' => 'Pengguna berhasil dihapus'
        ], 200);
    }
}
