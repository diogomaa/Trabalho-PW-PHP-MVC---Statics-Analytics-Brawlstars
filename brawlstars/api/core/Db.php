<?php
class Db {
  private $DBServer;
  private $DBUser;
  private $DBPass;
  private $DBName;

  private $conn;

  public function __construct() {
    $this->DBServer = 'localhost';
    $this->DBUser   = 'root';
    $this->DBPass   = '';
    $this->DBName   = 'brawlstars';
    $this->conn = new mysqli($this->DBServer, $this->DBUser, $this->DBPass, $this->DBName);
    $this->conn->set_charset("utf8");
  }

  private function setParameters($stmt, array $parameters) {
    if (count($parameters)) {
      $types = $parameters[0];
      $values = $parameters[1];
      $stmt->bind_param($types, ...$values); // *1
    }
  }


  public function execQuery(string $sql, array $parameters = []) {
    $stmt = $this->conn->prepare($sql);
    $this->setParameters($stmt, $parameters);
    $stmt->execute();
    $result = $stmt->get_result();
    if (!is_bool($result)) {
      $response = $result->fetch_all(MYSQLI_ASSOC);
    } else {
      $nrows = $stmt->affected_rows;
      $response = $nrows;
    }
    return $response;
  }


}
