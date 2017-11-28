@extends('layouts.website')
@section('subtitle', 'Contato')

@section('content')

	<div class="pagehead">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Contato</h1>
					<p>Envie-nos uma mensagem através do formulário!</p>
				</div>
			</div>
		</div>
	</div>

	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					@include('partials.messages')
					<h2>Formulário</h2>
					<hr>
					<form action="{{ route('contact.send') }}" method="POST">
						{{ csrf_field() }}
						<div class="form-group">
							<input type="text" placeholder="Nome" name="name" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Telefone" name="phone" class="form-control">
						</div>
						<div class="form-group">
							<textarea name="bodyMessage" cols="30" rows="10" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Enviar" class="btn btn-success">
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate aperiam nostrum quasi autem tempore molestiae eaque, in officiis aspernatur hic, impedit suscipit eum dolorem ducimus mollitia ea doloribus asperiores incidunt.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit accusantium, autem temporibus amet rerum optio! Officia praesentium distinctio cumque! Repudiandae laboriosam, quibusdam, quis recusandae maiores sapiente ut doloribus culpa beatae?
					</p>
				</div>
			</div>
		</div>
	</section>

@endsection