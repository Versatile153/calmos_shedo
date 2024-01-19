

@extends('dashboard.app')
@section('content')

  <script>
  function loadGoogleTranslate() {
      new google.translate.TranslateElement ("google_element");
  }
  </script>
          <div class="dashboard-container">


      <div class="dashboard-inner">





          <!---->
          <!--<div class="alert border border--warning" role="alert">-->
          <!--    <div class="alert__icon d-flex align-items-center text--warning"><i class="fas fa-user-lock"></i></div>-->
          <!--    <p class="alert__message">-->
          <!--        <span class="fw-bold">2FA Authentication</span><br>-->
          <!--        <small><i>To keep safe your account, Please enable <a href="https://calamosassets.net/share/user/twofactor" class="link-color">2FA</a> security.</i> It will make secure your account and balance.</small>-->
          <!--    </p>-->
          <!--</div>-->
          <!---->


                  <div class="alert border border--info" role="alert">
              <div class="alert__icon d-flex align-items-center text--info"><i class="fas fa-file-signature"></i></div>
              <p class="alert__message">
                  <span class="fw-bold">KYC Verification Required</span><br>
                  <small><i>Please submit the required KYC information to verify yourself. Otherwise, you couldn't make any withdrawal requests to the system. <a href="#" class="link-color">Click here</a> to submit KYC information.</i></small>
              </p>
          </div>

          <div class="row g-3 mt-4">
              <div class="col-lg-4">
                  <div class="dashboard-widget">
                      <div class="d-flex justify-content-between">
                          <h5 class="text-secondary">Successful Deposits</h5>
                      </div>
                      <h3 class="text--secondary my-4">USD</h3>
                      <div class="widget-lists">
                          <div class="row">
                              <div class="col-4">
                                  <p class="fw-bold">Submitted</p>
                                  <span>${{    $totalDeposits}}</span>
                              </div>
                              <div class="col-4">
                                  <p class="fw-bold">Pending</p>
                                  <span>${{     $sumOfPendingDeposits}}</span>
                              </div>
                              <div class="col-4">
                                  <p class="fw-bold">Rejected</p>
                                  <span>$0.00</span>
                              </div>
                          </div>
                          <hr>
                          <p><small><i>You've requested to deposit $300.00. Where $300.00 is just initiated but not submitted.</i></small></p>
                      </div>
                  </div>
              </div>


              <!-- TradingView Widget BEGIN -->
  <div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><a href="#" rel="noopener" target="_blank"><span class="blue-text">AAPL stock analysis</span></a> by Calamosassets</div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
    {
    "interval": "1m",
    "width": 425,
    "isTransparent": false,
    "height": 450,
    "symbol": "NASDAQ:AAPL",
    "showIntervalTabs": true,
    "locale": "en",
    "colorTheme": "light"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->


              <div class="col-lg-4">
                  <div class="dashboard-widget">
                      <div class="d-flex justify-content-between">
                          <h5 class="text-secondary">Successful Withdrawals</h5>
                      </div>
                      <h3 class="text--secondary my-4">0.00 USD</h3>
                      <div class="widget-lists">
                          <div class="row">
                              <div class="col-4">
                                  <p class="fw-bold">Submitted</p>
                                  <span>$0.00</span>
                              </div>
                              <div class="col-4">
                                  <p class="fw-bold">Pending</p>
                                  <span>$0.00</span>
                              </div>
                              <div class="col-4">
                                  <p class="fw-bold">Rejected</p>
                                  <span>$0.00</span>
                              </div>
                          </div>
                          <hr>
                          <p><small><i>You've requested to withdraw $0.00. Where $0.00 is just initiated but not submitted.</i></small></p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="dashboard-widget">
                      <div class="d-flex justify-content-between">
                          <h5 class="text-secondary">Total Investments</h5>
                      </div>
                      <h3 class="text--secondary my-4">0.00 USD</h3>
                      <div class="widget-lists">
                          <div class="row">
                              <div class="col-4">
                                  <p class="fw-bold">Completed</p>
                                  <span>$0.00</span>
                              </div>
                              <div class="col-4">
                                  <p class="fw-bold">Running</p>
                                  <span>$0.00</span>
                              </div>
                              <div class="col-4">
                                  <p class="fw-bold">Interests</p>
                                  <span>$0.00</span>
                              </div>
                          </div>
                          <hr>
                          <p><small><i>You've invested $0.00 from the deposit wallet and $0.00 from the interest wallet</i></small></p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="card mt-4 mb-4">
              <div class="card-body">
                  <div class="mb-2">
                      <h5 class="title">Latest ROI Statistics</h5>
                      <p> <small><i>Here is last 30 days statistics of your ROI (Return on Investment)</i></small></p>
                  </div>
                  <div id="chart"></div>
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

      <script src="https://calamosassets.net/share/assets/templates/invester//js/lib/apexcharts.min.js"></script>

  <script>

      // apex-line chart
      var options = {
          chart: {
              height: 350,
              type: "area",
              toolbar: {
                  show: false
              },
              dropShadow: {
                  enabled: true,
                  enabledSeries: [0],
                  top: -2,
                  left: 0,
                  blur: 10,
                  opacity: 0.08,
              },
              animations: {
                  enabled: true,
                  easing: 'linear',
                  dynamicAnimation: {
                      speed: 1000
                  }
              },
          },
          dataLabels: {
              enabled: false
          },
          series: [
              {
                  name: "Price",
                  data: [

                  ]
              }
          ],
          fill: {
              type: "gradient",
              colors: ['#4c7de6', '#4c7de6', '#4c7de6'],
              gradient: {
                  shadeIntensity: 1,
                  opacityFrom: 0.6,
                  opacityTo: 0.9,
                  stops: [0, 90, 100]
              }
          },
          xaxis: {
              title: "Value",
              categories: [
                              ]
          },
          grid: {
              padding: {
                  left: 5,
                  right: 5
              },
              xaxis: {
                  lines: {
                      show: false
                  }
              },
              yaxis: {
                  lines: {
                      show: false
                  }
              },
          },
      };

      var chart = new ApexCharts(document.querySelector("#chart"), options);

      chart.render();


      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl)
      })

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
