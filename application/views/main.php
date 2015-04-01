<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>BBC Roman Numeral Kata by Stuart Rutter</title>
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container">
<div class="page-header"> <h1>BBC Roman Numeral Kata <small>by Stuart Rutter</small></h1> </div>
  <div class="jumbotron">
    <form id="numeralForm">
      <div class="input-group input-group-lg">
      <input type="text" class="form-control" value="<?php echo $number; ?>">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">Random</button>
        </span>

      </div>
    </form>
        
    <h2>Roman Numeral: <span id="numeralOutput"><?php echo $numeral; ?></span></h2>

  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>

  $("#numeralForm input").on('input', function(){
    $.get("/romannumeral/generate/" + this.value, function(numeral){
      $("#numeralOutput").html(numeral);
    });
  });

  $("#numeralForm button").click( function(){
    $("#numeralForm input").val(Math.floor((Math.random() * 3999) + 1)).trigger('input');
  });

</script>

</body>
</html>
