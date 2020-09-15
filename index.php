<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container  card">
		<form method="POST" action="insert.php">
		  <div class="form-group">
		    <label for="product_name">Product Name</label>
		    <input type="text" class="form-control" id="product_name" placeholder="Enter name" name="product_name">
		    
		  </div>
		  <div class="form-group">
		    <label for="description">Description</label>
		    <input type="text" class="form-control" id="description" placeholder="Description" name="description">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Add</button>		  
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>