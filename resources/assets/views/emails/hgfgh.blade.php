<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WhoGoHost - Invoice #566936</title>

    <link href="/host/templates/customSeven/css/all.min.css" rel="stylesheet">
    <link href="/host/templates/customSeven/css/invoice.css" rel="stylesheet">
    
     
       
    

<link id="load-css-button.min.css" rel="stylesheet" type="text/css" href="https://paystack.com/public/css/button.min.css"></head>
<body>

    <div class="container-fluid invoice-container">

        
            <div class="row invoice-header">
                <div class="invoice-col">

                                            <p><img src="https://www.whogohost.com/images/logo.png" title="WhoGoHost"></p>
                                        <h3>Invoice #566936</h3>

                </div>
                <div class="invoice-col text-center">

                    <div class="invoice-status">
                                                    <span class="unpaid">Unpaid</span>
                                            </div>

                                            <div class="small-text">
                            Due Date: 15/09/2019
                        </div>
                        <div class="payment-btn-container hidden-print" align="center">
                            <p><img style="width:140px;" src="/host/modules/gateways/paystack-logo.png"></p><form target="hiddenIFrame" action="about:blank">

            <script src="https://js.paystack.co/v1/inline.js"></script>

            <div class="payment-btn-container2" style="display: none;"></div>

            <script>

                // load jQuery 1.12.3 if not loaded

                (typeof $ === 'undefined') && document.write("<scr" + "ipt type=\"text\/javascript\" src=\"https:\/\/code.jquery.com\/jquery-1.12.3.min.js\"><\/scr" + "ipt>");

            </script><script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>

            <script>

                $(function() {

                    var paymentMethod = $('select[name="gateway"]').val();

                    if (paymentMethod === 'paystack') {

                        $('.payment-btn-container2').hide();

                        var toAppend = '<button type="button" onclick="payWithPaystack()" class="btn btn-success"> Pay Now</button>';

                        $('.payment-btn-container').append(toAppend);

                       if($('.payment-btn-container').length===0){

                         $('select[name="gateway"]').after(toAppend);

                       }

                    }

                });

            </script>

        </form>

        <div class="hidden" style="display:none"><iframe name="hiddenIFrame"></iframe></div>

        <script>

            var paystackIframeOpened = false;

            var paystackHandler = PaystackPop.setup({

              key: 'pk_live_e2e78742bdce35d86dd30f80a86e3820c006b720',

              email: 'sensesamgroup@gmail.com',

              phone: '8130851743',

              amount: 689964,

              metadata: {

                invoiceid: '566936',

                customername: 'tasha mike',

                custom_fields: [

                  {

                    display_name: "Invoice ID",

                    variable_name: "invoice_id",

                    value: '566936'

                  },

                  {

                    display_name: "Customer Name",

                    variable_name: "customer_name",

                    value: 'tasha mike',

                  }

                ]

              },

              callback: function(response){

                window.location.href = 'https://www.whogohost.com/host/modules/gateways/callback/paystack.php?invoiceid=566936&email=sensesamgroup%40gmail.com&phone=8130851743&amountinkobo=689964&customername=tasha+mike&trxref=' + response.trxref;

              },

              onClose: function(){

                  paystackIframeOpened = false;

              }

            });

            function payWithPaystack(){

                if (paystackHandler.fallback || paystackIframeOpened) {

                  // Handle non-support of iframes or

                  // Being able to click PayWithPaystack even though iframe already open

                  window.location.href = 'https://www.whogohost.com/host/modules/gateways/callback/paystack.php?invoiceid=566936&email=sensesamgroup%40gmail.com&phone=8130851743&amountinkobo=689964&customername=tasha+mike&go=standard';

                } else {

                  paystackHandler.openIframe();

                  paystackIframeOpened = true;

                  $('img[alt="Loading"]').hide();

                  $('div.alert.alert-info.text-center').html('Click the button below to retry payment...');

                  $('.payment-btn-container2').append('<button type="button" onclick="payWithPaystack()">Pay Now</button>');

                }

           }

           

        </script>
                        <button type="button" onclick="payWithPaystack()" class="btn btn-success"> Pay Now</button></div>
                    
                </div>
            </div>

            <hr>

            
            <div class="row">
                <div class="invoice-col right">
                    <strong>Pay To</strong>
                    <address class="small-text">
                        Account Name: WhoGoHost Limited<br>
