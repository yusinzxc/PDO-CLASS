<?php

  class view extends config {

    public function allUsers(){
      $con = $this->connect();
      $query = $con->prepare("SELECT * FROM user");
      $query->execute();
      $allData = $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($allData as $data){
        echo "<div>
                <span>$data[username]</span>
                <a href='?uid='$data[uid]'>delete</a>
              </div>";
      }
    }
    public function allPost(){
      $con = $this->connect();
    }

  }

?>