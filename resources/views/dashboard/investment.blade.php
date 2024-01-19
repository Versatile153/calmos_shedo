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
          <p>Investment</p>
          <h3>All Investment</h3>
      </div>
      <div class="row gy-4">
          <div class="col-md-5">
              <div class="card h-100">
                  <div class="card-body">
                      <div class="d-flex flex-wrap justify-content-between align-items-center">
                          <div>
                              <p class="mb-2 fw-bold">Total Invest</p>
                              <h4 class="text--base"><sup class="top-0 fw-light me-1">$</sup>{{ $approvedSum }}</h4>
                          </div>
                          <div>
                              <p class="mb-2 fw-bold">Total Profit</p>
                              <h4 class="text--base"><sup class="top-0 fw-light me-1">$</sup>{{ $totalProfits }}</h4>
                          </div>
                      </div>
                      <div class="d-flex flex-wrap justify-content-between mt-3 mt-sm-4 gap-2">
                          <a href="/invest" class="btn btn--sm btn--base">Invest Now <i class="las la-arrow-right fs--12px ms-1"></i></a>
                          <a href="/withdraw" class="btn btn--sm btn--secondary">Withdraw Now <i class="las la-arrow-right fs--12px ms-1"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <!-- resources/views/investments/index.blade.php -->

<div class="col-md-7">
    <div class="card h-100">
        <div class="card-body">
            @if($investments && !$investments->isEmpty())
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Amount</th>
                            <th>Invested On</th>
                            <!-- Add more header columns as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($investments as $investment)
                            <tr>
                                <td>{{ $investment->amount }}</td>
                                <td>{{ $investment->created_at->format('F j, Y') }}</td>
                                <!-- Add more data columns as needed -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3 class="text-center">No Investments Found Yet</h3>
            @endif
        </div>
    </div>
</div>

      </div>










     <!-- resources/views/your_view_name.blade.php -->

<div class="mt-4">
    <div class="d-flex justify-content-between">
        <h5 class="title mb-3">Active Plan <span class="count text-base">({{ $activeInvestments->count() }})</span></h5>
        <a href="#" class="link-color">View All <i class="las la-arrow-right"></i></a>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Amount</th>
                    <th>Invested On</th>
                    <th>Earnings</th>

                    <!-- Add more header columns as needed -->
                </tr>
            </thead>
            <tbody>
                @forelse ($activeInvestments as $investment)
                    <tr>
                        <td>{{ $investment->amount }}</td>
                        <td>{{ $investment->created_at->format('F j, Y') }}</td>
                        <td>{{ $investment->profits }}</td>

                        <!-- Add more data columns as needed -->
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center">
                            <i class="far fa-frown"></i> No active investments found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
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

      <script src="https://calamosassets.net/share/assets/global/js/chart.min.js"></script>

  <script>
      /* -- Chartjs - Pie Chart -- */
      var pieChartID = document.getElementById("chartjs-pie-chart").getContext('2d');
      var pieChart = new Chart(pieChartID, {
          type: 'pie',
          data: {
              datasets: [{
                  data: [
                                      ],
                  borderColor: 'transparent',
                  backgroundColor: planColors(),
                  label: 'Dataset 1'
              }],
              labels: [
                              ]
          },
          options: {
              responsive: true,
              legend: {
                  display: false
              }
          }
      });

      var planPoints = $('.planPoint');
      planPoints.each(function(key,planPoint){
          var planPoint = $(planPoint)
          planPoint.css('color',planColors()[key])
      })

      function planColors(){
          return [
              '#ff7675',
              '#6c5ce7',
              '#ffa62b',
              '#ffeaa7',
              '#D980FA',
              '#fccbcb',
              '#45aaf2',
              '#05dfd7',
              '#FF00F6',
              '#1e90ff',
              '#2ed573',
              '#eccc68',
              '#ff5200',
              '#cd84f1',
              '#7efff5',
              '#7158e2',
              '#fff200',
              '#ff9ff3',
              '#08ffc8',
              '#3742fa',
              '#1089ff',
              '#70FF61',
              '#bf9fee',
              '#574b90'
          ]
      }
  </script>

  <script>
      let animationCircle=$('.animation-circle');
      animationCircle.css('animation-duration', function () {
          let duration = ($(this).data('duration'));
          return duration;
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
