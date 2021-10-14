{{-- apresentação de error de validação --}}
@if ($errors->any())
 <div class="alert alert-danger">
     <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
     </ul>
 </div>
@endif 


 {{-- apresentação dos erros de comunicação com o BD --}}
@if (isset($erros_bd))
  <div class="alert alert-danger">
    @foreach ($erros_bd as $erro)
      <p>{{ $erro }}</p>
    @endforeach
  </div>
@endif