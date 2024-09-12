
<html> 

<head> 
	<meta charset="UTF-8"> 
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0"> 
	<title>Online Payment-Page</title> 
	<link rel="stylesheet" href="style.css"> 
</head> 

<body> 
	<div class="container"> 

		<form action="buk_flight3.php" method="POST"> 

			<div class="row"> 

				<div class="col"> 
				
				<div class="col"> 
					<h3 class="title" style="margin-left: 280px;">Payment</h3>

					<div class="inputBox"> 
						<label for="name"> 
							Card Accepted: 
						</label> 
						<img src="payment-logos.png" style="margin-left: 250px" 
							alt="credit/debit card image"> 
					</div> 

					<div class="inputBox"> 
						<label for="cardName"> 
							Name On Card: 
						</label> 
						<input type="text" id="cardName" name="cname" 
							placeholder="Enter card name"
							required> 
					</div> 

					<div class="inputBox"> 
						<label for="cardNum"> 
							Credit Card Number: 
						</label> 
						<input type="text" id="cardNum"
							placeholder="1111-2222-3333-4444"
							maxlength="19" required> 
					</div> 

					<div class="inputBox"> 
						<label for="">Exp Month:</label> 
						<select name="" id=""> 
							<option value="">Choose month</option> 
							<option value="January">January</option> 
							<option value="February">February</option> 
							<option value="March">March</option> 
							<option value="April">April</option> 
							<option value="May">May</option> 
							<option value="June">June</option> 
							<option value="July">July</option> 
							<option value="August">August</option> 
							<option value="September">September</option> 
							<option value="October">October</option> 
							<option value="November">November</option> 
							<option value="December">December</option> 
						</select> 
					</div> 


					<div class="flex"> 
						<div class="inputBox"> 
							<label for="">Exp Year:</label> 
							<select name="" id=""> 
								<option value="">Choose Year</option> 
								<option value="2023">2023</option> 
								<option value="2024">2024</option> 
								<option value="2025">2025</option> 
								<option value="2026">2026</option> 
								<option value="2027">2027</option> 
								<option value="2027">2028</option> 
								<option value="2027">2029</option> 
								<option value="2027">2030</option> 
							</select> 
						</div> 

						<div class="inputBox"> 
							<label for="cvv">CVV</label> 
							<input type="number" id="cvv"
								placeholder="123" required> 
						</div> 
					</div> 

				</div> 

			</div> 

			<input type="submit" value="Proceed to Checkout"
				class="submit_btn"> 
		</form> 

	</div> 
	<script type="text/javascript" src="index.js"></script> 
</body> 

</html>
