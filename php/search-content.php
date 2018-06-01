<?php

if(isset($_POST["search"]) && !empty($_POST["search"])){

  require_once("db_connection.php");

  $search = htmlspecialchars(mysqli_real_escape_string($connect , $_POST["search"]));
  $statement = "SELECT path , page FROM search_content WHERE content LIKE '%$search%'";

  if($query = mysqli_query($connect , $statement)){
    if(mysqli_num_rows($query)){
      echo "<h4><strong>".$search."</strong><br>encontrado en paginas:</h4>";
      while($data = mysqli_fetch_assoc($query)){
        echo "<a href='".$data["path"]."'>".$data["page"]."</a>";
      }
    }else{echo "<a>No resultados.</a>";}

  }else{echo "<a>Error de busqueda.</a>";}

}

?>
