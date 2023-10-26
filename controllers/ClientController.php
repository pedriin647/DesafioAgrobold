<?php

class ClientController extends RenderView{

    public function index(){

        $clients = new ClientModel();

        $this->loadView("home", 
        ["title" => "Home Page",
        "clients"=> $clients->fetch(),
    ]);
    }

    public function fetchById($id){

        $id_client = $id[0];

        $client = new ClientModel();

        $this->loadView("edit", ['client' => $client->fetchById($id_client)]);
    }

    public function create(){
        $client = new ClientModel();

        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $client->name = $_POST['name'];
        $client->email = $_POST['email'];
        $client->password = $_POST['password'];
        $client->create();
    }
        header("Location: /DesafioAgrobold");
    }

    public function update(){
        $client = new ClientModel();
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
            $client->id = $_POST['id'];
            $client->name = $_POST['name'];
            $client->email = $_POST['email'];
            $client->password = $_POST['password'];
            $client->update();
        }

        header("Location: /DesafioAgrobold");
    }

    public function destroy($id){
        $id_client = $id[0];
        $client = new ClientModel();

        $client->destroy($id_client);
    
        header("Location: /DesafioAgrobold");
    }

}