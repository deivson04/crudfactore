@extends('layouts.aplicacao')

@section('conteudo')

   <p>estou dentro</p>
   <p>Usuario:<strong> {{ session('usuario') }}</strong></p>
   <a href="/frm_login">Logout</a>
@endsection