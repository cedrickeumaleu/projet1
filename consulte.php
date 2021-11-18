<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Lobster&family=Vollkorn:ital,wght@0,900;1,400;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>
    <title>Hello,world</title>


</head>
<body>
    
      <div>
            <table id="table_id" class ="display">
                <thead>
                <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Téléphone</th>
                    <th>E-mail</th>
                    <th>Objet</th>
                    <th>Message</th>
                </tr>
                </thead>
                <tbody>
                <?php
        include('connection.php');

        $query = "SELECT * FROM contact";
        $result = mysqli_query($connection, $query);

        while($ligne=mysqli_fetch_array($result)){
            echo'
                <tr>
                   <td>'.$ligne['prenom'].'</td>
                   <td>'.$ligne['nom'].'</td>
                   <td>'.$ligne['tél'].'</td>
                   <td>'.$ligne['email'].'</td>
                   <td>'.$ligne['objet'].'</td>
                   <td>'.$ligne['message'].'</td>
                </tr>
            
            ';
        }
        ?>

                </tbody>
            </table>
        </div>
        
       </div>   
    
       <footer class="mt-5">
        <div class="container-fluid bg-faded mt-5">
          <div class="container">
            <div class="row py-3">
              <!-- footer column 1 start -->
              <div class="col-md-4">
                <!-- row start -->
                <div class="row py-2">
                  <div class="col-sm-3 hidden-md-down">
                    <a class="bg-circle bg-info" href="https://twitter.com/ ">
                      <i class="fa fa-2x fa-fw fa-twitter" aria-hidden="true "></i>
                    </a>
                  </div>
                  <div class="col-sm-9">
                    <h4>Tweets</h4>
                    Embed here?
                  </div>
                </div>
                <!-- row end -->
              </div>
              <!-- footer column 1 end -->
              <!-- footer column 2 start -->
              <div class="col-md-4">
                <!-- row start -->
                <div class="row py-2">
                  <div class="col-sm-3 hidden-md-down">
                    <a class="bg-circle bg-info" href="consultation.html">
                      <i class="fa fa-2x fa-fw fa-address-card" aria-hidden="true "></i>
                    </a>
                  </div>
                  <div class="col-sm-9">
                    <h4>Confirmation</h4>
                    <p>cedric@masterpromakup.org<br>0755612575</p>
                  </div>
                </div>
                <!-- row end -->
                <!-- row start -->
                <div class="row py-2">
                  <div class="col-sm-3 hidden-md-down">
                    <a class="bg-circle bg-info" href="#">
                      <i class="fa fa-2x fa-fw fa-laptop" aria-hidden="true "></i>
                    </a>
                  </div>
                  <div class="col-sm-9">
                    <h4>Cookie policy</h4>
                    <p class=" ">We use <a class=" " href="/# ">cookies </a></p>
                  </div>
                </div>
                <!-- row end -->
              </div>
              <!-- footer column 2 end -->
              <!-- footer column 3 start -->
              <div class="col-md-4">
                <!-- row starting  -->
                <div class="row py-2">
                  <div class="col-sm-3 hidden-md-down">
                    <a class="bg-circle bg-danger" href="# ">
                      <i class="fa fa-2x fa-fw fa-file-pdf-o" aria-hidden="true "></i>
                    </a>
                  </div>
                  <div class="col-sm-9">
                    <h4>Download pdf</h4>
                    <p> You like print?</a></p>
      
                  </div>
                </div>
                <!-- row ended -->
                <!-- row starting  -->
                <div class="row py-2">
                  <div class="col-sm-3 hidden-md-down">
                    <a class="bg-circle bg-info" href="https://twitter.com/ ">
                      <i class="fa fa-2x fa-fw fa-info" aria-hidden="true "></i>
                    </a>
                  </div>
                  <div class="col-sm-9">
                    <h4>Info</h4>
                    About us.
                  </div>
                </div>
                <!-- row ended -->
              </div>
              <!-- footer column 3 end -->
            </div>
          </div>
        </div>
      
      
        <div class="container-fluid bg-primary py-3">
          <div class="container">
            <div class="row py-3">
              <div class="col-md-9">
                <p class="text-white">suivez nous également sur :</p>
              </div>
              <div class="col-md-3">
                <div class="d-inline-block">
                  <div class="bg-circle-outline d-inline-block">
                    <a href="https://www.facebook.com/cedrick.lahkam" class="text-white"><i class="fa fa-2x fa-fw fa-facebook"></i>
              </a>
                  </div>
      
                  <div class="bg-circle-outline d-inline-block">
                    <a href="https://twitter.com/cedrick.lahkam" class="text-white">
                      <i class="fa fa-2x fa-fw fa-twitter"></i></a>
                  </div>
      
                  <div class="bg-circle-outline d-inline-block">
                    <a href="https://www.linkedin.com/company/" class="text-white">
                      <i class="fa fa-2x fa-fw fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>


      <script>$(document).ready( function () {$('#table_id').DataTable();} );
</script>


</body>
</html>