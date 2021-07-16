<?php
require('stripe-php-master/init.php');

$publish_key="pk_test_51JC7s4SCUVse7kAXGn70SFPFmGIO7ZCbQv6uUCjoHd4IPTMCVw1bAAerRqueLtFL3c7l0uQwacHIYThu2wYW61Yy00dG1PGNcU";
$secret_key="sk_test_51JC7s4SCUVse7kAX3Y3UlnyngykZJYZ0jT8HUXVg7AV3I3W3kcZJh9vwK1aMOjJMfljR29W0ClVu6LlCOtee3Wv600oXVQDlNL";

\Stripe\Stripe::setApiKey($secret_key);
?>