<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>SorryStory.org</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){ 
      $('#submit_form').hide();
    });
  </script>
  <script type="text/javascript">
  function showSubmit(){
    $('#submit_form').show('slow');
  }
  </script>
</head>
<body>
  <div id="title">
  <h1>ShareStories</h1>
  <h5>A simple place with a simple purpose; <br> To get that story off your chest and apoligize to the universe.</h5>
  </div>
  <div id="navbar">
  <a href="javascript:showSubmit()" id="show_submit">Submit a Story</a>
  </div>

