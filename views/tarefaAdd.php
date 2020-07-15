<?php

    use DAO\Area;

    //Verificar se a mesma existe
    $area = new Area;
   
  echo "OKAOKSO";
  echo $_GET['tarefa'];
  exit;
/*
    exit;
    if(!empty($_POST['descricao'])) {
       if ($area->verificaArea(ucfirst($_POST['descricao'])) != Null){
           echo "<script>alert('Existe já essa área')</script>";
       }else{
            if($area->grava(ucfirst($_POST['descricao'])) == 1){
              echo "<script>alert('Cadastro realizado com Sucesso!')</script>";
            }
            
       }
    }
*/
?>
<div class="container">
  <h2>Adicionar Área</h2>
  <form name="adicionar" action="?path=adicionar" onsubmit="return validateForm()"  method="GET">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Descrição" name="descricao">
    </div>
    <button class="btn  btn-success" name="gravar" type="submit">Gravar</button> 
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