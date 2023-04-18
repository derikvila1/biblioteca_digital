@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Poppins:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet">

  <title>Biblioteca Virtual do Amazonas - Home </title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="css/css-home.css">
  <link rel="stylesheet" type="text/css" href="css/css-footer.css">
</head>

<body>

  <!-- Sidebar Menu -->
  <!-- <div class="ui vertical sidebar menu">
    <a href="{{route('home')}}" class="item">Home</a>
    <a href="{{route('sobre')}}" class="item">Sobre</a>
    <a href="{{route('acervos')}}" class="item">Acervo Digital</a>
    <a href="{{route('tematica')}}" class="item">Área Temática</a>
    <a href="{{route('revista')}}" class="item">Revista</a>
    <a href="{{route('servicos')}}" class="item">Serviços</a>
    <a href="{{route('login')}}" class="item">Login</a>
  </div> -->


  <div class="pusher">
    <div class="ui vertical masthead aligned segment">


      <div class="ui text container">
        <h1 class="ui header" id="title-1-home">Bem-vindo a</h1>
        <h1 class="ui header" id="title-2-home" style="margin-top: 0;">Biblioteca Virtual da Amazônia</h1>
        <br>
        <div class="ui large icon input">
          <input type="text" placeholder="Digite aqui o título da sua pesquisa">
          <i class="search icon"></i>
        </div>
      </div>
      <br><br>

      <div class="section-acervos">
        <div class="div-textos">
          <h2 id="title-acervos"> Novidades nos acervos</h2>
          <p id="subtitulo-secao">Algum texto curto descrevendo que aqui se encontram os ultimos titulos</p>
        </div>
        <br>
        <div class="cards-content-line">
          <div class="ui link card" id="card-tema">
            <div class="content">
            </div>
          </div>

          <div class="ui link card" id="card-tema">
            <div class="content">

            </div>
          </div>

          <div class="ui link card" id="card-tema">
            <div class="content">

            </div>
          </div>

          <div class="ui link card" id="card-tema">
            <div class="content">

            </div>
          </div>

        </div>
        <br>
        <div class="div-btn-ver-mais"><button class="btn-ver-mais">Ver mais</button></div>
      </div>
      <br>
      <div class="bibliotecas-publicas-section">
        <br>
        <div class="div-textos">
          <h2 id="title-bibliotecas">Bibliotecas públicas</h2>
          <p id="subtitulo-secao">Algum texto curto descrevendo que aqui se encontram as bibliotecas</p>
        </div>
        <br>
        <div class="cards-content-line">
          <div class="ui link card" id="card-tema">
            <div class="content">


            </div>
          </div>

          <div class="ui link card" id="card-tema">
            <div class="content">

            </div>
          </div>

          <div class="ui link card" id="card-tema">
            <div class="content">

            </div>
          </div>

          <div class="ui link card" id="card-tema">
            <div class="content">

            </div>
          </div>



        </div>

        <div class="cards-content-line">
          <div class="ui link card" id="card-tema">
            <div class="content">

            </div>
          </div>

          <div class="ui link card" id="card-tema">
            <div class="content">


            </div>
          </div>

          <div class="ui link card" id="card-tema">
            <div class="content">

            </div>
          </div>

          <div class="ui link card" id="card-tema">
            <div class="content">


            </div>
          </div>



        </div>
        <br>
        <div class="div-btn-ver-mais"><button class="btn-ver-mais">Ver mais</button></div>
        <br>
      </div>

      <div class="conheca-div">
        <div class="div-textos">


        </div>
        <br>
        <div class="card-horizontal-unico">
          <h1 class="titulo-card-unico">Conheça o Amazonas</h1>
          <p>Descriçao breve do que acontece se clicar neste card e pra onde ele vai direcionar</p>

        </div>
      </div>

      <div class="exposicoes-div">
        <br>
        <div class="div-textos">
          <h2 id="title-acervos">Exposições</h2>
          <p id="subtitulo-secao">Algum texto curto descrevendo que aqui se encontram as bibliotecas</p>
        </div>
        <div class="cards-content-line">
          <div class="ui link card" id="card-tema">
            <div class="content">

              <div id="imagem-circle">
                <img id="imagem-tema">
              </div>
              <div class="header" style="text-align: center;"></div>
              <!-- <div class="meta" style="text-align: center;">
                <span class="category">Animals</span>
              </div>
              <div class="description">
                <p></p>
              </div> -->
              <br>
            </div>
          </div>

          <div class="ui link card" id="card-tema">
            <div class="content">

              <div id="imagem-circle">
                <img id="imagem-tema">
              </div>
              <div class="header" style="text-align: center;"></div>
              <!-- <div class="meta" style="text-align: center;">
                <span class="category">Animals</span>
              </div>
              <div class="description">
                <p></p>
              </div> -->
              <br>
            </div>
          </div>

          <div class="ui link card" id="card-tema">
            <div class="content">

              <div id="imagem-circle">
                <img id="imagem-tema">
              </div>
              <div class="header" style="text-align: center;"></div>
              <!-- <div class="meta" style="text-align: center;">
                <span class="category">Animals</span>
              </div>
              <div class="description">
                <p></p>
              </div> -->
              <br>
            </div>
          </div>

          <div class="ui link card" id="card-tema">
            <div class="content">

              <div id="imagem-circle">
                <img id="imagem-tema">
              </div>
              <div class="header" style="text-align: center;"></div>
              <!-- <div class="meta" style="text-align: center;">
                <span class="category">Animals</span>
              </div>
              <div class="description">
                <p></p>
              </div> -->
              <br>
            </div>
          </div>



        </div>
        <br>
        <div class="div-btn-ver-mais"><button class="btn-ver-mais">Ver mais</button></div>
      </div>



      <div class="bibliotecas-mundo-div">
        <br>
        <div class="div-textos">
          <h2 id="title-acervos">Bibliotecas pelo mundo</h2>
          <p id="subtitulo-secao">Algum texto curto descrevendo que aqui se encontram as bibliotecas</p>
        </div>
        <br>
        <div class="cards-content-line">
          <div class="ui link card" id="card-tema">
            <div class="content">

              <div id="imagem-circle">
                <img id="imagem-tema">
              </div>
              <div class="header" style="text-align: center;"></div>
              <!-- <div class="meta" style="text-align: center;">
                <span class="category">Animals</span>
              </div>
              <div class="description">
                <p></p>
              </div> -->
              <br>
            </div>
          </div>

          <div class="ui link card" id="card-tema">
            <div class="content">

              <div id="imagem-circle">
                <img id="imagem-tema">
              </div>
              <div class="header" style="text-align: center;"></div>
              <!-- <div class="meta" style="text-align: center;">
                <span class="category">Animals</span>
              </div>
              <div class="description">
                <p></p>
              </div> -->
              <br>
            </div>
          </div>

          <div class="ui link card" id="card-tema">
            <div class="content">

              <div id="imagem-circle">
                <img id="imagem-tema">
              </div>
              <div class="header" style="text-align: center;"></div>
              <!-- <div class="meta" style="text-align: center;">
                <span class="category">Animals</span>
              </div>
              <div class="description">
                <p></p>
              </div> -->
              <br>
            </div>
          </div>

          <div class="ui link card" id="card-tema">
            <div class="content">

              <div id="imagem-circle">
                <img id="imagem-tema">
              </div>
              <div class="header" style="text-align: center;"></div>
              <!-- <div class="meta" style="text-align: center;">
                <span class="category">Animals</span>
              </div>
              <div class="description">
                <p></p>
              </div> -->
              <br>
            </div>
          </div>



        </div>
        <br>
        <div class="div-btn-ver-mais"><button class="btn-ver-mais">Ver mais</button></div>
      </div>

      <div class="conheca-div">

        <div class="card-horizontal-unico">
          <h1 class="titulo-card-unico">Conheça o Amazonas</h1>
          <p>Descriçao breve do que acontece se clicar neste card e pra onde ele vai direcionar</p>

        </div>
      </div>

    </div>

    <div class="ui inverted vertical footer segment">
      <div class="ui container">
        <div class="ui stackable inverted divided equal height stackable grid">
          <div class="seven wide column">
            <h4 class="ui inverted header">Endereço</h4>
            <p class="desc-footer">Centro de Documentação e Memória da Amazõnia - CDMAM<br> Av. Silves,
              222,
              Distrito Industrial I, Manaus- Am, Centro Cultural dos Povos da Amazônia</p>
          </div>
          <div class="four wide column">
            <h4 class="ui inverted header">Contato e Redes Sociais</h4>
            <div class="ui inverted link list">
              <a style="float: left; padding-right: 5px;">Fone: </a> <a class="item" href="#" id="sample"
                onclick="CopyToClipboard('sample');return false;"> (92) 3090-6804</a>
              <a style="float: left; padding-right: 5px;">Email: </a><a class="item" href="#" id="sample"
                onclick="CopyToClipboard('sample');return false;">acervodigitalsec@gmail.com</a>
              <div>
                <div class="media-icons"><img src="images/linkedin.png" width="20px"></div>
                <div class="media-icons"><img src="images/inst.png" width="20px"></div>
                <div class="media-icons"><img src="images/pinterest.png" width="20px"></div>
              </div>
            </div>
          </div>
          <div class="three wide column">
            <h4 class="ui inverted header">Apoio e Parceiros</h4>
            <div class="ui inverted link list">
              <a class="item">Rede Norte da UFAM</a>
              <a class="item">Departamento de Arquivologia da UFAM</a>

            </div>
          </div>

        </div>
      </div>
      <br> <br>
      <div class="foot-2">
        <p>Secretaria de Cultura e Economia Criativa</p>
      </div>
      <div class="foot-2">
        <p><b>Desenvolvimento:</b> Inovação e Tecnologia Audiovisual</p>
      </div>
    </div>
  </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script>
  $(document)
    .ready(function () {
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item');
    });
</script>

</html>
@endsection
