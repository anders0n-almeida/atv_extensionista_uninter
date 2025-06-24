<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NoticiasModel;
use App\Models\UsuariosModel;

class Home extends BaseController
{
    public function index() {

        $noticias_model = new NoticiasModel();
        $usuarios_model = new UsuariosModel();

        $noticias_pag_inicial = $noticias_model->limit(4)->orderBy('id', 'DESC')->find();
        $noticias_complementares = [];
        $noticia_destaque = '';
        
        if (!empty($noticias_pag_inicial)) {

            
            for ($i = 0; $i < count($noticias_pag_inicial); $i++) {

                if ($i == 0) {
                    $noticia_destaque = $noticias_pag_inicial[$i];
                    $noticia_destaque->publicador = $usuarios_model->find($noticia_destaque->publicado_por)->usuario;
                }
                else {
                    $noticias_pag_inicial[$i]->publicador =  $usuarios_model->find($noticias_pag_inicial[$i]->publicado_por)->usuario;
                    $noticias_complementares[] = $noticias_pag_inicial[$i];
                }

            }

        }

        $data = [
            'noticias_pag_inicial' => $noticias_pag_inicial,
            'noticia_destaque' => $noticia_destaque,
            'noticias_complementares' => $noticias_complementares,
        ];

        return view('index', $data);
    }
}
