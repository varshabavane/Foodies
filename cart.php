<?php include("header.php") ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<title>productDetails</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
	<div class="table-responsive">
		

	<table class="table" border="1px" border-color="grey">
		<caption><h3><b><center>productDetails</center></b></h3></caption>
		<thead>
			<tr>
				<th>check</th>
				<th>Id</th>
				<th>ProductName</th>
				<th>price in <i class="fa fa-rupee" style="font-size:24px"></i></th>
				<th>image</th>
				<th>description</th>
				<th>date</th>
				<th>time</th>
				<th>status</th>
				<th>view</i></th>
				<th>edit</i></th>
				<th>delete</i></th>
			</tr>
		</thead>
		
				<?php
			  include("libs/config.php");
			  error_reporting(0);
              $fetch_image = "SELECT * from `add_product` ";
              $found = mysqli_query($conn, $fetch_image);
              while ($row = mysqli_fetch_array($found)) {
                $id=$row['id'];
                
                echo '<tbody>
                <tr>
              <td><input type="checkbox"></td>
                <td class="product-name"><a href="#">'.$row['id'].'</a></td>
                <td class="product-price"><span class="amount">'.$row['product name'].'</span></td>
                <td class="product-subtotal">'.$row['price'].'</td>
                <td class="product-thumbnail">
                <div id="img">
				<img src="assets/img/product/'.$row['image'].'" alt="" height="100px;" width="100px;"></div></td>
				<td class="product-name"><a href="#">'.$row['description'].'</a></td>
				<td class="product-name"><a href="#">'.$row['date'].'</a></td>
				<td class="product-name"><a href="#">'.$row['time'].'</a></td>
				<td class="product-name"><a href="#">'.$row['status'].'</a></td>
				<td class="product-view"><a href="#"><i class="fa fa-eye"></i></a></td>
				<td class="product-edit"><a href="#"><i class="fa fa-edit"></i></a></td>
                <td class="product-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                </tr>
                </tbody>'
                ;}?>
              
				
		
	</table>
</div>	
</div>
</body>
</html>
<?php include("footer.php") ?>