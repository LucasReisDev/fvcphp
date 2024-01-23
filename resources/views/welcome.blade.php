<html lang="pt-BR">
<head>
<title>FVC - Consultoria</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="shortcut icon" href="/static/images/logos/logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:20px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>

</head>

<body style="
    background: url('/img/background.png') center/cover no-repeat;
">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft w3-yellow" style="width:100%;font-size:11px">X</a>
  <div class="w3-container w3-padding w3-center" style="margin-bottom: 30px">
    <img src="/img/logos/logo.png" alt="Logo" style="width:50%">
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-yellow">Inicio</a>
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-yellow">Sobre nós</a>
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-yellow">Avaliacões</a>
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-yellow">Nosso e-book</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-yellow w3-margin-right" onclick="w3_open()">☰</a>
  <span>    <img src="/img/logos/logo.png" alt="Logo" style="width:10%">
</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px; ">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>FVC Consultoria</b></h1>
    <hr style="width:600px;border:5px solid black" class="w3-round">
  </div>

<!-- Photo Carousel (Slider) - Display two images at a time with a fade transition -->
<div class="w3-container" id="photo-carousel" style="margin-top:75px; background-color: black	;">

  <div class="w3-content w3-display-container" style="max-width:100%; margin-bottom: 10px; margin-top:25px; margin-bottom:2">
    <div class="w3-row">
      <!-- Slide 1 -->
      <div class="w3-col w3-half w3-animate-right">
        <img class="mySlides" src="/img/slide1.jpg" style="width:100%; height: auto;  margin: 0 auto;">
      </div>
      <!-- Slide 2 -->
      <div class="w3-col w3-half w3-animate-right" >
        <img class="mySlides" src="/img/slide2.jpg" style="width:100%; height: auto;  margin: 0 auto; margin-left:10px">
      </div>
      <!-- Slide 3 -->
      <div class="w3-col w3-half w3-animate-right" >
        <img class="mySlides" src="/img/slide3.jpg" style="width:100%;  height: auto; margin: 0 auto;">
      </div>
      <!-- Slide 4 -->
      <div class="w3-col w3-half w3-animate-right" >
        <img class="mySlides" src="/img/slide4.jpg" style="width:100%; height: auto;  margin: 0 auto;margin-left:10px">
      </div>
	    <!-- Slide 5 -->
      <div class="w3-col w3-half w3-animate-right">
        <img class="mySlides" src="/img/slide2.jpg" style="width:100%; height: auto;  margin: 0 auto;">
      </div>
      <!-- Slide 7-->
      <div class="w3-col w3-half w3-animate-right" >
        <img class="mySlides" src="/img/slide1.jpg" style="width:100%;  height: auto; margin: 0 auto;">
      </div>
      <!-- Slide 8 -->
      <div class="w3-col w3-half w3-animate-right" >
        <img class="mySlides" src="/img/slide8.jpg" style="width:100%; height: 80%;  margin: 0 auto;margin-left:10px">
      </div>
    </div>
    <!-- Next and previous buttons -->
    <a class="w3-btn w3-yellow w3-display-left" onclick="plusDivs(-2)">&#10094;</a>
    <a class="w3-btn w3-yellow w3-display-right" onclick="plusDivs(2)">&#10095;</a>
  </div>
