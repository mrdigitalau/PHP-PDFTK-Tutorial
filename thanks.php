<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PDFTK Tutorial</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">

</head>
<body>



            <div class="container text-center">

                      <h1>Thanks <?php echo $_GET['fname'];?>, your PDF is now generated, <a href="./completed/<?php echo $_GET['link'];?>" download>Download it here</a></h1>

                     <div class="clearfix mb-5"></div>

                      <a href="index.php" class="btn btn-success">Generate another PDF</a>
            </div>
                  

      
</body>
</html>

