<?= $this->extend('templates/default_template') ?>

<?= $this->section('content') ?>

<div id="full-page">
    <!-- Bloco de introdução -->
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center" id="intro-section">
            <div class="col-md-4 col-sm-12" id="intro-text">
                <h3>Educação Financeira para Jovens</h3>
                <p>Empoderando jovens trabalhadores com conhecimentos essenciais para administração de finanças pessoais</p>
            </div>
            <div class="col-md-4" id="intro-image">
                <img class="img-fluid" src="<?= base_url('assets/images/educ_financeira_jovem') ?>" alt="Jovem aprendendo sobre educação financeira">
            </div>
        </div>
    </div>
    
    <!-- Bloco de cursos/leituras -->
    <div class="container-fluid">
        <div class="row justify-content-center gap-3" id="courses-section">
            <a href="#" class="course-box">
                <h4>Introdução à Organização Financeira</h4>
                <p>Conceitos básicos sobre finanças pessoais para iniciar sua jornada</p>
            </a>
            <a href="#" class="course-box">
                <h4>Investimentos de Renda Fixa</h4>
                <p>Definição e breve ensaio sobre opções do tipo mais seguro de investimento</p>
            </a>
            <a href="#" class="course-box">
                <h4>Orçamento e Economia</h4>
                <p>Como trabalhar com orçamentos e dicas para economizar de forma inteligente</p>
            </a>
        </div>
        <div class="row" id="all-courses-link">
            <div class="col">
                <a href="#">Ver todos >></a>
            </div>
        </div>
    </div>
    
    <!-- Bloco de últimas notícias -->
    <div class="container-fluid">
        <div class="row justify-content-center" id="lastest-news">
            <div class="col-md-8">
                <h1 class="text-center mt-4" style="border-bottom: 1px solid var(--color-dark-blue); color: var(--color-dark-blue)">Últimas Notícias</h1>
            </div>
            <div class="row justify-content-center">
                <?php if (!empty($noticias_pag_inicial)): ?>
    
                    <div class="col-md-8 mb-4" id="featured-news">
                        <h2><?= $noticia_destaque->titulo ?></h2>
                        <p>
                            <b>Data de Publicação</b>: <?= date('d/m/Y', strtotime($noticia_destaque->data_publicacao)) ?><br>
                            <b>Publicado por</b>: <?= $noticia_destaque->publicador ?>
                            <br>
                            <a href="<?= site_url('/noticias/' . $noticia_destaque->id) ?>" class="goto-read-link">Ler >></a>
                        </p>
                        <img src="<?= base_url('assets/news/' . $noticia_destaque->nome_arq_imagem) ?>" alt="Imagem da notícia <?= $noticia_destaque->id ?>" class="img-fluid">
                    </div>
    
                    <?php if (count($noticias_complementares) > 0): ?>
                        <div class="row justify-content-center" id="adjacent-news">
    
                            <?php foreach ($noticias_complementares as $noticia): ?>
                                <div class="col-md-3 adjacent-news-box">
                                    <img src="<?= base_url('assets/news/' . $noticia->nome_arq_imagem) ?>" alt="Imagem da notícia <?= $noticia->id ?>" class="img-fluid">
                                    <h2 class="mt-2"><?= $noticia->titulo ?></h2>
                                    <p>
                                        Data de Publicação: <?= date('d/m/Y', strtotime($noticia->data_publicacao)) ?><br>
                                        Publicado por: <?= $noticia->publicador ?>
                                        <br>
                                        <a href="<?= site_url('/noticias/' . $noticia->id) ?>" class="goto-read-link">Ler >></a>
                                    </p>
                                </div>
                            <?php endforeach ?>
    
                        </div>
                    <?php endif ?>
                
                <?php else: ?>
    
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>