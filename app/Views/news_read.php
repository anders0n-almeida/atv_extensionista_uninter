<?= $this->extend('templates/default_template') ?>

<?= $this->section('content') ?>

<style>
    #img-noticia {
        display: block;
        margin: 0 auto;
    }
    .texto-noticia {
        text-align: justify;
    }
</style>

<div id="full-page">
    <div class="container-fluid">
        <div class="row mt-2 justify-content-center">
            <div class="col-md-8">
                <h2><?= $info_noticia->titulo ?></h2>
            </div>
            <div class="col-md-8 mt-2">
                <img class="img-fluid" id="img-noticia " src="<?= base_url('assets/news/' . $info_noticia->nome_arq_imagem) ?>" alt="Imagem da notícia">
                <p>
                    <b>Publicado por</b>: <?= $info_noticia->publicador ?>
                    <br>
                    <b>Data de publicação</b>: <?= date('d/m/Y', strtotime($info_noticia->data_publicacao)) ?>
                </p>
            </div>
            <div class="col-md-8 mt-2 mb-4 texto-noticia">
                <?= $info_noticia->conteudo ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>