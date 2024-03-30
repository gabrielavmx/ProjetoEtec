<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="imagex/png" href={{ asset('img/logo.png') }}>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite("resources/css/app.css")
    @vite(['resources/js/main.js'])
    <title>Instituição</title>
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
                        <a href="#" class="nav__link hover:text-red-800 ease-in duration-200">Cursos</a>
                    </li>
                    <li>
                        <a href="{{ url('/departamentos') }}" class="nav__link hover:text-red-800 ease-in duration-200">Departamentos</a>
                    </li>
                    <li>
                        <a href="#" class="nav__link hover:text-red-800 ease-in duration-200">Oportunidades</a>
                    </li>
                    <li>
                        <a href="{{ url('/vestibulinho') }}" class="nav__link hover:text-red-800 ease-in duration-200">Vestibulinho</a>
                    </li>
                    <li>
                        <a href="{{ url('/instituicao') }}" class="nav__link hover:text-red-800 ease-in duration-200">Instituição</a>
                    </li>
                    <li>
                        <a href="#" class="nav__link hover:text-red-800 ease-in duration-200">Contato</a>
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
            <div class="bg-[url('../../public/img/int.png')] w-full h-[30rem] bg-cover bg-no-repeat">
                <div class="p-20 flex justify-center items-start h-full flex-col sm:max-w-1/3 border border-b-gray-700">    
                    <h1 class="text-zinc-900 text-5xl md:min-w-96 dark:text-zinc-100">Departamentos</h1>
                    <p class="md:w-1/3 md:min-w-96 text-balance text-zinc-900 dark:text-zinc-100 py-5">APM (Associação de Pais e Mães), Cordenação de curso e Direção</p>
                </div>    
            </div>
        </section>

        <section id="sobrenos">
            <div class="container flex flex-col gap-10">
                <div class="flex-1">
                    <h2 class="section__title py-5">Como funcionamos</h2>
                    <div class="separator"></div>
                    <p>Lorem ipsum dolor sit amet. Est exercitationem aliquam et asperiores autem et velit nostrum ut galisum eveniet et rerum quia id rerum corrupti. Et possimus omnis et veritatis quia quo eveniet rerum quo libero aspernatur est reiciendis voluptates ab rerum recusandae. Nam provident voluptatem quo voluptate obcaecati id architecto accusamus id temporibus reiciendis id quia consequatur. Et dolores accusantium non magni autem ut ipsam eius ut internos laborum est suscipit quaerat.

                        Est omnis aliquam sit sequi accusamus nam tenetur commodi hic libero magni qui aperiam reprehenderit et aperiam delectus. A libero totam est enim beatae ut minima ducimus ut temporibus officiis non velit atque est nihil voluptates. Ut veniam sapiente est reprehenderit maiores id molestias provident et ipsam ratione in dolore quos.
                        
                        Et fugit dicta At incidunt quam sit ducimus totam. Et nesciunt quia sit facilis nihil est eligendi ipsa est cupiditate ratione. Aut voluptatum officia aut dolores ipsa rem minima ducimus est quasi galisum ut minus ullam ut tenetur dolorem sed reiciendis voluptatibus. Ut quia consequatur aut doloribus illo 33 repellendus consequatur et vitae quod eos quia ullam aut facilis delectus.</p>
                </div>

                <div class="flex justify-center">
                    <img src={{ asset('img/pais.jpg') }} alt="imgAbt" class="w-full">
                </div>
            

            <div class="flex-1">
                <h2 class="section__title py-5">Estrutura</h2>
                <div class="separator"></div>
                <p>Lorem ipsum dolor sit amet. Est exercitationem aliquam et asperiores autem et velit nostrum ut galisum eveniet et rerum quia id rerum corrupti. Et possimus omnis et veritatis quia quo eveniet rerum quo libero aspernatur est reiciendis voluptates ab rerum recusandae. Nam provident voluptatem quo voluptate obcaecati id architecto accusamus id temporibus reiciendis id quia consequatur. Et dolores accusantium non magni autem ut ipsam eius ut internos laborum est suscipit quaerat.

                    Est omnis aliquam sit sequi accusamus nam tenetur commodi hic libero magni qui aperiam reprehenderit et aperiam delectus. A libero totam est enim beatae ut minima ducimus ut temporibus officiis non velit atque est nihil voluptates. Ut veniam sapiente est reprehenderit maiores id molestias provident et ipsam ratione in dolore quos.
                    
                    Et fugit dicta At incidunt quam sit ducimus totam. Et nesciunt quia sit facilis nihil est eligendi ipsa est cupiditate ratione. Aut voluptatum officia aut dolores ipsa rem minima ducimus est quasi galisum ut minus ullam ut tenetur dolorem sed reiciendis voluptatibus. Ut quia consequatur aut doloribus illo 33 repellendus consequatur et vitae quod eos quia ullam aut facilis delectus.</p>
            </div>
        </div>
        </section>

        <footer class="bg-zinc-200">
            <section class="footer">
                <div class="container">
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
</body>
</html>