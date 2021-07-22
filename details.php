<!doctype html>
<html lang="en">

<?php
    include("functions.php");
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
   
  <title>Customer Details</title>
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
        
        <li class="nav-item active">
                    <a class="nav-link" href="customers.php">View Customers </a>
                </li>
    <li class="nav-item ">
                    <a class="nav-link" href="allhistory.php">All transactions</a>
                </li>
      </ul>
      
    </div>
  </nav>
<br>
<br>
<br>
      <div class="container my-9">
        <?php
            if(isset($_GET['customer_id'])) {
                $c_id = $_GET['customer_id'];
                $get_customer = "select * from customer where id='$c_id'";
                $run_customer = mysqli_query($conn, $get_customer);
                while($row_customer = mysqli_fetch_array($run_customer)) {
                    $c_id = $row_customer['id'];
                    $customer_name = $row_customer['name'];
                    $customer_email = $row_customer['email'];
                    $Current_Balance = $row_customer['CurrentBalance'];
                    echo"
   
                        <table class='table table-bordered' style='text-align: center; font-size: 18px;'>
                            <tr>
                                <th scope='col'>c_id</th>
                                <td>$c_id</td>
                            </tr>
                            <tr>
                                <th scope='col'>Customer Name</th>
                                <td>$customer_name</td>
                            </tr>
                            <tr>
                                <th scope='col'>Customer Email</th>
                                <td>$customer_email</td>
                            </tr>
                            <tr>
                                <th scope='col'> Balance</th>
                                <td>$Current_Balance</td>
                            </tr>
                        </table>
                        </div>
                          <br>

                        <div class='row'>
                            <div class='col-12'>
                                <center>
                                    <button class='btn.btn-primary'>
                                        <a href='customers.php' style='text-decoration: none;'>Back to all customers</a>
                                    </button>
                                </center>
                  <br>
				  
                            <div class='col-12 '>
                                <center>
                                    <button class='btn.btn-primary'>
                                        <a href='transfer.php?customer_id=$c_id' style='text-decoration: none;'>Transfer Money</a>
                                    </button>
                                </center>
                            </div>
                        </div>
                    ";
                }
            }
        ?>
    </div>
     








</body>

</html>