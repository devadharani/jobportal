<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<script src="https://www.paypal.com/sdk/js?client-id=AeYOa6HWGZYqkwUlPS3lw7CULaLnRRrBOfDWhTbkL41KU5I32gibYd8irNAcOYK04tnbFs4C45IBtkEl"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
</script>
<div class="row">
    <div class="container" style="width:500px;">
<div id="paypal-button-container"></div>
    </div>
</div>
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '0.01'
                    }
                }]
            });
        },onApprove: function(data, actions) {
            // This function captures the funds from the transaction.
            return actions.order.capture().then(function(details) {
                // This function shows a transaction success message to your buyer.
               alert('Transaction completed by ' + details.payer.name.given_name);
                window.location.replace("http://127.0.0.1:8000/home");
                return fetch('/transaction_complete', {
                    method: 'post',
                    headers: {
                        'content-type': 'application/json'
                    },
                    body: JSON.stringify({
                        "_token":'{{ csrf_token() }}',
                        "orderID": data,
                    }),
                }
                );
                //redirect
            });
        },
        onCancel: function (data) {
            window.location.replace("http://127.0.0.1:8000/home");
        },
        onError: function (err) {
            window.alert(err);
        }
    }).render('#paypal-button-container');
    // This function displays Smart Payment Buttons on your web page.

</script>
</body>
</html>
