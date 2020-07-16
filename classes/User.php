<?php

/**
 * Description of user
 *
 * @author Michael
 */
session_start();
include_once 'Db.php';

class User {

    private $db;

    public function __construct() {
        $this->db = new Db();
    }

    public function selectAllUser() {
        try {
            $sql = "SELECT * FROM user ORDER BY id DESc";
            $result = $this->db->datab->query($sql);

            if ($result->rowCount() > 0) {
                while ($row = $result->fetch()) {
                    $data[] = $row;
                }
                return $data;
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
        $result = null;
    }

    public function selectOne($id) {
        $sql = "SELECT * FROM user WHERE id=:id";
        $stmt = $this->db->datab->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insert($fields) {
        $impClm = implode(', ', array_keys($fields));
        $impHolder = implode(', :', array_keys($fields));

        $sql = "INSERT INTO user ($impClm) VALUES (:" . $impHolder . ")";
        $state = $this->db->datab->prepare($sql);

        foreach ($fields as $key => $value) {
            $state->bindValue(':' . $key, $value);
        }

        $stateExec = $state->execute();

        if ($stateExec) {
            $msg = "You have successfully subscribe";
            header('Location: ./index.php');
        } else {
            $msg = "Opps there was an error, try again";
            header('Location: ./index.php');
        }
    }

}
