<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hover.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Vetic - Pet shop</title>
</head>
<body>
    <picture class="background-body">
        <img src="./assets/bg.svg" alt="Fundo do background">
    </picture>

    <header>
        <picture class="website-logo">
            <img src="./assets/logo.svg" alt="Logo do site">
        </picture>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Galeria</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </nav>
        <div class="user-account">
            <a href="#">
                Ronaldo Junior
                <picture>
                    <img src="./assets/user-photo.svg" alt="user-account-photo">
                </picture>
            </a>
        </div>
    </header>

    <section class="highlight">
        <picture class="dog">
            <img src="./assets/dog.svg" alt="">
        </picture>

        <div class="highlight-content">
            <div class="content-text">
                <h1>A Melhor Equipe do Mundo com Animais de Estimação</h1>
                <p>A Vetic é a primeira cadeia de clínicas modernas integradas à tecnologia da Índia para atender a todas as necessidades do seu animal de estimação, como bem-estar, consultas, higiene e nutrição.</p>
            </div>

            <button onclick="animation()">
                <img src="./assets/icon-paw.svg" alt="Pata de cachorro">
                Cadastre seu pet
            </button>

            <div class="content-main-subject">
                <article id="animalSignUpButton">
                    <picture>
                        <img src="./assets/icon-cat.svg" alt="gato">
                    </picture>
                    <div class="box"><h5>Animal</h5></div>
                </article>

                <article id="clientSignUpButton">
                    <picture>
                        <img src="./assets/icon-health.svg" alt="saudavel">
                    </picture>
                    <div class="box"><h5>Cliente</h5></div>
                </article>
                
                <article id="showDataButton">
                    <picture>
                        <img src="./assets/icon-shield.svg" alt="saúde">
                    </picture>
                    <div class="box"><h5>Dados</h5></div>
                </article>
            </div>
        </div>

        <picture class="cat">
            <img src="./assets/cat.svg" alt="">
        </picture>
    </section>

    <dialog id="animalSignUpModal">
        <div class="backimage">
            <img src="./assets/backimage-animal.png" alt="">
        </div>

        <div class="insert-data">
            <div class="data-title">
                <h4>Cadastre seu pet</h4>
                <p>Começe adicionando seu animalzinho a sua lista de pets</p>
            </div>

            <form action="./code/insertAnimal.php" method="post" id="animalSignUp">
                <fieldset>
                    <input type="text" id="animalName" name="animalName" placeholder="Nome">
                    <input type="text" id="animalRaca" name="animalRaca" placeholder="Raça">
                    <input type="number" id="animalIdade" name="animalIdade" placeholder="Idade">
                    <div class="select-box">
                        <select name="animalPorte" id="animalPorte">
                            <option value="" disabled selected>Porte</option>
                            <option value="pequeno" id="pequeno">Pequeno</option>
                            <option value="medio" id="medio">Médio</option>
                            <option value="grande" id="grande">Grande</option>
                        </select>
                        <span class="custom-arrow"></span>
                    </div>
                </fieldset>

                <input type="submit" value="Adicionar pet">
            </form>
        </div>
    </dialog>

    <dialog id="clientSignUpModal">
        <div class="insert-data">
            <div class="data-title">
                <h4>Crie uma conta</h4>
                <p>Vamos começar com um desconto de 30% ao criar sua conta!</p>
            </div>

            <form action="./code/insertClient.php" method="post" id="clientSignUp">
                <fieldset>
                    <input type="text" id="clientName" name="clientName" placeholder="Nome" tabindex="1">
                    <input type="email" id="clientEmail" name="clientEmail" placeholder="Email" tabindex="2">
                </fieldset>
                
                <fieldset>
                    <input type="password" id="clientPassword" name="clientPassword" placeholder="Senha" tabindex="3">
                    <i class="bi bi-eye-slash" id="togglePassword" onclick="showPassword()" tabindex="4"></i>
                </fieldset>

                <fieldset>
                    <input type="submit" value="Criar conta" tabindex="5">
                    <button tabindex="6">
                        <img src="./assets/google-logo.svg" alt="google logo">
                        Criar com Google
                    </button>            
                </fieldset>
            </form>

            <p>Já tem uma conta?<strong tabindex="7 " onclick="closeModalClient()"> Não ligo</strong></p>
        </div>

        <picture class="backimage">
            <img src="./assets/backimage-client.png" alt="">
        </picture>    
    </dialog>


    <?php
        include "./code/conect.php";
        $queryAnimal = mysqli_query($sql, "select * from animal");
        $queryClient = mysqli_query($sql, "select * from cliente");
    ?>

    <section class="sign-up-data displayNone" id="sign-up-data">
        <div class="sign-up-title">
            <h5>DADOS</h5>
            <div class="show-sign-up">
                <h2 id="callClient" class="switch-op switch">Cliente</h2>
                <h2 id="callAnimal">Animal</h2>
            </div>
        </div>

        <div class="sign-up-data-container">
            <picture class="dog">
                <img src="./assets/dog1.svg" alt="">
            </picture>
            <div class="sign-up-data-client displayFlex" id="sign-up-data-client">
                <div class="sign-data-content">
                <?php
                    while($row = mysqli_fetch_array($queryClient)){
                        $codigoClient = $row['codigoClient'];
                        $clientName = $row['clientName'];
                        $clientEmail = $row['clientEmail'];
                        $clientSenha = $row['clientPassword'];
                    
                        echo"

                        <article class='data'>
                        <article hidden>
                            <p>$codigoClient</p>
                        </article>
        
                        <hr>    
        
                        <article>
                            $clientName
                        </article>
        
                        <hr>
        
                        <article>
                            $clientEmail
                        </article>

                        <article>
                            $clientSenha
                        </article>
        
                        <div class='buttons'>
                            <a href=''>Editar</a>
                            <a href=''>Excluir</a>
                            <a href=''>Salvar</a>
                        </div>
                    </article>
                            ";
                    }
                ?>              
                </div>
            </div>
    
            <div class="sign-up-data-animal displayNone" id="sign-up-data-animal">
                <div class="sign-data-content">
                    <article class="data">
                        <article>
                            <input type="text" value="">
                        </article>
        
                        <hr>    
        
                        <article>
                            <input type="text" value="">
                        </article>
        
                        <hr>
        
                        <article>
                            <input type="number" value="">
                        </article>
        
                        <hr>
        
                        <article>
                            <input type="text" value="">
                        </article>
        
                        <div class="buttons">
                            <a href="">Editar</a>
                            <a href="">Excluir</a>
                            <a href="">Salvar</a>
                        </div>
                    </article>
                </div>
            </div>
            <picture class="cat">
                <img src="./assets/cat1.svg" alt="">
            </picture>
        </div>
    </section>

    <footer>
        <div class="footer-information">
            <div class="contact">
                <picture class="website-logo">
                    <img src="./assets/logo.svg" alt="Logo do site">
                </picture>
                <p>A Vetic é a primeira cadeia de clínicas modernas integradas à tecnologia da Índia para atender a todas as necessidades do seu animal de estimação, como bem-estar, consultas, higiene e nutrição.</p>
                <div class="contact-reference">
                    <picture class="phone">
                        <img src="./assets/phone.svg" alt="Telefone">
                    </picture>
                    <div class="contact-reference-info">
                        <h5><a href="tel:918929043121">(+91) 8929043121</a></h5>
                        <p>Dúvidas? Ligue-nos 24hrs</p>
                    </div>
                </div>
            </div>
    
            <div class="schedule">
                <h6>Horário de funcionamento</h6>
                <div class="box">
                    <p>Seg - Sex:</p>
                    <p>Sábado:</p>
                    <p>Domingo:</p>
                    <p><span>7hr - 18hr</span></p>
                    <p><span>9hr - 16hr</span></p>
                    <p><span>Fechado</span></p>
                </div>
            </div>
    
            <nav>
                <h6>Links úteis</h6>
                <ul>
                    <li><a href="#"><div class="marker"></div>Home</a></li>
                    <li><a href="#"><div class="marker"></div>Sobre</a></li>
                    <li><a href="#"><div class="marker"></div>Seviços</a></li>
                    <li><a href="#"><div class="marker"></div>Shop</a></li>
                    <li><a href="#"><div class="marker"></div>FAQ</a></li>
                    <li><a href="#"><div class="marker"></div>Galeria</a></li>
                    <li><a href="#"><div class="marker"></div>Delivery</a></li>
                    <li><a href="#"><div class="marker"></div>Ofertas</a></li>
                </ul>
            </nav>
    
            <div class="newsletter">
                <h6>Boletim informativo</h6>
                <div class="box">
                    <p>Seja o primeiro da fila! Receba nossas últimas notícias diretamente na sua caixa de entrada.</p>
                    <div class="send-email">
                        <input type="email" name="sendEmail" id="sendEmail" placeholder="Email">
                        <button onclick="resetInput()">
                            <img src="./assets/arrow-right.svg" alt="Flecha">
                        </button>
                    </div>
                    <div class="social-media">
                        <ul>
                            <li><a href="#"><img src="./assets/icon fb.svg" alt="Facebook" title="Facebook"></a></li>
                            <li><a href="#"><img src="./assets/icon insta.svg" alt="Instagram" title="Instagram"></a></li>
                            <li><a href="#"><img src="./assets/icon twitter.svg" alt="Twitter" title="Twitter"></a></li>
                            <li><a href="#"><img src="./assets/icon whatsapp.svg" alt="Whatsapp" title="Whatsapp"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <p class="footer-copyright">
            Ramesh Velaga &copy; Todos os direitos reservados Copyright 2022    
        </p>
    </footer>
</body>
<script src="./script.js"></script>
</html>