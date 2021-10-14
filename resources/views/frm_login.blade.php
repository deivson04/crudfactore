

@extends('layouts.aplicacao')

{{-- formulario de login--}}

@section('conteudo')



<div id="conteiner">
    
    @include('validacao.erros')  
  
   <form class="for" method="POST" action="/usuario_executar_login">
    {{ csrf_field()}}
    <div class="col-md-6">
      <label for="id_text_usuario">Usuario</label>
      <input type="text" class="form-control" id="id_usuario" name="text_usuario" placeholder="Digite seu Nome">
      
    </div>
    <div class="col-md-6">
      <label for="id_text_senha">Senha</label>
      <input type="password" class="form-control" id="id_usuario" name="text_senha" placeholder="Digite a Senha">
    </div>
  
    <button id="bot" type="submit" class="btn btn-primary">Entrar</button>
    <a href="/cadastrar">Faça seu Cadastro</a>
  
  </form>
</div>
  @endsection