</div>


  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Sobre nós.</b></h1>
    <hr style="width:600px;border:5px solid black" class="w3-round">

    <h2>Apresentando a FVC - Sua Parceira em Conquistas Financeiras</h2>
    <p>Na FVC, estamos comprometidos em ajudá-lo a alcançar a estabilidade financeira e a realização de seus sonhos. Somos uma consultoria de crédito dedicada a fornecer soluções inteligentes e personalizadas para suas necessidades financeiras.</p>

    <p>Nossa equipe experiente e apaixonada trabalha incansavelmente para entender suas metas e desafios financeiros, e, em seguida, cria um plano estratégico sob medida para você. Com anos de experiência no setor, estamos bem equipados para orientá-lo em direção a uma vida financeira mais saudável.</p>

    <h3>O que fazemos:</h3>
    <ul>
        <li>Análise de Crédito: Avaliamos seu histórico de crédito e ajudamos a identificar oportunidades de melhoria.</li>
        <li>Consolidação de Dívidas: Desenvolvemos estratégias para reduzir suas dívidas de forma eficaz e sustentável.</li>
        <li>Negociação com Credores: Trabalhamos com seus credores para obter melhores termos e taxas de juros mais favoráveis.</li>
        <li>Educação Financeira: Fornecemos orientação e recursos para que você possa tomar decisões financeiras mais informadas.</li>
        <li>Planejamento de Crédito: Ajudamos a criar um plano para atingir suas metas de crédito e financeiras.</li>
    </ul>

    <p>Na FVC, acreditamos que a saúde financeira é a chave para uma vida mais tranquila e próspera. Estamos dedicados a capacitá-lo com os conhecimentos e ferramentas necessárias para tomar o controle de suas finanças.</p>

    <p>Conte conosco para oferecer orientação especializada e soluções práticas. Estamos ansiosos para fazer parte de sua jornada rumo ao sucesso financeiro. Junte-se a nós na FVC e comece a transformar seus objetivos em realidade!</p>

    <p>Para saber mais, entre em contato conosco hoje e agende uma consulta gratuita. Seu futuro financeiro começa aqui com a FVC.</p>
  </div>

 <!-- Usuarios -->
<div class="w3-container" id="designers" style="margin-top:75px">
  <h1 class="w3-xxxlarge w3-text-black"><b>Avaliações.</b></h1>
  <hr style="width:600px;border:5px solid black" class="w3-round">

  <p><b>Veja algumas das avaliações de nossos clientes</b>:</p>
</div>

<!-- Avaliacoes -->
<div class="w3-row-padding w3-grayscale w3-black" style="padding-top: 10px;">
  <!-- Video 1 -->
  <div class="w3-col m4 w3-margin-bottom">
    <div class="w3-yellow">
      <video controls width="100%" height="430" style='margin-top:10px;'>
        <source src="/img/video1.mp4" type="video/mp4">
        Seu navegador não suporta a reprodução de vídeo.
      </video>
      <div class="w3-container w3-black">
        <h3>Igor de Uberlandia - MG</h3>
        <p class="w3-opacity">Limpou o nome!</p>
        <p>Adquiri o ebook e me surpreendi com os resultados!</p>
      </div>
    </div>
  </div>

  <!-- Video 2 -->
  <div class="w3-col m4 w3-margin-bottom">
    <div class="w3-yellow" style='margin-bottom:20px';>
      <video controls width="100%" height="430" style='margin-top:10px;'>
        <source src="/img/Video2.mp4" type="video/mp4">
        Seu navegador não suporta a reprodução de vídeo.
      </video>
      <div class="w3-container w3-black">
        <h3>Eduardo de Vitoria - ES</h3>
        <p class="w3-opacity">Aumentou seu crédito!</p>
        <p>Entrei em contato e saí com o dinheiro no bolso! Faça como eu;</p>
      </div>
    </div>
  </div>

  <!-- Video 3 (Added) -->
  <div class="w3-col m4 w3-margin-bottom">
    <div class="w3-yellow" style='margin-bottom:20px';>
      <video controls width="100%" height="430" style='margin-top:10px;'>
        <source src="/img/video3.mp4" type="video/mp4">
        Seu navegador não suporta a reprodução de vídeo.
      </video>
      <div class="w3-container w3-black">
        <h3>Fabiano de Santos - SP</h3>
        <p class="w3-opacity">Conquistou seus objetivos!</p>
        <p>Transforme seus sonhos em realidade conosco.</p>
      </div>
    </div>
  </div>
</div>

