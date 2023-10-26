<?php

class NotFoundController{
    public function index(){
        echo "Ops! Endereço não encontrado...<br>";
        echo "<a href='/DesafioAgrobold'>Clique aqui para voltar para tela inicial</a>";
    }
}