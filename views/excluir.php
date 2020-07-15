<?php
  
   use DAO\Area;
   use DAO\Melhoria;
    
   //Verificar se a mesma existe
   $area   = new Area;
   $tarefa = new Melhoria;
  
   if (!empty($_GET['id'])) {
        $id        = $_GET['id'];
      //  $descricao = $_GET['descricao'];
   }
   if(($tarefa->verificaTarefa($id)) != null) {
      $_GET['path'] = 'area'; 
      echo "<script>alert('Existe tarefa na area não pode ser excluida!');history.back();</script>";
   }else {
      if (($area->excluir($id)) == 1){
         $_GET['path'] = 'area';   
         echo "<script>alert('Exclusão realizado com Sucesso!')</script>";
      }else{
         echo "<script>alert('Falha na exclusão!');history.back();</script>";
      }
   }
?>

