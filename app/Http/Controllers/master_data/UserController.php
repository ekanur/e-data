<?php

namespace App\Http\Controllers\master_data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    function index() : View {
        $title = 'Hapus User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view("admin.master_data.user")->with('user', User::where("id", "<>", auth()->user()->id)->get());
    }
    
    function edit($id) : View{
        return view("admin.master_data.user")->with('user', User::where("id", "<>", auth()->user()->id)->get())->with('edit', User::find($id));
    }

    function update(Request $request): RedirectResponse{
        $user = User::findOrFail($request->id);
        $user->is_admin = $request->is_admin;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        if($request->password != null && $request->password === $request->ulangi_password){
            $user->password = $request->username;
        }

        $user->save();
        return back()->with("success", "Berhasil meng-update User.");
    }

    function create(Request $request): RedirectResponse{

        $this->validate($request, [
            'name' => 'min:3',
            'username' => 'unique:users,username|min:3',
            'email' => 'email',
            'password' => 'min:5|same:ulang_password'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->is_admin = $request->is_admin;
        $user->save();
        
        
        return back()->with("success", "Berhasil menambah User.");;
    }

    function delete($id): RedirectResponse{
        try {
            $user = User::destroy($id);
        } catch (\Exception $e) {
            
            return back()->with("danger", "Tidak dapat menghapus data User. ".Str::of($e)->substr(0,85)." ....");
        }
        
        return back()->with("success", "Berhasil hapus User.");
    }
}
