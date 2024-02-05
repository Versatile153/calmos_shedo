@extends('dashboard.app')
@section('content')
  <script>
  function loadGoogleTranslate() {
      new google.translate.TranslateElement ("google_element");
  }
  </script>
          <div class="dashboard-container">
            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
                  <div class="bg--light">
          <div class="dashboard-inner ">
              <div class="mb-4">
                  <div class="row mb-4">
                      <div class="col-lg-8">
                          <h3 class="mb-2">Investment Plan</h3>
                      </div>
                  </div>
                  <div class="row gy-4">
                      <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="plan-item style--two text-center mw-100 w-100 h-100">
              <div class="plan-item__header">
                  <h4 class="mb-1 plan-title">Starter Plan</h4>
                  <p class="mb-2">
                                              Total                        10.5%
                          ROI                                    </p>
                  <div class="plan-rate">
                      <h3 class="rate">
                          1.50%
                      </h3>
                      <p>EVERY DAY FOR                             7 Day
                                              </p>
                  </div>
              </div>
              <div class="plan-item__body my-4">
                  <ul class="list list-style-three text-start">
                      <li class="d-flex flex-wrap justify-content-between align-items-center">
                          <span class="label">Investment</span>
                          <span class="value">
                                                              $300.00 -
                                  $4,999.00
                                                      </span>
                      </li>
                      <li class="d-flex flex-wrap justify-content-between align-items-center">
                          <span class="label">Max. Earn</span>
                          <span class="value">

                              524.895                                 USD
                                                      </span>
                      </li>
                      <li class="d-flex flex-wrap justify-content-between align-items-center">
                          <span class="label">Total Return</span>
                          <span class="value">
                                                                                                  capital +
                                                                  10.5%
                                                      </span>
                      </li>
                  </ul>
              </div>
              <button class="cmn--btn plan-btn btn mt-2 investModal" data-bs-toggle="modal"
                  data-plan="{&quot;id&quot;:1,&quot;name&quot;:&quot;Starter Plan&quot;,&quot;minimum&quot;:&quot;300.00000000&quot;,&quot;maximum&quot;:&quot;4999.00000000&quot;,&quot;fixed_amount&quot;:&quot;0.00000000&quot;,&quot;interest&quot;:&quot;1.50000000&quot;,&quot;interest_type&quot;:1,&quot;time&quot;:&quot;24&quot;,&quot;time_name&quot;:&quot;Day&quot;,&quot;status&quot;:1,&quot;featured&quot;:0,&quot;capital_back&quot;:1,&quot;lifetime&quot;:0,&quot;repeat_time&quot;:&quot;7&quot;,&quot;created_at&quot;:&quot;2023-03-10T18:46:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-10-06T07:19:34.000000Z&quot;}" data-bs-target="#investModal"
                  type="button">Invest Now</button>
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="plan-item style--two text-center mw-100 w-100 h-100">
              <div class="plan-item__header">
                  <h4 class="mb-1 plan-title">Premium plan</h4>
                  <p class="mb-2">
                                              Total                        17.5%
                          ROI                                    </p>
                  <div class="plan-rate">
                      <h3 class="rate">
                          2.50%
                      </h3>
                      <p>EVERY DAY FOR                             7 Day
                                              </p>
                  </div>
              </div>
              <div class="plan-item__body my-4">
                  <ul class="list list-style-three text-start">
                      <li class="d-flex flex-wrap justify-content-between align-items-center">
                          <span class="label">Investment</span>
                          <span class="value">
                                                              $5,000.00 -
                                  $19,999.00
                                                      </span>
                      </li>
                      <li class="d-flex flex-wrap justify-content-between align-items-center">
                          <span class="label">Max. Earn</span>
                          <span class="value">

                              3499.825                                 USD
                                                      </span>
                      </li>
                      <li class="d-flex flex-wrap justify-content-between align-items-center">
                          <span class="label">Total Return</span>
                          <span class="value">
                                                                                                  capital +
                                                                  17.5%
                                                      </span>
                      </li>
                  </ul>
              </div>
              <button class="cmn--btn plan-btn btn mt-2 investModal" data-bs-toggle="modal"
                  data-plan="{&quot;id&quot;:2,&quot;name&quot;:&quot;Premium plan&quot;,&quot;minimum&quot;:&quot;5000.00000000&quot;,&quot;maximum&quot;:&quot;19999.00000000&quot;,&quot;fixed_amount&quot;:&quot;0.00000000&quot;,&quot;interest&quot;:&quot;2.50000000&quot;,&quot;interest_type&quot;:1,&quot;time&quot;:&quot;24&quot;,&quot;time_name&quot;:&quot;Day&quot;,&quot;status&quot;:1,&quot;featured&quot;:0,&quot;capital_back&quot;:1,&quot;lifetime&quot;:0,&quot;repeat_time&quot;:&quot;7&quot;,&quot;created_at&quot;:&quot;2023-03-10T18:51:50.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-03-10T18:51:50.000000Z&quot;}" data-bs-target="#investModal"
                  type="button">Invest Now</button>
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="plan-item style--two text-center mw-100 w-100 h-100">
              <div class="plan-item__header">
                  <h4 class="mb-1 plan-title">Gold Plan</h4>
                  <p class="mb-2">
                                              Total                        21%
                          ROI                                    </p>
                  <div class="plan-rate">
                      <h3 class="rate">
                          3.00%
                      </h3>
                      <p>EVERY DAY FOR                             7 Day
                                              </p>
                  </div>
              </div>
              <div class="plan-item__body my-4">
                  <ul class="list list-style-three text-start">
                      <li class="d-flex flex-wrap justify-content-between align-items-center">
                          <span class="label">Investment</span>
                          <span class="value">
                                                              $20,000.00 -
                                  $49,999.00
                                                      </span>
                      </li>
                      <li class="d-flex flex-wrap justify-content-between align-items-center">
                          <span class="label">Max. Earn</span>
                          <span class="value">

                              10499.79                                 USD
                                                      </span>
                      </li>
                      <li class="d-flex flex-wrap justify-content-between align-items-center">
                          <span class="label">Total Return</span>
                          <span class="value">
                                                                                                  capital +
                                                                  21%
                                                      </span>
                      </li>
                  </ul>
              </div>
              <button class="cmn--btn plan-btn btn mt-2 investModal" data-bs-toggle="modal"
                  data-plan="{&quot;id&quot;:3,&quot;name&quot;:&quot;Gold Plan&quot;,&quot;minimum&quot;:&quot;20000.00000000&quot;,&quot;maximum&quot;:&quot;49999.00000000&quot;,&quot;fixed_amount&quot;:&quot;0.00000000&quot;,&quot;interest&quot;:&quot;3.00000000&quot;,&quot;interest_type&quot;:1,&quot;time&quot;:&quot;24&quot;,&quot;time_name&quot;:&quot;Day&quot;,&quot;status&quot;:1,&quot;featured&quot;:0,&quot;capital_back&quot;:1,&quot;lifetime&quot;:0,&quot;repeat_time&quot;:&quot;7&quot;,&quot;created_at&quot;:&quot;2023-03-10T18:52:35.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-03-10T18:52:35.000000Z&quot;}" data-bs-target="#investModal"
                  type="button">Invest Now</button>
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="plan-item style--two text-center mw-100 w-100 h-100">
              <div class="plan-item__header">
                  <h4 class="mb-1 plan-title">Real Estate</h4>
                  <p class="mb-2">
                                              Total                        56%
                          ROI                                    </p>
                  <div class="plan-rate">
                      <h3 class="rate">
                          4.00%
                      </h3>
                      <p>EVERY DAY FOR                             14 Day
                                              </p>
                  </div>
              </div>
              <div class="plan-item__body my-4">
                  <ul class="list list-style-three text-start">
                      <li class="d-flex flex-wrap justify-content-between align-items-center">
                          <span class="label">Investment</span>
                          <span class="value">
                                                              $50,000.00 -
                                  $1,000,000.00
                                                      </span>
                      </li>
                      <li class="d-flex flex-wrap justify-content-between align-items-center">
                          <span class="label">Max. Earn</span>
                          <span class="value">

                              560000                                 USD
                                                      </span>
                      </li>
                      <li class="d-flex flex-wrap justify-content-between align-items-center">
                          <span class="label">Total Return</span>
                          <span class="value">
                                                                                              56%
                                                      </span>
                      </li>
                  </ul>
              </div>
              <button class="cmn--btn plan-btn btn mt-2 investModal" data-bs-toggle="modal"
                  data-plan="{&quot;id&quot;:4,&quot;name&quot;:&quot;Real Estate&quot;,&quot;minimum&quot;:&quot;50000.00000000&quot;,&quot;maximum&quot;:&quot;1000000.00000000&quot;,&quot;fixed_amount&quot;:&quot;0.00000000&quot;,&quot;interest&quot;:&quot;4.00000000&quot;,&quot;interest_type&quot;:1,&quot;time&quot;:&quot;24&quot;,&quot;time_name&quot;:&quot;Day&quot;,&quot;status&quot;:1,&quot;featured&quot;:0,&quot;capital_back&quot;:0,&quot;lifetime&quot;:0,&quot;repeat_time&quot;:&quot;14&quot;,&quot;created_at&quot;:&quot;2023-03-10T18:53:08.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-03-10T18:53:56.000000Z&quot;}" data-bs-target="#investModal"
                  type="button">Invest Now</button>
          </div>
      </div>


  <div class="modal fade" id="investModal">
      <div class="modal-dialog modal-dialog-centered modal-content-bg">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">
                                              Confirm to invest on <span class="planName"></span>
                                      </h5>
                  <button type="button" class="close" data-bs-dismiss="modal">
                      <i class="las la-times"></i>
                  </button>
              </div>



              <form action="/investments" method="post">
               @csrf


                                      <div class="modal-body">
                          <div class="form-group">
                              <h6 class="text-center investAmountRange"></h6>
                              <p class="text-center mt-1 interestDetails"></p>
                              <p class="text-center interestValidity"></p>

                              <label>Select Wallet</label>
                              <select class="form-control form--control form-select" name="gateway" required>
                                  <option value="">Select One</option>
                                                                  <option value="deposit_wallet">Deposit Wallet - $  {{ $sumOfApprovedDeposits}}</option>
                                                                  <option value="interest_wallet">Interest Wallet - $ {{ $sumOfInterestInvest}}</option>

                                                              </select>
                              <code class="gateway-info rate-info d-none">Rate: 1 USD = <span class="gateway-rate"></span> <span class="method_currency"></span></code>
                          </div>
                          <div class="form-group">
                              <label>Invest Amount</label>
                              <div class="input-group">


                                  <input type="number" step="any" min="50" max="" class="form-control form--control" name="amount" required>
                                  <div class="input-group-text">USD</div>
                              </div>
                              <code class="gateway-info d-none">Charge: <span class="charge"></span> USD. Total amount: <span class="total"></span> USD</code>
                          </div>
                      </div>
                                  <div class="modal-footer">
                                              <button type="button" class="btn btn--dark" data-bs-dismiss="modal">No</button>
                          <button type="submit" class="btn btn--base">Yes</button>
                                      </div>
              </form>
          </div>
      </div>
  </div>




                  </div>
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
      (function($){
          "use strict"
          $('.investModal').click(function(){
              var symbol = '$';
              var currency = 'USD';
              $('.gateway-info').addClass('d-none');
              var modal = $('#investModal');
              var plan = $(this).data('plan');
              modal.find('[name=plan_id]').val(plan.id);
              modal.find('.planName').text(plan.name);
              let fixedAmount = parseFloat(plan.fixed_amount).toFixed(2);
              let minimumAmount = parseFloat(plan.minimum).toFixed(2);
              let maximumAmount = parseFloat(plan.maximum).toFixed(2);
              let interestAmount = parseFloat(plan.interest);

              if (plan.fixed_amount > 0) {
                  modal.find('.investAmountRange').text(`Invest: ${symbol}${fixedAmount}`);
                  modal.find('[name=amount]').val(parseFloat(plan.fixed_amount).toFixed(2));
                  modal.find('[name=amount]').attr('readonly',true);
              }else{
                  modal.find('.investAmountRange').text(`Invest: ${symbol}${minimumAmount} - ${symbol}${maximumAmount}`);
                  modal.find('[name=amount]').val('');
                  modal.find('[name=amount]').removeAttr('readonly');
              }

              if (plan.interest_type == '1') {
                  modal.find('.interestDetails').html(`<strong> Interest: ${interestAmount}% </strong>`);
              } else {
                  modal.find('.interestDetails').html(`<strong> Interest: ${interestAmount} ${currency}  </strong>`);
              }

              if (plan.lifetime == '0') {
                  modal.find('.interestValidity').html(`<strong>  Every ${plan.time_name} for ${plan.repeat_time} times</strong>`);
              } else {
                  modal.find('.interestValidity').html(`<strong>  Every ${plan.time_name} for life time </strong>`);
              }

          });

          $('[name=amount]').on('input',function(){
              $('[name=wallet_type]').trigger('change');
          })

          $('[name=wallet_type]').change(function () {
              var amount = $('[name=amount]').val();
              if($(this).val() != 'deposit_wallet' && $(this).val() != 'interest_wallet' && amount){
                  var resource = $('select[name=wallet_type] option:selected').data('gateway');
                  var fixed_charge = parseFloat(resource.fixed_charge);
                  var percent_charge = parseFloat(resource.percent_charge);
                  var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                  $('.charge').text(charge);
                  $('.gateway-rate').text(parseFloat(resource.rate));
                  $('.gateway-info').removeClass('d-none');
                  if (resource.currency == 'USD') {
                      $('.rate-info').addClass('d-none');
                  }else{
                      $('.rate-info').removeClass('d-none');
                  }
                  $('.method_currency').text(resource.currency);
                  $('.total').text(parseFloat(charge) + parseFloat(amount));
              }else{
                  $('.gateway-info').addClass('d-none');
              }
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
