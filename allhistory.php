<!doctype html>
<html lang="en">

<?php
    include("functions1.php");
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap"
    rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <title> Customer</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand" href=""></i>SPARK BANK<i class="fa fa-university" aria-hidden="true"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
       
        <li class="nav-item active ">
                    <a class="nav-link" href="customers.php"> View customers </a>

                </li>
				<li class="nav-item ">
                    <a class="nav-link" href="allhistory.php">All transactions</a>
                </li>
      </ul>
      
    </div>
  </nav>

    <br>
<center><b><h1>All TRANSACTIONS</b></h1></center>
<BR>
    <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Transfer_date</th>
                        <th scope="col">From_acc </th>
                        <th scope="col">From_acc_name </th>
                        <th scope="col">To_acc</th>
						<th scope="col">Transfer_amt</th>
						<th scope="col">Transfer_msg</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        get_transfers();
                    ?>
                </tbody>
            </table>
        </div>
 


 



  
</body>

</html>