<?php


class TchatBdd
{

    /*
    * Construction d'un objet PDO représentant la connexion à la base de données. *
    * Le premier argument est un Data Source Name (DSN) représentant où est-ce qu'il
    * faut se connecter. Une adresse IP ou un nom de domaine peut être spécifié. *
    * /!\ Tout le DSN doit être écrit en minuscules et sans espaces. *
    */
    private string $host = 'home.3wa.io:3307'; //'localhost' sur la 3wa
    private string $dbname = 'live-45_jeromehil_chat';
    private string $login = 'jeromehil';
    private string $password = 'c0d5dd48ZWQxYWNhZWQ4NTE1OGJhZWQ5MjM0Mzll6377bc91';

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getDbname(): string
    {
        return $this->dbname;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }


    public function dbConnexion()
    {

//la connexion à la base de données se fait grâce à l'instance de notre objet PDO
        try {
            $pdo = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=UTF8', $this->login, $this->password);
            //On définit le mode d'erreur de PDO sur Exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            /*echo 'Connecté';*/
        } /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
        catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        return $pdo;
    }


}
