<?php

class ClientController extends RenderView{

    public function index(){

        $clients = new ClientModel();

        $this->loadView("home", 
        ["title" => "Home Page",
        "clients"=> $clients->fetch(),
    ]);
    }

    public function getAll(){
        $clients = new ClientModel();
        echo  json_encode($clients->fetch());
    }

    public function fetchById($id){

        $id_client = $id[0];

        $client = new ClientModel();
        echo json_encode($client->fetchById($id_client));
    }

    public function create(){
        $client = new ClientModel();

        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $client->name = $_POST['name'];
        $client->email = $_POST['email'];
        $client->password = $_POST['password'];
        $client->create();
    }
        echo json_encode(true);
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

        echo json_encode(true);
    }

    public function destroy($id){
        $id_client = $id[0];
        $client = new ClientModel();

        $client->destroy($id_client);

        echo json_encode(true);
    }

}