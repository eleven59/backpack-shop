<html>
<head>
    <title>Payment result: {{ $payment_result['status'] }}</title>
</head>
<body>
Thank you for your order.<br>
Payment result: {{ $payment_result['status'] }}<br>
Message: {{ $payment_result['msg'] }}<br>
@if(env("APP_DEBUG"))
    Use the config/eleven59/backpack-shop.php file to use another view for this page. See also <a href="https://github.com/eleven59/backpack-shop/blob/main/docs/usage.md#34-processing-payment-and-order-confirmation" target="_blank">documentation</a>
@endif
</body>
</html>
