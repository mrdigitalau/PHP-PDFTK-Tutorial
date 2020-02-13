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



            <div class="container">

                        <form action="generate.php" method="POST">

                        <h1>Generate Fillable PDF</h1>
                        <p>Fill out the form and your data will fill in a PDF</p>


                              <div class="form-group row">

                                    <div class="col-lg-6">
                                                <input type="text" name="fname" class="form-control" placeholder="First name">
                                    </div>

                                    <div class="col-lg-6">
                                                <input type="text" name="lname" class="form-control" placeholder="Surname" required>
                                    </div>

                              </div>



                              <div class="form-group row">

                                    <div class="col-lg-6">
                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>

                                    <div class="col-lg-6">
                                                <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                                    </div>

                              </div>



                              <div class="form-group">

                                   <textarea name="enquiry" cols="30" rows="10" class="form-control" placeholder="Your enquiry" required></textarea>

                              </div>



                              <button type="submit" class="btn btn-block btn-success">Generate PDF</button>



                                                                  
                        </form>

            </div>
                  

      
</body>
</html>

