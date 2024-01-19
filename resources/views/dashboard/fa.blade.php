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
              <div class=" col-md-12 ">
                  <div class="mb-4">
                      <h3>Two Factor Authentication</h3>
                                          <p>Your account will be more secure if you use this feature. A 6-digit verification code from your Android Google Authenticator app must be entered whenever someone tries to log in to the account. So that the system could verify that, this is you. Additionally, the payout procedure will require this verification.</p>
                                      </div>
                  <div class="row gy-4">

                                          <div class="col-md-6">
                          <div class="card custom--card">
                              <div class="card-header">
                                  <h5 class="mb-0">Add Your Account</h5>
                              </div>

                              <div class="card-body">
                                  <h6 class="mb-3">
                                      Use the QR code or setup key on your Google Authenticator app to add your account.                                 </h6>

                                  <div class="form-group mb-3 mx-auto text-center">
                                      <img class="mx-auto" src="https://chart.googleapis.com/chart?chs=200x200&amp;chld=M|0&amp;cht=qr&amp;chl=otpauth%3A%2F%2Ftotp%2Fversatile%40Calamosassets%3Fsecret%3DIVRMCGFQNRG4PBRQ">
                                  </div>

                                  <div class="form-group mb-3">
                                      <label class="form-label">Setup Key</label>
                                      <div class="copy-link">
                                          <input type="text" class="copyURL" value="IVRMCGFQNRG4PBRQ" readonly>
                                          <span class="copyBoard" id="copyBoard"><i class="las la-copy"></i> <strong class="copyText">Copy</strong></span>
                                      </div>
                                  </div>

                                  <label><i class="fa fa-info-circle"></i> Help</label>
                                  <p>Google Authenticator is a multifactor app for mobile devices. It generates timed codes used during the 2-step verification process. To use Google Authenticator, install the Google Authenticator application on your mobile device. <a class="text--base" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en" target="_blank">Download</a></p>
                              </div>
                          </div>
                      </div>


                      <div class=" col-md-6 ">

                                                      <div class="card custom--card">
                                  <div class="card-header">
                                      <h5 class="mb-0">Enable 2FA Security</h5>
                                  </div>
                                  <form action="https://calamosassets.net/share/user/twofactor/enable" method="POST">
                                      <div class="card-body">
                                          <input type="hidden" name="_token" value="maMO8FuYitD6cP2TGwO0olIhAxQvOkF5YhBbQ4q6">                                        <input type="hidden" name="key" value="IVRMCGFQNRG4PBRQ">
                                          <div class="form-group mb-3">
                                              <label class="form-label">Google Authenticatior OTP</label>
                                              <input type="text" class="form-control form--control" name="code" required>
                                          </div>
                                          <button type="submit" class="btn btn--base w-100">Submit</button>
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
              "use strict";
              $('#copyBoard').click(function(){
                  var copyText = document.getElementsByClassName("copyURL");
                  copyText = copyText[0];
                  copyText.select();
                  copyText.setSelectionRange(0, 99999);
                  /*For mobile devices*/
                  document.execCommand("copy");
                  $('.copyText').text('Copied');
                  setTimeout(() => {
                      $('.copyText').text('Copy');
                  }, 2000);
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
