<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        // $user = $this->userModel->getUser();
        $data = [
            'title' => 'User',
            'user' => $this->userModel->getUser()
        ];
        return view('list_user', $data);
    }

    public function create()
    {
        $kelasmodel = new Kelas();
        $kelas = Kelas::all(); 
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas

        ];
        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $store = $this->userModel->create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas_id' => $request->kelas_id
        ]);

        return redirect()->to('/user');
    }

    public function edit($id){
        $user = $this->userModel->findOrFail($id);
        $kelas = Kelas::all();

        return view('edit_user', [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas
        ]);
    }

    public function update(Request $request, $id){
        $this->userModel->findOrFail($id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas_id' => $request->kelas_id
        ]);

        return redirect()->to('/user')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id){
        $this->userModel->findOrFail($id)->delete();
        return redirect()->to('/user')->with('success', 'Data berhasil dihapus!');
    }

    

}