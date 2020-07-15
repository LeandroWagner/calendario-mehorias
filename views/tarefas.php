<?php
    use DAO\Area;
    
    $areas = Area::getInstance()->getAll();
    $meses = [];

    for($m = 1; $m <= 12; $m++) {
     $meses[] = (object)[
      'id'         => $m,
      'descricao'  => date('F', mktime(0, 0, 0, $m)),
     ];
    }
    //Array de situações dos prazos
    $gravidadeAll = ['Não informado','Sem gravidade','Pouco grave','Grave','Muito grave', 'Extremanente grave'];
    $urgenciaAll  = ['Pode esperar','Pouco urgente','Merece atenção, curto prazo','Muitou urgente', 'Precisa de ação imediata'];
    $tendenciaAll = ['Não irá mudar','Piora em longo prazo','Piora em medio prazo','Piora em curto prazo', 'Piora rapidamente'];

?>

<div class="container-fluid">
   
    <section class="content-header">
    <h2>Tarefa</h2>
      
    </section>
    <div class="box-header">
       <button class="btn btn-success"  onClick="adicionar(this);" >Cadastrar Tarefa</button> 
     </div><p><p>
        <div class="form-row">
            <div class="form-group col-sm-12">
                <label for="area">Áreas</label>
                <select class="form-control" id="tarefa">
                  <option value="0">Selecione</option>
                  <?php foreach ($areas as $area) : ?>
                  <option  value="<?php $area->id; ?>"><?php echo $area->descricao; ?></option>
                  <?php endforeach; ?>
                </select>
                <small id="areaHelp" class="form-text text-muted">Área de negócio da tarefa.</small>
            </div>

            <div class="form-group col-sm-12 col-md-3">
                <label for="prazo">Prazo</label><br>
                <input class="form-control" type="text" id="calendario" />   

            </div>
            <div class="form-group col-sm-12 col-md-3">
                        <label for="gravidade">Gravidade</label>
                        <select class="form-control" id="gravidade">
                            <?php foreach($gravidadeAll as $tipo) : ?>
                                <option value="<?php echo array_search($tipo, array_keys($gravidadeAll));  ?>"><?php echo $tipo;  ?></option>
                            <?php endforeach; ?>
                       </select>
                      
            </div>
            <div class="form-group col-sm-12 col-md-3">
                <label for="urgencia">Urgência</label>
                        <select class="form-control" id="gravidade">
                            <option value='0'>Não informado</option>
                            <?php foreach($urgenciaAll as $tipo) : ?>
                                <option value="<?php echo $tipo; ?>"><?php echo $tipo;  ?></option>
                            <?php endforeach; ?>
                       </select>         
            </div>
            <div class="form-group col-sm-12 col-md-3">
            <label for="tendencia">Tendência</label>
                        <select class="form-control" id="gravidade">
                            <option value='0'>Não informado</option>
                            <?php foreach($tendenciaAll as $tipo) : ?>
                                <option value="<?php echo $tipo; ?>"><?php echo $tipo;  ?></option>
                            <?php endforeach; ?>
                       </select>         
            </div>
            
        </div>
        <div> 

                              
            <label class="" for="descricao">Tarefa</label>
            <textarea class="form-control mb-2" id="tarefa" rows="8"></textarea>
       </div>
       <div> 
        <label class="" for="descricao">Descrição</label>
        <textarea class="form-control mb-2" id="descricao" rows="8"></textarea>
        
   </div>
   </div>
                           

<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>


<script type="text/javascript">
  
  $(function() {
    $( "#calendario" ).datepicker();
  });

  function adicionar(){
      location.href = "?path=msmanutencao";
    }
</script>












