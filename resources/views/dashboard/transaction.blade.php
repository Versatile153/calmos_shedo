@extends('dashboard.app')
@section('content')
  <script>
  function loadGoogleTranslate() {
      new google.translate.TranslateElement ("google_element");
  }
  </script>

@if(session('success'))
<div id="success-alert" class="alert alert-success">
    {{ session('success') }}
</div>

<script>
    // Automatically close the success alert after 3 seconds
    setTimeout(function() {
        $('#success-alert').fadeOut('slow');
    }, 3000);
</script>
@endif
          <div class="dashboard-container">

              <div class="dashboard-inner">
      <div class="mb-4">
          <p>Transaction</p>
          <h3>My Transactions History</h3>
      </div>
      <hr>
      <div class="filter-area mb-3">
          <div class="d-flex flex-wrap gap-4">
              <div class="flex-grow-1">
                  <form action="">
                      <div class="custom-input-box trx-search">
                          <label>Transaction Number</label>
                          <input type="text" name="search" value="" placeholder="Transaction Number">
                          <button type="submit" class="icon-area">
                              <i class="las la-search"></i>
                          </button>
                      </div>
                  </form>
              </div>
              <div class="flex-grow-1">
                  <div class="custom-input-box">
                      <label>Wallet</label>
                      <select name="wallet_type" onChange="window.location.href=this.value">
                          <option value=/share/user/transactions?wallet=>All</option>
                          <option value="/share/user/transactions?wallet_type=deposit_wallet" >Deposit Wallet</option>
                          <option value="/share/user/transactions?wallet_type=interest_wallet" >Interest Wallet</option>
                      </select>
                  </div>
              </div>
              <div class="flex-grow-1">
                  <div class="custom-input-box">
                      <label>Type</label>
                      <select name="trx_type" onChange="window.location.href=this.value">
                          <option value="">All</option>
                          <option value="" >Plus</option>
                          <option value="" >Minus</option>
                      </select>
                  </div>
              </div>
              <div class="flex-grow-1">
                  <div class="custom-input-box">
                      <label>Remark</label>
                      <select name="remark" onChange="window.location.href=this.value">
                          <option value="/share/user/transactions?remark=">Any</option>
                                                  <option value="" >Balance add</option>
                                                  <option value="" >Balance subtract</option>
                                                  <option value="" >Capital return</option>
                                                  <option value="" >Deposit</option>
                                                  <option value="" >Interest</option>
                                                  <option value="/invest" >Invest</option>
                                                  <option value="" >Registration bonus</option>
                                                  <option value="" >Withdraw</option>
                                                  <option value="" >Withdraw reject</option>
                                              </select>
                  </div>
              </div>
          </div>
      </div>

      <div class="accordion table--acordion" id="transactionAccordion">
                      <div class="accordion-item transaction-item">
                  <h2 class="accordion-header" id="h-1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-1">
                      <div class="col-lg-4 col-sm-5 col-8 order-1 icon-wrapper">
                          <div class="left">
                              <div class="icon tr-icon  icon-success ">
                                  <i class="las la-long-arrow-alt-right"></i>
                              </div>
                              <div class="content">
                                  <h6 class="trans-title">Registration bonus - Deposit wallet</h6>
                                  <span class="text-muted font-size--14px mt-2">Jan 25 2024 @12:46:pm</span>
                              </div>
                          </div>
                      </div>


                      <div class="col-lg-4 col-sm-4 col-12 order-sm-2 order-3 content-wrapper mt-sm-0 mt-3">
                          <p class="text-muted font-size--14px"><b>#YT4JYYBUC3CZ</b></p>
                      </div>
                      <div class="col-lg-4 col-sm-3 col-4 order-sm-3 order-2 text-end amount-wrapper">
                          <p>
                              <b>50.00 USD</b><br>
                              <small class="fw-bold text-muted">Balance: 50.00 USD</small>
                          </p>

                      </div>
                  </button>
                  </h2>
                  <div id="c-1" class="accordion-collapse collapse" aria-labelledby="h-1" data-bs-parent="#transactionAccordion">
                      <div class="accordion-body">
                          <ul class="caption-list">
                              <li>
                                  <span class="caption">Charge</span>
                                  <span class="value">0.00 USD</span>
                              </li>
                              <li>
                                  <span class="caption">Post Balance</span>
                                  <span class="value">50.00 USD</span>
                              </li>
                              <li>
                                  <span class="caption">Details</span>
                                  <span class="value">You have got registration bonus</span>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              </div>









              <div class="card">
                <div class="card-body">
                    @if($userWithdrawals && $userWithdrawals->isEmpty())
                        <h4 class="text-muted"><i class="far fa-frown"></i> No withdrawals found</h4>
                    @else
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Gateway</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Wallet</th>

                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(optional($userWithdrawals)->isNotEmpty())
                                        @foreach($userWithdrawals as $withdrawal)
                                            <tr>
                                                <td>{{ $withdrawal->gateway }}</td>
                                                <td>{{ $withdrawal->amount }}</td>
                                                <td>{{ $withdrawal->status }}</td>
                                                <td>{{ $withdrawal->wallet }}</td>
                                                <td>{{ $withdrawal->created_at->format('F j, Y') }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center">No withdrawals found</td>
                                        </tr>
                                    @endif
                                </tbody>

                            </table>
                        </div>
                    @endif
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
