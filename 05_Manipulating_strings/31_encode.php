<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

$html ='<script>window.location="index.html"</script>';
$html =htmlspecialchars($html);
echo $html;

?>
</body>
</html>