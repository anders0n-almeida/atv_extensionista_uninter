<?= $this->extend('templates/default_template') ?>

<?= $this->section('content') ?>

<style>
    .news-box {
        display: block;
        padding: 10px;
        margin-block: 5px;
        text-decoration: none;
        color: #000;
    }
    .news-box h4 {
        color: var(--color-dark-blue);
        font-size: 0.95rem;
        margin-bottom: 0;
    }
    .news-box img {
        width: 150px;
    }
    .news-box p {
        font-size: 0.8rem;
    }
    .news-box .publicador-data {
        color: var(--color-dark-coin);
    }
    .news-box:hover {
        background-color: var(--color-medium-blue);
    }
</style>

<div id="full-page">
    <div class="container-fluid">
        <div class="row justify-content-center mt-2">
            <div class="col-md-8">

                <h2>Lista de Notícias</h2>

                <?php foreach($lista_noticias as $noticia): ?>
                    <a href="<?= site_url('/noticias/' . $noticia->id) ?>" class="news-box">
                        <div class="d-flex align-items-center">

                            <div class="col-md-3" style="text-align: center;">
                                <img src="<?= base_url('assets/news/' . $noticia->nome_arq_imagem) ?>" alt="Imagem da notícia <?= $noticia->id ?>" class="img-fluid">
                            </div>

                            <div class="col-md-9">
                                <h4><?= $noticia->titulo ?></h4>
                                <p>
                                    <span class="publicador-data">
                                        <?= $noticia->publicador ?> - <?= date('d/m/Y', strtotime($noticia->data_publicacao)) ?>
                                    </span>
                                    <br>
                                    <?= substr($noticia->conteudo, 0, 200) ?>...
                                </p>
                            </div>

                        </div>
                    </a>
                <?php endforeach ?>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>