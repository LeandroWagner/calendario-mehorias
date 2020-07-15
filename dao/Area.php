<?php 

namespace DAO;

class Area extends Database {

    const TABLE = 'area';
    protected static $oInstance;

    public function atualiza($id, $descricao){
        
        //Não deve permitir excluir e alterar áreas que tenham tarefas cadastradas.
        //Não deve permitir incluir áreas que já existam.
       
        $result = Area::editar($id, $descricao);
        return $result;
    }
    //------------------------------------------------
    public function verificaArea($descricao){
        
        //echo strtoupper($descricao);
        //exit;
        //Não deve permitir excluir e alterar áreas que tenham tarefas cadastradas.
        //Não deve permitir incluir áreas que já existam.
       
        $result = Area::buscaArea($descricao);
        return $result;
       
    }
    //------------------------------------------------
    public function grava($descricao){
        
        return Area::gravaArea($descricao);
       
       
    }
    //------------------------------------------------
    public function excluir($id){
        return  Area::excluirArea($id);
    }



}

