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
              <h3 class="mb-2">Profile</h3>
          </div>

          <div class="card custom--card">
              <div class="card-body">
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="row">
                          <div class="form-group col-sm-6">
                              <label class="form-label"> Name</label>
                              <input type="text" class="form-control form--control" name="name" value="{{ $user->name }}" required>
                          </div>
                          <div class="form-group col-sm-6">
                              <label class="form-label">Country</label>
                              <input type="text" class="form-control form--control" name="country" value="{{ $user->country }}" required>
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group col-sm-6">
                              <label class="form-label">E-mail Address</label>
                              <input class="form-control form--control" value="{{ $user->email }}" name="email" readonly>
                          </div>
                          <div class="form-group col-sm-6">
                              <label class="form-label">Mobile Number</label>
                              <input class="form-control form--control" value="{{ $user->mobile }}"  name="mobile">
                          </div>
                      </div>
                      {{-- <div class="row">
                          <div class="form-group col-sm-6">
                              <label class="form-label">Address</label>
                              <input type="text" class="form-control form--control" name="" value="University of Nigeria nsukka">
                          </div>
                          <div class="form-group col-sm-6">
                              <label class="form-label">State</label>
                              <input type="text" class="form-control form--control" name="state" value="Enugu">
                          </div>
                      </div>


                      <div class="row">
                          <div class="form-group col-sm-4">
                              <label class="form-label">Zip Code</label>
                              <input type="text" class="form-control form--control" name="zip" value="042">
                          </div>

                          <div class="form-group col-sm-4">
                              <label class="form-label">City</label>
                              <input type="text" class="form-control form--control" name="city" value="Enugu">
                          </div>

                          <div class="form-group col-sm-4">
                              <label class="form-label">Country</label>
                              <input class="form-control form--control" value="Nigeria" disabled>
                          </div> --}}

                      </div>

                      <div class="form-group mt-3">
                          <button type="submit" class="btn btn--base w-100">Submit</button>
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
