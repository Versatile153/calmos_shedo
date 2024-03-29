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



                  <h3 class="mb-2">Deposit Confirmation</h3>
                  <p class="mb-1">Send deposit amount to the below information and submit required proof to the system's admin. The admin will check the request and will match the submitted proof. After verification, if everything is ok, the admin will approve the request and the amount will be deposited to your Deposit Wallet.</p>
              </div>
              <div class="card custom--card">
                  <div class="card-header card-header-bg">

                      @if (!empty($depositFormData))


                      @if ($depositFormData['gateway'] === 'Bitcoin')
                      <h5 class="text-center"> <i class="las la-wallet"></i> Bitcoin Payment</h5>
                      @elseif ($depositFormData['gateway'] === 'USDT TRC20')

                     <h5 class="text-center"> <i class="las la-wallet"></i>  USDT TRC20 Payment</h5>
                      @endif
                  @else
                      <p>No data submitted.</p>
                  @endif




                  </div>
                  <div class="card-body  ">
                      <form action="{{ route('confirmDeposit') }}" method="POST" enctype="multipart/form-data">
                         @csrf                    <div class="row">
                              <div class="col-md-12">
                                  <p class="text-center mt-2">You have requested <b class="text--success">@if (!empty($depositFormData))

                                    <ul>
                                        @foreach ($depositFormData as $key => $value)
                                            @if ($key === 'amount')
                                                <li>{{ $key }}: {{ $value }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @else
                                    <p>No data submitted.</p>
                                @endif
                                 USD</b> , Please pay                                    <b class="text--success">0.01 BTC </b> for successful payment                                </p>





                                 @if (!empty($depositFormData))
                                 <p>Submitted Data:</p>
                                 <ul>
                                     @foreach ($depositFormData as $key => $value)
                                         @if ($key === 'gateway' || $key === 'amount')
                                             <li>{{ $key }}: {{ $value }}</li>
                                         @endif
                                     @endforeach
                                 </ul>
                             @else
                                 <p>No data submitted.</p>
                             @endif







                                  <div class="my-4">
                                      <p>Please make payment to the




                                        @if (!empty($depositFormData))


                                        @if ($depositFormData['gateway'] === 'Bitcoin')
                                           Bitcoin
                                        @elseif ($depositFormData['gateway'] === 'USDT TRC20')
                                       USDT TRC20
                                        @endif
                                    @else
                                        <p>No data submitted.</p>
                                    @endif



                                        wallet address below. Or<div>






                                        @if (!empty($depositFormData))


                                        @if ($depositFormData['gateway'] === 'Bitcoin')
                                        <button onclick="copyToClipboard('{{ $bitcoinAddress }}')">Copy Bitcoin Address</button>

                                        <script>
                                        function copyToClipboard(text) {
                                            var textarea = document.createElement('textarea');
                                            textarea.value = text;
                                            document.body.appendChild(textarea);
                                            textarea.select();
                                            document.execCommand('copy');
                                            document.body.removeChild(textarea);
                                            alert('Bitcoin address copied to clipboard!');
                                        }
                                        </script>



                                            {{ $bitcoinAddress}}"




                                        @elseif ($depositFormData['gateway'] === 'USDT TRC20')






                                        <button onclick="copyToClipboard('{{ $trcAddress}}')">Copy USDT TRC20 Address</button>

                                        <script>
                                        function copyToClipboard(text) {
                                            var textarea = document.createElement('textarea');
                                            textarea.value = text;
                                            document.body.appendChild(textarea);
                                            textarea.select();
                                            document.execCommand('copy');
                                            document.body.removeChild(textarea);
                                            alert('USDT TRC20 address copied to clipboard!');
                                        }
                                        </script>

                                                {{   $trcAddress}}


                                        @endif
                                    @else
                                        <p>No data submitted.</p>
                                    @endif






                                        <br></div><div>Or scan QR code</div><div>











                                        @if (!empty($depositFormData))


                                        @if ($depositFormData['gateway'] === 'Bitcoin')
                                            <img src="data:image/svg+xml;base64,{{ base64_encode($qrCodebtc) }}" alt="Bitcoin QR Code">
                                        @elseif ($depositFormData['gateway'] === 'USDT TRC20')
                                            <img src="data:image/svg+xml;base64,{{ base64_encode($qrCodetrc) }}" alt="USDT TRC20 QR Code">
                                        @endif
                                    @else
                                        <p>No data submitted.</p>
                                    @endif



                                      <br></div><div><br></div></p>
                                  </div>




                              </div>

                              <div class="form-group">
          <label class="form-label">Submit Screenshot
          </label>

          {{-- <input type="hidden" name="deposit_id" value="{{ $deposit->id }}"> --}}
                      <input
              type="file"
              class="form-control form--control"
              name="file"
               required             accept=" .jpeg,  .png,  .pdf,  .doc, "
              >
              <pre class="text--base mt-1">Supported mimes: jpeg,png,pdf,doc</pre>
              </div>

                              <div class="col-md-12">
                                  <div class="form-group">
                                      <button type="submit" class="btn btn--base w-100">Pay Now</button>
                                  </div>
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

  <!-- resources/views/transactions/create.blade.php -->



{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Transaction') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('confirmDeposit') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="file" class="form-label">File</label>
                            <input type="file" class="form-control" id="file" name="file" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 --}}
