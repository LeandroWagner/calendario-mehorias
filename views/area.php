<?php
    use DAO\Area;
  
    if(!empty($_GET['area'])) {
        $areas[] = Area::getInstance()->filtrarPorId($_GET['area']);
      
    } else {
        $areas = Area::getInstance()->getAll();
    } 
 
?>

<!--Body -->
<div class="container-fluid">

<section class="content-header">
  <h1>Áreas Cadastradas</h1>
</section>

<table class="table table-striped">
    <div class="box-header">
          <button class="btn btn-success" name= "adicionar" onClick="adicionar(this);" value="adicionar">Cadastrar área</button>
    </div><p><p>
    <thead>
        <h4>Nome</h4>
    </thead>
  
    <tbody>
    
    </tr> 
    <!-- Busca areas cadastradas no banco  -->
    <?php foreach($areas as $area) : ?>  
      <tr>
        <th scope="row"><?php echo $area->descricao; ?> </th> <!-- Print nome arae -->
            <th>
                
               <div class="col-lg-12" style="text-align: right;"> 
                   <!-- <button class="btn btn-sm btn-primary" name= "editar" id="<?php echo $area->id;?>" onClick="clickBotao(this);" value="<?php echo $area->descricao;?>"><i class="fa fa-edit"></i>Editar</button> -->
                   <a href="?path=editar&id=<?php echo $area->id; ?>&descricao=<?php echo $area->descricao; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Editar</a>
              
                   <!-- <button class="btn btn-danger btn-sm" name= "excluir" id="<?php echo $area->id;?>" onClick="clickBotao(this);" value="<?php echo $area->descricao;?>"><i class="fa fa-trash"></i>Excluir</button> -->
                   <a href="?path=excluir&id=<?php echo $area->id; ?>" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Excluir</a>
               </div>     
            </th>
           
      </tr>
    <?php endforeach; ?>
   </tbody>
</table>
</div>
<div class="col-lg-12" style="text-align: right;"> 
  <center>
          <button type="button" id="btn_voltar" onClick="acionarVoltar(this);" class="btn btn-primary">Voltar</button>
  </center>       
</div>
<!-- <input type="button" value="Refresh Page" onClick="window.location.reload()"> -->
           
<script type="text/javascript">
    function clickBotao(botao) {
      
      if (botao.name == 'excluir'){
          var r = confirm("Deseja realmente excluir este registro?");
          if (r == false) {
            var qryString  = '?path=area';
            location.href = qryString;
           
          }else{
            var qryString  = '?path='+ botao.name +'&id=' + botao.id+ '&descricao=' + botao.value; 
            location.href  = qryString;
          }
         
      }else{
        var qryString  = '?path='+ botao.name +'&id=' + botao.id+ '&descricao=' + botao.value;
        location.href  = qryString;
      }
  
    }
    function acionarVoltar() {
      location.href = "?path=inicio";

    }
    function adicionar(){
      location.href = "?path=adicionar";
    }
</script>

