<article class="row">
        <div class="col-lg-12"> 
			<h3>You will be redirect to the payment in a moment ........</h3>
        </div>
</article>

<?php 
//print_r($model->packagePrice);
?>
<Form method="post" action="<?=$payment->postUrl?>" id="payment-form" style="display:none">
	<input type="text" id="paymentGatewayID" name="paymentGatewayID" value="<?php echo $payment->paymentGatewayID?>" />
	<input type="text" id="invoiceNo" name="invoiceNo" value="<?php echo $model->id ?>" />
	<input type="text" id="productDesc" name="productDesc" value="<?php echo $model->trip_name?>" />
	<input type="text" id="amount" name="amount" value="<?php echo $model->formatAmount;?>" />
<!--	<input type="text" id="amount" name="amount" value="000000000100" />-->
	<input type="text" id="currencyCode" name="currencyCode" value="<?php echo $payment->currencyCode?>" />
	<input type="text" id="hashValue" name="hashValue" value="<?php echo $payment->getHash()?>"/>
	<input type="submit" value="Pay">
</Form>

<?php
$js = <<< JS
	$('#payment-form').submit();
JS;

$this->registerJS($js);
?>