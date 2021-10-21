<?php
  if($_POST){
    //echo "<p id='p'></p>";
    //'<script type="text/JavaScript"> 
   // let data = "'. $_POST['q'] .'";
   // p.innerText = data;
  //  </script>';
  
  $data = file_get_contents("https://docs.google.com/spreadsheets/d/1JGjoo2wwNXrEtPT6zqqNnAYKT0h1ImJ7X10J4czoD6k/gviz/tq?tqx=out:json");
  $arr = json_decode(substr($data, 47, -2), true);
  echo $arr["table"]["rows"][2]["c"][2]["v"];
  }
  else{
  function test(){
  	if($_GET['q']){
  	 return $_GET['q'];
  	}
  	else {
  	 return "404";
  	}
  	}
    echo '<script type="text/JavaScript">
     
    let data = "'. test() .'";
    document.write(data);
    </script>';
  }
?>
