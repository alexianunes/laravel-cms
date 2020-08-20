<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prova front-end Sorocabacom</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/lib/font-awesome/css/font-awesome.min.css')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

</head>
<body>

    <header id="header">
        <div class="container">
            <!-- Início Logo -->
            <div class="row">
                <div class="col-6 offset-4">
                    <a href="/" class="txt-logo"><img class="img-fluid" src="{{asset('assets/img/logo.png')}}">{{$conteudos['nomeJogo']}}</a>
                </div>
            </div>
            <!-- Fim Logo -->
            <div style="clear: both;"></div>
            
        </div>
    </header>

    <section class="bg" style="background: url({{asset($conteudos['backgroundSuperior'])}}) no-repeat center;background-size: cover;">
		<div class="container">
            <!-- Início Frase Tema -->
            <div class="row">
                <div class="col-md-3 offset-md-4 offset-sm-3 col-6 offset-2 mt-2">
                    <div class="txt-tema">
                        <p>{{$conteudos['txtDestaqueTema']}}</p>
                    </div>
                </div>
            </div>
            <!-- Início Frase Tema -->
            <!-- Início Frase  -->
            <div class="row">
                <div class="col-md-3 offset-md-4 col-sm-4 offset-sm-3 col-5 offset-2">
                    <div class="txt-frase">
                        <p class="text-center">
                            {{$conteudos['frase']}}
                        </p>
                    </div>
                </div>
            </div>
            <!-- Fim Frase  -->
		</div>
    </section>

    <section class="section-personagem">
		<div class="container">
                <!-- Início Personagens -->
                <div class="row carousel-personagens">
                    @foreach ($personagens as $descricao => $imagem)
                    <div class="col-md-4">
                        <div class="box-personagem">
                            <div class="bg-personagem">
                                <img src="{{asset($imagem)}}" class="img-fluid">
                            </div>
                            <div class="text-descricao-personagem">
                                <p>
                                   {{$descricao}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Fim Personagens -->
		</div>
    </section>

    <section class="section-contato">
		<div class="container">
            <!-- Início Form Contato -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box-contato">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-center">Formulário</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 offset-md-2">
                                <p>{{$conteudos['descricao_formulario']}}</p>
                            </div>
                        </div>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    <h5>Houve um erro ao editar o(s) itens:</h5>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session('warning'))
                            <div class="alert alert-success">
                                {{session('warning')}}
                            </div>
                        @endif

                        <form action="{{route('home.save')}}" method="POST">
                            @csrf 
                            <div class="row">
                                <div class="col-md-3 offset-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nome" placeholder="Nome">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-group">
                                        <textarea name="mensagem" placeholder="Mensagem"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 offset-md-3">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-contato" name="enviar" value="Enviar">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- Fim Form Contato -->
		</div>
    </section>

    <footer class="footer-area"></footer>

    <a href="#header" class="btn-back-to-top scroll-suave"><i class="fa fa-chevron-up"></i></a>
@yield('content');

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/app.min.js')}}"></script>

<script>
    $('.carousel-personagens').slick({
  infinite: true,
  autoplay: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows : false
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows : false
      }
    },
    {
      breakpoint: 601,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows : false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows : false
      }
    }
  ]
});
	
</script>
</body>
</html>