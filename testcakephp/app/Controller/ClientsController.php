<?php

/** Le controller qui est en rapport avec le model Client
 * Il va effectuer les actions CRUD dans les bases de données et permet de créer le visuel de la couche View
 */

class ClientsController extends AppController
{
    public function index($groupe){
        //surcharge de la propriété useDbConfig présente dans le behavior
        if($groupe == 1){
            $this->Client->useDbConfig = 'client1cakes';
        }
        elseif ($groupe == 2) {
            $this->Client->useDbConfig = 'client2cakes';
        }

        //recherche des données dans la BDD précédemment définie
        $clients = $this->Client->find('all');
        $this->set('clients', $clients);
    }
}