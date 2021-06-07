<?php session_start(); include '../../../Config/page.php';  include '../../../Config/conn.php'; 

   $row = $dbconnect->query("SELECT journal_id, account_date, debit, credit, total_debit, total_credit FROM journal GROUP BY journal_id, account_date ");
   $row_t1 = $dbconnect->query("SELECT total_debit, SUM(total_debit) AS total_1 FROM journal");
   $row_t2 = $dbconnect->query("SELECT total_credit, SUM(total_credit) AS total_2 FROM journal");
?>

<!DOCTYPE html>
<html>
<head>
<title>Journal Ensyse Transaction</title>

<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
<script type="text/javascript" src="../../assets/js/jquery.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.js"></script>

</head>
<body>
<!-- cek apakah sudah login -->

<div class="container">
	
	<div class="col-md-10 col-md-offset-1">								
	<center><h3><b> ENSYSe TRANSACTION</b></h3></center> <hr>
			
			<br>
			<br>
			<h3>JOURNAL</h3>

			
			<br/>

				
				<table style="width: 100%">
					<tr>
						<th width="1%">No.</th>
			            <th>Date</th>
			            <th>Debit</th>
			            <th>Credit</th>
			            <th>Total Debit</th>
			            <th>Total Credit</th>
					</tr>

					<?php if ($row->rowCount() > 0){
              $no = 1;
              while($data = $row->fetch()){
            ?>

            <tr>
            	
                <td><center><?php echo $no ?></td>
                <td><center><?php echo $data['account_date'] ?></td>
                <td><center><?php echo $data['debit'] ?></td>
                <td><center><?php echo $data['credit'] ?></td>
                <td><center><?php echo $data['total_debit'] ?></td>
                <td><center><?php echo $data['total_credit'] ?></td>
            </tr>
            </tr>

             <?php $no++ ; }} ?>

             <?php $data = $row_t1->fetch() ?>
             <tr>
             <tr style="font-weight: bold;">
                <td colspan="0">TOTAL</td>
                <td></td>
                <td></td>
                <td></td>
                <td><center><?php echo $data['total_1'] ?></td>
                <?php $data = $row_t2->fetch() ?>
                <td><center><?php echo $data['total_2'] ?></td>
				</table>
					<p>
					<p><center><i>"ENSYSE-TRANSACTION"</i></center></p>

		</div>


	</div>

	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>