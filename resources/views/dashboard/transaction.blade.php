
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
          <li><a href="#" class=""><img src="https://calamosassets.net/share/assets/templates/invester//images/icon/logout.png" alt="icon"> Logout</a></li>
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
                          <li><a href="https://calamosassets.net/share/user/profile-setting"><i class="las la-user"></i> Profile</a></li>
                          <li><a href="https://calamosassets.net/share/user/change-password"><i class="las la-key"></i> Change Password</a></li>
                          <li><a href="https://calamosassets.net/share/user/logout"><i class="las la-sign-out-alt"></i> Logout</a></li>
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
                          <option value="/share/user/transactions?trx_type=">All</option>
                          <option value="/share/user/transactions?trx_type=%2B" >Plus</option>
                          <option value="/share/user/transactions?trx_type=-" >Minus</option>
                      </select>
                  </div>
              </div>
              <div class="flex-grow-1">
                  <div class="custom-input-box">
                      <label>Remark</label>
                      <select name="remark" onChange="window.location.href=this.value">
                          <option value="/share/user/transactions?remark=">Any</option>
                                                  <option value="/share/user/transactions?remark=balance_add" >Balance add</option>
                                                  <option value="/share/user/transactions?remark=balance_subtract" >Balance subtract</option>
                                                  <option value="/share/user/transactions?remark=capital_return" >Capital return</option>
                                                  <option value="/share/user/transactions?remark=deposit" >Deposit</option>
                                                  <option value="/share/user/transactions?remark=interest" >Interest</option>
                                                  <option value="/share/user/transactions?remark=invest" >Invest</option>
                                                  <option value="/share/user/transactions?remark=registration_bonus" >Registration bonus</option>
                                                  <option value="/share/user/transactions?remark=withdraw" >Withdraw</option>
                                                  <option value="/share/user/transactions?remark=withdraw_reject" >Withdraw reject</option>
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
              </div><!-- transaction-item end -->
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
