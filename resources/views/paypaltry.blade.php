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
<div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
    paypal.Button.render({
        env: 'sandbox', // Optional: specify 'sandbox' environment
        client: {
            sandbox:    'AeYOa6HWGZYqkwUlPS3lw7CULaLnRRrBOfDWhTbkL41KU5I32gibYd8irNAcOYK04tnbFs4C45IBtkEl',
            production: 'xxxxxxxxx'
        },
        commit: true, // Optional: show a 'Pay Now' button in the checkout flow
        payment: function (data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: {
                                total: '1.00',
                                currency: 'USD'
                            }
                        }
                    ]
                }
            });
        },
        onAuthorize: function (data, actions) {
            // Get the payment details
            return actions.payment.get()
                .then(function (paymentDetails) {
                    // Show a confirmation using the details from paymentDetails
                    // Then listen for a click on your confirm button
                    document.querySelector('#confirm-button')
                        .addEventListener('click', function () {
                            // Execute the payment
                            return actions.payment.execute()
                                .then(function () {
                                    Window.alert('transaction completed');
                                });
                        });
                });
        },
        onError: function (err) {
            //Window.alert('error in transaction');
        }
    }, '#paypal-button');
    </script>
