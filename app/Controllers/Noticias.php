<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NoticiasModel;
use App\Models\UsuariosModel;
use CodeIgniter\HTTP\ResponseInterface;

class Noticias extends BaseController
{

    public function index() {

        $noticias_model = new NoticiasModel();
        $dados['lista_noticias'] = $noticias_model->get_news_info();

        return view('news_list', $dados);

    }

    public function ler($id_noticia) {

        $noticias_model = new NoticiasModel();
        $dados['info_noticia'] = $noticias_model->get_news_info($id_noticia);

        return view('news_read', $dados);

    }
}
