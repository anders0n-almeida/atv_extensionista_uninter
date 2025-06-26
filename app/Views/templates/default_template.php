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

    <!-- Barra de Navegação Superior -->
    <?= $this->include('templates/partials/top_navbar.php') ?>
    
    <!-- Conteúdo -->
    <?= $this->renderSection('content') ?>
    
    <!-- Rodapé/Footer -->
    <?= $this->include('templates/partials/footer.php') ?>

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