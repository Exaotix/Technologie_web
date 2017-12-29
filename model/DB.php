<?php

  class DB
  {
    private $host;
    private $user;
    private $password;
    private $database;

    private $connection;

    public function __construct($host, $user, $password, $database)
    {
      $this->host = $host;
      $this->user = $user;
      $this->password = $password;
      $this->database = $database;

      $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
      if (!$this->connection)
      {
        die ("Unable to connect to DB");
      }
    }

    public function disconnect()
    {
      mysqli_close($this->connection);
    }

    public function insertQuery($sql)
    {
      mysqli_query($this->connection, $sql);
    }

    public function selectQuery($sql)
    {
      $result = mysqli_query($this->connection, $sql);
      $out = [];
      while ($row = mysqli_fetch_assoc($result))
      {
        $out[] = $row;
      }
      return json_encode($out);
    }

  }
