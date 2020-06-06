@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Adicione um contato</h1>
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
          <div class="form-group">    
              <label for="primeiro_nome">Primeiro nome:</label>
              <input type="text" class="form-control" name="primeiro_nome"/>
          </div>
          <div class="form-group">
              <label for="sobrenome">Sobrenome:</label>
              <input type="text" class="form-control" name="sobrenome"/>
          </div>
          <div class="form-group" id="datetimepicker">
              <label for="nascimento">Data de Nascimento:</label>
              <input type="date" class="form-control" name="nascimento"/>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="telefone">Telefone:</label>
              <input type="text" class="form-control" name="telefone"/>
          </div>
          <div class="form-group">
              <label for="endereco">Endereço:</label>
              <input type="text" class="form-control" name="endereco"/>
          </div>
          <div class="form-group">
              <label for="cidade">Cidade:</label>
              <input type="text" class="form-control" name="cidade"/>
          </div>      
          <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" class="form-control" name="estado">
          </div>                   
          <button type="submit" class="btn btn-primary-outline">Adicionar contato</button>
      </form>
  </div>
</div>
</div>
@endsection