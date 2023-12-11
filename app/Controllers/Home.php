<?php

namespace App\Controllers;

use App\Models\LigaModel;
use App\Models\PlayerModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
    public function index(): string
    {
        $model = model(PlayerModel::class);
        $modelLiga = model(LigaModel::class);
        $data = ['jugadores' => $model->getPlayers(), 'ligas' => $modelLiga->getLigas()];

        return view('header')
            . view('index', $data);
    }

    public function create()
    {
        helper('form');

        $nombre = $this->request->getPost('nombre');
        $nivel = $this->request->getPost('nivel');

        $model = model(PlayerModel::class);
        $model->save([
            'nombre' => $nombre,
            'liga' => $nivel,
            'img' => "prueba.jpg",
        ]);
        return redirect()->to('./');

    }

    public function delete($id)
    {
        if ($id == null) {
            throw new PageNotFoundException("Cannot delete the item");
        }

        $model = model(PlayerModel::class);
        if ($model->where('id', $id)->find()) {
            $model->where('id', $id)->delete();
        } else {
            throw new PageNotFoundException("This item does not exist");
        }

        return redirect()->to('./');
    }
}
