@extends('dashboard.app')
@section('content')
  <script>
  function loadGoogleTranslate() {
      new google.translate.TranslateElement ("google_element");
  }
  </script>
          <div class="dashboard-container">

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

              <div class="dashboard-inner">
      <div class="mb-4">
          <div class="d-flex justify-content-between">
              <h3 class="mb-2">Deposit History</h3>
              <span>
                  <a href="/deposit" class="btn btn--secondary btn--smd">Deposit Now <i class="las la-long-arrow-alt-right"></i></a>
              </span>
          </div>
      </div>

      @foreach(auth()->user()->deposits as $deposit)
      <div class="accordion table--acordion" id="transactionAccordion">
                      <div class="accordion-item transaction-item">
                  <h2 class="accordion-header" id="h-1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-1" aria-expanded="false" aria-controls="c-1">
                      <div class="col-lg-4 col-sm-5 col-8 order-1 icon-wrapper">
                          <div class="left">
                                                          <div class="icon icon-warning">
                                  <i class="las la-spinner fa-spin"></i>
                              </div>
                                                          <div class="content">
                                  <h6 class="trans-title">{{ $deposit->gateway }}</h6>
                                  <span class="text-muted font-size--14px mt-2">{{ $deposit->amount }}</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-sm-4 col-12 order-sm-2 order-3 content-wrapper mt-sm-0 mt-3">
                          <p class="text-muted font-size--14px"><b>{{ $deposit->code }}</b></p>
                      </div>
                      <div class="col-lg-4 col-sm-3 col-4 order-sm-3 order-2 text-end amount-wrapper">
                          <p><b> {{ $deposit->amount }}USD</b></p>

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
                                  <span class="caption">With Charge</span>
                                  <span class="value">{{ $deposit->amount }} USD</span>
                              </li>
                              <li>
                                  <span class="caption">Conversion</span>
                                  <span class="value">{{ $deposit->amount }} USD x 0.00 BTC = 0.01 BTC</span>
                              </li>
                              <li>
                                                                  <span class="caption">Status</span>
                                  <span class="value">
                                      <span class="badge badge--warning">{{ $deposit->status }}</span>  <a href="javascript:void(0)" class="detailBtn"
                                      data-info="[{&quot;name&quot;:&quot;Submit Screenshot&quot;,&quot;type&quot;:&quot;file&quot;,&quot;value&quot;:&quot;2024\/01\/27\/65b5087e29af61706363006.jpeg&quot;}]"
                                                                          ><i class="las la-info-circle"></i></a>                                 </span>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              @endforeach

      <div class="mt-3">

      </div>


  </div>



  <div id="detailModal" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Details</h5>
                  <span type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                      <i class="las la-times"></i> deposit info: {{ $deposit->status }}
                  </span>
              </div>
              <div class="modal-body">

                  <div class="feedback"></div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-dark btn--sm" data-bs-dismiss="modal">Close</button>
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
          (function ($) {
              "use strict";
              $('.detailBtn').on('click', function () {
                  var modal = $('#detailModal');

                  var userData = $(this).data('info');
                  var html = '';
                  if(userData){
                      userData.forEach(element => {
                          if(element.type != 'file'){
                              html += `
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                  <span>${element.name}</span>
                                  <span">${element.value}</span>
                              </li>`;
                          }
                      });
                  }

                  modal.find('.userData').html(html);

                  if($(this).data('admin_feedback') != undefined){
                      var adminFeedback = `
                          <div class="my-3">
                              <strong>Admin Feedback</strong>
                              <p>${$(this).data('admin_feedback')}</p>
                          </div>
                      `;
                  }else{
                      var adminFeedback = '';
                  }

                  modal.find('.feedback').html(adminFeedback);


                  modal.modal('show');
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
