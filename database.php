<?php 
    // de class database aanmaken
    class database {
        // class met private variables aanmaken
        private $host;
        private $db;
        private $user;
        private $pass;
        private $charset;
        private $pdo;

        public function __construct($hostje, $db, $user, $pass, $charset) {
            $this->host = $hostje;
            $this->user = $user;
            $this->pass = $pass;
            $ths->charset = $charset;

            try {

                $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];

                $this->pdo = new PDO($dsn, $user, $pass, $options);
            } catch (\PDOException $e) {
                 echo $e->getMessage();
                 throw $e;
                 // throw new PDOexception
            
            }
        }
        
    };
 
  /*  $host = 'localhost';
    $db   = 'project1';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';
    */
?>