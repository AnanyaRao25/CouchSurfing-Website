<?php
require('config.php');
?>
<form action="submit.php" method="POST">
	<script type="text/javascript"
	src="https://checkout.stripe.com/checkout.js" class="stripe-button" 
	data-key="<?php echo $publish_key?>"
	data-amt="200"
	data-name="ADAM SMITH"
	data-currency="INR"
	>
		
	</script>
</form>