<?php

/** Behavior qui permet de définir la connexion aux différentes bases de données en fonction des conditions */

class ConnexionBehavior extends ModelBehavior
{
    public function setup(Model $Model, $settings = array())
    {
        $Model->useDbConfig;
    }


}