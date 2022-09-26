@extends('app')

@section('content')
  <h1>Buscar CNPJ</h1>
  <form action="{{route('buscar_cnpj')}}" method="GET">
      <div class="mb-3">
          <label>Informe o CNPJ:</label>
          <input type="text" class="form-control" name="cnpj">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>           
  </form>
@endsection