<?php
$conn = mysqli_connect("localhost","root","", "hdfc_bank");
function get_transfers(){
    global $conn;
$get_transfers="SELECT * FROM transfers";
$run_transfers=mysqli_query($conn, $get_transfers);
While($row_transfers=mysqli_fetch_array($run_transfers)){
            $transfers_transfer_date=$row_transfers['transfer_date'];
            $transfers_from_acc = $row_transfers['from_acc'];
            $transfers_from_acc_name= $row_transfers['from_acc_name'];
            $transfers_to_acc = $row_transfers['to_acc'];
			$transfers_transfer_amt = $row_transfers['transfer_amt'];
			$transfers_transfer_msg= $row_transfers['transfer_msg'];
            echo
      "<tr>
            <td>$transfers_transfer_date</td>
            <td>$transfers_from_acc </td>
            <td>$transfers_from_acc_name</td>
            <td>$transfers_to_acc</td>
			<td>$transfers_transfer_amt</td>
			<td>$transfers_transfer_msg</td>
            </tr>
    ";
        }
    }
    ?>

            





















   