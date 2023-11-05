<!DOCTYPE html>
<html>
<head>
   <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

	<link rel="stylesheet" href="../style/styler.css">
    <!-- <link rel="stylesheet" href="awesome.min.css"> -->
	<title>Registration</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="#">
				
				<!-- <div class="social-container">	 -->
					<h1>Registration</h1>
				<!-- </div> -->
				<!-- <span>or use your account</span> -->
				<input type="text" name="name" placeholder="Name" />
				<input type="text" name="address"  placeholder="Address" />
				<select class="select" name="district"  required>
                    <option  disabled="disabled" selected="selected">District</option>
					      <!--php  -->
                 </select>
				 <input type="number" name="pin" placeholder="Pin" />
				<input type="email" name="email" placeholder="Email" />
				<input type="number" name="phone" placeholder="Phone" />
				<input type="number" name="ano" placeholder="Adhaar Number" />
				<input type="email" name="pan" placeholder="Pan Number" />
				<input type="password" name="password" placeholder="Password" />
				<input type="password" name="cpassword" placeholder="Confirm Password" />
				<button>Submit</button>
		
			</form>
		</div>
	</div>

</body>
</html>