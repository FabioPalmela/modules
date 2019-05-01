@extends(
	'form-view', 
	[
		"current"     => "categorias",
		"title"       => "Página de Categorias",
		"headerTitle" => "Cadastro de Categorias",
		"actionForm"  => "/categorias"
	]
)

@section('form-view')
@csrf
<div class="form-group">
	<div class="col-sm-6">
		<label for="nomeCategoria"></label>
		<input type="text" class="form-control  {{$errors->has('nomeCategoria') ? 'is-invalid' : ''}}" name="nomeCategoria" id="nomeCategoria" placeholder="Categoria">
@if ($errors->has('nomeCategoria'))
		<div class="invalid-feedback">
	{{$errors->first('nomeCategoria')}}
		</div>
@endif
	</div>
</div>
<div class="col-sm-6">
	<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
	<button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
	<button type="reset" class="btn btn-warning btn-sm">Limpar</button>
</div>
@endsection