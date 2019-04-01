<?php

?>
<html>
<head>
  <script src="/socket.io/socket.io.js"></script>
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
</head>
<body>

<h1>Hello Blorld</h1>

<script>
  if (!$) $ = jQuery;

  $(document).ready(function() {
    socket.on('log', function(data) {
      console.log(data);
    })
  });
</script>
</body>
</html>
