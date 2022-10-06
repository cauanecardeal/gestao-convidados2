<?php include "conexao.php";?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

  </head>
  <body>
   <div class="container">
    <div class="mt-4 p-5 bg-primary rounded text-center text-white">
       <h1>Lista Convidados</h1>
</div>
  <form class="row d-flex" action="#" method="GET">
  <div class="col-auto">
  <input type = "hidden" id="id-convidado" name="id-convidado">
    <label for="staticEmail2">Nome:</label>
    <input type="text" class="form-control" id="nome" placeholder="Ex: José" name="nome">
  </div>
  <div class="col-3">
    <label for="staticEmail2">Acompanhante:</label>
    <input type="number" class="form-control" id="acompanhante" placeholder="Ex: 1" name="acompanhante">
  </div>
  <div class="col-auto">
    </br><button type="submit" class="btn btn-primary mb-3">Salvar</button>
  </div>
</form>           
  <table class="table">
    <thead>
      <tr>
        <th>Nome Convidados</th>
        <th>Quantidade de acompanhantes</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($resultado as $convidado) : ?>
      <tr>
        <td id="nome<?php echo $convidado['id_convidados']; ?>"> <?php echo $convidado['nome']?> </td>
        <td id="acomp<?php echo $convidado['id_convidados']; ?>"> <?php echo $convidado['acompanhantes']?> </td>

        <td> 
        <button type="button" class="btn btn-success"onclick = "atualizar(<?php echo $convidado['id_convidados']?>)">
             Atualizar
        </button>
    </td>
        <td> <a href="excluir.php?id=<?php echo $convidado['id_convidados']; ?>">
        <button type="button" class="btn btn-danger">
             Excluir
    
        </button> 
    </td>
      </tr>
      <?php endforeach; ?>
       
    </tbody>
  </table>
 </div>

 <script> 
  function atualizar(id){
  var nome = document.getElementById('nome'+id).innerText;
  var acompanhantes = document.getElementById("acomp"+id).innerText;
  document.getElementById("nome").setAttribute('value',nome);
  document.getElementById("acompanhante").setAttribute('value', acompanhantes);
  document.getElementById("id-convidado").setAttribute('value', id);
}
 </script> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

 </body>
</html>