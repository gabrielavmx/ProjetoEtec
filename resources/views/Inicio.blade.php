<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite("resources/css/app.css")
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="imagex/png" href={{ asset('img/logo.png') }}>
    <title>Página Inicial</title>
</head>
<body class="w-full">
    <header class="bg-zinc-200 fixed top-0 left-0 w-full z-50 p-3 flex-1 items-center justify-around">
        <nav class="container relative h-14 flex items-center justify-around">
            <div>
                <a href="{{ url('/home') }}"><img class="max-w-14" src={{ asset('img/logo.png') }}></a>
            </div>
            <div class="hidden absolute top-0 left-0 w-full py-14 bg-zinc-200 border-b border-red-800 md:block md:static md:py-0 md:border-none md:w-auto md:ml-auto" id="nav-menu">
                <ul class="flex items-center justify-around text-center gap-5 md:flex-row menu_mode">
                    <li>
                        <a href="#curso" class="nav__link hover:text-red-800 ease-in duration-200">Cursos</a>
                    </li>
                    <li>
                        <a href="{{ url('/departamentos') }}" class="nav__link hover:text-red-800 ease-in duration-200">Departamentos</a>
                    </li>
                    <li>
                        <a href="{{ url('/oportunidade') }}" class="nav__link hover:text-red-800 ease-in duration-200">Oportunidades</a>
                    </li>
                    <li>
                        <a href="{{ url('/vestibulinho') }}" class="nav__link hover:text-red-800 ease-in duration-200">Vestibulinho</a>
                    </li>
                    <li>
                        <a href="{{ url('/instituicao') }}" class="nav__link hover:text-red-800 ease-in duration-200">Instituição</a>
                    </li>
                    <li>
                        <a href="#contat" class="nav__link hover:text-red-800 ease-in duration-200">Contato</a>
                    </li>
                </ul>
                <div class="absolute top[0.7rem] right-4 text-2xl cursor-pointer md:hidden" id="nav-close">
                <span class="material-symbols-outlined">close</span>
                </div>
            </div>

            <div class="flex items-center gap-5">
                <i class="fa-regular fa-moon cursor-pointer ml-4 text-x1"  id="theme-toggle"></i>
            <div class="md:hidden" id="menu">
                <span class="material-symbols-outlined cursor-pointer ml-4 text-x1">menu</span>
            </div>
            </div>
        </nav>
    </header>
    <main class="w-full">
        <section class="w-full" id="home">
            <div class="bg-[url('../../public/img/fundo.jpg')] w-full h-[52rem] bg-cover">
                <div class="p-20 flex justify-center items-start h-full flex-col sm:max-w-1/3">    
                    <h1 class="text-zinc-200 text-5xl md:min-w-96">ETEC da Zona Leste</h1>
                    <p class="md:w-1/3 md:min-w-96 text-balance text-zinc-200 py-5">A Escola ETEC da Zona Leste é um exemplo notável de excelência na educação.
                    Com um compromisso inabalável com o sucesso dos alunos, a Escola oferece um ambiente de aprendizado enriquecedor,
                    onde a excelência é cultivada em todos os aspectos da educação.</p>
                    <div>
                    <a href="{{ url('/sobrenos') }}" class="btn btn-primary">Nós Conheça</a>
                    <a href="#" class="text-zinc-100 p-4 hover:text-red-800">Cursos</a>
                    </div>
                </div>    
            </div>
        </section>

        <section id="categoria" class="py-10">
            <div class="container flex flex-col gap-5 md:flex-row">
                <!-- Painel 1 -->
                <div class="bg-red-800 flex py-3 rounded-lg overflow-hidden md:flex-1">
                    <div class="basis-1/2 relative">
                        <img src={{ asset('img/prova.svg') }} alt="imgCat" class="absolute w-28 -bottom-4 -left-4 h-28">
                    </div>

                        <div>
                            <div class="mb-2">
                                <h4 class="card__title">Vestibulinho</h4>
                                <p class="text-xs text-zinc-100">Exame que visa selecionar novos estudantes</p>
                            </div>
                            <a href="{{ url('/vestibulinho') }}" class="underline underline-offset-2 text-zinc-100">Saiba mais</a>
                        </div>
                </div>

                <!-- Painel 2 -->
                <div class="bg-red-800 flex py-3 rounded-lg overflow-hidden md:flex-1">
                    <div class="basis-1/2 relative">
                        <img src={{ asset('img/livros.svg') }} alt="imgCat" class="absolute w-28 -bottom-4 -left-4 h-28">
                    </div>

                        <div>
                            <div class="mb-2">
                                <h4 class="card__title">Instituição</h4>
                                <p class="text-xs text-zinc-100">Saiba tudo sobre a ETEC da Zona Leste</p>
                            </div>
                            <a href="{{ url('/instituicao') }}" class="underline underline-offset-2 text-zinc-100">Saiba mais</a>
                        </div>
                </div>

                <!-- Painel 3 -->
                <div class="bg-red-800 flex py-3 rounded-lg overflow-hidden md:flex-1">
                    <div class="basis-1/3 relative">
                        <img src={{ asset('img/lampada.svg') }} alt="imgCat" class="absolute w-28 -bottom-4 -left-4 h-28">
                    </div>

                        <div>
                            <div class="mb-2">
                                <h4 class="card__title">Oportunidades</h4>
                                <p class="text-xs text-zinc-100">Conheça o que espera você</p>
                            </div>
                            <a href="{{ url('/oportunidade') }}" class="underline underline-offset-2 text-zinc-100">Saiba mais</a>
                        </div>
                </div>

            </div>
        </section>

        <section id="sobrenos">
            <div class="container flex flex-col gap-10">
                <div class="flex justify-center">
                    <img src={{ asset('img/etec.jpg') }} alt="imgAbt" class="w-full">
                </div>

                <div class="flex-1">
                    <h2 class="section__title py-5">Destaque na educação</h2>
                    <div class="separator"></div>
                    <p>Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossos cursos técnicos são ministrados por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
                </div>
            </div>
        </section>

        <section id="menu" id="curso">
            <div class="container">
                <div id="curso">
                    <h2 class="section__title py-5">Nossos cursos</h2>
                    <div class="separator"></div>
                    <p>
                        Conheça todos cursos presentes nessa instituição
                    </p>
                    <div class="tabs_wrap">
                        <ul class="flex flex-wrap justify-center gap-3 py-10 sm:grid-cols-2">
                            <li data-tabs="tudo" class="btn bg-red-900 text-zinc-100 active">Todos</li>
                            <li data-tabs="manha" class="btn bg-red-900 text-zinc-100">Manhã</li>
                            <li data-tabs="tarde" class="btn bg-red-900 text-zinc-100">Tarde</li>
                            <li data-tabs="noite" class="btn bg-red-900 text-zinc-100">Noite</li>
                        </ul>
                    </div>
                </div>

                <div >
                    <ul class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 lg:gap-12">
                        <!-- Manhã -->
                        <li class="item_wrap manha tarde noite">
                            <div class="h-56 grid palce-items-center bg-blue-950 rounded-3xl hover:bg-blue-900 ease-linear duration-200 flex items-center justify-center">
                                <img src={{ asset('img/pc.svg') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                            </div>
                            <div class="pt-5">
                                <div class="mb-2">
                                    <h4 class="cardd__title">Desenvolvimento de Sistemas</h4>
                                    <p class="paragraph">O desenvolvimento de sistemas é um processo que envolve a criação de softwares para atender às necessidades das empresas</p>
                                </div>
                            </div>
                        </li>

                        <li class="item_wrap manha">
                            <div class="h-56 grid palce-items-center bg-blue-950 rounded-3xl hover:bg-blue-900 ease-linear duration-200 flex items-center justify-center">
                                <img src={{ asset('img/carta.svg') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                            </div>
                            <div class="pt-5">
                                <div class="mb-2">
                                    <h4 class="cardd__title">Recursos Humanos</h4>
                                    <p class="paragraph"> Conjunto de colaboradores de uma organização. Dessa forma, a base do setor responsável são as funções de recrutamento, seleção, treinamento, remuneração e benefícios aos trabalhadores</p>
                                </div>
                            </div>
                        </li>

                        <li class="item_wrap manha tarde">
                            <div class="h-56 grid palce-items-center bg-blue-950 rounded-3xl hover:bg-blue-900 ease-linear duration-200 flex items-center justify-center">
                                <img src={{ asset('img/homi.svg') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                            </div>
                            <div class="pt-5">
                                <div class="mb-2">
                                    <h4 class="cardd__title">Administração</h4>
                                    <p class="paragraph">Administração é a tomada de decisão sobre recursos disponíveis, trabalhando com e através de pessoas para atingir objetivos</p>
                                </div>
                            </div>
                        </li>

                        <!--Tarde-->
                        <li class="item_wrap tarde">
                            <div class="h-56 grid palce-items-center bg-blue-950 rounded-3xl hover:bg-blue-900 ease-linear duration-200 flex items-center justify-center">
                                <img src={{ asset('img/caixa.svg') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                            </div>
                            <div class="pt-5">
                                <div class="mb-2">
                                    <h4 class="cardd__title">Logistica</h4>
                                    <p class="paragraph">Logística é a área da gestão responsável por planejar, implementar e controlar o fluxo de bens, serviços e informações de uma empresa ou organização.</p>
                                </div>
                            </div>
                        </li>

                        <!--Noite-->
                        <li class="item_wrap noite">
                            <div class="h-56 grid palce-items-center bg-blue-950 rounded-3xl hover:bg-blue-900 ease-linear duration-200 flex items-center justify-center">
                                <img src={{ asset('img/moeda.svg') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                            </div>
                            <div class="pt-5">
                                <div class="mb-2">
                                    <h4 class="cardd__title">Contabilidade</h4>
                                    <p class="paragraph">Área científica teórica e/ou prática que estuda os métodos e técnicas usados para calcular e registrar a movimentação financeira de uma firma, companhia ou empresa.</p>
                                </div>
                            </div>
                        </li>

                        <li class="item_wrap noite">
                            <div class="h-56 grid palce-items-center bg-blue-950 rounded-3xl hover:bg-blue-900 ease-linear duration-200 flex items-center justify-center">
                                <img src={{ asset('img/gavel-solid.svg') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                            </div>
                            <div class="pt-5">
                                <div class="mb-2">
                                    <h4 class="cardd__title">Serviços Juridicos</h4>
                                    <p class="paragraph">Responsável por registrar documentos, compilar relatórios e por fazer a gestão de setores jurídicos em escritórios de advocacia, tribunais ou cartórios.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-zinc-200">
        <section class="footer">
            <div class="container" id="contat">
                <ul class="grid grid-cols-1 items-start gap-5 pb-5 md:grid-cols-3">
                    <li>
                        <div class="space-y-3">
                            <a href="#" class="text-4xl font-oswald uppercase">
                            ETEC da <span class="text-red-800">Zona Leste</span>
                            </a>
                            <p class="text-xs text-justify">
                                A Escola ETEC da Zona Leste é um exemplo notável de excelência na educação.
                            Com um compromisso inabalável com o sucesso dos alunos, a Escola oferece um ambiente de aprendizado enriquecedor,
                            onde a excelência é cultivada em todos os aspectos da educação.
                            </p>
                        </div>
                    </li>

                    <li class="space-y-8">
                        <div class="space-y-2">
                            <h3 class="text-lg uppercase font-oswald">Contato</h3>

                            <p class="flex items-center gap-2 text-xs">
                                <span class="material-symbols-outlined text-lg text-red-800">call</span>
                                +55 (11)XXXXX-XXXX
                            </p>
                        </div>

                        <div class="space-y-2">
                            <h3 class="text-lg uppercase font-oswald">Email</h3>

                            <p class="flex items-center gap-2 text-xs">
                            <span class="material-symbols-outlined text-lg text-red-800">mail</span>
                                etec@etec.com
                            </p>
                        </div>
                    </li>

                    <li class="space-y-8">
                        <div class="space-y-2">
                            <h3 class="text-lg uppercase font-oswald">Endereço</h3>

                            <p class="flex items-center gap-2 text-xs">
                            <span class="material-symbols-outlined text-lg text-red-800">location_on</span>
                                Av. Aguia de Haia, XX
                            </p>
                        </div>

                        <div class="space-y-2">
                            <h3 class="text-lg uppercase font-oswald">Acompanhe</h3>
                            <div class="space-x-3">
                                <i class="fa-brands fa-instagram text-lg cursor-pointer text-red-800 hover:-translate-y-1 ease-in duration-200"></i>
                                <i class="fa-brands fa-facebook text-lg cursor-pointer text-red-800 hover:-translate-y-1 ease-in duration-200"></i>
                                <i class="fa-brands fa-x-twitter text-lg cursor-pointer text-red-800 hover:-translate-y-1 ease-in duration-200"></i>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="flex flex-col items-center border-t border-red-800 py-5 md:flex-row md:justify-between">
                    <p class="paragraph">Etec da Zona Leste</p>
                    <p class="paragraph"> Copyright © 2024 Todos os direitos reservados.</p>
                </div>

            </div>
        </section>
    </footer>

    <a href="#" class="fixed right-4 bg-red-800 shadow-sm inline-block px-4 py-2 rounded-full text-lg z-50 hover:-translate-y-1 ease-in duration-200 " id="scroll-up">
        <span class="material-symbols-outlined text-zinc-100">arrow_upward</span>
    </a>

    @vite(['resources/js/main.js'])
</body>
</html>