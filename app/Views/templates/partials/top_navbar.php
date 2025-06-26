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
                    <a class="nav-link" href="<?= site_url('/noticias') ?>">Notícias</a>
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