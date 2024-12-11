<?php

namespace App\Controllers;

use App\Models\Matkul;
use App\Controllers\BaseController;

class AsdosController extends BaseController
{
    public function index()
    {
        $model = new Matkul();
        $data['matkul'] = $model->findAll();
        return view('asdos/data', $data);
    }

    public function create()
    {
        return view('asdos/create');
    }
    public function save()
    {
        $model = new Matkul();
        $data = [
            'matkul' => $this->request->getPost('matkul'),
            'sks' => $this->request->getPost('sks')
        ];
        $model->insert($data);
        dd($data);
        // return view('matkul/edit', ['data' => $data]);
    }
    public function edit($id_matkul)
    {
        $model = new Matkul();
        $data = $model->find($id_matkul);

        // dd($data); // Untuk memastikan data terambil dengan benar

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan.');
        }

        return view('asdos/edit', ['matkul' => $data]);
    }

    public function update($id_matkul)
    {
        $model = new Matkul();
        $data = [
            'matkul' => $this->request->getPost('matkul'),
            'sks' => $this->request->getPost('sks'),
        ];
    
        $model->update($id_matkul, $data);
    
        return redirect()->to('/data')->with('success', 'Data berhasil diperbarui.');
        }
    public function delete($id_matkul)
    {
        $model = new Matkul();
        $model->delete($id_matkul);
        return redirect()->to('/data');
    }
}
