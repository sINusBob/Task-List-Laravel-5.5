@extends('layouts.website')
@section('subtitle', 'Sobre')

@section('content')

	<header class="pagehead">
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Sobre</h1>
					<p>Lorem ipsum dolor sit amet</p>
				</div>
			</div>
		</div>

	</header>
	
	<section id="about-soft">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p>TaskList é um sistema desenvolvido e mantido por {{ $fullName }} que possuí todo o desenvolvimento documentado através do canal instanceof no Youtube, com intuito educativo.
					Se você se interessou pelo sistema, não deixe de enviar um email para {{ $email }} com suas sugestões e/ou reclamações!</p>
				</div>
				<div class="col-md-4 text-center">
					<img src="http://placehold.it/300x300" alt="">
				</div>
			</div>
		</div>
	</section>

	<section id="about-app">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="handwritten-title">Aplicativo Android</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus suscipit, commodi, delectus atque aliquid illum voluptatibus ipsa numquam tenetur, id modi molestiae corporis iure exercitationem ratione voluptates vel recusandae. Saepe?</p>
					<a href="" class="btn btn-default">Baixar</a>
				</div>
			</div>
		</div>
	</section>

	<section id="about-instanceof">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center">
					<img src="http://placehold.it/300x300" alt="">
				</div>
				<div class="col-md-8">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi numquam molestias doloremque odit. Assumenda unde architecto harum quae excepturi eveniet alias eius pariatur, doloremque a numquam, totam commodi, delectus hic.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi numquam molestias doloremque odit. Assumenda unde architecto harum quae excepturi eveniet alias eius pariatur, doloremque a numquam, totam commodi, delectus hic.</p>
				</div>
			</div>
		</div>
	</section>

@endsection