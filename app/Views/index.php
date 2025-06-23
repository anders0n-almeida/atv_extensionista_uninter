<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educação Financeira para Jovens</title>

    <!-- FavIcon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/icon.png') ?>" type="image/x-icon">

    <!-- Importação do Bootstrap (CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <!-- Importação do Font Awesome (biblioteca de ícones) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Referência ao arquivo de estilização próprio (CSS) -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

    <!-- Barra de navegação superior -->
    <nav class="navbar navbar-expand-md" style="background-color: var(--color-light-blue);">
        <div class="container-fluid ps-4">
            <!-- Botão do menu hamburguer para telas pequenas -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarConteudo" aria-controls="navbarConteudo" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Conteúdo colapsável (para o menu hamburger) -->
            <div class="collapse navbar-collapse" id="navbarConteudo">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('/') ?>">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Leitura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                </ul>
            </div>

            <!-- Conteudo que exibido constantemente, independente do menu hamburger ser acionado ou não -->
            <div class="d-flex align-items-center" id="user-section">
                <span class="user-label me-3">Visitante</span>
                <a class="nav-link" href="#">Login / Registrar</a>
            </div>
        </div>
    </nav>
    
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

    <div class="container-fluid">
        <div class="row align-item-center justify-content-center gap-3" id="courses-section">
            <div class="course-box">
                <h4>Introdução à Organização Financeira</h4>
                <p>Conceitos básicos sobre finanças pessoais para iniciar sua jornada</p>
            </div>
            <div class="course-box">
                <h4>Investimentos de Renda Fixa</h4>
                <p>Definição e breve ensaio sobre opções do tipo mais seguro de investimento</p>
            </div>
            <div class="course-box">
                <h4>Orçamento e Economia</h4>
                <p>Como trabalhar com orçamentos e dicas para economizar de forma inteligente</p>
            </div>
        </div>
    </div>

    <!-- Importação do módulo de JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <!-- Scipts próprios -->
    <script>
        // Escondendo os elementos da seção do usuário (#user-section) no ato de tocar no menu hamburguer (responsivo)
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.getElementById('navbarConteudo');
        const userSection = document.getElementById('user-section');

        // Evento que detecta o clique no botão do menu
        navbarToggler.addEventListener('click', () => {
            // Delay pequeno para garantir que a classe 'show' já tenha sido aplicada/retirada
            setTimeout(() => {
                if (navbarCollapse.classList.contains('show')) {
                    userSection.classList.add('d-none');
                } else {
                    userSection.classList.remove('d-none');
                }
            }, 50);
        });
        // Fim do script de gerenciamento da apresentação dos elementos da seção do usuário
    </script>

</body>
</html>