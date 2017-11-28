@extends('layouts.website')

@section('subtitle', 'Início')

@section('content')
	<!-- main slider -->
	<header class="masthead">
		<div class="container">
			<div class="row">
				<div class="col-md-6 soft-desc animated fadeIn">
					<div class="soft-info">
						<h1>Mantenha Suas Tarefas em Dia</h1>
						<hr>
						<p>O TaskList é uma ótima maneira de se organizar, perfeito para você que sempre está de agenda cheia. Através de nosso software, você garante uma organização diária de suas tarefas em seu computador ou mesmo no celular!</p>
					</div>
					<div class="start-buttons m-b-20">
						<a href="" class="btn btn-success">Criar uma Conta Gratuita</a>
						<a href="" class="btn btn-default">Baixar o Aplicativo</a>
					</div>
				</div>
				<div class="col-md-6 soft-img animated slideInRight">
					<img src="{{ asset('images/twodevices.png') }}" class="img-responsive" alt="">
				</div>
			</div>
		</div>
	</header>

	<!-- about -->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="handwritten-title">O Sistema</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis odio dolor cumque, pariatur esse eligendi aperiam consequuntur, corporis nisi, accusamus doloribus minima beatae accusantium! Qui corporis laudantium officiis fugit reiciendis.</p>
					<a href="" class="btn btn-default m-b-100 m-t-10">Criar uma Conta</a>
				</div>
				<div class="col-md-12">
					<div class="desktop-img">
						<img src="{{ asset('images/desktoptop.png') }}" class="img-responsive" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- about app-->
	<section id="about-app">
		<div class="container">
			<div class="row">
				<div class="col-md-8 text-right">
					<h1 class="handwritten-title">O Aplicativo</h1>
					<hr>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis odio dolor cumque, pariatur esse eligendi aperiam consequuntur, corporis nisi, accusamus doloribus minima beatae accusantium! Qui corporis laudantium officiis fugit reiciendis.</p>
					<a href="" class="btn btn-default m-t-10 m-b-20">Download</a>
				</div>
				<div class="col-md-4">
					<div class="app-img">
						<img src="{{ asset('images/mobilehand.png') }}" width="400px" class="img-responsive" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- funcionalities -->
	<section id="funcionalities">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-4">
					<div class="box-simple">
						<div class="icon">
							<i class="fa fa-check-square-o fa-4x" aria-hidden="true"></i>
						</div>
						<h3>Tarefas</h3>
						<p>Gerencie suas tarefas diárias de uma maneira simples e rápida!</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-simple">
						<div class="icon">
							<i class="fa fa-list fa-4x" aria-hidden="true"></i>
						</div>
						<h3>Listas</h3>
						<p>Organize as tarefas em listas customizadas!</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-simple">
						<div class="icon">
							<i class="fa fa-users fa-4x" aria-hidden="true"></i>
						</div>
						<h3>Times</h3>
						<p>Compartilhe suas listas e tarefas com seu time!</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="newsletter">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-12">
					<h3 class="uppercase-title">Fique por Dentro das Novidades!</h3>
					<p>Cadastre-se em nossa newsletter e seja o primeiro a saber de nossas novidades e atualizações do sistema!</p>
					<form action="" method="POST">
						<div class="col-md-offset-2 col-md-8 m-b-20">
							<input type="text" placeholder="Digite seu email..." class="form-control">
						</div>
						<div class="col-md-offset-4 col-md-4">
							<button type="submit" class="btn btn-default btn-block">Quero Receber as Novidades</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
