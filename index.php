<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Currículos</title>
</head>
<body>

    <h1> Currículos </h1>

    <div class="modal">
    <a href="?exibirc"> Curriculo Cah </a>

    <br>

    <a href="?exibircr"> Curriculo Cris </a>

    <br>

    </div>

    <br>

    <?php if (isset($_GET['exibirc'])){ ?>
        <div class="page">
            <div class="cabeçalho">
                <h1> CATARINE LOPES DA SILVA SALES </h1>

                <br>

                <p> 23 anos | Centro - Diadema | São Paulo | Cel: (11) 96916-2280</p>
                <p>Email: catarinesales2013@gmail.com</p>
                <p>GitHub/Portifólio: <a href="https://github.com/CatarineSales">https://github.com/CatarineSales</a></p>
            </div>

            <br>

             <hr>

             <br>

            <div class="conteiner1">
                <h2> OBJETIVO </h2>
                <p>Estagiária na áreas de Desenvolvimento de Sistemas</p>

            <br>

                <h2>RESUMO DAS QUALIFICAÇÕES</h2>
                <p>Desenvolvedora Front End com conhecimento principal em linguagens HTML, CSS, JavaScript,Kotlin e C, alem de conhecimentos em Design Digital. Criativa, comunicativa e possui aptidão como autodidata, buscando contantemente seu desenvolvimento profissional.</p>

            <br>

                <h2>FORMAÇÃO ACADEMICA</h2>
                <p><strong>Ensino Superior</strong> 2026 | Concluído</p>
                <p>Desenvolvimento de Software | FATEC Diadema</p>

                <br>

                <p><strong>Curso Técnico</strong> 2026 | Em Andamento</p>
                <p>Desenvolvimento de Sistemas | ETEC JK Diadema</p>

            <br>

            </div>

            <hr>

            <div class="container2">

                <br>

                <h2>EXPERIÊNCIA PROFISSIONAL</h2>
                <p><strong>Freelancer Desenvolvimento FrontEnd - SP</strong></p>
                <p>Em 2025 participaou da reformulação de uma página de uma pagina de cardápio online de um ambiente de festas e espetarias de forma voluntária.</p>

                <br>

                <p><strong>Freelancer Desenvolvimento FrontEnd Mobile- SP</strong></p>
                 <p>Em Fevereiro de 2026 foi convidada para participar do desenvovlvimento FrontEnd de um aplicativo chamado Árbitro Varzea, projeto em parceria com alunas da FATEC de esportes.</p>
        
                <br>

            </div>

            <hr>

            <div class="Conteiner3">

                <br>

                <h2>CURSOS</h2>
                <p>HTML, CSS and JavaScript Essentials (2025) - Cursando | Cisco | Online</p>
                <p>Pyston Essentials (2023) - Concluído | Cisco | Online</p>

                <br>

                <h2>IDIOMAS</h2>
                <p> Inglês - Intermediário</P>
                <p> Espanhol - Intermediário</P>

                <br>

                <h2>INFORMAÇÕES ADICIONAIS</h2>
                <p>Antes de entrar na fatec, trabalhava como freelancer com fotografia e com audiovisual como Assitente de Direção.</p>

                <br> 

                <p>Em 2024 participou da Iniciação Cientifica da FATEC, com foco na pesquisa com tema "Arte e Tecnologia: as contribuições e desafios nos processsos criativos dos artistas".</p>

                <br>

                <p>No segundo semestre do mesmo ano apresentou sua pesquisa no Congresso Nacional de Iniciação.</p>
            </div>
        </div>

        <div class="fechar">

            <a href="?">Fechar currículo</a>

        </div>

    <?php } ?>

</body>
</html>