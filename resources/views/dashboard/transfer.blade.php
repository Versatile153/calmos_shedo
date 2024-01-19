@extends('dashboard.app')
@section('content')
  <script>
  function loadGoogleTranslate() {
      new google.translate.TranslateElement ("google_element");
  }
  </script>
          <div class="dashboard-container">


      <div class="dashboard-inner">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="mb-4">
                      <h3 class="mb-2">Transfer Balance</h3>
                      <p>You can transfer the balance to another user from both of your wallets. The transferred amount will be added to the deposit wallet of the targeted user.</p>
                  </div>
                  <div class="card custom--card">
                      <form action="" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="_token" value="maMO8FuYitD6cP2TGwO0olIhAxQvOkF5YhBbQ4q6">                        <div class="card-body">
                              <div class="form-group">
                                  <label>Wallet</label>
                                  <select class="form-control form--control form-select" name="wallet">
                                      <option value="">Select a wallet</option>
                                      <option value="deposit_wallet">Deposit Wallet - 50.00 USD</option>
                                      <option value="interest_wallet">Interest Wallet - 0.00 USD</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label>Username</label>
                                  <input type="text" name="username" class="form-control form--control findUser" required>
                                  <code class="error-message"></code>
                              </div>
                              <div class="form-group">
                                  <label>Amount <small class="text--success">(Charge: 0 USD + 0%)</small></label>
                                  <div class="input-group">
                                      <input type="number" step="any" autocomplete="off" name="amount" class="form-control form--control" required>
                                      <span class="input-group-text">USD</span>
                                  </div>
                                  <small><code class="calculation"></code></small>
                              </div>



                              <div class="form-group mt-3">
                                  <button type="submit" class="btn btn--base w-100">Submit</button>
                              </div>
                          </div>
                      </form>
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
      $('input[name=amount]').on('input',function(){
          var amo = parseFloat($(this).val());
          var calculation = amo + ( parseFloat(0.00000000) + ( amo * parseFloat(0.00) ) / 100 );
          if (calculation) {
              $('.calculation').text(calculation+' USD will cut from your selected wallet');
          }else{
              $('.calculation').text('');
          }
      });

      $('.findUser').on('focusout',function(e){
          var url = 'https://calamosassets.net/share/user/find-user';
          var value = $(this).val();
          var token = 'maMO8FuYitD6cP2TGwO0olIhAxQvOkF5YhBbQ4q6';

          var data = {username:value,_token:token}
          $.post(url,data,function(response) {
              if (response.message) {
                  $('.error-message').text(response.message);
              }else{
                  $('.error-message').text('');
              }
          });
      });
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
