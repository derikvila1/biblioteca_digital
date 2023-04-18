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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Poppins:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet">

  <title>Biblioteca Virtual do Amazonas - Serviços </title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="css/css-servicos.css">
  <link rel="stylesheet" type="text/css" href="css/css-footer.css">

</head>

<body>

  <!-- Sidebar Menu -->
  <!-- <div class="ui vertical sidebar menu">
    <a href="home-biblioteca.html" class="item">Home</a>
    <a href="sobre.html" class="item">Sobre</a>
    <a href="acervos-digitais.html" class="item">Acervo Digital</a>
    <a href="area-tematica.html" class="item">Área Temática</a>
    <a href="revista-institucional.html" class="item">Revista</a>
    <a href="servicos.html" class="item">Serviços</a>
    <a href="entrar.html" class="item">Login</a>
  </div> -->


  <div class="pusher">
    <div class="ui vertical masthead aligned segment">

      <!-- <div class="ui container">
        <div class="ui large top fixed secondary pointing menu">
          <a class="toc item">
            <i class="sidebar icon"></i>
          </a>
          <img src="images/logo-bibli.png" style="padding-left: 20px; margin-top: 10px;" height="70px"></img>
          <div class="right item">
            <a href="home-biblioteca.html" class="item">Home</a>
            <a href="sobre.html" class="item">Sobre</a>
            <a href="acervos-digitais.html" class="item">Acervo Digital</a>
            <a href="area-tematica.html" class="item">Área Temática</a>
            <a href="revista-institucional.html" class="item">Revista</a>
            <a href="servicos.html" class="item">Serviços</a>
            <a href="entrar.html" class="item">Login</a>
          </div>

        </div>

      </div> -->

      <main>
        <br>
        <h1 id="title-1">Serviços</h1>
       

        <input id="tab1" type="radio" class="radio-input" name="tabs" checked>
        <label for="tab1" class="label-tab">Agendamento para Microfilme</label>

        <input id="tab2" type="radio" class="radio-input" name="tabs">
        <label for="tab2" class="label-tab">Solicitação de Pesquisa</label>

        <input id="tab3" type="radio" class="radio-input" name="tabs">
        <label for="tab3" class="label-tab">Solicitação de Visita Técnica</label>

        <input id="tab4" type="radio" class="radio-input" name="tabs">
        <label for="tab4" class="label-tab">Pedido de Digitalização</label>

        <section id="content1">


          <div class="body-form">
         
    
            <form method="post" id="formVisita" action="{{ route('visita.store') }}" class="ui form segment"> 
            @csrf  
            
            <h1 id="title-1">Agendamento para Microfilme</h1>
              <br>
              <div class="two fields">
                <!-- <div class="field">
                  <label>Nome</label>
                  <div class="ui transparent input">
                    <input name="name" type="text">
                  </div>
                </div> -->

                <div class="field">
                  <label>Instituição</label>
                  <div class="ui transparent input">
                    <input placeholder="Instituição" name="institution" id="institution" type="text" require>
                  </div>
                </div>

                <div class="field">
                  <label>Profissão</label>
                  <div class="ui transparent input">
                    <input name="profession" id="profession" type="text" require>
                  </div>
                </div>

              </div>
              <div class="three fields">

                <div class="field">
                  <label>Estado</label>
                  <select class="ui dropdown" name="state" id="state" require>
                    <option> Acre - AC</option>
                    <option> Alagoas - AL</option>
                    <option> Amapá - AP</option>
                    <option> Amazonas - AM</option>
                    <option> Bahia - BA</option>
                    <option> Ceará - CE</option>
                    <option> Espírito Santo - ES</option>
                    <option> Goiás - GO</option>
                    <option> Maranhão - MA</option>
                    <option> Mato Grosso - MT</option>
                    <option> Mato Grosso do Sul - MS</option>
                    <option> Minas Gerais - MG</option>
                    <option> Pará - PA</option>
                    <option> Paraíba - PB</option>
                    <option> Paraná - PR</option>

                    <option> Pernambuco - PE</option>
                    <option> Piauí - PI</option>
                    <option> Rio de Janeiro - RJ</option>
                    <option> Rio Grande do Norte - RN</option>
                    <option> Rio Grande do Sul - RS</option>
                    <option> Rondônia - RO</option>
                    <option> Roraima - RR</option>
                    <option> Santa Catarina - SC</option>
                    <option> São Paulo - SP</option>
                    <option> Sergipe - SE</option>
                    <option> Tocantins - TO</option>
                    <option> Distrito Federal - DF</option>

                  </select>
                </div>

                <div class="field">
                  <label>Cidade</label>
                  <div class="ui transparent input">
                    <input name="city" id="city" type="text">
                  </div>
                  
                </div>

                <div class="field">
                  <label>Telefone</label>
                  <div class="ui transparent input">
                    <input name="cellphone" id="cellphone" type="text" require>
                  </div>
                  <small id="description-pequena" class="form-text text-muted"
                    style="font-family: Montserrat, sans-serif">Inserir DDD. Ex: 92992007890</small>
                </div>


              </div>


              <div class="two fields">
                <!-- <div class="field">
                  <label>Email</label>
                  <div class="ui transparent input">
                    <input name="name" type="text">
                  </div>
                </div> -->

                <div class="field">
                  <label>Data</label>
                  <div class="ui transparent input">
                  <input id="datePicker"  type="date" name="day" id="day" required>
                  </div>
                </div>
                
                <div class="field">
                  <label>Horário</label>
                  <select class="ui dropdown" name="hour" id="hour" require>

                    <option> 12:00</option>
                    <option> 15:00</option>
                    <option> 16:00</option>
                    <option> 17:00</option>

                  </select>


                </div>
              </div>


              <div class="field">
                <label>O que você está pesquisando?</label>
                <textarea class="form-control" id="obs" name="obs" rows="4"></textarea>
                <small id="description-pequena" class="form-text text-muted"
                  style="font-family: Montserrat, sans-serif">Inserir neste campo o que você procura. Ex: "Estou
                  pesquisando sobre..."</small>
              </div>

              <p>Salientamos, que a disponibilização (gratuita) deste acervo, tem por objetivo preservar a memória e
                difundir a cultura do Estado do Amazonas. E que, o uso destes documentos é apenas para uso privado
                (pessoal), sendo vetada a sua venda, reprodução ou cópia não autorizada. (Lei de Direitos Autorais - Lei
                9.610/98). Lembramos que este material pertence aos acervos das bibliotecas que compõem a rede de
                bibliotecas públicas do Estado do Amazonas. Pedimos apenas, que caso venha a utilizar estes documentos
                de
                forma acadêmica ou científica, que seja feita a menção e a referência que o presente material foi cedido
                pelo: Governo do Estado do Amazonas. Secretaria de Cultura e Economia Criativa. Centro de Documentação e
                Memória dos Povos da Amazônia. (hierarquicamente)

              </p>

              <!-- <div class="inline field">
                <div class="ui checkbox">
                  <input type="checkbox" name="terms">
                  <label>Concordo com os termos e condições</label>
                </div>
              </div>-->

              <button type="submit" class="ui primarybutton">Finalizar Agendamento</button>
              <div class="ui error message"></div>
            </form>
            
            <br><br>
          </div>
        </section>

        <section id="content2">
          <div class="body-form">

            <form method="post" id="formVisita" action="{{ route('visita.store') }}" class="ui form segment">
              @csrf  
            <h1 id="title-1">Solicitação de Pesquisa</h1>
              <br>
              <div class="two fields">
                <!-- <div class="field">
                  <label>Nome</label>
                  <div class="ui transparent input">
                    <input name="name" type="text">
                  </div>
                </div> -->

                <div class="field">
                  <label>Instituição</label>
                  <div class="ui transparent input">
                    <input placeholder="Instituiçao" name="institution" id="institution" type="text">
                  </div>
                </div>

                <div class="field">
                  <label>Profissão</label>
                  <div class="ui transparent input">
                    <input name="profession" id="profession" type="text">
                  </div>
                </div>

              </div>
              <div class="three fields">

                <div class="field">
                  <label>Estado</label>
                  <select class="ui dropdown" name="gender">
                    <option> Acre - AC</option>
                    <option> Alagoas - AL</option>
                    <option> Amapá - AP</option>
                    <option> Amazonas - AM</option>
                    <option> Bahia - BA</option>
                    <option> Ceará - CE</option>
                    <option> Espírito Santo - ES</option>
                    <option> Goiás - GO</option>
                    <option> Maranhão - MA</option>
                    <option> Mato Grosso - MT</option>
                    <option> Mato Grosso do Sul - MS</option>
                    <option> Minas Gerais - MG</option>
                    <option> Pará - PA</option>
                    <option> Paraíba - PB</option>
                    <option> Paraná - PR</option>

                    <option> Pernambuco - PE</option>
                    <option> Piauí - PI</option>
                    <option> Rio de Janeiro - RJ</option>
                    <option> Rio Grande do Norte - RN</option>
                    <option> Rio Grande do Sul - RS</option>
                    <option> Rondônia - RO</option>
                    <option> Roraima - RR</option>
                    <option> Santa Catarina - SC</option>
                    <option> São Paulo - SP</option>
                    <option> Sergipe - SE</option>
                    <option> Tocantins - TO</option>
                    <option> Distrito Federal - DF</option>

                  </select>
                </div>

                <div class="field">
                  <label>Cidade</label>
                  <div class="ui transparent input">
                    <input name="city" id="city" type="text">
                  </div>
                  
                </div>

                <div class="field">
                  <label>Telefone</label>
                  <div class="ui transparent input">
                    <input name="cellphone" id="cellphone" type="text" require>
                  </div>
                  <small id="description-pequena" class="form-text text-muted"
                    style="font-family: Montserrat, sans-serif">Inserir DDD. Ex: 92992007890</small>
                </div>


              </div>
              <div class="two fields">
                <!-- <div class="field">
                  <label>Email</label>
                  <div class="ui transparent input">
                    <input name="name" type="text">
                  </div>
                </div> -->

                <div class="field">
                  <label>Data</label>
                  <div class="ui transparent input">
                  <input id="datePicker"  type="date" name="day" id="day" required>
                  </div>
                </div>
                
                <div class="field">
                  <label>Horário</label>
                  <select class="ui dropdown" name="hour" id="hour" require>

                    <option> 12:00</option>
                    <option> 15:00</option>
                    <option> 16:00</option>
                    <option> 17:00</option>

                  </select>


                </div>
              </div>


              <div class="two fields">
                <div class="field">
                  <label>Assunto</label>
                  <div class="ui transparent input">
                    <input name="name" type="text">
                  </div>
                  <small id="description-pequena" class="form-text text-muted"
                    style="font-family: Montserrat, sans-serif">Inserir neste campo o assunto da sua pesquisa. Ex: "O
                    assunto da pesquisa é..."</small>
                </div>

                <div class="radios-pesquisa">
                  <input type="radio" class="radio-categoria" id="fotografias" name="categoria" value="fotografias">
                  <label for="fotografias">Fotografias</label>

                  <input type="radio" class="radio-categoria" id="jornais" name="categoria" value="jornais">
                  <label for="jornais">Jornais</label>

                  <input type="radio" class="radio-categoria" id="livros" name="categoria" value="livros">
                  <label for="livros">Livros</label>

                  <input type="radio" class="radio-categoria" id="microfilmes" name="categoria" value="microfilmes">
                  <label for="microfilmes">Microfilmes</label>

                  <input type="radio" class="radio-categoria" id="revista" name="categoria" value="revista">
                  <label for="revista">Revista</label>
                </div>
              </div>

              <div class="field">
                <label>Finalidade</label>
                <textarea class="form-control" id="obs" name="obs" rows="4"></textarea>


                <small id="description-pequena" class="form-text text-muted"
                  style="font-family: Montserrat, sans-serif">Inserir neste campo a finalidade da sua pesquisa. Ex:
                  "Esta
                  pesquisa é para o meu mestrado em..."</small>
              </div>





              <p>Salientamos, que a disponibilização (gratuita) deste acervo, tem por objetivo preservar a memória e
                difundir a cultura do Estado do Amazonas. E que, o uso destes documentos é apenas para uso privado
                (pessoal), sendo vetada a sua venda, reprodução ou cópia não autorizada. (Lei de Direitos Autorais - Lei
                9.610/98). Lembramos que este material pertence aos acervos das bibliotecas que compõem a rede de
                bibliotecas públicas do Estado do Amazonas. Pedimos apenas, que caso venha a utilizar estes documentos
                de
                forma acadêmica ou científica, que seja feita a menção e a referência que o presente material foi cedido
                pelo: Governo do Estado do Amazonas. Secretaria de Cultura e Economia Criativa. Centro de Documentação e
                Memória dos Povos da Amazônia. (hierarquicamente)

              </p>

              <!-- <div class="inline field">
                <div class="ui checkbox">
                  <input type="checkbox" name="terms">
                  <label>Concordo com os termos e condições</label>
                </div>
              </div>-->

              <div class="ui primarybutton">Finalizar Solicitação</div>
              <div class="ui error message"></div>
            </form>
            <br><br>
          </div>
        </section>

        <section id="content3">

         

          <form class="ui form segment">
            <h1 id="title-1">Solicitação de Visita Técnica</h1>
            <p>O Centro de Documentação e Memória dos Povos da Amazônia tem por objetivo o resgate e preservação dos
              acervos documentais históricos e difundi-los no principal canal de divulgação que é o site da Biblioteca
              da Amazônia. Para conhecer mais sobre a metodologia do trabalho desenvolvido, você pode solicitar visita
              técnica aos bastidores.
            </p>
            <br>
            <div class="three fields">
              <div class="field">
                <label>Nome</label>
                <div class="ui transparent input">
                  <input name="name" type="text">
                </div>
              </div>

              <div class="field">
                <label>Instituição</label>
                <div class="ui transparent input">
                  <input placeholder="bleble" name="username" type="text">
                </div>
              </div>

              <div class="field">
                <label>Profissão</label>
                <div class="ui transparent input">
                  <input name="password" type="password">
                </div>
              </div>

            </div>
            <div class="three fields">

              <div class="field">
                <label>Estado</label>
                <select class="ui dropdown" name="gender">
                  <option> Acre - AC</option>
                  <option> Alagoas - AL</option>
                  <option> Amapá - AP</option>
                  <option> Amazonas - AM</option>
                  <option> Bahia - BA</option>
                  <option> Ceará - CE</option>
                  <option> Espírito Santo - ES</option>
                  <option> Goiás - GO</option>
                  <option> Maranhão - MA</option>
                  <option> Mato Grosso - MT</option>
                  <option> Mato Grosso do Sul - MS</option>
                  <option> Minas Gerais - MG</option>
                  <option> Pará - PA</option>
                  <option> Paraíba - PB</option>
                  <option> Paraná - PR</option>

                  <option> Pernambuco - PE</option>
                  <option> Piauí - PI</option>
                  <option> Rio de Janeiro - RJ</option>
                  <option> Rio Grande do Norte - RN</option>
                  <option> Rio Grande do Sul - RS</option>
                  <option> Rondônia - RO</option>
                  <option> Roraima - RR</option>
                  <option> Santa Catarina - SC</option>
                  <option> São Paulo - SP</option>
                  <option> Sergipe - SE</option>
                  <option> Tocantins - TO</option>
                  <option> Distrito Federal - DF</option>

                </select>
              </div>

              <div class="field">
                <label>Cidade</label>
                <select class="ui dropdown" name="gender">
                  <option value="">Cidade</option>
                  <option value="male">Manaus</option>
                  <option value="female">Belo Horizonte</option>
                </select>
              </div>

              <div class="field">
                <label>Telefone</label>
                <div class="ui transparent input">
                  <input name="telefone" type="text">
                </div>
                <small id="description-pequena" class="form-text text-muted"
                  style="font-family: Montserrat, sans-serif">Inserir DDD. Ex: 92992007890</small>
              </div>


            </div>


            <div class="three fields">
              <div class="field">
                <label>Email</label>
                <div class="ui transparent input">
                  <input name="name" type="text">
                </div>
              </div>

              <div class="field">
                <label>Data</label>
                <div class="ui transparent input">
                  <input name="datanasc" type="text">
                </div>
              </div>
              <div class="field">
                <label>Horário</label>
                <select class="ui dropdown" name="gender">

                  <option> 12:00</option>
                  <option> 15:00</option>
                  <option> 16:00</option>
                  <option> 17:00</option>

                </select>


              </div>
            </div>


            <div class="field">
              <label>O que você está pesquisando?</label>
              <textarea class="form-control" id="text-pesquisa" rows="4"></textarea>
              <small id="description-pequena" class="form-text text-muted"
                style="font-family: Montserrat, sans-serif">Inserir neste campo o que você procura. Ex: "Estou
                pesquisando sobre..."</small>
            </div>

            <p>Salientamos, que a disponibilização (gratuita) deste acervo, tem por objetivo preservar a memória e
              difundir a cultura do Estado do Amazonas. E que, o uso destes documentos é apenas para uso privado
              (pessoal), sendo vetada a sua venda, reprodução ou cópia não autorizada. (Lei de Direitos Autorais - Lei
              9.610/98). Lembramos que este material pertence aos acervos das bibliotecas que compõem a rede de
              bibliotecas públicas do Estado do Amazonas. Pedimos apenas, que caso venha a utilizar estes documentos
              de
              forma acadêmica ou científica, que seja feita a menção e a referência que o presente material foi cedido
              pelo: Governo do Estado do Amazonas. Secretaria de Cultura e Economia Criativa. Centro de Documentação e
              Memória dos Povos da Amazônia. (hierarquicamente)

            </p>

            <!-- <div class="inline field">
                <div class="ui checkbox">
                  <input type="checkbox" name="terms">
                  <label>Concordo com os termos e condições</label>
                </div>
              </div>-->

            <div class="ui primary submit button">Finalizar Agendamento</div>
            <div class="ui error message"></div>
          </form>

        </section>

        <section id="content4">

          <form class="ui form segment">
            <h1 id="title-1">Pedido de digitalização</h1>
            <br>
            <div class="three fields">
              <div class="field">
                <label>Nome</label>
                <div class="ui transparent input">
                  <input name="name" type="text">
                </div>
              </div>

              <div class="field">
                <label>Instituição</label>
                <div class="ui transparent input">
                  <input placeholder="bleble" name="username" type="text">
                </div>
              </div>

              <div class="field">
                <label>Profissão</label>
                <div class="ui transparent input">
                  <input name="password" type="password">
                </div>
              </div>

            </div>
            <div class="three fields">

              <div class="field">
                <label>Estado</label>
                <select class="ui dropdown" name="gender">
                  <option> Acre - AC</option>
                  <option> Alagoas - AL</option>
                  <option> Amapá - AP</option>
                  <option> Amazonas - AM</option>
                  <option> Bahia - BA</option>
                  <option> Ceará - CE</option>
                  <option> Espírito Santo - ES</option>
                  <option> Goiás - GO</option>
                  <option> Maranhão - MA</option>
                  <option> Mato Grosso - MT</option>
                  <option> Mato Grosso do Sul - MS</option>
                  <option> Minas Gerais - MG</option>
                  <option> Pará - PA</option>
                  <option> Paraíba - PB</option>
                  <option> Paraná - PR</option>

                  <option> Pernambuco - PE</option>
                  <option> Piauí - PI</option>
                  <option> Rio de Janeiro - RJ</option>
                  <option> Rio Grande do Norte - RN</option>
                  <option> Rio Grande do Sul - RS</option>
                  <option> Rondônia - RO</option>
                  <option> Roraima - RR</option>
                  <option> Santa Catarina - SC</option>
                  <option> São Paulo - SP</option>
                  <option> Sergipe - SE</option>
                  <option> Tocantins - TO</option>
                  <option> Distrito Federal - DF</option>

                </select>
              </div>

              <div class="field">
                <label>Cidade</label>
                <select class="ui dropdown" name="gender">
                  <option value="">Cidade</option>
                  <option value="male">Manaus</option>
                  <option value="female">Belo Horizonte</option>
                </select>
              </div>

              <div class="field">
                <label>Telefone</label>
                <div class="ui transparent input">
                  <input name="telefone" type="text">
                </div>
                <small id="description-pequena" class="form-text text-muted"
                  style="font-family: Montserrat, sans-serif">Inserir DDD. Ex: 92992007890</small>
              </div>


            </div>


            <div class="three fields">
              <div class="field">
                <label>Email</label>
                <div class="ui transparent input">
                  <input name="name" type="text">
                </div>
              </div>

              <div class="field">
                <label>Data</label>
                <div class="ui transparent input">
                  <input name="datanasc" type="text">
                </div>
              </div>
              <div class="field">
                <label>Horário</label>
                <select class="ui dropdown" name="gender">

                  <option> 12:00</option>
                  <option> 15:00</option>
                  <option> 16:00</option>
                  <option> 17:00</option>

                </select>


              </div>
            </div>


            <div class="field">
              <label>Finalidade</label>
              <textarea class="form-control" id="text-pesquisa" rows="4"></textarea>
              <small id="description-pequena" class="form-text text-muted"
                style="font-family: Montserrat, sans-serif">Inserir neste campo a finalidade da sua pesquisa. Ex: "Esta
                pesquisa é para o meu mestrado em..."</small>
            </div>

            <div class="three fields">
              <div class="field">
                <label>Titulo</label>
                <div class="ui transparent input">
                  <input name="name" type="text">
                </div>
              </div>

              <div class="field">
                <label>Autor</label>
                <div class="ui transparent input">
                  <input name="datanasc" type="text">
                </div>
              </div>
              <div class="field">
                <label>Ano</label>
                <select class="ui dropdown" name="gender">

                  <option> 12:00</option>
                  <option> 15:00</option>
                  <option> 16:00</option>
                  <option> 17:00</option>

                </select>


              </div>
            </div>

            <p>Salientamos, que a disponibilização (gratuita) deste acervo, tem por objetivo preservar a memória e
              difundir a cultura do Estado do Amazonas. E que, o uso destes documentos é apenas para uso privado
              (pessoal), sendo vetada a sua venda, reprodução ou cópia não autorizada. (Lei de Direitos Autorais - Lei
              9.610/98). Lembramos que este material pertence aos acervos das bibliotecas que compõem a rede de
              bibliotecas públicas do Estado do Amazonas. Pedimos apenas, que caso venha a utilizar estes documentos
              de
              forma acadêmica ou científica, que seja feita a menção e a referência que o presente material foi cedido
              pelo: Governo do Estado do Amazonas. Secretaria de Cultura e Economia Criativa. Centro de Documentação e
              Memória dos Povos da Amazônia. (hierarquicamente)

            </p>

            <!-- <div class="inline field">
              <div class="ui checkbox">
                <input type="checkbox" name="terms">
                <label>Concordo com os termos e condições</label>
              </div>
            </div>-->

            <div class="ui primary submit button">Finalizar Agendamento</div>

            <div class="ui error message"></div>
        </section>
      </main>
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
        <p>Desenvolvimento: Inovação e Tecnologia Audiovisual</p>
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