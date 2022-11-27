<?php
    include "conect.php";
    $codigoAnimal = $_GET["codigoAnimal"];
    $query = mysqli_query($sql, "select * from animal where codigoAnimal = $codigoAnimal");

    $row = mysqli_fetch_array($query);
?>

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
    <link rel="stylesheet" href="../edit.css">
    <link rel="stylesheet" href="../hover.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Vetic - Pet shop</title>
</head>
<body onload="animalSignUpModal.showModal()">
    <picture class="background-body">
        <img src="../assets/bg.svg" alt="Fundo do background">
    </picture>

    <header>
        <picture class="website-logo">
            <img src="../assets/logo.svg" alt="Logo do site">
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
                    <img src="../assets/user-photo.svg" alt="user-account-photo">
                </picture>
            </a>
        </div>
    </header>

    <section class="highlight">
        <picture class="dog">
            <img src="../assets/dog.svg" alt="">
        </picture>

        <div class="highlight-content">
            <div class="content-text">
                <h1>A Melhor Equipe do Mundo com Animais de Estimação</h1>
                <p>A Vetic é a primeira cadeia de clínicas modernas integradas à tecnologia da Índia para atender a todas as necessidades do seu animal de estimação, como bem-estar, consultas, higiene e nutrição.</p>
            </div>

            <button onclick="animation()">
                <img src="../assets/icon-paw.svg" alt="Pata de cachorro">
                Cadastre seu pet
            </button>

            <div class="content-main-subject">
                <article id="animalSignUpButton">
                    <picture>
                        <img src="../assets/icon-cat.svg" alt="gato">
                    </picture>
                    <div class="box"><h5>Animal</h5></div>
                </article>

                <article id="clientSignUpButton">
                    <picture>
                        <img src="../assets/icon-health.svg" alt="saudavel">
                    </picture>
                    <div class="box"><h5>Cliente</h5></div>
                </article>
                
                <article id="showDataButton">
                    <picture>
                        <img src="../assets/icon-shield.svg" alt="saúde">
                    </picture>
                    <div class="box"><h5>Dados</h5></div>
                </article>
            </div>
        </div>

        <picture class="cat">
            <img src="../assets/cat.svg" alt="">
        </picture>
    </section>

    <dialog id="animalSignUpModal" class="displayFlex">
        <div class="backimage">
            <img src="../assets/backimage-animal.png" alt="">
        </div>

        <div class="insert-data">
            <div class="data-title">
                <h4>Editar animal</h4>
                <p>Querendo editar algum dado? sinta-se livre para alterar oque quiser!</p>
            </div>

            <form action="../code/saveAnimal.php" method="post" id="animalSignUp">
                <fieldset>
                    <input type="hidden" name="codigoAnimal" value="<?php echo $row['codigoAnimal'];?>" required>
                    <input type="text" id="animalName" name="animalName" placeholder="Nome" value="<?php echo $row['animalName'];?>" required>
                    <input type="text" id="animalRaca" name="animalRaca" placeholder="Raça" value="<?php echo $row['animalRaca'];?>" required>
                    <input type="number" id="animalIdade" name="animalIdade" placeholder="Idade" value="<?php echo $row['animalIdade'];?>" required>
                    <div class="select-box">
                        <select name="animalPorte" id="animalPorte" required>
                            <option disabled selected><?php echo $row['animalPorte'];?></option>
                            <option value="Pequeno" id="pequeno">Pequeno</option>
                            <option value="Médio" id="medio">Médio</option>
                            <option value="Grande" id="grande">Grande</option>
                        </select>
                        <span class="custom-arrow"></span>
                    </div>
                </fieldset>

                <input type="submit" value="Salvar alterações">
            </form>
        </div>
    </dialog>


    <footer>
        <div class="footer-information">
            <div class="contact">
                <picture class="website-logo">
                    <img src="../assets/logo.svg" alt="Logo do site">
                </picture>
                <p>A Vetic é a primeira cadeia de clínicas modernas integradas à tecnologia da Índia para atender a todas as necessidades do seu animal de estimação, como bem-estar, consultas, higiene e nutrição.</p>
                <div class="contact-reference">
                    <picture class="phone">
                        <img src="../assets/phone.svg" alt="Telefone">
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
                            <img src="../assets/arrow-right.svg" alt="Flecha">
                        </button>
                    </div>
                    <div class="social-media">
                        <ul>
                            <li><a href="#"><img src="../assets/icon fb.svg" alt="Facebook" title="Facebook"></a></li>
                            <li><a href="#"><img src="../assets/icon insta.svg" alt="Instagram" title="Instagram"></a></li>
                            <li><a href="#"><img src="../assets/icon twitter.svg" alt="Twitter" title="Twitter"></a></li>
                            <li><a href="#"><img src="../assets/icon whatsapp.svg" alt="Whatsapp" title="Whatsapp"></a></li>
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
<script src="../edit.js"></script>
</html>