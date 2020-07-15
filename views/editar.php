<?php

    use DAO\Area;
    use DAO\Melhoria;

    //Verificar se a mesma existe
    $area   = new Area;
    $tarefa = new Melhoria;

    
    if ((!empty($_GET['id'])) && (!empty($_GET['descricao']))){
        $id         = $_GET['id'];
        $descricao  = $_GET['descricao'];

        //verifica area ja existente;
        if (($area->verificaArea($descricao) == Null) || ($tarefa->verificaTarefa($id) != null)){
            $_GET['path'] = 'area';  
            echo "<script>alert('Área não pode ser atualizada com tarefas existente !')</script>";
            echo "<script>acionarVoltar()<script>";
        }
    }else{
      $id         = $_POST['id'];
      $descricao  = $_POST['descricao'];
      if ($area->atualiza($id, $descricao) !=  null){
          echo "<script>alert('Área atualizada')</script>";
      }  
    }
?>

<div class="container">
  <h2>Editar Área</h2>
 <!-- <form action="?path=AreaEditar" onsubmit="return validateForm()" method="POST"> -->
 <form action="?path=editar" onsubmit="return validateForm()" method="POST">
    <div class="form-group">
        <input type="hidden" name="id" id="id" value=<?php echo  $id;?>>
        <input type="text" class="form-control" id="descricao" placeholder="Descricao" name="descricao" value=<?php echo $descricao;?>>
    </div>
    <button class="btn  btn-success"  type="submit" value="alterar">Alterar</button> 
    <button class="btn  btn-primary" name="voltar" onClick="acionarVoltar(this);" type="button">Voltar</button> 
  </form>
</div>

<script type="text/javascript">
  function validateForm() {
  var x = document.forms["adicionar"]["descricao"].value;
    if (x == "") {
        alert("Deve preenche a descriçao para gravar!");
        return false;
    }
   
  }
  function acionarVoltar() {
    location.href = "?path=area";
  }

</script>
