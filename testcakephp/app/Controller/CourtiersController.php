<?php

/** Le controller qui est en rapport avec le model Courtier
 * Il va effectuer les actions CRUD dans la base de données et permet de créer le visuel de la couche View
 */

class CourtiersController extends AppController
{
    public function index()
    {
        $courtiers = $this->Courtier->find('all');
        $this->set('courtiers', $courtiers);
    }
}