<html lang="en">
<head>
  
    <title></title>
    <link rel="stylesheet" href="<?= HOST. 'assets/admin_resources/css/style.css'?>"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Poiret+One&display=swap" rel="stylesheet">
    
</head>
<body>

    <?php 
     include("common/header.php");
     ?>
     
     <div class="main"> 
     <?php include("pages/".$tpl. ".php"); ?>
     </div>
     
    <script>
        var siteUrl = "<?= HOST?>";
    </script>
   <script src="<?= HOST. 'assets/admin_resources/js/script.js'?>"></script>
</body>
</html>