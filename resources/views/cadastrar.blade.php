
<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/app.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <title>CrudFactory</title>
  </head>
  <body>
   
   
    <div id="conteiner">
    
      @include('validacao.erros')
    
     <form class="for" method="POST" action="/inserir">
        {{ csrf_field()}}
        <div class="col-md-6">
            <label for="id_text_usuario">Nome</label>
            <input type="text" class="form-control" id="id_usuario" name="text_usuario" placeholder="Digite seu nome">
        </div>      
      
      
      <div class="col-md-6">
        <label for="id_text_email">Email</label>
        <input type="text" class="form-control" id="id_email" name="text_email"  placeholder="Digite seu email">  
      </div>
      
      <div class="col-md-6">
        <label for="id_senha">Senha</label>
        <input type="password" class="form-control" id="id_senha" name="text_senha" placeholder="Senha">
      </div>
      
      <div class="col-md-6">
       <label for="id_senha_repetida">Repetir Senha:</label>
       <input type="password" class="form-control" id="id_senha_repetida" name="text_senha_repetida" placeholder="Repetir senha" > 
      </div>
      
      <button id="bot" type="submit" class="btn btn-primary">Cadastrar</button>
      <a href="/">Voltar ao Inicio<a/>
    
    </form>
      
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

   

  </body>
</html>