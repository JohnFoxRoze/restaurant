<?php

class HomeController {
    public function httpGetMethod(Http $http, array $queryFields) {
        /*
         * Méthode appelée en cas de requête HTTP GET
         *
         * L'argument $http est un objet permettant de faire des redirections etc.
         * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
         */

        $ma_variable = "slt";

        return [
            'poipoil' => $ma_variable,
            'saucetomate' => ["je mange des pages", 'tomate', 'pomme']
        ];

    }

    public function httpPostMethod(Http $http, array $formFields) {
        /*
         * Méthode appelée en cas de requête HTTP POST
         *
         * L'argument $http est un objet permettant de faire des redirections etc.
         * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
         */
    }
}