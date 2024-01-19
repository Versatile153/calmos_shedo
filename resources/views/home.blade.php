
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
    {
    "symbols": [
      {
        "proName": "FOREXCOM:SPXUSD",
        "title": "S&P 500"
      },
      {
        "proName": "FOREXCOM:NSXUSD",
        "title": "US 100"
      },
      {
        "proName": "FX_IDC:EURUSD",
        "title": "EUR to USD"
      },
      {
        "proName": "BITSTAMP:BTCUSD",
        "title": "Bitcoin"
      },
      {
        "proName": "BITSTAMP:ETHUSD",
        "title": "Ethereum"
      }
    ],
    "showSymbolLogo": true,
    "colorTheme": "dark",
    "isTransparent": false,
    "displayMode": "adaptive",
    "locale": "en"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->


  <!-- meta tags and other links -->
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> Calamosassets - Dashboard</title>
      <meta name="title" Content="Calamosassets - Dashboard">

      <meta name="description" content="Calamosassets was founded by industry leaders in the Digital Asset investment industry. Calamosassets  is the leading digital asset trading platform that allows clients to directly trade cryptocurrencies in real-time through their individual fully automated portfolio.">
      <meta name="keywords" content="investment">
      <link rel="shortcut icon" href="https://calamosassets.net/share/assets/images/logoIcon/favicon.png" type="image/x-icon">


      <link rel="apple-touch-icon" href="https://calamosassets.net/share/assets/images/logoIcon/logo.png">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="apple-mobile-web-app-title" content="Calamosassets - Dashboard">

      <meta itemprop="name" content="Calamosassets - Dashboard">
      <meta itemprop="description" content="Calamosassets was founded by industry leaders in the Digital Asset investment industry. Calamosassets  is the leading digital asset trading platform that allows clients to directly trade cryptocurrencies in real-time through their individual fully automated portfolio.">
      <meta itemprop="image" content="https://calamosassets.net/share/assets/images/seo/640b938b0f5051678480267.png">

      <meta property="og:type" content="website">
      <meta property="og:title" content="Calamosassets">
      <meta property="og:description" content="Calamosassets">
      <meta property="og:image" content="https://calamosassets.net/share/assets/images/seo/640b938b0f5051678480267.png"/>
      <meta property="og:image:type" content="png"/>
      <meta property="og:image:width" content="1180" />
      <meta property="og:image:height" content="600" />
      <meta property="og:url" content="https://calamosassets.net/share/user/dashboard">

      <meta name="twitter:card" content="summary_large_image">
      <!-- font  -->
      <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,500&family=Maven+Pro:wght@400;500;600&display=swap" rel="stylesheet">


      <link href="https://calamosassets.net/share/assets/global/css/bootstrap.min.css" rel="stylesheet">

      <link href="https://calamosassets.net/share/assets/global/css/all.min.css" rel="stylesheet">

      <link rel="stylesheet" href="https://calamosassets.net/share/assets/global/css/line-awesome.min.css" />

      <link rel="stylesheet" href="https://calamosassets.net/share/assets/templates/invester/css/lib/animate.css">

      <!-- Plugin Link -->
      <link rel="stylesheet" href="https://calamosassets.net/share/assets/templates/invester/css/lib/slick.css">
      <link rel="stylesheet" href="https://calamosassets.net/share/assets/templates/invester/css/lib/magnific-popup.css">
      <link rel="stylesheet" href="https://calamosassets.net/share/assets/templates/invester/css/lib/apexcharts.css">

      <!-- Main css -->
      <link rel="stylesheet" href="https://calamosassets.net/share/assets/templates/invester/css/main.css">


      <link rel="stylesheet" href="https://calamosassets.net/share/assets/templates/invester/css/custom.css">

      <link rel="stylesheet" href="https://calamosassets.net/share/assets/templates/invester/css/color.php?color=5e8cf1">

          <style>
          .pb-120 {
              padding-bottom: clamp(40px, 4vw, 40px);
          }

          .pt-120 {
              padding-top: clamp(40px, 4vw, 40px);
          }
          .container {
              max-width: 1140px;
          }
      </style>

  </head>

  <body>


  <div class="d-flex flex-wrap">

      <div class="dashboard-sidebar" id="dashboard-sidebar">
      <button class="btn-close dash-sidebar-close d-xl-none"></button>
      <a href="/" class="logo"><img src="https://calamosassets.net/share/assets/images/logoIcon/logo_2.png" alt="images"></a>
      <div class="bg--lights">
          <div class="profile-info">
              <p class="fs--13px mb-3 fw-bold">ACCOUNT BALANCE</p>
              <h4 class="usd-balance text--base mb-2 fs--30">50.00 <sub class="top-0 fs--13px">USD <small>(Deposit Wallet)</small> </sub></h4>
              <p class="btc-balance fw-medium fs--18px">0.00 <sub class="top-0 fs--13px">USD <small>(Interest Wallet)</small></sub></p>
              <div class="mt-4 d-flex flex-wrap gap-2">
                  <a href="/deposit" class="btn btn--base btn--smd">Deposit</a>
                  <a href="/withdraw" class="btn btn--secondary btn--smd">Withdraw</a>
              </div>
          </div>
      </div>
      <ul class="sidebar-menu">
          <li><a href="/home" class="active"><img src="https://calamosassets.net/share/assets/templates/invester//images/icon/dashboard.png" alt="icon"> Dashboard</a></li>
          <li><a href="/investment" class=""><img src="https://calamosassets.net/share/assets/templates/invester//images/icon/investment.png" alt="icon"> Investments</a></li>
          <li><a href="/deposit" class=""><img src="https://calamosassets.net/share/assets/templates/invester//images/icon/wallet.png" alt="icon"> Deposit</a></li>
          <li><a href="/withdraw" class=""><img src="https://calamosassets.net/share/assets/templates/invester//images/icon/withdraw.png" alt="icon"> Withdraw</a></li>
                  <li><a href="/transfer" class=""><img src="https://calamosassets.net/share/assets/templates/invester//images/icon/balance-transfer.png" alt="icon"> Transfer Balance</a></li>
                  <li><a href="/transaction" class=""><img src="https://calamosassets.net/share/assets/templates/invester//images/icon/transaction.png" alt="icon"> Transactions</a></li>
          <li><a href="/refferal" class=""><img src="https://calamosassets.net/share/assets/templates/invester//images/icon/referral.png" alt="icon"> Referrals</a></li>
                  <li><a href="#" class=""><img src="https://calamosassets.net/share/assets/templates/invester//images/icon/promotion.png" alt="icon"> Promotional Banner</a></li>

          <li><a href="/ticket" class=""><img src="https://calamosassets.net/share/assets/templates/invester//images/icon/ticket.png" alt="icon"> Support Ticket</a></li>
          <li><a href="/fa" class=""><img src="https://calamosassets.net/share/assets/templates/invester//images/icon/2fa.png" alt="icon"> 2FA</a></li>
          <li><a href="/profile" class=""><img src="https://calamosassets.net/share/assets/templates/invester//images/icon/profile.png" alt="icon"> Profile</a></li>
          <li><a href="/password" class=""><img src="https://calamosassets.net/share/assets/templates/invester//images/icon/password.png" alt="icon"> Change Password</a></li>


          <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class=""><img src="https://calamosassets.net/share/assets/templates/invester//images/icon/logout.png" alt="icon"> Logout</a>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </li>




      </ul>
  </div>

      <div class="dashboard-wrapper">

          <div class="dashboard-nav d-flex flex-wrap align-items-center justify-content-between">
      <div id="google_element"></div>
  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>

      <div class="nav-left d-flex gap-4 align-items-center">
          <div class="dash-sidebar-toggler d-xl-none" id="dash-sidebar-toggler">
              <i class="fas fa-bars"></i>
          </div>
      </div>
      <div class="nav-right d-flex flex-wrap align-items-center gap-3">
                      <select name="langSel" class="langSel form--control h-auto px-2 py-1 border-0">
                                      <option value="en"  selected  >English</option>
                              </select>
                  <ul class="nav-header-link d-flex flex-wrap gap-2">
              <li>
                  <a class="link" href="javascript:void(0)">EC</a>
                  <div class="dropdown-wrapper">
                      <div class="dropdown-header">
                          <h6 class="name text--base">eze celestine</h6>
                          <p class="fs--14px">versatile</p>
                      </div>
                      <ul class="links">
                          <li><a href="#"><i class="las la-user"></i> Profile</a></li>
                          <li><a href="#"><i class="las la-key"></i> Change Password</a></li>
                          <li>


                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}


                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                          </a>
                        </li>

                      </ul>
                  </div>
              </li>
          </ul>
      </div>
  </div>
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
