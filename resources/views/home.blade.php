
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Conecta Serviços | Encontre profissionais</title>

    <style>
        :root {
            --vermelho: #CC092F;
            --rosa: #ED145B;
            --azul: #91CCE7;
            --amarelo: #F5E583;
            --roxo: #5E50A1;
            --branco: #ffffff;
            --cinza: #f5f6fa;
            --texto: #333333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: var(--cinza);
            color: var(--texto);
        }

        /* CABEÇALHO */

        header {
            background: var(--branco);
            padding: 18px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px #00000010;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: var(--vermelho);
        }

        .logo span {
            color: var(--roxo);
        }

        nav {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        nav a {
            text-decoration: none;
            color: var(--texto);
            font-weight: bold;
            font-size: 14px;
        }

        nav a:hover {
            color: var(--rosa);
        }

        .btn-login {
            background: var(--vermelho);
            color: white !important;
            padding: 11px 22px;
            border-radius: 7px;
        }

        /* BANNER PRINCIPAL */

        .hero {
            background: linear-gradient(
                120deg,
                var(--vermelho),
                var(--rosa),
                var(--roxo)
            );

            color: white;
            padding: 85px 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .hero-content {
            max-width: 600px;
        }

        .hero h1 {
            font-size: 43px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 17px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .btn-principal {
            display: inline-block;
            background: var(--amarelo);
            color: #333;
            padding: 15px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-principal:hover {
            background: white;
            transform: translateY(-3px);
        }

        .hero-decoration {
            font-size: 130px;
        }

        /* CATEGORIAS */

        .categorias {
            padding: 65px 7%;
            text-align: center;
        }

        .titulo {
            font-size: 30px;
            margin-bottom: 12px;
            color: var(--roxo);
        }

        .subtitulo {
            color: #777;
            margin-bottom: 35px;
        }

        .categoria-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .categoria-card {
            background: white;
            padding: 30px 20px;
            border-radius: 12px;
            box-shadow: 0 3px 15px #0000000d;
            transition: 0.3s;
        }

        .categoria-card:hover {
            transform: translateY(-5px);
        }

        .categoria-card .icone {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .categoria-card h3 {
            color: var(--vermelho);
            margin-bottom: 10px;
        }

        .categoria-card p {
            color: #777;
            font-size: 14px;
            line-height: 1.5;
        }

        /* ÁREA DE ACESSO */

        .acesso {
            background: var(--azul);
            padding: 65px 7%;
            text-align: center;
        }

        .acesso h2 {
            color: var(--roxo);
            font-size: 29px;
            margin-bottom: 15px;
        }

        .acesso p {
            margin-bottom: 25px;
        }

        .botoes {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .btn {
            padding: 14px 22px;
            border-radius: 7px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-vermelho {
            background: var(--vermelho);
            color: white;
        }

        .btn-roxo {
            background: var(--roxo);
            color: white;
        }

        .btn-branco {
            background: white;
            color: var(--roxo);
        }

        .btn:hover {
            transform: translateY(-3px);
            opacity: 0.9;
        }

        /* RODAPÉ */

        footer {
            background: #30284e;
            color: white;
            text-align: center;
            padding: 25px;
            font-size: 14px;
        }

        footer span {
            color: var(--amarelo);
        }

        /* RESPONSIVIDADE */

        @media (max-width: 768px) {

            header {
                flex-direction: column;
                gap: 20px;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .hero {
                text-align: center;
                padding: 60px 7%;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hero-decoration {
                display: none;
            }

            .categoria-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- CABEÇALHO -->

    <header>

        <div class="logo">
            Conecta <span>Serviços</span>
        </div>

        <nav>
            <a href="{{ url('/') }}">Início</a>

            <a href="{{ route('servicos.index') }}">
                Serviços
            </a>

            <a href="{{ route('servicos.create') }}">
                Anunciar serviço
            </a>

            <a href="{{ route('login') }}" class="btn-login">
                Entrar
            </a>
        </nav>

    </header>


    <!-- BANNER PRINCIPAL -->

    <section class="hero">

        <div class="hero-content">

            <h1>
                Encontre o profissional que você precisa!
            </h1>

            <p>
                Conectamos pessoas a profissionais da sua região.
                Encontre serviços, conheça profissionais e entre
                em contato de maneira simples e rápida.
            </p>

            <a href="{{ route('servicos.index') }}"
               class="btn-principal">

                Encontrar serviços

            </a>

        </div>

        <div class="hero-decoration">
            🛠️
        </div>

    </section>


    <!-- CATEGORIAS -->

    <section class="categorias">

        <h2 class="titulo">
            Encontre o serviço ideal
        </h2>

        <p class="subtitulo">
            Confira algumas categorias disponíveis na plataforma.
        </p>

        <div class="categoria-grid">

            <div class="categoria-card">
                <div class="icone">⚡</div>

                <h3>Eletricista</h3>

                <p>
                    Instalações, reparos e manutenção elétrica.
                </p>
            </div>


            <div class="categoria-card">
                <div class="icone">🔧</div>

                <h3>Encanador</h3>

                <p>
                    Reparos hidráulicos e manutenção.
                </p>
            </div>


            <div class="categoria-card">
                <div class="icone">🎨</div>

                <h3>Pintor</h3>

                <p>
                    Pintura residencial e comercial.
                </p>
            </div>


            <div class="categoria-card">
                <div class="icone">🧹</div>

                <h3>Limpeza</h3>

                <p>
                    Serviços de limpeza e organização.
                </p>
            </div>


            <div class="categoria-card">
                <div class="icone">💻</div>

                <h3>Tecnologia</h3>

                <p>
                    Assistência técnica e informática.
                </p>
            </div>


            <div class="categoria-card">
                <div class="icone">🏠</div>

                <h3>Construção</h3>

                <p>
                    Reformas e serviços de construção.
                </p>
            </div>

        </div>

    </section>


    <!-- ÁREA DE ACESSO -->

    <section class="acesso">

        <h2>Divulgue seu trabalho!</h2>

        <p>
            Você é profissional autônomo?
            Cadastre seus serviços e encontre novos clientes.
        </p>

        <div class="botoes">

            <a href="{{ route('servicos.create') }}"
               class="btn btn-vermelho">

                Cadastrar serviço

            </a>

            <a href="{{ route('servicos.index') }}"
               class="btn btn-roxo">

                Ver todos os serviços

            </a>

            <a href="{{ route('login') }}"
               class="btn btn-branco">

                Acessar minha conta

            </a>

        </div>

    </section>


    <!-- RODAPÉ -->

    <footer>

        <p>
            © {{ date('Y') }} Conecta Serviços.
            Todos os direitos reservados.
        </p>

        <p>
            Conectando profissionais e clientes.
        </p>

    </footer>

</body>
</html>
