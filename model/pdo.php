<?php
class CoPDO {
    private $host = 'sql103.infinityfree.com';
    private $db_name = 'if0_41398288_ppe';
    private $username = 'if0_41398288';
    private $password = 'M1rm1Fr0u1lle';
    private $con;

    public function co_pdo() {
        $this->con = NULL;

        try {
            $this->con = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
                $this->username, 
                $this->password, 
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        }
        catch (PDOException $e) {
            die($e->getMessage());
        }
        return $this->con;
    }
}
?>