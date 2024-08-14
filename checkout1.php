<?php 
 
 include('./dbConnection.php');
session_start();


if(isset($_REQUEST['send'])){
			$order_id = $_POST['ORDER_ID'];
			$stu_email = $_SESSION['stuLogEmail'];
			$course_id = $_SESSION['course_id'];
			$status = "TXN_SUCCESS";
			$respmsg = "Txn Success";
			$amount = $_POST['TXN_AMOUNT'];

		 
			$dcard = $_POST['dcard'];
			$cvv = $_POST['Cvv'];


			
            $date = date('Y-m-d');


			$sql = "INSERT INTO courseorder(order_id, stu_email, course_id, status, respmsg, amount, order_date , debitcard_number,cvv) VALUES ('$order_id', '$stu_email', '$course_id', '$status', '$respmsg', '$amount', '$date','$dcard','$cvv')";
			if ($conn->query($sql) === TRUE) {
				echo "Redirecting to My Profile....";
				echo "<script> setTimeout(() => {
						alert('Payment successful...');
						window.location.href = './Student/myCourse.php';
					  }, 1500); </script>";
			};
			

			}

 

?>


