<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<center><p><strong>GEFORCE GTX 1080 </strong></p>
  <p><img src="../gtx1080.jpg" alt="GTX 1080" style="width:300px; height:250px;"/></p>
	
	<form id="checkout" method="post" action="/pagar">
  	<div id="payment-form"></div>
  	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

  	<input type="submit" value="Pagar $599">
	</form>
 </center>

<script src="https://js.braintreegateway.com/js/braintree-2.24.0.min.js"></script>
<script>
var clientToken = "<?php echo $clientToken; ?>";
braintree.setup(clientToken, "dropin", {
  container: "payment-form",
	paypal: {
	 button: {
		 type: 'checkout'
	 }
 }
});
</script>
</body>
</html>
