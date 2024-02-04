@extends('dashboard.app')
@section('content')
  <script>
  function loadGoogleTranslate() {
      new google.translate.TranslateElement ("google_element");
  }
  </script>
          <div class="dashboard-container">


  <div class="dashboard-inner">
      <div class="mb-4">
          <h3>My Referrals (bonus:${{ $bonusSum }})</h3>
      </div>
      <div class="row gy-4">
          <div class="col-md-12">
              <div class="card mb-3">
                  <div class="card-body">
                      <h4 class="mb-1">Refer & Enjoy the Bonus</h4>
                      <p class="mb-3">You'll get commission against your referral's activities. Level has been decided by the <strong><i>Calamosassets</i></strong> authority. If you reach the level, you'll get commission.</p>
                      <div class="copy-link">
                        <input type="text" class="copyURL" value="{{ url('/referal-register/' . auth()->user()->referral_link) }}" readonly>

                          <span class="copyBoard" id="copyBoard"><i class="las la-copy"></i> <strong class="copyText">Copy</strong></span>
                      </div>
                  </div>
              </div>
                      </div>
      </div>



<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>

                <th>Deposit Status</th>


                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach($referredUsers as $referredUser)
                <tr>
                    <td>{{ $referredUser->name }}</td>
                    <td>{{ $referredUser->email }}</td>
                    <td>
                        @if ($referredUser->deposits->isNotEmpty())
                            @if ($referredUser->deposits->where('status', 'approved')->isNotEmpty())
                                Deposit approved
                            @else
                                Deposit not approved
                            @endif
                        @else
                            No deposit created
                        @endif
                    </td>


                    <!-- Add more columns as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
  </div>


          </div>
      </div>



  </div>

  <!-- resources/views/referred-users.blade.php -->


  {{-- <script src="//code.tidio.co/cwyzhn9yovqes3ei913gkoymswdgbwjd.js" async></script> --}}


      <script src="https://calamosassets.net/share/assets/global/js/jquery-3.6.0.min.js"></script>
      <script src="https://calamosassets.net/share/assets/global/js/bootstrap.bundle.min.js"></script>

      <!-- Pluglin Link -->
      <script src="https://calamosassets.net/share/assets/templates/invester/js/lib/slick.min.js"></script>
      <script src="https://calamosassets.net/share/assets/templates/invester/js/lib/magnific-popup.min.js"></script>
      <script src="https://calamosassets.net/share/assets/templates/invester/js/lib/apexcharts.min.js"></script>


      <!-- Main js -->
      <script src="https://calamosassets.net/share/assets/templates/invester/js/main.js"></script>

      <script src="https://calamosassets.net/share/assets/global/js/jquery.treeView.js"></script>
  <script>
      (function($){
      "use strict"
          $('.treeview').treeView();
          $('.copyBoard').click(function(){
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