<!-- Packages / Pricing Tables -->
<div class="w3-container" id="packages" style="margin-top:75px">
  <h1 class="w3-xxxlarge w3-text-black"><b>Nosso e-book.</b></h1>
  <hr style="width:600px;border:5px solid black" class="w3-round">
  <p>Adquira já nosso e-book e potencialize seu crédito!</p>
  <br/>
</div>

<div class="w3-row-padding">

  <div class="w3-center">
    <ul class="w3-ul w3-dark-orange w3-center">
      <li class="w3-yellow w3-xlarge w3-padding-32">E-BOOK - FVC</li>
      <li class="w3-padding-16 w3-border-orange">Potencialize seu crédito</li>
      <li class="w3-padding-16 w3-border-orange">Educação Financeira</li>
      <li class="w3-padding-16 w3-border-orange">Consolidação de Dívidas</li>
      <li class="w3-padding-16 w3-border-orange">Análise de Crédito</li>
      <li class="w3-padding-16 w3-border-orange">E MUITO MAIS!</li>
      <li class="w3-padding-16 w3-border-orange">
        <h2>De <span style='color: red;text-decoration: line-through;'>R$195,90</span> por <span style='color: green;'>R$29,99</span>.</h2>
        <span class="w3-opacity">PDF será enviado no email.</span>
      </li>
      <li class="w3-yellow w3-padding-24">
        <button class="w3-button w3-orange w3-padding-large w3-hover-black" onclick="redirecionarParaPagamento()">Eu quero!</button>

      </li>
    </ul>
  </div>
</div>
</div>

<!-- Adicione esse modal ao corpo do seu HTML -->
<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Finalize a compra de seu E-book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Adicione campos para o nome, e-mail, CPF, etc. -->
        <input type="text" id="nomeCliente" class="form-control" placeholder="Nome Completo" required>
        <input type="email" id="emailCliente" class="form-control" placeholder="Email" required>
        <input type="text" id="cpfCliente" class="form-control" placeholder="CPF" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary"  onclick="enviarInformacoesCliente()">Continuar para o pagamento</button>
      </div>
    </div>
  </div>
</div>
<!-- W3.CSS Container -->
<div class="w3-black w3-container w3-padding-32" style="margin-top:75px;padding-right:58px; background-color:black"><p class="w3-right">Desenvolvido por 2L TECH</p></div>

<script>
function redirecionarParaPagamento() {
    $('#modalCliente').modal('show');
}

function enviarInformacoesCliente() {
    const nome = $('#nomeCliente').val();
    const email = $('#emailCliente').val();
    const cpf = $('#cpfCliente').val();

    const csrfToken = $('meta[name="csrf-token"]').attr('content');

    fetch('/cadastro', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken,
        },
        body: JSON.stringify({ nome: nome, email: email, cpf: cpf })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erro ao enviar dados do cliente');
        }

        const locationHeader = response.headers.get('Location');
        if (locationHeader) {
            // Redirecionar manualmente, pois a resposta não aciona o redirecionamento automático do Fetch API
            window.location.href = locationHeader;
        } else {
            return response.json();
        }
    })
    .then(data => {
        console.log('Dados do cliente recebidos com sucesso:', data);
        // Adicione aqui qualquer lógica adicional que você precise após o sucesso
    })
    .catch(error => {
        console.error('Erro ao enviar dados do cliente:', error);
    });
}

// Script to open and close sidebarlucasvo
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = x.length }
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex - 1].style.display = "block";
  if (x[slideIndex]) {
    x[slideIndex].style.display = "block";
  }
}

// Automatic slideshow
var slideInterval = 6000; // Change image every 6 seconds
var slideTimer;

function autoSlide() {
  clearTimeout(slideTimer);
  slideTimer = setTimeout(function () { plusDivs(2); autoSlide(); }, slideInterval);
}

autoSlide();




</script>

</body>
</html>

