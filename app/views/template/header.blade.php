<html>
<title>ITil</title>

<head>
{{ HTML::style('css/style.css') }}
<meta name="csrf-token" content="{{csrf_token()}}">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<title>Дипломная работа</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="shortcut icon" type="image/png" href="favicon.png">	
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{{ asset('javascripts/jquery-1.7.2.min.js')}}"></script>

</head>
	
<body>
<div class="container"> 
    
    <header id="navtop">
		<a href="/" class="logo fleft">
			<img class="log" src="{{ asset('img/logo.png')}}" alt="Designa Studio">
		</a>
		
		<nav class="fright">
			<ul>
				<li><a href="/" class="navactive">Главная</a></li>
                                <li><a href="/plot" class="navactive">Диаграмма</a></li>
				<li><a href="/directory">Администрирование</a></li>
			</ul>
			<ul>
                            <li>@if (!Auth::check())
    <form class="navbar-form navbar-right" role="form" action="{{ action('UsersController@postLogin') }}" method="post">
        <a href="/users/login" class="btn btn-info">Войти</a> |
        <a href="/users/register" class="btn btn-info">Регистрация</a>
    </form>
@else
    <form class="navbar-form" role="form" action="/users/logout">
        <div class="user">{{ Auth::user()->username }}</div>
        <button onclick="return confirm('Вы точно хотите выйти?')" class="btn btn-info">Выйти</button>
    </form>

    
       
       
       @endif</li>
			</ul>
		</nav>
	</header>
    
    
   <div class="home-page main">
	<section class="grid-wrap" >
		<header class="grid col-full">
			<hr>
		
		</header>
		
		<div class="grid col-one-half mq2-col-full">
		@if (!Auth::check())	
                    <h1>Подбор оптимальных 
			Компонентов </h1>
			<p>Взаимная энтропия или энтропия объединения предназначена для расчёта энтропии взаимосвязанных систем (энтропии совместного появления статистически зависимых сообщений) и обозначается H(AB), где A характеризует передатчик, а B — приёмник.
			</p>
			<p>Взаимная энтропия вычисляется последовательным суммированием по строкам (или по столбцам) всех вероятностей матрицы, умноженных на их логарифм.

			</p>
                @endif        
		</div>
		
		 </section>
	



	</div> <!--main--> 
    
    
    
    
    
    

			
		
             
	
	

		
		
		