Account No/Bank: 0114023729 (GTBank)<br>
Account No/Bank: 1013173318 (Zenith)<br>
Account No/Bank: 0039691957 (Union)<br>
TIN: 12001705-0001
                                            </address>
                </div>
                <div class="invoice-col">
                    <strong>Invoiced To</strong>
                    <address class="small-text">
                                                tasha mike<br>
                        deded, yaho, <br>
                        yaba, Lago, 98798<br>
                        Niger
                                                                    </address>
                </div>
            </div>

            <div class="row">
                <div class="invoice-col right">
                    <strong>Payment Method</strong><br>
                    <span class="small-text">
                                                    <form method="post" action="/host/viewinvoice.php?id=566936" class="form-inline">
                                <input type="hidden" name="token" value="3ac5d66baa25ea4767acdd9c748d8d99f4fc5988"><select class="form-control select-inline" onchange="submit()" name="gateway"><option value="paystack" selected="selected">Paystack (Subscription)</option></select>
                            </form>
                                            </span>
                    <br><br>
                </div>
                <div class="invoice-col">
                    <strong>Invoice Date</strong><br>
                    <span class="small-text">
                        12/09/2019<br><br>
                    </span>
                </div>
            </div>

            <br>

            
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Invoice Items</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Description</strong></td>
                                    <td width="20%" class="text-center"><strong>Amount</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                                                    <tr>
                                        <td>Aspire (2GB) Linux Shared Hosting - paxful-review.com (12/09/2019 - 11/03/2020) *</td>
                                        <td class="text-center">$8.37USD</td>
                                    </tr>
                                                                    <tr>
                                        <td>Domain Registration - paxful-review.com - 1 Year/s (12/09/2019 - 11/09/2020) *</td>
                                        <td class="text-center">$10.88USD</td>
                                    </tr>
                                                                <tr>
                                    <td class="total-row text-right"><strong>Sub Total</strong></td>
                                    <td class="total-row text-center">$18.33USD</td>
                                </tr>
                                                                    <tr>
                                        <td class="total-row text-right"><strong>5.00% VAT</strong></td>
                                        <td class="total-row text-center">$0.92USD</td>
                                    </tr>
                                                                                                <tr>
                                    <td class="total-row text-right"><strong>Credit</strong></td>
                                    <td class="total-row text-center">$0.00USD</td>
                                </tr>
                                <tr>
                                    <td class="total-row text-right"><strong>Total</strong></td>
                                    <td class="total-row text-center">$19.25USD</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

                            <p>* Indicates a taxed item.</p>
            
            <div class="transactions-container small-text">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td class="text-center"><strong>Transaction Date</strong></td>
                                <td class="text-center"><strong>Gateway</strong></td>
                                <td class="text-center"><strong>Transaction ID</strong></td>
                                <td class="text-center"><strong>Amount</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                                                            <tr>
                                    <td class="text-center" colspan="4">No Related Transactions Found</td>
                                </tr>
                                                        <tr>
                                <td class="text-right" colspan="3"><strong>Balance</strong></td>
                                <td class="text-center">$19.25USD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="pull-right btn-group btn-group-sm hidden-print">
                <a href="javascript:window.print()" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                <a href="dl.php?type=i&amp;id=566936" class="btn btn-default"><i class="fas fa-download"></i> Download</a>
            </div>

        
    </div><iframe frameborder="0" allowtransparency="true" id="tPYSH" name="paystack-checkout-background-tPYSH" style="z-index: 2147483647; background: rgba(0, 0, 0, 0.75); border: 0px none transparent; overflow: hidden; margin: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; transition: opacity 0.3s ease 0s; visibility: hidden; display: none;"></iframe><iframe frameborder="0" allowtransparency="true" id="9Ipn7" name="paystack-checkout-9Ipn7" src="https://checkout.paystack.com/popup" style="z-index: 2147483647; background: transparent; border: 0px none transparent; overflow: hidden; margin: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; visibility: visible; display: none;"></iframe>

    <p class="text-center hidden-print"><a href="clientarea.php">« Back to Client Area</a></p>



</body></html>