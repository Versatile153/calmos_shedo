@extends('dashboard.app')
@section('content')
          <div class="dashboard-container">

              <div class="dashboard-inner">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="mb-4">
                  <h3 class="mb-2">Deposit Funds</h3>
                  <p>Add funds using our system's gateway. The deposited amount will be credited to the deposit wallet. You'll just make investments from this wallet.</p>
              </div>
              <div class="text-end mb-3">
                  <a href="/history" class="btn btn--secondary btn--smd"><i class="las la-long-arrow-alt-left"></i> Deposit History</a>
              </div>
              <form action="{{ route('deposits.store') }}" method="post">
                @csrf

                  <input type="hidden" name="currency">
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-12">
                                  <div class="form-group">
                                      <label class="form-label">Select Gateway</label>
                                      <select class="form-select form-control form--control" name="gateway" required>
                                          <option value="">Select One</option>
                                                                                  <option value="Bitcoin"  data-gateway="{&quot;id&quot;:2,&quot;name&quot;:&quot;Bitcoin&quot;,&quot;currency&quot;:&quot;BTC&quot;,&quot;symbol&quot;:&quot;&quot;,&quot;method_code&quot;:1001,&quot;gateway_alias&quot;:&quot;bitcoin&quot;,&quot;min_amount&quot;:&quot;10.00000000&quot;,&quot;max_amount&quot;:&quot;1000000.00000000&quot;,&quot;percent_charge&quot;:&quot;0.00&quot;,&quot;fixed_charge&quot;:&quot;0.00000000&quot;,&quot;rate&quot;:&quot;0.00004700&quot;,&quot;image&quot;:null,&quot;gateway_parameter&quot;:null,&quot;created_at&quot;:&quot;2023-03-10T19:01:33.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-03-12T18:42:56.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:50,&quot;form_id&quot;:19,&quot;code&quot;:&quot;1001&quot;,&quot;name&quot;:&quot;Bitcoin&quot;,&quot;alias&quot;:&quot;bitcoin&quot;,&quot;status&quot;:true,&quot;gateway_parameters&quot;:&quot;[]&quot;,&quot;supported_currencies&quot;:[],&quot;crypto&quot;:0,&quot;extra&quot;:null,&quot;description&quot;:&quot;Please make payment to the Bitcoin wallet address below. Click To Copy&lt;div&gt;&lt;b&gt;bc1qxwdztttvhgpaqf3h8xzmyswt5k3zmq853xuzva&lt;\/b&gt;&lt;br&gt;&lt;\/div&gt;&lt;div&gt;Or scan QR code&lt;\/div&gt;&lt;div&gt;&lt;img src=\&quot;https:\/\/i.imgur.com\/VkyiGDe.png\&quot; width=\&quot;369\&quot;&gt;&lt;br&gt;&lt;\/div&gt;&lt;div&gt;&lt;br&gt;&lt;\/div&gt;&quot;,&quot;created_at&quot;:&quot;2023-03-10T19:01:33.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-03-26T05:51:26.000000Z&quot;}}">Bitcoin</option>
                                                                                  <option value="Etherium"  data-gateway="{&quot;id&quot;:1,&quot;name&quot;:&quot;Ethereum&quot;,&quot;currency&quot;:&quot;Eth&quot;,&quot;symbol&quot;:&quot;&quot;,&quot;method_code&quot;:1000,&quot;gateway_alias&quot;:&quot;ethereum&quot;,&quot;min_amount&quot;:&quot;10.00000000&quot;,&quot;max_amount&quot;:&quot;1000000.00000000&quot;,&quot;percent_charge&quot;:&quot;0.00&quot;,&quot;fixed_charge&quot;:&quot;0.00000000&quot;,&quot;rate&quot;:&quot;0.00064000&quot;,&quot;image&quot;:null,&quot;gateway_parameter&quot;:null,&quot;created_at&quot;:&quot;2023-03-10T18:59:32.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-03-12T19:38:47.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:49,&quot;form_id&quot;:18,&quot;code&quot;:&quot;1000&quot;,&quot;name&quot;:&quot;Ethereum&quot;,&quot;alias&quot;:&quot;ethereum&quot;,&quot;status&quot;:true,&quot;gateway_parameters&quot;:&quot;[]&quot;,&quot;supported_currencies&quot;:[],&quot;crypto&quot;:0,&quot;extra&quot;:null,&quot;description&quot;:&quot;Please make payment to the wallet address below. Click to copy&lt;div&gt;&lt;b&gt;0x8430a3C7452D9C59DBb3Cfe8F7AFd193FDeE87FD&lt;\/b&gt;&lt;br&gt;&lt;\/div&gt;&lt;div&gt;Or scan QR code&lt;\/div&gt;&lt;div&gt;&lt;img src=\&quot;https:\/\/i.imgur.com\/4o6ravd.png\&quot; width=\&quot;377\&quot;&gt;&lt;br&gt;&lt;\/div&gt;&quot;,&quot;created_at&quot;:&quot;2023-03-10T18:59:32.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-03-26T05:51:30.000000Z&quot;}}">Ethereum</option>
                                                                                  <option value="USDT ERC20"  data-gateway="{&quot;id&quot;:3,&quot;name&quot;:&quot;USDT ERC20&quot;,&quot;currency&quot;:&quot;USDT&quot;,&quot;symbol&quot;:&quot;&quot;,&quot;method_code&quot;:1002,&quot;gateway_alias&quot;:&quot;usdt_erc20&quot;,&quot;min_amount&quot;:&quot;10.00000000&quot;,&quot;max_amount&quot;:&quot;1000000.00000000&quot;,&quot;percent_charge&quot;:&quot;0.00&quot;,&quot;fixed_charge&quot;:&quot;0.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;gateway_parameter&quot;:null,&quot;created_at&quot;:&quot;2023-03-10T19:03:05.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-03-12T19:38:11.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:51,&quot;form_id&quot;:20,&quot;code&quot;:&quot;1002&quot;,&quot;name&quot;:&quot;USDT ERC20&quot;,&quot;alias&quot;:&quot;usdt_erc20&quot;,&quot;status&quot;:true,&quot;gateway_parameters&quot;:&quot;[]&quot;,&quot;supported_currencies&quot;:[],&quot;crypto&quot;:0,&quot;extra&quot;:null,&quot;description&quot;:&quot;Please make payment to the USDT (ERC20) wallet address Below. Click To Copy&lt;div&gt;&lt;b&gt;0x8430a3C7452D9C59DBb3Cfe8F7AFd193FDeE87FD&lt;\/b&gt;&lt;\/div&gt;&lt;div&gt;Or scan QR code&lt;\/div&gt;&lt;div&gt;&lt;img src=\&quot;https:\/\/i.imgur.com\/ecLRQuw.jpg\&quot; width=\&quot;378\&quot;&gt;&lt;br&gt;&lt;\/div&gt;&lt;div&gt;&lt;br&gt;&lt;div&gt;&lt;br&gt;&lt;\/div&gt;&lt;\/div&gt;&quot;,&quot;created_at&quot;:&quot;2023-03-10T19:03:05.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-03-26T05:51:17.000000Z&quot;}}">USDT ERC20</option>
                                                                                  <option value="USDT TRC20"  data-gateway="{&quot;id&quot;:4,&quot;name&quot;:&quot;USDT TRC20&quot;,&quot;currency&quot;:&quot;USDT&quot;,&quot;symbol&quot;:&quot;&quot;,&quot;method_code&quot;:1003,&quot;gateway_alias&quot;:&quot;usdt_trc20&quot;,&quot;min_amount&quot;:&quot;10.00000000&quot;,&quot;max_amount&quot;:&quot;1000000.00000000&quot;,&quot;percent_charge&quot;:&quot;0.00&quot;,&quot;fixed_charge&quot;:&quot;0.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;gateway_parameter&quot;:null,&quot;created_at&quot;:&quot;2023-03-12T19:37:35.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-03-12T19:37:54.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:52,&quot;form_id&quot;:24,&quot;code&quot;:&quot;1003&quot;,&quot;name&quot;:&quot;USDT TRC20&quot;,&quot;alias&quot;:&quot;usdt_trc20&quot;,&quot;status&quot;:true,&quot;gateway_parameters&quot;:&quot;[]&quot;,&quot;supported_currencies&quot;:[],&quot;crypto&quot;:0,&quot;extra&quot;:null,&quot;description&quot;:&quot;Please make payment to the USDT (TRC20) wallet address below. Click To Copy&lt;div&gt;&lt;b&gt;TCSRqE6t5C8BoCXVcVdWVFF4bYjHLY1akp&lt;\/b&gt;&lt;br&gt;&lt;\/div&gt;&lt;div&gt;Or scan QR code&lt;\/div&gt;&lt;div&gt;&lt;img src=\&quot;https:\/\/i.imgur.com\/c8z73aR.png\&quot; width=\&quot;368\&quot;&gt;&lt;br&gt;&lt;\/div&gt;&quot;,&quot;created_at&quot;:&quot;2023-03-12T19:37:35.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-03-26T05:51:10.000000Z&quot;}}">USDT TRC20</option>
                                                                              </select>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-group">
                                      <label class="form-label">Amount</label>
                                      <div class="input-group">
                                          <input type="number" step="any" name="amount" class="form-control form--control" value="" autocomplete="off" required>
                                          <span class="input-group-text">USD</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="mt-3 preview-details d-none">
                              <ul class="list-group">
                                  <li class="list-group-item d-flex justify-content-between">
                                      <span>Limit</span>
                                      <span><span class="min fw-bold">0</span> USD - <span class="max fw-bold">0</span> USD</span>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between">
                                      <span>Charge</span>
                                      <span><span class="charge fw-bold">0</span> USD</span>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between">
                                      <span>Payable</span> <span><span class="payable fw-bold"> 0</span> USD</span>
                                  </li>
                                  <li class="list-group-item justify-content-between d-none rate-element">

                                  </li>
                                  <li class="list-group-item justify-content-between d-none in-site-cur">
                                      <span>In <span class="base-currency"></span></span>
                                      <span class="final_amo fw-bold">0</span>
                                  </li>
                                  <li class="list-group-item justify-content-center crypto_currency d-none">
                                      <span>Conversion with <span class="method_currency"></span> and final value will Show on next step</span>
                                  </li>
                              </ul>
                          </div>
                          <button type="submit" class="btn btn--base w-100 mt-3">Submit</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>


          </div>
      </div>
  </div>
  {{-- <script src="//code.tidio.co/cwyzhn9yovqes3ei913gkoymswdgbwjd.js" async></script> --}}


      <script src="https://calamosassets.net/share/assets/global/js/jquery-3.6.0.min.js"></script>
      <script src="https://calamosassets.net/share/assets/global/js/bootstrap.bundle.min.js"></script>

      <!-- Pluglin Link -->
      <script src="https://calamosassets.net/share/assets/templates/invester/js/lib/slick.min.js"></script>
      <script src="https://calamosassets.net/share/assets/templates/invester/js/lib/magnific-popup.min.js"></script>
      <script src="https://calamosassets.net/share/assets/templates/invester/js/lib/apexcharts.min.js"></script>


      <!-- Main js -->
      <script src="https://calamosassets.net/share/assets/templates/invester/js/main.js"></script>

          <script>
          (function ($) {
              "use strict";
              $('select[name=gateway]').change(function(){
                  if(!$('select[name=gateway]').val()){
                      $('.preview-details').addClass('d-none');
                      return false;
                  }
                  var resource = $('select[name=gateway] option:selected').data('gateway');
                  var fixed_charge = parseFloat(resource.fixed_charge);
                  var percent_charge = parseFloat(resource.percent_charge);
                  var rate = parseFloat(resource.rate)
                  if(resource.method.crypto == 1){
                      var toFixedDigit = 8;
                      $('.crypto_currency').removeClass('d-none');
                  }else{
                      var toFixedDigit = 2;
                      $('.crypto_currency').addClass('d-none');
                  }
                  $('.min').text(parseFloat(resource.min_amount).toFixed(2));
                  $('.max').text(parseFloat(resource.max_amount).toFixed(2));
                  var amount = parseFloat($('input[name=amount]').val());
                  if (!amount) {
                      amount = 0;
                  }
                  if(amount <= 0){
                      $('.preview-details').addClass('d-none');
                      return false;
                  }
                  $('.preview-details').removeClass('d-none');
                  var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                  $('.charge').text(charge);
                  var payable = parseFloat((parseFloat(amount) + parseFloat(charge))).toFixed(2);
                  $('.payable').text(payable);
                  var final_amo = (parseFloat((parseFloat(amount) + parseFloat(charge)))*rate).toFixed(toFixedDigit);
                  $('.final_amo').text(final_amo);
                  if (resource.currency != 'USD') {
                      var rateElement = `<span class="fw-bold">Conversion Rate</span> <span><span  class="fw-bold">1 USD = <span class="rate">${rate}</span>  <span class="base-currency">${resource.currency}</span></span></span>`;
                      $('.rate-element').html(rateElement)
                      $('.rate-element').removeClass('d-none');
                      $('.in-site-cur').removeClass('d-none');
                      $('.rate-element').addClass('d-flex');
                      $('.in-site-cur').addClass('d-flex');
                  }else{
                      $('.rate-element').html('')
                      $('.rate-element').addClass('d-none');
                      $('.in-site-cur').addClass('d-none');
                      $('.rate-element').removeClass('d-flex');
                      $('.in-site-cur').removeClass('d-flex');
                  }
                  $('.base-currency').text(resource.currency);
                  $('.method_currency').text(resource.currency);
                  $('input[name=currency]').val(resource.currency);
                  $('input[name=method_code]').val(resource.method_code);
                  $('input[name=amount]').on('input');
              });
              $('input[name=amount]').on('input',function(){
                  $('select[name=gateway]').change();
                  $('.amount').text(parseFloat($(this).val()).toFixed(2));
              });
          })(jQuery);
      </script>


      <link rel="stylesheet" href="https://calamosassets.net/share/assets/global/css/iziToast.min.css">
  <script src="https://calamosassets.net/share/assets/global/js/iziToast.min.js"></script>

  <script>
      "use strict";
      function notify(status,message) {
          iziToast[status]({
              message: message,
              position: "topRight"
          });
      }
  </script>

      <script>
          $(".langSel").on("change", function() {
              window.location.href = "https://calamosassets.net/share/change/" + $(this).val();
          });

          let headings = $('.table th');
          let rows = $('.table tbody tr');
          let columns
          let dataLabel;
          $.each(rows, function(index, element) {
              columns = element.children;
              if (columns.length == headings.length) {
                  $.each(columns, function(i, td) {
                      dataLabel = headings[i].innerText;
                      $(td).attr('data-label', dataLabel)
                  });
              }
          });

          $.each($('input, select, textarea'), function(i, element) {
              var elementType = $(element);
              if(elementType.attr('type') != 'checkbox'){
                  if (element.hasAttribute('required')) {
                      $(element).closest('.form-group').find('label').addClass('required');
                  }
              }
          });

          var inputElements = $('[type=text],[type=password],[type=email],[type=number],select,textarea');
          $.each(inputElements, function (index, element) {
              element = $(element);
              element.closest('.form-group').find('label').attr('for',element.attr('name'));
              element.attr('id',element.attr('name'))
          });

          $('.policy').on('click',function(){
              $.get('https://calamosassets.net/share/cookie/accept', function(response){
                  $('.cookies-card').addClass('d-none');
              });
          });


          setTimeout(function() {
              $('.cookies-card').removeClass('hide')
          }, 2000);
      </script>
  </body>

  </html>
@endsection
