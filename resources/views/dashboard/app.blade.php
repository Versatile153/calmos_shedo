
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
          @charset "UTF-8";/*!
 * Bootstrap v5.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */:root{--bs-blue:#0d6efd;--bs-indigo:#6610f2;--bs-purple:#6f42c1;--bs-pink:#d63384;--bs-red:#dc3545;--bs-orange:#fd7e14;--bs-yellow:#ffc107;--bs-green:#198754;--bs-teal:#20c997;--bs-cyan:#0dcaf0;--bs-white:#fff;--bs-gray:#6c757d;--bs-gray-dark:#343a40;--bs-gray-100:#f8f9fa;--bs-gray-200:#e9ecef;--bs-gray-300:#dee2e6;--bs-gray-400:#ced4da;--bs-gray-500:#adb5bd;--bs-gray-600:#6c757d;--bs-gray-700:#495057;--bs-gray-800:#343a40;--bs-gray-900:#212529;--bs-primary:#0d6efd;--bs-secondary:#6c757d;--bs-success:#198754;--bs-info:#0dcaf0;--bs-warning:#ffc107;--bs-danger:#dc3545;--bs-light:#f8f9fa;--bs-dark:#212529;--bs-primary-rgb:13,110,253;--bs-secondary-rgb:108,117,125;--bs-success-rgb:25,135,84;--bs-info-rgb:13,202,240;--bs-warning-rgb:255,193,7;--bs-danger-rgb:220,53,69;--bs-light-rgb:248,249,250;--bs-dark-rgb:33,37,41;--bs-white-rgb:255,255,255;--bs-black-rgb:0,0,0;--bs-body-color-rgb:33,37,41;--bs-body-bg-rgb:255,255,255;--bs-font-sans-serif:system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--bs-font-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--bs-gradient:linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));--bs-body-font-family:var(--bs-font-sans-serif);--bs-body-font-size:1rem;--bs-body-font-weight:400;--bs-body-line-height:1.5;--bs-body-color:#212529;--bs-body-bg:#fff}*,::after,::before{box-sizing:border-box}@media (prefers-reduced-motion:no-preference){:root{scroll-behavior:smooth}}body{margin:0;font-family:var(--bs-body-font-family);font-size:var(--bs-body-font-size);font-weight:var(--bs-body-font-weight);line-height:var(--bs-body-line-height);color:var(--bs-body-color);text-align:var(--bs-body-text-align);background-color:var(--bs-body-bg);-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}hr{margin:1rem 0;color:inherit;background-color:currentColor;border:0;opacity:.25}hr:not([size]){height:1px}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:.5rem;font-weight:500;line-height:1.2}.h1,h1{font-size:calc(1.375rem + 1.5vw)}@media (min-width:1200px){.h1,h1{font-size:2.5rem}}.h2,h2{font-size:calc(1.325rem + .9vw)}@media (min-width:1200px){.h2,h2{font-size:2rem}}.h3,h3{font-size:calc(1.3rem + .6vw)}@media (min-width:1200px){.h3,h3{font-size:1.75rem}}.h4,h4{font-size:calc(1.275rem + .3vw)}@media (min-width:1200px){.h4,h4{font-size:1.5rem}}.h5,h5{font-size:1.25rem}.h6,h6{font-size:1rem}p{margin-top:0;margin-bottom:1rem}abbr[data-bs-original-title],abbr[title]{-webkit-text-decoration:underline dotted;text-decoration:underline dotted;cursor:help;-webkit-text-decoration-skip-ink:none;text-decoration-skip-ink:none}address{margin-bottom:1rem;font-style:normal;line-height:inherit}ol,ul{padding-left:2rem}dl,ol,ul{margin-top:0;margin-bottom:1rem}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}dt{font-weight:700}dd{margin-bottom:.5rem;margin-left:0}blockquote{margin:0 0 1rem}b,strong{font-weight:bolder}.small,small{font-size:.875em}.mark,mark{padding:.2em;background-color:#fcf8e3}sub,sup{position:relative;font-size:.75em;line-height:0;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}a{color:#0d6efd;text-decoration:underline}a:hover{color:#0a58ca}a:not([href]):not([class]),a:not([href]):not([class]):hover{color:inherit;text-decoration:none}code,kbd,pre,samp{font-family:var(--bs-font-monospace);font-size:1em;direction:ltr;unicode-bidi:bidi-override}pre{display:block;margin-top:0;margin-bottom:1rem;overflow:auto;font-size:.875em}pre code{font-size:inherit;color:inherit;word-break:normal}code{font-size:.875em;color:#d63384;word-wrap:break-word}a>code{color:inherit}kbd{padding:.2rem .4rem;font-size:.875em;color:#fff;background-color:#212529;border-radius:.2rem}kbd kbd{padding:0;font-size:1em;font-weight:700}figure{margin:0 0 1rem}img,svg{vertical-align:middle}table{caption-side:bottom;border-collapse:collapse}caption{padding-top:.5rem;padding-bottom:.5rem;color:#6c757d;text-align:left}th{text-align:inherit;text-align:-webkit-match-parent}tbody,td,tfoot,th,thead,tr{border-color:inherit;border-style:solid;border-width:0}label{display:inline-block}button{border-radius:0}button:focus:not(:focus-visible){outline:0}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,select{text-transform:none}[role=button]{cursor:pointer}select{word-wrap:normal}select:disabled{opacity:1}[list]::-webkit-calendar-picker-indicator{display:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}::-moz-focus-inner{padding:0;border-style:none}textarea{resize:vertical}fieldset{min-width:0;padding:0;margin:0;border:0}legend{float:left;width:100%;padding:0;margin-bottom:.5rem;font-size:calc(1.275rem + .3vw);line-height:inherit}@media (min-width:1200px){legend{font-size:1.5rem}}legend+*{clear:left}::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-fields-wrapper,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-text,::-webkit-datetime-edit-year-field{padding:0}::-webkit-inner-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:textfield}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-color-swatch-wrapper{padding:0}::-webkit-file-upload-button{font:inherit}::file-selector-button{font:inherit}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}output{display:inline-block}iframe{border:0}summary{display:list-item;cursor:pointer}progress{vertical-align:baseline}[hidden]{display:none!important}.lead{font-size:1.25rem;font-weight:300}.display-1{font-size:calc(1.625rem + 4.5vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-1{font-size:5rem}}.display-2{font-size:calc(1.575rem + 3.9vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-2{font-size:4.5rem}}.display-3{font-size:calc(1.525rem + 3.3vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-3{font-size:4rem}}.display-4{font-size:calc(1.475rem + 2.7vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-4{font-size:3.5rem}}.display-5{font-size:calc(1.425rem + 2.1vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-5{font-size:3rem}}.display-6{font-size:calc(1.375rem + 1.5vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-6{font-size:2.5rem}}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;list-style:none}.list-inline-item{display:inline-block}.list-inline-item:not(:last-child){margin-right:.5rem}.initialism{font-size:.875em;text-transform:uppercase}.blockquote{margin-bottom:1rem;font-size:1.25rem}.blockquote>:last-child{margin-bottom:0}.blockquote-footer{margin-top:-1rem;margin-bottom:1rem;font-size:.875em;color:#6c757d}.blockquote-footer::before{content:"— "}.img-fluid{max-width:100%;height:auto}.img-thumbnail{padding:.25rem;background-color:#fff;border:1px solid #dee2e6;border-radius:.25rem;max-width:100%;height:auto}.figure{display:inline-block}.figure-img{margin-bottom:.5rem;line-height:1}.figure-caption{font-size:.875em;color:#6c757d}.container,.container-fluid,.container-lg,.container-md,.container-sm,.container-xl,.container-xxl{width:100%;padding-right:var(--bs-gutter-x,.75rem);padding-left:var(--bs-gutter-x,.75rem);margin-right:auto;margin-left:auto}@media (min-width:576px){.container,.container-sm{max-width:540px}}@media (min-width:768px){.container,.container-md,.container-sm{max-width:720px}}@media (min-width:992px){.container,.container-lg,.container-md,.container-sm{max-width:960px}}@media (min-width:1200px){.container,.container-lg,.container-md,.container-sm,.container-xl{max-width:1140px}}@media (min-width:1400px){.container,.container-lg,.container-md,.container-sm,.container-xl,.container-xxl{max-width:1320px}}.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(-1 * var(--bs-gutter-y));margin-right:calc(-.5 * var(--bs-gutter-x));margin-left:calc(-.5 * var(--bs-gutter-x))}.row>*{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * .5);padding-left:calc(var(--bs-gutter-x) * .5);margin-top:var(--bs-gutter-y)}.col{flex:1 0 0%}.row-cols-auto>*{flex:0 0 auto;width:auto}.row-cols-1>*{flex:0 0 auto;width:100%}.row-cols-2>*{flex:0 0 auto;width:50%}.row-cols-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-4>*{flex:0 0 auto;width:25%}.row-cols-5>*{flex:0 0 auto;width:20%}.row-cols-6>*{flex:0 0 auto;width:16.6666666667%}.col-auto{flex:0 0 auto;width:auto}.col-1{flex:0 0 auto;width:8.33333333%}.col-2{flex:0 0 auto;width:16.66666667%}.col-3{flex:0 0 auto;width:25%}.col-4{flex:0 0 auto;width:33.33333333%}.col-5{flex:0 0 auto;width:41.66666667%}.col-6{flex:0 0 auto;width:50%}.col-7{flex:0 0 auto;width:58.33333333%}.col-8{flex:0 0 auto;width:66.66666667%}.col-9{flex:0 0 auto;width:75%}.col-10{flex:0 0 auto;width:83.33333333%}.col-11{flex:0 0 auto;width:91.66666667%}.col-12{flex:0 0 auto;width:100%}.offset-1{margin-left:8.33333333%}.offset-2{margin-left:16.66666667%}.offset-3{margin-left:25%}.offset-4{margin-left:33.33333333%}.offset-5{margin-left:41.66666667%}.offset-6{margin-left:50%}.offset-7{margin-left:58.33333333%}.offset-8{margin-left:66.66666667%}.offset-9{margin-left:75%}.offset-10{margin-left:83.33333333%}.offset-11{margin-left:91.66666667%}.g-0,.gx-0{--bs-gutter-x:0}.g-0,.gy-0{--bs-gutter-y:0}.g-1,.gx-1{--bs-gutter-x:0.25rem}.g-1,.gy-1{--bs-gutter-y:0.25rem}.g-2,.gx-2{--bs-gutter-x:0.5rem}.g-2,.gy-2{--bs-gutter-y:0.5rem}.g-3,.gx-3{--bs-gutter-x:1rem}.g-3,.gy-3{--bs-gutter-y:1rem}.g-4,.gx-4{--bs-gutter-x:1.5rem}.g-4,.gy-4{--bs-gutter-y:1.5rem}.g-5,.gx-5{--bs-gutter-x:3rem}.g-5,.gy-5{--bs-gutter-y:3rem}@media (min-width:576px){.col-sm{flex:1 0 0%}.row-cols-sm-auto>*{flex:0 0 auto;width:auto}.row-cols-sm-1>*{flex:0 0 auto;width:100%}.row-cols-sm-2>*{flex:0 0 auto;width:50%}.row-cols-sm-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-sm-4>*{flex:0 0 auto;width:25%}.row-cols-sm-5>*{flex:0 0 auto;width:20%}.row-cols-sm-6>*{flex:0 0 auto;width:16.6666666667%}.col-sm-auto{flex:0 0 auto;width:auto}.col-sm-1{flex:0 0 auto;width:8.33333333%}.col-sm-2{flex:0 0 auto;width:16.66666667%}.col-sm-3{flex:0 0 auto;width:25%}.col-sm-4{flex:0 0 auto;width:33.33333333%}.col-sm-5{flex:0 0 auto;width:41.66666667%}.col-sm-6{flex:0 0 auto;width:50%}.col-sm-7{flex:0 0 auto;width:58.33333333%}.col-sm-8{flex:0 0 auto;width:66.66666667%}.col-sm-9{flex:0 0 auto;width:75%}.col-sm-10{flex:0 0 auto;width:83.33333333%}.col-sm-11{flex:0 0 auto;width:91.66666667%}.col-sm-12{flex:0 0 auto;width:100%}.offset-sm-0{margin-left:0}.offset-sm-1{margin-left:8.33333333%}.offset-sm-2{margin-left:16.66666667%}.offset-sm-3{margin-left:25%}.offset-sm-4{margin-left:33.33333333%}.offset-sm-5{margin-left:41.66666667%}.offset-sm-6{margin-left:50%}.offset-sm-7{margin-left:58.33333333%}.offset-sm-8{margin-left:66.66666667%}.offset-sm-9{margin-left:75%}.offset-sm-10{margin-left:83.33333333%}.offset-sm-11{margin-left:91.66666667%}.g-sm-0,.gx-sm-0{--bs-gutter-x:0}.g-sm-0,.gy-sm-0{--bs-gutter-y:0}.g-sm-1,.gx-sm-1{--bs-gutter-x:0.25rem}.g-sm-1,.gy-sm-1{--bs-gutter-y:0.25rem}.g-sm-2,.gx-sm-2{--bs-gutter-x:0.5rem}.g-sm-2,.gy-sm-2{--bs-gutter-y:0.5rem}.g-sm-3,.gx-sm-3{--bs-gutter-x:1rem}.g-sm-3,.gy-sm-3{--bs-gutter-y:1rem}.g-sm-4,.gx-sm-4{--bs-gutter-x:1.5rem}.g-sm-4,.gy-sm-4{--bs-gutter-y:1.5rem}.g-sm-5,.gx-sm-5{--bs-gutter-x:3rem}.g-sm-5,.gy-sm-5{--bs-gutter-y:3rem}}@media (min-width:768px){.col-md{flex:1 0 0%}.row-cols-md-auto>*{flex:0 0 auto;width:auto}.row-cols-md-1>*{flex:0 0 auto;width:100%}.row-cols-md-2>*{flex:0 0 auto;width:50%}.row-cols-md-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-md-4>*{flex:0 0 auto;width:25%}.row-cols-md-5>*{flex:0 0 auto;width:20%}.row-cols-md-6>*{flex:0 0 auto;width:16.6666666667%}.col-md-auto{flex:0 0 auto;width:auto}.col-md-1{flex:0 0 auto;width:8.33333333%}.col-md-2{flex:0 0 auto;width:16.66666667%}.col-md-3{flex:0 0 auto;width:25%}.col-md-4{flex:0 0 auto;width:33.33333333%}.col-md-5{flex:0 0 auto;width:41.66666667%}.col-md-6{flex:0 0 auto;width:50%}.col-md-7{flex:0 0 auto;width:58.33333333%}.col-md-8{flex:0 0 auto;width:66.66666667%}.col-md-9{flex:0 0 auto;width:75%}.col-md-10{flex:0 0 auto;width:83.33333333%}.col-md-11{flex:0 0 auto;width:91.66666667%}.col-md-12{flex:0 0 auto;width:100%}.offset-md-0{margin-left:0}.offset-md-1{margin-left:8.33333333%}.offset-md-2{margin-left:16.66666667%}.offset-md-3{margin-left:25%}.offset-md-4{margin-left:33.33333333%}.offset-md-5{margin-left:41.66666667%}.offset-md-6{margin-left:50%}.offset-md-7{margin-left:58.33333333%}.offset-md-8{margin-left:66.66666667%}.offset-md-9{margin-left:75%}.offset-md-10{margin-left:83.33333333%}.offset-md-11{margin-left:91.66666667%}.g-md-0,.gx-md-0{--bs-gutter-x:0}.g-md-0,.gy-md-0{--bs-gutter-y:0}.g-md-1,.gx-md-1{--bs-gutter-x:0.25rem}.g-md-1,.gy-md-1{--bs-gutter-y:0.25rem}.g-md-2,.gx-md-2{--bs-gutter-x:0.5rem}.g-md-2,.gy-md-2{--bs-gutter-y:0.5rem}.g-md-3,.gx-md-3{--bs-gutter-x:1rem}.g-md-3,.gy-md-3{--bs-gutter-y:1rem}.g-md-4,.gx-md-4{--bs-gutter-x:1.5rem}.g-md-4,.gy-md-4{--bs-gutter-y:1.5rem}.g-md-5,.gx-md-5{--bs-gutter-x:3rem}.g-md-5,.gy-md-5{--bs-gutter-y:3rem}}@media (min-width:992px){.col-lg{flex:1 0 0%}.row-cols-lg-auto>*{flex:0 0 auto;width:auto}.row-cols-lg-1>*{flex:0 0 auto;width:100%}.row-cols-lg-2>*{flex:0 0 auto;width:50%}.row-cols-lg-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-lg-4>*{flex:0 0 auto;width:25%}.row-cols-lg-5>*{flex:0 0 auto;width:20%}.row-cols-lg-6>*{flex:0 0 auto;width:16.6666666667%}.col-lg-auto{flex:0 0 auto;width:auto}.col-lg-1{flex:0 0 auto;width:8.33333333%}.col-lg-2{flex:0 0 auto;width:16.66666667%}.col-lg-3{flex:0 0 auto;width:25%}.col-lg-4{flex:0 0 auto;width:33.33333333%}.col-lg-5{flex:0 0 auto;width:41.66666667%}.col-lg-6{flex:0 0 auto;width:50%}.col-lg-7{flex:0 0 auto;width:58.33333333%}.col-lg-8{flex:0 0 auto;width:66.66666667%}.col-lg-9{flex:0 0 auto;width:75%}.col-lg-10{flex:0 0 auto;width:83.33333333%}.col-lg-11{flex:0 0 auto;width:91.66666667%}.col-lg-12{flex:0 0 auto;width:100%}.offset-lg-0{margin-left:0}.offset-lg-1{margin-left:8.33333333%}.offset-lg-2{margin-left:16.66666667%}.offset-lg-3{margin-left:25%}.offset-lg-4{margin-left:33.33333333%}.offset-lg-5{margin-left:41.66666667%}.offset-lg-6{margin-left:50%}.offset-lg-7{margin-left:58.33333333%}.offset-lg-8{margin-left:66.66666667%}.offset-lg-9{margin-left:75%}.offset-lg-10{margin-left:83.33333333%}.offset-lg-11{margin-left:91.66666667%}.g-lg-0,.gx-lg-0{--bs-gutter-x:0}.g-lg-0,.gy-lg-0{--bs-gutter-y:0}.g-lg-1,.gx-lg-1{--bs-gutter-x:0.25rem}.g-lg-1,.gy-lg-1{--bs-gutter-y:0.25rem}.g-lg-2,.gx-lg-2{--bs-gutter-x:0.5rem}.g-lg-2,.gy-lg-2{--bs-gutter-y:0.5rem}.g-lg-3,.gx-lg-3{--bs-gutter-x:1rem}.g-lg-3,.gy-lg-3{--bs-gutter-y:1rem}.g-lg-4,.gx-lg-4{--bs-gutter-x:1.5rem}.g-lg-4,.gy-lg-4{--bs-gutter-y:1.5rem}.g-lg-5,.gx-lg-5{--bs-gutter-x:3rem}.g-lg-5,.gy-lg-5{--bs-gutter-y:3rem}}@media (min-width:1200px){.col-xl{flex:1 0 0%}.row-cols-xl-auto>*{flex:0 0 auto;width:auto}.row-cols-xl-1>*{flex:0 0 auto;width:100%}.row-cols-xl-2>*{flex:0 0 auto;width:50%}.row-cols-xl-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-xl-4>*{flex:0 0 auto;width:25%}.row-cols-xl-5>*{flex:0 0 auto;width:20%}.row-cols-xl-6>*{flex:0 0 auto;width:16.6666666667%}.col-xl-auto{flex:0 0 auto;width:auto}.col-xl-1{flex:0 0 auto;width:8.33333333%}.col-xl-2{flex:0 0 auto;width:16.66666667%}.col-xl-3{flex:0 0 auto;width:25%}.col-xl-4{flex:0 0 auto;width:33.33333333%}.col-xl-5{flex:0 0 auto;width:41.66666667%}.col-xl-6{flex:0 0 auto;width:50%}.col-xl-7{flex:0 0 auto;width:58.33333333%}.col-xl-8{flex:0 0 auto;width:66.66666667%}.col-xl-9{flex:0 0 auto;width:75%}.col-xl-10{flex:0 0 auto;width:83.33333333%}.col-xl-11{flex:0 0 auto;width:91.66666667%}.col-xl-12{flex:0 0 auto;width:100%}.offset-xl-0{margin-left:0}.offset-xl-1{margin-left:8.33333333%}.offset-xl-2{margin-left:16.66666667%}.offset-xl-3{margin-left:25%}.offset-xl-4{margin-left:33.33333333%}.offset-xl-5{margin-left:41.66666667%}.offset-xl-6{margin-left:50%}.offset-xl-7{margin-left:58.33333333%}.offset-xl-8{margin-left:66.66666667%}.offset-xl-9{margin-left:75%}.offset-xl-10{margin-left:83.33333333%}.offset-xl-11{margin-left:91.66666667%}.g-xl-0,.gx-xl-0{--bs-gutter-x:0}.g-xl-0,.gy-xl-0{--bs-gutter-y:0}.g-xl-1,.gx-xl-1{--bs-gutter-x:0.25rem}.g-xl-1,.gy-xl-1{--bs-gutter-y:0.25rem}.g-xl-2,.gx-xl-2{--bs-gutter-x:0.5rem}.g-xl-2,.gy-xl-2{--bs-gutter-y:0.5rem}.g-xl-3,.gx-xl-3{--bs-gutter-x:1rem}.g-xl-3,.gy-xl-3{--bs-gutter-y:1rem}.g-xl-4,.gx-xl-4{--bs-gutter-x:1.5rem}.g-xl-4,.gy-xl-4{--bs-gutter-y:1.5rem}.g-xl-5,.gx-xl-5{--bs-gutter-x:3rem}.g-xl-5,.gy-xl-5{--bs-gutter-y:3rem}}@media (min-width:1400px){.col-xxl{flex:1 0 0%}.row-cols-xxl-auto>*{flex:0 0 auto;width:auto}.row-cols-xxl-1>*{flex:0 0 auto;width:100%}.row-cols-xxl-2>*{flex:0 0 auto;width:50%}.row-cols-xxl-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-xxl-4>*{flex:0 0 auto;width:25%}.row-cols-xxl-5>*{flex:0 0 auto;width:20%}.row-cols-xxl-6>*{flex:0 0 auto;width:16.6666666667%}.col-xxl-auto{flex:0 0 auto;width:auto}.col-xxl-1{flex:0 0 auto;width:8.33333333%}.col-xxl-2{flex:0 0 auto;width:16.66666667%}.col-xxl-3{flex:0 0 auto;width:25%}.col-xxl-4{flex:0 0 auto;width:33.33333333%}.col-xxl-5{flex:0 0 auto;width:41.66666667%}.col-xxl-6{flex:0 0 auto;width:50%}.col-xxl-7{flex:0 0 auto;width:58.33333333%}.col-xxl-8{flex:0 0 auto;width:66.66666667%}.col-xxl-9{flex:0 0 auto;width:75%}.col-xxl-10{flex:0 0 auto;width:83.33333333%}.col-xxl-11{flex:0 0 auto;width:91.66666667%}.col-xxl-12{flex:0 0 auto;width:100%}.offset-xxl-0{margin-left:0}.offset-xxl-1{margin-left:8.33333333%}.offset-xxl-2{margin-left:16.66666667%}.offset-xxl-3{margin-left:25%}.offset-xxl-4{margin-left:33.33333333%}.offset-xxl-5{margin-left:41.66666667%}.offset-xxl-6{margin-left:50%}.offset-xxl-7{margin-left:58.33333333%}.offset-xxl-8{margin-left:66.66666667%}.offset-xxl-9{margin-left:75%}.offset-xxl-10{margin-left:83.33333333%}.offset-xxl-11{margin-left:91.66666667%}.g-xxl-0,.gx-xxl-0{--bs-gutter-x:0}.g-xxl-0,.gy-xxl-0{--bs-gutter-y:0}.g-xxl-1,.gx-xxl-1{--bs-gutter-x:0.25rem}.g-xxl-1,.gy-xxl-1{--bs-gutter-y:0.25rem}.g-xxl-2,.gx-xxl-2{--bs-gutter-x:0.5rem}.g-xxl-2,.gy-xxl-2{--bs-gutter-y:0.5rem}.g-xxl-3,.gx-xxl-3{--bs-gutter-x:1rem}.g-xxl-3,.gy-xxl-3{--bs-gutter-y:1rem}.g-xxl-4,.gx-xxl-4{--bs-gutter-x:1.5rem}.g-xxl-4,.gy-xxl-4{--bs-gutter-y:1.5rem}.g-xxl-5,.gx-xxl-5{--bs-gutter-x:3rem}.g-xxl-5,.gy-xxl-5{--bs-gutter-y:3rem}}.table{--bs-table-bg:transparent;--bs-table-accent-bg:transparent;--bs-table-striped-color:#212529;--bs-table-striped-bg:rgba(0, 0, 0, 0.05);--bs-table-active-color:#212529;--bs-table-active-bg:rgba(0, 0, 0, 0.1);--bs-table-hover-color:#212529;--bs-table-hover-bg:rgba(0, 0, 0, 0.075);width:100%;margin-bottom:1rem;color:#212529;vertical-align:top;border-color:#dee2e6}.table>:not(caption)>*>*{padding:.5rem .5rem;background-color:var(--bs-table-bg);border-bottom-width:1px;box-shadow:inset 0 0 0 9999px var(--bs-table-accent-bg)}.table>tbody{vertical-align:inherit}.table>thead{vertical-align:bottom}.table>:not(:first-child){border-top:2px solid currentColor}.caption-top{caption-side:top}.table-sm>:not(caption)>*>*{padding:.25rem .25rem}.table-bordered>:not(caption)>*{border-width:1px 0}.table-bordered>:not(caption)>*>*{border-width:0 1px}.table-borderless>:not(caption)>*>*{border-bottom-width:0}.table-borderless>:not(:first-child){border-top-width:0}.table-striped>tbody>tr:nth-of-type(odd)>*{--bs-table-accent-bg:var(--bs-table-striped-bg);color:var(--bs-table-striped-color)}.table-active{--bs-table-accent-bg:var(--bs-table-active-bg);color:var(--bs-table-active-color)}.table-hover>tbody>tr:hover>*{--bs-table-accent-bg:var(--bs-table-hover-bg);color:var(--bs-table-hover-color)}.table-primary{--bs-table-bg:#cfe2ff;--bs-table-striped-bg:#c5d7f2;--bs-table-striped-color:#000;--bs-table-active-bg:#bacbe6;--bs-table-active-color:#000;--bs-table-hover-bg:#bfd1ec;--bs-table-hover-color:#000;color:#000;border-color:#bacbe6}.table-secondary{--bs-table-bg:#e2e3e5;--bs-table-striped-bg:#d7d8da;--bs-table-striped-color:#000;--bs-table-active-bg:#cbccce;--bs-table-active-color:#000;--bs-table-hover-bg:#d1d2d4;--bs-table-hover-color:#000;color:#000;border-color:#cbccce}.table-success{--bs-table-bg:#d1e7dd;--bs-table-striped-bg:#c7dbd2;--bs-table-striped-color:#000;--bs-table-active-bg:#bcd0c7;--bs-table-active-color:#000;--bs-table-hover-bg:#c1d6cc;--bs-table-hover-color:#000;color:#000;border-color:#bcd0c7}.table-info{--bs-table-bg:#cff4fc;--bs-table-striped-bg:#c5e8ef;--bs-table-striped-color:#000;--bs-table-active-bg:#badce3;--bs-table-active-color:#000;--bs-table-hover-bg:#bfe2e9;--bs-table-hover-color:#000;color:#000;border-color:#badce3}.table-warning{--bs-table-bg:#fff3cd;--bs-table-striped-bg:#f2e7c3;--bs-table-striped-color:#000;--bs-table-active-bg:#e6dbb9;--bs-table-active-color:#000;--bs-table-hover-bg:#ece1be;--bs-table-hover-color:#000;color:#000;border-color:#e6dbb9}.table-danger{--bs-table-bg:#f8d7da;--bs-table-striped-bg:#eccccf;--bs-table-striped-color:#000;--bs-table-active-bg:#dfc2c4;--bs-table-active-color:#000;--bs-table-hover-bg:#e5c7ca;--bs-table-hover-color:#000;color:#000;border-color:#dfc2c4}.table-light{--bs-table-bg:#f8f9fa;--bs-table-striped-bg:#ecedee;--bs-table-striped-color:#000;--bs-table-active-bg:#dfe0e1;--bs-table-active-color:#000;--bs-table-hover-bg:#e5e6e7;--bs-table-hover-color:#000;color:#000;border-color:#dfe0e1}.table-dark{--bs-table-bg:#212529;--bs-table-striped-bg:#2c3034;--bs-table-striped-color:#fff;--bs-table-active-bg:#373b3e;--bs-table-active-color:#fff;--bs-table-hover-bg:#323539;--bs-table-hover-color:#fff;color:#fff;border-color:#373b3e}.table-responsive{overflow-x:auto;-webkit-overflow-scrolling:touch}@media (max-width:575.98px){.table-responsive-sm{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:767.98px){.table-responsive-md{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:991.98px){.table-responsive-lg{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:1199.98px){.table-responsive-xl{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:1399.98px){.table-responsive-xxl{overflow-x:auto;-webkit-overflow-scrolling:touch}}.form-label{margin-bottom:.5rem}.col-form-label{padding-top:calc(.375rem + 1px);padding-bottom:calc(.375rem + 1px);margin-bottom:0;font-size:inherit;line-height:1.5}.col-form-label-lg{padding-top:calc(.5rem + 1px);padding-bottom:calc(.5rem + 1px);font-size:1.25rem}.col-form-label-sm{padding-top:calc(.25rem + 1px);padding-bottom:calc(.25rem + 1px);font-size:.875rem}.form-text{margin-top:.25rem;font-size:.875em;color:#6c757d}.form-control{display:block;width:100%;padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control{transition:none}}.form-control[type=file]{overflow:hidden}.form-control[type=file]:not(:disabled):not([readonly]){cursor:pointer}.form-control:focus{color:#212529;background-color:#fff;border-color:#86b7fe;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.form-control::-webkit-date-and-time-value{height:1.5em}.form-control::-moz-placeholder{color:#6c757d;opacity:1}.form-control::placeholder{color:#6c757d;opacity:1}.form-control:disabled,.form-control[readonly]{background-color:#e9ecef;opacity:1}.form-control::-webkit-file-upload-button{padding:.375rem .75rem;margin:-.375rem -.75rem;-webkit-margin-end:.75rem;margin-inline-end:.75rem;color:#212529;background-color:#e9ecef;pointer-events:none;border-color:inherit;border-style:solid;border-width:0;border-inline-end-width:1px;border-radius:0;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}.form-control::file-selector-button{padding:.375rem .75rem;margin:-.375rem -.75rem;-webkit-margin-end:.75rem;margin-inline-end:.75rem;color:#212529;background-color:#e9ecef;pointer-events:none;border-color:inherit;border-style:solid;border-width:0;border-inline-end-width:1px;border-radius:0;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control::-webkit-file-upload-button{-webkit-transition:none;transition:none}.form-control::file-selector-button{transition:none}}.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button{background-color:#dde0e3}.form-control:hover:not(:disabled):not([readonly])::file-selector-button{background-color:#dde0e3}.form-control::-webkit-file-upload-button{padding:.375rem .75rem;margin:-.375rem -.75rem;-webkit-margin-end:.75rem;margin-inline-end:.75rem;color:#212529;background-color:#e9ecef;pointer-events:none;border-color:inherit;border-style:solid;border-width:0;border-inline-end-width:1px;border-radius:0;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control::-webkit-file-upload-button{-webkit-transition:none;transition:none}}.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button{background-color:#dde0e3}.form-control-plaintext{display:block;width:100%;padding:.375rem 0;margin-bottom:0;line-height:1.5;color:#212529;background-color:transparent;border:solid transparent;border-width:1px 0}.form-control-plaintext.form-control-lg,.form-control-plaintext.form-control-sm{padding-right:0;padding-left:0}.form-control-sm{min-height:calc(1.5em + .5rem + 2px);padding:.25rem .5rem;font-size:.875rem;border-radius:.2rem}.form-control-sm::-webkit-file-upload-button{padding:.25rem .5rem;margin:-.25rem -.5rem;-webkit-margin-end:.5rem;margin-inline-end:.5rem}.form-control-sm::file-selector-button{padding:.25rem .5rem;margin:-.25rem -.5rem;-webkit-margin-end:.5rem;margin-inline-end:.5rem}.form-control-sm::-webkit-file-upload-button{padding:.25rem .5rem;margin:-.25rem -.5rem;-webkit-margin-end:.5rem;margin-inline-end:.5rem}.form-control-lg{min-height:calc(1.5em + 1rem + 2px);padding:.5rem 1rem;font-size:1.25rem;border-radius:.3rem}.form-control-lg::-webkit-file-upload-button{padding:.5rem 1rem;margin:-.5rem -1rem;-webkit-margin-end:1rem;margin-inline-end:1rem}.form-control-lg::file-selector-button{padding:.5rem 1rem;margin:-.5rem -1rem;-webkit-margin-end:1rem;margin-inline-end:1rem}.form-control-lg::-webkit-file-upload-button{padding:.5rem 1rem;margin:-.5rem -1rem;-webkit-margin-end:1rem;margin-inline-end:1rem}textarea.form-control{min-height:calc(1.5em + .75rem + 2px)}textarea.form-control-sm{min-height:calc(1.5em + .5rem + 2px)}textarea.form-control-lg{min-height:calc(1.5em + 1rem + 2px)}.form-control-color{width:3rem;height:auto;padding:.375rem}.form-control-color:not(:disabled):not([readonly]){cursor:pointer}.form-control-color::-moz-color-swatch{height:1.5em;border-radius:.25rem}.form-control-color::-webkit-color-swatch{height:1.5em;border-radius:.25rem}.form-select{display:block;width:100%;padding:.375rem 2.25rem .375rem .75rem;-moz-padding-start:calc(0.75rem - 3px);font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right .75rem center;background-size:16px 12px;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;-webkit-appearance:none;-moz-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.form-select{transition:none}}.form-select:focus{border-color:#86b7fe;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.form-select[multiple],.form-select[size]:not([size="1"]){padding-right:.75rem;background-image:none}.form-select:disabled{background-color:#e9ecef}.form-select:-moz-focusring{color:transparent;text-shadow:0 0 0 #212529}.form-select-sm{padding-top:.25rem;padding-bottom:.25rem;padding-left:.5rem;font-size:.875rem;border-radius:.2rem}.form-select-lg{padding-top:.5rem;padding-bottom:.5rem;padding-left:1rem;font-size:1.25rem;border-radius:.3rem}.form-check{display:block;min-height:1.5rem;padding-left:1.5em;margin-bottom:.125rem}.form-check .form-check-input{float:left;margin-left:-1.5em}.form-check-input{width:1em;height:1em;margin-top:.25em;vertical-align:top;background-color:#fff;background-repeat:no-repeat;background-position:center;background-size:contain;border:1px solid rgba(0,0,0,.25);-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-print-color-adjust:exact;color-adjust:exact}.form-check-input[type=checkbox]{border-radius:.25em}.form-check-input[type=radio]{border-radius:50%}.form-check-input:active{filter:brightness(90%)}.form-check-input:focus{border-color:#86b7fe;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.form-check-input:checked{background-color:#0d6efd;border-color:#0d6efd}.form-check-input:checked[type=checkbox]{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e")}.form-check-input:checked[type=radio]{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e")}.form-check-input[type=checkbox]:indeterminate{background-color:#0d6efd;border-color:#0d6efd;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e")}.form-check-input:disabled{pointer-events:none;filter:none;opacity:.5}.form-check-input:disabled~.form-check-label,.form-check-input[disabled]~.form-check-label{opacity:.5}.form-switch{padding-left:2.5em}.form-switch .form-check-input{width:2em;margin-left:-2.5em;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");background-position:left center;border-radius:2em;transition:background-position .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-switch .form-check-input{transition:none}}.form-switch .form-check-input:focus{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2386b7fe'/%3e%3c/svg%3e")}.form-switch .form-check-input:checked{background-position:right center;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")}.form-check-inline{display:inline-block;margin-right:1rem}.btn-check{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.btn-check:disabled+.btn,.btn-check[disabled]+.btn{pointer-events:none;filter:none;opacity:.65}.form-range{width:100%;height:1.5rem;padding:0;background-color:transparent;-webkit-appearance:none;-moz-appearance:none;appearance:none}.form-range:focus{outline:0}.form-range:focus::-webkit-slider-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .25rem rgba(13,110,253,.25)}.form-range:focus::-moz-range-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .25rem rgba(13,110,253,.25)}.form-range::-moz-focus-outer{border:0}.form-range::-webkit-slider-thumb{width:1rem;height:1rem;margin-top:-.25rem;background-color:#0d6efd;border:0;border-radius:1rem;-webkit-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-webkit-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.form-range::-webkit-slider-thumb{-webkit-transition:none;transition:none}}.form-range::-webkit-slider-thumb:active{background-color:#b6d4fe}.form-range::-webkit-slider-runnable-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.form-range::-moz-range-thumb{width:1rem;height:1rem;background-color:#0d6efd;border:0;border-radius:1rem;-moz-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-moz-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.form-range::-moz-range-thumb{-moz-transition:none;transition:none}}.form-range::-moz-range-thumb:active{background-color:#b6d4fe}.form-range::-moz-range-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.form-range:disabled{pointer-events:none}.form-range:disabled::-webkit-slider-thumb{background-color:#adb5bd}.form-range:disabled::-moz-range-thumb{background-color:#adb5bd}.form-floating{position:relative}.form-floating>.form-control,.form-floating>.form-select{height:calc(3.5rem + 2px);line-height:1.25}.form-floating>label{position:absolute;top:0;left:0;height:100%;padding:1rem .75rem;pointer-events:none;border:1px solid transparent;transform-origin:0 0;transition:opacity .1s ease-in-out,transform .1s ease-in-out}@media (prefers-reduced-motion:reduce){.form-floating>label{transition:none}}.form-floating>.form-control{padding:1rem .75rem}.form-floating>.form-control::-moz-placeholder{color:transparent}.form-floating>.form-control::placeholder{color:transparent}.form-floating>.form-control:not(:-moz-placeholder-shown){padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-control:focus,.form-floating>.form-control:not(:placeholder-shown){padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-control:-webkit-autofill{padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-select{padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-control:not(:-moz-placeholder-shown)~label{opacity:.65;transform:scale(.85) translateY(-.5rem) translateX(.15rem)}.form-floating>.form-control:focus~label,.form-floating>.form-control:not(:placeholder-shown)~label,.form-floating>.form-select~label{opacity:.65;transform:scale(.85) translateY(-.5rem) translateX(.15rem)}.form-floating>.form-control:-webkit-autofill~label{opacity:.65;transform:scale(.85) translateY(-.5rem) translateX(.15rem)}.input-group{position:relative;display:flex;flex-wrap:wrap;align-items:stretch;width:100%}.input-group>.form-control,.input-group>.form-select{position:relative;flex:1 1 auto;width:1%;min-width:0}.input-group>.form-control:focus,.input-group>.form-select:focus{z-index:3}.input-group .btn{position:relative;z-index:2}.input-group .btn:focus{z-index:3}.input-group-text{display:flex;align-items:center;padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:center;white-space:nowrap;background-color:#e9ecef;border:1px solid #ced4da;border-radius:.25rem}.input-group-lg>.btn,.input-group-lg>.form-control,.input-group-lg>.form-select,.input-group-lg>.input-group-text{padding:.5rem 1rem;font-size:1.25rem;border-radius:.3rem}.input-group-sm>.btn,.input-group-sm>.form-control,.input-group-sm>.form-select,.input-group-sm>.input-group-text{padding:.25rem .5rem;font-size:.875rem;border-radius:.2rem}.input-group-lg>.form-select,.input-group-sm>.form-select{padding-right:3rem}.input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),.input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu){border-top-right-radius:0;border-bottom-right-radius:0}.input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),.input-group.has-validation>:nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu){border-top-right-radius:0;border-bottom-right-radius:0}.input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback){margin-left:-1px;border-top-left-radius:0;border-bottom-left-radius:0}.valid-feedback{display:none;width:100%;margin-top:.25rem;font-size:.875em;color:#198754}.valid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.875rem;color:#fff;background-color:rgba(25,135,84,.9);border-radius:.25rem}.is-valid~.valid-feedback,.is-valid~.valid-tooltip,.was-validated :valid~.valid-feedback,.was-validated :valid~.valid-tooltip{display:block}.form-control.is-valid,.was-validated .form-control:valid{border-color:#198754;padding-right:calc(1.5em + .75rem);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right calc(.375em + .1875rem) center;background-size:calc(.75em + .375rem) calc(.75em + .375rem)}.form-control.is-valid:focus,.was-validated .form-control:valid:focus{border-color:#198754;box-shadow:0 0 0 .25rem rgba(25,135,84,.25)}.was-validated textarea.form-control:valid,textarea.form-control.is-valid{padding-right:calc(1.5em + .75rem);background-position:top calc(.375em + .1875rem) right calc(.375em + .1875rem)}.form-select.is-valid,.was-validated .form-select:valid{border-color:#198754}.form-select.is-valid:not([multiple]):not([size]),.form-select.is-valid:not([multiple])[size="1"],.was-validated .form-select:valid:not([multiple]):not([size]),.was-validated .form-select:valid:not([multiple])[size="1"]{padding-right:4.125rem;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"),url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");background-position:right .75rem center,center right 2.25rem;background-size:16px 12px,calc(.75em + .375rem) calc(.75em + .375rem)}.form-select.is-valid:focus,.was-validated .form-select:valid:focus{border-color:#198754;box-shadow:0 0 0 .25rem rgba(25,135,84,.25)}.form-check-input.is-valid,.was-validated .form-check-input:valid{border-color:#198754}.form-check-input.is-valid:checked,.was-validated .form-check-input:valid:checked{background-color:#198754}.form-check-input.is-valid:focus,.was-validated .form-check-input:valid:focus{box-shadow:0 0 0 .25rem rgba(25,135,84,.25)}.form-check-input.is-valid~.form-check-label,.was-validated .form-check-input:valid~.form-check-label{color:#198754}.form-check-inline .form-check-input~.valid-feedback{margin-left:.5em}.input-group .form-control.is-valid,.input-group .form-select.is-valid,.was-validated .input-group .form-control:valid,.was-validated .input-group .form-select:valid{z-index:1}.input-group .form-control.is-valid:focus,.input-group .form-select.is-valid:focus,.was-validated .input-group .form-control:valid:focus,.was-validated .input-group .form-select:valid:focus{z-index:3}.invalid-feedback{display:none;width:100%;margin-top:.25rem;font-size:.875em;color:#dc3545}.invalid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.875rem;color:#fff;background-color:rgba(220,53,69,.9);border-radius:.25rem}.is-invalid~.invalid-feedback,.is-invalid~.invalid-tooltip,.was-validated :invalid~.invalid-feedback,.was-validated :invalid~.invalid-tooltip{display:block}.form-control.is-invalid,.was-validated .form-control:invalid{border-color:#dc3545;padding-right:calc(1.5em + .75rem);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right calc(.375em + .1875rem) center;background-size:calc(.75em + .375rem) calc(.75em + .375rem)}.form-control.is-invalid:focus,.was-validated .form-control:invalid:focus{border-color:#dc3545;box-shadow:0 0 0 .25rem rgba(220,53,69,.25)}.was-validated textarea.form-control:invalid,textarea.form-control.is-invalid{padding-right:calc(1.5em + .75rem);background-position:top calc(.375em + .1875rem) right calc(.375em + .1875rem)}.form-select.is-invalid,.was-validated .form-select:invalid{border-color:#dc3545}.form-select.is-invalid:not([multiple]):not([size]),.form-select.is-invalid:not([multiple])[size="1"],.was-validated .form-select:invalid:not([multiple]):not([size]),.was-validated .form-select:invalid:not([multiple])[size="1"]{padding-right:4.125rem;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"),url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");background-position:right .75rem center,center right 2.25rem;background-size:16px 12px,calc(.75em + .375rem) calc(.75em + .375rem)}.form-select.is-invalid:focus,.was-validated .form-select:invalid:focus{border-color:#dc3545;box-shadow:0 0 0 .25rem rgba(220,53,69,.25)}.form-check-input.is-invalid,.was-validated .form-check-input:invalid{border-color:#dc3545}.form-check-input.is-invalid:checked,.was-validated .form-check-input:invalid:checked{background-color:#dc3545}.form-check-input.is-invalid:focus,.was-validated .form-check-input:invalid:focus{box-shadow:0 0 0 .25rem rgba(220,53,69,.25)}.form-check-input.is-invalid~.form-check-label,.was-validated .form-check-input:invalid~.form-check-label{color:#dc3545}.form-check-inline .form-check-input~.invalid-feedback{margin-left:.5em}.input-group .form-control.is-invalid,.input-group .form-select.is-invalid,.was-validated .input-group .form-control:invalid,.was-validated .input-group .form-select:invalid{z-index:2}.input-group .form-control.is-invalid:focus,.input-group .form-select.is-invalid:focus,.was-validated .input-group .form-control:invalid:focus,.was-validated .input-group .form-select:invalid:focus{z-index:3}.btn{display:inline-block;font-weight:400;line-height:1.5;color:#212529;text-align:center;text-decoration:none;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.btn{transition:none}}.btn:hover{color:#212529}.btn-check:focus+.btn,.btn:focus{outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.btn.disabled,.btn:disabled,fieldset:disabled .btn{pointer-events:none;opacity:.65}.btn-primary{color:#fff;background-color:#0d6efd;border-color:#0d6efd}.btn-primary:hover{color:#fff;background-color:#0b5ed7;border-color:#0a58ca}.btn-check:focus+.btn-primary,.btn-primary:focus{color:#fff;background-color:#0b5ed7;border-color:#0a58ca;box-shadow:0 0 0 .25rem rgba(49,132,253,.5)}.btn-check:active+.btn-primary,.btn-check:checked+.btn-primary,.btn-primary.active,.btn-primary:active,.show>.btn-primary.dropdown-toggle{color:#fff;background-color:#0a58ca;border-color:#0a53be}.btn-check:active+.btn-primary:focus,.btn-check:checked+.btn-primary:focus,.btn-primary.active:focus,.btn-primary:active:focus,.show>.btn-primary.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(49,132,253,.5)}.btn-primary.disabled,.btn-primary:disabled{color:#fff;background-color:#0d6efd;border-color:#0d6efd}.btn-secondary{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:hover{color:#fff;background-color:#5c636a;border-color:#565e64}.btn-check:focus+.btn-secondary,.btn-secondary:focus{color:#fff;background-color:#5c636a;border-color:#565e64;box-shadow:0 0 0 .25rem rgba(130,138,145,.5)}.btn-check:active+.btn-secondary,.btn-check:checked+.btn-secondary,.btn-secondary.active,.btn-secondary:active,.show>.btn-secondary.dropdown-toggle{color:#fff;background-color:#565e64;border-color:#51585e}.btn-check:active+.btn-secondary:focus,.btn-check:checked+.btn-secondary:focus,.btn-secondary.active:focus,.btn-secondary:active:focus,.show>.btn-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(130,138,145,.5)}.btn-secondary.disabled,.btn-secondary:disabled{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-success{color:#fff;background-color:#198754;border-color:#198754}.btn-success:hover{color:#fff;background-color:#157347;border-color:#146c43}.btn-check:focus+.btn-success,.btn-success:focus{color:#fff;background-color:#157347;border-color:#146c43;box-shadow:0 0 0 .25rem rgba(60,153,110,.5)}.btn-check:active+.btn-success,.btn-check:checked+.btn-success,.btn-success.active,.btn-success:active,.show>.btn-success.dropdown-toggle{color:#fff;background-color:#146c43;border-color:#13653f}.btn-check:active+.btn-success:focus,.btn-check:checked+.btn-success:focus,.btn-success.active:focus,.btn-success:active:focus,.show>.btn-success.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(60,153,110,.5)}.btn-success.disabled,.btn-success:disabled{color:#fff;background-color:#198754;border-color:#198754}.btn-info{color:#000;background-color:#0dcaf0;border-color:#0dcaf0}.btn-info:hover{color:#000;background-color:#31d2f2;border-color:#25cff2}.btn-check:focus+.btn-info,.btn-info:focus{color:#000;background-color:#31d2f2;border-color:#25cff2;box-shadow:0 0 0 .25rem rgba(11,172,204,.5)}.btn-check:active+.btn-info,.btn-check:checked+.btn-info,.btn-info.active,.btn-info:active,.show>.btn-info.dropdown-toggle{color:#000;background-color:#3dd5f3;border-color:#25cff2}.btn-check:active+.btn-info:focus,.btn-check:checked+.btn-info:focus,.btn-info.active:focus,.btn-info:active:focus,.show>.btn-info.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(11,172,204,.5)}.btn-info.disabled,.btn-info:disabled{color:#000;background-color:#0dcaf0;border-color:#0dcaf0}.btn-warning{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-warning:hover{color:#000;background-color:#ffca2c;border-color:#ffc720}.btn-check:focus+.btn-warning,.btn-warning:focus{color:#000;background-color:#ffca2c;border-color:#ffc720;box-shadow:0 0 0 .25rem rgba(217,164,6,.5)}.btn-check:active+.btn-warning,.btn-check:checked+.btn-warning,.btn-warning.active,.btn-warning:active,.show>.btn-warning.dropdown-toggle{color:#000;background-color:#ffcd39;border-color:#ffc720}.btn-check:active+.btn-warning:focus,.btn-check:checked+.btn-warning:focus,.btn-warning.active:focus,.btn-warning:active:focus,.show>.btn-warning.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(217,164,6,.5)}.btn-warning.disabled,.btn-warning:disabled{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-danger{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-danger:hover{color:#fff;background-color:#bb2d3b;border-color:#b02a37}.btn-check:focus+.btn-danger,.btn-danger:focus{color:#fff;background-color:#bb2d3b;border-color:#b02a37;box-shadow:0 0 0 .25rem rgba(225,83,97,.5)}.btn-check:active+.btn-danger,.btn-check:checked+.btn-danger,.btn-danger.active,.btn-danger:active,.show>.btn-danger.dropdown-toggle{color:#fff;background-color:#b02a37;border-color:#a52834}.btn-check:active+.btn-danger:focus,.btn-check:checked+.btn-danger:focus,.btn-danger.active:focus,.btn-danger:active:focus,.show>.btn-danger.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(225,83,97,.5)}.btn-danger.disabled,.btn-danger:disabled{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-light{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-light:hover{color:#000;background-color:#f9fafb;border-color:#f9fafb}.btn-check:focus+.btn-light,.btn-light:focus{color:#000;background-color:#f9fafb;border-color:#f9fafb;box-shadow:0 0 0 .25rem rgba(211,212,213,.5)}.btn-check:active+.btn-light,.btn-check:checked+.btn-light,.btn-light.active,.btn-light:active,.show>.btn-light.dropdown-toggle{color:#000;background-color:#f9fafb;border-color:#f9fafb}.btn-check:active+.btn-light:focus,.btn-check:checked+.btn-light:focus,.btn-light.active:focus,.btn-light:active:focus,.show>.btn-light.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(211,212,213,.5)}.btn-light.disabled,.btn-light:disabled{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-dark{color:#fff;background-color:#212529;border-color:#212529}.btn-dark:hover{color:#fff;background-color:#1c1f23;border-color:#1a1e21}.btn-check:focus+.btn-dark,.btn-dark:focus{color:#fff;background-color:#1c1f23;border-color:#1a1e21;box-shadow:0 0 0 .25rem rgba(66,70,73,.5)}.btn-check:active+.btn-dark,.btn-check:checked+.btn-dark,.btn-dark.active,.btn-dark:active,.show>.btn-dark.dropdown-toggle{color:#fff;background-color:#1a1e21;border-color:#191c1f}.btn-check:active+.btn-dark:focus,.btn-check:checked+.btn-dark:focus,.btn-dark.active:focus,.btn-dark:active:focus,.show>.btn-dark.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(66,70,73,.5)}.btn-dark.disabled,.btn-dark:disabled{color:#fff;background-color:#212529;border-color:#212529}.btn-outline-primary{color:#0d6efd;border-color:#0d6efd}.btn-outline-primary:hover{color:#fff;background-color:#0d6efd;border-color:#0d6efd}.btn-check:focus+.btn-outline-primary,.btn-outline-primary:focus{box-shadow:0 0 0 .25rem rgba(13,110,253,.5)}.btn-check:active+.btn-outline-primary,.btn-check:checked+.btn-outline-primary,.btn-outline-primary.active,.btn-outline-primary.dropdown-toggle.show,.btn-outline-primary:active{color:#fff;background-color:#0d6efd;border-color:#0d6efd}.btn-check:active+.btn-outline-primary:focus,.btn-check:checked+.btn-outline-primary:focus,.btn-outline-primary.active:focus,.btn-outline-primary.dropdown-toggle.show:focus,.btn-outline-primary:active:focus{box-shadow:0 0 0 .25rem rgba(13,110,253,.5)}.btn-outline-primary.disabled,.btn-outline-primary:disabled{color:#0d6efd;background-color:transparent}.btn-outline-secondary{color:#6c757d;border-color:#6c757d}.btn-outline-secondary:hover{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-check:focus+.btn-outline-secondary,.btn-outline-secondary:focus{box-shadow:0 0 0 .25rem rgba(108,117,125,.5)}.btn-check:active+.btn-outline-secondary,.btn-check:checked+.btn-outline-secondary,.btn-outline-secondary.active,.btn-outline-secondary.dropdown-toggle.show,.btn-outline-secondary:active{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-check:active+.btn-outline-secondary:focus,.btn-check:checked+.btn-outline-secondary:focus,.btn-outline-secondary.active:focus,.btn-outline-secondary.dropdown-toggle.show:focus,.btn-outline-secondary:active:focus{box-shadow:0 0 0 .25rem rgba(108,117,125,.5)}.btn-outline-secondary.disabled,.btn-outline-secondary:disabled{color:#6c757d;background-color:transparent}.btn-outline-success{color:#198754;border-color:#198754}.btn-outline-success:hover{color:#fff;background-color:#198754;border-color:#198754}.btn-check:focus+.btn-outline-success,.btn-outline-success:focus{box-shadow:0 0 0 .25rem rgba(25,135,84,.5)}.btn-check:active+.btn-outline-success,.btn-check:checked+.btn-outline-success,.btn-outline-success.active,.btn-outline-success.dropdown-toggle.show,.btn-outline-success:active{color:#fff;background-color:#198754;border-color:#198754}.btn-check:active+.btn-outline-success:focus,.btn-check:checked+.btn-outline-success:focus,.btn-outline-success.active:focus,.btn-outline-success.dropdown-toggle.show:focus,.btn-outline-success:active:focus{box-shadow:0 0 0 .25rem rgba(25,135,84,.5)}.btn-outline-success.disabled,.btn-outline-success:disabled{color:#198754;background-color:transparent}.btn-outline-info{color:#0dcaf0;border-color:#0dcaf0}.btn-outline-info:hover{color:#000;background-color:#0dcaf0;border-color:#0dcaf0}.btn-check:focus+.btn-outline-info,.btn-outline-info:focus{box-shadow:0 0 0 .25rem rgba(13,202,240,.5)}.btn-check:active+.btn-outline-info,.btn-check:checked+.btn-outline-info,.btn-outline-info.active,.btn-outline-info.dropdown-toggle.show,.btn-outline-info:active{color:#000;background-color:#0dcaf0;border-color:#0dcaf0}.btn-check:active+.btn-outline-info:focus,.btn-check:checked+.btn-outline-info:focus,.btn-outline-info.active:focus,.btn-outline-info.dropdown-toggle.show:focus,.btn-outline-info:active:focus{box-shadow:0 0 0 .25rem rgba(13,202,240,.5)}.btn-outline-info.disabled,.btn-outline-info:disabled{color:#0dcaf0;background-color:transparent}.btn-outline-warning{color:#ffc107;border-color:#ffc107}.btn-outline-warning:hover{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-check:focus+.btn-outline-warning,.btn-outline-warning:focus{box-shadow:0 0 0 .25rem rgba(255,193,7,.5)}.btn-check:active+.btn-outline-warning,.btn-check:checked+.btn-outline-warning,.btn-outline-warning.active,.btn-outline-warning.dropdown-toggle.show,.btn-outline-warning:active{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-check:active+.btn-outline-warning:focus,.btn-check:checked+.btn-outline-warning:focus,.btn-outline-warning.active:focus,.btn-outline-warning.dropdown-toggle.show:focus,.btn-outline-warning:active:focus{box-shadow:0 0 0 .25rem rgba(255,193,7,.5)}.btn-outline-warning.disabled,.btn-outline-warning:disabled{color:#ffc107;background-color:transparent}.btn-outline-danger{color:#dc3545;border-color:#dc3545}.btn-outline-danger:hover{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-check:focus+.btn-outline-danger,.btn-outline-danger:focus{box-shadow:0 0 0 .25rem rgba(220,53,69,.5)}.btn-check:active+.btn-outline-danger,.btn-check:checked+.btn-outline-danger,.btn-outline-danger.active,.btn-outline-danger.dropdown-toggle.show,.btn-outline-danger:active{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-check:active+.btn-outline-danger:focus,.btn-check:checked+.btn-outline-danger:focus,.btn-outline-danger.active:focus,.btn-outline-danger.dropdown-toggle.show:focus,.btn-outline-danger:active:focus{box-shadow:0 0 0 .25rem rgba(220,53,69,.5)}.btn-outline-danger.disabled,.btn-outline-danger:disabled{color:#dc3545;background-color:transparent}.btn-outline-light{color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light:hover{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-check:focus+.btn-outline-light,.btn-outline-light:focus{box-shadow:0 0 0 .25rem rgba(248,249,250,.5)}.btn-check:active+.btn-outline-light,.btn-check:checked+.btn-outline-light,.btn-outline-light.active,.btn-outline-light.dropdown-toggle.show,.btn-outline-light:active{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-check:active+.btn-outline-light:focus,.btn-check:checked+.btn-outline-light:focus,.btn-outline-light.active:focus,.btn-outline-light.dropdown-toggle.show:focus,.btn-outline-light:active:focus{box-shadow:0 0 0 .25rem rgba(248,249,250,.5)}.btn-outline-light.disabled,.btn-outline-light:disabled{color:#f8f9fa;background-color:transparent}.btn-outline-dark{color:#212529;border-color:#212529}.btn-outline-dark:hover{color:#fff;background-color:#212529;border-color:#212529}.btn-check:focus+.btn-outline-dark,.btn-outline-dark:focus{box-shadow:0 0 0 .25rem rgba(33,37,41,.5)}.btn-check:active+.btn-outline-dark,.btn-check:checked+.btn-outline-dark,.btn-outline-dark.active,.btn-outline-dark.dropdown-toggle.show,.btn-outline-dark:active{color:#fff;background-color:#212529;border-color:#212529}.btn-check:active+.btn-outline-dark:focus,.btn-check:checked+.btn-outline-dark:focus,.btn-outline-dark.active:focus,.btn-outline-dark.dropdown-toggle.show:focus,.btn-outline-dark:active:focus{box-shadow:0 0 0 .25rem rgba(33,37,41,.5)}.btn-outline-dark.disabled,.btn-outline-dark:disabled{color:#212529;background-color:transparent}.btn-link{font-weight:400;color:#0d6efd;text-decoration:underline}.btn-link:hover{color:#0a58ca}.btn-link.disabled,.btn-link:disabled{color:#6c757d}.btn-group-lg>.btn,.btn-lg{padding:.5rem 1rem;font-size:1.25rem;border-radius:.3rem}.btn-group-sm>.btn,.btn-sm{padding:.25rem .5rem;font-size:.875rem;border-radius:.2rem}.fade{transition:opacity .15s linear}@media (prefers-reduced-motion:reduce){.fade{transition:none}}.fade:not(.show){opacity:0}.collapse:not(.show){display:none}.collapsing{height:0;overflow:hidden;transition:height .35s ease}@media (prefers-reduced-motion:reduce){.collapsing{transition:none}}.collapsing.collapse-horizontal{width:0;height:auto;transition:width .35s ease}@media (prefers-reduced-motion:reduce){.collapsing.collapse-horizontal{transition:none}}.dropdown,.dropend,.dropstart,.dropup{position:relative}.dropdown-toggle{white-space:nowrap}.dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-toggle:empty::after{margin-left:0}.dropdown-menu{position:absolute;z-index:1000;display:none;min-width:10rem;padding:.5rem 0;margin:0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.dropdown-menu[data-bs-popper]{top:100%;left:0;margin-top:.125rem}.dropdown-menu-start{--bs-position:start}.dropdown-menu-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-end{--bs-position:end}.dropdown-menu-end[data-bs-popper]{right:0;left:auto}@media (min-width:576px){.dropdown-menu-sm-start{--bs-position:start}.dropdown-menu-sm-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-sm-end{--bs-position:end}.dropdown-menu-sm-end[data-bs-popper]{right:0;left:auto}}@media (min-width:768px){.dropdown-menu-md-start{--bs-position:start}.dropdown-menu-md-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-md-end{--bs-position:end}.dropdown-menu-md-end[data-bs-popper]{right:0;left:auto}}@media (min-width:992px){.dropdown-menu-lg-start{--bs-position:start}.dropdown-menu-lg-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-lg-end{--bs-position:end}.dropdown-menu-lg-end[data-bs-popper]{right:0;left:auto}}@media (min-width:1200px){.dropdown-menu-xl-start{--bs-position:start}.dropdown-menu-xl-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-xl-end{--bs-position:end}.dropdown-menu-xl-end[data-bs-popper]{right:0;left:auto}}@media (min-width:1400px){.dropdown-menu-xxl-start{--bs-position:start}.dropdown-menu-xxl-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-xxl-end{--bs-position:end}.dropdown-menu-xxl-end[data-bs-popper]{right:0;left:auto}}.dropup .dropdown-menu[data-bs-popper]{top:auto;bottom:100%;margin-top:0;margin-bottom:.125rem}.dropup .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:0;border-right:.3em solid transparent;border-bottom:.3em solid;border-left:.3em solid transparent}.dropup .dropdown-toggle:empty::after{margin-left:0}.dropend .dropdown-menu[data-bs-popper]{top:0;right:auto;left:100%;margin-top:0;margin-left:.125rem}.dropend .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:0;border-bottom:.3em solid transparent;border-left:.3em solid}.dropend .dropdown-toggle:empty::after{margin-left:0}.dropend .dropdown-toggle::after{vertical-align:0}.dropstart .dropdown-menu[data-bs-popper]{top:0;right:100%;left:auto;margin-top:0;margin-right:.125rem}.dropstart .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:""}.dropstart .dropdown-toggle::after{display:none}.dropstart .dropdown-toggle::before{display:inline-block;margin-right:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:.3em solid;border-bottom:.3em solid transparent}.dropstart .dropdown-toggle:empty::after{margin-left:0}.dropstart .dropdown-toggle::before{vertical-align:0}.dropdown-divider{height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid rgba(0,0,0,.15)}.dropdown-item{display:block;width:100%;padding:.25rem 1rem;clear:both;font-weight:400;color:#212529;text-align:inherit;text-decoration:none;white-space:nowrap;background-color:transparent;border:0}.dropdown-item:focus,.dropdown-item:hover{color:#1e2125;background-color:#e9ecef}.dropdown-item.active,.dropdown-item:active{color:#fff;text-decoration:none;background-color:#0d6efd}.dropdown-item.disabled,.dropdown-item:disabled{color:#adb5bd;pointer-events:none;background-color:transparent}.dropdown-menu.show{display:block}.dropdown-header{display:block;padding:.5rem 1rem;margin-bottom:0;font-size:.875rem;color:#6c757d;white-space:nowrap}.dropdown-item-text{display:block;padding:.25rem 1rem;color:#212529}.dropdown-menu-dark{color:#dee2e6;background-color:#343a40;border-color:rgba(0,0,0,.15)}.dropdown-menu-dark .dropdown-item{color:#dee2e6}.dropdown-menu-dark .dropdown-item:focus,.dropdown-menu-dark .dropdown-item:hover{color:#fff;background-color:rgba(255,255,255,.15)}.dropdown-menu-dark .dropdown-item.active,.dropdown-menu-dark .dropdown-item:active{color:#fff;background-color:#0d6efd}.dropdown-menu-dark .dropdown-item.disabled,.dropdown-menu-dark .dropdown-item:disabled{color:#adb5bd}.dropdown-menu-dark .dropdown-divider{border-color:rgba(0,0,0,.15)}.dropdown-menu-dark .dropdown-item-text{color:#dee2e6}.dropdown-menu-dark .dropdown-header{color:#adb5bd}.btn-group,.btn-group-vertical{position:relative;display:inline-flex;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:relative;flex:1 1 auto}.btn-group-vertical>.btn-check:checked+.btn,.btn-group-vertical>.btn-check:focus+.btn,.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:hover,.btn-group>.btn-check:checked+.btn,.btn-group>.btn-check:focus+.btn,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover{z-index:1}.btn-toolbar{display:flex;flex-wrap:wrap;justify-content:flex-start}.btn-toolbar .input-group{width:auto}.btn-group>.btn-group:not(:first-child),.btn-group>.btn:not(:first-child){margin-left:-1px}.btn-group>.btn-group:not(:last-child)>.btn,.btn-group>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:not(:first-child)>.btn,.btn-group>.btn:nth-child(n+3),.btn-group>:not(.btn-check)+.btn{border-top-left-radius:0;border-bottom-left-radius:0}.dropdown-toggle-split{padding-right:.5625rem;padding-left:.5625rem}.dropdown-toggle-split::after,.dropend .dropdown-toggle-split::after,.dropup .dropdown-toggle-split::after{margin-left:0}.dropstart .dropdown-toggle-split::before{margin-right:0}.btn-group-sm>.btn+.dropdown-toggle-split,.btn-sm+.dropdown-toggle-split{padding-right:.375rem;padding-left:.375rem}.btn-group-lg>.btn+.dropdown-toggle-split,.btn-lg+.dropdown-toggle-split{padding-right:.75rem;padding-left:.75rem}.btn-group-vertical{flex-direction:column;align-items:flex-start;justify-content:center}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group{width:100%}.btn-group-vertical>.btn-group:not(:first-child),.btn-group-vertical>.btn:not(:first-child){margin-top:-1px}.btn-group-vertical>.btn-group:not(:last-child)>.btn,.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle){border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:not(:first-child)>.btn,.btn-group-vertical>.btn~.btn{border-top-left-radius:0;border-top-right-radius:0}.nav{display:flex;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem;color:#0d6efd;text-decoration:none;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out}@media (prefers-reduced-motion:reduce){.nav-link{transition:none}}.nav-link:focus,.nav-link:hover{color:#0a58ca}.nav-link.disabled{color:#6c757d;pointer-events:none;cursor:default}.nav-tabs{border-bottom:1px solid #dee2e6}.nav-tabs .nav-link{margin-bottom:-1px;background:0 0;border:1px solid transparent;border-top-left-radius:.25rem;border-top-right-radius:.25rem}.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#e9ecef #e9ecef #dee2e6;isolation:isolate}.nav-tabs .nav-link.disabled{color:#6c757d;background-color:transparent;border-color:transparent}.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active{color:#495057;background-color:#fff;border-color:#dee2e6 #dee2e6 #fff}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.nav-pills .nav-link{background:0 0;border:0;border-radius:.25rem}.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-color:#0d6efd}.nav-fill .nav-item,.nav-fill>.nav-link{flex:1 1 auto;text-align:center}.nav-justified .nav-item,.nav-justified>.nav-link{flex-basis:0;flex-grow:1;text-align:center}.nav-fill .nav-item .nav-link,.nav-justified .nav-item .nav-link{width:100%}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.navbar{position:relative;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;padding-top:.5rem;padding-bottom:.5rem}.navbar>.container,.navbar>.container-fluid,.navbar>.container-lg,.navbar>.container-md,.navbar>.container-sm,.navbar>.container-xl,.navbar>.container-xxl{display:flex;flex-wrap:inherit;align-items:center;justify-content:space-between}.navbar-brand{padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;text-decoration:none;white-space:nowrap}.navbar-nav{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static}.navbar-text{padding-top:.5rem;padding-bottom:.5rem}.navbar-collapse{flex-basis:100%;flex-grow:1;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem;transition:box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.navbar-toggler{transition:none}}.navbar-toggler:hover{text-decoration:none}.navbar-toggler:focus{text-decoration:none;outline:0;box-shadow:0 0 0 .25rem}.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;background-repeat:no-repeat;background-position:center;background-size:100%}.navbar-nav-scroll{max-height:var(--bs-scroll-height,75vh);overflow-y:auto}@media (min-width:576px){.navbar-expand-sm{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-sm .navbar-nav{flex-direction:row}.navbar-expand-sm .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-sm .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-sm .navbar-nav-scroll{overflow:visible}.navbar-expand-sm .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-sm .navbar-toggler{display:none}.navbar-expand-sm .offcanvas-header{display:none}.navbar-expand-sm .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand-sm .offcanvas-bottom,.navbar-expand-sm .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand-sm .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}@media (min-width:768px){.navbar-expand-md{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-md .navbar-nav{flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md .navbar-nav-scroll{overflow:visible}.navbar-expand-md .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-md .navbar-toggler{display:none}.navbar-expand-md .offcanvas-header{display:none}.navbar-expand-md .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand-md .offcanvas-bottom,.navbar-expand-md .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand-md .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}@media (min-width:992px){.navbar-expand-lg{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-lg .navbar-nav{flex-direction:row}.navbar-expand-lg .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-lg .navbar-nav-scroll{overflow:visible}.navbar-expand-lg .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-lg .navbar-toggler{display:none}.navbar-expand-lg .offcanvas-header{display:none}.navbar-expand-lg .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand-lg .offcanvas-bottom,.navbar-expand-lg .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand-lg .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}@media (min-width:1200px){.navbar-expand-xl{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-xl .navbar-nav{flex-direction:row}.navbar-expand-xl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xl .navbar-nav-scroll{overflow:visible}.navbar-expand-xl .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-xl .navbar-toggler{display:none}.navbar-expand-xl .offcanvas-header{display:none}.navbar-expand-xl .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand-xl .offcanvas-bottom,.navbar-expand-xl .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand-xl .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}@media (min-width:1400px){.navbar-expand-xxl{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-xxl .navbar-nav{flex-direction:row}.navbar-expand-xxl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xxl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xxl .navbar-nav-scroll{overflow:visible}.navbar-expand-xxl .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-xxl .navbar-toggler{display:none}.navbar-expand-xxl .offcanvas-header{display:none}.navbar-expand-xxl .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand-xxl .offcanvas-bottom,.navbar-expand-xxl .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand-xxl .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}.navbar-expand{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand .navbar-nav{flex-direction:row}.navbar-expand .navbar-nav .dropdown-menu{position:absolute}.navbar-expand .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand .navbar-nav-scroll{overflow:visible}.navbar-expand .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand .navbar-toggler{display:none}.navbar-expand .offcanvas-header{display:none}.navbar-expand .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand .offcanvas-bottom,.navbar-expand .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}.navbar-light .navbar-brand{color:rgba(0,0,0,.9)}.navbar-light .navbar-brand:focus,.navbar-light .navbar-brand:hover{color:rgba(0,0,0,.9)}.navbar-light .navbar-nav .nav-link{color:rgba(0,0,0,.55)}.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7)}.navbar-light .navbar-nav .nav-link.disabled{color:rgba(0,0,0,.3)}.navbar-light .navbar-nav .nav-link.active,.navbar-light .navbar-nav .show>.nav-link{color:rgba(0,0,0,.9)}.navbar-light .navbar-toggler{color:rgba(0,0,0,.55);border-color:rgba(0,0,0,.1)}.navbar-light .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-light .navbar-text{color:rgba(0,0,0,.55)}.navbar-light .navbar-text a,.navbar-light .navbar-text a:focus,.navbar-light .navbar-text a:hover{color:rgba(0,0,0,.9)}.navbar-dark .navbar-brand{color:#fff}.navbar-dark .navbar-brand:focus,.navbar-dark .navbar-brand:hover{color:#fff}.navbar-dark .navbar-nav .nav-link{color:rgba(255,255,255,.55)}.navbar-dark .navbar-nav .nav-link:focus,.navbar-dark .navbar-nav .nav-link:hover{color:rgba(255,255,255,.75)}.navbar-dark .navbar-nav .nav-link.disabled{color:rgba(255,255,255,.25)}.navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .show>.nav-link{color:#fff}.navbar-dark .navbar-toggler{color:rgba(255,255,255,.55);border-color:rgba(255,255,255,.1)}.navbar-dark .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-dark .navbar-text{color:rgba(255,255,255,.55)}.navbar-dark .navbar-text a,.navbar-dark .navbar-text a:focus,.navbar-dark .navbar-text a:hover{color:#fff}.card{position:relative;display:flex;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.card>hr{margin-right:0;margin-left:0}.card>.list-group{border-top:inherit;border-bottom:inherit}.card>.list-group:first-child{border-top-width:0;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card>.list-group:last-child{border-bottom-width:0;border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card>.card-header+.list-group,.card>.list-group+.card-footer{border-top:0}.card-body{flex:1 1 auto;padding:1rem 1rem}.card-title{margin-bottom:.5rem}.card-subtitle{margin-top:-.25rem;margin-bottom:0}.card-text:last-child{margin-bottom:0}.card-link+.card-link{margin-left:1rem}.card-header{padding:.5rem 1rem;margin-bottom:0;background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125)}.card-header:first-child{border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0}.card-footer{padding:.5rem 1rem;background-color:rgba(0,0,0,.03);border-top:1px solid rgba(0,0,0,.125)}.card-footer:last-child{border-radius:0 0 calc(.25rem - 1px) calc(.25rem - 1px)}.card-header-tabs{margin-right:-.5rem;margin-bottom:-.5rem;margin-left:-.5rem;border-bottom:0}.card-header-pills{margin-right:-.5rem;margin-left:-.5rem}.card-img-overlay{position:absolute;top:0;right:0;bottom:0;left:0;padding:1rem;border-radius:calc(.25rem - 1px)}.card-img,.card-img-bottom,.card-img-top{width:100%}.card-img,.card-img-top{border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card-img,.card-img-bottom{border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card-group>.card{margin-bottom:.75rem}@media (min-width:576px){.card-group{display:flex;flex-flow:row wrap}.card-group>.card{flex:1 0 0%;margin-bottom:0}.card-group>.card+.card{margin-left:0;border-left:0}.card-group>.card:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.card-group>.card:not(:last-child) .card-header,.card-group>.card:not(:last-child) .card-img-top{border-top-right-radius:0}.card-group>.card:not(:last-child) .card-footer,.card-group>.card:not(:last-child) .card-img-bottom{border-bottom-right-radius:0}.card-group>.card:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.card-group>.card:not(:first-child) .card-header,.card-group>.card:not(:first-child) .card-img-top{border-top-left-radius:0}.card-group>.card:not(:first-child) .card-footer,.card-group>.card:not(:first-child) .card-img-bottom{border-bottom-left-radius:0}}.accordion-button{position:relative;display:flex;align-items:center;width:100%;padding:1rem 1.25rem;font-size:1rem;color:#212529;text-align:left;background-color:#fff;border:0;border-radius:0;overflow-anchor:none;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,border-radius .15s ease}@media (prefers-reduced-motion:reduce){.accordion-button{transition:none}}.accordion-button:not(.collapsed){color:#0c63e4;background-color:#e7f1ff;box-shadow:inset 0 -1px 0 rgba(0,0,0,.125)}.accordion-button:not(.collapsed)::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c63e4'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");transform:rotate(-180deg)}.accordion-button::after{flex-shrink:0;width:1.25rem;height:1.25rem;margin-left:auto;content:"";background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");background-repeat:no-repeat;background-size:1.25rem;transition:transform .2s ease-in-out}@media (prefers-reduced-motion:reduce){.accordion-button::after{transition:none}}.accordion-button:hover{z-index:2}.accordion-button:focus{z-index:3;border-color:#86b7fe;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.accordion-header{margin-bottom:0}.accordion-item{background-color:#fff;border:1px solid rgba(0,0,0,.125)}.accordion-item:first-of-type{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.accordion-item:first-of-type .accordion-button{border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.accordion-item:not(:first-of-type){border-top:0}.accordion-item:last-of-type{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.accordion-item:last-of-type .accordion-button.collapsed{border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.accordion-item:last-of-type .accordion-collapse{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.accordion-body{padding:1rem 1.25rem}.accordion-flush .accordion-collapse{border-width:0}.accordion-flush .accordion-item{border-right:0;border-left:0;border-radius:0}.accordion-flush .accordion-item:first-child{border-top:0}.accordion-flush .accordion-item:last-child{border-bottom:0}.accordion-flush .accordion-item .accordion-button{border-radius:0}.breadcrumb{display:flex;flex-wrap:wrap;padding:0 0;margin-bottom:1rem;list-style:none}.breadcrumb-item+.breadcrumb-item{padding-left:.5rem}.breadcrumb-item+.breadcrumb-item::before{float:left;padding-right:.5rem;color:#6c757d;content:var(--bs-breadcrumb-divider, "/")}.breadcrumb-item.active{color:#6c757d}.pagination{display:flex;padding-left:0;list-style:none}.page-link{position:relative;display:block;color:#0d6efd;text-decoration:none;background-color:#fff;border:1px solid #dee2e6;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.page-link{transition:none}}.page-link:hover{z-index:2;color:#0a58ca;background-color:#e9ecef;border-color:#dee2e6}.page-link:focus{z-index:3;color:#0a58ca;background-color:#e9ecef;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.page-item:not(:first-child) .page-link{margin-left:-1px}.page-item.active .page-link{z-index:3;color:#fff;background-color:#0d6efd;border-color:#0d6efd}.page-item.disabled .page-link{color:#6c757d;pointer-events:none;background-color:#fff;border-color:#dee2e6}.page-link{padding:.375rem .75rem}.page-item:first-child .page-link{border-top-left-radius:.25rem;border-bottom-left-radius:.25rem}.page-item:last-child .page-link{border-top-right-radius:.25rem;border-bottom-right-radius:.25rem}.pagination-lg .page-link{padding:.75rem 1.5rem;font-size:1.25rem}.pagination-lg .page-item:first-child .page-link{border-top-left-radius:.3rem;border-bottom-left-radius:.3rem}.pagination-lg .page-item:last-child .page-link{border-top-right-radius:.3rem;border-bottom-right-radius:.3rem}.pagination-sm .page-link{padding:.25rem .5rem;font-size:.875rem}.pagination-sm .page-item:first-child .page-link{border-top-left-radius:.2rem;border-bottom-left-radius:.2rem}.pagination-sm .page-item:last-child .page-link{border-top-right-radius:.2rem;border-bottom-right-radius:.2rem}.badge{display:inline-block;padding:.35em .65em;font-size:.75em;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.alert{position:relative;padding:1rem 1rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-right:3rem}.alert-dismissible .btn-close{position:absolute;top:0;right:0;z-index:2;padding:1.25rem 1rem}.alert-primary{color:#084298;background-color:#cfe2ff;border-color:#b6d4fe}.alert-primary .alert-link{color:#06357a}.alert-secondary{color:#41464b;background-color:#e2e3e5;border-color:#d3d6d8}.alert-secondary .alert-link{color:#34383c}.alert-success{color:#0f5132;background-color:#d1e7dd;border-color:#badbcc}.alert-success .alert-link{color:#0c4128}.alert-info{color:#055160;background-color:#cff4fc;border-color:#b6effb}.alert-info .alert-link{color:#04414d}.alert-warning{color:#664d03;background-color:#fff3cd;border-color:#ffecb5}.alert-warning .alert-link{color:#523e02}.alert-danger{color:#842029;background-color:#f8d7da;border-color:#f5c2c7}.alert-danger .alert-link{color:#6a1a21}.alert-light{color:#636464;background-color:#fefefe;border-color:#fdfdfe}.alert-light .alert-link{color:#4f5050}.alert-dark{color:#141619;background-color:#d3d3d4;border-color:#bcbebf}.alert-dark .alert-link{color:#101214}@-webkit-keyframes progress-bar-stripes{0%{background-position-x:1rem}}@keyframes progress-bar-stripes{0%{background-position-x:1rem}}.progress{display:flex;height:1rem;overflow:hidden;font-size:.75rem;background-color:#e9ecef;border-radius:.25rem}.progress-bar{display:flex;flex-direction:column;justify-content:center;overflow:hidden;color:#fff;text-align:center;white-space:nowrap;background-color:#0d6efd;transition:width .6s ease}@media (prefers-reduced-motion:reduce){.progress-bar{transition:none}}.progress-bar-striped{background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-size:1rem 1rem}.progress-bar-animated{-webkit-animation:1s linear infinite progress-bar-stripes;animation:1s linear infinite progress-bar-stripes}@media (prefers-reduced-motion:reduce){.progress-bar-animated{-webkit-animation:none;animation:none}}.list-group{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;border-radius:.25rem}.list-group-numbered{list-style-type:none;counter-reset:section}.list-group-numbered>li::before{content:counters(section, ".") ". ";counter-increment:section}.list-group-item-action{width:100%;color:#495057;text-align:inherit}.list-group-item-action:focus,.list-group-item-action:hover{z-index:1;color:#495057;text-decoration:none;background-color:#f8f9fa}.list-group-item-action:active{color:#212529;background-color:#e9ecef}.list-group-item{position:relative;display:block;padding:.5rem 1rem;color:#212529;text-decoration:none;background-color:#fff;border:1px solid rgba(0,0,0,.125)}.list-group-item:first-child{border-top-left-radius:inherit;border-top-right-radius:inherit}.list-group-item:last-child{border-bottom-right-radius:inherit;border-bottom-left-radius:inherit}.list-group-item.disabled,.list-group-item:disabled{color:#6c757d;pointer-events:none;background-color:#fff}.list-group-item.active{z-index:2;color:#fff;background-color:#0d6efd;border-color:#0d6efd}.list-group-item+.list-group-item{border-top-width:0}.list-group-item+.list-group-item.active{margin-top:-1px;border-top-width:1px}.list-group-horizontal{flex-direction:row}.list-group-horizontal>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal>.list-group-item.active{margin-top:0}.list-group-horizontal>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}@media (min-width:576px){.list-group-horizontal-sm{flex-direction:row}.list-group-horizontal-sm>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-sm>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-sm>.list-group-item.active{margin-top:0}.list-group-horizontal-sm>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-sm>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:768px){.list-group-horizontal-md{flex-direction:row}.list-group-horizontal-md>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-md>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-md>.list-group-item.active{margin-top:0}.list-group-horizontal-md>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-md>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:992px){.list-group-horizontal-lg{flex-direction:row}.list-group-horizontal-lg>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-lg>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-lg>.list-group-item.active{margin-top:0}.list-group-horizontal-lg>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-lg>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:1200px){.list-group-horizontal-xl{flex-direction:row}.list-group-horizontal-xl>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-xl>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-xl>.list-group-item.active{margin-top:0}.list-group-horizontal-xl>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-xl>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:1400px){.list-group-horizontal-xxl{flex-direction:row}.list-group-horizontal-xxl>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-xxl>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-xxl>.list-group-item.active{margin-top:0}.list-group-horizontal-xxl>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-xxl>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}.list-group-flush{border-radius:0}.list-group-flush>.list-group-item{border-width:0 0 1px}.list-group-flush>.list-group-item:last-child{border-bottom-width:0}.list-group-item-primary{color:#084298;background-color:#cfe2ff}.list-group-item-primary.list-group-item-action:focus,.list-group-item-primary.list-group-item-action:hover{color:#084298;background-color:#bacbe6}.list-group-item-primary.list-group-item-action.active{color:#fff;background-color:#084298;border-color:#084298}.list-group-item-secondary{color:#41464b;background-color:#e2e3e5}.list-group-item-secondary.list-group-item-action:focus,.list-group-item-secondary.list-group-item-action:hover{color:#41464b;background-color:#cbccce}.list-group-item-secondary.list-group-item-action.active{color:#fff;background-color:#41464b;border-color:#41464b}.list-group-item-success{color:#0f5132;background-color:#d1e7dd}.list-group-item-success.list-group-item-action:focus,.list-group-item-success.list-group-item-action:hover{color:#0f5132;background-color:#bcd0c7}.list-group-item-success.list-group-item-action.active{color:#fff;background-color:#0f5132;border-color:#0f5132}.list-group-item-info{color:#055160;background-color:#cff4fc}.list-group-item-info.list-group-item-action:focus,.list-group-item-info.list-group-item-action:hover{color:#055160;background-color:#badce3}.list-group-item-info.list-group-item-action.active{color:#fff;background-color:#055160;border-color:#055160}.list-group-item-warning{color:#664d03;background-color:#fff3cd}.list-group-item-warning.list-group-item-action:focus,.list-group-item-warning.list-group-item-action:hover{color:#664d03;background-color:#e6dbb9}.list-group-item-warning.list-group-item-action.active{color:#fff;background-color:#664d03;border-color:#664d03}.list-group-item-danger{color:#842029;background-color:#f8d7da}.list-group-item-danger.list-group-item-action:focus,.list-group-item-danger.list-group-item-action:hover{color:#842029;background-color:#dfc2c4}.list-group-item-danger.list-group-item-action.active{color:#fff;background-color:#842029;border-color:#842029}.list-group-item-light{color:#636464;background-color:#fefefe}.list-group-item-light.list-group-item-action:focus,.list-group-item-light.list-group-item-action:hover{color:#636464;background-color:#e5e5e5}.list-group-item-light.list-group-item-action.active{color:#fff;background-color:#636464;border-color:#636464}.list-group-item-dark{color:#141619;background-color:#d3d3d4}.list-group-item-dark.list-group-item-action:focus,.list-group-item-dark.list-group-item-action:hover{color:#141619;background-color:#bebebf}.list-group-item-dark.list-group-item-action.active{color:#fff;background-color:#141619;border-color:#141619}.btn-close{box-sizing:content-box;width:1em;height:1em;padding:.25em .25em;color:#000;background:transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;border:0;border-radius:.25rem;opacity:.5}.btn-close:hover{color:#000;text-decoration:none;opacity:.75}.btn-close:focus{outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25);opacity:1}.btn-close.disabled,.btn-close:disabled{pointer-events:none;-webkit-user-select:none;-moz-user-select:none;user-select:none;opacity:.25}.btn-close-white{filter:invert(1) grayscale(100%) brightness(200%)}.toast{width:350px;max-width:100%;font-size:.875rem;pointer-events:auto;background-color:rgba(255,255,255,.85);background-clip:padding-box;border:1px solid rgba(0,0,0,.1);box-shadow:0 .5rem 1rem rgba(0,0,0,.15);border-radius:.25rem}.toast.showing{opacity:0}.toast:not(.show){display:none}.toast-container{width:-webkit-max-content;width:-moz-max-content;width:max-content;max-width:100%;pointer-events:none}.toast-container>:not(:last-child){margin-bottom:.75rem}.toast-header{display:flex;align-items:center;padding:.5rem .75rem;color:#6c757d;background-color:rgba(255,255,255,.85);background-clip:padding-box;border-bottom:1px solid rgba(0,0,0,.05);border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.toast-header .btn-close{margin-right:-.375rem;margin-left:.75rem}.toast-body{padding:.75rem;word-wrap:break-word}.modal{position:fixed;top:0;left:0;z-index:1055;display:none;width:100%;height:100%;overflow-x:hidden;overflow-y:auto;outline:0}.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}.modal.fade .modal-dialog{transition:transform .3s ease-out;transform:translate(0,-50px)}@media (prefers-reduced-motion:reduce){.modal.fade .modal-dialog{transition:none}}.modal.show .modal-dialog{transform:none}.modal.modal-static .modal-dialog{transform:scale(1.02)}.modal-dialog-scrollable{height:calc(100% - 1rem)}.modal-dialog-scrollable .modal-content{max-height:100%;overflow:hidden}.modal-dialog-scrollable .modal-body{overflow-y:auto}.modal-dialog-centered{display:flex;align-items:center;min-height:calc(100% - 1rem)}.modal-content{position:relative;display:flex;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}.modal-backdrop{position:fixed;top:0;left:0;z-index:1050;width:100vw;height:100vh;background-color:#000}.modal-backdrop.fade{opacity:0}.modal-backdrop.show{opacity:.5}.modal-header{display:flex;flex-shrink:0;align-items:center;justify-content:space-between;padding:1rem 1rem;border-bottom:1px solid #dee2e6;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.modal-header .btn-close{padding:.5rem .5rem;margin:-.5rem -.5rem -.5rem auto}.modal-title{margin-bottom:0;line-height:1.5}.modal-body{position:relative;flex:1 1 auto;padding:1rem}.modal-footer{display:flex;flex-wrap:wrap;flex-shrink:0;align-items:center;justify-content:flex-end;padding:.75rem;border-top:1px solid #dee2e6;border-bottom-right-radius:calc(.3rem - 1px);border-bottom-left-radius:calc(.3rem - 1px)}.modal-footer>*{margin:.25rem}@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}.modal-dialog-scrollable{height:calc(100% - 3.5rem)}.modal-dialog-centered{min-height:calc(100% - 3.5rem)}.modal-sm{max-width:300px}}@media (min-width:992px){.modal-lg,.modal-xl{max-width:800px}}@media (min-width:1200px){.modal-xl{max-width:1140px}}.modal-fullscreen{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen .modal-header{border-radius:0}.modal-fullscreen .modal-body{overflow-y:auto}.modal-fullscreen .modal-footer{border-radius:0}@media (max-width:575.98px){.modal-fullscreen-sm-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-sm-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-sm-down .modal-header{border-radius:0}.modal-fullscreen-sm-down .modal-body{overflow-y:auto}.modal-fullscreen-sm-down .modal-footer{border-radius:0}}@media (max-width:767.98px){.modal-fullscreen-md-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-md-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-md-down .modal-header{border-radius:0}.modal-fullscreen-md-down .modal-body{overflow-y:auto}.modal-fullscreen-md-down .modal-footer{border-radius:0}}@media (max-width:991.98px){.modal-fullscreen-lg-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-lg-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-lg-down .modal-header{border-radius:0}.modal-fullscreen-lg-down .modal-body{overflow-y:auto}.modal-fullscreen-lg-down .modal-footer{border-radius:0}}@media (max-width:1199.98px){.modal-fullscreen-xl-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-xl-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-xl-down .modal-header{border-radius:0}.modal-fullscreen-xl-down .modal-body{overflow-y:auto}.modal-fullscreen-xl-down .modal-footer{border-radius:0}}@media (max-width:1399.98px){.modal-fullscreen-xxl-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-xxl-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-xxl-down .modal-header{border-radius:0}.modal-fullscreen-xxl-down .modal-body{overflow-y:auto}.modal-fullscreen-xxl-down .modal-footer{border-radius:0}}.tooltip{position:absolute;z-index:1080;display:block;margin:0;font-family:var(--bs-font-sans-serif);font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;opacity:0}.tooltip.show{opacity:.9}.tooltip .tooltip-arrow{position:absolute;display:block;width:.8rem;height:.4rem}.tooltip .tooltip-arrow::before{position:absolute;content:"";border-color:transparent;border-style:solid}.bs-tooltip-auto[data-popper-placement^=top],.bs-tooltip-top{padding:.4rem 0}.bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow,.bs-tooltip-top .tooltip-arrow{bottom:0}.bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before,.bs-tooltip-top .tooltip-arrow::before{top:-1px;border-width:.4rem .4rem 0;border-top-color:#000}.bs-tooltip-auto[data-popper-placement^=right],.bs-tooltip-end{padding:0 .4rem}.bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow,.bs-tooltip-end .tooltip-arrow{left:0;width:.4rem;height:.8rem}.bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before,.bs-tooltip-end .tooltip-arrow::before{right:-1px;border-width:.4rem .4rem .4rem 0;border-right-color:#000}.bs-tooltip-auto[data-popper-placement^=bottom],.bs-tooltip-bottom{padding:.4rem 0}.bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow,.bs-tooltip-bottom .tooltip-arrow{top:0}.bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before,.bs-tooltip-bottom .tooltip-arrow::before{bottom:-1px;border-width:0 .4rem .4rem;border-bottom-color:#000}.bs-tooltip-auto[data-popper-placement^=left],.bs-tooltip-start{padding:0 .4rem}.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow,.bs-tooltip-start .tooltip-arrow{right:0;width:.4rem;height:.8rem}.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before,.bs-tooltip-start .tooltip-arrow::before{left:-1px;border-width:.4rem 0 .4rem .4rem;border-left-color:#000}.tooltip-inner{max-width:200px;padding:.25rem .5rem;color:#fff;text-align:center;background-color:#000;border-radius:.25rem}.popover{position:absolute;top:0;left:0;z-index:1070;display:block;max-width:276px;font-family:var(--bs-font-sans-serif);font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem}.popover .popover-arrow{position:absolute;display:block;width:1rem;height:.5rem}.popover .popover-arrow::after,.popover .popover-arrow::before{position:absolute;display:block;content:"";border-color:transparent;border-style:solid}.bs-popover-auto[data-popper-placement^=top]>.popover-arrow,.bs-popover-top>.popover-arrow{bottom:calc(-.5rem - 1px)}.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before,.bs-popover-top>.popover-arrow::before{bottom:0;border-width:.5rem .5rem 0;border-top-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after,.bs-popover-top>.popover-arrow::after{bottom:1px;border-width:.5rem .5rem 0;border-top-color:#fff}.bs-popover-auto[data-popper-placement^=right]>.popover-arrow,.bs-popover-end>.popover-arrow{left:calc(-.5rem - 1px);width:.5rem;height:1rem}.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before,.bs-popover-end>.popover-arrow::before{left:0;border-width:.5rem .5rem .5rem 0;border-right-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after,.bs-popover-end>.popover-arrow::after{left:1px;border-width:.5rem .5rem .5rem 0;border-right-color:#fff}.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow,.bs-popover-bottom>.popover-arrow{top:calc(-.5rem - 1px)}.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before,.bs-popover-bottom>.popover-arrow::before{top:0;border-width:0 .5rem .5rem .5rem;border-bottom-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after,.bs-popover-bottom>.popover-arrow::after{top:1px;border-width:0 .5rem .5rem .5rem;border-bottom-color:#fff}.bs-popover-auto[data-popper-placement^=bottom] .popover-header::before,.bs-popover-bottom .popover-header::before{position:absolute;top:0;left:50%;display:block;width:1rem;margin-left:-.5rem;content:"";border-bottom:1px solid #f0f0f0}.bs-popover-auto[data-popper-placement^=left]>.popover-arrow,.bs-popover-start>.popover-arrow{right:calc(-.5rem - 1px);width:.5rem;height:1rem}.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before,.bs-popover-start>.popover-arrow::before{right:0;border-width:.5rem 0 .5rem .5rem;border-left-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after,.bs-popover-start>.popover-arrow::after{right:1px;border-width:.5rem 0 .5rem .5rem;border-left-color:#fff}.popover-header{padding:.5rem 1rem;margin-bottom:0;font-size:1rem;background-color:#f0f0f0;border-bottom:1px solid rgba(0,0,0,.2);border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.popover-header:empty{display:none}.popover-body{padding:1rem 1rem;color:#212529}.carousel{position:relative}.carousel.pointer-event{touch-action:pan-y}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner::after{display:block;clear:both;content:""}.carousel-item{position:relative;display:none;float:left;width:100%;margin-right:-100%;-webkit-backface-visibility:hidden;backface-visibility:hidden;transition:transform .6s ease-in-out}@media (prefers-reduced-motion:reduce){.carousel-item{transition:none}}.carousel-item-next,.carousel-item-prev,.carousel-item.active{display:block}.active.carousel-item-end,.carousel-item-next:not(.carousel-item-start){transform:translateX(100%)}.active.carousel-item-start,.carousel-item-prev:not(.carousel-item-end){transform:translateX(-100%)}.carousel-fade .carousel-item{opacity:0;transition-property:opacity;transform:none}.carousel-fade .carousel-item-next.carousel-item-start,.carousel-fade .carousel-item-prev.carousel-item-end,.carousel-fade .carousel-item.active{z-index:1;opacity:1}.carousel-fade .active.carousel-item-end,.carousel-fade .active.carousel-item-start{z-index:0;opacity:0;transition:opacity 0s .6s}@media (prefers-reduced-motion:reduce){.carousel-fade .active.carousel-item-end,.carousel-fade .active.carousel-item-start{transition:none}}.carousel-control-next,.carousel-control-prev{position:absolute;top:0;bottom:0;z-index:1;display:flex;align-items:center;justify-content:center;width:15%;padding:0;color:#fff;text-align:center;background:0 0;border:0;opacity:.5;transition:opacity .15s ease}@media (prefers-reduced-motion:reduce){.carousel-control-next,.carousel-control-prev{transition:none}}.carousel-control-next:focus,.carousel-control-next:hover,.carousel-control-prev:focus,.carousel-control-prev:hover{color:#fff;text-decoration:none;outline:0;opacity:.9}.carousel-control-prev{left:0}.carousel-control-next{right:0}.carousel-control-next-icon,.carousel-control-prev-icon{display:inline-block;width:2rem;height:2rem;background-repeat:no-repeat;background-position:50%;background-size:100% 100%}.carousel-control-prev-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e")}.carousel-control-next-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")}.carousel-indicators{position:absolute;right:0;bottom:0;left:0;z-index:2;display:flex;justify-content:center;padding:0;margin-right:15%;margin-bottom:1rem;margin-left:15%;list-style:none}.carousel-indicators [data-bs-target]{box-sizing:content-box;flex:0 1 auto;width:30px;height:3px;padding:0;margin-right:3px;margin-left:3px;text-indent:-999px;cursor:pointer;background-color:#fff;background-clip:padding-box;border:0;border-top:10px solid transparent;border-bottom:10px solid transparent;opacity:.5;transition:opacity .6s ease}@media (prefers-reduced-motion:reduce){.carousel-indicators [data-bs-target]{transition:none}}.carousel-indicators .active{opacity:1}.carousel-caption{position:absolute;right:15%;bottom:1.25rem;left:15%;padding-top:1.25rem;padding-bottom:1.25rem;color:#fff;text-align:center}.carousel-dark .carousel-control-next-icon,.carousel-dark .carousel-control-prev-icon{filter:invert(1) grayscale(100)}.carousel-dark .carousel-indicators [data-bs-target]{background-color:#000}.carousel-dark .carousel-caption{color:#000}@-webkit-keyframes spinner-border{to{transform:rotate(360deg)}}@keyframes spinner-border{to{transform:rotate(360deg)}}.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:-.125em;border:.25em solid currentColor;border-right-color:transparent;border-radius:50%;-webkit-animation:.75s linear infinite spinner-border;animation:.75s linear infinite spinner-border}.spinner-border-sm{width:1rem;height:1rem;border-width:.2em}@-webkit-keyframes spinner-grow{0%{transform:scale(0)}50%{opacity:1;transform:none}}@keyframes spinner-grow{0%{transform:scale(0)}50%{opacity:1;transform:none}}.spinner-grow{display:inline-block;width:2rem;height:2rem;vertical-align:-.125em;background-color:currentColor;border-radius:50%;opacity:0;-webkit-animation:.75s linear infinite spinner-grow;animation:.75s linear infinite spinner-grow}.spinner-grow-sm{width:1rem;height:1rem}@media (prefers-reduced-motion:reduce){.spinner-border,.spinner-grow{-webkit-animation-duration:1.5s;animation-duration:1.5s}}.offcanvas{position:fixed;bottom:0;z-index:1045;display:flex;flex-direction:column;max-width:100%;visibility:hidden;background-color:#fff;background-clip:padding-box;outline:0;transition:transform .3s ease-in-out}@media (prefers-reduced-motion:reduce){.offcanvas{transition:none}}.offcanvas-backdrop{position:fixed;top:0;left:0;z-index:1040;width:100vw;height:100vh;background-color:#000}.offcanvas-backdrop.fade{opacity:0}.offcanvas-backdrop.show{opacity:.5}.offcanvas-header{display:flex;align-items:center;justify-content:space-between;padding:1rem 1rem}.offcanvas-header .btn-close{padding:.5rem .5rem;margin-top:-.5rem;margin-right:-.5rem;margin-bottom:-.5rem}.offcanvas-title{margin-bottom:0;line-height:1.5}.offcanvas-body{flex-grow:1;padding:1rem 1rem;overflow-y:auto}.offcanvas-start{top:0;left:0;width:400px;border-right:1px solid rgba(0,0,0,.2);transform:translateX(-100%)}.offcanvas-end{top:0;right:0;width:400px;border-left:1px solid rgba(0,0,0,.2);transform:translateX(100%)}.offcanvas-top{top:0;right:0;left:0;height:30vh;max-height:100%;border-bottom:1px solid rgba(0,0,0,.2);transform:translateY(-100%)}.offcanvas-bottom{right:0;left:0;height:30vh;max-height:100%;border-top:1px solid rgba(0,0,0,.2);transform:translateY(100%)}.offcanvas.show{transform:none}.placeholder{display:inline-block;min-height:1em;vertical-align:middle;cursor:wait;background-color:currentColor;opacity:.5}.placeholder.btn::before{display:inline-block;content:""}.placeholder-xs{min-height:.6em}.placeholder-sm{min-height:.8em}.placeholder-lg{min-height:1.2em}.placeholder-glow .placeholder{-webkit-animation:placeholder-glow 2s ease-in-out infinite;animation:placeholder-glow 2s ease-in-out infinite}@-webkit-keyframes placeholder-glow{50%{opacity:.2}}@keyframes placeholder-glow{50%{opacity:.2}}.placeholder-wave{-webkit-mask-image:linear-gradient(130deg,#000 55%,rgba(0,0,0,0.8) 75%,#000 95%);mask-image:linear-gradient(130deg,#000 55%,rgba(0,0,0,0.8) 75%,#000 95%);-webkit-mask-size:200% 100%;mask-size:200% 100%;-webkit-animation:placeholder-wave 2s linear infinite;animation:placeholder-wave 2s linear infinite}@-webkit-keyframes placeholder-wave{100%{-webkit-mask-position:-200% 0%;mask-position:-200% 0%}}@keyframes placeholder-wave{100%{-webkit-mask-position:-200% 0%;mask-position:-200% 0%}}.clearfix::after{display:block;clear:both;content:""}.link-primary{color:#0d6efd}.link-primary:focus,.link-primary:hover{color:#0a58ca}.link-secondary{color:#6c757d}.link-secondary:focus,.link-secondary:hover{color:#565e64}.link-success{color:#198754}.link-success:focus,.link-success:hover{color:#146c43}.link-info{color:#0dcaf0}.link-info:focus,.link-info:hover{color:#3dd5f3}.link-warning{color:#ffc107}.link-warning:focus,.link-warning:hover{color:#ffcd39}.link-danger{color:#dc3545}.link-danger:focus,.link-danger:hover{color:#b02a37}.link-light{color:#f8f9fa}.link-light:focus,.link-light:hover{color:#f9fafb}.link-dark{color:#212529}.link-dark:focus,.link-dark:hover{color:#1a1e21}.ratio{position:relative;width:100%}.ratio::before{display:block;padding-top:var(--bs-aspect-ratio);content:""}.ratio>*{position:absolute;top:0;left:0;width:100%;height:100%}.ratio-1x1{--bs-aspect-ratio:100%}.ratio-4x3{--bs-aspect-ratio:75%}.ratio-16x9{--bs-aspect-ratio:56.25%}.ratio-21x9{--bs-aspect-ratio:42.8571428571%}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.fixed-bottom{position:fixed;right:0;bottom:0;left:0;z-index:1030}.sticky-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}@media (min-width:576px){.sticky-sm-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:768px){.sticky-md-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:992px){.sticky-lg-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:1200px){.sticky-xl-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:1400px){.sticky-xxl-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}.hstack{display:flex;flex-direction:row;align-items:center;align-self:stretch}.vstack{display:flex;flex:1 1 auto;flex-direction:column;align-self:stretch}.visually-hidden,.visually-hidden-focusable:not(:focus):not(:focus-within){position:absolute!important;width:1px!important;height:1px!important;padding:0!important;margin:-1px!important;overflow:hidden!important;clip:rect(0,0,0,0)!important;white-space:nowrap!important;border:0!important}.stretched-link::after{position:absolute;top:0;right:0;bottom:0;left:0;z-index:1;content:""}.text-truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.vr{display:inline-block;align-self:stretch;width:1px;min-height:1em;background-color:currentColor;opacity:.25}.align-baseline{vertical-align:baseline!important}.align-top{vertical-align:top!important}.align-middle{vertical-align:middle!important}.align-bottom{vertical-align:bottom!important}.align-text-bottom{vertical-align:text-bottom!important}.align-text-top{vertical-align:text-top!important}.float-start{float:left!important}.float-end{float:right!important}.float-none{float:none!important}.opacity-0{opacity:0!important}.opacity-25{opacity:.25!important}.opacity-50{opacity:.5!important}.opacity-75{opacity:.75!important}.opacity-100{opacity:1!important}.overflow-auto{overflow:auto!important}.overflow-hidden{overflow:hidden!important}.overflow-visible{overflow:visible!important}.overflow-scroll{overflow:scroll!important}.d-inline{display:inline!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}.d-grid{display:grid!important}.d-table{display:table!important}.d-table-row{display:table-row!important}.d-table-cell{display:table-cell!important}.d-flex{display:flex!important}.d-inline-flex{display:inline-flex!important}.d-none{display:none!important}.shadow{box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important}.shadow-sm{box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important}.shadow-lg{box-shadow:0 1rem 3rem rgba(0,0,0,.175)!important}.shadow-none{box-shadow:none!important}.position-static{position:static!important}.position-relative{position:relative!important}.position-absolute{position:absolute!important}.position-fixed{position:fixed!important}.position-sticky{position:-webkit-sticky!important;position:sticky!important}.top-0{top:0!important}.top-50{top:50%!important}.top-100{top:100%!important}.bottom-0{bottom:0!important}.bottom-50{bottom:50%!important}.bottom-100{bottom:100%!important}.start-0{left:0!important}.start-50{left:50%!important}.start-100{left:100%!important}.end-0{right:0!important}.end-50{right:50%!important}.end-100{right:100%!important}.translate-middle{transform:translate(-50%,-50%)!important}.translate-middle-x{transform:translateX(-50%)!important}.translate-middle-y{transform:translateY(-50%)!important}.border{border:1px solid #dee2e6!important}.border-0{border:0!important}.border-top{border-top:1px solid #dee2e6!important}.border-top-0{border-top:0!important}.border-end{border-right:1px solid #dee2e6!important}.border-end-0{border-right:0!important}.border-bottom{border-bottom:1px solid #dee2e6!important}.border-bottom-0{border-bottom:0!important}.border-start{border-left:1px solid #dee2e6!important}.border-start-0{border-left:0!important}.border-primary{border-color:#0d6efd!important}.border-secondary{border-color:#6c757d!important}.border-success{border-color:#198754!important}.border-info{border-color:#0dcaf0!important}.border-warning{border-color:#ffc107!important}.border-danger{border-color:#dc3545!important}.border-light{border-color:#f8f9fa!important}.border-dark{border-color:#212529!important}.border-white{border-color:#fff!important}.border-1{border-width:1px!important}.border-2{border-width:2px!important}.border-3{border-width:3px!important}.border-4{border-width:4px!important}.border-5{border-width:5px!important}.w-25{width:25%!important}.w-50{width:50%!important}.w-75{width:75%!important}.w-100{width:100%!important}.w-auto{width:auto!important}.mw-100{max-width:100%!important}.vw-100{width:100vw!important}.min-vw-100{min-width:100vw!important}.h-25{height:25%!important}.h-50{height:50%!important}.h-75{height:75%!important}.h-100{height:100%!important}.h-auto{height:auto!important}.mh-100{max-height:100%!important}.vh-100{height:100vh!important}.min-vh-100{min-height:100vh!important}.flex-fill{flex:1 1 auto!important}.flex-row{flex-direction:row!important}.flex-column{flex-direction:column!important}.flex-row-reverse{flex-direction:row-reverse!important}.flex-column-reverse{flex-direction:column-reverse!important}.flex-grow-0{flex-grow:0!important}.flex-grow-1{flex-grow:1!important}.flex-shrink-0{flex-shrink:0!important}.flex-shrink-1{flex-shrink:1!important}.flex-wrap{flex-wrap:wrap!important}.flex-nowrap{flex-wrap:nowrap!important}.flex-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-0{gap:0!important}.gap-1{gap:.25rem!important}.gap-2{gap:.5rem!important}.gap-3{gap:1rem!important}.gap-4{gap:1.5rem!important}.gap-5{gap:3rem!important}.justify-content-start{justify-content:flex-start!important}.justify-content-end{justify-content:flex-end!important}.justify-content-center{justify-content:center!important}.justify-content-between{justify-content:space-between!important}.justify-content-around{justify-content:space-around!important}.justify-content-evenly{justify-content:space-evenly!important}.align-items-start{align-items:flex-start!important}.align-items-end{align-items:flex-end!important}.align-items-center{align-items:center!important}.align-items-baseline{align-items:baseline!important}.align-items-stretch{align-items:stretch!important}.align-content-start{align-content:flex-start!important}.align-content-end{align-content:flex-end!important}.align-content-center{align-content:center!important}.align-content-between{align-content:space-between!important}.align-content-around{align-content:space-around!important}.align-content-stretch{align-content:stretch!important}.align-self-auto{align-self:auto!important}.align-self-start{align-self:flex-start!important}.align-self-end{align-self:flex-end!important}.align-self-center{align-self:center!important}.align-self-baseline{align-self:baseline!important}.align-self-stretch{align-self:stretch!important}.order-first{order:-1!important}.order-0{order:0!important}.order-1{order:1!important}.order-2{order:2!important}.order-3{order:3!important}.order-4{order:4!important}.order-5{order:5!important}.order-last{order:6!important}.m-0{margin:0!important}.m-1{margin:.25rem!important}.m-2{margin:.5rem!important}.m-3{margin:1rem!important}.m-4{margin:1.5rem!important}.m-5{margin:3rem!important}.m-auto{margin:auto!important}.mx-0{margin-right:0!important;margin-left:0!important}.mx-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-3{margin-right:1rem!important;margin-left:1rem!important}.mx-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-5{margin-right:3rem!important;margin-left:3rem!important}.mx-auto{margin-right:auto!important;margin-left:auto!important}.my-0{margin-top:0!important;margin-bottom:0!important}.my-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-0{margin-top:0!important}.mt-1{margin-top:.25rem!important}.mt-2{margin-top:.5rem!important}.mt-3{margin-top:1rem!important}.mt-4{margin-top:1.5rem!important}.mt-5{margin-top:3rem!important}.mt-auto{margin-top:auto!important}.me-0{margin-right:0!important}.me-1{margin-right:.25rem!important}.me-2{margin-right:.5rem!important}.me-3{margin-right:1rem!important}.me-4{margin-right:1.5rem!important}.me-5{margin-right:3rem!important}.me-auto{margin-right:auto!important}.mb-0{margin-bottom:0!important}.mb-1{margin-bottom:.25rem!important}.mb-2{margin-bottom:.5rem!important}.mb-3{margin-bottom:1rem!important}.mb-4{margin-bottom:1.5rem!important}.mb-5{margin-bottom:3rem!important}.mb-auto{margin-bottom:auto!important}.ms-0{margin-left:0!important}.ms-1{margin-left:.25rem!important}.ms-2{margin-left:.5rem!important}.ms-3{margin-left:1rem!important}.ms-4{margin-left:1.5rem!important}.ms-5{margin-left:3rem!important}.ms-auto{margin-left:auto!important}.p-0{padding:0!important}.p-1{padding:.25rem!important}.p-2{padding:.5rem!important}.p-3{padding:1rem!important}.p-4{padding:1.5rem!important}.p-5{padding:3rem!important}.px-0{padding-right:0!important;padding-left:0!important}.px-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-3{padding-right:1rem!important;padding-left:1rem!important}.px-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-5{padding-right:3rem!important;padding-left:3rem!important}.py-0{padding-top:0!important;padding-bottom:0!important}.py-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-0{padding-top:0!important}.pt-1{padding-top:.25rem!important}.pt-2{padding-top:.5rem!important}.pt-3{padding-top:1rem!important}.pt-4{padding-top:1.5rem!important}.pt-5{padding-top:3rem!important}.pe-0{padding-right:0!important}.pe-1{padding-right:.25rem!important}.pe-2{padding-right:.5rem!important}.pe-3{padding-right:1rem!important}.pe-4{padding-right:1.5rem!important}.pe-5{padding-right:3rem!important}.pb-0{padding-bottom:0!important}.pb-1{padding-bottom:.25rem!important}.pb-2{padding-bottom:.5rem!important}.pb-3{padding-bottom:1rem!important}.pb-4{padding-bottom:1.5rem!important}.pb-5{padding-bottom:3rem!important}.ps-0{padding-left:0!important}.ps-1{padding-left:.25rem!important}.ps-2{padding-left:.5rem!important}.ps-3{padding-left:1rem!important}.ps-4{padding-left:1.5rem!important}.ps-5{padding-left:3rem!important}.font-monospace{font-family:var(--bs-font-monospace)!important}.fs-1{font-size:calc(1.375rem + 1.5vw)!important}.fs-2{font-size:calc(1.325rem + .9vw)!important}.fs-3{font-size:calc(1.3rem + .6vw)!important}.fs-4{font-size:calc(1.275rem + .3vw)!important}.fs-5{font-size:1.25rem!important}.fs-6{font-size:1rem!important}.fst-italic{font-style:italic!important}.fst-normal{font-style:normal!important}.fw-light{font-weight:300!important}.fw-lighter{font-weight:lighter!important}.fw-normal{font-weight:400!important}.fw-bold{font-weight:700!important}.fw-bolder{font-weight:bolder!important}.lh-1{line-height:1!important}.lh-sm{line-height:1.25!important}.lh-base{line-height:1.5!important}.lh-lg{line-height:2!important}.text-start{text-align:left!important}.text-end{text-align:right!important}.text-center{text-align:center!important}.text-decoration-none{text-decoration:none!important}.text-decoration-underline{text-decoration:underline!important}.text-decoration-line-through{text-decoration:line-through!important}.text-lowercase{text-transform:lowercase!important}.text-uppercase{text-transform:uppercase!important}.text-capitalize{text-transform:capitalize!important}.text-wrap{white-space:normal!important}.text-nowrap{white-space:nowrap!important}.text-break{word-wrap:break-word!important;word-break:break-word!important}.text-primary{--bs-text-opacity:1;color:rgba(var(--bs-primary-rgb),var(--bs-text-opacity))!important}.text-secondary{--bs-text-opacity:1;color:rgba(var(--bs-secondary-rgb),var(--bs-text-opacity))!important}.text-success{--bs-text-opacity:1;color:rgba(var(--bs-success-rgb),var(--bs-text-opacity))!important}.text-info{--bs-text-opacity:1;color:rgba(var(--bs-info-rgb),var(--bs-text-opacity))!important}.text-warning{--bs-text-opacity:1;color:rgba(var(--bs-warning-rgb),var(--bs-text-opacity))!important}.text-danger{--bs-text-opacity:1;color:rgba(var(--bs-danger-rgb),var(--bs-text-opacity))!important}.text-light{--bs-text-opacity:1;color:rgba(var(--bs-light-rgb),var(--bs-text-opacity))!important}.text-dark{--bs-text-opacity:1;color:rgba(var(--bs-dark-rgb),var(--bs-text-opacity))!important}.text-black{--bs-text-opacity:1;color:rgba(var(--bs-black-rgb),var(--bs-text-opacity))!important}.text-white{--bs-text-opacity:1;color:rgba(var(--bs-white-rgb),var(--bs-text-opacity))!important}.text-body{--bs-text-opacity:1;color:rgba(var(--bs-body-color-rgb),var(--bs-text-opacity))!important}.text-muted{--bs-text-opacity:1;color:#6c757d!important}.text-black-50{--bs-text-opacity:1;color:rgba(0,0,0,.5)!important}.text-white-50{--bs-text-opacity:1;color:rgba(255,255,255,.5)!important}.text-reset{--bs-text-opacity:1;color:inherit!important}.text-opacity-25{--bs-text-opacity:0.25}.text-opacity-50{--bs-text-opacity:0.5}.text-opacity-75{--bs-text-opacity:0.75}.text-opacity-100{--bs-text-opacity:1}.bg-primary{--bs-bg-opacity:1;background-color:rgba(var(--bs-primary-rgb),var(--bs-bg-opacity))!important}.bg-secondary{--bs-bg-opacity:1;background-color:rgba(var(--bs-secondary-rgb),var(--bs-bg-opacity))!important}.bg-success{--bs-bg-opacity:1;background-color:rgba(var(--bs-success-rgb),var(--bs-bg-opacity))!important}.bg-info{--bs-bg-opacity:1;background-color:rgba(var(--bs-info-rgb),var(--bs-bg-opacity))!important}.bg-warning{--bs-bg-opacity:1;background-color:rgba(var(--bs-warning-rgb),var(--bs-bg-opacity))!important}.bg-danger{--bs-bg-opacity:1;background-color:rgba(var(--bs-danger-rgb),var(--bs-bg-opacity))!important}.bg-light{--bs-bg-opacity:1;background-color:rgba(var(--bs-light-rgb),var(--bs-bg-opacity))!important}.bg-dark{--bs-bg-opacity:1;background-color:rgba(var(--bs-dark-rgb),var(--bs-bg-opacity))!important}.bg-black{--bs-bg-opacity:1;background-color:rgba(var(--bs-black-rgb),var(--bs-bg-opacity))!important}.bg-white{--bs-bg-opacity:1;background-color:rgba(var(--bs-white-rgb),var(--bs-bg-opacity))!important}.bg-body{--bs-bg-opacity:1;background-color:rgba(var(--bs-body-bg-rgb),var(--bs-bg-opacity))!important}.bg-transparent{--bs-bg-opacity:1;background-color:transparent!important}.bg-opacity-10{--bs-bg-opacity:0.1}.bg-opacity-25{--bs-bg-opacity:0.25}.bg-opacity-50{--bs-bg-opacity:0.5}.bg-opacity-75{--bs-bg-opacity:0.75}.bg-opacity-100{--bs-bg-opacity:1}.bg-gradient{background-image:var(--bs-gradient)!important}.user-select-all{-webkit-user-select:all!important;-moz-user-select:all!important;user-select:all!important}.user-select-auto{-webkit-user-select:auto!important;-moz-user-select:auto!important;user-select:auto!important}.user-select-none{-webkit-user-select:none!important;-moz-user-select:none!important;user-select:none!important}.pe-none{pointer-events:none!important}.pe-auto{pointer-events:auto!important}.rounded{border-radius:.25rem!important}.rounded-0{border-radius:0!important}.rounded-1{border-radius:.2rem!important}.rounded-2{border-radius:.25rem!important}.rounded-3{border-radius:.3rem!important}.rounded-circle{border-radius:50%!important}.rounded-pill{border-radius:50rem!important}.rounded-top{border-top-left-radius:.25rem!important;border-top-right-radius:.25rem!important}.rounded-end{border-top-right-radius:.25rem!important;border-bottom-right-radius:.25rem!important}.rounded-bottom{border-bottom-right-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-start{border-bottom-left-radius:.25rem!important;border-top-left-radius:.25rem!important}.visible{visibility:visible!important}.invisible{visibility:hidden!important}@media (min-width:576px){.float-sm-start{float:left!important}.float-sm-end{float:right!important}.float-sm-none{float:none!important}.d-sm-inline{display:inline!important}.d-sm-inline-block{display:inline-block!important}.d-sm-block{display:block!important}.d-sm-grid{display:grid!important}.d-sm-table{display:table!important}.d-sm-table-row{display:table-row!important}.d-sm-table-cell{display:table-cell!important}.d-sm-flex{display:flex!important}.d-sm-inline-flex{display:inline-flex!important}.d-sm-none{display:none!important}.flex-sm-fill{flex:1 1 auto!important}.flex-sm-row{flex-direction:row!important}.flex-sm-column{flex-direction:column!important}.flex-sm-row-reverse{flex-direction:row-reverse!important}.flex-sm-column-reverse{flex-direction:column-reverse!important}.flex-sm-grow-0{flex-grow:0!important}.flex-sm-grow-1{flex-grow:1!important}.flex-sm-shrink-0{flex-shrink:0!important}.flex-sm-shrink-1{flex-shrink:1!important}.flex-sm-wrap{flex-wrap:wrap!important}.flex-sm-nowrap{flex-wrap:nowrap!important}.flex-sm-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-sm-0{gap:0!important}.gap-sm-1{gap:.25rem!important}.gap-sm-2{gap:.5rem!important}.gap-sm-3{gap:1rem!important}.gap-sm-4{gap:1.5rem!important}.gap-sm-5{gap:3rem!important}.justify-content-sm-start{justify-content:flex-start!important}.justify-content-sm-end{justify-content:flex-end!important}.justify-content-sm-center{justify-content:center!important}.justify-content-sm-between{justify-content:space-between!important}.justify-content-sm-around{justify-content:space-around!important}.justify-content-sm-evenly{justify-content:space-evenly!important}.align-items-sm-start{align-items:flex-start!important}.align-items-sm-end{align-items:flex-end!important}.align-items-sm-center{align-items:center!important}.align-items-sm-baseline{align-items:baseline!important}.align-items-sm-stretch{align-items:stretch!important}.align-content-sm-start{align-content:flex-start!important}.align-content-sm-end{align-content:flex-end!important}.align-content-sm-center{align-content:center!important}.align-content-sm-between{align-content:space-between!important}.align-content-sm-around{align-content:space-around!important}.align-content-sm-stretch{align-content:stretch!important}.align-self-sm-auto{align-self:auto!important}.align-self-sm-start{align-self:flex-start!important}.align-self-sm-end{align-self:flex-end!important}.align-self-sm-center{align-self:center!important}.align-self-sm-baseline{align-self:baseline!important}.align-self-sm-stretch{align-self:stretch!important}.order-sm-first{order:-1!important}.order-sm-0{order:0!important}.order-sm-1{order:1!important}.order-sm-2{order:2!important}.order-sm-3{order:3!important}.order-sm-4{order:4!important}.order-sm-5{order:5!important}.order-sm-last{order:6!important}.m-sm-0{margin:0!important}.m-sm-1{margin:.25rem!important}.m-sm-2{margin:.5rem!important}.m-sm-3{margin:1rem!important}.m-sm-4{margin:1.5rem!important}.m-sm-5{margin:3rem!important}.m-sm-auto{margin:auto!important}.mx-sm-0{margin-right:0!important;margin-left:0!important}.mx-sm-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-sm-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-sm-3{margin-right:1rem!important;margin-left:1rem!important}.mx-sm-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-sm-5{margin-right:3rem!important;margin-left:3rem!important}.mx-sm-auto{margin-right:auto!important;margin-left:auto!important}.my-sm-0{margin-top:0!important;margin-bottom:0!important}.my-sm-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-sm-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-sm-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-sm-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-sm-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-sm-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-sm-0{margin-top:0!important}.mt-sm-1{margin-top:.25rem!important}.mt-sm-2{margin-top:.5rem!important}.mt-sm-3{margin-top:1rem!important}.mt-sm-4{margin-top:1.5rem!important}.mt-sm-5{margin-top:3rem!important}.mt-sm-auto{margin-top:auto!important}.me-sm-0{margin-right:0!important}.me-sm-1{margin-right:.25rem!important}.me-sm-2{margin-right:.5rem!important}.me-sm-3{margin-right:1rem!important}.me-sm-4{margin-right:1.5rem!important}.me-sm-5{margin-right:3rem!important}.me-sm-auto{margin-right:auto!important}.mb-sm-0{margin-bottom:0!important}.mb-sm-1{margin-bottom:.25rem!important}.mb-sm-2{margin-bottom:.5rem!important}.mb-sm-3{margin-bottom:1rem!important}.mb-sm-4{margin-bottom:1.5rem!important}.mb-sm-5{margin-bottom:3rem!important}.mb-sm-auto{margin-bottom:auto!important}.ms-sm-0{margin-left:0!important}.ms-sm-1{margin-left:.25rem!important}.ms-sm-2{margin-left:.5rem!important}.ms-sm-3{margin-left:1rem!important}.ms-sm-4{margin-left:1.5rem!important}.ms-sm-5{margin-left:3rem!important}.ms-sm-auto{margin-left:auto!important}.p-sm-0{padding:0!important}.p-sm-1{padding:.25rem!important}.p-sm-2{padding:.5rem!important}.p-sm-3{padding:1rem!important}.p-sm-4{padding:1.5rem!important}.p-sm-5{padding:3rem!important}.px-sm-0{padding-right:0!important;padding-left:0!important}.px-sm-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-sm-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-sm-3{padding-right:1rem!important;padding-left:1rem!important}.px-sm-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-sm-5{padding-right:3rem!important;padding-left:3rem!important}.py-sm-0{padding-top:0!important;padding-bottom:0!important}.py-sm-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-sm-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-sm-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-sm-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-sm-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-sm-0{padding-top:0!important}.pt-sm-1{padding-top:.25rem!important}.pt-sm-2{padding-top:.5rem!important}.pt-sm-3{padding-top:1rem!important}.pt-sm-4{padding-top:1.5rem!important}.pt-sm-5{padding-top:3rem!important}.pe-sm-0{padding-right:0!important}.pe-sm-1{padding-right:.25rem!important}.pe-sm-2{padding-right:.5rem!important}.pe-sm-3{padding-right:1rem!important}.pe-sm-4{padding-right:1.5rem!important}.pe-sm-5{padding-right:3rem!important}.pb-sm-0{padding-bottom:0!important}.pb-sm-1{padding-bottom:.25rem!important}.pb-sm-2{padding-bottom:.5rem!important}.pb-sm-3{padding-bottom:1rem!important}.pb-sm-4{padding-bottom:1.5rem!important}.pb-sm-5{padding-bottom:3rem!important}.ps-sm-0{padding-left:0!important}.ps-sm-1{padding-left:.25rem!important}.ps-sm-2{padding-left:.5rem!important}.ps-sm-3{padding-left:1rem!important}.ps-sm-4{padding-left:1.5rem!important}.ps-sm-5{padding-left:3rem!important}.text-sm-start{text-align:left!important}.text-sm-end{text-align:right!important}.text-sm-center{text-align:center!important}}@media (min-width:768px){.float-md-start{float:left!important}.float-md-end{float:right!important}.float-md-none{float:none!important}.d-md-inline{display:inline!important}.d-md-inline-block{display:inline-block!important}.d-md-block{display:block!important}.d-md-grid{display:grid!important}.d-md-table{display:table!important}.d-md-table-row{display:table-row!important}.d-md-table-cell{display:table-cell!important}.d-md-flex{display:flex!important}.d-md-inline-flex{display:inline-flex!important}.d-md-none{display:none!important}.flex-md-fill{flex:1 1 auto!important}.flex-md-row{flex-direction:row!important}.flex-md-column{flex-direction:column!important}.flex-md-row-reverse{flex-direction:row-reverse!important}.flex-md-column-reverse{flex-direction:column-reverse!important}.flex-md-grow-0{flex-grow:0!important}.flex-md-grow-1{flex-grow:1!important}.flex-md-shrink-0{flex-shrink:0!important}.flex-md-shrink-1{flex-shrink:1!important}.flex-md-wrap{flex-wrap:wrap!important}.flex-md-nowrap{flex-wrap:nowrap!important}.flex-md-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-md-0{gap:0!important}.gap-md-1{gap:.25rem!important}.gap-md-2{gap:.5rem!important}.gap-md-3{gap:1rem!important}.gap-md-4{gap:1.5rem!important}.gap-md-5{gap:3rem!important}.justify-content-md-start{justify-content:flex-start!important}.justify-content-md-end{justify-content:flex-end!important}.justify-content-md-center{justify-content:center!important}.justify-content-md-between{justify-content:space-between!important}.justify-content-md-around{justify-content:space-around!important}.justify-content-md-evenly{justify-content:space-evenly!important}.align-items-md-start{align-items:flex-start!important}.align-items-md-end{align-items:flex-end!important}.align-items-md-center{align-items:center!important}.align-items-md-baseline{align-items:baseline!important}.align-items-md-stretch{align-items:stretch!important}.align-content-md-start{align-content:flex-start!important}.align-content-md-end{align-content:flex-end!important}.align-content-md-center{align-content:center!important}.align-content-md-between{align-content:space-between!important}.align-content-md-around{align-content:space-around!important}.align-content-md-stretch{align-content:stretch!important}.align-self-md-auto{align-self:auto!important}.align-self-md-start{align-self:flex-start!important}.align-self-md-end{align-self:flex-end!important}.align-self-md-center{align-self:center!important}.align-self-md-baseline{align-self:baseline!important}.align-self-md-stretch{align-self:stretch!important}.order-md-first{order:-1!important}.order-md-0{order:0!important}.order-md-1{order:1!important}.order-md-2{order:2!important}.order-md-3{order:3!important}.order-md-4{order:4!important}.order-md-5{order:5!important}.order-md-last{order:6!important}.m-md-0{margin:0!important}.m-md-1{margin:.25rem!important}.m-md-2{margin:.5rem!important}.m-md-3{margin:1rem!important}.m-md-4{margin:1.5rem!important}.m-md-5{margin:3rem!important}.m-md-auto{margin:auto!important}.mx-md-0{margin-right:0!important;margin-left:0!important}.mx-md-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-md-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-md-3{margin-right:1rem!important;margin-left:1rem!important}.mx-md-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-md-5{margin-right:3rem!important;margin-left:3rem!important}.mx-md-auto{margin-right:auto!important;margin-left:auto!important}.my-md-0{margin-top:0!important;margin-bottom:0!important}.my-md-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-md-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-md-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-md-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-md-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-md-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-md-0{margin-top:0!important}.mt-md-1{margin-top:.25rem!important}.mt-md-2{margin-top:.5rem!important}.mt-md-3{margin-top:1rem!important}.mt-md-4{margin-top:1.5rem!important}.mt-md-5{margin-top:3rem!important}.mt-md-auto{margin-top:auto!important}.me-md-0{margin-right:0!important}.me-md-1{margin-right:.25rem!important}.me-md-2{margin-right:.5rem!important}.me-md-3{margin-right:1rem!important}.me-md-4{margin-right:1.5rem!important}.me-md-5{margin-right:3rem!important}.me-md-auto{margin-right:auto!important}.mb-md-0{margin-bottom:0!important}.mb-md-1{margin-bottom:.25rem!important}.mb-md-2{margin-bottom:.5rem!important}.mb-md-3{margin-bottom:1rem!important}.mb-md-4{margin-bottom:1.5rem!important}.mb-md-5{margin-bottom:3rem!important}.mb-md-auto{margin-bottom:auto!important}.ms-md-0{margin-left:0!important}.ms-md-1{margin-left:.25rem!important}.ms-md-2{margin-left:.5rem!important}.ms-md-3{margin-left:1rem!important}.ms-md-4{margin-left:1.5rem!important}.ms-md-5{margin-left:3rem!important}.ms-md-auto{margin-left:auto!important}.p-md-0{padding:0!important}.p-md-1{padding:.25rem!important}.p-md-2{padding:.5rem!important}.p-md-3{padding:1rem!important}.p-md-4{padding:1.5rem!important}.p-md-5{padding:3rem!important}.px-md-0{padding-right:0!important;padding-left:0!important}.px-md-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-md-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-md-3{padding-right:1rem!important;padding-left:1rem!important}.px-md-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-md-5{padding-right:3rem!important;padding-left:3rem!important}.py-md-0{padding-top:0!important;padding-bottom:0!important}.py-md-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-md-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-md-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-md-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-md-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-md-0{padding-top:0!important}.pt-md-1{padding-top:.25rem!important}.pt-md-2{padding-top:.5rem!important}.pt-md-3{padding-top:1rem!important}.pt-md-4{padding-top:1.5rem!important}.pt-md-5{padding-top:3rem!important}.pe-md-0{padding-right:0!important}.pe-md-1{padding-right:.25rem!important}.pe-md-2{padding-right:.5rem!important}.pe-md-3{padding-right:1rem!important}.pe-md-4{padding-right:1.5rem!important}.pe-md-5{padding-right:3rem!important}.pb-md-0{padding-bottom:0!important}.pb-md-1{padding-bottom:.25rem!important}.pb-md-2{padding-bottom:.5rem!important}.pb-md-3{padding-bottom:1rem!important}.pb-md-4{padding-bottom:1.5rem!important}.pb-md-5{padding-bottom:3rem!important}.ps-md-0{padding-left:0!important}.ps-md-1{padding-left:.25rem!important}.ps-md-2{padding-left:.5rem!important}.ps-md-3{padding-left:1rem!important}.ps-md-4{padding-left:1.5rem!important}.ps-md-5{padding-left:3rem!important}.text-md-start{text-align:left!important}.text-md-end{text-align:right!important}.text-md-center{text-align:center!important}}@media (min-width:992px){.float-lg-start{float:left!important}.float-lg-end{float:right!important}.float-lg-none{float:none!important}.d-lg-inline{display:inline!important}.d-lg-inline-block{display:inline-block!important}.d-lg-block{display:block!important}.d-lg-grid{display:grid!important}.d-lg-table{display:table!important}.d-lg-table-row{display:table-row!important}.d-lg-table-cell{display:table-cell!important}.d-lg-flex{display:flex!important}.d-lg-inline-flex{display:inline-flex!important}.d-lg-none{display:none!important}.flex-lg-fill{flex:1 1 auto!important}.flex-lg-row{flex-direction:row!important}.flex-lg-column{flex-direction:column!important}.flex-lg-row-reverse{flex-direction:row-reverse!important}.flex-lg-column-reverse{flex-direction:column-reverse!important}.flex-lg-grow-0{flex-grow:0!important}.flex-lg-grow-1{flex-grow:1!important}.flex-lg-shrink-0{flex-shrink:0!important}.flex-lg-shrink-1{flex-shrink:1!important}.flex-lg-wrap{flex-wrap:wrap!important}.flex-lg-nowrap{flex-wrap:nowrap!important}.flex-lg-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-lg-0{gap:0!important}.gap-lg-1{gap:.25rem!important}.gap-lg-2{gap:.5rem!important}.gap-lg-3{gap:1rem!important}.gap-lg-4{gap:1.5rem!important}.gap-lg-5{gap:3rem!important}.justify-content-lg-start{justify-content:flex-start!important}.justify-content-lg-end{justify-content:flex-end!important}.justify-content-lg-center{justify-content:center!important}.justify-content-lg-between{justify-content:space-between!important}.justify-content-lg-around{justify-content:space-around!important}.justify-content-lg-evenly{justify-content:space-evenly!important}.align-items-lg-start{align-items:flex-start!important}.align-items-lg-end{align-items:flex-end!important}.align-items-lg-center{align-items:center!important}.align-items-lg-baseline{align-items:baseline!important}.align-items-lg-stretch{align-items:stretch!important}.align-content-lg-start{align-content:flex-start!important}.align-content-lg-end{align-content:flex-end!important}.align-content-lg-center{align-content:center!important}.align-content-lg-between{align-content:space-between!important}.align-content-lg-around{align-content:space-around!important}.align-content-lg-stretch{align-content:stretch!important}.align-self-lg-auto{align-self:auto!important}.align-self-lg-start{align-self:flex-start!important}.align-self-lg-end{align-self:flex-end!important}.align-self-lg-center{align-self:center!important}.align-self-lg-baseline{align-self:baseline!important}.align-self-lg-stretch{align-self:stretch!important}.order-lg-first{order:-1!important}.order-lg-0{order:0!important}.order-lg-1{order:1!important}.order-lg-2{order:2!important}.order-lg-3{order:3!important}.order-lg-4{order:4!important}.order-lg-5{order:5!important}.order-lg-last{order:6!important}.m-lg-0{margin:0!important}.m-lg-1{margin:.25rem!important}.m-lg-2{margin:.5rem!important}.m-lg-3{margin:1rem!important}.m-lg-4{margin:1.5rem!important}.m-lg-5{margin:3rem!important}.m-lg-auto{margin:auto!important}.mx-lg-0{margin-right:0!important;margin-left:0!important}.mx-lg-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-lg-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-lg-3{margin-right:1rem!important;margin-left:1rem!important}.mx-lg-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-lg-5{margin-right:3rem!important;margin-left:3rem!important}.mx-lg-auto{margin-right:auto!important;margin-left:auto!important}.my-lg-0{margin-top:0!important;margin-bottom:0!important}.my-lg-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-lg-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-lg-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-lg-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-lg-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-lg-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-lg-0{margin-top:0!important}.mt-lg-1{margin-top:.25rem!important}.mt-lg-2{margin-top:.5rem!important}.mt-lg-3{margin-top:1rem!important}.mt-lg-4{margin-top:1.5rem!important}.mt-lg-5{margin-top:3rem!important}.mt-lg-auto{margin-top:auto!important}.me-lg-0{margin-right:0!important}.me-lg-1{margin-right:.25rem!important}.me-lg-2{margin-right:.5rem!important}.me-lg-3{margin-right:1rem!important}.me-lg-4{margin-right:1.5rem!important}.me-lg-5{margin-right:3rem!important}.me-lg-auto{margin-right:auto!important}.mb-lg-0{margin-bottom:0!important}.mb-lg-1{margin-bottom:.25rem!important}.mb-lg-2{margin-bottom:.5rem!important}.mb-lg-3{margin-bottom:1rem!important}.mb-lg-4{margin-bottom:1.5rem!important}.mb-lg-5{margin-bottom:3rem!important}.mb-lg-auto{margin-bottom:auto!important}.ms-lg-0{margin-left:0!important}.ms-lg-1{margin-left:.25rem!important}.ms-lg-2{margin-left:.5rem!important}.ms-lg-3{margin-left:1rem!important}.ms-lg-4{margin-left:1.5rem!important}.ms-lg-5{margin-left:3rem!important}.ms-lg-auto{margin-left:auto!important}.p-lg-0{padding:0!important}.p-lg-1{padding:.25rem!important}.p-lg-2{padding:.5rem!important}.p-lg-3{padding:1rem!important}.p-lg-4{padding:1.5rem!important}.p-lg-5{padding:3rem!important}.px-lg-0{padding-right:0!important;padding-left:0!important}.px-lg-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-lg-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-lg-3{padding-right:1rem!important;padding-left:1rem!important}.px-lg-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-lg-5{padding-right:3rem!important;padding-left:3rem!important}.py-lg-0{padding-top:0!important;padding-bottom:0!important}.py-lg-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-lg-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-lg-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-lg-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-lg-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-lg-0{padding-top:0!important}.pt-lg-1{padding-top:.25rem!important}.pt-lg-2{padding-top:.5rem!important}.pt-lg-3{padding-top:1rem!important}.pt-lg-4{padding-top:1.5rem!important}.pt-lg-5{padding-top:3rem!important}.pe-lg-0{padding-right:0!important}.pe-lg-1{padding-right:.25rem!important}.pe-lg-2{padding-right:.5rem!important}.pe-lg-3{padding-right:1rem!important}.pe-lg-4{padding-right:1.5rem!important}.pe-lg-5{padding-right:3rem!important}.pb-lg-0{padding-bottom:0!important}.pb-lg-1{padding-bottom:.25rem!important}.pb-lg-2{padding-bottom:.5rem!important}.pb-lg-3{padding-bottom:1rem!important}.pb-lg-4{padding-bottom:1.5rem!important}.pb-lg-5{padding-bottom:3rem!important}.ps-lg-0{padding-left:0!important}.ps-lg-1{padding-left:.25rem!important}.ps-lg-2{padding-left:.5rem!important}.ps-lg-3{padding-left:1rem!important}.ps-lg-4{padding-left:1.5rem!important}.ps-lg-5{padding-left:3rem!important}.text-lg-start{text-align:left!important}.text-lg-end{text-align:right!important}.text-lg-center{text-align:center!important}}@media (min-width:1200px){.float-xl-start{float:left!important}.float-xl-end{float:right!important}.float-xl-none{float:none!important}.d-xl-inline{display:inline!important}.d-xl-inline-block{display:inline-block!important}.d-xl-block{display:block!important}.d-xl-grid{display:grid!important}.d-xl-table{display:table!important}.d-xl-table-row{display:table-row!important}.d-xl-table-cell{display:table-cell!important}.d-xl-flex{display:flex!important}.d-xl-inline-flex{display:inline-flex!important}.d-xl-none{display:none!important}.flex-xl-fill{flex:1 1 auto!important}.flex-xl-row{flex-direction:row!important}.flex-xl-column{flex-direction:column!important}.flex-xl-row-reverse{flex-direction:row-reverse!important}.flex-xl-column-reverse{flex-direction:column-reverse!important}.flex-xl-grow-0{flex-grow:0!important}.flex-xl-grow-1{flex-grow:1!important}.flex-xl-shrink-0{flex-shrink:0!important}.flex-xl-shrink-1{flex-shrink:1!important}.flex-xl-wrap{flex-wrap:wrap!important}.flex-xl-nowrap{flex-wrap:nowrap!important}.flex-xl-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-xl-0{gap:0!important}.gap-xl-1{gap:.25rem!important}.gap-xl-2{gap:.5rem!important}.gap-xl-3{gap:1rem!important}.gap-xl-4{gap:1.5rem!important}.gap-xl-5{gap:3rem!important}.justify-content-xl-start{justify-content:flex-start!important}.justify-content-xl-end{justify-content:flex-end!important}.justify-content-xl-center{justify-content:center!important}.justify-content-xl-between{justify-content:space-between!important}.justify-content-xl-around{justify-content:space-around!important}.justify-content-xl-evenly{justify-content:space-evenly!important}.align-items-xl-start{align-items:flex-start!important}.align-items-xl-end{align-items:flex-end!important}.align-items-xl-center{align-items:center!important}.align-items-xl-baseline{align-items:baseline!important}.align-items-xl-stretch{align-items:stretch!important}.align-content-xl-start{align-content:flex-start!important}.align-content-xl-end{align-content:flex-end!important}.align-content-xl-center{align-content:center!important}.align-content-xl-between{align-content:space-between!important}.align-content-xl-around{align-content:space-around!important}.align-content-xl-stretch{align-content:stretch!important}.align-self-xl-auto{align-self:auto!important}.align-self-xl-start{align-self:flex-start!important}.align-self-xl-end{align-self:flex-end!important}.align-self-xl-center{align-self:center!important}.align-self-xl-baseline{align-self:baseline!important}.align-self-xl-stretch{align-self:stretch!important}.order-xl-first{order:-1!important}.order-xl-0{order:0!important}.order-xl-1{order:1!important}.order-xl-2{order:2!important}.order-xl-3{order:3!important}.order-xl-4{order:4!important}.order-xl-5{order:5!important}.order-xl-last{order:6!important}.m-xl-0{margin:0!important}.m-xl-1{margin:.25rem!important}.m-xl-2{margin:.5rem!important}.m-xl-3{margin:1rem!important}.m-xl-4{margin:1.5rem!important}.m-xl-5{margin:3rem!important}.m-xl-auto{margin:auto!important}.mx-xl-0{margin-right:0!important;margin-left:0!important}.mx-xl-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-xl-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-xl-3{margin-right:1rem!important;margin-left:1rem!important}.mx-xl-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-xl-5{margin-right:3rem!important;margin-left:3rem!important}.mx-xl-auto{margin-right:auto!important;margin-left:auto!important}.my-xl-0{margin-top:0!important;margin-bottom:0!important}.my-xl-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-xl-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-xl-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-xl-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-xl-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-xl-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-xl-0{margin-top:0!important}.mt-xl-1{margin-top:.25rem!important}.mt-xl-2{margin-top:.5rem!important}.mt-xl-3{margin-top:1rem!important}.mt-xl-4{margin-top:1.5rem!important}.mt-xl-5{margin-top:3rem!important}.mt-xl-auto{margin-top:auto!important}.me-xl-0{margin-right:0!important}.me-xl-1{margin-right:.25rem!important}.me-xl-2{margin-right:.5rem!important}.me-xl-3{margin-right:1rem!important}.me-xl-4{margin-right:1.5rem!important}.me-xl-5{margin-right:3rem!important}.me-xl-auto{margin-right:auto!important}.mb-xl-0{margin-bottom:0!important}.mb-xl-1{margin-bottom:.25rem!important}.mb-xl-2{margin-bottom:.5rem!important}.mb-xl-3{margin-bottom:1rem!important}.mb-xl-4{margin-bottom:1.5rem!important}.mb-xl-5{margin-bottom:3rem!important}.mb-xl-auto{margin-bottom:auto!important}.ms-xl-0{margin-left:0!important}.ms-xl-1{margin-left:.25rem!important}.ms-xl-2{margin-left:.5rem!important}.ms-xl-3{margin-left:1rem!important}.ms-xl-4{margin-left:1.5rem!important}.ms-xl-5{margin-left:3rem!important}.ms-xl-auto{margin-left:auto!important}.p-xl-0{padding:0!important}.p-xl-1{padding:.25rem!important}.p-xl-2{padding:.5rem!important}.p-xl-3{padding:1rem!important}.p-xl-4{padding:1.5rem!important}.p-xl-5{padding:3rem!important}.px-xl-0{padding-right:0!important;padding-left:0!important}.px-xl-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-xl-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-xl-3{padding-right:1rem!important;padding-left:1rem!important}.px-xl-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-xl-5{padding-right:3rem!important;padding-left:3rem!important}.py-xl-0{padding-top:0!important;padding-bottom:0!important}.py-xl-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-xl-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-xl-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-xl-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-xl-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-xl-0{padding-top:0!important}.pt-xl-1{padding-top:.25rem!important}.pt-xl-2{padding-top:.5rem!important}.pt-xl-3{padding-top:1rem!important}.pt-xl-4{padding-top:1.5rem!important}.pt-xl-5{padding-top:3rem!important}.pe-xl-0{padding-right:0!important}.pe-xl-1{padding-right:.25rem!important}.pe-xl-2{padding-right:.5rem!important}.pe-xl-3{padding-right:1rem!important}.pe-xl-4{padding-right:1.5rem!important}.pe-xl-5{padding-right:3rem!important}.pb-xl-0{padding-bottom:0!important}.pb-xl-1{padding-bottom:.25rem!important}.pb-xl-2{padding-bottom:.5rem!important}.pb-xl-3{padding-bottom:1rem!important}.pb-xl-4{padding-bottom:1.5rem!important}.pb-xl-5{padding-bottom:3rem!important}.ps-xl-0{padding-left:0!important}.ps-xl-1{padding-left:.25rem!important}.ps-xl-2{padding-left:.5rem!important}.ps-xl-3{padding-left:1rem!important}.ps-xl-4{padding-left:1.5rem!important}.ps-xl-5{padding-left:3rem!important}.text-xl-start{text-align:left!important}.text-xl-end{text-align:right!important}.text-xl-center{text-align:center!important}}@media (min-width:1400px){.float-xxl-start{float:left!important}.float-xxl-end{float:right!important}.float-xxl-none{float:none!important}.d-xxl-inline{display:inline!important}.d-xxl-inline-block{display:inline-block!important}.d-xxl-block{display:block!important}.d-xxl-grid{display:grid!important}.d-xxl-table{display:table!important}.d-xxl-table-row{display:table-row!important}.d-xxl-table-cell{display:table-cell!important}.d-xxl-flex{display:flex!important}.d-xxl-inline-flex{display:inline-flex!important}.d-xxl-none{display:none!important}.flex-xxl-fill{flex:1 1 auto!important}.flex-xxl-row{flex-direction:row!important}.flex-xxl-column{flex-direction:column!important}.flex-xxl-row-reverse{flex-direction:row-reverse!important}.flex-xxl-column-reverse{flex-direction:column-reverse!important}.flex-xxl-grow-0{flex-grow:0!important}.flex-xxl-grow-1{flex-grow:1!important}.flex-xxl-shrink-0{flex-shrink:0!important}.flex-xxl-shrink-1{flex-shrink:1!important}.flex-xxl-wrap{flex-wrap:wrap!important}.flex-xxl-nowrap{flex-wrap:nowrap!important}.flex-xxl-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-xxl-0{gap:0!important}.gap-xxl-1{gap:.25rem!important}.gap-xxl-2{gap:.5rem!important}.gap-xxl-3{gap:1rem!important}.gap-xxl-4{gap:1.5rem!important}.gap-xxl-5{gap:3rem!important}.justify-content-xxl-start{justify-content:flex-start!important}.justify-content-xxl-end{justify-content:flex-end!important}.justify-content-xxl-center{justify-content:center!important}.justify-content-xxl-between{justify-content:space-between!important}.justify-content-xxl-around{justify-content:space-around!important}.justify-content-xxl-evenly{justify-content:space-evenly!important}.align-items-xxl-start{align-items:flex-start!important}.align-items-xxl-end{align-items:flex-end!important}.align-items-xxl-center{align-items:center!important}.align-items-xxl-baseline{align-items:baseline!important}.align-items-xxl-stretch{align-items:stretch!important}.align-content-xxl-start{align-content:flex-start!important}.align-content-xxl-end{align-content:flex-end!important}.align-content-xxl-center{align-content:center!important}.align-content-xxl-between{align-content:space-between!important}.align-content-xxl-around{align-content:space-around!important}.align-content-xxl-stretch{align-content:stretch!important}.align-self-xxl-auto{align-self:auto!important}.align-self-xxl-start{align-self:flex-start!important}.align-self-xxl-end{align-self:flex-end!important}.align-self-xxl-center{align-self:center!important}.align-self-xxl-baseline{align-self:baseline!important}.align-self-xxl-stretch{align-self:stretch!important}.order-xxl-first{order:-1!important}.order-xxl-0{order:0!important}.order-xxl-1{order:1!important}.order-xxl-2{order:2!important}.order-xxl-3{order:3!important}.order-xxl-4{order:4!important}.order-xxl-5{order:5!important}.order-xxl-last{order:6!important}.m-xxl-0{margin:0!important}.m-xxl-1{margin:.25rem!important}.m-xxl-2{margin:.5rem!important}.m-xxl-3{margin:1rem!important}.m-xxl-4{margin:1.5rem!important}.m-xxl-5{margin:3rem!important}.m-xxl-auto{margin:auto!important}.mx-xxl-0{margin-right:0!important;margin-left:0!important}.mx-xxl-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-xxl-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-xxl-3{margin-right:1rem!important;margin-left:1rem!important}.mx-xxl-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-xxl-5{margin-right:3rem!important;margin-left:3rem!important}.mx-xxl-auto{margin-right:auto!important;margin-left:auto!important}.my-xxl-0{margin-top:0!important;margin-bottom:0!important}.my-xxl-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-xxl-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-xxl-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-xxl-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-xxl-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-xxl-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-xxl-0{margin-top:0!important}.mt-xxl-1{margin-top:.25rem!important}.mt-xxl-2{margin-top:.5rem!important}.mt-xxl-3{margin-top:1rem!important}.mt-xxl-4{margin-top:1.5rem!important}.mt-xxl-5{margin-top:3rem!important}.mt-xxl-auto{margin-top:auto!important}.me-xxl-0{margin-right:0!important}.me-xxl-1{margin-right:.25rem!important}.me-xxl-2{margin-right:.5rem!important}.me-xxl-3{margin-right:1rem!important}.me-xxl-4{margin-right:1.5rem!important}.me-xxl-5{margin-right:3rem!important}.me-xxl-auto{margin-right:auto!important}.mb-xxl-0{margin-bottom:0!important}.mb-xxl-1{margin-bottom:.25rem!important}.mb-xxl-2{margin-bottom:.5rem!important}.mb-xxl-3{margin-bottom:1rem!important}.mb-xxl-4{margin-bottom:1.5rem!important}.mb-xxl-5{margin-bottom:3rem!important}.mb-xxl-auto{margin-bottom:auto!important}.ms-xxl-0{margin-left:0!important}.ms-xxl-1{margin-left:.25rem!important}.ms-xxl-2{margin-left:.5rem!important}.ms-xxl-3{margin-left:1rem!important}.ms-xxl-4{margin-left:1.5rem!important}.ms-xxl-5{margin-left:3rem!important}.ms-xxl-auto{margin-left:auto!important}.p-xxl-0{padding:0!important}.p-xxl-1{padding:.25rem!important}.p-xxl-2{padding:.5rem!important}.p-xxl-3{padding:1rem!important}.p-xxl-4{padding:1.5rem!important}.p-xxl-5{padding:3rem!important}.px-xxl-0{padding-right:0!important;padding-left:0!important}.px-xxl-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-xxl-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-xxl-3{padding-right:1rem!important;padding-left:1rem!important}.px-xxl-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-xxl-5{padding-right:3rem!important;padding-left:3rem!important}.py-xxl-0{padding-top:0!important;padding-bottom:0!important}.py-xxl-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-xxl-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-xxl-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-xxl-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-xxl-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-xxl-0{padding-top:0!important}.pt-xxl-1{padding-top:.25rem!important}.pt-xxl-2{padding-top:.5rem!important}.pt-xxl-3{padding-top:1rem!important}.pt-xxl-4{padding-top:1.5rem!important}.pt-xxl-5{padding-top:3rem!important}.pe-xxl-0{padding-right:0!important}.pe-xxl-1{padding-right:.25rem!important}.pe-xxl-2{padding-right:.5rem!important}.pe-xxl-3{padding-right:1rem!important}.pe-xxl-4{padding-right:1.5rem!important}.pe-xxl-5{padding-right:3rem!important}.pb-xxl-0{padding-bottom:0!important}.pb-xxl-1{padding-bottom:.25rem!important}.pb-xxl-2{padding-bottom:.5rem!important}.pb-xxl-3{padding-bottom:1rem!important}.pb-xxl-4{padding-bottom:1.5rem!important}.pb-xxl-5{padding-bottom:3rem!important}.ps-xxl-0{padding-left:0!important}.ps-xxl-1{padding-left:.25rem!important}.ps-xxl-2{padding-left:.5rem!important}.ps-xxl-3{padding-left:1rem!important}.ps-xxl-4{padding-left:1.5rem!important}.ps-xxl-5{padding-left:3rem!important}.text-xxl-start{text-align:left!important}.text-xxl-end{text-align:right!important}.text-xxl-center{text-align:center!important}}@media (min-width:1200px){.fs-1{font-size:2.5rem!important}.fs-2{font-size:2rem!important}.fs-3{font-size:1.75rem!important}.fs-4{font-size:1.5rem!important}}@media print{.d-print-inline{display:inline!important}.d-print-inline-block{display:inline-block!important}.d-print-block{display:block!important}.d-print-grid{display:grid!important}.d-print-table{display:table!important}.d-print-table-row{display:table-row!important}.d-print-table-cell{display:table-cell!important}.d-print-flex{display:flex!important}.d-print-inline-flex{display:inline-flex!important}.d-print-none{display:none!important}}

 /*!
 * Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 */
.fa,.fab,.fad,.fal,.far,.fas{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1}.fa-lg{font-size:1.33333em;line-height:.75em;vertical-align:-.0667em}.fa-xs{font-size:.75em}.fa-sm{font-size:.875em}.fa-1x{font-size:1em}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-6x{font-size:6em}.fa-7x{font-size:7em}.fa-8x{font-size:8em}.fa-9x{font-size:9em}.fa-10x{font-size:10em}.fa-fw{text-align:center;width:1.25em}.fa-ul{list-style-type:none;margin-left:2.5em;padding-left:0}.fa-ul>li{position:relative}.fa-li{left:-2em;position:absolute;text-align:center;width:2em;line-height:inherit}.fa-border{border:.08em solid #eee;border-radius:.1em;padding:.2em .25em .15em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left,.fab.fa-pull-left,.fal.fa-pull-left,.far.fa-pull-left,.fas.fa-pull-left{margin-right:.3em}.fa.fa-pull-right,.fab.fa-pull-right,.fal.fa-pull-right,.far.fa-pull-right,.fas.fa-pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s linear infinite;animation:fa-spin 2s linear infinite}.fa-pulse{-webkit-animation:fa-spin 1s steps(8) infinite;animation:fa-spin 1s steps(8) infinite}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}.fa-rotate-90{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";-webkit-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";-webkit-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";-webkit-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";-webkit-transform:scaleX(-1);transform:scaleX(-1)}.fa-flip-vertical{-webkit-transform:scaleY(-1);transform:scaleY(-1)}.fa-flip-both,.fa-flip-horizontal.fa-flip-vertical,.fa-flip-vertical{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)"}.fa-flip-both,.fa-flip-horizontal.fa-flip-vertical{-webkit-transform:scale(-1);transform:scale(-1)}:root .fa-flip-both,:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-90,:root .fa-rotate-180,:root .fa-rotate-270{-webkit-filter:none;filter:none}.fa-stack{display:inline-block;height:2em;line-height:2em;position:relative;vertical-align:middle;width:2.5em}.fa-stack-1x,.fa-stack-2x{left:0;position:absolute;text-align:center;width:100%}.fa-stack-1x{line-height:inherit}.fa-stack-2x{font-size:2em}.fa-inverse{color:#fff}.fa-500px:before{content:"\f26e"}.fa-accessible-icon:before{content:"\f368"}.fa-accusoft:before{content:"\f369"}.fa-acquisitions-incorporated:before{content:"\f6af"}.fa-ad:before{content:"\f641"}.fa-address-book:before{content:"\f2b9"}.fa-address-card:before{content:"\f2bb"}.fa-adjust:before{content:"\f042"}.fa-adn:before{content:"\f170"}.fa-adversal:before{content:"\f36a"}.fa-affiliatetheme:before{content:"\f36b"}.fa-air-freshener:before{content:"\f5d0"}.fa-airbnb:before{content:"\f834"}.fa-algolia:before{content:"\f36c"}.fa-align-center:before{content:"\f037"}.fa-align-justify:before{content:"\f039"}.fa-align-left:before{content:"\f036"}.fa-align-right:before{content:"\f038"}.fa-alipay:before{content:"\f642"}.fa-allergies:before{content:"\f461"}.fa-amazon:before{content:"\f270"}.fa-amazon-pay:before{content:"\f42c"}.fa-ambulance:before{content:"\f0f9"}.fa-american-sign-language-interpreting:before{content:"\f2a3"}.fa-amilia:before{content:"\f36d"}.fa-anchor:before{content:"\f13d"}.fa-android:before{content:"\f17b"}.fa-angellist:before{content:"\f209"}.fa-angle-double-down:before{content:"\f103"}.fa-angle-double-left:before{content:"\f100"}.fa-angle-double-right:before{content:"\f101"}.fa-angle-double-up:before{content:"\f102"}.fa-angle-down:before{content:"\f107"}.fa-angle-left:before{content:"\f104"}.fa-angle-right:before{content:"\f105"}.fa-angle-up:before{content:"\f106"}.fa-angry:before{content:"\f556"}.fa-angrycreative:before{content:"\f36e"}.fa-angular:before{content:"\f420"}.fa-ankh:before{content:"\f644"}.fa-app-store:before{content:"\f36f"}.fa-app-store-ios:before{content:"\f370"}.fa-apper:before{content:"\f371"}.fa-apple:before{content:"\f179"}.fa-apple-alt:before{content:"\f5d1"}.fa-apple-pay:before{content:"\f415"}.fa-archive:before{content:"\f187"}.fa-archway:before{content:"\f557"}.fa-arrow-alt-circle-down:before{content:"\f358"}.fa-arrow-alt-circle-left:before{content:"\f359"}.fa-arrow-alt-circle-right:before{content:"\f35a"}.fa-arrow-alt-circle-up:before{content:"\f35b"}.fa-arrow-circle-down:before{content:"\f0ab"}.fa-arrow-circle-left:before{content:"\f0a8"}.fa-arrow-circle-right:before{content:"\f0a9"}.fa-arrow-circle-up:before{content:"\f0aa"}.fa-arrow-down:before{content:"\f063"}.fa-arrow-left:before{content:"\f060"}.fa-arrow-right:before{content:"\f061"}.fa-arrow-up:before{content:"\f062"}.fa-arrows-alt:before{content:"\f0b2"}.fa-arrows-alt-h:before{content:"\f337"}.fa-arrows-alt-v:before{content:"\f338"}.fa-artstation:before{content:"\f77a"}.fa-assistive-listening-systems:before{content:"\f2a2"}.fa-asterisk:before{content:"\f069"}.fa-asymmetrik:before{content:"\f372"}.fa-at:before{content:"\f1fa"}.fa-atlas:before{content:"\f558"}.fa-atlassian:before{content:"\f77b"}.fa-atom:before{content:"\f5d2"}.fa-audible:before{content:"\f373"}.fa-audio-description:before{content:"\f29e"}.fa-autoprefixer:before{content:"\f41c"}.fa-avianex:before{content:"\f374"}.fa-aviato:before{content:"\f421"}.fa-award:before{content:"\f559"}.fa-aws:before{content:"\f375"}.fa-baby:before{content:"\f77c"}.fa-baby-carriage:before{content:"\f77d"}.fa-backspace:before{content:"\f55a"}.fa-backward:before{content:"\f04a"}.fa-bacon:before{content:"\f7e5"}.fa-bacteria:before{content:"\e059"}.fa-bacterium:before{content:"\e05a"}.fa-bahai:before{content:"\f666"}.fa-balance-scale:before{content:"\f24e"}.fa-balance-scale-left:before{content:"\f515"}.fa-balance-scale-right:before{content:"\f516"}.fa-ban:before{content:"\f05e"}.fa-band-aid:before{content:"\f462"}.fa-bandcamp:before{content:"\f2d5"}.fa-barcode:before{content:"\f02a"}.fa-bars:before{content:"\f0c9"}.fa-baseball-ball:before{content:"\f433"}.fa-basketball-ball:before{content:"\f434"}.fa-bath:before{content:"\f2cd"}.fa-battery-empty:before{content:"\f244"}.fa-battery-full:before{content:"\f240"}.fa-battery-half:before{content:"\f242"}.fa-battery-quarter:before{content:"\f243"}.fa-battery-three-quarters:before{content:"\f241"}.fa-battle-net:before{content:"\f835"}.fa-bed:before{content:"\f236"}.fa-beer:before{content:"\f0fc"}.fa-behance:before{content:"\f1b4"}.fa-behance-square:before{content:"\f1b5"}.fa-bell:before{content:"\f0f3"}.fa-bell-slash:before{content:"\f1f6"}.fa-bezier-curve:before{content:"\f55b"}.fa-bible:before{content:"\f647"}.fa-bicycle:before{content:"\f206"}.fa-biking:before{content:"\f84a"}.fa-bimobject:before{content:"\f378"}.fa-binoculars:before{content:"\f1e5"}.fa-biohazard:before{content:"\f780"}.fa-birthday-cake:before{content:"\f1fd"}.fa-bitbucket:before{content:"\f171"}.fa-bitcoin:before{content:"\f379"}.fa-bity:before{content:"\f37a"}.fa-black-tie:before{content:"\f27e"}.fa-blackberry:before{content:"\f37b"}.fa-blender:before{content:"\f517"}.fa-blender-phone:before{content:"\f6b6"}.fa-blind:before{content:"\f29d"}.fa-blog:before{content:"\f781"}.fa-blogger:before{content:"\f37c"}.fa-blogger-b:before{content:"\f37d"}.fa-bluetooth:before{content:"\f293"}.fa-bluetooth-b:before{content:"\f294"}.fa-bold:before{content:"\f032"}.fa-bolt:before{content:"\f0e7"}.fa-bomb:before{content:"\f1e2"}.fa-bone:before{content:"\f5d7"}.fa-bong:before{content:"\f55c"}.fa-book:before{content:"\f02d"}.fa-book-dead:before{content:"\f6b7"}.fa-book-medical:before{content:"\f7e6"}.fa-book-open:before{content:"\f518"}.fa-book-reader:before{content:"\f5da"}.fa-bookmark:before{content:"\f02e"}.fa-bootstrap:before{content:"\f836"}.fa-border-all:before{content:"\f84c"}.fa-border-none:before{content:"\f850"}.fa-border-style:before{content:"\f853"}.fa-bowling-ball:before{content:"\f436"}.fa-box:before{content:"\f466"}.fa-box-open:before{content:"\f49e"}.fa-box-tissue:before{content:"\e05b"}.fa-boxes:before{content:"\f468"}.fa-braille:before{content:"\f2a1"}.fa-brain:before{content:"\f5dc"}.fa-bread-slice:before{content:"\f7ec"}.fa-briefcase:before{content:"\f0b1"}.fa-briefcase-medical:before{content:"\f469"}.fa-broadcast-tower:before{content:"\f519"}.fa-broom:before{content:"\f51a"}.fa-brush:before{content:"\f55d"}.fa-btc:before{content:"\f15a"}.fa-buffer:before{content:"\f837"}.fa-bug:before{content:"\f188"}.fa-building:before{content:"\f1ad"}.fa-bullhorn:before{content:"\f0a1"}.fa-bullseye:before{content:"\f140"}.fa-burn:before{content:"\f46a"}.fa-buromobelexperte:before{content:"\f37f"}.fa-bus:before{content:"\f207"}.fa-bus-alt:before{content:"\f55e"}.fa-business-time:before{content:"\f64a"}.fa-buy-n-large:before{content:"\f8a6"}.fa-buysellads:before{content:"\f20d"}.fa-calculator:before{content:"\f1ec"}.fa-calendar:before{content:"\f133"}.fa-calendar-alt:before{content:"\f073"}.fa-calendar-check:before{content:"\f274"}.fa-calendar-day:before{content:"\f783"}.fa-calendar-minus:before{content:"\f272"}.fa-calendar-plus:before{content:"\f271"}.fa-calendar-times:before{content:"\f273"}.fa-calendar-week:before{content:"\f784"}.fa-camera:before{content:"\f030"}.fa-camera-retro:before{content:"\f083"}.fa-campground:before{content:"\f6bb"}.fa-canadian-maple-leaf:before{content:"\f785"}.fa-candy-cane:before{content:"\f786"}.fa-cannabis:before{content:"\f55f"}.fa-capsules:before{content:"\f46b"}.fa-car:before{content:"\f1b9"}.fa-car-alt:before{content:"\f5de"}.fa-car-battery:before{content:"\f5df"}.fa-car-crash:before{content:"\f5e1"}.fa-car-side:before{content:"\f5e4"}.fa-caravan:before{content:"\f8ff"}.fa-caret-down:before{content:"\f0d7"}.fa-caret-left:before{content:"\f0d9"}.fa-caret-right:before{content:"\f0da"}.fa-caret-square-down:before{content:"\f150"}.fa-caret-square-left:before{content:"\f191"}.fa-caret-square-right:before{content:"\f152"}.fa-caret-square-up:before{content:"\f151"}.fa-caret-up:before{content:"\f0d8"}.fa-carrot:before{content:"\f787"}.fa-cart-arrow-down:before{content:"\f218"}.fa-cart-plus:before{content:"\f217"}.fa-cash-register:before{content:"\f788"}.fa-cat:before{content:"\f6be"}.fa-cc-amazon-pay:before{content:"\f42d"}.fa-cc-amex:before{content:"\f1f3"}.fa-cc-apple-pay:before{content:"\f416"}.fa-cc-diners-club:before{content:"\f24c"}.fa-cc-discover:before{content:"\f1f2"}.fa-cc-jcb:before{content:"\f24b"}.fa-cc-mastercard:before{content:"\f1f1"}.fa-cc-paypal:before{content:"\f1f4"}.fa-cc-stripe:before{content:"\f1f5"}.fa-cc-visa:before{content:"\f1f0"}.fa-centercode:before{content:"\f380"}.fa-centos:before{content:"\f789"}.fa-certificate:before{content:"\f0a3"}.fa-chair:before{content:"\f6c0"}.fa-chalkboard:before{content:"\f51b"}.fa-chalkboard-teacher:before{content:"\f51c"}.fa-charging-station:before{content:"\f5e7"}.fa-chart-area:before{content:"\f1fe"}.fa-chart-bar:before{content:"\f080"}.fa-chart-line:before{content:"\f201"}.fa-chart-pie:before{content:"\f200"}.fa-check:before{content:"\f00c"}.fa-check-circle:before{content:"\f058"}.fa-check-double:before{content:"\f560"}.fa-check-square:before{content:"\f14a"}.fa-cheese:before{content:"\f7ef"}.fa-chess:before{content:"\f439"}.fa-chess-bishop:before{content:"\f43a"}.fa-chess-board:before{content:"\f43c"}.fa-chess-king:before{content:"\f43f"}.fa-chess-knight:before{content:"\f441"}.fa-chess-pawn:before{content:"\f443"}.fa-chess-queen:before{content:"\f445"}.fa-chess-rook:before{content:"\f447"}.fa-chevron-circle-down:before{content:"\f13a"}.fa-chevron-circle-left:before{content:"\f137"}.fa-chevron-circle-right:before{content:"\f138"}.fa-chevron-circle-up:before{content:"\f139"}.fa-chevron-down:before{content:"\f078"}.fa-chevron-left:before{content:"\f053"}.fa-chevron-right:before{content:"\f054"}.fa-chevron-up:before{content:"\f077"}.fa-child:before{content:"\f1ae"}.fa-chrome:before{content:"\f268"}.fa-chromecast:before{content:"\f838"}.fa-church:before{content:"\f51d"}.fa-circle:before{content:"\f111"}.fa-circle-notch:before{content:"\f1ce"}.fa-city:before{content:"\f64f"}.fa-clinic-medical:before{content:"\f7f2"}.fa-clipboard:before{content:"\f328"}.fa-clipboard-check:before{content:"\f46c"}.fa-clipboard-list:before{content:"\f46d"}.fa-clock:before{content:"\f017"}.fa-clone:before{content:"\f24d"}.fa-closed-captioning:before{content:"\f20a"}.fa-cloud:before{content:"\f0c2"}.fa-cloud-download-alt:before{content:"\f381"}.fa-cloud-meatball:before{content:"\f73b"}.fa-cloud-moon:before{content:"\f6c3"}.fa-cloud-moon-rain:before{content:"\f73c"}.fa-cloud-rain:before{content:"\f73d"}.fa-cloud-showers-heavy:before{content:"\f740"}.fa-cloud-sun:before{content:"\f6c4"}.fa-cloud-sun-rain:before{content:"\f743"}.fa-cloud-upload-alt:before{content:"\f382"}.fa-cloudflare:before{content:"\e07d"}.fa-cloudscale:before{content:"\f383"}.fa-cloudsmith:before{content:"\f384"}.fa-cloudversify:before{content:"\f385"}.fa-cocktail:before{content:"\f561"}.fa-code:before{content:"\f121"}.fa-code-branch:before{content:"\f126"}.fa-codepen:before{content:"\f1cb"}.fa-codiepie:before{content:"\f284"}.fa-coffee:before{content:"\f0f4"}.fa-cog:before{content:"\f013"}.fa-cogs:before{content:"\f085"}.fa-coins:before{content:"\f51e"}.fa-columns:before{content:"\f0db"}.fa-comment:before{content:"\f075"}.fa-comment-alt:before{content:"\f27a"}.fa-comment-dollar:before{content:"\f651"}.fa-comment-dots:before{content:"\f4ad"}.fa-comment-medical:before{content:"\f7f5"}.fa-comment-slash:before{content:"\f4b3"}.fa-comments:before{content:"\f086"}.fa-comments-dollar:before{content:"\f653"}.fa-compact-disc:before{content:"\f51f"}.fa-compass:before{content:"\f14e"}.fa-compress:before{content:"\f066"}.fa-compress-alt:before{content:"\f422"}.fa-compress-arrows-alt:before{content:"\f78c"}.fa-concierge-bell:before{content:"\f562"}.fa-confluence:before{content:"\f78d"}.fa-connectdevelop:before{content:"\f20e"}.fa-contao:before{content:"\f26d"}.fa-cookie:before{content:"\f563"}.fa-cookie-bite:before{content:"\f564"}.fa-copy:before{content:"\f0c5"}.fa-copyright:before{content:"\f1f9"}.fa-cotton-bureau:before{content:"\f89e"}.fa-couch:before{content:"\f4b8"}.fa-cpanel:before{content:"\f388"}.fa-creative-commons:before{content:"\f25e"}.fa-creative-commons-by:before{content:"\f4e7"}.fa-creative-commons-nc:before{content:"\f4e8"}.fa-creative-commons-nc-eu:before{content:"\f4e9"}.fa-creative-commons-nc-jp:before{content:"\f4ea"}.fa-creative-commons-nd:before{content:"\f4eb"}.fa-creative-commons-pd:before{content:"\f4ec"}.fa-creative-commons-pd-alt:before{content:"\f4ed"}.fa-creative-commons-remix:before{content:"\f4ee"}.fa-creative-commons-sa:before{content:"\f4ef"}.fa-creative-commons-sampling:before{content:"\f4f0"}.fa-creative-commons-sampling-plus:before{content:"\f4f1"}.fa-creative-commons-share:before{content:"\f4f2"}.fa-creative-commons-zero:before{content:"\f4f3"}.fa-credit-card:before{content:"\f09d"}.fa-critical-role:before{content:"\f6c9"}.fa-crop:before{content:"\f125"}.fa-crop-alt:before{content:"\f565"}.fa-cross:before{content:"\f654"}.fa-crosshairs:before{content:"\f05b"}.fa-crow:before{content:"\f520"}.fa-crown:before{content:"\f521"}.fa-crutch:before{content:"\f7f7"}.fa-css3:before{content:"\f13c"}.fa-css3-alt:before{content:"\f38b"}.fa-cube:before{content:"\f1b2"}.fa-cubes:before{content:"\f1b3"}.fa-cut:before{content:"\f0c4"}.fa-cuttlefish:before{content:"\f38c"}.fa-d-and-d:before{content:"\f38d"}.fa-d-and-d-beyond:before{content:"\f6ca"}.fa-dailymotion:before{content:"\e052"}.fa-dashcube:before{content:"\f210"}.fa-database:before{content:"\f1c0"}.fa-deaf:before{content:"\f2a4"}.fa-deezer:before{content:"\e077"}.fa-delicious:before{content:"\f1a5"}.fa-democrat:before{content:"\f747"}.fa-deploydog:before{content:"\f38e"}.fa-deskpro:before{content:"\f38f"}.fa-desktop:before{content:"\f108"}.fa-dev:before{content:"\f6cc"}.fa-deviantart:before{content:"\f1bd"}.fa-dharmachakra:before{content:"\f655"}.fa-dhl:before{content:"\f790"}.fa-diagnoses:before{content:"\f470"}.fa-diaspora:before{content:"\f791"}.fa-dice:before{content:"\f522"}.fa-dice-d20:before{content:"\f6cf"}.fa-dice-d6:before{content:"\f6d1"}.fa-dice-five:before{content:"\f523"}.fa-dice-four:before{content:"\f524"}.fa-dice-one:before{content:"\f525"}.fa-dice-six:before{content:"\f526"}.fa-dice-three:before{content:"\f527"}.fa-dice-two:before{content:"\f528"}.fa-digg:before{content:"\f1a6"}.fa-digital-ocean:before{content:"\f391"}.fa-digital-tachograph:before{content:"\f566"}.fa-directions:before{content:"\f5eb"}.fa-discord:before{content:"\f392"}.fa-discourse:before{content:"\f393"}.fa-disease:before{content:"\f7fa"}.fa-divide:before{content:"\f529"}.fa-dizzy:before{content:"\f567"}.fa-dna:before{content:"\f471"}.fa-dochub:before{content:"\f394"}.fa-docker:before{content:"\f395"}.fa-dog:before{content:"\f6d3"}.fa-dollar-sign:before{content:"\f155"}.fa-dolly:before{content:"\f472"}.fa-dolly-flatbed:before{content:"\f474"}.fa-donate:before{content:"\f4b9"}.fa-door-closed:before{content:"\f52a"}.fa-door-open:before{content:"\f52b"}.fa-dot-circle:before{content:"\f192"}.fa-dove:before{content:"\f4ba"}.fa-download:before{content:"\f019"}.fa-draft2digital:before{content:"\f396"}.fa-drafting-compass:before{content:"\f568"}.fa-dragon:before{content:"\f6d5"}.fa-draw-polygon:before{content:"\f5ee"}.fa-dribbble:before{content:"\f17d"}.fa-dribbble-square:before{content:"\f397"}.fa-dropbox:before{content:"\f16b"}.fa-drum:before{content:"\f569"}.fa-drum-steelpan:before{content:"\f56a"}.fa-drumstick-bite:before{content:"\f6d7"}.fa-drupal:before{content:"\f1a9"}.fa-dumbbell:before{content:"\f44b"}.fa-dumpster:before{content:"\f793"}.fa-dumpster-fire:before{content:"\f794"}.fa-dungeon:before{content:"\f6d9"}.fa-dyalog:before{content:"\f399"}.fa-earlybirds:before{content:"\f39a"}.fa-ebay:before{content:"\f4f4"}.fa-edge:before{content:"\f282"}.fa-edge-legacy:before{content:"\e078"}.fa-edit:before{content:"\f044"}.fa-egg:before{content:"\f7fb"}.fa-eject:before{content:"\f052"}.fa-elementor:before{content:"\f430"}.fa-ellipsis-h:before{content:"\f141"}.fa-ellipsis-v:before{content:"\f142"}.fa-ello:before{content:"\f5f1"}.fa-ember:before{content:"\f423"}.fa-empire:before{content:"\f1d1"}.fa-envelope:before{content:"\f0e0"}.fa-envelope-open:before{content:"\f2b6"}.fa-envelope-open-text:before{content:"\f658"}.fa-envelope-square:before{content:"\f199"}.fa-envira:before{content:"\f299"}.fa-equals:before{content:"\f52c"}.fa-eraser:before{content:"\f12d"}.fa-erlang:before{content:"\f39d"}.fa-ethereum:before{content:"\f42e"}.fa-ethernet:before{content:"\f796"}.fa-etsy:before{content:"\f2d7"}.fa-euro-sign:before{content:"\f153"}.fa-evernote:before{content:"\f839"}.fa-exchange-alt:before{content:"\f362"}.fa-exclamation:before{content:"\f12a"}.fa-exclamation-circle:before{content:"\f06a"}.fa-exclamation-triangle:before{content:"\f071"}.fa-expand:before{content:"\f065"}.fa-expand-alt:before{content:"\f424"}.fa-expand-arrows-alt:before{content:"\f31e"}.fa-expeditedssl:before{content:"\f23e"}.fa-external-link-alt:before{content:"\f35d"}.fa-external-link-square-alt:before{content:"\f360"}.fa-eye:before{content:"\f06e"}.fa-eye-dropper:before{content:"\f1fb"}.fa-eye-slash:before{content:"\f070"}.fa-facebook:before{content:"\f09a"}.fa-facebook-f:before{content:"\f39e"}.fa-facebook-messenger:before{content:"\f39f"}.fa-facebook-square:before{content:"\f082"}.fa-fan:before{content:"\f863"}.fa-fantasy-flight-games:before{content:"\f6dc"}.fa-fast-backward:before{content:"\f049"}.fa-fast-forward:before{content:"\f050"}.fa-faucet:before{content:"\e005"}.fa-fax:before{content:"\f1ac"}.fa-feather:before{content:"\f52d"}.fa-feather-alt:before{content:"\f56b"}.fa-fedex:before{content:"\f797"}.fa-fedora:before{content:"\f798"}.fa-female:before{content:"\f182"}.fa-fighter-jet:before{content:"\f0fb"}.fa-figma:before{content:"\f799"}.fa-file:before{content:"\f15b"}.fa-file-alt:before{content:"\f15c"}.fa-file-archive:before{content:"\f1c6"}.fa-file-audio:before{content:"\f1c7"}.fa-file-code:before{content:"\f1c9"}.fa-file-contract:before{content:"\f56c"}.fa-file-csv:before{content:"\f6dd"}.fa-file-download:before{content:"\f56d"}.fa-file-excel:before{content:"\f1c3"}.fa-file-export:before{content:"\f56e"}.fa-file-image:before{content:"\f1c5"}.fa-file-import:before{content:"\f56f"}.fa-file-invoice:before{content:"\f570"}.fa-file-invoice-dollar:before{content:"\f571"}.fa-file-medical:before{content:"\f477"}.fa-file-medical-alt:before{content:"\f478"}.fa-file-pdf:before{content:"\f1c1"}.fa-file-powerpoint:before{content:"\f1c4"}.fa-file-prescription:before{content:"\f572"}.fa-file-signature:before{content:"\f573"}.fa-file-upload:before{content:"\f574"}.fa-file-video:before{content:"\f1c8"}.fa-file-word:before{content:"\f1c2"}.fa-fill:before{content:"\f575"}.fa-fill-drip:before{content:"\f576"}.fa-film:before{content:"\f008"}.fa-filter:before{content:"\f0b0"}.fa-fingerprint:before{content:"\f577"}.fa-fire:before{content:"\f06d"}.fa-fire-alt:before{content:"\f7e4"}.fa-fire-extinguisher:before{content:"\f134"}.fa-firefox:before{content:"\f269"}.fa-firefox-browser:before{content:"\e007"}.fa-first-aid:before{content:"\f479"}.fa-first-order:before{content:"\f2b0"}.fa-first-order-alt:before{content:"\f50a"}.fa-firstdraft:before{content:"\f3a1"}.fa-fish:before{content:"\f578"}.fa-fist-raised:before{content:"\f6de"}.fa-flag:before{content:"\f024"}.fa-flag-checkered:before{content:"\f11e"}.fa-flag-usa:before{content:"\f74d"}.fa-flask:before{content:"\f0c3"}.fa-flickr:before{content:"\f16e"}.fa-flipboard:before{content:"\f44d"}.fa-flushed:before{content:"\f579"}.fa-fly:before{content:"\f417"}.fa-folder:before{content:"\f07b"}.fa-folder-minus:before{content:"\f65d"}.fa-folder-open:before{content:"\f07c"}.fa-folder-plus:before{content:"\f65e"}.fa-font:before{content:"\f031"}.fa-font-awesome:before{content:"\f2b4"}.fa-font-awesome-alt:before{content:"\f35c"}.fa-font-awesome-flag:before{content:"\f425"}.fa-font-awesome-logo-full:before{content:"\f4e6"}.fa-fonticons:before{content:"\f280"}.fa-fonticons-fi:before{content:"\f3a2"}.fa-football-ball:before{content:"\f44e"}.fa-fort-awesome:before{content:"\f286"}.fa-fort-awesome-alt:before{content:"\f3a3"}.fa-forumbee:before{content:"\f211"}.fa-forward:before{content:"\f04e"}.fa-foursquare:before{content:"\f180"}.fa-free-code-camp:before{content:"\f2c5"}.fa-freebsd:before{content:"\f3a4"}.fa-frog:before{content:"\f52e"}.fa-frown:before{content:"\f119"}.fa-frown-open:before{content:"\f57a"}.fa-fulcrum:before{content:"\f50b"}.fa-funnel-dollar:before{content:"\f662"}.fa-futbol:before{content:"\f1e3"}.fa-galactic-republic:before{content:"\f50c"}.fa-galactic-senate:before{content:"\f50d"}.fa-gamepad:before{content:"\f11b"}.fa-gas-pump:before{content:"\f52f"}.fa-gavel:before{content:"\f0e3"}.fa-gem:before{content:"\f3a5"}.fa-genderless:before{content:"\f22d"}.fa-get-pocket:before{content:"\f265"}.fa-gg:before{content:"\f260"}.fa-gg-circle:before{content:"\f261"}.fa-ghost:before{content:"\f6e2"}.fa-gift:before{content:"\f06b"}.fa-gifts:before{content:"\f79c"}.fa-git:before{content:"\f1d3"}.fa-git-alt:before{content:"\f841"}.fa-git-square:before{content:"\f1d2"}.fa-github:before{content:"\f09b"}.fa-github-alt:before{content:"\f113"}.fa-github-square:before{content:"\f092"}.fa-gitkraken:before{content:"\f3a6"}.fa-gitlab:before{content:"\f296"}.fa-gitter:before{content:"\f426"}.fa-glass-cheers:before{content:"\f79f"}.fa-glass-martini:before{content:"\f000"}.fa-glass-martini-alt:before{content:"\f57b"}.fa-glass-whiskey:before{content:"\f7a0"}.fa-glasses:before{content:"\f530"}.fa-glide:before{content:"\f2a5"}.fa-glide-g:before{content:"\f2a6"}.fa-globe:before{content:"\f0ac"}.fa-globe-africa:before{content:"\f57c"}.fa-globe-americas:before{content:"\f57d"}.fa-globe-asia:before{content:"\f57e"}.fa-globe-europe:before{content:"\f7a2"}.fa-gofore:before{content:"\f3a7"}.fa-golf-ball:before{content:"\f450"}.fa-goodreads:before{content:"\f3a8"}.fa-goodreads-g:before{content:"\f3a9"}.fa-google:before{content:"\f1a0"}.fa-google-drive:before{content:"\f3aa"}.fa-google-pay:before{content:"\e079"}.fa-google-play:before{content:"\f3ab"}.fa-google-plus:before{content:"\f2b3"}.fa-google-plus-g:before{content:"\f0d5"}.fa-google-plus-square:before{content:"\f0d4"}.fa-google-wallet:before{content:"\f1ee"}.fa-gopuram:before{content:"\f664"}.fa-graduation-cap:before{content:"\f19d"}.fa-gratipay:before{content:"\f184"}.fa-grav:before{content:"\f2d6"}.fa-greater-than:before{content:"\f531"}.fa-greater-than-equal:before{content:"\f532"}.fa-grimace:before{content:"\f57f"}.fa-grin:before{content:"\f580"}.fa-grin-alt:before{content:"\f581"}.fa-grin-beam:before{content:"\f582"}.fa-grin-beam-sweat:before{content:"\f583"}.fa-grin-hearts:before{content:"\f584"}.fa-grin-squint:before{content:"\f585"}.fa-grin-squint-tears:before{content:"\f586"}.fa-grin-stars:before{content:"\f587"}.fa-grin-tears:before{content:"\f588"}.fa-grin-tongue:before{content:"\f589"}.fa-grin-tongue-squint:before{content:"\f58a"}.fa-grin-tongue-wink:before{content:"\f58b"}.fa-grin-wink:before{content:"\f58c"}.fa-grip-horizontal:before{content:"\f58d"}.fa-grip-lines:before{content:"\f7a4"}.fa-grip-lines-vertical:before{content:"\f7a5"}.fa-grip-vertical:before{content:"\f58e"}.fa-gripfire:before{content:"\f3ac"}.fa-grunt:before{content:"\f3ad"}.fa-guilded:before{content:"\e07e"}.fa-guitar:before{content:"\f7a6"}.fa-gulp:before{content:"\f3ae"}.fa-h-square:before{content:"\f0fd"}.fa-hacker-news:before{content:"\f1d4"}.fa-hacker-news-square:before{content:"\f3af"}.fa-hackerrank:before{content:"\f5f7"}.fa-hamburger:before{content:"\f805"}.fa-hammer:before{content:"\f6e3"}.fa-hamsa:before{content:"\f665"}.fa-hand-holding:before{content:"\f4bd"}.fa-hand-holding-heart:before{content:"\f4be"}.fa-hand-holding-medical:before{content:"\e05c"}.fa-hand-holding-usd:before{content:"\f4c0"}.fa-hand-holding-water:before{content:"\f4c1"}.fa-hand-lizard:before{content:"\f258"}.fa-hand-middle-finger:before{content:"\f806"}.fa-hand-paper:before{content:"\f256"}.fa-hand-peace:before{content:"\f25b"}.fa-hand-point-down:before{content:"\f0a7"}.fa-hand-point-left:before{content:"\f0a5"}.fa-hand-point-right:before{content:"\f0a4"}.fa-hand-point-up:before{content:"\f0a6"}.fa-hand-pointer:before{content:"\f25a"}.fa-hand-rock:before{content:"\f255"}.fa-hand-scissors:before{content:"\f257"}.fa-hand-sparkles:before{content:"\e05d"}.fa-hand-spock:before{content:"\f259"}.fa-hands:before{content:"\f4c2"}.fa-hands-helping:before{content:"\f4c4"}.fa-hands-wash:before{content:"\e05e"}.fa-handshake:before{content:"\f2b5"}.fa-handshake-alt-slash:before{content:"\e05f"}.fa-handshake-slash:before{content:"\e060"}.fa-hanukiah:before{content:"\f6e6"}.fa-hard-hat:before{content:"\f807"}.fa-hashtag:before{content:"\f292"}.fa-hat-cowboy:before{content:"\f8c0"}.fa-hat-cowboy-side:before{content:"\f8c1"}.fa-hat-wizard:before{content:"\f6e8"}.fa-hdd:before{content:"\f0a0"}.fa-head-side-cough:before{content:"\e061"}.fa-head-side-cough-slash:before{content:"\e062"}.fa-head-side-mask:before{content:"\e063"}.fa-head-side-virus:before{content:"\e064"}.fa-heading:before{content:"\f1dc"}.fa-headphones:before{content:"\f025"}.fa-headphones-alt:before{content:"\f58f"}.fa-headset:before{content:"\f590"}.fa-heart:before{content:"\f004"}.fa-heart-broken:before{content:"\f7a9"}.fa-heartbeat:before{content:"\f21e"}.fa-helicopter:before{content:"\f533"}.fa-highlighter:before{content:"\f591"}.fa-hiking:before{content:"\f6ec"}.fa-hippo:before{content:"\f6ed"}.fa-hips:before{content:"\f452"}.fa-hire-a-helper:before{content:"\f3b0"}.fa-history:before{content:"\f1da"}.fa-hive:before{content:"\e07f"}.fa-hockey-puck:before{content:"\f453"}.fa-holly-berry:before{content:"\f7aa"}.fa-home:before{content:"\f015"}.fa-hooli:before{content:"\f427"}.fa-hornbill:before{content:"\f592"}.fa-horse:before{content:"\f6f0"}.fa-horse-head:before{content:"\f7ab"}.fa-hospital:before{content:"\f0f8"}.fa-hospital-alt:before{content:"\f47d"}.fa-hospital-symbol:before{content:"\f47e"}.fa-hospital-user:before{content:"\f80d"}.fa-hot-tub:before{content:"\f593"}.fa-hotdog:before{content:"\f80f"}.fa-hotel:before{content:"\f594"}.fa-hotjar:before{content:"\f3b1"}.fa-hourglass:before{content:"\f254"}.fa-hourglass-end:before{content:"\f253"}.fa-hourglass-half:before{content:"\f252"}.fa-hourglass-start:before{content:"\f251"}.fa-house-damage:before{content:"\f6f1"}.fa-house-user:before{content:"\e065"}.fa-houzz:before{content:"\f27c"}.fa-hryvnia:before{content:"\f6f2"}.fa-html5:before{content:"\f13b"}.fa-hubspot:before{content:"\f3b2"}.fa-i-cursor:before{content:"\f246"}.fa-ice-cream:before{content:"\f810"}.fa-icicles:before{content:"\f7ad"}.fa-icons:before{content:"\f86d"}.fa-id-badge:before{content:"\f2c1"}.fa-id-card:before{content:"\f2c2"}.fa-id-card-alt:before{content:"\f47f"}.fa-ideal:before{content:"\e013"}.fa-igloo:before{content:"\f7ae"}.fa-image:before{content:"\f03e"}.fa-images:before{content:"\f302"}.fa-imdb:before{content:"\f2d8"}.fa-inbox:before{content:"\f01c"}.fa-indent:before{content:"\f03c"}.fa-industry:before{content:"\f275"}.fa-infinity:before{content:"\f534"}.fa-info:before{content:"\f129"}.fa-info-circle:before{content:"\f05a"}.fa-innosoft:before{content:"\e080"}.fa-instagram:before{content:"\f16d"}.fa-instagram-square:before{content:"\e055"}.fa-instalod:before{content:"\e081"}.fa-intercom:before{content:"\f7af"}.fa-internet-explorer:before{content:"\f26b"}.fa-invision:before{content:"\f7b0"}.fa-ioxhost:before{content:"\f208"}.fa-italic:before{content:"\f033"}.fa-itch-io:before{content:"\f83a"}.fa-itunes:before{content:"\f3b4"}.fa-itunes-note:before{content:"\f3b5"}.fa-java:before{content:"\f4e4"}.fa-jedi:before{content:"\f669"}.fa-jedi-order:before{content:"\f50e"}.fa-jenkins:before{content:"\f3b6"}.fa-jira:before{content:"\f7b1"}.fa-joget:before{content:"\f3b7"}.fa-joint:before{content:"\f595"}.fa-joomla:before{content:"\f1aa"}.fa-journal-whills:before{content:"\f66a"}.fa-js:before{content:"\f3b8"}.fa-js-square:before{content:"\f3b9"}.fa-jsfiddle:before{content:"\f1cc"}.fa-kaaba:before{content:"\f66b"}.fa-kaggle:before{content:"\f5fa"}.fa-key:before{content:"\f084"}.fa-keybase:before{content:"\f4f5"}.fa-keyboard:before{content:"\f11c"}.fa-keycdn:before{content:"\f3ba"}.fa-khanda:before{content:"\f66d"}.fa-kickstarter:before{content:"\f3bb"}.fa-kickstarter-k:before{content:"\f3bc"}.fa-kiss:before{content:"\f596"}.fa-kiss-beam:before{content:"\f597"}.fa-kiss-wink-heart:before{content:"\f598"}.fa-kiwi-bird:before{content:"\f535"}.fa-korvue:before{content:"\f42f"}.fa-landmark:before{content:"\f66f"}.fa-language:before{content:"\f1ab"}.fa-laptop:before{content:"\f109"}.fa-laptop-code:before{content:"\f5fc"}.fa-laptop-house:before{content:"\e066"}.fa-laptop-medical:before{content:"\f812"}.fa-laravel:before{content:"\f3bd"}.fa-lastfm:before{content:"\f202"}.fa-lastfm-square:before{content:"\f203"}.fa-laugh:before{content:"\f599"}.fa-laugh-beam:before{content:"\f59a"}.fa-laugh-squint:before{content:"\f59b"}.fa-laugh-wink:before{content:"\f59c"}.fa-layer-group:before{content:"\f5fd"}.fa-leaf:before{content:"\f06c"}.fa-leanpub:before{content:"\f212"}.fa-lemon:before{content:"\f094"}.fa-less:before{content:"\f41d"}.fa-less-than:before{content:"\f536"}.fa-less-than-equal:before{content:"\f537"}.fa-level-down-alt:before{content:"\f3be"}.fa-level-up-alt:before{content:"\f3bf"}.fa-life-ring:before{content:"\f1cd"}.fa-lightbulb:before{content:"\f0eb"}.fa-line:before{content:"\f3c0"}.fa-link:before{content:"\f0c1"}.fa-linkedin:before{content:"\f08c"}.fa-linkedin-in:before{content:"\f0e1"}.fa-linode:before{content:"\f2b8"}.fa-linux:before{content:"\f17c"}.fa-lira-sign:before{content:"\f195"}.fa-list:before{content:"\f03a"}.fa-list-alt:before{content:"\f022"}.fa-list-ol:before{content:"\f0cb"}.fa-list-ul:before{content:"\f0ca"}.fa-location-arrow:before{content:"\f124"}.fa-lock:before{content:"\f023"}.fa-lock-open:before{content:"\f3c1"}.fa-long-arrow-alt-down:before{content:"\f309"}.fa-long-arrow-alt-left:before{content:"\f30a"}.fa-long-arrow-alt-right:before{content:"\f30b"}.fa-long-arrow-alt-up:before{content:"\f30c"}.fa-low-vision:before{content:"\f2a8"}.fa-luggage-cart:before{content:"\f59d"}.fa-lungs:before{content:"\f604"}.fa-lungs-virus:before{content:"\e067"}.fa-lyft:before{content:"\f3c3"}.fa-magento:before{content:"\f3c4"}.fa-magic:before{content:"\f0d0"}.fa-magnet:before{content:"\f076"}.fa-mail-bulk:before{content:"\f674"}.fa-mailchimp:before{content:"\f59e"}.fa-male:before{content:"\f183"}.fa-mandalorian:before{content:"\f50f"}.fa-map:before{content:"\f279"}.fa-map-marked:before{content:"\f59f"}.fa-map-marked-alt:before{content:"\f5a0"}.fa-map-marker:before{content:"\f041"}.fa-map-marker-alt:before{content:"\f3c5"}.fa-map-pin:before{content:"\f276"}.fa-map-signs:before{content:"\f277"}.fa-markdown:before{content:"\f60f"}.fa-marker:before{content:"\f5a1"}.fa-mars:before{content:"\f222"}.fa-mars-double:before{content:"\f227"}.fa-mars-stroke:before{content:"\f229"}.fa-mars-stroke-h:before{content:"\f22b"}.fa-mars-stroke-v:before{content:"\f22a"}.fa-mask:before{content:"\f6fa"}.fa-mastodon:before{content:"\f4f6"}.fa-maxcdn:before{content:"\f136"}.fa-mdb:before{content:"\f8ca"}.fa-medal:before{content:"\f5a2"}.fa-medapps:before{content:"\f3c6"}.fa-medium:before{content:"\f23a"}.fa-medium-m:before{content:"\f3c7"}.fa-medkit:before{content:"\f0fa"}.fa-medrt:before{content:"\f3c8"}.fa-meetup:before{content:"\f2e0"}.fa-megaport:before{content:"\f5a3"}.fa-meh:before{content:"\f11a"}.fa-meh-blank:before{content:"\f5a4"}.fa-meh-rolling-eyes:before{content:"\f5a5"}.fa-memory:before{content:"\f538"}.fa-mendeley:before{content:"\f7b3"}.fa-menorah:before{content:"\f676"}.fa-mercury:before{content:"\f223"}.fa-meteor:before{content:"\f753"}.fa-microblog:before{content:"\e01a"}.fa-microchip:before{content:"\f2db"}.fa-microphone:before{content:"\f130"}.fa-microphone-alt:before{content:"\f3c9"}.fa-microphone-alt-slash:before{content:"\f539"}.fa-microphone-slash:before{content:"\f131"}.fa-microscope:before{content:"\f610"}.fa-microsoft:before{content:"\f3ca"}.fa-minus:before{content:"\f068"}.fa-minus-circle:before{content:"\f056"}.fa-minus-square:before{content:"\f146"}.fa-mitten:before{content:"\f7b5"}.fa-mix:before{content:"\f3cb"}.fa-mixcloud:before{content:"\f289"}.fa-mixer:before{content:"\e056"}.fa-mizuni:before{content:"\f3cc"}.fa-mobile:before{content:"\f10b"}.fa-mobile-alt:before{content:"\f3cd"}.fa-modx:before{content:"\f285"}.fa-monero:before{content:"\f3d0"}.fa-money-bill:before{content:"\f0d6"}.fa-money-bill-alt:before{content:"\f3d1"}.fa-money-bill-wave:before{content:"\f53a"}.fa-money-bill-wave-alt:before{content:"\f53b"}.fa-money-check:before{content:"\f53c"}.fa-money-check-alt:before{content:"\f53d"}.fa-monument:before{content:"\f5a6"}.fa-moon:before{content:"\f186"}.fa-mortar-pestle:before{content:"\f5a7"}.fa-mosque:before{content:"\f678"}.fa-motorcycle:before{content:"\f21c"}.fa-mountain:before{content:"\f6fc"}.fa-mouse:before{content:"\f8cc"}.fa-mouse-pointer:before{content:"\f245"}.fa-mug-hot:before{content:"\f7b6"}.fa-music:before{content:"\f001"}.fa-napster:before{content:"\f3d2"}.fa-neos:before{content:"\f612"}.fa-network-wired:before{content:"\f6ff"}.fa-neuter:before{content:"\f22c"}.fa-newspaper:before{content:"\f1ea"}.fa-nimblr:before{content:"\f5a8"}.fa-node:before{content:"\f419"}.fa-node-js:before{content:"\f3d3"}.fa-not-equal:before{content:"\f53e"}.fa-notes-medical:before{content:"\f481"}.fa-npm:before{content:"\f3d4"}.fa-ns8:before{content:"\f3d5"}.fa-nutritionix:before{content:"\f3d6"}.fa-object-group:before{content:"\f247"}.fa-object-ungroup:before{content:"\f248"}.fa-octopus-deploy:before{content:"\e082"}.fa-odnoklassniki:before{content:"\f263"}.fa-odnoklassniki-square:before{content:"\f264"}.fa-oil-can:before{content:"\f613"}.fa-old-republic:before{content:"\f510"}.fa-om:before{content:"\f679"}.fa-opencart:before{content:"\f23d"}.fa-openid:before{content:"\f19b"}.fa-opera:before{content:"\f26a"}.fa-optin-monster:before{content:"\f23c"}.fa-orcid:before{content:"\f8d2"}.fa-osi:before{content:"\f41a"}.fa-otter:before{content:"\f700"}.fa-outdent:before{content:"\f03b"}.fa-page4:before{content:"\f3d7"}.fa-pagelines:before{content:"\f18c"}.fa-pager:before{content:"\f815"}.fa-paint-brush:before{content:"\f1fc"}.fa-paint-roller:before{content:"\f5aa"}.fa-palette:before{content:"\f53f"}.fa-palfed:before{content:"\f3d8"}.fa-pallet:before{content:"\f482"}.fa-paper-plane:before{content:"\f1d8"}.fa-paperclip:before{content:"\f0c6"}.fa-parachute-box:before{content:"\f4cd"}.fa-paragraph:before{content:"\f1dd"}.fa-parking:before{content:"\f540"}.fa-passport:before{content:"\f5ab"}.fa-pastafarianism:before{content:"\f67b"}.fa-paste:before{content:"\f0ea"}.fa-patreon:before{content:"\f3d9"}.fa-pause:before{content:"\f04c"}.fa-pause-circle:before{content:"\f28b"}.fa-paw:before{content:"\f1b0"}.fa-paypal:before{content:"\f1ed"}.fa-peace:before{content:"\f67c"}.fa-pen:before{content:"\f304"}.fa-pen-alt:before{content:"\f305"}.fa-pen-fancy:before{content:"\f5ac"}.fa-pen-nib:before{content:"\f5ad"}.fa-pen-square:before{content:"\f14b"}.fa-pencil-alt:before{content:"\f303"}.fa-pencil-ruler:before{content:"\f5ae"}.fa-penny-arcade:before{content:"\f704"}.fa-people-arrows:before{content:"\e068"}.fa-people-carry:before{content:"\f4ce"}.fa-pepper-hot:before{content:"\f816"}.fa-perbyte:before{content:"\e083"}.fa-percent:before{content:"\f295"}.fa-percentage:before{content:"\f541"}.fa-periscope:before{content:"\f3da"}.fa-person-booth:before{content:"\f756"}.fa-phabricator:before{content:"\f3db"}.fa-phoenix-framework:before{content:"\f3dc"}.fa-phoenix-squadron:before{content:"\f511"}.fa-phone:before{content:"\f095"}.fa-phone-alt:before{content:"\f879"}.fa-phone-slash:before{content:"\f3dd"}.fa-phone-square:before{content:"\f098"}.fa-phone-square-alt:before{content:"\f87b"}.fa-phone-volume:before{content:"\f2a0"}.fa-photo-video:before{content:"\f87c"}.fa-php:before{content:"\f457"}.fa-pied-piper:before{content:"\f2ae"}.fa-pied-piper-alt:before{content:"\f1a8"}.fa-pied-piper-hat:before{content:"\f4e5"}.fa-pied-piper-pp:before{content:"\f1a7"}.fa-pied-piper-square:before{content:"\e01e"}.fa-piggy-bank:before{content:"\f4d3"}.fa-pills:before{content:"\f484"}.fa-pinterest:before{content:"\f0d2"}.fa-pinterest-p:before{content:"\f231"}.fa-pinterest-square:before{content:"\f0d3"}.fa-pizza-slice:before{content:"\f818"}.fa-place-of-worship:before{content:"\f67f"}.fa-plane:before{content:"\f072"}.fa-plane-arrival:before{content:"\f5af"}.fa-plane-departure:before{content:"\f5b0"}.fa-plane-slash:before{content:"\e069"}.fa-play:before{content:"\f04b"}.fa-play-circle:before{content:"\f144"}.fa-playstation:before{content:"\f3df"}.fa-plug:before{content:"\f1e6"}.fa-plus:before{content:"\f067"}.fa-plus-circle:before{content:"\f055"}.fa-plus-square:before{content:"\f0fe"}.fa-podcast:before{content:"\f2ce"}.fa-poll:before{content:"\f681"}.fa-poll-h:before{content:"\f682"}.fa-poo:before{content:"\f2fe"}.fa-poo-storm:before{content:"\f75a"}.fa-poop:before{content:"\f619"}.fa-portrait:before{content:"\f3e0"}.fa-pound-sign:before{content:"\f154"}.fa-power-off:before{content:"\f011"}.fa-pray:before{content:"\f683"}.fa-praying-hands:before{content:"\f684"}.fa-prescription:before{content:"\f5b1"}.fa-prescription-bottle:before{content:"\f485"}.fa-prescription-bottle-alt:before{content:"\f486"}.fa-print:before{content:"\f02f"}.fa-procedures:before{content:"\f487"}.fa-product-hunt:before{content:"\f288"}.fa-project-diagram:before{content:"\f542"}.fa-pump-medical:before{content:"\e06a"}.fa-pump-soap:before{content:"\e06b"}.fa-pushed:before{content:"\f3e1"}.fa-puzzle-piece:before{content:"\f12e"}.fa-python:before{content:"\f3e2"}.fa-qq:before{content:"\f1d6"}.fa-qrcode:before{content:"\f029"}.fa-question:before{content:"\f128"}.fa-question-circle:before{content:"\f059"}.fa-quidditch:before{content:"\f458"}.fa-quinscape:before{content:"\f459"}.fa-quora:before{content:"\f2c4"}.fa-quote-left:before{content:"\f10d"}.fa-quote-right:before{content:"\f10e"}.fa-quran:before{content:"\f687"}.fa-r-project:before{content:"\f4f7"}.fa-radiation:before{content:"\f7b9"}.fa-radiation-alt:before{content:"\f7ba"}.fa-rainbow:before{content:"\f75b"}.fa-random:before{content:"\f074"}.fa-raspberry-pi:before{content:"\f7bb"}.fa-ravelry:before{content:"\f2d9"}.fa-react:before{content:"\f41b"}.fa-reacteurope:before{content:"\f75d"}.fa-readme:before{content:"\f4d5"}.fa-rebel:before{content:"\f1d0"}.fa-receipt:before{content:"\f543"}.fa-record-vinyl:before{content:"\f8d9"}.fa-recycle:before{content:"\f1b8"}.fa-red-river:before{content:"\f3e3"}.fa-reddit:before{content:"\f1a1"}.fa-reddit-alien:before{content:"\f281"}.fa-reddit-square:before{content:"\f1a2"}.fa-redhat:before{content:"\f7bc"}.fa-redo:before{content:"\f01e"}.fa-redo-alt:before{content:"\f2f9"}.fa-registered:before{content:"\f25d"}.fa-remove-format:before{content:"\f87d"}.fa-renren:before{content:"\f18b"}.fa-reply:before{content:"\f3e5"}.fa-reply-all:before{content:"\f122"}.fa-replyd:before{content:"\f3e6"}.fa-republican:before{content:"\f75e"}.fa-researchgate:before{content:"\f4f8"}.fa-resolving:before{content:"\f3e7"}.fa-restroom:before{content:"\f7bd"}.fa-retweet:before{content:"\f079"}.fa-rev:before{content:"\f5b2"}.fa-ribbon:before{content:"\f4d6"}.fa-ring:before{content:"\f70b"}.fa-road:before{content:"\f018"}.fa-robot:before{content:"\f544"}.fa-rocket:before{content:"\f135"}.fa-rocketchat:before{content:"\f3e8"}.fa-rockrms:before{content:"\f3e9"}.fa-route:before{content:"\f4d7"}.fa-rss:before{content:"\f09e"}.fa-rss-square:before{content:"\f143"}.fa-ruble-sign:before{content:"\f158"}.fa-ruler:before{content:"\f545"}.fa-ruler-combined:before{content:"\f546"}.fa-ruler-horizontal:before{content:"\f547"}.fa-ruler-vertical:before{content:"\f548"}.fa-running:before{content:"\f70c"}.fa-rupee-sign:before{content:"\f156"}.fa-rust:before{content:"\e07a"}.fa-sad-cry:before{content:"\f5b3"}.fa-sad-tear:before{content:"\f5b4"}.fa-safari:before{content:"\f267"}.fa-salesforce:before{content:"\f83b"}.fa-sass:before{content:"\f41e"}.fa-satellite:before{content:"\f7bf"}.fa-satellite-dish:before{content:"\f7c0"}.fa-save:before{content:"\f0c7"}.fa-schlix:before{content:"\f3ea"}.fa-school:before{content:"\f549"}.fa-screwdriver:before{content:"\f54a"}.fa-scribd:before{content:"\f28a"}.fa-scroll:before{content:"\f70e"}.fa-sd-card:before{content:"\f7c2"}.fa-search:before{content:"\f002"}.fa-search-dollar:before{content:"\f688"}.fa-search-location:before{content:"\f689"}.fa-search-minus:before{content:"\f010"}.fa-search-plus:before{content:"\f00e"}.fa-searchengin:before{content:"\f3eb"}.fa-seedling:before{content:"\f4d8"}.fa-sellcast:before{content:"\f2da"}.fa-sellsy:before{content:"\f213"}.fa-server:before{content:"\f233"}.fa-servicestack:before{content:"\f3ec"}.fa-shapes:before{content:"\f61f"}.fa-share:before{content:"\f064"}.fa-share-alt:before{content:"\f1e0"}.fa-share-alt-square:before{content:"\f1e1"}.fa-share-square:before{content:"\f14d"}.fa-shekel-sign:before{content:"\f20b"}.fa-shield-alt:before{content:"\f3ed"}.fa-shield-virus:before{content:"\e06c"}.fa-ship:before{content:"\f21a"}.fa-shipping-fast:before{content:"\f48b"}.fa-shirtsinbulk:before{content:"\f214"}.fa-shoe-prints:before{content:"\f54b"}.fa-shopify:before{content:"\e057"}.fa-shopping-bag:before{content:"\f290"}.fa-shopping-basket:before{content:"\f291"}.fa-shopping-cart:before{content:"\f07a"}.fa-shopware:before{content:"\f5b5"}.fa-shower:before{content:"\f2cc"}.fa-shuttle-van:before{content:"\f5b6"}.fa-sign:before{content:"\f4d9"}.fa-sign-in-alt:before{content:"\f2f6"}.fa-sign-language:before{content:"\f2a7"}.fa-sign-out-alt:before{content:"\f2f5"}.fa-signal:before{content:"\f012"}.fa-signature:before{content:"\f5b7"}.fa-sim-card:before{content:"\f7c4"}.fa-simplybuilt:before{content:"\f215"}.fa-sink:before{content:"\e06d"}.fa-sistrix:before{content:"\f3ee"}.fa-sitemap:before{content:"\f0e8"}.fa-sith:before{content:"\f512"}.fa-skating:before{content:"\f7c5"}.fa-sketch:before{content:"\f7c6"}.fa-skiing:before{content:"\f7c9"}.fa-skiing-nordic:before{content:"\f7ca"}.fa-skull:before{content:"\f54c"}.fa-skull-crossbones:before{content:"\f714"}.fa-skyatlas:before{content:"\f216"}.fa-skype:before{content:"\f17e"}.fa-slack:before{content:"\f198"}.fa-slack-hash:before{content:"\f3ef"}.fa-slash:before{content:"\f715"}.fa-sleigh:before{content:"\f7cc"}.fa-sliders-h:before{content:"\f1de"}.fa-slideshare:before{content:"\f1e7"}.fa-smile:before{content:"\f118"}.fa-smile-beam:before{content:"\f5b8"}.fa-smile-wink:before{content:"\f4da"}.fa-smog:before{content:"\f75f"}.fa-smoking:before{content:"\f48d"}.fa-smoking-ban:before{content:"\f54d"}.fa-sms:before{content:"\f7cd"}.fa-snapchat:before{content:"\f2ab"}.fa-snapchat-ghost:before{content:"\f2ac"}.fa-snapchat-square:before{content:"\f2ad"}.fa-snowboarding:before{content:"\f7ce"}.fa-snowflake:before{content:"\f2dc"}.fa-snowman:before{content:"\f7d0"}.fa-snowplow:before{content:"\f7d2"}.fa-soap:before{content:"\e06e"}.fa-socks:before{content:"\f696"}.fa-solar-panel:before{content:"\f5ba"}.fa-sort:before{content:"\f0dc"}.fa-sort-alpha-down:before{content:"\f15d"}.fa-sort-alpha-down-alt:before{content:"\f881"}.fa-sort-alpha-up:before{content:"\f15e"}.fa-sort-alpha-up-alt:before{content:"\f882"}.fa-sort-amount-down:before{content:"\f160"}.fa-sort-amount-down-alt:before{content:"\f884"}.fa-sort-amount-up:before{content:"\f161"}.fa-sort-amount-up-alt:before{content:"\f885"}.fa-sort-down:before{content:"\f0dd"}.fa-sort-numeric-down:before{content:"\f162"}.fa-sort-numeric-down-alt:before{content:"\f886"}.fa-sort-numeric-up:before{content:"\f163"}.fa-sort-numeric-up-alt:before{content:"\f887"}.fa-sort-up:before{content:"\f0de"}.fa-soundcloud:before{content:"\f1be"}.fa-sourcetree:before{content:"\f7d3"}.fa-spa:before{content:"\f5bb"}.fa-space-shuttle:before{content:"\f197"}.fa-speakap:before{content:"\f3f3"}.fa-speaker-deck:before{content:"\f83c"}.fa-spell-check:before{content:"\f891"}.fa-spider:before{content:"\f717"}.fa-spinner:before{content:"\f110"}.fa-splotch:before{content:"\f5bc"}.fa-spotify:before{content:"\f1bc"}.fa-spray-can:before{content:"\f5bd"}.fa-square:before{content:"\f0c8"}.fa-square-full:before{content:"\f45c"}.fa-square-root-alt:before{content:"\f698"}.fa-squarespace:before{content:"\f5be"}.fa-stack-exchange:before{content:"\f18d"}.fa-stack-overflow:before{content:"\f16c"}.fa-stackpath:before{content:"\f842"}.fa-stamp:before{content:"\f5bf"}.fa-star:before{content:"\f005"}.fa-star-and-crescent:before{content:"\f699"}.fa-star-half:before{content:"\f089"}.fa-star-half-alt:before{content:"\f5c0"}.fa-star-of-david:before{content:"\f69a"}.fa-star-of-life:before{content:"\f621"}.fa-staylinked:before{content:"\f3f5"}.fa-steam:before{content:"\f1b6"}.fa-steam-square:before{content:"\f1b7"}.fa-steam-symbol:before{content:"\f3f6"}.fa-step-backward:before{content:"\f048"}.fa-step-forward:before{content:"\f051"}.fa-stethoscope:before{content:"\f0f1"}.fa-sticker-mule:before{content:"\f3f7"}.fa-sticky-note:before{content:"\f249"}.fa-stop:before{content:"\f04d"}.fa-stop-circle:before{content:"\f28d"}.fa-stopwatch:before{content:"\f2f2"}.fa-stopwatch-20:before{content:"\e06f"}.fa-store:before{content:"\f54e"}.fa-store-alt:before{content:"\f54f"}.fa-store-alt-slash:before{content:"\e070"}.fa-store-slash:before{content:"\e071"}.fa-strava:before{content:"\f428"}.fa-stream:before{content:"\f550"}.fa-street-view:before{content:"\f21d"}.fa-strikethrough:before{content:"\f0cc"}.fa-stripe:before{content:"\f429"}.fa-stripe-s:before{content:"\f42a"}.fa-stroopwafel:before{content:"\f551"}.fa-studiovinari:before{content:"\f3f8"}.fa-stumbleupon:before{content:"\f1a4"}.fa-stumbleupon-circle:before{content:"\f1a3"}.fa-subscript:before{content:"\f12c"}.fa-subway:before{content:"\f239"}.fa-suitcase:before{content:"\f0f2"}.fa-suitcase-rolling:before{content:"\f5c1"}.fa-sun:before{content:"\f185"}.fa-superpowers:before{content:"\f2dd"}.fa-superscript:before{content:"\f12b"}.fa-supple:before{content:"\f3f9"}.fa-surprise:before{content:"\f5c2"}.fa-suse:before{content:"\f7d6"}.fa-swatchbook:before{content:"\f5c3"}.fa-swift:before{content:"\f8e1"}.fa-swimmer:before{content:"\f5c4"}.fa-swimming-pool:before{content:"\f5c5"}.fa-symfony:before{content:"\f83d"}.fa-synagogue:before{content:"\f69b"}.fa-sync:before{content:"\f021"}.fa-sync-alt:before{content:"\f2f1"}.fa-syringe:before{content:"\f48e"}.fa-table:before{content:"\f0ce"}.fa-table-tennis:before{content:"\f45d"}.fa-tablet:before{content:"\f10a"}.fa-tablet-alt:before{content:"\f3fa"}.fa-tablets:before{content:"\f490"}.fa-tachometer-alt:before{content:"\f3fd"}.fa-tag:before{content:"\f02b"}.fa-tags:before{content:"\f02c"}.fa-tape:before{content:"\f4db"}.fa-tasks:before{content:"\f0ae"}.fa-taxi:before{content:"\f1ba"}.fa-teamspeak:before{content:"\f4f9"}.fa-teeth:before{content:"\f62e"}.fa-teeth-open:before{content:"\f62f"}.fa-telegram:before{content:"\f2c6"}.fa-telegram-plane:before{content:"\f3fe"}.fa-temperature-high:before{content:"\f769"}.fa-temperature-low:before{content:"\f76b"}.fa-tencent-weibo:before{content:"\f1d5"}.fa-tenge:before{content:"\f7d7"}.fa-terminal:before{content:"\f120"}.fa-text-height:before{content:"\f034"}.fa-text-width:before{content:"\f035"}.fa-th:before{content:"\f00a"}.fa-th-large:before{content:"\f009"}.fa-th-list:before{content:"\f00b"}.fa-the-red-yeti:before{content:"\f69d"}.fa-theater-masks:before{content:"\f630"}.fa-themeco:before{content:"\f5c6"}.fa-themeisle:before{content:"\f2b2"}.fa-thermometer:before{content:"\f491"}.fa-thermometer-empty:before{content:"\f2cb"}.fa-thermometer-full:before{content:"\f2c7"}.fa-thermometer-half:before{content:"\f2c9"}.fa-thermometer-quarter:before{content:"\f2ca"}.fa-thermometer-three-quarters:before{content:"\f2c8"}.fa-think-peaks:before{content:"\f731"}.fa-thumbs-down:before{content:"\f165"}.fa-thumbs-up:before{content:"\f164"}.fa-thumbtack:before{content:"\f08d"}.fa-ticket-alt:before{content:"\f3ff"}.fa-tiktok:before{content:"\e07b"}.fa-times:before{content:"\f00d"}.fa-times-circle:before{content:"\f057"}.fa-tint:before{content:"\f043"}.fa-tint-slash:before{content:"\f5c7"}.fa-tired:before{content:"\f5c8"}.fa-toggle-off:before{content:"\f204"}.fa-toggle-on:before{content:"\f205"}.fa-toilet:before{content:"\f7d8"}.fa-toilet-paper:before{content:"\f71e"}.fa-toilet-paper-slash:before{content:"\e072"}.fa-toolbox:before{content:"\f552"}.fa-tools:before{content:"\f7d9"}.fa-tooth:before{content:"\f5c9"}.fa-torah:before{content:"\f6a0"}.fa-torii-gate:before{content:"\f6a1"}.fa-tractor:before{content:"\f722"}.fa-trade-federation:before{content:"\f513"}.fa-trademark:before{content:"\f25c"}.fa-traffic-light:before{content:"\f637"}.fa-trailer:before{content:"\e041"}.fa-train:before{content:"\f238"}.fa-tram:before{content:"\f7da"}.fa-transgender:before{content:"\f224"}.fa-transgender-alt:before{content:"\f225"}.fa-trash:before{content:"\f1f8"}.fa-trash-alt:before{content:"\f2ed"}.fa-trash-restore:before{content:"\f829"}.fa-trash-restore-alt:before{content:"\f82a"}.fa-tree:before{content:"\f1bb"}.fa-trello:before{content:"\f181"}.fa-trophy:before{content:"\f091"}.fa-truck:before{content:"\f0d1"}.fa-truck-loading:before{content:"\f4de"}.fa-truck-monster:before{content:"\f63b"}.fa-truck-moving:before{content:"\f4df"}.fa-truck-pickup:before{content:"\f63c"}.fa-tshirt:before{content:"\f553"}.fa-tty:before{content:"\f1e4"}.fa-tumblr:before{content:"\f173"}.fa-tumblr-square:before{content:"\f174"}.fa-tv:before{content:"\f26c"}.fa-twitch:before{content:"\f1e8"}.fa-twitter:before{content:"\f099"}.fa-twitter-square:before{content:"\f081"}.fa-typo3:before{content:"\f42b"}.fa-uber:before{content:"\f402"}.fa-ubuntu:before{content:"\f7df"}.fa-uikit:before{content:"\f403"}.fa-umbraco:before{content:"\f8e8"}.fa-umbrella:before{content:"\f0e9"}.fa-umbrella-beach:before{content:"\f5ca"}.fa-uncharted:before{content:"\e084"}.fa-underline:before{content:"\f0cd"}.fa-undo:before{content:"\f0e2"}.fa-undo-alt:before{content:"\f2ea"}.fa-uniregistry:before{content:"\f404"}.fa-unity:before{content:"\e049"}.fa-universal-access:before{content:"\f29a"}.fa-university:before{content:"\f19c"}.fa-unlink:before{content:"\f127"}.fa-unlock:before{content:"\f09c"}.fa-unlock-alt:before{content:"\f13e"}.fa-unsplash:before{content:"\e07c"}.fa-untappd:before{content:"\f405"}.fa-upload:before{content:"\f093"}.fa-ups:before{content:"\f7e0"}.fa-usb:before{content:"\f287"}.fa-user:before{content:"\f007"}.fa-user-alt:before{content:"\f406"}.fa-user-alt-slash:before{content:"\f4fa"}.fa-user-astronaut:before{content:"\f4fb"}.fa-user-check:before{content:"\f4fc"}.fa-user-circle:before{content:"\f2bd"}.fa-user-clock:before{content:"\f4fd"}.fa-user-cog:before{content:"\f4fe"}.fa-user-edit:before{content:"\f4ff"}.fa-user-friends:before{content:"\f500"}.fa-user-graduate:before{content:"\f501"}.fa-user-injured:before{content:"\f728"}.fa-user-lock:before{content:"\f502"}.fa-user-md:before{content:"\f0f0"}.fa-user-minus:before{content:"\f503"}.fa-user-ninja:before{content:"\f504"}.fa-user-nurse:before{content:"\f82f"}.fa-user-plus:before{content:"\f234"}.fa-user-secret:before{content:"\f21b"}.fa-user-shield:before{content:"\f505"}.fa-user-slash:before{content:"\f506"}.fa-user-tag:before{content:"\f507"}.fa-user-tie:before{content:"\f508"}.fa-user-times:before{content:"\f235"}.fa-users:before{content:"\f0c0"}.fa-users-cog:before{content:"\f509"}.fa-users-slash:before{content:"\e073"}.fa-usps:before{content:"\f7e1"}.fa-ussunnah:before{content:"\f407"}.fa-utensil-spoon:before{content:"\f2e5"}.fa-utensils:before{content:"\f2e7"}.fa-vaadin:before{content:"\f408"}.fa-vector-square:before{content:"\f5cb"}.fa-venus:before{content:"\f221"}.fa-venus-double:before{content:"\f226"}.fa-venus-mars:before{content:"\f228"}.fa-vest:before{content:"\e085"}.fa-vest-patches:before{content:"\e086"}.fa-viacoin:before{content:"\f237"}.fa-viadeo:before{content:"\f2a9"}.fa-viadeo-square:before{content:"\f2aa"}.fa-vial:before{content:"\f492"}.fa-vials:before{content:"\f493"}.fa-viber:before{content:"\f409"}.fa-video:before{content:"\f03d"}.fa-video-slash:before{content:"\f4e2"}.fa-vihara:before{content:"\f6a7"}.fa-vimeo:before{content:"\f40a"}.fa-vimeo-square:before{content:"\f194"}.fa-vimeo-v:before{content:"\f27d"}.fa-vine:before{content:"\f1ca"}.fa-virus:before{content:"\e074"}.fa-virus-slash:before{content:"\e075"}.fa-viruses:before{content:"\e076"}.fa-vk:before{content:"\f189"}.fa-vnv:before{content:"\f40b"}.fa-voicemail:before{content:"\f897"}.fa-volleyball-ball:before{content:"\f45f"}.fa-volume-down:before{content:"\f027"}.fa-volume-mute:before{content:"\f6a9"}.fa-volume-off:before{content:"\f026"}.fa-volume-up:before{content:"\f028"}.fa-vote-yea:before{content:"\f772"}.fa-vr-cardboard:before{content:"\f729"}.fa-vuejs:before{content:"\f41f"}.fa-walking:before{content:"\f554"}.fa-wallet:before{content:"\f555"}.fa-warehouse:before{content:"\f494"}.fa-watchman-monitoring:before{content:"\e087"}.fa-water:before{content:"\f773"}.fa-wave-square:before{content:"\f83e"}.fa-waze:before{content:"\f83f"}.fa-weebly:before{content:"\f5cc"}.fa-weibo:before{content:"\f18a"}.fa-weight:before{content:"\f496"}.fa-weight-hanging:before{content:"\f5cd"}.fa-weixin:before{content:"\f1d7"}.fa-whatsapp:before{content:"\f232"}.fa-whatsapp-square:before{content:"\f40c"}.fa-wheelchair:before{content:"\f193"}.fa-whmcs:before{content:"\f40d"}.fa-wifi:before{content:"\f1eb"}.fa-wikipedia-w:before{content:"\f266"}.fa-wind:before{content:"\f72e"}.fa-window-close:before{content:"\f410"}.fa-window-maximize:before{content:"\f2d0"}.fa-window-minimize:before{content:"\f2d1"}.fa-window-restore:before{content:"\f2d2"}.fa-windows:before{content:"\f17a"}.fa-wine-bottle:before{content:"\f72f"}.fa-wine-glass:before{content:"\f4e3"}.fa-wine-glass-alt:before{content:"\f5ce"}.fa-wix:before{content:"\f5cf"}.fa-wizards-of-the-coast:before{content:"\f730"}.fa-wodu:before{content:"\e088"}.fa-wolf-pack-battalion:before{content:"\f514"}.fa-won-sign:before{content:"\f159"}.fa-wordpress:before{content:"\f19a"}.fa-wordpress-simple:before{content:"\f411"}.fa-wpbeginner:before{content:"\f297"}.fa-wpexplorer:before{content:"\f2de"}.fa-wpforms:before{content:"\f298"}.fa-wpressr:before{content:"\f3e4"}.fa-wrench:before{content:"\f0ad"}.fa-x-ray:before{content:"\f497"}.fa-xbox:before{content:"\f412"}.fa-xing:before{content:"\f168"}.fa-xing-square:before{content:"\f169"}.fa-y-combinator:before{content:"\f23b"}.fa-yahoo:before{content:"\f19e"}.fa-yammer:before{content:"\f840"}.fa-yandex:before{content:"\f413"}.fa-yandex-international:before{content:"\f414"}.fa-yarn:before{content:"\f7e3"}.fa-yelp:before{content:"\f1e9"}.fa-yen-sign:before{content:"\f157"}.fa-yin-yang:before{content:"\f6ad"}.fa-yoast:before{content:"\f2b1"}.fa-youtube:before{content:"\f167"}.fa-youtube-square:before{content:"\f431"}.fa-zhihu:before{content:"\f63f"}.sr-only{border:0;clip:rect(0,0,0,0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.sr-only-focusable:active,.sr-only-focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}@font-face{font-family:"Font Awesome 5 Brands";font-style:normal;font-weight:400;font-display:block;src:url(../webfonts/fa-brands-400.eot);src:url(../webfonts/fa-brands-400.eot?#iefix) format("embedded-opentype"),url(../webfonts/fa-brands-400.woff2) format("woff2"),url(../webfonts/fa-brands-400.woff) format("woff"),url(../webfonts/fa-brands-400.ttf) format("truetype"),url(../webfonts/fa-brands-400.svg#fontawesome) format("svg")}.fab{font-family:"Font Awesome 5 Brands"}@font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:400;font-display:block;src:url(../webfonts/fa-regular-400.eot);src:url(../webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"),url(../webfonts/fa-regular-400.woff2) format("woff2"),url(../webfonts/fa-regular-400.woff) format("woff"),url(../webfonts/fa-regular-400.ttf) format("truetype"),url(../webfonts/fa-regular-400.svg#fontawesome) format("svg")}.fab,.far{font-weight:400}@font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:900;font-display:block;src:url(../webfonts/fa-solid-900.eot);src:url(../webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"),url(../webfonts/fa-solid-900.woff2) format("woff2"),url(../webfonts/fa-solid-900.woff) format("woff"),url(../webfonts/fa-solid-900.ttf) format("truetype"),url(../webfonts/fa-solid-900.svg#fontawesome) format("svg")}.fa,.far,.fas{font-family:"Font Awesome 5 Free"}.fa,.fas{font-weight:900}

.la,.lab,.lad,.lal,.lar,.las{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1}.la-lg{font-size:1.33333em;line-height:.75em;vertical-align:-.0667em}.la-xs{font-size:.75em}.la-sm{font-size:.875em}.la-1x{font-size:1em}.la-2x{font-size:2em}.la-3x{font-size:3em}.la-4x{font-size:4em}.la-5x{font-size:5em}.la-6x{font-size:6em}.la-7x{font-size:7em}.la-8x{font-size:8em}.la-9x{font-size:9em}.la-10x{font-size:10em}.la-fw{text-align:center;width:1.25em}.la-ul{list-style-type:none;margin-left:2.5em;padding-left:0}.la-ul>li{position:relative}.la-li{left:-2em;position:absolute;text-align:center;width:2em;line-height:inherit}.la-border{border:solid .08em #eee;border-radius:.1em;padding:.2em .25em .15em}.la-pull-left{float:left}.la-pull-right{float:right}.la.la-pull-left,.lab.la-pull-left,.lal.la-pull-left,.lar.la-pull-left,.las.la-pull-left{margin-right:.3em}.la.la-pull-right,.lab.la-pull-right,.lal.la-pull-right,.lar.la-pull-right,.las.la-pull-right{margin-left:.3em}.la-spin{-webkit-animation:la-spin 2s infinite linear;animation:la-spin 2s infinite linear}.la-pulse{-webkit-animation:la-spin 1s infinite steps(8);animation:la-spin 1s infinite steps(8)}@-webkit-keyframes la-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes la-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.la-rotate-90{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.la-rotate-180{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.la-rotate-270{-webkit-transform:rotate(270deg);transform:rotate(270deg)}.la-flip-horizontal{-webkit-transform:scale(-1,1);transform:scale(-1,1)}.la-flip-vertical{-webkit-transform:scale(1,-1);transform:scale(1,-1)}.la-flip-both,.la-flip-horizontal.la-flip-vertical{-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}:root .la-flip-both,:root .la-flip-horizontal,:root .la-flip-vertical,:root .la-rotate-180,:root .la-rotate-270,:root .la-rotate-90{-webkit-filter:none;filter:none}.la-stack{display:inline-block;height:2em;line-height:2em;position:relative;vertical-align:middle;width:2.5em}.la-stack-1x,.la-stack-2x{left:0;position:absolute;text-align:center;width:100%}.la-stack-1x{line-height:inherit}.la-stack-2x{font-size:2em}.la-inverse{color:#fff}.la-500px:before{content:"\f26e"}.la-accessible-icon:before{content:"\f368"}.la-accusoft:before{content:"\f369"}.la-acquisitions-incorporated:before{content:"\f6af"}.la-ad:before{content:"\f641"}.la-address-book:before{content:"\f2b9"}.la-address-card:before{content:"\f2bb"}.la-adjust:before{content:"\f042"}.la-adn:before{content:"\f170"}.la-adobe:before{content:"\f778"}.la-adversal:before{content:"\f36a"}.la-affiliatetheme:before{content:"\f36b"}.la-air-freshener:before{content:"\f5d0"}.la-airbnb:before{content:"\f834"}.la-algolia:before{content:"\f36c"}.la-align-center:before{content:"\f037"}.la-align-justify:before{content:"\f039"}.la-align-left:before{content:"\f036"}.la-align-right:before{content:"\f038"}.la-alipay:before{content:"\f642"}.la-allergies:before{content:"\f461"}.la-amazon:before{content:"\f270"}.la-amazon-pay:before{content:"\f42c"}.la-ambulance:before{content:"\f0f9"}.la-american-sign-language-interpreting:before{content:"\f2a3"}.la-amilia:before{content:"\f36d"}.la-anchor:before{content:"\f13d"}.la-android:before{content:"\f17b"}.la-angellist:before{content:"\f209"}.la-angle-double-down:before{content:"\f103"}.la-angle-double-left:before{content:"\f100"}.la-angle-double-right:before{content:"\f101"}.la-angle-double-up:before{content:"\f102"}.la-angle-down:before{content:"\f107"}.la-angle-left:before{content:"\f104"}.la-angle-right:before{content:"\f105"}.la-angle-up:before{content:"\f106"}.la-angry:before{content:"\f556"}.la-angrycreative:before{content:"\f36e"}.la-angular:before{content:"\f420"}.la-ankh:before{content:"\f644"}.la-app-store:before{content:"\f36f"}.la-app-store-ios:before{content:"\f370"}.la-apper:before{content:"\f371"}.la-apple:before{content:"\f179"}.la-apple-alt:before{content:"\f5d1"}.la-apple-pay:before{content:"\f415"}.la-archive:before{content:"\f187"}.la-archway:before{content:"\f557"}.la-arrow-alt-circle-down:before{content:"\f358"}.la-arrow-alt-circle-left:before{content:"\f359"}.la-arrow-alt-circle-right:before{content:"\f35a"}.la-arrow-alt-circle-up:before{content:"\f35b"}.la-arrow-circle-down:before{content:"\f0ab"}.la-arrow-circle-left:before{content:"\f0a8"}.la-arrow-circle-right:before{content:"\f0a9"}.la-arrow-circle-up:before{content:"\f0aa"}.la-arrow-down:before{content:"\f063"}.la-arrow-left:before{content:"\f060"}.la-arrow-right:before{content:"\f061"}.la-arrow-up:before{content:"\f062"}.la-arrows-alt:before{content:"\f0b2"}.la-arrows-alt-h:before{content:"\f337"}.la-arrows-alt-v:before{content:"\f338"}.la-artstation:before{content:"\f77a"}.la-assistive-listening-systems:before{content:"\f2a2"}.la-asterisk:before{content:"\f069"}.la-asymmetrik:before{content:"\f372"}.la-at:before{content:"\f1fa"}.la-atlas:before{content:"\f558"}.la-atlassian:before{content:"\f77b"}.la-atom:before{content:"\f5d2"}.la-audible:before{content:"\f373"}.la-audio-description:before{content:"\f29e"}.la-autoprefixer:before{content:"\f41c"}.la-avianex:before{content:"\f374"}.la-aviato:before{content:"\f421"}.la-award:before{content:"\f559"}.la-aws:before{content:"\f375"}.la-baby:before{content:"\f77c"}.la-baby-carriage:before{content:"\f77d"}.la-backspace:before{content:"\f55a"}.la-backward:before{content:"\f04a"}.la-bacon:before{content:"\f7e5"}.la-balance-scale:before{content:"\f24e"}.la-balance-scale-left:before{content:"\f515"}.la-balance-scale-right:before{content:"\f516"}.la-ban:before{content:"\f05e"}.la-band-aid:before{content:"\f462"}.la-bandcamp:before{content:"\f2d5"}.la-barcode:before{content:"\f02a"}.la-bars:before{content:"\f0c9"}.la-baseball-ball:before{content:"\f433"}.la-basketball-ball:before{content:"\f434"}.la-bath:before{content:"\f2cd"}.la-battery-empty:before{content:"\f244"}.la-battery-full:before{content:"\f240"}.la-battery-half:before{content:"\f242"}.la-battery-quarter:before{content:"\f243"}.la-battery-three-quarters:before{content:"\f241"}.la-battle-net:before{content:"\f835"}.la-bed:before{content:"\f236"}.la-beer:before{content:"\f0fc"}.la-behance:before{content:"\f1b4"}.la-behance-square:before{content:"\f1b5"}.la-bell:before{content:"\f0f3"}.la-bell-slash:before{content:"\f1f6"}.la-bezier-curve:before{content:"\f55b"}.la-bible:before{content:"\f647"}.la-bicycle:before{content:"\f206"}.la-biking:before{content:"\f84a"}.la-bimobject:before{content:"\f378"}.la-binoculars:before{content:"\f1e5"}.la-biohazard:before{content:"\f780"}.la-birthday-cake:before{content:"\f1fd"}.la-bitbucket:before{content:"\f171"}.la-bitcoin:before{content:"\f379"}.la-bity:before{content:"\f37a"}.la-black-tie:before{content:"\f27e"}.la-blackberry:before{content:"\f37b"}.la-blender:before{content:"\f517"}.la-blender-phone:before{content:"\f6b6"}.la-blind:before{content:"\f29d"}.la-blog:before{content:"\f781"}.la-blogger:before{content:"\f37c"}.la-blogger-b:before{content:"\f37d"}.la-bluetooth:before{content:"\f293"}.la-bluetooth-b:before{content:"\f294"}.la-bold:before{content:"\f032"}.la-bolt:before{content:"\f0e7"}.la-bomb:before{content:"\f1e2"}.la-bone:before{content:"\f5d7"}.la-bong:before{content:"\f55c"}.la-book:before{content:"\f02d"}.la-book-dead:before{content:"\f6b7"}.la-book-medical:before{content:"\f7e6"}.la-book-open:before{content:"\f518"}.la-book-reader:before{content:"\f5da"}.la-bookmark:before{content:"\f02e"}.la-bootstrap:before{content:"\f836"}.la-border-all:before{content:"\f84c"}.la-border-none:before{content:"\f850"}.la-border-style:before{content:"\f853"}.la-bowling-ball:before{content:"\f436"}.la-box:before{content:"\f466"}.la-box-open:before{content:"\f49e"}.la-boxes:before{content:"\f468"}.la-braille:before{content:"\f2a1"}.la-brain:before{content:"\f5dc"}.la-bread-slice:before{content:"\f7ec"}.la-briefcase:before{content:"\f0b1"}.la-briefcase-medical:before{content:"\f469"}.la-broadcast-tower:before{content:"\f519"}.la-broom:before{content:"\f51a"}.la-brush:before{content:"\f55d"}.la-btc:before{content:"\f15a"}.la-buffer:before{content:"\f837"}.la-bug:before{content:"\f188"}.la-building:before{content:"\f1ad"}.la-bullhorn:before{content:"\f0a1"}.la-bullseye:before{content:"\f140"}.la-burn:before{content:"\f46a"}.la-buromobelexperte:before{content:"\f37f"}.la-bus:before{content:"\f207"}.la-bus-alt:before{content:"\f55e"}.la-business-time:before{content:"\f64a"}.la-buy-n-large:before{content:"\f8a6"}.la-buysellads:before{content:"\f20d"}.la-calculator:before{content:"\f1ec"}.la-calendar:before{content:"\f133"}.la-calendar-alt:before{content:"\f073"}.la-calendar-check:before{content:"\f274"}.la-calendar-day:before{content:"\f783"}.la-calendar-minus:before{content:"\f272"}.la-calendar-plus:before{content:"\f271"}.la-calendar-times:before{content:"\f273"}.la-calendar-week:before{content:"\f784"}.la-camera:before{content:"\f030"}.la-camera-retro:before{content:"\f083"}.la-campground:before{content:"\f6bb"}.la-canadian-maple-leaf:before{content:"\f785"}.la-candy-cane:before{content:"\f786"}.la-cannabis:before{content:"\f55f"}.la-capsules:before{content:"\f46b"}.la-car:before{content:"\f1b9"}.la-car-alt:before{content:"\f5de"}.la-car-battery:before{content:"\f5df"}.la-car-crash:before{content:"\f5e1"}.la-car-side:before{content:"\f5e4"}.la-caret-down:before{content:"\f0d7"}.la-caret-left:before{content:"\f0d9"}.la-caret-right:before{content:"\f0da"}.la-caret-square-down:before{content:"\f150"}.la-caret-square-left:before{content:"\f191"}.la-caret-square-right:before{content:"\f152"}.la-caret-square-up:before{content:"\f151"}.la-caret-up:before{content:"\f0d8"}.la-carrot:before{content:"\f787"}.la-cart-arrow-down:before{content:"\f218"}.la-cart-plus:before{content:"\f217"}.la-cash-register:before{content:"\f788"}.la-cat:before{content:"\f6be"}.la-cc-amazon-pay:before{content:"\f42d"}.la-cc-amex:before{content:"\f1f3"}.la-cc-apple-pay:before{content:"\f416"}.la-cc-diners-club:before{content:"\f24c"}.la-cc-discover:before{content:"\f1f2"}.la-cc-jcb:before{content:"\f24b"}.la-cc-mastercard:before{content:"\f1f1"}.la-cc-paypal:before{content:"\f1f4"}.la-cc-stripe:before{content:"\f1f5"}.la-cc-visa:before{content:"\f1f0"}.la-centercode:before{content:"\f380"}.la-centos:before{content:"\f789"}.la-certificate:before{content:"\f0a3"}.la-chair:before{content:"\f6c0"}.la-chalkboard:before{content:"\f51b"}.la-chalkboard-teacher:before{content:"\f51c"}.la-charging-station:before{content:"\f5e7"}.la-chart-area:before{content:"\f1fe"}.la-chart-bar:before{content:"\f080"}.la-chart-line:before{content:"\f201"}.la-chart-pie:before{content:"\f200"}.la-check:before{content:"\f00c"}.la-check-circle:before{content:"\f058"}.la-check-double:before{content:"\f560"}.la-check-square:before{content:"\f14a"}.la-cheese:before{content:"\f7ef"}.la-chess:before{content:"\f439"}.la-chess-bishop:before{content:"\f43a"}.la-chess-board:before{content:"\f43c"}.la-chess-king:before{content:"\f43f"}.la-chess-knight:before{content:"\f441"}.la-chess-pawn:before{content:"\f443"}.la-chess-queen:before{content:"\f445"}.la-chess-rook:before{content:"\f447"}.la-chevron-circle-down:before{content:"\f13a"}.la-chevron-circle-left:before{content:"\f137"}.la-chevron-circle-right:before{content:"\f138"}.la-chevron-circle-up:before{content:"\f139"}.la-chevron-down:before{content:"\f078"}.la-chevron-left:before{content:"\f053"}.la-chevron-right:before{content:"\f054"}.la-chevron-up:before{content:"\f077"}.la-child:before{content:"\f1ae"}.la-chrome:before{content:"\f268"}.la-chromecast:before{content:"\f838"}.la-church:before{content:"\f51d"}.la-circle:before{content:"\f111"}.la-circle-notch:before{content:"\f1ce"}.la-city:before{content:"\f64f"}.la-clinic-medical:before{content:"\f7f2"}.la-clipboard:before{content:"\f328"}.la-clipboard-check:before{content:"\f46c"}.la-clipboard-list:before{content:"\f46d"}.la-clock:before{content:"\f017"}.la-clone:before{content:"\f24d"}.la-closed-captioning:before{content:"\f20a"}.la-cloud:before{content:"\f0c2"}.la-cloud-download-alt:before{content:"\f381"}.la-cloud-meatball:before{content:"\f73b"}.la-cloud-moon:before{content:"\f6c3"}.la-cloud-moon-rain:before{content:"\f73c"}.la-cloud-rain:before{content:"\f73d"}.la-cloud-showers-heavy:before{content:"\f740"}.la-cloud-sun:before{content:"\f6c4"}.la-cloud-sun-rain:before{content:"\f743"}.la-cloud-upload-alt:before{content:"\f382"}.la-cloudscale:before{content:"\f383"}.la-cloudsmith:before{content:"\f384"}.la-cloudversify:before{content:"\f385"}.la-cocktail:before{content:"\f561"}.la-code:before{content:"\f121"}.la-code-branch:before{content:"\f126"}.la-codepen:before{content:"\f1cb"}.la-codiepie:before{content:"\f284"}.la-coffee:before{content:"\f0f4"}.la-cog:before{content:"\f013"}.la-cogs:before{content:"\f085"}.la-coins:before{content:"\f51e"}.la-columns:before{content:"\f0db"}.la-comment:before{content:"\f075"}.la-comment-alt:before{content:"\f27a"}.la-comment-dollar:before{content:"\f651"}.la-comment-dots:before{content:"\f4ad"}.la-comment-medical:before{content:"\f7f5"}.la-comment-slash:before{content:"\f4b3"}.la-comments:before{content:"\f086"}.la-comments-dollar:before{content:"\f653"}.la-compact-disc:before{content:"\f51f"}.la-compass:before{content:"\f14e"}.la-compress:before{content:"\f066"}.la-compress-arrows-alt:before{content:"\f78c"}.la-concierge-bell:before{content:"\f562"}.la-confluence:before{content:"\f78d"}.la-connectdevelop:before{content:"\f20e"}.la-contao:before{content:"\f26d"}.la-cookie:before{content:"\f563"}.la-cookie-bite:before{content:"\f564"}.la-copy:before{content:"\f0c5"}.la-copyright:before{content:"\f1f9"}.la-cotton-bureau:before{content:"\f89e"}.la-couch:before{content:"\f4b8"}.la-cpanel:before{content:"\f388"}.la-creative-commons:before{content:"\f25e"}.la-creative-commons-by:before{content:"\f4e7"}.la-creative-commons-nc:before{content:"\f4e8"}.la-creative-commons-nc-eu:before{content:"\f4e9"}.la-creative-commons-nc-jp:before{content:"\f4ea"}.la-creative-commons-nd:before{content:"\f4eb"}.la-creative-commons-pd:before{content:"\f4ec"}.la-creative-commons-pd-alt:before{content:"\f4ed"}.la-creative-commons-remix:before{content:"\f4ee"}.la-creative-commons-sa:before{content:"\f4ef"}.la-creative-commons-sampling:before{content:"\f4f0"}.la-creative-commons-sampling-plus:before{content:"\f4f1"}.la-creative-commons-share:before{content:"\f4f2"}.la-creative-commons-zero:before{content:"\f4f3"}.la-credit-card:before{content:"\f09d"}.la-critical-role:before{content:"\f6c9"}.la-crop:before{content:"\f125"}.la-crop-alt:before{content:"\f565"}.la-cross:before{content:"\f654"}.la-crosshairs:before{content:"\f05b"}.la-crow:before{content:"\f520"}.la-crown:before{content:"\f521"}.la-crutch:before{content:"\f7f7"}.la-css3:before{content:"\f13c"}.la-css3-alt:before{content:"\f38b"}.la-cube:before{content:"\f1b2"}.la-cubes:before{content:"\f1b3"}.la-cut:before{content:"\f0c4"}.la-cuttlefish:before{content:"\f38c"}.la-d-and-d:before{content:"\f38d"}.la-d-and-d-beyond:before{content:"\f6ca"}.la-dashcube:before{content:"\f210"}.la-database:before{content:"\f1c0"}.la-deaf:before{content:"\f2a4"}.la-delicious:before{content:"\f1a5"}.la-democrat:before{content:"\f747"}.la-deploydog:before{content:"\f38e"}.la-deskpro:before{content:"\f38f"}.la-desktop:before{content:"\f108"}.la-dev:before{content:"\f6cc"}.la-deviantart:before{content:"\f1bd"}.la-dharmachakra:before{content:"\f655"}.la-dhl:before{content:"\f790"}.la-diagnoses:before{content:"\f470"}.la-diaspora:before{content:"\f791"}.la-dice:before{content:"\f522"}.la-dice-d20:before{content:"\f6cf"}.la-dice-d6:before{content:"\f6d1"}.la-dice-five:before{content:"\f523"}.la-dice-four:before{content:"\f524"}.la-dice-one:before{content:"\f525"}.la-dice-six:before{content:"\f526"}.la-dice-three:before{content:"\f527"}.la-dice-two:before{content:"\f528"}.la-digg:before{content:"\f1a6"}.la-digital-ocean:before{content:"\f391"}.la-digital-tachograph:before{content:"\f566"}.la-directions:before{content:"\f5eb"}.la-discord:before{content:"\f392"}.la-discourse:before{content:"\f393"}.la-divide:before{content:"\f529"}.la-dizzy:before{content:"\f567"}.la-dna:before{content:"\f471"}.la-dochub:before{content:"\f394"}.la-docker:before{content:"\f395"}.la-dog:before{content:"\f6d3"}.la-dollar-sign:before{content:"\f155"}.la-dolly:before{content:"\f472"}.la-dolly-flatbed:before{content:"\f474"}.la-donate:before{content:"\f4b9"}.la-door-closed:before{content:"\f52a"}.la-door-open:before{content:"\f52b"}.la-dot-circle:before{content:"\f192"}.la-dove:before{content:"\f4ba"}.la-download:before{content:"\f019"}.la-draft2digital:before{content:"\f396"}.la-drafting-compass:before{content:"\f568"}.la-dragon:before{content:"\f6d5"}.la-draw-polygon:before{content:"\f5ee"}.la-dribbble:before{content:"\f17d"}.la-dribbble-square:before{content:"\f397"}.la-dropbox:before{content:"\f16b"}.la-drum:before{content:"\f569"}.la-drum-steelpan:before{content:"\f56a"}.la-drumstick-bite:before{content:"\f6d7"}.la-drupal:before{content:"\f1a9"}.la-dumbbell:before{content:"\f44b"}.la-dumpster:before{content:"\f793"}.la-dumpster-fire:before{content:"\f794"}.la-dungeon:before{content:"\f6d9"}.la-dyalog:before{content:"\f399"}.la-earlybirds:before{content:"\f39a"}.la-ebay:before{content:"\f4f4"}.la-edge:before{content:"\f282"}.la-edit:before{content:"\f044"}.la-egg:before{content:"\f7fb"}.la-eject:before{content:"\f052"}.la-elementor:before{content:"\f430"}.la-ellipsis-h:before{content:"\f141"}.la-ellipsis-v:before{content:"\f142"}.la-ello:before{content:"\f5f1"}.la-ember:before{content:"\f423"}.la-empire:before{content:"\f1d1"}.la-envelope:before{content:"\f0e0"}.la-envelope-open:before{content:"\f2b6"}.la-envelope-open-text:before{content:"\f658"}.la-envelope-square:before{content:"\f199"}.la-envira:before{content:"\f299"}.la-equals:before{content:"\f52c"}.la-eraser:before{content:"\f12d"}.la-erlang:before{content:"\f39d"}.la-ethereum:before{content:"\f42e"}.la-ethernet:before{content:"\f796"}.la-etsy:before{content:"\f2d7"}.la-euro-sign:before{content:"\f153"}.la-evernote:before{content:"\f839"}.la-exchange-alt:before{content:"\f362"}.la-exclamation:before{content:"\f12a"}.la-exclamation-circle:before{content:"\f06a"}.la-exclamation-triangle:before{content:"\f071"}.la-expand:before{content:"\f065"}.la-expand-arrows-alt:before{content:"\f31e"}.la-expeditedssl:before{content:"\f23e"}.la-external-link-alt:before{content:"\f35d"}.la-external-link-square-alt:before{content:"\f360"}.la-eye:before{content:"\f06e"}.la-eye-dropper:before{content:"\f1fb"}.la-eye-slash:before{content:"\f070"}.la-facebook:before{content:"\f09a"}.la-facebook-f:before{content:"\f39e"}.la-facebook-messenger:before{content:"\f39f"}.la-facebook-square:before{content:"\f082"}.la-fan:before{content:"\f863"}.la-fantasy-flight-games:before{content:"\f6dc"}.la-fast-backward:before{content:"\f049"}.la-fast-forward:before{content:"\f050"}.la-fax:before{content:"\f1ac"}.la-feather:before{content:"\f52d"}.la-feather-alt:before{content:"\f56b"}.la-fedex:before{content:"\f797"}.la-fedora:before{content:"\f798"}.la-female:before{content:"\f182"}.la-fighter-jet:before{content:"\f0fb"}.la-figma:before{content:"\f799"}.la-file:before{content:"\f15b"}.la-file-alt:before{content:"\f15c"}.la-file-archive:before{content:"\f1c6"}.la-file-audio:before{content:"\f1c7"}.la-file-code:before{content:"\f1c9"}.la-file-contract:before{content:"\f56c"}.la-file-csv:before{content:"\f6dd"}.la-file-download:before{content:"\f56d"}.la-file-excel:before{content:"\f1c3"}.la-file-export:before{content:"\f56e"}.la-file-image:before{content:"\f1c5"}.la-file-import:before{content:"\f56f"}.la-file-invoice:before{content:"\f570"}.la-file-invoice-dollar:before{content:"\f571"}.la-file-medical:before{content:"\f477"}.la-file-medical-alt:before{content:"\f478"}.la-file-pdf:before{content:"\f1c1"}.la-file-powerpoint:before{content:"\f1c4"}.la-file-prescription:before{content:"\f572"}.la-file-signature:before{content:"\f573"}.la-file-upload:before{content:"\f574"}.la-file-video:before{content:"\f1c8"}.la-file-word:before{content:"\f1c2"}.la-fill:before{content:"\f575"}.la-fill-drip:before{content:"\f576"}.la-film:before{content:"\f008"}.la-filter:before{content:"\f0b0"}.la-fingerprint:before{content:"\f577"}.la-fire:before{content:"\f06d"}.la-fire-alt:before{content:"\f7e4"}.la-fire-extinguisher:before{content:"\f134"}.la-firefox:before{content:"\f269"}.la-first-aid:before{content:"\f479"}.la-first-order:before{content:"\f2b0"}.la-first-order-alt:before{content:"\f50a"}.la-firstdraft:before{content:"\f3a1"}.la-fish:before{content:"\f578"}.la-fist-raised:before{content:"\f6de"}.la-flag:before{content:"\f024"}.la-flag-checkered:before{content:"\f11e"}.la-flag-usa:before{content:"\f74d"}.la-flask:before{content:"\f0c3"}.la-flickr:before{content:"\f16e"}.la-flipboard:before{content:"\f44d"}.la-flushed:before{content:"\f579"}.la-fly:before{content:"\f417"}.la-folder:before{content:"\f07b"}.la-folder-minus:before{content:"\f65d"}.la-folder-open:before{content:"\f07c"}.la-folder-plus:before{content:"\f65e"}.la-font:before{content:"\f031"}.la-font-awesome:before{content:"\f2b4"}.la-font-awesome-alt:before{content:"\f35c"}.la-font-awesome-flag:before{content:"\f425"}.la-font-awesome-logo-full:before{content:"\f4e6"}.la-fonticons:before{content:"\f280"}.la-fonticons-fi:before{content:"\f3a2"}.la-football-ball:before{content:"\f44e"}.la-fort-awesome:before{content:"\f286"}.la-fort-awesome-alt:before{content:"\f3a3"}.la-forumbee:before{content:"\f211"}.la-forward:before{content:"\f04e"}.la-foursquare:before{content:"\f180"}.la-free-code-camp:before{content:"\f2c5"}.la-freebsd:before{content:"\f3a4"}.la-frog:before{content:"\f52e"}.la-frown:before{content:"\f119"}.la-frown-open:before{content:"\f57a"}.la-fulcrum:before{content:"\f50b"}.la-funnel-dollar:before{content:"\f662"}.la-futbol:before{content:"\f1e3"}.la-galactic-republic:before{content:"\f50c"}.la-galactic-senate:before{content:"\f50d"}.la-gamepad:before{content:"\f11b"}.la-gas-pump:before{content:"\f52f"}.la-gavel:before{content:"\f0e3"}.la-gem:before{content:"\f3a5"}.la-genderless:before{content:"\f22d"}.la-get-pocket:before{content:"\f265"}.la-gg:before{content:"\f260"}.la-gg-circle:before{content:"\f261"}.la-ghost:before{content:"\f6e2"}.la-gift:before{content:"\f06b"}.la-gifts:before{content:"\f79c"}.la-git:before{content:"\f1d3"}.la-git-alt:before{content:"\f841"}.la-git-square:before{content:"\f1d2"}.la-github:before{content:"\f09b"}.la-github-alt:before{content:"\f113"}.la-github-square:before{content:"\f092"}.la-gitkraken:before{content:"\f3a6"}.la-gitlab:before{content:"\f296"}.la-gitter:before{content:"\f426"}.la-glass-cheers:before{content:"\f79f"}.la-glass-martini:before{content:"\f000"}.la-glass-martini-alt:before{content:"\f57b"}.la-glass-whiskey:before{content:"\f7a0"}.la-glasses:before{content:"\f530"}.la-glide:before{content:"\f2a5"}.la-glide-g:before{content:"\f2a6"}.la-globe:before{content:"\f0ac"}.la-globe-africa:before{content:"\f57c"}.la-globe-americas:before{content:"\f57d"}.la-globe-asia:before{content:"\f57e"}.la-globe-europe:before{content:"\f7a2"}.la-gofore:before{content:"\f3a7"}.la-golf-ball:before{content:"\f450"}.la-goodreads:before{content:"\f3a8"}.la-goodreads-g:before{content:"\f3a9"}.la-google:before{content:"\f1a0"}.la-google-drive:before{content:"\f3aa"}.la-google-play:before{content:"\f3ab"}.la-google-plus:before{content:"\f2b3"}.la-google-plus-g:before{content:"\f0d5"}.la-google-plus-square:before{content:"\f0d4"}.la-google-wallet:before{content:"\f1ee"}.la-gopuram:before{content:"\f664"}.la-graduation-cap:before{content:"\f19d"}.la-gratipay:before{content:"\f184"}.la-grav:before{content:"\f2d6"}.la-greater-than:before{content:"\f531"}.la-greater-than-equal:before{content:"\f532"}.la-grimace:before{content:"\f57f"}.la-grin:before{content:"\f580"}.la-grin-alt:before{content:"\f581"}.la-grin-beam:before{content:"\f582"}.la-grin-beam-sweat:before{content:"\f583"}.la-grin-hearts:before{content:"\f584"}.la-grin-squint:before{content:"\f585"}.la-grin-squint-tears:before{content:"\f586"}.la-grin-stars:before{content:"\f587"}.la-grin-tears:before{content:"\f588"}.la-grin-tongue:before{content:"\f589"}.la-grin-tongue-squint:before{content:"\f58a"}.la-grin-tongue-wink:before{content:"\f58b"}.la-grin-wink:before{content:"\f58c"}.la-grip-horizontal:before{content:"\f58d"}.la-grip-lines:before{content:"\f7a4"}.la-grip-lines-vertical:before{content:"\f7a5"}.la-grip-vertical:before{content:"\f58e"}.la-gripfire:before{content:"\f3ac"}.la-grunt:before{content:"\f3ad"}.la-guitar:before{content:"\f7a6"}.la-gulp:before{content:"\f3ae"}.la-h-square:before{content:"\f0fd"}.la-hacker-news:before{content:"\f1d4"}.la-hacker-news-square:before{content:"\f3af"}.la-hackerrank:before{content:"\f5f7"}.la-hamburger:before{content:"\f805"}.la-hammer:before{content:"\f6e3"}.la-hamsa:before{content:"\f665"}.la-hand-holding:before{content:"\f4bd"}.la-hand-holding-heart:before{content:"\f4be"}.la-hand-holding-usd:before{content:"\f4c0"}.la-hand-lizard:before{content:"\f258"}.la-hand-middle-finger:before{content:"\f806"}.la-hand-paper:before{content:"\f256"}.la-hand-peace:before{content:"\f25b"}.la-hand-point-down:before{content:"\f0a7"}.la-hand-point-left:before{content:"\f0a5"}.la-hand-point-right:before{content:"\f0a4"}.la-hand-point-up:before{content:"\f0a6"}.la-hand-pointer:before{content:"\f25a"}.la-hand-rock:before{content:"\f255"}.la-hand-scissors:before{content:"\f257"}.la-hand-spock:before{content:"\f259"}.la-hands:before{content:"\f4c2"}.la-hands-helping:before{content:"\f4c4"}.la-handshake:before{content:"\f2b5"}.la-hanukiah:before{content:"\f6e6"}.la-hard-hat:before{content:"\f807"}.la-hashtag:before{content:"\f292"}.la-hat-cowboy:before{content:"\f8c0"}.la-hat-cowboy-side:before{content:"\f8c1"}.la-hat-wizard:before{content:"\f6e8"}.la-haykal:before{content:"\f666"}.la-hdd:before{content:"\f0a0"}.la-heading:before{content:"\f1dc"}.la-headphones:before{content:"\f025"}.la-headphones-alt:before{content:"\f58f"}.la-headset:before{content:"\f590"}.la-heart:before{content:"\f004"}.la-heart-broken:before{content:"\f7a9"}.la-heartbeat:before{content:"\f21e"}.la-helicopter:before{content:"\f533"}.la-highlighter:before{content:"\f591"}.la-hiking:before{content:"\f6ec"}.la-hippo:before{content:"\f6ed"}.la-hips:before{content:"\f452"}.la-hire-a-helper:before{content:"\f3b0"}.la-history:before{content:"\f1da"}.la-hockey-puck:before{content:"\f453"}.la-holly-berry:before{content:"\f7aa"}.la-home:before{content:"\f015"}.la-hooli:before{content:"\f427"}.la-hornbill:before{content:"\f592"}.la-horse:before{content:"\f6f0"}.la-horse-head:before{content:"\f7ab"}.la-hospital:before{content:"\f0f8"}.la-hospital-alt:before{content:"\f47d"}.la-hospital-symbol:before{content:"\f47e"}.la-hot-tub:before{content:"\f593"}.la-hotdog:before{content:"\f80f"}.la-hotel:before{content:"\f594"}.la-hotjar:before{content:"\f3b1"}.la-hourglass:before{content:"\f254"}.la-hourglass-end:before{content:"\f253"}.la-hourglass-half:before{content:"\f252"}.la-hourglass-start:before{content:"\f251"}.la-house-damage:before{content:"\f6f1"}.la-houzz:before{content:"\f27c"}.la-hryvnia:before{content:"\f6f2"}.la-html5:before{content:"\f13b"}.la-hubspot:before{content:"\f3b2"}.la-i-cursor:before{content:"\f246"}.la-ice-cream:before{content:"\f810"}.la-icicles:before{content:"\f7ad"}.la-icons:before{content:"\f86d"}.la-id-badge:before{content:"\f2c1"}.la-id-card:before{content:"\f2c2"}.la-id-card-alt:before{content:"\f47f"}.la-igloo:before{content:"\f7ae"}.la-image:before{content:"\f03e"}.la-images:before{content:"\f302"}.la-imdb:before{content:"\f2d8"}.la-inbox:before{content:"\f01c"}.la-indent:before{content:"\f03c"}.la-industry:before{content:"\f275"}.la-infinity:before{content:"\f534"}.la-info:before{content:"\f129"}.la-info-circle:before{content:"\f05a"}.la-instagram:before{content:"\f16d"}.la-intercom:before{content:"\f7af"}.la-internet-explorer:before{content:"\f26b"}.la-invision:before{content:"\f7b0"}.la-ioxhost:before{content:"\f208"}.la-italic:before{content:"\f033"}.la-itch-io:before{content:"\f83a"}.la-itunes:before{content:"\f3b4"}.la-itunes-note:before{content:"\f3b5"}.la-java:before{content:"\f4e4"}.la-jedi:before{content:"\f669"}.la-jedi-order:before{content:"\f50e"}.la-jenkins:before{content:"\f3b6"}.la-jira:before{content:"\f7b1"}.la-joget:before{content:"\f3b7"}.la-joint:before{content:"\f595"}.la-joomla:before{content:"\f1aa"}.la-journal-whills:before{content:"\f66a"}.la-js:before{content:"\f3b8"}.la-js-square:before{content:"\f3b9"}.la-jsfiddle:before{content:"\f1cc"}.la-kaaba:before{content:"\f66b"}.la-kaggle:before{content:"\f5fa"}.la-key:before{content:"\f084"}.la-keybase:before{content:"\f4f5"}.la-keyboard:before{content:"\f11c"}.la-keycdn:before{content:"\f3ba"}.la-khanda:before{content:"\f66d"}.la-kickstarter:before{content:"\f3bb"}.la-kickstarter-k:before{content:"\f3bc"}.la-kiss:before{content:"\f596"}.la-kiss-beam:before{content:"\f597"}.la-kiss-wink-heart:before{content:"\f598"}.la-kiwi-bird:before{content:"\f535"}.la-korvue:before{content:"\f42f"}.la-landmark:before{content:"\f66f"}.la-language:before{content:"\f1ab"}.la-laptop:before{content:"\f109"}.la-laptop-code:before{content:"\f5fc"}.la-laptop-medical:before{content:"\f812"}.la-laravel:before{content:"\f3bd"}.la-lastfm:before{content:"\f202"}.la-lastfm-square:before{content:"\f203"}.la-laugh:before{content:"\f599"}.la-laugh-beam:before{content:"\f59a"}.la-laugh-squint:before{content:"\f59b"}.la-laugh-wink:before{content:"\f59c"}.la-layer-group:before{content:"\f5fd"}.la-leaf:before{content:"\f06c"}.la-leanpub:before{content:"\f212"}.la-lemon:before{content:"\f094"}.la-less:before{content:"\f41d"}.la-less-than:before{content:"\f536"}.la-less-than-equal:before{content:"\f537"}.la-level-down-alt:before{content:"\f3be"}.la-level-up-alt:before{content:"\f3bf"}.la-life-ring:before{content:"\f1cd"}.la-lightbulb:before{content:"\f0eb"}.la-line:before{content:"\f3c0"}.la-link:before{content:"\f0c1"}.la-linkedin:before{content:"\f08c"}.la-linkedin-in:before{content:"\f0e1"}.la-linode:before{content:"\f2b8"}.la-linux:before{content:"\f17c"}.la-lira-sign:before{content:"\f195"}.la-list:before{content:"\f03a"}.la-list-alt:before{content:"\f022"}.la-list-ol:before{content:"\f0cb"}.la-list-ul:before{content:"\f0ca"}.la-location-arrow:before{content:"\f124"}.la-lock:before{content:"\f023"}.la-lock-open:before{content:"\f3c1"}.la-long-arrow-alt-down:before{content:"\f309"}.la-long-arrow-alt-left:before{content:"\f30a"}.la-long-arrow-alt-right:before{content:"\f30b"}.la-long-arrow-alt-up:before{content:"\f30c"}.la-low-vision:before{content:"\f2a8"}.la-luggage-cart:before{content:"\f59d"}.la-lyft:before{content:"\f3c3"}.la-magento:before{content:"\f3c4"}.la-magic:before{content:"\f0d0"}.la-magnet:before{content:"\f076"}.la-mail-bulk:before{content:"\f674"}.la-mailchimp:before{content:"\f59e"}.la-male:before{content:"\f183"}.la-mandalorian:before{content:"\f50f"}.la-map:before{content:"\f279"}.la-map-marked:before{content:"\f59f"}.la-map-marked-alt:before{content:"\f5a0"}.la-map-marker:before{content:"\f041"}.la-map-marker-alt:before{content:"\f3c5"}.la-map-pin:before{content:"\f276"}.la-map-signs:before{content:"\f277"}.la-markdown:before{content:"\f60f"}.la-marker:before{content:"\f5a1"}.la-mars:before{content:"\f222"}.la-mars-double:before{content:"\f227"}.la-mars-stroke:before{content:"\f229"}.la-mars-stroke-h:before{content:"\f22b"}.la-mars-stroke-v:before{content:"\f22a"}.la-mask:before{content:"\f6fa"}.la-mastodon:before{content:"\f4f6"}.la-maxcdn:before{content:"\f136"}.la-mdb:before{content:"\f8ca"}.la-medal:before{content:"\f5a2"}.la-medapps:before{content:"\f3c6"}.la-medium:before{content:"\f23a"}.la-medium-m:before{content:"\f3c7"}.la-medkit:before{content:"\f0fa"}.la-medrt:before{content:"\f3c8"}.la-meetup:before{content:"\f2e0"}.la-megaport:before{content:"\f5a3"}.la-meh:before{content:"\f11a"}.la-meh-blank:before{content:"\f5a4"}.la-meh-rolling-eyes:before{content:"\f5a5"}.la-memory:before{content:"\f538"}.la-mendeley:before{content:"\f7b3"}.la-menorah:before{content:"\f676"}.la-mercury:before{content:"\f223"}.la-meteor:before{content:"\f753"}.la-microchip:before{content:"\f2db"}.la-microphone:before{content:"\f130"}.la-microphone-alt:before{content:"\f3c9"}.la-microphone-alt-slash:before{content:"\f539"}.la-microphone-slash:before{content:"\f131"}.la-microscope:before{content:"\f610"}.la-microsoft:before{content:"\f3ca"}.la-minus:before{content:"\f068"}.la-minus-circle:before{content:"\f056"}.la-minus-square:before{content:"\f146"}.la-mitten:before{content:"\f7b5"}.la-mix:before{content:"\f3cb"}.la-mixcloud:before{content:"\f289"}.la-mizuni:before{content:"\f3cc"}.la-mobile:before{content:"\f10b"}.la-mobile-alt:before{content:"\f3cd"}.la-modx:before{content:"\f285"}.la-monero:before{content:"\f3d0"}.la-money-bill:before{content:"\f0d6"}.la-money-bill-alt:before{content:"\f3d1"}.la-money-bill-wave:before{content:"\f53a"}.la-money-bill-wave-alt:before{content:"\f53b"}.la-money-check:before{content:"\f53c"}.la-money-check-alt:before{content:"\f53d"}.la-monument:before{content:"\f5a6"}.la-moon:before{content:"\f186"}.la-mortar-pestle:before{content:"\f5a7"}.la-mosque:before{content:"\f678"}.la-motorcycle:before{content:"\f21c"}.la-mountain:before{content:"\f6fc"}.la-mouse:before{content:"\f8cc"}.la-mouse-pointer:before{content:"\f245"}.la-mug-hot:before{content:"\f7b6"}.la-music:before{content:"\f001"}.la-napster:before{content:"\f3d2"}.la-neos:before{content:"\f612"}.la-network-wired:before{content:"\f6ff"}.la-neuter:before{content:"\f22c"}.la-newspaper:before{content:"\f1ea"}.la-nimblr:before{content:"\f5a8"}.la-node:before{content:"\f419"}.la-node-js:before{content:"\f3d3"}.la-not-equal:before{content:"\f53e"}.la-notes-medical:before{content:"\f481"}.la-npm:before{content:"\f3d4"}.la-ns8:before{content:"\f3d5"}.la-nutritionix:before{content:"\f3d6"}.la-object-group:before{content:"\f247"}.la-object-ungroup:before{content:"\f248"}.la-odnoklassniki:before{content:"\f263"}.la-odnoklassniki-square:before{content:"\f264"}.la-oil-can:before{content:"\f613"}.la-old-republic:before{content:"\f510"}.la-om:before{content:"\f679"}.la-opencart:before{content:"\f23d"}.la-openid:before{content:"\f19b"}.la-opera:before{content:"\f26a"}.la-optin-monster:before{content:"\f23c"}.la-orcid:before{content:"\f8d2"}.la-osi:before{content:"\f41a"}.la-otter:before{content:"\f700"}.la-outdent:before{content:"\f03b"}.la-page4:before{content:"\f3d7"}.la-pagelines:before{content:"\f18c"}.la-pager:before{content:"\f815"}.la-paint-brush:before{content:"\f1fc"}.la-paint-roller:before{content:"\f5aa"}.la-palette:before{content:"\f53f"}.la-palfed:before{content:"\f3d8"}.la-pallet:before{content:"\f482"}.la-paper-plane:before{content:"\f1d8"}.la-paperclip:before{content:"\f0c6"}.la-parachute-box:before{content:"\f4cd"}.la-paragraph:before{content:"\f1dd"}.la-parking:before{content:"\f540"}.la-passport:before{content:"\f5ab"}.la-pastafarianism:before{content:"\f67b"}.la-paste:before{content:"\f0ea"}.la-patreon:before{content:"\f3d9"}.la-pause:before{content:"\f04c"}.la-pause-circle:before{content:"\f28b"}.la-paw:before{content:"\f1b0"}.la-paypal:before{content:"\f1ed"}.la-peace:before{content:"\f67c"}.la-pen:before{content:"\f304"}.la-pen-alt:before{content:"\f305"}.la-pen-fancy:before{content:"\f5ac"}.la-pen-nib:before{content:"\f5ad"}.la-pen-square:before{content:"\f14b"}.la-pencil-alt:before{content:"\f303"}.la-pencil-ruler:before{content:"\f5ae"}.la-penny-arcade:before{content:"\f704"}.la-people-carry:before{content:"\f4ce"}.la-pepper-hot:before{content:"\f816"}.la-percent:before{content:"\f295"}.la-percentage:before{content:"\f541"}.la-periscope:before{content:"\f3da"}.la-person-booth:before{content:"\f756"}.la-phabricator:before{content:"\f3db"}.la-phoenix-framework:before{content:"\f3dc"}.la-phoenix-squadron:before{content:"\f511"}.la-phone:before{content:"\f095"}.la-phone-alt:before{content:"\f879"}.la-phone-slash:before{content:"\f3dd"}.la-phone-square:before{content:"\f098"}.la-phone-square-alt:before{content:"\f87b"}.la-phone-volume:before{content:"\f2a0"}.la-photo-video:before{content:"\f87c"}.la-php:before{content:"\f457"}.la-pied-piper:before{content:"\f2ae"}.la-pied-piper-alt:before{content:"\f1a8"}.la-pied-piper-hat:before{content:"\f4e5"}.la-pied-piper-pp:before{content:"\f1a7"}.la-piggy-bank:before{content:"\f4d3"}.la-pills:before{content:"\f484"}.la-pinterest:before{content:"\f0d2"}.la-pinterest-p:before{content:"\f231"}.la-pinterest-square:before{content:"\f0d3"}.la-pizza-slice:before{content:"\f818"}.la-place-of-worship:before{content:"\f67f"}.la-plane:before{content:"\f072"}.la-plane-arrival:before{content:"\f5af"}.la-plane-departure:before{content:"\f5b0"}.la-play:before{content:"\f04b"}.la-play-circle:before{content:"\f144"}.la-playstation:before{content:"\f3df"}.la-plug:before{content:"\f1e6"}.la-plus:before{content:"\f067"}.la-plus-circle:before{content:"\f055"}.la-plus-square:before{content:"\f0fe"}.la-podcast:before{content:"\f2ce"}.la-poll:before{content:"\f681"}.la-poll-h:before{content:"\f682"}.la-poo:before{content:"\f2fe"}.la-poo-storm:before{content:"\f75a"}.la-poop:before{content:"\f619"}.la-portrait:before{content:"\f3e0"}.la-pound-sign:before{content:"\f154"}.la-power-off:before{content:"\f011"}.la-pray:before{content:"\f683"}.la-praying-hands:before{content:"\f684"}.la-prescription:before{content:"\f5b1"}.la-prescription-bottle:before{content:"\f485"}.la-prescription-bottle-alt:before{content:"\f486"}.la-print:before{content:"\f02f"}.la-procedures:before{content:"\f487"}.la-product-hunt:before{content:"\f288"}.la-project-diagram:before{content:"\f542"}.la-pushed:before{content:"\f3e1"}.la-puzzle-piece:before{content:"\f12e"}.la-python:before{content:"\f3e2"}.la-qq:before{content:"\f1d6"}.la-qrcode:before{content:"\f029"}.la-question:before{content:"\f128"}.la-question-circle:before{content:"\f059"}.la-quidditch:before{content:"\f458"}.la-quinscape:before{content:"\f459"}.la-quora:before{content:"\f2c4"}.la-quote-left:before{content:"\f10d"}.la-quote-right:before{content:"\f10e"}.la-quran:before{content:"\f687"}.la-r-project:before{content:"\f4f7"}.la-radiation:before{content:"\f7b9"}.la-radiation-alt:before{content:"\f7ba"}.la-rainbow:before{content:"\f75b"}.la-random:before{content:"\f074"}.la-raspberry-pi:before{content:"\f7bb"}.la-ravelry:before{content:"\f2d9"}.la-react:before{content:"\f41b"}.la-reacteurope:before{content:"\f75d"}.la-readme:before{content:"\f4d5"}.la-rebel:before{content:"\f1d0"}.la-receipt:before{content:"\f543"}.la-record-vinyl:before{content:"\f8d9"}.la-recycle:before{content:"\f1b8"}.la-red-river:before{content:"\f3e3"}.la-reddit:before{content:"\f1a1"}.la-reddit-alien:before{content:"\f281"}.la-reddit-square:before{content:"\f1a2"}.la-redhat:before{content:"\f7bc"}.la-redo:before{content:"\f01e"}.la-redo-alt:before{content:"\f2f9"}.la-registered:before{content:"\f25d"}.la-remove-format:before{content:"\f87d"}.la-renren:before{content:"\f18b"}.la-reply:before{content:"\f3e5"}.la-reply-all:before{content:"\f122"}.la-replyd:before{content:"\f3e6"}.la-republican:before{content:"\f75e"}.la-researchgate:before{content:"\f4f8"}.la-resolving:before{content:"\f3e7"}.la-restroom:before{content:"\f7bd"}.la-retweet:before{content:"\f079"}.la-rev:before{content:"\f5b2"}.la-ribbon:before{content:"\f4d6"}.la-ring:before{content:"\f70b"}.la-road:before{content:"\f018"}.la-robot:before{content:"\f544"}.la-rocket:before{content:"\f135"}.la-rocketchat:before{content:"\f3e8"}.la-rockrms:before{content:"\f3e9"}.la-route:before{content:"\f4d7"}.la-rss:before{content:"\f09e"}.la-rss-square:before{content:"\f143"}.la-ruble-sign:before{content:"\f158"}.la-ruler:before{content:"\f545"}.la-ruler-combined:before{content:"\f546"}.la-ruler-horizontal:before{content:"\f547"}.la-ruler-vertical:before{content:"\f548"}.la-running:before{content:"\f70c"}.la-rupee-sign:before{content:"\f156"}.la-sad-cry:before{content:"\f5b3"}.la-sad-tear:before{content:"\f5b4"}.la-safari:before{content:"\f267"}.la-salesforce:before{content:"\f83b"}.la-sass:before{content:"\f41e"}.la-satellite:before{content:"\f7bf"}.la-satellite-dish:before{content:"\f7c0"}.la-save:before{content:"\f0c7"}.la-schlix:before{content:"\f3ea"}.la-school:before{content:"\f549"}.la-screwdriver:before{content:"\f54a"}.la-scribd:before{content:"\f28a"}.la-scroll:before{content:"\f70e"}.la-sd-card:before{content:"\f7c2"}.la-search:before{content:"\f002"}.la-search-dollar:before{content:"\f688"}.la-search-location:before{content:"\f689"}.la-search-minus:before{content:"\f010"}.la-search-plus:before{content:"\f00e"}.la-searchengin:before{content:"\f3eb"}.la-seedling:before{content:"\f4d8"}.la-sellcast:before{content:"\f2da"}.la-sellsy:before{content:"\f213"}.la-server:before{content:"\f233"}.la-servicestack:before{content:"\f3ec"}.la-shapes:before{content:"\f61f"}.la-share:before{content:"\f064"}.la-share-alt:before{content:"\f1e0"}.la-share-alt-square:before{content:"\f1e1"}.la-share-square:before{content:"\f14d"}.la-shekel-sign:before{content:"\f20b"}.la-shield-alt:before{content:"\f3ed"}.la-ship:before{content:"\f21a"}.la-shipping-fast:before{content:"\f48b"}.la-shirtsinbulk:before{content:"\f214"}.la-shoe-prints:before{content:"\f54b"}.la-shopping-bag:before{content:"\f290"}.la-shopping-basket:before{content:"\f291"}.la-shopping-cart:before{content:"\f07a"}.la-shopware:before{content:"\f5b5"}.la-shower:before{content:"\f2cc"}.la-shuttle-van:before{content:"\f5b6"}.la-sign:before{content:"\f4d9"}.la-sign-in-alt:before{content:"\f2f6"}.la-sign-language:before{content:"\f2a7"}.la-sign-out-alt:before{content:"\f2f5"}.la-signal:before{content:"\f012"}.la-signature:before{content:"\f5b7"}.la-sim-card:before{content:"\f7c4"}.la-simplybuilt:before{content:"\f215"}.la-sistrix:before{content:"\f3ee"}.la-sitemap:before{content:"\f0e8"}.la-sith:before{content:"\f512"}.la-skating:before{content:"\f7c5"}.la-sketch:before{content:"\f7c6"}.la-skiing:before{content:"\f7c9"}.la-skiing-nordic:before{content:"\f7ca"}.la-skull:before{content:"\f54c"}.la-skull-crossbones:before{content:"\f714"}.la-skyatlas:before{content:"\f216"}.la-skype:before{content:"\f17e"}.la-slack:before{content:"\f198"}.la-slack-hash:before{content:"\f3ef"}.la-slash:before{content:"\f715"}.la-sleigh:before{content:"\f7cc"}.la-sliders-h:before{content:"\f1de"}.la-slideshare:before{content:"\f1e7"}.la-smile:before{content:"\f118"}.la-smile-beam:before{content:"\f5b8"}.la-smile-wink:before{content:"\f4da"}.la-smog:before{content:"\f75f"}.la-smoking:before{content:"\f48d"}.la-smoking-ban:before{content:"\f54d"}.la-sms:before{content:"\f7cd"}.la-snapchat:before{content:"\f2ab"}.la-snapchat-ghost:before{content:"\f2ac"}.la-snapchat-square:before{content:"\f2ad"}.la-snowboarding:before{content:"\f7ce"}.la-snowflake:before{content:"\f2dc"}.la-snowman:before{content:"\f7d0"}.la-snowplow:before{content:"\f7d2"}.la-socks:before{content:"\f696"}.la-solar-panel:before{content:"\f5ba"}.la-sort:before{content:"\f0dc"}.la-sort-alpha-down:before{content:"\f15d"}.la-sort-alpha-down-alt:before{content:"\f881"}.la-sort-alpha-up:before{content:"\f15e"}.la-sort-alpha-up-alt:before{content:"\f882"}.la-sort-amount-down:before{content:"\f160"}.la-sort-amount-down-alt:before{content:"\f884"}.la-sort-amount-up:before{content:"\f161"}.la-sort-amount-up-alt:before{content:"\f885"}.la-sort-down:before{content:"\f0dd"}.la-sort-numeric-down:before{content:"\f162"}.la-sort-numeric-down-alt:before{content:"\f886"}.la-sort-numeric-up:before{content:"\f163"}.la-sort-numeric-up-alt:before{content:"\f887"}.la-sort-up:before{content:"\f0de"}.la-soundcloud:before{content:"\f1be"}.la-sourcetree:before{content:"\f7d3"}.la-spa:before{content:"\f5bb"}.la-space-shuttle:before{content:"\f197"}.la-speakap:before{content:"\f3f3"}.la-speaker-deck:before{content:"\f83c"}.la-spell-check:before{content:"\f891"}.la-spider:before{content:"\f717"}.la-spinner:before{content:"\f110"}.la-splotch:before{content:"\f5bc"}.la-spotify:before{content:"\f1bc"}.la-spray-can:before{content:"\f5bd"}.la-square:before{content:"\f0c8"}.la-square-full:before{content:"\f45c"}.la-square-root-alt:before{content:"\f698"}.la-squarespace:before{content:"\f5be"}.la-stack-exchange:before{content:"\f18d"}.la-stack-overflow:before{content:"\f16c"}.la-stackpath:before{content:"\f842"}.la-stamp:before{content:"\f5bf"}.la-star:before{content:"\f005"}.la-star-and-crescent:before{content:"\f699"}.la-star-half:before{content:"\f089"}.la-star-half-alt:before{content:"\f5c0"}.la-star-of-david:before{content:"\f69a"}.la-star-of-life:before{content:"\f621"}.la-staylinked:before{content:"\f3f5"}.la-steam:before{content:"\f1b6"}.la-steam-square:before{content:"\f1b7"}.la-steam-symbol:before{content:"\f3f6"}.la-step-backward:before{content:"\f048"}.la-step-forward:before{content:"\f051"}.la-stethoscope:before{content:"\f0f1"}.la-sticker-mule:before{content:"\f3f7"}.la-sticky-note:before{content:"\f249"}.la-stop:before{content:"\f04d"}.la-stop-circle:before{content:"\f28d"}.la-stopwatch:before{content:"\f2f2"}.la-store:before{content:"\f54e"}.la-store-alt:before{content:"\f54f"}.la-strava:before{content:"\f428"}.la-stream:before{content:"\f550"}.la-street-view:before{content:"\f21d"}.la-strikethrough:before{content:"\f0cc"}.la-stripe:before{content:"\f429"}.la-stripe-s:before{content:"\f42a"}.la-stroopwafel:before{content:"\f551"}.la-studiovinari:before{content:"\f3f8"}.la-stumbleupon:before{content:"\f1a4"}.la-stumbleupon-circle:before{content:"\f1a3"}.la-subscript:before{content:"\f12c"}.la-subway:before{content:"\f239"}.la-suitcase:before{content:"\f0f2"}.la-suitcase-rolling:before{content:"\f5c1"}.la-sun:before{content:"\f185"}.la-superpowers:before{content:"\f2dd"}.la-superscript:before{content:"\f12b"}.la-supple:before{content:"\f3f9"}.la-surprise:before{content:"\f5c2"}.la-suse:before{content:"\f7d6"}.la-swatchbook:before{content:"\f5c3"}.la-swift:before{content:"\f8e1"}.la-swimmer:before{content:"\f5c4"}.la-swimming-pool:before{content:"\f5c5"}.la-symfony:before{content:"\f83d"}.la-synagogue:before{content:"\f69b"}.la-sync:before{content:"\f021"}.la-sync-alt:before{content:"\f2f1"}.la-syringe:before{content:"\f48e"}.la-table:before{content:"\f0ce"}.la-table-tennis:before{content:"\f45d"}.la-tablet:before{content:"\f10a"}.la-tablet-alt:before{content:"\f3fa"}.la-tablets:before{content:"\f490"}.la-tachometer-alt:before{content:"\f3fd"}.la-tag:before{content:"\f02b"}.la-tags:before{content:"\f02c"}.la-tape:before{content:"\f4db"}.la-tasks:before{content:"\f0ae"}.la-taxi:before{content:"\f1ba"}.la-teamspeak:before{content:"\f4f9"}.la-teeth:before{content:"\f62e"}.la-teeth-open:before{content:"\f62f"}.la-telegram:before{content:"\f2c6"}.la-telegram-plane:before{content:"\f3fe"}.la-temperature-high:before{content:"\f769"}.la-temperature-low:before{content:"\f76b"}.la-tencent-weibo:before{content:"\f1d5"}.la-tenge:before{content:"\f7d7"}.la-terminal:before{content:"\f120"}.la-text-height:before{content:"\f034"}.la-text-width:before{content:"\f035"}.la-th:before{content:"\f00a"}.la-th-large:before{content:"\f009"}.la-th-list:before{content:"\f00b"}.la-the-red-yeti:before{content:"\f69d"}.la-theater-masks:before{content:"\f630"}.la-themeco:before{content:"\f5c6"}.la-themeisle:before{content:"\f2b2"}.la-thermometer:before{content:"\f491"}.la-thermometer-empty:before{content:"\f2cb"}.la-thermometer-full:before{content:"\f2c7"}.la-thermometer-half:before{content:"\f2c9"}.la-thermometer-quarter:before{content:"\f2ca"}.la-thermometer-three-quarters:before{content:"\f2c8"}.la-think-peaks:before{content:"\f731"}.la-thumbs-down:before{content:"\f165"}.la-thumbs-up:before{content:"\f164"}.la-thumbtack:before{content:"\f08d"}.la-ticket-alt:before{content:"\f3ff"}.la-times:before{content:"\f00d"}.la-times-circle:before{content:"\f057"}.la-tint:before{content:"\f043"}.la-tint-slash:before{content:"\f5c7"}.la-tired:before{content:"\f5c8"}.la-toggle-off:before{content:"\f204"}.la-toggle-on:before{content:"\f205"}.la-toilet:before{content:"\f7d8"}.la-toilet-paper:before{content:"\f71e"}.la-toolbox:before{content:"\f552"}.la-tools:before{content:"\f7d9"}.la-tooth:before{content:"\f5c9"}.la-torah:before{content:"\f6a0"}.la-torii-gate:before{content:"\f6a1"}.la-tractor:before{content:"\f722"}.la-trade-federation:before{content:"\f513"}.la-trademark:before{content:"\f25c"}.la-traffic-light:before{content:"\f637"}.la-train:before{content:"\f238"}.la-tram:before{content:"\f7da"}.la-transgender:before{content:"\f224"}.la-transgender-alt:before{content:"\f225"}.la-trash:before{content:"\f1f8"}.la-trash-alt:before{content:"\f2ed"}.la-trash-restore:before{content:"\f829"}.la-trash-restore-alt:before{content:"\f82a"}.la-tree:before{content:"\f1bb"}.la-trello:before{content:"\f181"}.la-tripadvisor:before{content:"\f262"}.la-trophy:before{content:"\f091"}.la-truck:before{content:"\f0d1"}.la-truck-loading:before{content:"\f4de"}.la-truck-monster:before{content:"\f63b"}.la-truck-moving:before{content:"\f4df"}.la-truck-pickup:before{content:"\f63c"}.la-tshirt:before{content:"\f553"}.la-tty:before{content:"\f1e4"}.la-tumblr:before{content:"\f173"}.la-tumblr-square:before{content:"\f174"}.la-tv:before{content:"\f26c"}.la-twitch:before{content:"\f1e8"}.la-twitter:before{content:"\f099"}.la-twitter-square:before{content:"\f081"}.la-typo3:before{content:"\f42b"}.la-uber:before{content:"\f402"}.la-ubuntu:before{content:"\f7df"}.la-uikit:before{content:"\f403"}.la-umbraco:before{content:"\f8e8"}.la-umbrella:before{content:"\f0e9"}.la-umbrella-beach:before{content:"\f5ca"}.la-underline:before{content:"\f0cd"}.la-undo:before{content:"\f0e2"}.la-undo-alt:before{content:"\f2ea"}.la-uniregistry:before{content:"\f404"}.la-universal-access:before{content:"\f29a"}.la-university:before{content:"\f19c"}.la-unlink:before{content:"\f127"}.la-unlock:before{content:"\f09c"}.la-unlock-alt:before{content:"\f13e"}.la-untappd:before{content:"\f405"}.la-upload:before{content:"\f093"}.la-ups:before{content:"\f7e0"}.la-usb:before{content:"\f287"}.la-user:before{content:"\f007"}.la-user-alt:before{content:"\f406"}.la-user-alt-slash:before{content:"\f4fa"}.la-user-astronaut:before{content:"\f4fb"}.la-user-check:before{content:"\f4fc"}.la-user-circle:before{content:"\f2bd"}.la-user-clock:before{content:"\f4fd"}.la-user-cog:before{content:"\f4fe"}.la-user-edit:before{content:"\f4ff"}.la-user-friends:before{content:"\f500"}.la-user-graduate:before{content:"\f501"}.la-user-injured:before{content:"\f728"}.la-user-lock:before{content:"\f502"}.la-user-md:before{content:"\f0f0"}.la-user-minus:before{content:"\f503"}.la-user-ninja:before{content:"\f504"}.la-user-nurse:before{content:"\f82f"}.la-user-plus:before{content:"\f234"}.la-user-secret:before{content:"\f21b"}.la-user-shield:before{content:"\f505"}.la-user-slash:before{content:"\f506"}.la-user-tag:before{content:"\f507"}.la-user-tie:before{content:"\f508"}.la-user-times:before{content:"\f235"}.la-users:before{content:"\f0c0"}.la-users-cog:before{content:"\f509"}.la-usps:before{content:"\f7e1"}.la-ussunnah:before{content:"\f407"}.la-utensil-spoon:before{content:"\f2e5"}.la-utensils:before{content:"\f2e7"}.la-vaadin:before{content:"\f408"}.la-vector-square:before{content:"\f5cb"}.la-venus:before{content:"\f221"}.la-venus-double:before{content:"\f226"}.la-venus-mars:before{content:"\f228"}.la-viacoin:before{content:"\f237"}.la-viadeo:before{content:"\f2a9"}.la-viadeo-square:before{content:"\f2aa"}.la-vial:before{content:"\f492"}.la-vials:before{content:"\f493"}.la-viber:before{content:"\f409"}.la-video:before{content:"\f03d"}.la-video-slash:before{content:"\f4e2"}.la-vihara:before{content:"\f6a7"}.la-vimeo:before{content:"\f40a"}.la-vimeo-square:before{content:"\f194"}.la-vimeo-v:before{content:"\f27d"}.la-vine:before{content:"\f1ca"}.la-vk:before{content:"\f189"}.la-vnv:before{content:"\f40b"}.la-voicemail:before{content:"\f897"}.la-volleyball-ball:before{content:"\f45f"}.la-volume-down:before{content:"\f027"}.la-volume-mute:before{content:"\f6a9"}.la-volume-off:before{content:"\f026"}.la-volume-up:before{content:"\f028"}.la-vote-yea:before{content:"\f772"}.la-vr-cardboard:before{content:"\f729"}.la-vuejs:before{content:"\f41f"}.la-walking:before{content:"\f554"}.la-wallet:before{content:"\f555"}.la-warehouse:before{content:"\f494"}.la-water:before{content:"\f773"}.la-wave-square:before{content:"\f83e"}.la-waze:before{content:"\f83f"}.la-weebly:before{content:"\f5cc"}.la-weibo:before{content:"\f18a"}.la-weight:before{content:"\f496"}.la-weight-hanging:before{content:"\f5cd"}.la-weixin:before{content:"\f1d7"}.la-whatsapp:before{content:"\f232"}.la-whatsapp-square:before{content:"\f40c"}.la-wheelchair:before{content:"\f193"}.la-whmcs:before{content:"\f40d"}.la-wifi:before{content:"\f1eb"}.la-wikipedia-w:before{content:"\f266"}.la-wind:before{content:"\f72e"}.la-window-close:before{content:"\f410"}.la-window-maximize:before{content:"\f2d0"}.la-window-minimize:before{content:"\f2d1"}.la-window-restore:before{content:"\f2d2"}.la-windows:before{content:"\f17a"}.la-wine-bottle:before{content:"\f72f"}.la-wine-glass:before{content:"\f4e3"}.la-wine-glass-alt:before{content:"\f5ce"}.la-wix:before{content:"\f5cf"}.la-wizards-of-the-coast:before{content:"\f730"}.la-wolf-pack-battalion:before{content:"\f514"}.la-won-sign:before{content:"\f159"}.la-wordpress:before{content:"\f19a"}.la-wordpress-simple:before{content:"\f411"}.la-wpbeginner:before{content:"\f297"}.la-wpexplorer:before{content:"\f2de"}.la-wpforms:before{content:"\f298"}.la-wpressr:before{content:"\f3e4"}.la-wrench:before{content:"\f0ad"}.la-x-ray:before{content:"\f497"}.la-xbox:before{content:"\f412"}.la-xing:before{content:"\f168"}.la-xing-square:before{content:"\f169"}.la-y-combinator:before{content:"\f23b"}.la-yahoo:before{content:"\f19e"}.la-yammer:before{content:"\f840"}.la-yandex:before{content:"\f413"}.la-yandex-international:before{content:"\f414"}.la-yarn:before{content:"\f7e3"}.la-yelp:before{content:"\f1e9"}.la-yen-sign:before{content:"\f157"}.la-yin-yang:before{content:"\f6ad"}.la-yoast:before{content:"\f2b1"}.la-youtube:before{content:"\f167"}.la-youtube-square:before{content:"\f431"}.la-zhihu:before{content:"\f63f"}.sr-only{border:0;clip:rect(0,0,0,0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.sr-only-focusable:active,.sr-only-focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}@font-face{font-family:'Line Awesome Brands';font-style:normal;font-weight:400;font-display:auto;src:url(../fonts/la-brands-400.eot);src:url(../fonts/la-brands-400.eot?#iefix) format("embedded-opentype"),url(../fonts/la-brands-400.woff2) format("woff2"),url(../fonts/la-brands-400.woff) format("woff"),url(../fonts/la-brands-400.ttf) format("truetype"),url(../fonts/la-brands-400.svg#lineawesome) format("svg")}.lab{font-family:'Line Awesome Brands'}@font-face{font-family:'Line Awesome Free';font-style:normal;font-weight:400;font-display:auto;src:url(../fonts/la-regular-400.eot);src:url(../fonts/la-regular-400.eot?#iefix) format("embedded-opentype"),url(../fonts/la-regular-400.woff2) format("woff2"),url(../fonts/la-regular-400.woff) format("woff"),url(../fonts/la-regular-400.ttf) format("truetype"),url(../fonts/la-regular-400.svg#lineawesome) format("svg")}.lar{font-family:'Line Awesome Free';font-weight:400}@font-face{font-family:'Line Awesome Free';font-style:normal;font-weight:900;font-display:auto;src:url(../fonts/la-solid-900.eot);src:url(../fonts/la-solid-900.eot?#iefix) format("embedded-opentype"),url(../fonts/la-solid-900.woff2) format("woff2"),url(../fonts/la-solid-900.woff) format("woff"),url(../fonts/la-solid-900.ttf) format("truetype"),url(../fonts/la-solid-900.svg#lineawesome) format("svg")}.la,.las{font-family:'Line Awesome Free';font-weight:900}.la.la-glass:before{content:"\f000"}.la.la-meetup{font-family:'Line Awesome Brands';font-weight:400}.la.la-star-o{font-family:'Line Awesome Free';font-weight:400}.la.la-star-o:before{content:"\f005"}.la.la-remove:before{content:"\f00d"}.la.la-close:before{content:"\f00d"}.la.la-gear:before{content:"\f013"}.la.la-trash-o{font-family:'Line Awesome Free';font-weight:400}.la.la-trash-o:before{content:"\f2ed"}.la.la-file-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-o:before{content:"\f15b"}.la.la-clock-o{font-family:'Line Awesome Free';font-weight:400}.la.la-clock-o:before{content:"\f017"}.la.la-arrow-circle-o-down{font-family:'Line Awesome Free';font-weight:400}.la.la-arrow-circle-o-down:before{content:"\f358"}.la.la-arrow-circle-o-up{font-family:'Line Awesome Free';font-weight:400}.la.la-arrow-circle-o-up:before{content:"\f35b"}.la.la-play-circle-o{font-family:'Line Awesome Free';font-weight:400}.la.la-play-circle-o:before{content:"\f144"}.la.la-repeat:before{content:"\f01e"}.la.la-rotate-right:before{content:"\f01e"}.la.la-refresh:before{content:"\f021"}.la.la-list-alt{font-family:'Line Awesome Free';font-weight:400}.la.la-dedent:before{content:"\f03b"}.la.la-video-camera:before{content:"\f03d"}.la.la-picture-o{font-family:'Line Awesome Free';font-weight:400}.la.la-picture-o:before{content:"\f03e"}.la.la-photo{font-family:'Line Awesome Free';font-weight:400}.la.la-photo:before{content:"\f03e"}.la.la-image{font-family:'Line Awesome Free';font-weight:400}.la.la-image:before{content:"\f03e"}.la.la-pencil:before{content:"\f303"}.la.la-map-marker:before{content:"\f3c5"}.la.la-pencil-square-o{font-family:'Line Awesome Free';font-weight:400}.la.la-pencil-square-o:before{content:"\f044"}.la.la-share-square-o{font-family:'Line Awesome Free';font-weight:400}.la.la-share-square-o:before{content:"\f14d"}.la.la-check-square-o{font-family:'Line Awesome Free';font-weight:400}.la.la-check-square-o:before{content:"\f14a"}.la.la-arrows:before{content:"\f0b2"}.la.la-times-circle-o{font-family:'Line Awesome Free';font-weight:400}.la.la-times-circle-o:before{content:"\f057"}.la.la-check-circle-o{font-family:'Line Awesome Free';font-weight:400}.la.la-check-circle-o:before{content:"\f058"}.la.la-mail-forward:before{content:"\f064"}.la.la-eye{font-family:'Line Awesome Free';font-weight:400}.la.la-eye-slash{font-family:'Line Awesome Free';font-weight:400}.la.la-warning:before{content:"\f071"}.la.la-calendar:before{content:"\f073"}.la.la-arrows-v:before{content:"\f338"}.la.la-arrows-h:before{content:"\f337"}.la.la-bar-chart{font-family:'Line Awesome Free';font-weight:400}.la.la-bar-chart:before{content:"\f080"}.la.la-bar-chart-o{font-family:'Line Awesome Free';font-weight:400}.la.la-bar-chart-o:before{content:"\f080"}.la.la-twitter-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-facebook-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-gears:before{content:"\f085"}.la.la-thumbs-o-up{font-family:'Line Awesome Free';font-weight:400}.la.la-thumbs-o-up:before{content:"\f164"}.la.la-thumbs-o-down{font-family:'Line Awesome Free';font-weight:400}.la.la-thumbs-o-down:before{content:"\f165"}.la.la-heart-o{font-family:'Line Awesome Free';font-weight:400}.la.la-heart-o:before{content:"\f004"}.la.la-sign-out:before{content:"\f2f5"}.la.la-linkedin-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-linkedin-square:before{content:"\f08c"}.la.la-thumb-tack:before{content:"\f08d"}.la.la-external-link:before{content:"\f35d"}.la.la-sign-in:before{content:"\f2f6"}.la.la-github-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-lemon-o{font-family:'Line Awesome Free';font-weight:400}.la.la-lemon-o:before{content:"\f094"}.la.la-square-o{font-family:'Line Awesome Free';font-weight:400}.la.la-square-o:before{content:"\f0c8"}.la.la-bookmark-o{font-family:'Line Awesome Free';font-weight:400}.la.la-bookmark-o:before{content:"\f02e"}.la.la-twitter{font-family:'Line Awesome Brands';font-weight:400}.la.la-facebook{font-family:'Line Awesome Brands';font-weight:400}.la.la-facebook:before{content:"\f39e"}.la.la-facebook-f{font-family:'Line Awesome Brands';font-weight:400}.la.la-facebook-f:before{content:"\f39e"}.la.la-github{font-family:'Line Awesome Brands';font-weight:400}.la.la-credit-card{font-family:'Line Awesome Free';font-weight:400}.la.la-feed:before{content:"\f09e"}.la.la-hdd-o{font-family:'Line Awesome Free';font-weight:400}.la.la-hdd-o:before{content:"\f0a0"}.la.la-hand-o-right{font-family:'Line Awesome Free';font-weight:400}.la.la-hand-o-right:before{content:"\f0a4"}.la.la-hand-o-left{font-family:'Line Awesome Free';font-weight:400}.la.la-hand-o-left:before{content:"\f0a5"}.la.la-hand-o-up{font-family:'Line Awesome Free';font-weight:400}.la.la-hand-o-up:before{content:"\f0a6"}.la.la-hand-o-down{font-family:'Line Awesome Free';font-weight:400}.la.la-hand-o-down:before{content:"\f0a7"}.la.la-arrows-alt:before{content:"\f31e"}.la.la-group:before{content:"\f0c0"}.la.la-chain:before{content:"\f0c1"}.la.la-scissors:before{content:"\f0c4"}.la.la-files-o{font-family:'Line Awesome Free';font-weight:400}.la.la-files-o:before{content:"\f0c5"}.la.la-floppy-o{font-family:'Line Awesome Free';font-weight:400}.la.la-floppy-o:before{content:"\f0c7"}.la.la-navicon:before{content:"\f0c9"}.la.la-reorder:before{content:"\f0c9"}.la.la-pinterest{font-family:'Line Awesome Brands';font-weight:400}.la.la-pinterest-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-google-plus-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-google-plus{font-family:'Line Awesome Brands';font-weight:400}.la.la-google-plus:before{content:"\f0d5"}.la.la-money{font-family:'Line Awesome Free';font-weight:400}.la.la-money:before{content:"\f3d1"}.la.la-unsorted:before{content:"\f0dc"}.la.la-sort-desc:before{content:"\f0dd"}.la.la-sort-asc:before{content:"\f0de"}.la.la-linkedin{font-family:'Line Awesome Brands';font-weight:400}.la.la-linkedin:before{content:"\f0e1"}.la.la-rotate-left:before{content:"\f0e2"}.la.la-legal:before{content:"\f0e3"}.la.la-tachometer:before{content:"\f3fd"}.la.la-dashboard:before{content:"\f3fd"}.la.la-comment-o{font-family:'Line Awesome Free';font-weight:400}.la.la-comment-o:before{content:"\f075"}.la.la-comments-o{font-family:'Line Awesome Free';font-weight:400}.la.la-comments-o:before{content:"\f086"}.la.la-flash:before{content:"\f0e7"}.la.la-clipboard{font-family:'Line Awesome Free';font-weight:400}.la.la-paste{font-family:'Line Awesome Free';font-weight:400}.la.la-paste:before{content:"\f328"}.la.la-lightbulb-o{font-family:'Line Awesome Free';font-weight:400}.la.la-lightbulb-o:before{content:"\f0eb"}.la.la-exchange:before{content:"\f362"}.la.la-cloud-download:before{content:"\f381"}.la.la-cloud-upload:before{content:"\f382"}.la.la-bell-o{font-family:'Line Awesome Free';font-weight:400}.la.la-bell-o:before{content:"\f0f3"}.la.la-cutlery:before{content:"\f2e7"}.la.la-file-text-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-text-o:before{content:"\f15c"}.la.la-building-o{font-family:'Line Awesome Free';font-weight:400}.la.la-building-o:before{content:"\f1ad"}.la.la-hospital-o{font-family:'Line Awesome Free';font-weight:400}.la.la-hospital-o:before{content:"\f0f8"}.la.la-tablet:before{content:"\f3fa"}.la.la-mobile:before{content:"\f3cd"}.la.la-mobile-phone:before{content:"\f3cd"}.la.la-circle-o{font-family:'Line Awesome Free';font-weight:400}.la.la-circle-o:before{content:"\f111"}.la.la-mail-reply:before{content:"\f3e5"}.la.la-github-alt{font-family:'Line Awesome Brands';font-weight:400}.la.la-folder-o{font-family:'Line Awesome Free';font-weight:400}.la.la-folder-o:before{content:"\f07b"}.la.la-folder-open-o{font-family:'Line Awesome Free';font-weight:400}.la.la-folder-open-o:before{content:"\f07c"}.la.la-smile-o{font-family:'Line Awesome Free';font-weight:400}.la.la-smile-o:before{content:"\f118"}.la.la-frown-o{font-family:'Line Awesome Free';font-weight:400}.la.la-frown-o:before{content:"\f119"}.la.la-meh-o{font-family:'Line Awesome Free';font-weight:400}.la.la-meh-o:before{content:"\f11a"}.la.la-keyboard-o{font-family:'Line Awesome Free';font-weight:400}.la.la-keyboard-o:before{content:"\f11c"}.la.la-flag-o{font-family:'Line Awesome Free';font-weight:400}.la.la-flag-o:before{content:"\f024"}.la.la-mail-reply-all:before{content:"\f122"}.la.la-star-half-o{font-family:'Line Awesome Free';font-weight:400}.la.la-star-half-o:before{content:"\f089"}.la.la-star-half-empty{font-family:'Line Awesome Free';font-weight:400}.la.la-star-half-empty:before{content:"\f089"}.la.la-star-half-full{font-family:'Line Awesome Free';font-weight:400}.la.la-star-half-full:before{content:"\f089"}.la.la-code-fork:before{content:"\f126"}.la.la-chain-broken:before{content:"\f127"}.la.la-shield:before{content:"\f3ed"}.la.la-calendar-o{font-family:'Line Awesome Free';font-weight:400}.la.la-calendar-o:before{content:"\f133"}.la.la-maxcdn{font-family:'Line Awesome Brands';font-weight:400}.la.la-html5{font-family:'Line Awesome Brands';font-weight:400}.la.la-css3{font-family:'Line Awesome Brands';font-weight:400}.la.la-ticket:before{content:"\f3ff"}.la.la-minus-square-o{font-family:'Line Awesome Free';font-weight:400}.la.la-minus-square-o:before{content:"\f146"}.la.la-level-up:before{content:"\f3bf"}.la.la-level-down:before{content:"\f3be"}.la.la-pencil-square:before{content:"\f14b"}.la.la-external-link-square:before{content:"\f360"}.la.la-compass{font-family:'Line Awesome Free';font-weight:400}.la.la-caret-square-o-down{font-family:'Line Awesome Free';font-weight:400}.la.la-caret-square-o-down:before{content:"\f150"}.la.la-toggle-down{font-family:'Line Awesome Free';font-weight:400}.la.la-toggle-down:before{content:"\f150"}.la.la-caret-square-o-up{font-family:'Line Awesome Free';font-weight:400}.la.la-caret-square-o-up:before{content:"\f151"}.la.la-toggle-up{font-family:'Line Awesome Free';font-weight:400}.la.la-toggle-up:before{content:"\f151"}.la.la-caret-square-o-right{font-family:'Line Awesome Free';font-weight:400}.la.la-caret-square-o-right:before{content:"\f152"}.la.la-toggle-right{font-family:'Line Awesome Free';font-weight:400}.la.la-toggle-right:before{content:"\f152"}.la.la-eur:before{content:"\f153"}.la.la-euro:before{content:"\f153"}.la.la-gbp:before{content:"\f154"}.la.la-usd:before{content:"\f155"}.la.la-dollar:before{content:"\f155"}.la.la-inr:before{content:"\f156"}.la.la-rupee:before{content:"\f156"}.la.la-jpy:before{content:"\f157"}.la.la-cny:before{content:"\f157"}.la.la-rmb:before{content:"\f157"}.la.la-yen:before{content:"\f157"}.la.la-rub:before{content:"\f158"}.la.la-ruble:before{content:"\f158"}.la.la-rouble:before{content:"\f158"}.la.la-krw:before{content:"\f159"}.la.la-won:before{content:"\f159"}.la.la-btc{font-family:'Line Awesome Brands';font-weight:400}.la.la-bitcoin{font-family:'Line Awesome Brands';font-weight:400}.la.la-bitcoin:before{content:"\f15a"}.la.la-file-text:before{content:"\f15c"}.la.la-sort-alpha-asc:before{content:"\f15d"}.la.la-sort-alpha-desc:before{content:"\f881"}.la.la-sort-amount-asc:before{content:"\f160"}.la.la-sort-amount-desc:before{content:"\f884"}.la.la-sort-numeric-asc:before{content:"\f162"}.la.la-sort-numeric-desc:before{content:"\f886"}.la.la-youtube-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-youtube{font-family:'Line Awesome Brands';font-weight:400}.la.la-xing{font-family:'Line Awesome Brands';font-weight:400}.la.la-xing-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-youtube-play{font-family:'Line Awesome Brands';font-weight:400}.la.la-youtube-play:before{content:"\f167"}.la.la-dropbox{font-family:'Line Awesome Brands';font-weight:400}.la.la-stack-overflow{font-family:'Line Awesome Brands';font-weight:400}.la.la-instagram{font-family:'Line Awesome Brands';font-weight:400}.la.la-flickr{font-family:'Line Awesome Brands';font-weight:400}.la.la-adn{font-family:'Line Awesome Brands';font-weight:400}.la.la-bitbucket{font-family:'Line Awesome Brands';font-weight:400}.la.la-bitbucket-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-bitbucket-square:before{content:"\f171"}.la.la-tumblr{font-family:'Line Awesome Brands';font-weight:400}.la.la-tumblr-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-long-arrow-down:before{content:"\f309"}.la.la-long-arrow-up:before{content:"\f30c"}.la.la-long-arrow-left:before{content:"\f30a"}.la.la-long-arrow-right:before{content:"\f30b"}.la.la-apple{font-family:'Line Awesome Brands';font-weight:400}.la.la-windows{font-family:'Line Awesome Brands';font-weight:400}.la.la-android{font-family:'Line Awesome Brands';font-weight:400}.la.la-linux{font-family:'Line Awesome Brands';font-weight:400}.la.la-dribbble{font-family:'Line Awesome Brands';font-weight:400}.la.la-skype{font-family:'Line Awesome Brands';font-weight:400}.la.la-foursquare{font-family:'Line Awesome Brands';font-weight:400}.la.la-trello{font-family:'Line Awesome Brands';font-weight:400}.la.la-gratipay{font-family:'Line Awesome Brands';font-weight:400}.la.la-gittip{font-family:'Line Awesome Brands';font-weight:400}.la.la-gittip:before{content:"\f184"}.la.la-sun-o{font-family:'Line Awesome Free';font-weight:400}.la.la-sun-o:before{content:"\f185"}.la.la-moon-o{font-family:'Line Awesome Free';font-weight:400}.la.la-moon-o:before{content:"\f186"}.la.la-vk{font-family:'Line Awesome Brands';font-weight:400}.la.la-weibo{font-family:'Line Awesome Brands';font-weight:400}.la.la-renren{font-family:'Line Awesome Brands';font-weight:400}.la.la-pagelines{font-family:'Line Awesome Brands';font-weight:400}.la.la-stack-exchange{font-family:'Line Awesome Brands';font-weight:400}.la.la-arrow-circle-o-right{font-family:'Line Awesome Free';font-weight:400}.la.la-arrow-circle-o-right:before{content:"\f35a"}.la.la-arrow-circle-o-left{font-family:'Line Awesome Free';font-weight:400}.la.la-arrow-circle-o-left:before{content:"\f359"}.la.la-caret-square-o-left{font-family:'Line Awesome Free';font-weight:400}.la.la-caret-square-o-left:before{content:"\f191"}.la.la-toggle-left{font-family:'Line Awesome Free';font-weight:400}.la.la-toggle-left:before{content:"\f191"}.la.la-dot-circle-o{font-family:'Line Awesome Free';font-weight:400}.la.la-dot-circle-o:before{content:"\f192"}.la.la-vimeo-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-try:before{content:"\f195"}.la.la-turkish-lira:before{content:"\f195"}.la.la-plus-square-o{font-family:'Line Awesome Free';font-weight:400}.la.la-plus-square-o:before{content:"\f0fe"}.la.la-slack{font-family:'Line Awesome Brands';font-weight:400}.la.la-wordpress{font-family:'Line Awesome Brands';font-weight:400}.la.la-openid{font-family:'Line Awesome Brands';font-weight:400}.la.la-institution:before{content:"\f19c"}.la.la-bank:before{content:"\f19c"}.la.la-mortar-board:before{content:"\f19d"}.la.la-yahoo{font-family:'Line Awesome Brands';font-weight:400}.la.la-google{font-family:'Line Awesome Brands';font-weight:400}.la.la-reddit{font-family:'Line Awesome Brands';font-weight:400}.la.la-reddit-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-stumbleupon-circle{font-family:'Line Awesome Brands';font-weight:400}.la.la-stumbleupon{font-family:'Line Awesome Brands';font-weight:400}.la.la-delicious{font-family:'Line Awesome Brands';font-weight:400}.la.la-digg{font-family:'Line Awesome Brands';font-weight:400}.la.la-pied-piper-pp{font-family:'Line Awesome Brands';font-weight:400}.la.la-pied-piper-alt{font-family:'Line Awesome Brands';font-weight:400}.la.la-drupal{font-family:'Line Awesome Brands';font-weight:400}.la.la-joomla{font-family:'Line Awesome Brands';font-weight:400}.la.la-spoon:before{content:"\f2e5"}.la.la-behance{font-family:'Line Awesome Brands';font-weight:400}.la.la-behance-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-steam{font-family:'Line Awesome Brands';font-weight:400}.la.la-steam-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-automobile:before{content:"\f1b9"}.la.la-cab:before{content:"\f1ba"}.la.la-envelope-o{font-family:'Line Awesome Free';font-weight:400}.la.la-envelope-o:before{content:"\f0e0"}.la.la-deviantart{font-family:'Line Awesome Brands';font-weight:400}.la.la-soundcloud{font-family:'Line Awesome Brands';font-weight:400}.la.la-file-pdf-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-pdf-o:before{content:"\f1c1"}.la.la-file-word-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-word-o:before{content:"\f1c2"}.la.la-file-excel-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-excel-o:before{content:"\f1c3"}.la.la-file-powerpoint-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-powerpoint-o:before{content:"\f1c4"}.la.la-file-image-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-image-o:before{content:"\f1c5"}.la.la-file-photo-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-photo-o:before{content:"\f1c5"}.la.la-file-picture-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-picture-o:before{content:"\f1c5"}.la.la-file-archive-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-archive-o:before{content:"\f1c6"}.la.la-file-zip-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-zip-o:before{content:"\f1c6"}.la.la-file-audio-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-audio-o:before{content:"\f1c7"}.la.la-file-sound-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-sound-o:before{content:"\f1c7"}.la.la-file-video-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-video-o:before{content:"\f1c8"}.la.la-file-movie-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-movie-o:before{content:"\f1c8"}.la.la-file-code-o{font-family:'Line Awesome Free';font-weight:400}.la.la-file-code-o:before{content:"\f1c9"}.la.la-vine{font-family:'Line Awesome Brands';font-weight:400}.la.la-codepen{font-family:'Line Awesome Brands';font-weight:400}.la.la-jsfiddle{font-family:'Line Awesome Brands';font-weight:400}.la.la-life-ring{font-family:'Line Awesome Free';font-weight:400}.la.la-life-bouy{font-family:'Line Awesome Free';font-weight:400}.la.la-life-bouy:before{content:"\f1cd"}.la.la-life-buoy{font-family:'Line Awesome Free';font-weight:400}.la.la-life-buoy:before{content:"\f1cd"}.la.la-life-saver{font-family:'Line Awesome Free';font-weight:400}.la.la-life-saver:before{content:"\f1cd"}.la.la-support{font-family:'Line Awesome Free';font-weight:400}.la.la-support:before{content:"\f1cd"}.la.la-circle-o-notch:before{content:"\f1ce"}.la.la-rebel{font-family:'Line Awesome Brands';font-weight:400}.la.la-ra{font-family:'Line Awesome Brands';font-weight:400}.la.la-ra:before{content:"\f1d0"}.la.la-resistance{font-family:'Line Awesome Brands';font-weight:400}.la.la-resistance:before{content:"\f1d0"}.la.la-empire{font-family:'Line Awesome Brands';font-weight:400}.la.la-ge{font-family:'Line Awesome Brands';font-weight:400}.la.la-ge:before{content:"\f1d1"}.la.la-git-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-git{font-family:'Line Awesome Brands';font-weight:400}.la.la-hacker-news{font-family:'Line Awesome Brands';font-weight:400}.la.la-y-combinator-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-y-combinator-square:before{content:"\f1d4"}.la.la-yc-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-yc-square:before{content:"\f1d4"}.la.la-tencent-weibo{font-family:'Line Awesome Brands';font-weight:400}.la.la-qq{font-family:'Line Awesome Brands';font-weight:400}.la.la-weixin{font-family:'Line Awesome Brands';font-weight:400}.la.la-wechat{font-family:'Line Awesome Brands';font-weight:400}.la.la-wechat:before{content:"\f1d7"}.la.la-send:before{content:"\f1d8"}.la.la-paper-plane-o{font-family:'Line Awesome Free';font-weight:400}.la.la-paper-plane-o:before{content:"\f1d8"}.la.la-send-o{font-family:'Line Awesome Free';font-weight:400}.la.la-send-o:before{content:"\f1d8"}.la.la-circle-thin{font-family:'Line Awesome Free';font-weight:400}.la.la-circle-thin:before{content:"\f111"}.la.la-header:before{content:"\f1dc"}.la.la-sliders:before{content:"\f1de"}.la.la-futbol-o{font-family:'Line Awesome Free';font-weight:400}.la.la-futbol-o:before{content:"\f1e3"}.la.la-soccer-ball-o{font-family:'Line Awesome Free';font-weight:400}.la.la-soccer-ball-o:before{content:"\f1e3"}.la.la-slideshare{font-family:'Line Awesome Brands';font-weight:400}.la.la-twitch{font-family:'Line Awesome Brands';font-weight:400}.la.la-yelp{font-family:'Line Awesome Brands';font-weight:400}.la.la-newspaper-o{font-family:'Line Awesome Free';font-weight:400}.la.la-newspaper-o:before{content:"\f1ea"}.la.la-paypal{font-family:'Line Awesome Brands';font-weight:400}.la.la-google-wallet{font-family:'Line Awesome Brands';font-weight:400}.la.la-cc-visa{font-family:'Line Awesome Brands';font-weight:400}.la.la-cc-mastercard{font-family:'Line Awesome Brands';font-weight:400}.la.la-cc-discover{font-family:'Line Awesome Brands';font-weight:400}.la.la-cc-amex{font-family:'Line Awesome Brands';font-weight:400}.la.la-cc-paypal{font-family:'Line Awesome Brands';font-weight:400}.la.la-cc-stripe{font-family:'Line Awesome Brands';font-weight:400}.la.la-bell-slash-o{font-family:'Line Awesome Free';font-weight:400}.la.la-bell-slash-o:before{content:"\f1f6"}.la.la-trash:before{content:"\f2ed"}.la.la-copyright{font-family:'Line Awesome Free';font-weight:400}.la.la-eyedropper:before{content:"\f1fb"}.la.la-area-chart:before{content:"\f1fe"}.la.la-pie-chart:before{content:"\f200"}.la.la-line-chart:before{content:"\f201"}.la.la-lastfm{font-family:'Line Awesome Brands';font-weight:400}.la.la-lastfm-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-ioxhost{font-family:'Line Awesome Brands';font-weight:400}.la.la-angellist{font-family:'Line Awesome Brands';font-weight:400}.la.la-cc{font-family:'Line Awesome Free';font-weight:400}.la.la-cc:before{content:"\f20a"}.la.la-ils:before{content:"\f20b"}.la.la-shekel:before{content:"\f20b"}.la.la-sheqel:before{content:"\f20b"}.la.la-meanpath{font-family:'Line Awesome Brands';font-weight:400}.la.la-meanpath:before{content:"\f2b4"}.la.la-buysellads{font-family:'Line Awesome Brands';font-weight:400}.la.la-connectdevelop{font-family:'Line Awesome Brands';font-weight:400}.la.la-dashcube{font-family:'Line Awesome Brands';font-weight:400}.la.la-forumbee{font-family:'Line Awesome Brands';font-weight:400}.la.la-leanpub{font-family:'Line Awesome Brands';font-weight:400}.la.la-sellsy{font-family:'Line Awesome Brands';font-weight:400}.la.la-shirtsinbulk{font-family:'Line Awesome Brands';font-weight:400}.la.la-simplybuilt{font-family:'Line Awesome Brands';font-weight:400}.la.la-skyatlas{font-family:'Line Awesome Brands';font-weight:400}.la.la-diamond{font-family:'Line Awesome Free';font-weight:400}.la.la-diamond:before{content:"\f3a5"}.la.la-intersex:before{content:"\f224"}.la.la-facebook-official{font-family:'Line Awesome Brands';font-weight:400}.la.la-facebook-official:before{content:"\f09a"}.la.la-pinterest-p{font-family:'Line Awesome Brands';font-weight:400}.la.la-whatsapp{font-family:'Line Awesome Brands';font-weight:400}.la.la-hotel:before{content:"\f236"}.la.la-viacoin{font-family:'Line Awesome Brands';font-weight:400}.la.la-medium{font-family:'Line Awesome Brands';font-weight:400}.la.la-y-combinator{font-family:'Line Awesome Brands';font-weight:400}.la.la-yc{font-family:'Line Awesome Brands';font-weight:400}.la.la-yc:before{content:"\f23b"}.la.la-optin-monster{font-family:'Line Awesome Brands';font-weight:400}.la.la-opencart{font-family:'Line Awesome Brands';font-weight:400}.la.la-expeditedssl{font-family:'Line Awesome Brands';font-weight:400}.la.la-battery-4:before{content:"\f240"}.la.la-battery:before{content:"\f240"}.la.la-battery-3:before{content:"\f241"}.la.la-battery-2:before{content:"\f242"}.la.la-battery-1:before{content:"\f243"}.la.la-battery-0:before{content:"\f244"}.la.la-object-group{font-family:'Line Awesome Free';font-weight:400}.la.la-object-ungroup{font-family:'Line Awesome Free';font-weight:400}.la.la-sticky-note-o{font-family:'Line Awesome Free';font-weight:400}.la.la-sticky-note-o:before{content:"\f249"}.la.la-cc-jcb{font-family:'Line Awesome Brands';font-weight:400}.la.la-cc-diners-club{font-family:'Line Awesome Brands';font-weight:400}.la.la-clone{font-family:'Line Awesome Free';font-weight:400}.la.la-hourglass-o{font-family:'Line Awesome Free';font-weight:400}.la.la-hourglass-o:before{content:"\f254"}.la.la-hourglass-1:before{content:"\f251"}.la.la-hourglass-2:before{content:"\f252"}.la.la-hourglass-3:before{content:"\f253"}.la.la-hand-rock-o{font-family:'Line Awesome Free';font-weight:400}.la.la-hand-rock-o:before{content:"\f255"}.la.la-hand-grab-o{font-family:'Line Awesome Free';font-weight:400}.la.la-hand-grab-o:before{content:"\f255"}.la.la-hand-paper-o{font-family:'Line Awesome Free';font-weight:400}.la.la-hand-paper-o:before{content:"\f256"}.la.la-hand-stop-o{font-family:'Line Awesome Free';font-weight:400}.la.la-hand-stop-o:before{content:"\f256"}.la.la-hand-scissors-o{font-family:'Line Awesome Free';font-weight:400}.la.la-hand-scissors-o:before{content:"\f257"}.la.la-hand-lizard-o{font-family:'Line Awesome Free';font-weight:400}.la.la-hand-lizard-o:before{content:"\f258"}.la.la-hand-spock-o{font-family:'Line Awesome Free';font-weight:400}.la.la-hand-spock-o:before{content:"\f259"}.la.la-hand-pointer-o{font-family:'Line Awesome Free';font-weight:400}.la.la-hand-pointer-o:before{content:"\f25a"}.la.la-hand-peace-o{font-family:'Line Awesome Free';font-weight:400}.la.la-hand-peace-o:before{content:"\f25b"}.la.la-registered{font-family:'Line Awesome Free';font-weight:400}.la.la-creative-commons{font-family:'Line Awesome Brands';font-weight:400}.la.la-gg{font-family:'Line Awesome Brands';font-weight:400}.la.la-gg-circle{font-family:'Line Awesome Brands';font-weight:400}.la.la-tripadvisor{font-family:'Line Awesome Brands';font-weight:400}.la.la-odnoklassniki{font-family:'Line Awesome Brands';font-weight:400}.la.la-odnoklassniki-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-get-pocket{font-family:'Line Awesome Brands';font-weight:400}.la.la-wikipedia-w{font-family:'Line Awesome Brands';font-weight:400}.la.la-safari{font-family:'Line Awesome Brands';font-weight:400}.la.la-chrome{font-family:'Line Awesome Brands';font-weight:400}.la.la-firefox{font-family:'Line Awesome Brands';font-weight:400}.la.la-opera{font-family:'Line Awesome Brands';font-weight:400}.la.la-internet-explorer{font-family:'Line Awesome Brands';font-weight:400}.la.la-television:before{content:"\f26c"}.la.la-contao{font-family:'Line Awesome Brands';font-weight:400}.la.la-500px{font-family:'Line Awesome Brands';font-weight:400}.la.la-amazon{font-family:'Line Awesome Brands';font-weight:400}.la.la-calendar-plus-o{font-family:'Line Awesome Free';font-weight:400}.la.la-calendar-plus-o:before{content:"\f271"}.la.la-calendar-minus-o{font-family:'Line Awesome Free';font-weight:400}.la.la-calendar-minus-o:before{content:"\f272"}.la.la-calendar-times-o{font-family:'Line Awesome Free';font-weight:400}.la.la-calendar-times-o:before{content:"\f273"}.la.la-calendar-check-o{font-family:'Line Awesome Free';font-weight:400}.la.la-calendar-check-o:before{content:"\f274"}.la.la-map-o{font-family:'Line Awesome Free';font-weight:400}.la.la-map-o:before{content:"\f279"}.la.la-commenting:before{content:"\f4ad"}.la.la-commenting-o{font-family:'Line Awesome Free';font-weight:400}.la.la-commenting-o:before{content:"\f4ad"}.la.la-houzz{font-family:'Line Awesome Brands';font-weight:400}.la.la-vimeo{font-family:'Line Awesome Brands';font-weight:400}.la.la-vimeo:before{content:"\f27d"}.la.la-black-tie{font-family:'Line Awesome Brands';font-weight:400}.la.la-fonticons{font-family:'Line Awesome Brands';font-weight:400}.la.la-reddit-alien{font-family:'Line Awesome Brands';font-weight:400}.la.la-edge{font-family:'Line Awesome Brands';font-weight:400}.la.la-credit-card-alt:before{content:"\f09d"}.la.la-codiepie{font-family:'Line Awesome Brands';font-weight:400}.la.la-modx{font-family:'Line Awesome Brands';font-weight:400}.la.la-fort-awesome{font-family:'Line Awesome Brands';font-weight:400}.la.la-usb{font-family:'Line Awesome Brands';font-weight:400}.la.la-product-hunt{font-family:'Line Awesome Brands';font-weight:400}.la.la-mixcloud{font-family:'Line Awesome Brands';font-weight:400}.la.la-scribd{font-family:'Line Awesome Brands';font-weight:400}.la.la-pause-circle-o{font-family:'Line Awesome Free';font-weight:400}.la.la-pause-circle-o:before{content:"\f28b"}.la.la-stop-circle-o{font-family:'Line Awesome Free';font-weight:400}.la.la-stop-circle-o:before{content:"\f28d"}.la.la-bluetooth{font-family:'Line Awesome Brands';font-weight:400}.la.la-bluetooth-b{font-family:'Line Awesome Brands';font-weight:400}.la.la-gitlab{font-family:'Line Awesome Brands';font-weight:400}.la.la-wpbeginner{font-family:'Line Awesome Brands';font-weight:400}.la.la-wpforms{font-family:'Line Awesome Brands';font-weight:400}.la.la-envira{font-family:'Line Awesome Brands';font-weight:400}.la.la-wheelchair-alt{font-family:'Line Awesome Brands';font-weight:400}.la.la-wheelchair-alt:before{content:"\f368"}.la.la-question-circle-o{font-family:'Line Awesome Free';font-weight:400}.la.la-question-circle-o:before{content:"\f059"}.la.la-volume-control-phone:before{content:"\f2a0"}.la.la-asl-interpreting:before{content:"\f2a3"}.la.la-deafness:before{content:"\f2a4"}.la.la-hard-of-hearing:before{content:"\f2a4"}.la.la-glide{font-family:'Line Awesome Brands';font-weight:400}.la.la-glide-g{font-family:'Line Awesome Brands';font-weight:400}.la.la-signing:before{content:"\f2a7"}.la.la-viadeo{font-family:'Line Awesome Brands';font-weight:400}.la.la-viadeo-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-snapchat{font-family:'Line Awesome Brands';font-weight:400}.la.la-snapchat-ghost{font-family:'Line Awesome Brands';font-weight:400}.la.la-snapchat-square{font-family:'Line Awesome Brands';font-weight:400}.la.la-pied-piper{font-family:'Line Awesome Brands';font-weight:400}.la.la-first-order{font-family:'Line Awesome Brands';font-weight:400}.la.la-yoast{font-family:'Line Awesome Brands';font-weight:400}.la.la-themeisle{font-family:'Line Awesome Brands';font-weight:400}.la.la-google-plus-official{font-family:'Line Awesome Brands';font-weight:400}.la.la-google-plus-official:before{content:"\f2b3"}.la.la-google-plus-circle{font-family:'Line Awesome Brands';font-weight:400}.la.la-google-plus-circle:before{content:"\f2b3"}.la.la-font-awesome{font-family:'Line Awesome Brands';font-weight:400}.la.la-fa{font-family:'Line Awesome Brands';font-weight:400}.la.la-fa:before{content:"\f2b4"}.la.la-handshake-o{font-family:'Line Awesome Free';font-weight:400}.la.la-handshake-o:before{content:"\f2b5"}.la.la-envelope-open-o{font-family:'Line Awesome Free';font-weight:400}.la.la-envelope-open-o:before{content:"\f2b6"}.la.la-linode{font-family:'Line Awesome Brands';font-weight:400}.la.la-address-book-o{font-family:'Line Awesome Free';font-weight:400}.la.la-address-book-o:before{content:"\f2b9"}.la.la-vcard:before{content:"\f2bb"}.la.la-address-card-o{font-family:'Line Awesome Free';font-weight:400}.la.la-address-card-o:before{content:"\f2bb"}.la.la-vcard-o{font-family:'Line Awesome Free';font-weight:400}.la.la-vcard-o:before{content:"\f2bb"}.la.la-user-circle-o{font-family:'Line Awesome Free';font-weight:400}.la.la-user-circle-o:before{content:"\f2bd"}.la.la-user-o{font-family:'Line Awesome Free';font-weight:400}.la.la-user-o:before{content:"\f007"}.la.la-id-badge{font-family:'Line Awesome Free';font-weight:400}.la.la-drivers-license:before{content:"\f2c2"}.la.la-id-card-o{font-family:'Line Awesome Free';font-weight:400}.la.la-id-card-o:before{content:"\f2c2"}.la.la-drivers-license-o{font-family:'Line Awesome Free';font-weight:400}.la.la-drivers-license-o:before{content:"\f2c2"}.la.la-quora{font-family:'Line Awesome Brands';font-weight:400}.la.la-free-code-camp{font-family:'Line Awesome Brands';font-weight:400}.la.la-telegram{font-family:'Line Awesome Brands';font-weight:400}.la.la-thermometer-4:before{content:"\f2c7"}.la.la-thermometer:before{content:"\f2c7"}.la.la-thermometer-3:before{content:"\f2c8"}.la.la-thermometer-2:before{content:"\f2c9"}.la.la-thermometer-1:before{content:"\f2ca"}.la.la-thermometer-0:before{content:"\f2cb"}.la.la-bathtub:before{content:"\f2cd"}.la.la-s15:before{content:"\f2cd"}.la.la-window-maximize{font-family:'Line Awesome Free';font-weight:400}.la.la-window-restore{font-family:'Line Awesome Free';font-weight:400}.la.la-times-rectangle:before{content:"\f410"}.la.la-window-close-o{font-family:'Line Awesome Free';font-weight:400}.la.la-window-close-o:before{content:"\f410"}.la.la-times-rectangle-o{font-family:'Line Awesome Free';font-weight:400}.la.la-times-rectangle-o:before{content:"\f410"}.la.la-bandcamp{font-family:'Line Awesome Brands';font-weight:400}.la.la-grav{font-family:'Line Awesome Brands';font-weight:400}.la.la-etsy{font-family:'Line Awesome Brands';font-weight:400}.la.la-imdb{font-family:'Line Awesome Brands';font-weight:400}.la.la-ravelry{font-family:'Line Awesome Brands';font-weight:400}.la.la-eercast{font-family:'Line Awesome Brands';font-weight:400}.la.la-eercast:before{content:"\f2da"}.la.la-snowflake-o{font-family:'Line Awesome Free';font-weight:400}.la.la-snowflake-o:before{content:"\f2dc"}.la.la-superpowers{font-family:'Line Awesome Brands';font-weight:400}.la.la-wpexplorer{font-family:'Line Awesome Brands';font-weight:400}.la.la-spotify{font-family:'Line Awesome Brands';font-weight:400}

@charset "UTF-8";
/*!
 * animate.css - https://animate.style/
 * Version - 4.1.0
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (c) 2020 Animate.css
 */
:root {
    --animate-duration: 1s;
    --animate-delay: 1s;
    --animate-repeat: 1;
}
.wow {
    -webkit-animation-duration: var(--animate-duration);
    animation-duration: var(--animate-duration);
    -webkit-animation-duration: var(--animate-duration);
    animation-duration: var(--animate-duration);
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
/* Custom Animation Start */
@keyframes play-button {
    0% {
        transform: translate(-50%, -50%) scale(1);
    }
    100% {
        transform: translate(-50%, -50%) scale(2.5);
        opacity: 0;
    }
}
/* Custom Animation Ends */
.wow.infinite {
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
}
.wow.repeat-1 {
    -webkit-animation-iteration-count: 1;
    animation-iteration-count: 1;
    -webkit-animation-iteration-count: var(--animate-repeat);
    animation-iteration-count: var(--animate-repeat);
}
.wow.repeat-2 {
    -webkit-animation-iteration-count: 2;
    animation-iteration-count: 2;
    -webkit-animation-iteration-count: calc(var(--animate-repeat) * 2);
    animation-iteration-count: calc(var(--animate-repeat) * 2);
}
.wow.repeat-3 {
    -webkit-animation-iteration-count: 3;
    animation-iteration-count: 3;
    -webkit-animation-iteration-count: calc(var(--animate-repeat) * 3);
    animation-iteration-count: calc(var(--animate-repeat) * 3);
}
.wow.delay-1s {
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
    -webkit-animation-delay: var(--animate-delay);
    animation-delay: var(--animate-delay);
}
.wow.delay-2s {
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
    -webkit-animation-delay: calc(var(--animate-delay) * 2);
    animation-delay: calc(var(--animate-delay) * 2);
}
.wow.delay-3s {
    -webkit-animation-delay: 3s;
    animation-delay: 3s;
    -webkit-animation-delay: calc(var(--animate-delay) * 3);
    animation-delay: calc(var(--animate-delay) * 3);
}
.wow.delay-4s {
    -webkit-animation-delay: 4s;
    animation-delay: 4s;
    -webkit-animation-delay: calc(var(--animate-delay) * 4);
    animation-delay: calc(var(--animate-delay) * 4);
}
.wow.delay-5s {
    -webkit-animation-delay: 5s;
    animation-delay: 5s;
    -webkit-animation-delay: calc(var(--animate-delay) * 5);
    animation-delay: calc(var(--animate-delay) * 5);
}
.wow.faster {
    -webkit-animation-duration: 0.5s;
    animation-duration: 0.5s;
    -webkit-animation-duration: calc(var(--animate-duration) / 2);
    animation-duration: calc(var(--animate-duration) / 2);
}
.wow.fast {
    -webkit-animation-duration: 0.8s;
    animation-duration: 0.8s;
    -webkit-animation-duration: calc(var(--animate-duration) * 0.8);
    animation-duration: calc(var(--animate-duration) * 0.8);
}
.wow.slow {
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-duration: calc(var(--animate-duration) * 2);
    animation-duration: calc(var(--animate-duration) * 2);
}
.wow.slower {
    -webkit-animation-duration: 3s;
    animation-duration: 3s;
    -webkit-animation-duration: calc(var(--animate-duration) * 3);
    animation-duration: calc(var(--animate-duration) * 3);
}
@media (prefers-reduced-motion: reduce), print {
    .wow {
        -webkit-animation-duration: 1ms !important;
        animation-duration: 1ms !important;
        -webkit-transition-duration: 1ms !important;
        transition-duration: 1ms !important;
        -webkit-animation-iteration-count: 1 !important;
        animation-iteration-count: 1 !important;
    }
    .wow[class*="Out"] {
        opacity: 0;
    }
}
@-webkit-keyframes bounce {
    0%,
    20%,
    53%,
    to {
        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    40%,
    43% {
        -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
        animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
        -webkit-transform: translate3d(0, -30px, 0) scaleY(1.1);
        transform: translate3d(0, -30px, 0) scaleY(1.1);
    }
    70% {
        -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
        animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
        -webkit-transform: translate3d(0, -15px, 0) scaleY(1.05);
        transform: translate3d(0, -15px, 0) scaleY(1.05);
    }
    80% {
        -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        -webkit-transform: translateZ(0) scaleY(0.95);
        transform: translateZ(0) scaleY(0.95);
    }
    90% {
        -webkit-transform: translate3d(0, -4px, 0) scaleY(1.02);
        transform: translate3d(0, -4px, 0) scaleY(1.02);
    }
}
@keyframes bounce {
    0%,
    20%,
    53%,
    to {
        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    40%,
    43% {
        -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
        animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
        -webkit-transform: translate3d(0, -30px, 0) scaleY(1.1);
        transform: translate3d(0, -30px, 0) scaleY(1.1);
    }
    70% {
        -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
        animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
        -webkit-transform: translate3d(0, -15px, 0) scaleY(1.05);
        transform: translate3d(0, -15px, 0) scaleY(1.05);
    }
    80% {
        -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        -webkit-transform: translateZ(0) scaleY(0.95);
        transform: translateZ(0) scaleY(0.95);
    }
    90% {
        -webkit-transform: translate3d(0, -4px, 0) scaleY(1.02);
        transform: translate3d(0, -4px, 0) scaleY(1.02);
    }
}
.bounce {
    -webkit-animation-name: bounce;
    animation-name: bounce;
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
}
@-webkit-keyframes flash {
    0%,
    50%,
    to {
        opacity: 1;
    }
    25%,
    75% {
        opacity: 0;
    }
}
@keyframes flash {
    0%,
    50%,
    to {
        opacity: 1;
    }
    25%,
    75% {
        opacity: 0;
    }
}
.flash {
    -webkit-animation-name: flash;
    animation-name: flash;
}
@-webkit-keyframes pulse {
    0% {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }
    50% {
        -webkit-transform: scale3d(1.05, 1.05, 1.05);
        transform: scale3d(1.05, 1.05, 1.05);
    }
    to {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }
}
@keyframes pulse {
    0% {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }
    50% {
        -webkit-transform: scale3d(1.05, 1.05, 1.05);
        transform: scale3d(1.05, 1.05, 1.05);
    }
    to {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }
}
.pulse {
    -webkit-animation-name: pulse;
    animation-name: pulse;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
}
@-webkit-keyframes rubberBand {
    0% {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }
    30% {
        -webkit-transform: scale3d(1.25, 0.75, 1);
        transform: scale3d(1.25, 0.75, 1);
    }
    40% {
        -webkit-transform: scale3d(0.75, 1.25, 1);
        transform: scale3d(0.75, 1.25, 1);
    }
    50% {
        -webkit-transform: scale3d(1.15, 0.85, 1);
        transform: scale3d(1.15, 0.85, 1);
    }
    65% {
        -webkit-transform: scale3d(0.95, 1.05, 1);
        transform: scale3d(0.95, 1.05, 1);
    }
    75% {
        -webkit-transform: scale3d(1.05, 0.95, 1);
        transform: scale3d(1.05, 0.95, 1);
    }
    to {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }
}
@keyframes rubberBand {
    0% {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }
    30% {
        -webkit-transform: scale3d(1.25, 0.75, 1);
        transform: scale3d(1.25, 0.75, 1);
    }
    40% {
        -webkit-transform: scale3d(0.75, 1.25, 1);
        transform: scale3d(0.75, 1.25, 1);
    }
    50% {
        -webkit-transform: scale3d(1.15, 0.85, 1);
        transform: scale3d(1.15, 0.85, 1);
    }
    65% {
        -webkit-transform: scale3d(0.95, 1.05, 1);
        transform: scale3d(0.95, 1.05, 1);
    }
    75% {
        -webkit-transform: scale3d(1.05, 0.95, 1);
        transform: scale3d(1.05, 0.95, 1);
    }
    to {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }
}
.rubberBand {
    -webkit-animation-name: rubberBand;
    animation-name: rubberBand;
}
@-webkit-keyframes shakeX {
    0%,
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    10%,
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: translate3d(-10px, 0, 0);
        transform: translate3d(-10px, 0, 0);
    }
    20%,
    40%,
    60%,
    80% {
        -webkit-transform: translate3d(10px, 0, 0);
        transform: translate3d(10px, 0, 0);
    }
}
@keyframes shakeX {
    0%,
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    10%,
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: translate3d(-10px, 0, 0);
        transform: translate3d(-10px, 0, 0);
    }
    20%,
    40%,
    60%,
    80% {
        -webkit-transform: translate3d(10px, 0, 0);
        transform: translate3d(10px, 0, 0);
    }
}
.shakeX {
    -webkit-animation-name: shakeX;
    animation-name: shakeX;
}
@-webkit-keyframes shakeY {
    0%,
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    10%,
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: translate3d(0, -10px, 0);
        transform: translate3d(0, -10px, 0);
    }
    20%,
    40%,
    60%,
    80% {
        -webkit-transform: translate3d(0, 10px, 0);
        transform: translate3d(0, 10px, 0);
    }
}
@keyframes shakeY {
    0%,
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    10%,
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: translate3d(0, -10px, 0);
        transform: translate3d(0, -10px, 0);
    }
    20%,
    40%,
    60%,
    80% {
        -webkit-transform: translate3d(0, 10px, 0);
        transform: translate3d(0, 10px, 0);
    }
}
.shakeY {
    -webkit-animation-name: shakeY;
    animation-name: shakeY;
}
@-webkit-keyframes headShake {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    6.5% {
        -webkit-transform: translateX(-6px) rotateY(-9deg);
        transform: translateX(-6px) rotateY(-9deg);
    }
    18.5% {
        -webkit-transform: translateX(5px) rotateY(7deg);
        transform: translateX(5px) rotateY(7deg);
    }
    31.5% {
        -webkit-transform: translateX(-3px) rotateY(-5deg);
        transform: translateX(-3px) rotateY(-5deg);
    }
    43.5% {
        -webkit-transform: translateX(2px) rotateY(3deg);
        transform: translateX(2px) rotateY(3deg);
    }
    50% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}
@keyframes headShake {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    6.5% {
        -webkit-transform: translateX(-6px) rotateY(-9deg);
        transform: translateX(-6px) rotateY(-9deg);
    }
    18.5% {
        -webkit-transform: translateX(5px) rotateY(7deg);
        transform: translateX(5px) rotateY(7deg);
    }
    31.5% {
        -webkit-transform: translateX(-3px) rotateY(-5deg);
        transform: translateX(-3px) rotateY(-5deg);
    }
    43.5% {
        -webkit-transform: translateX(2px) rotateY(3deg);
        transform: translateX(2px) rotateY(3deg);
    }
    50% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}
.headShake {
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    -webkit-animation-name: headShake;
    animation-name: headShake;
}
@-webkit-keyframes swing {
    20% {
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg);
    }
    40% {
        -webkit-transform: rotate(-10deg);
        transform: rotate(-10deg);
    }
    60% {
        -webkit-transform: rotate(5deg);
        transform: rotate(5deg);
    }
    80% {
        -webkit-transform: rotate(-5deg);
        transform: rotate(-5deg);
    }
    to {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
}
@keyframes swing {
    20% {
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg);
    }
    40% {
        -webkit-transform: rotate(-10deg);
        transform: rotate(-10deg);
    }
    60% {
        -webkit-transform: rotate(5deg);
        transform: rotate(5deg);
    }
    80% {
        -webkit-transform: rotate(-5deg);
        transform: rotate(-5deg);
    }
    to {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
}
.swing {
    -webkit-transform-origin: top center;
    transform-origin: top center;
    -webkit-animation-name: swing;
    animation-name: swing;
}
@-webkit-keyframes tada {
    0% {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }
    10%,
    20% {
        -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate(-3deg);
        transform: scale3d(0.9, 0.9, 0.9) rotate(-3deg);
    }
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
        transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
    }
    40%,
    60%,
    80% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
        transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
    }
    to {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }
}
@keyframes tada {
    0% {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }
    10%,
    20% {
        -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate(-3deg);
        transform: scale3d(0.9, 0.9, 0.9) rotate(-3deg);
    }
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
        transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
    }
    40%,
    60%,
    80% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
        transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
    }
    to {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }
}
.tada {
    -webkit-animation-name: tada;
    animation-name: tada;
}
@-webkit-keyframes wobble {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    15% {
        -webkit-transform: translate3d(-25%, 0, 0) rotate(-5deg);
        transform: translate3d(-25%, 0, 0) rotate(-5deg);
    }
    30% {
        -webkit-transform: translate3d(20%, 0, 0) rotate(3deg);
        transform: translate3d(20%, 0, 0) rotate(3deg);
    }
    45% {
        -webkit-transform: translate3d(-15%, 0, 0) rotate(-3deg);
        transform: translate3d(-15%, 0, 0) rotate(-3deg);
    }
    60% {
        -webkit-transform: translate3d(10%, 0, 0) rotate(2deg);
        transform: translate3d(10%, 0, 0) rotate(2deg);
    }
    75% {
        -webkit-transform: translate3d(-5%, 0, 0) rotate(-1deg);
        transform: translate3d(-5%, 0, 0) rotate(-1deg);
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes wobble {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    15% {
        -webkit-transform: translate3d(-25%, 0, 0) rotate(-5deg);
        transform: translate3d(-25%, 0, 0) rotate(-5deg);
    }
    30% {
        -webkit-transform: translate3d(20%, 0, 0) rotate(3deg);
        transform: translate3d(20%, 0, 0) rotate(3deg);
    }
    45% {
        -webkit-transform: translate3d(-15%, 0, 0) rotate(-3deg);
        transform: translate3d(-15%, 0, 0) rotate(-3deg);
    }
    60% {
        -webkit-transform: translate3d(10%, 0, 0) rotate(2deg);
        transform: translate3d(10%, 0, 0) rotate(2deg);
    }
    75% {
        -webkit-transform: translate3d(-5%, 0, 0) rotate(-1deg);
        transform: translate3d(-5%, 0, 0) rotate(-1deg);
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.wobble {
    -webkit-animation-name: wobble;
    animation-name: wobble;
}
@-webkit-keyframes jello {
    0%,
    11.1%,
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    22.2% {
        -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
        transform: skewX(-12.5deg) skewY(-12.5deg);
    }
    33.3% {
        -webkit-transform: skewX(6.25deg) skewY(6.25deg);
        transform: skewX(6.25deg) skewY(6.25deg);
    }
    44.4% {
        -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
        transform: skewX(-3.125deg) skewY(-3.125deg);
    }
    55.5% {
        -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
        transform: skewX(1.5625deg) skewY(1.5625deg);
    }
    66.6% {
        -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
        transform: skewX(-0.78125deg) skewY(-0.78125deg);
    }
    77.7% {
        -webkit-transform: skewX(0.390625deg) skewY(0.390625deg);
        transform: skewX(0.390625deg) skewY(0.390625deg);
    }
    88.8% {
        -webkit-transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
        transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
    }
}
@keyframes jello {
    0%,
    11.1%,
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    22.2% {
        -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
        transform: skewX(-12.5deg) skewY(-12.5deg);
    }
    33.3% {
        -webkit-transform: skewX(6.25deg) skewY(6.25deg);
        transform: skewX(6.25deg) skewY(6.25deg);
    }
    44.4% {
        -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
        transform: skewX(-3.125deg) skewY(-3.125deg);
    }
    55.5% {
        -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
        transform: skewX(1.5625deg) skewY(1.5625deg);
    }
    66.6% {
        -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
        transform: skewX(-0.78125deg) skewY(-0.78125deg);
    }
    77.7% {
        -webkit-transform: skewX(0.390625deg) skewY(0.390625deg);
        transform: skewX(0.390625deg) skewY(0.390625deg);
    }
    88.8% {
        -webkit-transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
        transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
    }
}
.jello {
    -webkit-animation-name: jello;
    animation-name: jello;
    -webkit-transform-origin: center;
    transform-origin: center;
}
@-webkit-keyframes heartBeat {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    14% {
        -webkit-transform: scale(1.3);
        transform: scale(1.3);
    }
    28% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    42% {
        -webkit-transform: scale(1.3);
        transform: scale(1.3);
    }
    70% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}
@keyframes heartBeat {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    14% {
        -webkit-transform: scale(1.3);
        transform: scale(1.3);
    }
    28% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    42% {
        -webkit-transform: scale(1.3);
        transform: scale(1.3);
    }
    70% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}
.heartBeat {
    -webkit-animation-name: heartBeat;
    animation-name: heartBeat;
    -webkit-animation-duration: 1.3s;
    animation-duration: 1.3s;
    -webkit-animation-duration: calc(var(--animate-duration) * 1.3);
    animation-duration: calc(var(--animate-duration) * 1.3);
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
}
@-webkit-keyframes backInDown {
    0% {
        -webkit-transform: translateY(-1200px) scale(0.7);
        transform: translateY(-1200px) scale(0.7);
        opacity: 0.7;
    }
    80% {
        -webkit-transform: translateY(0) scale(0.7);
        transform: translateY(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
}
@keyframes backInDown {
    0% {
        -webkit-transform: translateY(-1200px) scale(0.7);
        transform: translateY(-1200px) scale(0.7);
        opacity: 0.7;
    }
    80% {
        -webkit-transform: translateY(0) scale(0.7);
        transform: translateY(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
}
.backInDown {
    -webkit-animation-name: backInDown;
    animation-name: backInDown;
}
@-webkit-keyframes backInLeft {
    0% {
        -webkit-transform: translateX(-2000px) scale(0.7);
        transform: translateX(-2000px) scale(0.7);
        opacity: 0.7;
    }
    80% {
        -webkit-transform: translateX(0) scale(0.7);
        transform: translateX(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
}
@keyframes backInLeft {
    0% {
        -webkit-transform: translateX(-2000px) scale(0.7);
        transform: translateX(-2000px) scale(0.7);
        opacity: 0.7;
    }
    80% {
        -webkit-transform: translateX(0) scale(0.7);
        transform: translateX(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
}
.backInLeft {
    -webkit-animation-name: backInLeft;
    animation-name: backInLeft;
}
@-webkit-keyframes backInRight {
    0% {
        -webkit-transform: translateX(2000px) scale(0.7);
        transform: translateX(2000px) scale(0.7);
        opacity: 0.7;
    }
    80% {
        -webkit-transform: translateX(0) scale(0.7);
        transform: translateX(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
}
@keyframes backInRight {
    0% {
        -webkit-transform: translateX(2000px) scale(0.7);
        transform: translateX(2000px) scale(0.7);
        opacity: 0.7;
    }
    80% {
        -webkit-transform: translateX(0) scale(0.7);
        transform: translateX(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
}
.backInRight {
    -webkit-animation-name: backInRight;
    animation-name: backInRight;
}
@-webkit-keyframes backInUp {
    0% {
        -webkit-transform: translateY(1200px) scale(0.7);
        transform: translateY(1200px) scale(0.7);
        opacity: 0.7;
    }
    80% {
        -webkit-transform: translateY(0) scale(0.7);
        transform: translateY(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
}
@keyframes backInUp {
    0% {
        -webkit-transform: translateY(1200px) scale(0.7);
        transform: translateY(1200px) scale(0.7);
        opacity: 0.7;
    }
    80% {
        -webkit-transform: translateY(0) scale(0.7);
        transform: translateY(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
}
.backInUp {
    -webkit-animation-name: backInUp;
    animation-name: backInUp;
}
@-webkit-keyframes backOutDown {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
    20% {
        -webkit-transform: translateY(0) scale(0.7);
        transform: translateY(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: translateY(700px) scale(0.7);
        transform: translateY(700px) scale(0.7);
        opacity: 0.7;
    }
}
@keyframes backOutDown {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
    20% {
        -webkit-transform: translateY(0) scale(0.7);
        transform: translateY(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: translateY(700px) scale(0.7);
        transform: translateY(700px) scale(0.7);
        opacity: 0.7;
    }
}
.backOutDown {
    -webkit-animation-name: backOutDown;
    animation-name: backOutDown;
}
@-webkit-keyframes backOutLeft {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
    20% {
        -webkit-transform: translateX(0) scale(0.7);
        transform: translateX(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: translateX(-2000px) scale(0.7);
        transform: translateX(-2000px) scale(0.7);
        opacity: 0.7;
    }
}
@keyframes backOutLeft {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
    20% {
        -webkit-transform: translateX(0) scale(0.7);
        transform: translateX(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: translateX(-2000px) scale(0.7);
        transform: translateX(-2000px) scale(0.7);
        opacity: 0.7;
    }
}
.backOutLeft {
    -webkit-animation-name: backOutLeft;
    animation-name: backOutLeft;
}
@-webkit-keyframes backOutRight {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
    20% {
        -webkit-transform: translateX(0) scale(0.7);
        transform: translateX(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: translateX(2000px) scale(0.7);
        transform: translateX(2000px) scale(0.7);
        opacity: 0.7;
    }
}
@keyframes backOutRight {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
    20% {
        -webkit-transform: translateX(0) scale(0.7);
        transform: translateX(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: translateX(2000px) scale(0.7);
        transform: translateX(2000px) scale(0.7);
        opacity: 0.7;
    }
}
.backOutRight {
    -webkit-animation-name: backOutRight;
    animation-name: backOutRight;
}
@-webkit-keyframes backOutUp {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
    20% {
        -webkit-transform: translateY(0) scale(0.7);
        transform: translateY(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: translateY(-700px) scale(0.7);
        transform: translateY(-700px) scale(0.7);
        opacity: 0.7;
    }
}
@keyframes backOutUp {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }
    20% {
        -webkit-transform: translateY(0) scale(0.7);
        transform: translateY(0) scale(0.7);
        opacity: 0.7;
    }
    to {
        -webkit-transform: translateY(-700px) scale(0.7);
        transform: translateY(-700px) scale(0.7);
        opacity: 0.7;
    }
}
.backOutUp {
    -webkit-animation-name: backOutUp;
    animation-name: backOutUp;
}
@-webkit-keyframes bounceIn {
    0%,
    20%,
    40%,
    60%,
    80%,
    to {
        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    }
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.3, 0.3, 0.3);
        transform: scale3d(0.3, 0.3, 0.3);
    }
    20% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
    }
    40% {
        -webkit-transform: scale3d(0.9, 0.9, 0.9);
        transform: scale3d(0.9, 0.9, 0.9);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale3d(1.03, 1.03, 1.03);
        transform: scale3d(1.03, 1.03, 1.03);
    }
    80% {
        -webkit-transform: scale3d(0.97, 0.97, 0.97);
        transform: scale3d(0.97, 0.97, 0.97);
    }
    to {
        opacity: 1;
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }
}
@keyframes bounceIn {
    0%,
    20%,
    40%,
    60%,
    80%,
    to {
        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    }
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.3, 0.3, 0.3);
        transform: scale3d(0.3, 0.3, 0.3);
    }
    20% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
    }
    40% {
        -webkit-transform: scale3d(0.9, 0.9, 0.9);
        transform: scale3d(0.9, 0.9, 0.9);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale3d(1.03, 1.03, 1.03);
        transform: scale3d(1.03, 1.03, 1.03);
    }
    80% {
        -webkit-transform: scale3d(0.97, 0.97, 0.97);
        transform: scale3d(0.97, 0.97, 0.97);
    }
    to {
        opacity: 1;
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }
}
.bounceIn {
    -webkit-animation-duration: 0.75s;
    animation-duration: 0.75s;
    -webkit-animation-duration: calc(var(--animate-duration) * 0.75);
    animation-duration: calc(var(--animate-duration) * 0.75);
    -webkit-animation-name: bounceIn;
    animation-name: bounceIn;
}
@-webkit-keyframes bounceInDown {
    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    }
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -3000px, 0) scaleY(3);
        transform: translate3d(0, -3000px, 0) scaleY(3);
    }
    60% {
        opacity: 1;
        -webkit-transform: translate3d(0, 25px, 0) scaleY(0.9);
        transform: translate3d(0, 25px, 0) scaleY(0.9);
    }
    75% {
        -webkit-transform: translate3d(0, -10px, 0) scaleY(0.95);
        transform: translate3d(0, -10px, 0) scaleY(0.95);
    }
    90% {
        -webkit-transform: translate3d(0, 5px, 0) scaleY(0.985);
        transform: translate3d(0, 5px, 0) scaleY(0.985);
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes bounceInDown {
    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    }
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -3000px, 0) scaleY(3);
        transform: translate3d(0, -3000px, 0) scaleY(3);
    }
    60% {
        opacity: 1;
        -webkit-transform: translate3d(0, 25px, 0) scaleY(0.9);
        transform: translate3d(0, 25px, 0) scaleY(0.9);
    }
    75% {
        -webkit-transform: translate3d(0, -10px, 0) scaleY(0.95);
        transform: translate3d(0, -10px, 0) scaleY(0.95);
    }
    90% {
        -webkit-transform: translate3d(0, 5px, 0) scaleY(0.985);
        transform: translate3d(0, 5px, 0) scaleY(0.985);
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.bounceInDown {
    -webkit-animation-name: bounceInDown;
    animation-name: bounceInDown;
}
@-webkit-keyframes bounceInLeft {
    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    }
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-3000px, 0, 0) scaleX(3);
        transform: translate3d(-3000px, 0, 0) scaleX(3);
    }
    60% {
        opacity: 1;
        -webkit-transform: translate3d(25px, 0, 0) scaleX(1);
        transform: translate3d(25px, 0, 0) scaleX(1);
    }
    75% {
        -webkit-transform: translate3d(-10px, 0, 0) scaleX(0.98);
        transform: translate3d(-10px, 0, 0) scaleX(0.98);
    }
    90% {
        -webkit-transform: translate3d(5px, 0, 0) scaleX(0.995);
        transform: translate3d(5px, 0, 0) scaleX(0.995);
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes bounceInLeft {
    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    }
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-3000px, 0, 0) scaleX(3);
        transform: translate3d(-3000px, 0, 0) scaleX(3);
    }
    60% {
        opacity: 1;
        -webkit-transform: translate3d(25px, 0, 0) scaleX(1);
        transform: translate3d(25px, 0, 0) scaleX(1);
    }
    75% {
        -webkit-transform: translate3d(-10px, 0, 0) scaleX(0.98);
        transform: translate3d(-10px, 0, 0) scaleX(0.98);
    }
    90% {
        -webkit-transform: translate3d(5px, 0, 0) scaleX(0.995);
        transform: translate3d(5px, 0, 0) scaleX(0.995);
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.bounceInLeft {
    -webkit-animation-name: bounceInLeft;
    animation-name: bounceInLeft;
}
@-webkit-keyframes bounceInRight {
    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    }
    0% {
        opacity: 0;
        -webkit-transform: translate3d(3000px, 0, 0) scaleX(3);
        transform: translate3d(3000px, 0, 0) scaleX(3);
    }
    60% {
        opacity: 1;
        -webkit-transform: translate3d(-25px, 0, 0) scaleX(1);
        transform: translate3d(-25px, 0, 0) scaleX(1);
    }
    75% {
        -webkit-transform: translate3d(10px, 0, 0) scaleX(0.98);
        transform: translate3d(10px, 0, 0) scaleX(0.98);
    }
    90% {
        -webkit-transform: translate3d(-5px, 0, 0) scaleX(0.995);
        transform: translate3d(-5px, 0, 0) scaleX(0.995);
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes bounceInRight {
    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    }
    0% {
        opacity: 0;
        -webkit-transform: translate3d(3000px, 0, 0) scaleX(3);
        transform: translate3d(3000px, 0, 0) scaleX(3);
    }
    60% {
        opacity: 1;
        -webkit-transform: translate3d(-25px, 0, 0) scaleX(1);
        transform: translate3d(-25px, 0, 0) scaleX(1);
    }
    75% {
        -webkit-transform: translate3d(10px, 0, 0) scaleX(0.98);
        transform: translate3d(10px, 0, 0) scaleX(0.98);
    }
    90% {
        -webkit-transform: translate3d(-5px, 0, 0) scaleX(0.995);
        transform: translate3d(-5px, 0, 0) scaleX(0.995);
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.bounceInRight {
    -webkit-animation-name: bounceInRight;
    animation-name: bounceInRight;
}
@-webkit-keyframes bounceInUp {
    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    }
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, 3000px, 0) scaleY(5);
        transform: translate3d(0, 3000px, 0) scaleY(5);
    }
    60% {
        opacity: 1;
        -webkit-transform: translate3d(0, -20px, 0) scaleY(0.9);
        transform: translate3d(0, -20px, 0) scaleY(0.9);
    }
    75% {
        -webkit-transform: translate3d(0, 10px, 0) scaleY(0.95);
        transform: translate3d(0, 10px, 0) scaleY(0.95);
    }
    90% {
        -webkit-transform: translate3d(0, -5px, 0) scaleY(0.985);
        transform: translate3d(0, -5px, 0) scaleY(0.985);
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes bounceInUp {
    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    }
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, 3000px, 0) scaleY(5);
        transform: translate3d(0, 3000px, 0) scaleY(5);
    }
    60% {
        opacity: 1;
        -webkit-transform: translate3d(0, -20px, 0) scaleY(0.9);
        transform: translate3d(0, -20px, 0) scaleY(0.9);
    }
    75% {
        -webkit-transform: translate3d(0, 10px, 0) scaleY(0.95);
        transform: translate3d(0, 10px, 0) scaleY(0.95);
    }
    90% {
        -webkit-transform: translate3d(0, -5px, 0) scaleY(0.985);
        transform: translate3d(0, -5px, 0) scaleY(0.985);
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.bounceInUp {
    -webkit-animation-name: bounceInUp;
    animation-name: bounceInUp;
}
@-webkit-keyframes bounceOut {
    20% {
        -webkit-transform: scale3d(0.9, 0.9, 0.9);
        transform: scale3d(0.9, 0.9, 0.9);
    }
    50%,
    55% {
        opacity: 1;
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
    }
    to {
        opacity: 0;
        -webkit-transform: scale3d(0.3, 0.3, 0.3);
        transform: scale3d(0.3, 0.3, 0.3);
    }
}
@keyframes bounceOut {
    20% {
        -webkit-transform: scale3d(0.9, 0.9, 0.9);
        transform: scale3d(0.9, 0.9, 0.9);
    }
    50%,
    55% {
        opacity: 1;
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
    }
    to {
        opacity: 0;
        -webkit-transform: scale3d(0.3, 0.3, 0.3);
        transform: scale3d(0.3, 0.3, 0.3);
    }
}
.bounceOut {
    -webkit-animation-duration: 0.75s;
    animation-duration: 0.75s;
    -webkit-animation-duration: calc(var(--animate-duration) * 0.75);
    animation-duration: calc(var(--animate-duration) * 0.75);
    -webkit-animation-name: bounceOut;
    animation-name: bounceOut;
}
@-webkit-keyframes bounceOutDown {
    20% {
        -webkit-transform: translate3d(0, 10px, 0) scaleY(0.985);
        transform: translate3d(0, 10px, 0) scaleY(0.985);
    }
    40%,
    45% {
        opacity: 1;
        -webkit-transform: translate3d(0, -20px, 0) scaleY(0.9);
        transform: translate3d(0, -20px, 0) scaleY(0.9);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(0, 2000px, 0) scaleY(3);
        transform: translate3d(0, 2000px, 0) scaleY(3);
    }
}
@keyframes bounceOutDown {
    20% {
        -webkit-transform: translate3d(0, 10px, 0) scaleY(0.985);
        transform: translate3d(0, 10px, 0) scaleY(0.985);
    }
    40%,
    45% {
        opacity: 1;
        -webkit-transform: translate3d(0, -20px, 0) scaleY(0.9);
        transform: translate3d(0, -20px, 0) scaleY(0.9);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(0, 2000px, 0) scaleY(3);
        transform: translate3d(0, 2000px, 0) scaleY(3);
    }
}
.bounceOutDown {
    -webkit-animation-name: bounceOutDown;
    animation-name: bounceOutDown;
}
@-webkit-keyframes bounceOutLeft {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(20px, 0, 0) scaleX(0.9);
        transform: translate3d(20px, 0, 0) scaleX(0.9);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0) scaleX(2);
        transform: translate3d(-2000px, 0, 0) scaleX(2);
    }
}
@keyframes bounceOutLeft {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(20px, 0, 0) scaleX(0.9);
        transform: translate3d(20px, 0, 0) scaleX(0.9);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0) scaleX(2);
        transform: translate3d(-2000px, 0, 0) scaleX(2);
    }
}
.bounceOutLeft {
    -webkit-animation-name: bounceOutLeft;
    animation-name: bounceOutLeft;
}
@-webkit-keyframes bounceOutRight {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(-20px, 0, 0) scaleX(0.9);
        transform: translate3d(-20px, 0, 0) scaleX(0.9);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px, 0, 0) scaleX(2);
        transform: translate3d(2000px, 0, 0) scaleX(2);
    }
}
@keyframes bounceOutRight {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(-20px, 0, 0) scaleX(0.9);
        transform: translate3d(-20px, 0, 0) scaleX(0.9);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px, 0, 0) scaleX(2);
        transform: translate3d(2000px, 0, 0) scaleX(2);
    }
}
.bounceOutRight {
    -webkit-animation-name: bounceOutRight;
    animation-name: bounceOutRight;
}
@-webkit-keyframes bounceOutUp {
    20% {
        -webkit-transform: translate3d(0, -10px, 0) scaleY(0.985);
        transform: translate3d(0, -10px, 0) scaleY(0.985);
    }
    40%,
    45% {
        opacity: 1;
        -webkit-transform: translate3d(0, 20px, 0) scaleY(0.9);
        transform: translate3d(0, 20px, 0) scaleY(0.9);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(0, -2000px, 0) scaleY(3);
        transform: translate3d(0, -2000px, 0) scaleY(3);
    }
}
@keyframes bounceOutUp {
    20% {
        -webkit-transform: translate3d(0, -10px, 0) scaleY(0.985);
        transform: translate3d(0, -10px, 0) scaleY(0.985);
    }
    40%,
    45% {
        opacity: 1;
        -webkit-transform: translate3d(0, 20px, 0) scaleY(0.9);
        transform: translate3d(0, 20px, 0) scaleY(0.9);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(0, -2000px, 0) scaleY(3);
        transform: translate3d(0, -2000px, 0) scaleY(3);
    }
}
.bounceOutUp {
    -webkit-animation-name: bounceOutUp;
    animation-name: bounceOutUp;
}
@-webkit-keyframes fadeIn {
    0% {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}
@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}
.fadeIn {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn;
}
@-webkit-keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
}
@-webkit-keyframes fadeInDownBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -2000px, 0);
        transform: translate3d(0, -2000px, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes fadeInDownBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -2000px, 0);
        transform: translate3d(0, -2000px, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.fadeInDownBig {
    -webkit-animation-name: fadeInDownBig;
    animation-name: fadeInDownBig;
}
@-webkit-keyframes fadeInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes fadeInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.fadeInLeft {
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft;
}
@-webkit-keyframes fadeInLeftBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0);
        transform: translate3d(-2000px, 0, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes fadeInLeftBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0);
        transform: translate3d(-2000px, 0, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.fadeInLeftBig {
    -webkit-animation-name: fadeInLeftBig;
    animation-name: fadeInLeftBig;
}
@-webkit-keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.fadeInRight {
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight;
}
@-webkit-keyframes fadeInRightBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(2000px, 0, 0);
        transform: translate3d(2000px, 0, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes fadeInRightBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(2000px, 0, 0);
        transform: translate3d(2000px, 0, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.fadeInRightBig {
    -webkit-animation-name: fadeInRightBig;
    animation-name: fadeInRightBig;
}
@-webkit-keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp;
}
@-webkit-keyframes fadeInUpBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, 2000px, 0);
        transform: translate3d(0, 2000px, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes fadeInUpBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, 2000px, 0);
        transform: translate3d(0, 2000px, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.fadeInUpBig {
    -webkit-animation-name: fadeInUpBig;
    animation-name: fadeInUpBig;
}
@-webkit-keyframes fadeInTopLeft {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, -100%, 0);
        transform: translate3d(-100%, -100%, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes fadeInTopLeft {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, -100%, 0);
        transform: translate3d(-100%, -100%, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.fadeInTopLeft {
    -webkit-animation-name: fadeInTopLeft;
    animation-name: fadeInTopLeft;
}
@-webkit-keyframes fadeInTopRight {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(100%, -100%, 0);
        transform: translate3d(100%, -100%, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes fadeInTopRight {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(100%, -100%, 0);
        transform: translate3d(100%, -100%, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.fadeInTopRight {
    -webkit-animation-name: fadeInTopRight;
    animation-name: fadeInTopRight;
}
@-webkit-keyframes fadeInBottomLeft {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 100%, 0);
        transform: translate3d(-100%, 100%, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes fadeInBottomLeft {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 100%, 0);
        transform: translate3d(-100%, 100%, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.fadeInBottomLeft {
    -webkit-animation-name: fadeInBottomLeft;
    animation-name: fadeInBottomLeft;
}
@-webkit-keyframes fadeInBottomRight {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(100%, 100%, 0);
        transform: translate3d(100%, 100%, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes fadeInBottomRight {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(100%, 100%, 0);
        transform: translate3d(100%, 100%, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.fadeInBottomRight {
    -webkit-animation-name: fadeInBottomRight;
    animation-name: fadeInBottomRight;
}
@-webkit-keyframes fadeOut {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
    }
}
@keyframes fadeOut {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
    }
}
.fadeOut {
    -webkit-animation-name: fadeOut;
    animation-name: fadeOut;
}
@-webkit-keyframes fadeOutDown {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
    }
}
@keyframes fadeOutDown {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
    }
}
.fadeOutDown {
    -webkit-animation-name: fadeOutDown;
    animation-name: fadeOutDown;
}
@-webkit-keyframes fadeOutDownBig {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(0, 2000px, 0);
        transform: translate3d(0, 2000px, 0);
    }
}
@keyframes fadeOutDownBig {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(0, 2000px, 0);
        transform: translate3d(0, 2000px, 0);
    }
}
.fadeOutDownBig {
    -webkit-animation-name: fadeOutDownBig;
    animation-name: fadeOutDownBig;
}
@-webkit-keyframes fadeOutLeft {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
    }
}
@keyframes fadeOutLeft {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
    }
}
.fadeOutLeft {
    -webkit-animation-name: fadeOutLeft;
    animation-name: fadeOutLeft;
}
@-webkit-keyframes fadeOutLeftBig {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0);
        transform: translate3d(-2000px, 0, 0);
    }
}
@keyframes fadeOutLeftBig {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0);
        transform: translate3d(-2000px, 0, 0);
    }
}
.fadeOutLeftBig {
    -webkit-animation-name: fadeOutLeftBig;
    animation-name: fadeOutLeftBig;
}
@-webkit-keyframes fadeOutRight {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
    }
}
@keyframes fadeOutRight {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
    }
}
.fadeOutRight {
    -webkit-animation-name: fadeOutRight;
    animation-name: fadeOutRight;
}
@-webkit-keyframes fadeOutRightBig {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px, 0, 0);
        transform: translate3d(2000px, 0, 0);
    }
}
@keyframes fadeOutRightBig {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px, 0, 0);
        transform: translate3d(2000px, 0, 0);
    }
}
.fadeOutRightBig {
    -webkit-animation-name: fadeOutRightBig;
    animation-name: fadeOutRightBig;
}
@-webkit-keyframes fadeOutUp {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }
}
@keyframes fadeOutUp {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }
}
.fadeOutUp {
    -webkit-animation-name: fadeOutUp;
    animation-name: fadeOutUp;
}
@-webkit-keyframes fadeOutUpBig {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(0, -2000px, 0);
        transform: translate3d(0, -2000px, 0);
    }
}
@keyframes fadeOutUpBig {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(0, -2000px, 0);
        transform: translate3d(0, -2000px, 0);
    }
}
.fadeOutUpBig {
    -webkit-animation-name: fadeOutUpBig;
    animation-name: fadeOutUpBig;
}
@-webkit-keyframes fadeOutTopLeft {
    0% {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(-100%, -100%, 0);
        transform: translate3d(-100%, -100%, 0);
    }
}
@keyframes fadeOutTopLeft {
    0% {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(-100%, -100%, 0);
        transform: translate3d(-100%, -100%, 0);
    }
}
.fadeOutTopLeft {
    -webkit-animation-name: fadeOutTopLeft;
    animation-name: fadeOutTopLeft;
}
@-webkit-keyframes fadeOutTopRight {
    0% {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(100%, -100%, 0);
        transform: translate3d(100%, -100%, 0);
    }
}
@keyframes fadeOutTopRight {
    0% {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(100%, -100%, 0);
        transform: translate3d(100%, -100%, 0);
    }
}
.fadeOutTopRight {
    -webkit-animation-name: fadeOutTopRight;
    animation-name: fadeOutTopRight;
}
@-webkit-keyframes fadeOutBottomRight {
    0% {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(100%, 100%, 0);
        transform: translate3d(100%, 100%, 0);
    }
}
@keyframes fadeOutBottomRight {
    0% {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(100%, 100%, 0);
        transform: translate3d(100%, 100%, 0);
    }
}
.fadeOutBottomRight {
    -webkit-animation-name: fadeOutBottomRight;
    animation-name: fadeOutBottomRight;
}
@-webkit-keyframes fadeOutBottomLeft {
    0% {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 100%, 0);
        transform: translate3d(-100%, 100%, 0);
    }
}
@keyframes fadeOutBottomLeft {
    0% {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 100%, 0);
        transform: translate3d(-100%, 100%, 0);
    }
}
.fadeOutBottomLeft {
    -webkit-animation-name: fadeOutBottomLeft;
    animation-name: fadeOutBottomLeft;
}
@-webkit-keyframes flip {
    0% {
        -webkit-transform: perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);
        transform: perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
    40% {
        -webkit-transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);
        transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
    50% {
        -webkit-transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);
        transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
    80% {
        -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translateZ(0) rotateY(0deg);
        transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translateZ(0) rotateY(0deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
    to {
        -webkit-transform: perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);
        transform: perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
}
@keyframes flip {
    0% {
        -webkit-transform: perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);
        transform: perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
    40% {
        -webkit-transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);
        transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
    50% {
        -webkit-transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);
        transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
    80% {
        -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translateZ(0) rotateY(0deg);
        transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translateZ(0) rotateY(0deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
    to {
        -webkit-transform: perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);
        transform: perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
}
.wow.flip {
    -webkit-backface-visibility: visible;
    backface-visibility: visible;
    -webkit-animation-name: flip;
    animation-name: flip;
}
@-webkit-keyframes flipInX {
    0% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
        opacity: 0;
    }
    40% {
        -webkit-transform: perspective(400px) rotateX(-20deg);
        transform: perspective(400px) rotateX(-20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
    60% {
        -webkit-transform: perspective(400px) rotateX(10deg);
        transform: perspective(400px) rotateX(10deg);
        opacity: 1;
    }
    80% {
        -webkit-transform: perspective(400px) rotateX(-5deg);
        transform: perspective(400px) rotateX(-5deg);
    }
    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px);
    }
}
@keyframes flipInX {
    0% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
        opacity: 0;
    }
    40% {
        -webkit-transform: perspective(400px) rotateX(-20deg);
        transform: perspective(400px) rotateX(-20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
    60% {
        -webkit-transform: perspective(400px) rotateX(10deg);
        transform: perspective(400px) rotateX(10deg);
        opacity: 1;
    }
    80% {
        -webkit-transform: perspective(400px) rotateX(-5deg);
        transform: perspective(400px) rotateX(-5deg);
    }
    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px);
    }
}
.flipInX {
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipInX;
    animation-name: flipInX;
}
@-webkit-keyframes flipInY {
    0% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
        opacity: 0;
    }
    40% {
        -webkit-transform: perspective(400px) rotateY(-20deg);
        transform: perspective(400px) rotateY(-20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
    60% {
        -webkit-transform: perspective(400px) rotateY(10deg);
        transform: perspective(400px) rotateY(10deg);
        opacity: 1;
    }
    80% {
        -webkit-transform: perspective(400px) rotateY(-5deg);
        transform: perspective(400px) rotateY(-5deg);
    }
    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px);
    }
}
@keyframes flipInY {
    0% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
        opacity: 0;
    }
    40% {
        -webkit-transform: perspective(400px) rotateY(-20deg);
        transform: perspective(400px) rotateY(-20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
    60% {
        -webkit-transform: perspective(400px) rotateY(10deg);
        transform: perspective(400px) rotateY(10deg);
        opacity: 1;
    }
    80% {
        -webkit-transform: perspective(400px) rotateY(-5deg);
        transform: perspective(400px) rotateY(-5deg);
    }
    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px);
    }
}
.flipInY {
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipInY;
    animation-name: flipInY;
}
@-webkit-keyframes flipOutX {
    0% {
        -webkit-transform: perspective(400px);
        transform: perspective(400px);
    }
    30% {
        -webkit-transform: perspective(400px) rotateX(-20deg);
        transform: perspective(400px) rotateX(-20deg);
        opacity: 1;
    }
    to {
        -webkit-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }
}
@keyframes flipOutX {
    0% {
        -webkit-transform: perspective(400px);
        transform: perspective(400px);
    }
    30% {
        -webkit-transform: perspective(400px) rotateX(-20deg);
        transform: perspective(400px) rotateX(-20deg);
        opacity: 1;
    }
    to {
        -webkit-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }
}
.flipOutX {
    -webkit-animation-duration: 0.75s;
    animation-duration: 0.75s;
    -webkit-animation-duration: calc(var(--animate-duration) * 0.75);
    animation-duration: calc(var(--animate-duration) * 0.75);
    -webkit-animation-name: flipOutX;
    animation-name: flipOutX;
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
}
@-webkit-keyframes flipOutY {
    0% {
        -webkit-transform: perspective(400px);
        transform: perspective(400px);
    }
    30% {
        -webkit-transform: perspective(400px) rotateY(-15deg);
        transform: perspective(400px) rotateY(-15deg);
        opacity: 1;
    }
    to {
        -webkit-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }
}
@keyframes flipOutY {
    0% {
        -webkit-transform: perspective(400px);
        transform: perspective(400px);
    }
    30% {
        -webkit-transform: perspective(400px) rotateY(-15deg);
        transform: perspective(400px) rotateY(-15deg);
        opacity: 1;
    }
    to {
        -webkit-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }
}
.flipOutY {
    -webkit-animation-duration: 0.75s;
    animation-duration: 0.75s;
    -webkit-animation-duration: calc(var(--animate-duration) * 0.75);
    animation-duration: calc(var(--animate-duration) * 0.75);
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipOutY;
    animation-name: flipOutY;
}
@-webkit-keyframes lightSpeedInRight {
    0% {
        -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
        transform: translate3d(100%, 0, 0) skewX(-30deg);
        opacity: 0;
    }
    60% {
        -webkit-transform: skewX(20deg);
        transform: skewX(20deg);
        opacity: 1;
    }
    80% {
        -webkit-transform: skewX(-5deg);
        transform: skewX(-5deg);
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes lightSpeedInRight {
    0% {
        -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
        transform: translate3d(100%, 0, 0) skewX(-30deg);
        opacity: 0;
    }
    60% {
        -webkit-transform: skewX(20deg);
        transform: skewX(20deg);
        opacity: 1;
    }
    80% {
        -webkit-transform: skewX(-5deg);
        transform: skewX(-5deg);
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.lightSpeedInRight {
    -webkit-animation-name: lightSpeedInRight;
    animation-name: lightSpeedInRight;
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
}
@-webkit-keyframes lightSpeedInLeft {
    0% {
        -webkit-transform: translate3d(-100%, 0, 0) skewX(30deg);
        transform: translate3d(-100%, 0, 0) skewX(30deg);
        opacity: 0;
    }
    60% {
        -webkit-transform: skewX(-20deg);
        transform: skewX(-20deg);
        opacity: 1;
    }
    80% {
        -webkit-transform: skewX(5deg);
        transform: skewX(5deg);
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes lightSpeedInLeft {
    0% {
        -webkit-transform: translate3d(-100%, 0, 0) skewX(30deg);
        transform: translate3d(-100%, 0, 0) skewX(30deg);
        opacity: 0;
    }
    60% {
        -webkit-transform: skewX(-20deg);
        transform: skewX(-20deg);
        opacity: 1;
    }
    80% {
        -webkit-transform: skewX(5deg);
        transform: skewX(5deg);
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.lightSpeedInLeft {
    -webkit-animation-name: lightSpeedInLeft;
    animation-name: lightSpeedInLeft;
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
}
@-webkit-keyframes lightSpeedOutRight {
    0% {
        opacity: 1;
    }
    to {
        -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
        transform: translate3d(100%, 0, 0) skewX(30deg);
        opacity: 0;
    }
}
@keyframes lightSpeedOutRight {
    0% {
        opacity: 1;
    }
    to {
        -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
        transform: translate3d(100%, 0, 0) skewX(30deg);
        opacity: 0;
    }
}
.lightSpeedOutRight {
    -webkit-animation-name: lightSpeedOutRight;
    animation-name: lightSpeedOutRight;
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
}
@-webkit-keyframes lightSpeedOutLeft {
    0% {
        opacity: 1;
    }
    to {
        -webkit-transform: translate3d(-100%, 0, 0) skewX(-30deg);
        transform: translate3d(-100%, 0, 0) skewX(-30deg);
        opacity: 0;
    }
}
@keyframes lightSpeedOutLeft {
    0% {
        opacity: 1;
    }
    to {
        -webkit-transform: translate3d(-100%, 0, 0) skewX(-30deg);
        transform: translate3d(-100%, 0, 0) skewX(-30deg);
        opacity: 0;
    }
}
.lightSpeedOutLeft {
    -webkit-animation-name: lightSpeedOutLeft;
    animation-name: lightSpeedOutLeft;
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
}
@-webkit-keyframes rotateIn {
    0% {
        -webkit-transform: rotate(-200deg);
        transform: rotate(-200deg);
        opacity: 0;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        opacity: 1;
    }
}
@keyframes rotateIn {
    0% {
        -webkit-transform: rotate(-200deg);
        transform: rotate(-200deg);
        opacity: 0;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        opacity: 1;
    }
}
.rotateIn {
    -webkit-animation-name: rotateIn;
    animation-name: rotateIn;
    -webkit-transform-origin: center;
    transform-origin: center;
}
@-webkit-keyframes rotateInDownLeft {
    0% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        opacity: 0;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        opacity: 1;
    }
}
@keyframes rotateInDownLeft {
    0% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        opacity: 0;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        opacity: 1;
    }
}
.rotateInDownLeft {
    -webkit-animation-name: rotateInDownLeft;
    animation-name: rotateInDownLeft;
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
}
@-webkit-keyframes rotateInDownRight {
    0% {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        opacity: 0;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        opacity: 1;
    }
}
@keyframes rotateInDownRight {
    0% {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        opacity: 0;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        opacity: 1;
    }
}
.rotateInDownRight {
    -webkit-animation-name: rotateInDownRight;
    animation-name: rotateInDownRight;
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
}
@-webkit-keyframes rotateInUpLeft {
    0% {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        opacity: 0;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        opacity: 1;
    }
}
@keyframes rotateInUpLeft {
    0% {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        opacity: 0;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        opacity: 1;
    }
}
.rotateInUpLeft {
    -webkit-animation-name: rotateInUpLeft;
    animation-name: rotateInUpLeft;
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
}
@-webkit-keyframes rotateInUpRight {
    0% {
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        opacity: 1;
    }
}
@keyframes rotateInUpRight {
    0% {
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        opacity: 1;
    }
}
.rotateInUpRight {
    -webkit-animation-name: rotateInUpRight;
    animation-name: rotateInUpRight;
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
}
@-webkit-keyframes rotateOut {
    0% {
        opacity: 1;
    }
    to {
        -webkit-transform: rotate(200deg);
        transform: rotate(200deg);
        opacity: 0;
    }
}
@keyframes rotateOut {
    0% {
        opacity: 1;
    }
    to {
        -webkit-transform: rotate(200deg);
        transform: rotate(200deg);
        opacity: 0;
    }
}
.rotateOut {
    -webkit-animation-name: rotateOut;
    animation-name: rotateOut;
    -webkit-transform-origin: center;
    transform-origin: center;
}
@-webkit-keyframes rotateOutDownLeft {
    0% {
        opacity: 1;
    }
    to {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        opacity: 0;
    }
}
@keyframes rotateOutDownLeft {
    0% {
        opacity: 1;
    }
    to {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        opacity: 0;
    }
}
.rotateOutDownLeft {
    -webkit-animation-name: rotateOutDownLeft;
    animation-name: rotateOutDownLeft;
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
}
@-webkit-keyframes rotateOutDownRight {
    0% {
        opacity: 1;
    }
    to {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        opacity: 0;
    }
}
@keyframes rotateOutDownRight {
    0% {
        opacity: 1;
    }
    to {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        opacity: 0;
    }
}
.rotateOutDownRight {
    -webkit-animation-name: rotateOutDownRight;
    animation-name: rotateOutDownRight;
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
}
@-webkit-keyframes rotateOutUpLeft {
    0% {
        opacity: 1;
    }
    to {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        opacity: 0;
    }
}
@keyframes rotateOutUpLeft {
    0% {
        opacity: 1;
    }
    to {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        opacity: 0;
    }
}
.rotateOutUpLeft {
    -webkit-animation-name: rotateOutUpLeft;
    animation-name: rotateOutUpLeft;
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
}
@-webkit-keyframes rotateOutUpRight {
    0% {
        opacity: 1;
    }
    to {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0;
    }
}
@keyframes rotateOutUpRight {
    0% {
        opacity: 1;
    }
    to {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0;
    }
}
.rotateOutUpRight {
    -webkit-animation-name: rotateOutUpRight;
    animation-name: rotateOutUpRight;
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
}
@-webkit-keyframes hinge {
    0% {
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    20%,
    60% {
        -webkit-transform: rotate(80deg);
        transform: rotate(80deg);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    40%,
    80% {
        -webkit-transform: rotate(60deg);
        transform: rotate(60deg);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        opacity: 1;
    }
    to {
        -webkit-transform: translate3d(0, 700px, 0);
        transform: translate3d(0, 700px, 0);
        opacity: 0;
    }
}
@keyframes hinge {
    0% {
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    20%,
    60% {
        -webkit-transform: rotate(80deg);
        transform: rotate(80deg);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    40%,
    80% {
        -webkit-transform: rotate(60deg);
        transform: rotate(60deg);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        opacity: 1;
    }
    to {
        -webkit-transform: translate3d(0, 700px, 0);
        transform: translate3d(0, 700px, 0);
        opacity: 0;
    }
}
.hinge {
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-duration: calc(var(--animate-duration) * 2);
    animation-duration: calc(var(--animate-duration) * 2);
    -webkit-animation-name: hinge;
    animation-name: hinge;
    -webkit-transform-origin: top left;
    transform-origin: top left;
}
@-webkit-keyframes jackInTheBox {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.1) rotate(30deg);
        transform: scale(0.1) rotate(30deg);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
    }
    50% {
        -webkit-transform: rotate(-10deg);
        transform: rotate(-10deg);
    }
    70% {
        -webkit-transform: rotate(3deg);
        transform: rotate(3deg);
    }
    to {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}
@keyframes jackInTheBox {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.1) rotate(30deg);
        transform: scale(0.1) rotate(30deg);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
    }
    50% {
        -webkit-transform: rotate(-10deg);
        transform: rotate(-10deg);
    }
    70% {
        -webkit-transform: rotate(3deg);
        transform: rotate(3deg);
    }
    to {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}
.jackInTheBox {
    -webkit-animation-name: jackInTheBox;
    animation-name: jackInTheBox;
}
@-webkit-keyframes rollIn {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0) rotate(-120deg);
        transform: translate3d(-100%, 0, 0) rotate(-120deg);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes rollIn {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0) rotate(-120deg);
        transform: translate3d(-100%, 0, 0) rotate(-120deg);
    }
    to {
        opacity: 1;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.rollIn {
    -webkit-animation-name: rollIn;
    animation-name: rollIn;
}
@-webkit-keyframes rollOut {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0) rotate(120deg);
        transform: translate3d(100%, 0, 0) rotate(120deg);
    }
}
@keyframes rollOut {
    0% {
        opacity: 1;
    }
    to {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0) rotate(120deg);
        transform: translate3d(100%, 0, 0) rotate(120deg);
    }
}
.rollOut {
    -webkit-animation-name: rollOut;
    animation-name: rollOut;
}
@-webkit-keyframes zoomIn {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.3, 0.3, 0.3);
        transform: scale3d(0.3, 0.3, 0.3);
    }
    50% {
        opacity: 1;
    }
}
@keyframes zoomIn {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.3, 0.3, 0.3);
        transform: scale3d(0.3, 0.3, 0.3);
    }
    50% {
        opacity: 1;
    }
}
.zoomIn {
    -webkit-animation-name: zoomIn;
    animation-name: zoomIn;
}
@-webkit-keyframes zoomInDown {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}
@keyframes zoomInDown {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}
.zoomInDown {
    -webkit-animation-name: zoomInDown;
    animation-name: zoomInDown;
}
@-webkit-keyframes zoomInLeft {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
        transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}
@keyframes zoomInLeft {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
        transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}
.zoomInLeft {
    -webkit-animation-name: zoomInLeft;
    animation-name: zoomInLeft;
}
@-webkit-keyframes zoomInRight {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
        transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}
@keyframes zoomInRight {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
        transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}
.zoomInRight {
    -webkit-animation-name: zoomInRight;
    animation-name: zoomInRight;
}
@-webkit-keyframes zoomInUp {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}
@keyframes zoomInUp {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}
.zoomInUp {
    -webkit-animation-name: zoomInUp;
    animation-name: zoomInUp;
}
@-webkit-keyframes zoomOut {
    0% {
        opacity: 1;
    }
    50% {
        opacity: 0;
        -webkit-transform: scale3d(0.3, 0.3, 0.3);
        transform: scale3d(0.3, 0.3, 0.3);
    }
    to {
        opacity: 0;
    }
}
@keyframes zoomOut {
    0% {
        opacity: 1;
    }
    50% {
        opacity: 0;
        -webkit-transform: scale3d(0.3, 0.3, 0.3);
        transform: scale3d(0.3, 0.3, 0.3);
    }
    to {
        opacity: 0;
    }
}
.zoomOut {
    -webkit-animation-name: zoomOut;
    animation-name: zoomOut;
}
@-webkit-keyframes zoomOutDown {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    to {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}
@keyframes zoomOutDown {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    to {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}
.zoomOutDown {
    -webkit-animation-name: zoomOutDown;
    animation-name: zoomOutDown;
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
}
@-webkit-keyframes zoomOutLeft {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
    }
    to {
        opacity: 0;
        -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
        transform: scale(0.1) translate3d(-2000px, 0, 0);
    }
}
@keyframes zoomOutLeft {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
    }
    to {
        opacity: 0;
        -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
        transform: scale(0.1) translate3d(-2000px, 0, 0);
    }
}
.zoomOutLeft {
    -webkit-animation-name: zoomOutLeft;
    animation-name: zoomOutLeft;
    -webkit-transform-origin: left center;
    transform-origin: left center;
}
@-webkit-keyframes zoomOutRight {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
    }
    to {
        opacity: 0;
        -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
        transform: scale(0.1) translate3d(2000px, 0, 0);
    }
}
@keyframes zoomOutRight {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
    }
    to {
        opacity: 0;
        -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
        transform: scale(0.1) translate3d(2000px, 0, 0);
    }
}
.zoomOutRight {
    -webkit-animation-name: zoomOutRight;
    animation-name: zoomOutRight;
    -webkit-transform-origin: right center;
    transform-origin: right center;
}
@-webkit-keyframes zoomOutUp {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    to {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}
@keyframes zoomOutUp {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    to {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}
.zoomOutUp {
    -webkit-animation-name: zoomOutUp;
    animation-name: zoomOutUp;
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
}
@-webkit-keyframes slideInDown {
    0% {
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
        visibility: visible;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes slideInDown {
    0% {
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
        visibility: visible;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.slideInDown {
    -webkit-animation-name: slideInDown;
    animation-name: slideInDown;
}
@-webkit-keyframes slideInLeft {
    0% {
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes slideInLeft {
    0% {
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.slideInLeft {
    -webkit-animation-name: slideInLeft;
    animation-name: slideInLeft;
}
@-webkit-keyframes slideInRight {
    0% {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes slideInRight {
    0% {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.slideInRight {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight;
}
@-webkit-keyframes slideInUp {
    0% {
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
        visibility: visible;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
@keyframes slideInUp {
    0% {
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
        visibility: visible;
    }
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
}
.slideInUp {
    -webkit-animation-name: slideInUp;
    animation-name: slideInUp;
}
@-webkit-keyframes slideOutDown {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        visibility: hidden;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
    }
}
@keyframes slideOutDown {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        visibility: hidden;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
    }
}
.slideOutDown {
    -webkit-animation-name: slideOutDown;
    animation-name: slideOutDown;
}
@-webkit-keyframes slideOutLeft {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        visibility: hidden;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
    }
}
@keyframes slideOutLeft {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        visibility: hidden;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
    }
}
.slideOutLeft {
    -webkit-animation-name: slideOutLeft;
    animation-name: slideOutLeft;
}
@-webkit-keyframes slideOutRight {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        visibility: hidden;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
    }
}
@keyframes slideOutRight {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        visibility: hidden;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
    }
}
.slideOutRight {
    -webkit-animation-name: slideOutRight;
    animation-name: slideOutRight;
}
@-webkit-keyframes slideOutUp {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        visibility: hidden;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }
}
@keyframes slideOutUp {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    to {
        visibility: hidden;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }
}
.slideOutUp {
    -webkit-animation-name: slideOutUp;
    animation-name: slideOutUp;
}


@charset 'UTF-8';

/* Slider */
.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;

    display: block;
    margin-left: auto;
    margin-right: auto;
}
.slick-track:before,
.slick-track:after
{
    display: table;

    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;

    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;

    height: auto;

    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}

/* Slider */
.slick-loading .slick-list
{
    /* background: #fff url('./ajax-loader.gif') center center no-repeat; */
}

/* Icons */
@font-face
{
    /* font-family: 'slick';
    font-weight: normal;
    font-style: normal; */

    src: url('./fonts/slick.eot');
    src: url('./fonts/slick.eot?#iefix') format('embedded-opentype'), url('./fonts/slick.woff') format('woff'), url('./fonts/slick.ttf') format('truetype'), url('./fonts/slick.svg#slick') format('svg');
}
/* Arrows */
.slick-prev,
.slick-next
{
    font-size: 0;
    line-height: 0;

    position: absolute;
    top: 50%;

    display: block;

    width: 20px;
    height: 20px;
    padding: 0;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);

    cursor: pointer;

    color: transparent;
    border: none;
    outline: none;
    background: transparent;
}
.slick-prev:hover,
.slick-prev:focus,
.slick-next:hover,
.slick-next:focus
{
    color: transparent;
    outline: none;
    background: transparent;
}
.slick-prev:hover:before,
.slick-prev:focus:before,
.slick-next:hover:before,
.slick-next:focus:before
{
    opacity: 1;
}
.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before
{
    opacity: .25;
}

.slick-prev:before,
.slick-next:before
{
    font-family: 'slick';
    font-size: 20px;
    line-height: 1;

    opacity: .75;
    color: white;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.slick-prev
{
    left: -25px;
}
[dir='rtl'] .slick-prev
{
    right: -25px;
    left: auto;
}
.slick-prev:before
{
    content: 'â†';
}
[dir='rtl'] .slick-prev:before
{
    content: 'â†’';
}

.slick-next
{
    right: -25px;
}
[dir='rtl'] .slick-next
{
    right: auto;
    left: -25px;
}
.slick-next:before
{
    content: 'â†’';
}
[dir='rtl'] .slick-next:before
{
    content: 'â†';
}

/* Dots */
.slick-dotted.slick-slider
{
    margin-bottom: 30px;
}

.slick-dots
{
    position: absolute;
    bottom: -25px;

    display: block;

    width: 100%;
    padding: 0;
    margin: 0;

    list-style: none;

    text-align: center;
}
.slick-dots li
{
    position: relative;

    display: inline-block;

    width: 20px;
    height: 20px;
    margin: 0 5px;
    padding: 0;

    cursor: pointer;
}
.slick-dots li button
{
    font-size: 0;
    line-height: 0;

    display: block;

    width: 20px;
    height: 20px;
    padding: 5px;

    cursor: pointer;

    color: transparent;
    border: 0;
    outline: none;
    background: transparent;
}
.slick-dots li button:hover,
.slick-dots li button:focus
{
    outline: none;
}
.slick-dots li button:hover:before,
.slick-dots li button:focus:before
{
    opacity: 1;
}
.slick-dots li button:before
{
    font-family: 'slick';
    font-size: 6px;
    line-height: 20px;

    position: absolute;
    top: 0;
    left: 0;

    width: 20px;
    height: 20px;

    content: 'â€¢';
    text-align: center;

    opacity: .25;
    color: black;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.slick-dots li.slick-active button:before
{
    opacity: .75;
    color: black;
}

/* Magnific Popup CSS */
.mfp-bg {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1042;
  overflow: hidden;
  position: fixed;
  background: #0b0b0b;
  opacity: 0.8; }

.mfp-wrap {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1043;
  position: fixed;
  outline: none !important;
  -webkit-backface-visibility: hidden; }

.mfp-container {
  text-align: center;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  padding: 0 8px;
  box-sizing: border-box; }

.mfp-container:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle; }

.mfp-align-top .mfp-container:before {
  display: none; }

.mfp-content {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 0 auto;
  text-align: left;
  z-index: 1045; }

.mfp-inline-holder .mfp-content,
.mfp-ajax-holder .mfp-content {
  width: 100%;
  cursor: auto; }

.mfp-ajax-cur {
  cursor: progress; }

.mfp-zoom-out-cur, .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
  cursor: -moz-zoom-out;
  cursor: -webkit-zoom-out;
  cursor: zoom-out; }

.mfp-zoom {
  cursor: pointer;
  cursor: -webkit-zoom-in;
  cursor: -moz-zoom-in;
  cursor: zoom-in; }

.mfp-auto-cursor .mfp-content {
  cursor: auto; }

.mfp-close,
.mfp-arrow,
.mfp-preloader,
.mfp-counter {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none; }

.mfp-loading.mfp-figure {
  display: none; }

.mfp-hide {
  display: none !important; }

.mfp-preloader {
  color: #CCC;
  position: absolute;
  top: 50%;
  width: auto;
  text-align: center;
  margin-top: -0.8em;
  left: 8px;
  right: 8px;
  z-index: 1044; }
  .mfp-preloader a {
    color: #CCC; }
    .mfp-preloader a:hover {
      color: #FFF; }

.mfp-s-ready .mfp-preloader {
  display: none; }

.mfp-s-error .mfp-content {
  display: none; }

button.mfp-close,
button.mfp-arrow {
  overflow: visible;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
  display: block;
  outline: none;
  padding: 0;
  z-index: 1046;
  box-shadow: none;
  touch-action: manipulation; }

button::-moz-focus-inner {
  padding: 0;
  border: 0; }

.mfp-close {
  width: 44px;
  height: 44px;
  line-height: 44px;
  position: absolute;
  right: 0;
  top: 0;
  text-decoration: none;
  text-align: center;
  opacity: 0.65;
  padding: 0 0 18px 10px;
  color: #FFF;
  font-style: normal;
  font-size: 28px;
  font-family: Arial, Baskerville, monospace; }
  .mfp-close:hover,
  .mfp-close:focus {
    opacity: 1; }
  .mfp-close:active {
    top: 1px; }

.mfp-close-btn-in .mfp-close {
  color: #333; }

.mfp-image-holder .mfp-close,
.mfp-iframe-holder .mfp-close {
  color: #FFF;
  right: -6px;
  text-align: right;
  padding-right: 6px;
  width: 100%; }

.mfp-counter {
  position: absolute;
  top: 0;
  right: 0;
  color: #CCC;
  font-size: 12px;
  line-height: 18px;
  white-space: nowrap; }

.mfp-arrow {
  position: absolute;
  opacity: 0.65;
  margin: 0;
  top: 50%;
  margin-top: -55px;
  padding: 0;
  width: 90px;
  height: 110px;
  -webkit-tap-highlight-color: transparent; }
  .mfp-arrow:active {
    margin-top: -54px; }
  .mfp-arrow:hover,
  .mfp-arrow:focus {
    opacity: 1; }
  .mfp-arrow:before,
  .mfp-arrow:after {
    content: '';
    display: block;
    width: 0;
    height: 0;
    position: absolute;
    left: 0;
    top: 0;
    margin-top: 35px;
    margin-left: 35px;
    border: medium inset transparent; }
  .mfp-arrow:after {
    border-top-width: 13px;
    border-bottom-width: 13px;
    top: 8px; }
  .mfp-arrow:before {
    border-top-width: 21px;
    border-bottom-width: 21px;
    opacity: 0.7; }

.mfp-arrow-left {
  left: 0; }
  .mfp-arrow-left:after {
    border-right: 17px solid #FFF;
    margin-left: 31px; }
  .mfp-arrow-left:before {
    margin-left: 25px;
    border-right: 27px solid #3F3F3F; }

.mfp-arrow-right {
  right: 0; }
  .mfp-arrow-right:after {
    border-left: 17px solid #FFF;
    margin-left: 39px; }
  .mfp-arrow-right:before {
    border-left: 27px solid #3F3F3F; }

.mfp-iframe-holder {
  padding-top: 40px;
  padding-bottom: 40px; }
  .mfp-iframe-holder .mfp-content {
    line-height: 0;
    width: 100%;
    max-width: 900px; }
  .mfp-iframe-holder .mfp-close {
    top: -40px; }

.mfp-iframe-scaler {
  width: 100%;
  height: 0;
  overflow: hidden;
  padding-top: 56.25%; }
  .mfp-iframe-scaler iframe {
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #000; }

/* Main image in popup */
img.mfp-img {
  width: auto;
  max-width: 100%;
  height: auto;
  display: block;
  line-height: 0;
  box-sizing: border-box;
  padding: 40px 0 40px;
  margin: 0 auto; }

/* The shadow behind the image */
.mfp-figure {
  line-height: 0; }
  .mfp-figure:after {
    content: '';
    position: absolute;
    left: 0;
    top: 40px;
    bottom: 40px;
    display: block;
    right: 0;
    width: auto;
    height: auto;
    z-index: -1;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #444; }
  .mfp-figure small {
    color: #BDBDBD;
    display: block;
    font-size: 12px;
    line-height: 14px; }
  .mfp-figure figure {
    margin: 0; }

.mfp-bottom-bar {
  margin-top: -36px;
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  cursor: auto; }

.mfp-title {
  text-align: left;
  line-height: 18px;
  color: #F3F3F3;
  word-wrap: break-word;
  padding-right: 36px; }

.mfp-image-holder .mfp-content {
  max-width: 100%; }

.mfp-gallery .mfp-image-holder .mfp-figure {
  cursor: pointer; }

@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
  /**
       * Remove all paddings around the image on small screen
       */
  .mfp-img-mobile .mfp-image-holder {
    padding-left: 0;
    padding-right: 0; }
  .mfp-img-mobile img.mfp-img {
    padding: 0; }
  .mfp-img-mobile .mfp-figure:after {
    top: 0;
    bottom: 0; }
  .mfp-img-mobile .mfp-figure small {
    display: inline;
    margin-left: 5px; }
  .mfp-img-mobile .mfp-bottom-bar {
    background: rgba(0, 0, 0, 0.6);
    bottom: 0;
    margin: 0;
    top: auto;
    padding: 3px 5px;
    position: fixed;
    box-sizing: border-box; }
    .mfp-img-mobile .mfp-bottom-bar:empty {
      padding: 0; }
  .mfp-img-mobile .mfp-counter {
    right: 5px;
    top: 3px; }
  .mfp-img-mobile .mfp-close {
    top: 0;
    right: 0;
    width: 35px;
    height: 35px;
    line-height: 35px;
    background: rgba(0, 0, 0, 0.6);
    position: fixed;
    text-align: center;
    padding: 0; } }

@media all and (max-width: 900px) {
  .mfp-arrow {
    -webkit-transform: scale(0.75);
    transform: scale(0.75); }
  .mfp-arrow-left {
    -webkit-transform-origin: 0;
    transform-origin: 0; }
  .mfp-arrow-right {
    -webkit-transform-origin: 100%;
    transform-origin: 100%; }
  .mfp-container {
    padding-left: 6px;
    padding-right: 6px; } }

    .apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}


/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}

.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0, 0, 0, .5);
  box-shadow: 0 0 1px rgba(255, 255, 255, .5);
  -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}


.apexcharts-inner {
  position: relative;
}

.apexcharts-text tspan {
  font-family: inherit;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}

.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30, 30, 30, 0.8);
}

.apexcharts-tooltip * {
  font-family: inherit;
}


.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}

.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}

.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-y-value,
.apexcharts-tooltip-text-goals-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-title:empty,
.apexcharts-tooltip-text-y-label:empty,
.apexcharts-tooltip-text-y-value:empty,
.apexcharts-tooltip-text-goals-label:empty,
.apexcharts-tooltip-text-goals-value:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-y-value,
.apexcharts-tooltip-text-goals-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-text-goals-label,
.apexcharts-tooltip-text-goals-value {
  padding: 6px 0 5px;
}

.apexcharts-tooltip-goals-group,
.apexcharts-tooltip-text-goals-label,
.apexcharts-tooltip-text-goals-value {
  display: flex;
}
.apexcharts-tooltip-text-goals-label:not(:empty),
.apexcharts-tooltip-text-goals-value:not(:empty) {
  margin-top: -6px;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1;
}

.apexcharts-tooltip-series-group.apexcharts-active,
.apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}

.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}

.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}

.apexcharts-tooltip-box, .apexcharts-custom-tooltip {
  padding: 4px 8px;
}

.apexcharts-tooltip-boxPlot {
  display: flex;
  flex-direction: column-reverse;
}

.apexcharts-tooltip-box>div {
  margin: 4px 0;
}

.apexcharts-tooltip-box span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after,
.apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}

.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after,
.apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after,
.apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}

.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color: #ECEFF1
}

.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after,
.apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}

.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after,
.apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after,
.apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}

.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}

.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1;
}

.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs,
.apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active,
.apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_boundingRect, .svg_select_points_rot {
  pointer-events: none;
  opacity: 0;
  visibility: hidden;
}
.apexcharts-selection-rect + g .svg_select_boundingRect,
.apexcharts-selection-rect + g .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}

.apexcharts-selection-rect + g .svg_select_points_l,
.apexcharts-selection-rect + g .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
}

.svg_select_points {
  fill: #efefef;
  stroke: #333;
  rx: 2;
}

.apexcharts-svg.apexcharts-zoomable.hovering-zoom {
  cursor: crosshair
}

.apexcharts-svg.apexcharts-zoomable.hovering-pan {
  cursor: move
}

.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}

.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}

.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
  fill: #008FFB;
}

.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon,
.apexcharts-menu-icon {
  position: relative;
}

.apexcharts-reset-icon {
  margin-left: 5px;
}

.apexcharts-zoom-icon,
.apexcharts-reset-icon,
.apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon {
  transform: scale(0.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}

.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}

.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008FFB;
}

.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}

.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee;
}

.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {
  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels,
.apexcharts-datalabel,
.apexcharts-datalabel-label,
.apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-gridline,
.apexcharts-annotation-rect,
.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line,
.apexcharts-zoom-rect,
.apexcharts-toolbar svg,
.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-radar-series path,
.apexcharts-radar-series polygon {
  pointer-events: none;
}


/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}


/* Resize generated styles */

@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers,
.resize-triggers>div,
.contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers>div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}

@import url("https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,500&family=Maven+Pro:wght@400;500;600&display=swap");
:root {
    --heading-font: 'Maven Pro', sans-serif;
    --body-font: "Maven Pro", sans-serif;
    --heading: 232 33% 31%;
    --body: 223 22% 41%;
    --border: 0 0% 90%;
    --base-h: 221;
    --base-s: 75%;
    --base-l: 60%;
    --base: var(--base-h) var(--base-s) var(--base-l);
    --base-50: var(--base-h) var(--base-s) calc(var(--base-l) + 25%);
    --base-100: var(--base-h) var(--base-s) calc(var(--base-l) + 20%);
    --base-200: var(--base-h) var(--base-s) calc(var(--base-l) + 15%);
    --base-300: var(--base-h) var(--base-s) calc(var(--base-l) + 10%);
    --base-400: var(--base-h) var(--base-s) calc(var(--base-l) + 5%);
    --base-600: var(--base-h) var(--base-s) calc(var(--base-l) - 5%);
    --base-700: var(--base-h) var(--base-s) calc(var(--base-l) - 10%);
    --base-800: var(--base-h) var(--base-s) calc(var(--base-l) - 15%);
    --base-900: var(--base-h) var(--base-s) calc(var(--base-l) - 20%);
    --gradient-base: linear-gradient(270deg, hsl(var(--base-400)) 0%, hsl(var(--base-600)) 100%);
    --link-color-h: 216;
    --link-color-s: 98%;
    --link-color-l: 52%;
    --link-color: var(--link-color-h) var(--link-color-s) var(--link-color-l);
    --link-color-hover: var(--link-color-h) var(--link-color-s) 38%;
    --accent-h: 260;
    --accent-s: 92%;
    --accent-l: 10%;
    --accent-50: var(--accent-h) var(--accent-s) calc(var(--accent-l) + 25%);
    --accent-100: var(--accent-h) var(--accent-s) calc(var(--accent-l) + 20%);
    --accent-200: var(--accent-h) var(--accent-s) calc(var(--accent-l) + 15%);
    --accent-300: var(--accent-h) var(--accent-s) calc(var(--accent-l) + 10%);
    --accent-400: var(--accent-h) var(--accent-s) calc(var(--accent-l) + 5%);
    --accent: var(--accent-h) var(--accent-s) var(--accent-l);
    --accent-600: var(--accent-h) var(--accent-s) calc(var(--accent-l) - 5%);
    --accent-700: var(--accent-h) var(--accent-s) calc(var(--accent-l) - 10%);
    --accent-800: var(--accent-h) var(--accent-s) calc(var(--accent-l) - 15%);
    --accent-900: var(--accent-h) var(--accent-s) calc(var(--accent-l) - 20%);
    --primary: 245 82% 67%;
    --secondary: 224 40% 27%;
    --success: 147 67% 47%;
    --danger: 360 78% 62%;
    --warning: 29 100% 63%;
    --info: 200 90% 53%;
    --dark: 206 70% 11%;
    --white: 0 0% 100%;
    --light-h: 228;
    --light-s: 33%;
    --light-l: 97%;
    --light-50: var(--light-h) var(--light-s) calc(var(--light-l) + 33%);
    --light-100: var(--light-h) var(--light-s) calc(var(--light-l) + 20%);
    --light-200: var(--light-h) var(--light-s) calc(var(--light-l) + 15%);
    --light-300: var(--light-h) var(--light-s) calc(var(--light-l) + 10%);
    --light-400: var(--light-h) var(--light-s) calc(var(--light-l) + 2%);
    --light: var(--light-h) var(--light-s) var(--light-l);
    --light-600: var(--light-h) var(--light-s) calc(var(--light-l) - 2%);
    --light-700: var(--light-h) var(--light-s) calc(var(--light-l) - 10%);
    --light-800: var(--light-h) var(--light-s) calc(var(--light-l) - 15%);
    --light-900: var(--light-h) var(--light-s) calc(var(--light-l) - 20%);
}

html {
    scroll-behavior: smooth;
}

body {
    padding: 0;
    margin: 0;
    font-size: 14px;
    color: hsl(var(--body));
    line-height: 1.6;
    font-family: var(--body-font);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}
footer {
    margin-top: auto;
}

p {
    margin: 0;
    padding: 0;
}

a {
    text-decoration: none;
    color: hsl(var(--body));
}

a:hover {
    color: hsl(var(--base));
}

span,
sub,
sup,
a {
    display: inline-block;
}

@media (max-width: 991px) {
    img {
        max-width: 100%;
    }
}
/* global css strat */
.text--primary {
    color: hsl(var(--primary)) !important;
}

.text--secondary {
    color: hsl(var(--secondary)) !important;
}

.text--success {
    color: hsl(var(--success)) !important;
}

.text--danger {
    color: hsl(var(--danger)) !important;
}

.text--warning {
    color: hsl(var(--warning)) !important;
}

.text--info {
    color: hsl(var(--info)) !important;
}

.text--dark {
    color: hsl(var(--dark)) !important;
}

.text--muted {
    color: hsl(var(--muted)) !important;
}

.text--body {
    color: hsl(var(--body)) !important;
}

.text--base {
    color: hsl(var(--base)) !important;
}

/* background color css start */
.bg--primary {
    background-color: hsl(var(--primary)) !important;
}

.bg--secondary {
    background-color: hsl(var(--secondary)) !important;
}

.bg--success {
    background-color: hsl(var(--success)) !important;
}

.bg--danger {
    background-color: hsl(var(--danger)) !important;
}

.bg--warning {
    background-color: hsl(var(--warning)) !important;
}

.bg--info {
    background-color: hsl(var(--info)) !important;
}

.bg--dark {
    background-color: hsl(var(--dark)) !important;
}

.bg--light {
    background-color: hsl(var(--light)) !important;
}

.bg--base {
    background-color: hsl(var(--base)) !important;
}

.border--primary {
    border-color: hsl(var(--primary)) !important;
}

.border--secondary {
    border-color: hsl(var(--secondary)) !important;
}

.border--success {
    border-color: hsl(var(--success)) !important;
}

.border--danger {
    border-color: hsl(var(--danger)) !important;
}

.border--warning {
    border-color: hsl(var(--warning)) !important;
}

.border--info {
    border-color: hsl(var(--info)) !important;
}

.border--dark {
    border-color: hsl(var(--dark)) !important;
}

.border--white, .border--light {
    border-color: #ffffff !important;
}


/* background color css end */
.bg_img {
    background-position: center;
    background-size: cover !important;
    background-repeat: no-repeat !important;
}

.bg_fixed {
    background-attachment: fixed !important;
}

.rounded {
    border-radius: 50px !important;
}

a.text-white:hover {
    color: hsl(var(--base));
}

ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.h-40 {
    height: 40px !important;
}

.h-45 {
    height: 45px !important;
}

.h-50 {
    height: 50px !important;
}

.overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    z-index: -999;
}

.overlay.active {
    z-index: 111;
}

.pt-120 {
    padding-top: clamp(60px, 6vw, 120px);
}

.pt-100 {
    padding-top: clamp(50px, 6vw, 100px);
}

.pt-80 {
    padding-top: clamp(40px, 6vw, 80px);
}

.pt-60 {
    padding-top: clamp(30px, 6vw, 60px);
}

.pt-50 {
    padding-top: clamp(25px, 6vw, 50px);
}

.pb-120 {
    padding-bottom: clamp(60px, 6vw, 120px);
}

.pb-100 {
    padding-bottom: clamp(50px, 6vw, 100px);
}

.pb-80 {
    padding-bottom: clamp(40px, 6vw, 80px);
}

.pb-60 {
    padding-bottom: clamp(30px, 6vw, 60px);
}

.pb-50 {
    padding-bottom: clamp(25px, 6vw, 50px);
}

.notification-item, .sidebar-menu li a, .menu, .header-bottom-area, .pagination, .list.list-column {
    display: flex;
    flex-wrap: wrap;
}

.account-section {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}

.faq-item__title::before, .nav-header-link .dropdown-wrapper, .header-trigger span::after, .header-trigger span::before, .header, .btn,
.cmn--btn, a,
img,
.title,
.name {
    transition: all 0.3s;
}

.sidebar-menu li.has-submenu a::before, .menu li.has-sub-menu > a::after, .list.list-style-two li::before {
    position: absolute;
    font-weight: 900;
    font-size: 16px;
    font-family: "Line Awesome Free";
}

.faq-item__title::before, .list.list-style-one li::before {
    position: absolute;
    font-weight: 900;
    font-size: 16px;
    font-family: "Line Awesome Free";
    color: #000;
}

.list.list-column {
    flex-direction: column;
}

.list.list-style-one li {
    position: relative;
    padding: 6px 0;
    padding-left: 25px;
}

.list.list-style-one li::before {
    content: "\f30b";
    left: 0;
    top: 6px;
    color: hsl(var(--base));
}

.list.list-style-one li .label,
.list.list-style-one li .value {
    width: calc(50% - 20px);
}

.list.list-style-one li .value {
    text-align: right;
}

.list.list-style-two li {
    padding: 6px 0;
    padding-left: 25px;
    position: relative;
}

.list.list-style-two li::before {
    content: "\f101";
    left: 0;
    top: 6px;
    color: hsl(var(--base));
}

.list.list-style-three li {
    position: relative;
    padding: 6px 0;
}

.list.list-style-three li .label,
.list.list-style-three li .value {
    width: calc(50% - 20px);
}

.list.list-style-three li .value {
    text-align: right;
}

.list.list-style-four li {
    position: relative;
    padding: 8px 0;
    padding-left: 25px;
    font-weight: 500;
    font-size: 18px;
}

.list.list-style-four li::before {
    position: absolute;
    content: "";
    width: 16px;
    height: 16px;
    border-radius: 3px;
    left: 0;
    top: 15px;
    background-color: hsl(var(--base));
}

.list.list-style-four li:nth-of-type(3n + 1) {
    color: hsl(var(--base));
}

.list.list-style-four li:nth-of-type(3n + 1)::before {
    background: linear-gradient(45deg, hsl(var(--base)/0.3) 0%, hsl(var(--base)/1) 80%);
    box-shadow: -1px 3px 5px 2px hsl(var(--base)/0.3);
}

.list.list-style-four li:nth-of-type(3n + 2) {
    color: hsl(var(--info));
}

.list.list-style-four li:nth-of-type(3n + 2)::before {
    background: linear-gradient(45deg, hsl(var(--info)/0.3) 0%, hsl(var(--info)/1) 80%);
    box-shadow: -1px 3px 5px 2px hsl(var(--info)/0.3);
}

.list.list-style-four li:nth-of-type(3n + 3) {
    color: hsl(var(--warning));
}

.list.list-style-four li:nth-of-type(3n + 3)::before {
    background: linear-gradient(45deg, hsl(var(--warning)/0.3) 0%, hsl(var(--warning)/1) 80%);
    box-shadow: -1px 3px 5px 2px hsl(var(--warning)/0.3);
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0;
    font-weight: 700;
    line-height: 1.3;
    color: hsl(var(--heading));
    font-family: var(--heading-font);
    word-break: break-word;
}

h1 > a,
h2 > a,
h3 > a,
h4 > a,
h5 > a,
h6 > a {
    color: hsl(var(--heading));
    word-break: break-word;
}

h1 {
    font-size: 70px;
}

@media (max-width: 1199px) {
    h1 {
        font-size: 60px;
    }
}

@media (max-width: 991px) {
    h1 {
        font-size: 56px;
    }
}

@media (max-width: 767px) {
    h1 {
        font-size: 46px;
    }
}

@media (max-width: 450px) {
    h1 {
        font-size: 40px;
    }
}

h2 {
    font-size: 52px;
}

@media (max-width: 1199px) {
    h2 {
        font-size: 48px;
    }
}

@media (max-width: 991px) {
    h2 {
        font-size: 46px;
    }
}

@media (max-width: 767px) {
    h2 {
        font-size: 40px;
    }
}

@media (max-width: 450px) {
    h2 {
        font-size: 36px;
    }
}

h3 {
    font-size: 30px;
}

@media (max-width: 767px) {
    h3 {
        font-size: 26px;
    }
}

@media (max-width: 450px) {
    h3 {
        font-size: 20px;
    }
}

h4 {
    font-size: 22px;
}

h5 {
    font-size: 18px;
}

h6 {
    font-size: 16px;
}

.fw-medium {
    font-weight: 500 !important;
}

.fs--12px {
    font-size: 12px;
}

.fs--13px {
    font-size: 13px;
}

.fs--14px {
    font-size: 14px;
}

.fs--15px {
    font-size: 15px;
}

.fs--16px {
    font-size: 16px;
}

.fs--18px {
    font-size: 18px;
}

.fs--20px {
    font-size: 20px;
}

.fs--25px {
    font-size: 25px;
}

.fs--30px {
    font-size: 30px;
}

.btn,
.cmn--btn {
    padding: 8px 20px;
    font-weight: 500;
    outline: none !important;
    box-shadow: none !important;
    border-radius: 3px;
    z-index: 1;
    line-height: 1.7;
    font-size: 14px;
    position: relative;
}
.btn--icon {
    padding: 6px;
    font-size: 13px;
    line-height: 1;
}

.btn.btn--lg,
.cmn--btn.btn--lg {
    padding: 12px 35px !important;
    font-size: 18px;
}

@media (max-width: 991px) {
    .btn.btn--lg,
.cmn--btn.btn--lg {
        font-size: 16px;
    }
}

@media (max-width: 575px) {
    .btn.btn--lg,
.cmn--btn.btn--lg {
        padding: 10px 30px !important;
    }
}

.btn.btn--md,
.cmn--btn.btn--md {
    padding: 7px 25px !important;
    font-size: 15px;
}

.btn.btn--sm,
.cmn--btn.btn--sm {
    padding: 4px 15px !important;
    font-size: 14px;
}

.btn.btn--smd,
.cmn--btn.btn--smd {
    padding: 4px 10px !important;
    font-size: 14px;
}


.btn.btn--xs,
.cmn--btn.btn--xs {
    padding: 0px 10px !important;
    font-size: 13px;
}

.cmn--btn {
    color: hsl(var(--white));
    background-color: hsl(var(--base));
    border: 2px solid hsl(var(--base));
}

.cmn--btn.btn--outline {
    padding: 8px 35px;
    color: hsl(var(--base));
    background-color: transparent;
    border: 2px solid hsl(var(--base));
}

.cmn--btn.btn--outline:hover {
    background: hsl(var(--base));
    color: hsl(var(--white));
    border: 2px solid hsl(var(--base));
}

.cmn--btn:hover:not(button) {
    color: hsl(var(--base));
    background: transparent;
}

.cmn--btn:hover {
    color: hsl(var(--white));
}

.cmn--btn.btn--gradient::before {
    content: "";
    height: 100%;
    width: 100%;
    border-radius: 100px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 0.4s;
    background: var(--gradient-base);
    box-shadow: 3px 7px 35px 6px hsl(var(--base)/0.3);
}

.cmn--btn.btn--gradient:hover::before {
    transform: scaleX(1.4) scaleY(1.6);
    opacity: 0;
}

.cmn--btn.btn--gradient:hover {
    transform: translateY(-3px);
}

.cmn--btn.btn--gradient:active {
    transform: translateY(-1px);
}

.btn--primary {
    background-color: hsl(var(--primary));
    border: 2px solid hsl(var(--primary));
    color: hsl(var(--white));
}

.btn--primary:hover:not(button) {
    color: hsl(var(--primary));
    background-color: transparent;
}

.btn--primary:hover {
    color: hsl(var(--white));
}

.btn--secondary {
    background-color: hsl(var(--secondary));
    border: 2px solid hsl(var(--secondary));
    color: hsl(var(--white));
}

.btn--secondary:hover {
    color: hsl(var(--white));
}

.btn--success {
    background-color: hsl(var(--success));
    border: 2px solid hsl(var(--success));
    color: hsl(var(--white));
}

.btn--success:hover:not(button) {
    color: hsl(var(--success));
    background-color: transparent;
}

.btn--success:hover {
    color: hsl(var(--white));
}

.btn--danger {
    background-color: hsl(var(--danger));
    border: 2px solid hsl(var(--danger));
    color: hsl(var(--white));
}

.btn--danger:hover:not(button) {
    color: hsl(var(--danger));
    background-color: transparent;
}

.btn--danger:hover {
    color: hsl(var(--white));
}

.btn--warning {
    background-color: hsl(var(--warning));
    border: 2px solid hsl(var(--warning));
    color: hsl(var(--white));
}

.btn--warning:hover:not(button) {
    color: hsl(var(--warning));
    background-color: transparent;
}

.btn--warning:hover {
    color: hsl(var(--white));
}

.btn--info {
    background-color: var(--info);
    border: 2px solid var(--info);
    color: hsl(var(--white));
}

.btn--info:hover:not(button) {
    color: var(--info);
    background-color: transparent;
}

.btn--info:hover {
    color: hsl(var(--white));
}

.btn--light {
    background-color: hsl(var(--light));
    border: 2px solid hsl(var(--light));
    color: hsl(var(--white));
}

.btn--light:hover:not(button) {
    color: hsl(var(--light));
    background-color: transparent;
}

.btn--light:hover {
    color: hsl(var(--white));
}

.btn--dark {
    background-color: hsl(var(--dark));
    border: 2px solid hsl(var(--dark));
    color: hsl(var(--white));
}

.btn--dark:hover:not(button) {
    color: hsl(var(--dark));
    background-color: transparent;
}

.btn--dark:hover {
    color: hsl(var(--white));
}

.btn--base {
    background-color: hsl(var(--base));
    border: 2px solid hsl(var(--base));
    color: hsl(var(--white));
}

.btn--base:hover {
    color: hsl(var(--white));
}

.btn--base2 {
    background-color: hsl(var(--base-600));
    border: 2px solid hsl(var(--base-600));
    color: hsl(var(--white));
}

.btn--base2:hover:not(button) {
    color: hsl(var(--base-600));
    background-color: transparent;
}

.btn--base2:hover {
    color: hsl(var(--white));
}

.btn--base:hover,
.cmn--btn:hover {
    background-color: hsl(var(--base-600));
}

.btn--light {
    color: hsl(var(--base));
}

.btn--outline-primary {
    background-color: transparent;
    border: 2px solid hsl(var(--primary));
    color: hsl(var(--primary));
}

.btn--outline-primary:hover {
    color: hsl(var(--white));
    border-color: hsl(var(--base));
    background-color: hsl(var(--base));
}

.btn--outline-secondary {
    background-color: transparent;
    border: 2px solid hsl(var(--secondary));
    color: hsl(var(--secondary));
}

.btn--outline-secondary:hover {
    color: hsl(var(--white));
    border-color: hsl(var(--base));
    background-color: hsl(var(--base));
}

.btn--outline-success {
    background-color: transparent;
    border: 2px solid hsl(var(--success));
    color: hsl(var(--success));
}

.btn--outline-success:hover {
    color: hsl(var(--white));
    border-color: hsl(var(--base));
    background-color: hsl(var(--base));
}

.btn--outline-danger {
    background-color: transparent;
    border: 2px solid hsl(var(--danger));
    color: hsl(var(--danger));
}

.btn--outline-danger:hover {
    color: hsl(var(--white));
    border-color: hsl(var(--base));
    background-color: hsl(var(--base));
}

.btn--outline-warning {
    background-color: transparent;
    border: 2px solid hsl(var(--warning));
    color: hsl(var(--warning));
}

.btn--outline-warning:hover {
    color: hsl(var(--white));
    border-color: hsl(var(--base));
    background-color: hsl(var(--base));
}

.btn--outline-info {
    background-color: transparent;
    border: 2px solid var(--info);
    color: var(--info);
}

.btn--outline-info:hover {
    color: hsl(var(--white));
    border-color: hsl(var(--base));
    background-color: hsl(var(--base));
}

.btn--outline-light {
    background-color: transparent;
    border: 2px solid hsl(var(--light));
    color: hsl(var(--light));
}

.btn--outline-light:hover {
    color: hsl(var(--white));
    border-color: hsl(var(--base));
    background-color: hsl(var(--base));
}

.btn--outline-dark {
    background-color: transparent;
    border: 2px solid hsl(var(--dark));
    color: hsl(var(--dark));
}

.btn--outline-dark:hover {
    color: hsl(var(--white));
    border-color: hsl(var(--base));
    background-color: hsl(var(--base));
}

.btn--outline-base {
    background-color: transparent;
    border: 2px solid hsl(var(--base));
    color: hsl(var(--base));
}

.btn--outline-base:hover {
    color: hsl(var(--white));
    border-color: hsl(var(--base));
    background-color: hsl(var(--base));
}

.btn--outline-base2 {
    background-color: transparent;
    border: 2px solid hsl(var(--base-600));
    color: hsl(var(--base-600));
}

.btn--outline-base2:hover {
    color: hsl(var(--white));
    border-color: hsl(var(--base));
    background-color: hsl(var(--base));
}

.btn--outline-light {
    color: hsl(var(--body));
    border: 2px solid hsl(var(--border));
}

.btn--circle {
    border-radius: 50px;
}

.badge--base {
    background-color: hsl(var(--base)/0.15);
    border: 1px solid hsl(var(--base));
    color: hsl(var(--base));
}

.badge--primary {
    background-color: hsl(var(--primary)/0.15);
    border: 1px solid hsl(var(--primary));
    color: hsl(var(--primary));
}

.badge--secondary {
    background-color: hsl(var(--secondary)/0.15);
    border: 1px solid hsl(var(--secondary));
    color: hsl(var(--secondary));
}

.badge--success {
    background-color: hsl(var(--success)/0.15);
    border: 1px solid hsl(var(--success));
    color: hsl(var(--success));
}

.badge--danger {
    background-color: hsl(var(--danger)/0.15);
    border: 1px solid hsl(var(--danger));
    color: hsl(var(--danger));
}

.badge--warning {
    background-color: hsl(var(--warning)/0.15);
    border: 1px solid hsl(var(--warning));
    color: hsl(var(--warning));
}

.badge--info {
    background-color: hsl(var(--info)/0.15);
    border: 1px solid hsl(var(--info));
    color: hsl(var(--info));
}

.badge--dark {
    background-color: hsl(var(--dark)/0.15);
    border: 1px solid hsl(var(--dark));
    color: hsl(var(--dark));
}
.badge--light {
    background-color: hsl(var(--light)/0.15);
    border: 1px solid hsl(var(--light));
    color: hsl(var(--light));
}

.badge {
    border-radius: 18px;
    padding: 2px 15px 3px;
    font-weight: 600;
}

.badge.badge--icon {
    padding: 5px;
    width: 25px;
    height: 25px;
    border-radius: 5px;
    display: grid;
    place-items: center;
}

.badge.badge--lg {
    padding: 6px 16px;
}

.badge.badge--md {
    padding: 4px 12px;
}

.badge.badge--sm {
    padding: 3px 10px;
}

.badge--fill-primary {
    background-color: hsl(var(--primary));
    border: 1px solid hsl(var(--primary));
    color: hsl(var(--white));
}

.badge--fill-primary:hover {
    color: hsl(var(--white));
}

.badge--fill-secondary {
    background-color: hsl(var(--secondary));
    border: 1px solid hsl(var(--secondary));
    color: hsl(var(--white));
}

.badge--fill-secondary:hover {
    color: hsl(var(--white));
}

.badge--fill-success {
    background-color: hsl(var(--success));
    border: 1px solid hsl(var(--success));
    color: hsl(var(--white));
}

.badge--fill-success:hover {
    color: hsl(var(--white));
}

.badge--fill-danger {
    background-color: hsl(var(--danger));
    border: 1px solid hsl(var(--danger));
    color: hsl(var(--white));
}

.badge--fill-danger:hover {
    color: hsl(var(--white));
}

.badge--fill-warning {
    background-color: hsl(var(--warning));
    border: 1px solid hsl(var(--warning));
    color: hsl(var(--white));
}

.badge--fill-warning:hover {
    color: hsl(var(--white));
}

.badge--fill-info {
    background-color: hsl(var(--info));
    border: 1px solid hsl(var(--info));
    color: hsl(var(--white));
}

.badge--fill-info:hover {
    color: hsl(var(--white));
}

.badge--fill-light {
    background-color: hsl(var(--light));
    border: 1px solid hsl(var(--light));
    color: hsl(var(--white));
}

.badge--fill-light:hover {
    color: hsl(var(--white));
}

.badge--fill-dark {
    background-color: hsl(var(--dark));
    border: 1px solid hsl(var(--dark));
    color: hsl(var(--white));
}

.badge--fill-dark:hover {
    color: hsl(var(--white));
}

.badge--fill-base {
    background-color: hsl(var(--base));
    border: 1px solid hsl(var(--base));
    color: hsl(var(--white));
}

.badge--fill-base:hover {
    color: hsl(var(--white));
}



/* ===================== Preloader Css Start ========================== */
@-webkit-keyframes preloader-inside-white {
	0% {
		-webkit-transform: scale(0, 0);
		-ms-transform: scale(0, 0);
		transform: scale(0, 0);
	}

	100% {
		-webkit-transform: scale(1, 1);
		-ms-transform: scale(1, 1);
		transform: scale(1, 1);
	}
}

@-moz-keyframes preloader-inside-white {
	0% {
		-webkit-transform: scale(0, 0);
		-ms-transform: scale(0, 0);
		transform: scale(0, 0);
	}

	100% {
		-webkit-transform: scale(1, 1);
		-ms-transform: scale(1, 1);
		transform: scale(1, 1);
	}
}

@-ms-keyframes preloader-inside-white {
	0% {
		-webkit-transform: scale(0, 0);
		-ms-transform: scale(0, 0);
		transform: scale(0, 0);
	}

	100% {
		-webkit-transform: scale(1, 1);
		-ms-transform: scale(1, 1);
		transform: scale(1, 1);
	}
}

@keyframes preloader-inside-white {
	0% {
		-webkit-transform: scale(0, 0);
		-ms-transform: scale(0, 0);
		transform: scale(0, 0);
	}

	100% {
		-webkit-transform: scale(1, 1);
		-ms-transform: scale(1, 1);
		transform: scale(1, 1);
	}
}

@-webkit-keyframes preloader-inside-red {
	0% {
		-webkit-transform: scale(0, 0);
		-ms-transform: scale(0, 0);
		transform: scale(0, 0);
	}

	30% {
		-webkit-transform: scale(0, 0);
		-ms-transform: scale(0, 0);
		transform: scale(0, 0);
	}

	100% {
		-webkit-transform: scale(1, 1);
		-ms-transform: scale(1, 1);
		transform: scale(1, 1);
	}
}

@-moz-keyframes preloader-inside-red {
	0% {
		-webkit-transform: scale(0, 0);
		-ms-transform: scale(0, 0);
		transform: scale(0, 0);
	}

	30% {
		-webkit-transform: scale(0, 0);
		-ms-transform: scale(0, 0);
		transform: scale(0, 0);
	}

	100% {
		-webkit-transform: scale(1, 1);
		-ms-transform: scale(1, 1);
		transform: scale(1, 1);
	}
}

@-ms-keyframes preloader-inside-red {
	0% {
		-webkit-transform: scale(0, 0);
		-ms-transform: scale(0, 0);
		transform: scale(0, 0);
	}

	30% {
		-webkit-transform: scale(0, 0);
		-ms-transform: scale(0, 0);
		transform: scale(0, 0);
	}

	100% {
		-webkit-transform: scale(1, 1);
		-ms-transform: scale(1, 1);
		transform: scale(1, 1);
	}
}

@keyframes preloader-inside-red {
	0% {
		-webkit-transform: scale(0, 0);
		-ms-transform: scale(0, 0);
		transform: scale(0, 0);
	}

	30% {
		-webkit-transform: scale(0, 0);
		-ms-transform: scale(0, 0);
		transform: scale(0, 0);
	}

	100% {
		-webkit-transform: scale(1, 1);
		-ms-transform: scale(1, 1);
		transform: scale(1, 1);
	}
}

.preloader {
	position: fixed;
    width: 100%;
    height: 100vh;
    background-color: #fff;
    z-index: 9990;
    display: flex;
    justify-content: center;
    align-items: center;
}
.preloader .animated-preloader {
	display: inline-block;
	width: 100px;
	height: 100px;
	position: absolute;
	top: 50%;
	left: 50%;
	background: hsl(var(--base));
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-ms-border-radius: 50%;
	-o-border-radius: 50%;
	transform: translate(-50%, -50%);
}
.preloader .animated-preloader::after {
	content: "";
	display: inline-block;
	width: 100px;
	height: 100px;
	position: absolute;
	top: 0;
	left: 0;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-ms-border-radius: 50%;
	-o-border-radius: 50%;
	background: white;
	-webkit-animation: preloader-inside-white 1s ease-in-out infinite;
	-ms-animation: preloader-inside-white 1s ease-in-out infinite;
	animation: preloader-inside-white 1s ease-in-out infinite;
}

.preloader .animated-preloader::before {
	content: "";
	display: inline-block;
	width: 100px;
	height: 100px;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 10;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-ms-border-radius: 50%;
	-o-border-radius: 50%;
	background: hsl(var(--base));
	-webkit-animation: preloader-inside-red 1s ease-in-out infinite;
	-ms-animation: preloader-inside-red 1s ease-in-out infinite;
	animation: preloader-inside-red 1s ease-in-out infinite;
}
/* ===================== Preloader Css End ========================== */

.table {
    margin: 0;
    font-size: 15px;
    background-color: hsl(var(--white));
}

.table thead tr {
    background: hsl(var(--base));
}

.table thead tr th {
    text-align: center;
    font-size: 15px;
    padding: 15px;
    color: hsl(var(--white));
    font-family: var(--heading-font);
    font-weight: 500;
}

.table thead tr th:first-child {
    text-align: left;
}

.table thead tr th:last-child {
    text-align: right;
}

.table tbody {
    border: 0 !important;
}

.table tbody tr td {
    text-align: center;
    vertical-align: middle;
    padding: 20px 15px;
    border-width: 1px;
    font-family: var(--heading-font);
}

.table tbody tr td::before {
    content: attr(data-label);
    font-family: var(--heading-font);
    font-size: 15px;
    color: hsl(var(--heading));
    font-weight: 500;
    display: none;
}

.table tbody tr td:first-child {
    text-align: left;
}

.table tbody tr td:last-child {
    text-align: right;
}

.table tbody tr:nth-child(even) {
    background: hsl(var(--light));
}

.table .amount span {
    margin-right: 4px;
}

@media (max-width: 767px) {
    .table--responsive--md thead {
        display: none;
    }

    .table--responsive--md tbody tr {
        display: block;
    }

    .table--responsive--md tbody tr td {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 35px;
        text-align: right;
        padding: 10px 15px;
        border: none;
        border-bottom: 1px solid hsl(var(--border));
    }
}

@media (max-width: 767px) and (max-width: 991px) {
    .table--responsive--md tbody tr td {
        font-size: 14px !important;
    }
}

@media (max-width: 767px) {
    .table--responsive--md tbody tr td:last-child {
        border: none;
    }
}

@media (max-width: 767px) {
    .table--responsive--md tbody tr td::before {
        display: block;
    }
}

@media (min-width: 768px) {
    .table--responsive--md tbody tr td {
        border: 0;
    }
}

@media (max-width: 991px) {
    .table--responsive--lg thead {
        display: none;
    }

    .table--responsive--lg tbody tr {
        display: block;
    }

    .table--responsive--lg tbody tr td {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 35px;
        text-align: right;
        padding: 10px 15px;
        border: none;
        border-bottom: 1px solid hsl(var(--border));
    }
}

@media (max-width: 991px) and (max-width: 991px) {
    .table--responsive--lg tbody tr td {
        font-size: 14px !important;
    }
}

@media (max-width: 991px) {
    .table--responsive--lg tbody tr td:last-child {
        border: none;
    }
}

@media (max-width: 991px) {
    .table--responsive--lg tbody tr td::before {
        display: block;
    }
}

@media (min-width: 992px) {
    .table--responsive--lg tbody tr td {
        border: none;
        border-bottom: 1px solid hsl(var(--light-600));
    }

    .table--responsive--lg tbody tr td:first-child {
        border-left: 1px solid hsl(var(--light-600));
    }

    .table--responsive--lg tbody tr td:last-child {
        border-right: 1px solid hsl(var(--light-600));
    }
}

@media (max-width: 1199px) {
    .table--responsive--xl thead {
        display: none;
    }

    .table--responsive--xl tbody tr {
        display: block;
    }

    .table--responsive--xl tbody tr td {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 35px;
        text-align: right;
        padding: 10px 15px;
        border: none;
        border-bottom: 1px solid hsl(var(--border));
    }
}

@media (max-width: 1199px) and (max-width: 991px) {
    .table--responsive--xl tbody tr td {
        font-size: 14px !important;
    }
}

@media (max-width: 1199px) {
    .table--responsive--xl tbody tr td:last-child {
        border: none;
    }
}

@media (max-width: 1199px) {
    .table--responsive--xl tbody tr td::before {
        display: block;
    }
}

@media (min-width: 1200px) {
    .table--responsive--xl tbody tr td {
        border: 0;
    }
}

.form-group label {
    font-size: 15px;
    font-weight: 500;
    margin-bottom: 8px;
}

.form--control {
    height: 45px;
    border-radius: 5px;
    border: 1px solid hsl(var(--border));
    outline: 0 !important;
    box-shadow: none !important;
}
.form--control[type='file'] {
    line-height: 31px;
}

.form--control:focus {
    border: 1px solid hsl(var(--base));
}

.form--control.style--two {
    background-color: hsl(var(--light));
}

::placeholder {
    color: #496a93!important;
    opacity: 0.5 !important;
    font-size: 14px !important;
}

.radius-12px {
    border-radius: 12px;
}

textarea.form--control {
    height: 130px;
}

input:autofill,
input:autofill:hover,
input:autofill:focus,
input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus {
    -webkit-text-fill-color: rgb(var(--heading));
    transition: background-color 5000s ease-in-out 0s;
}

.custom--radio {
    position: relative;
    padding-left: 0;
}

.custom--radio input[type=radio] {
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    cursor: pointer;
}

.custom--radio input[type=radio]:checked ~ label::before {
    border-width: 2px;
    border-color: hsl(var(--base)) !important;
}

.custom--radio input[type=radio]:checked ~ label::after {
    opacity: 1;
}

.custom--radio label {
    margin-bottom: 0;
    position: relative;
    padding-left: 20px;
    font-size: rem(14px);
    font-weight: 400;
}

.custom--radio label::before {
    position: absolute;
    content: "";
    top: 4px;
    left: 0;
    width: 15px;
    height: 15px;
    border: 1px solid #888888;
}

.custom--radio label::after {
    position: absolute;
    content: "";
    top: 8px;
    left: 4px;
    width: 7px;
    height: 7px;
    background-color: hsl(var(--base)) !important;
    opacity: 0;
}

.custom--checkbox input {
    box-shadow: none !important;
}

.custom--checkbox input:checked {
    background-color: hsl(var(--base));
    border-color: hsl(var(--base));
}
.custom--checkbox .form-check-input {
    border-color: hsl(var(--base));
}

.custom--checkbox label {
    position: relative;
    margin-bottom: 0;
    line-height: 1;
}

.form--switch input {
    box-shadow: none !important;
    width: 2.5em !important;
    height: 1.3em;
}

.form--switch input:checked {
    background-color: hsl(var(--base));
    border-color: hsl(var(--base));
}

.form--switch label {
    margin-left: 7px;
}

/* form css end*/
.custom--card {
    border-radius: 5px;
}

.custom--card .card-header,
.custom--card .card-footer {
    background-color: hsl(var(--white));
    padding: 15px 25px;
}

@media (max-width: 450px) {
    .custom--card .card-header,
.custom--card .card-footer {
        padding: 15px;
    }
}

.custom--card .card-header .title,
.custom--card .card-footer .title {
    margin: 0;
}

.custom--card .card-body {
    padding: 25px;
}

@media (max-width: 575px) {
    .custom--card .card-body {
        padding: 20px;
    }
}

@media (max-width: 450px) {
    .custom--card .card-body {
        padding: 15px;
    }
}

.custom--card.card--lg .card-header,
.custom--card.card--lg .card-footer {
    padding: 20px 35px;
}

@media (max-width: 767px) {
    .custom--card.card--lg .card-header,
.custom--card.card--lg .card-footer {
        padding: 15px 25px;
    }
}

@media (max-width: 575px) {
    .custom--card.card--lg .card-header,
.custom--card.card--lg .card-footer {
        padding: 10px 20px;
    }
}

@media (max-width: 450px) {
    .custom--card.card--lg .card-header,
.custom--card.card--lg .card-footer {
        padding: 8px 15px;
    }
}

.custom--card.card--lg .card-body {
    padding: 35px;
}

@media (max-width: 767px) {
    .custom--card.card--lg .card-body {
        padding: 25px;
    }
}

@media (max-width: 575px) {
    .custom--card.card--lg .card-body {
        padding: 20px;
    }
}

@media (max-width: 450px) {
    .custom--card.card--lg .card-body {
        padding: 15px;
    }
}

.custom--card.card--md .card-header,
.custom--card.card--md .card-footer {
    padding: 10px 20px;
}

.custom--card.card--md .card-body {
    padding: 20px 20px;
}

.custom--modal .modal--footer,
.custom--modal .modal--body,
.custom--modal .modal--header {
    border-color: hsl(var(--border)) !important;
}

.custom--modal .modal-content {
    border-color: hsl(var(--border)) !important;
}

.custom--modal .modal--footer .modal-title,
.custom--modal .modal--header .modal-title {
    margin: 0;
    color: hsl(var(--heading));
}

.custom--modal .modal--footer .btn-close,
.custom--modal .modal--header .btn-close {
    background: transparent;
    font-size: 20px;
    line-height: 1;
    color: hsl(var(--danger)) !important;
}

.pagination {
    justify-content: center;
    gap: 12px;
}

.pagination .page-item {
    text-align: center;
}

.pagination .page-item a,
.pagination .page-item span {
    font-weight: 600;
    width: 45px;
    height: 45px;
    line-height: 45px;
    padding: 0;
    border-radius: 50% !important;
    border-color: hsl(var(--border));
    box-shadow: none;
}

.pagination .page-item.active span,
.pagination .page-item.active a, .pagination .page-item:hover span,
.pagination .page-item:hover a {
    color: hsl(var(--white));
    border-color: transparent;
}

.pagination .page-item.disabled {
    cursor: no-drop !important;
}

.pagination .page-item.disabled span,
.pagination .page-item.disabled a {
    background: hsl(var(--dark)/0.1);
    border: none;
}

.header {
    position: sticky;
    width: 100%;
    z-index: 112;
    background-color: #1f2b3a;
}

.header.sticky {
    box-shadow: 0 3px 15px hsl(var(--base)/0.1);
}

.header-bottom {
    width: 100%;
    padding: 15px 0;
}

@media (max-width: 991px) {
    .header-bottom {
        padding: 15px 0;
    }
}

.header-bottom-area {
    justify-content: space-between;
    position: relative;
}

.logo img {
    max-width: 180px;
    max-height: 60px;
}

@media (max-width: 1199px) {
    .logo img {
        max-width: 160px;
    }
}

@media (max-width: 767px) {
    .logo img {
        max-width: 150px;
    }
}

@media (max-width: 575px) {
    .logo img {
        max-width: 100px;
        max-height: 50px;
    }
}

.menu {
    align-items: center;
    margin: 0;
    position: relative;
}

.menu > .has-sub-menu {
    margin-right: 20px;
}

@media (max-width: 1199px) {
    .menu > .has-sub-menu {
        margin-right: 18px;
    }
}

@media (min-width: 992px) {
    .menu > .has-sub-menu.open .sub-menu {
        display: block !important;
    }
}

.menu .sub-menu li {
    width: 100%;
}

@media (min-width: 992px) {
    .menu .sub-menu {
        display: block !important;
    }
}

.menu li {
    position: relative;
}

.menu li:hover > .sub-menu {
    visibility: visible;
    opacity: 1;
    transform: translateY(0);
}

.menu li.has-sub-menu > a {
    position: relative;
    display: flex;
    justify-content: space-between;
}

.menu li.has-sub-menu > a::after {
    content: "\f107";
    right: 0;
    top: 50%;
    transform: translate(8px, -50%);
    font-size: 14px;
}

.menu li a {
    display: block;
    padding: 4px 12px;
    font-size: 15px;
    position: relative;
    font-weight: 500;
    color: #e1e1e1;
}
.menu li a:hover{
    color: #fff;
}
.menu .btn-close {
    position: absolute;
    right: 20px;
    top: 20px;
}

@media (min-width: 992px) {
    .sub-menu {
        position: absolute;
        top: 100%;
        left: 0px;
        opacity: 0;
        visibility: hidden;
        min-width: 200px;
        transition: all ease 0.3s;
        transform: translateY(15px);
        box-shadow: 0 3px 12px 3px hsl(var(--base)/0.15);
        overflow: hidden;
        z-index: 11;
        padding: 10px;
        background-color: hsl(var(--white));
    }

    .sub-menu li {
        padding: 0;
    }

    .sub-menu li:last-child {
        border: none;
    }

    .sub-menu li a {
        font-size: 14px;
        padding: 7px 15px;
        display: block;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 1;
    }

    .sub-menu li a:hover {
        padding-left: 20px;
        background-color: hsl(var(--base));
        color: hsl(var(--white)) !important;
    }

    .sub-menu:hover {
        visibility: visible;
        opacity: 1;
        transform: translateY(0);
    }

    .sub-menu .sub-menu {
        visibility: hidden;
        opacity: 0;
        top: 5px;
        left: -100%;
        transform: translateY(-20px);
    }

    .sub-menu.has-sub-menu > a::after {
        transform: translateY(0px);
    }
}

@media (max-width: 991px) {
    .menu > li:nth-last-child(1) {
        border-bottom: none;
    }

    .menu {
        position: absolute;
        top: 0;
        left: 0;
        padding: 40px 30px;
        max-height: calc(100vh - 50px);
        min-width: 200px;
        width: 100%;
        visibility: hidden;
        transform-origin: top;
        transform: translateY(-15px) scaleY(0.8);
        opacity: 0;
        overflow-y: auto;
        transition: all ease 0.3s;
        background: hsl(var(--accent));
    }

    .menu.active {
        opacity: 1;
        transform: translateY(0) scaleY(1);
        visibility: visible;
        z-index: 999;
        top: 0px;
    }

    .menu .has-sub-menu {
        margin-right: 0;
    }

    .menu .has-sub-menu > a::after {
        transform: translate(-20px, -50%) !important;
    }

    .menu li {
        padding: 3px 0;
        width: 100%;
        border-bottom: 1px solid hsl(var(--white), 0.2);
    }

    .menu li:nth-last-child(1) {
        border-bottom: none;
    }

    .menu li a {
        padding-left: 0;
        color: hsl(var(--white));
    }

    .menu li.has-sub-menu a::after {
        transform: translate(-20px, -50%) !important;
    }

    .sub-menu {
        display: none;
        padding-left: 25px;
    }
}

.header-trigger {
    cursor: pointer;
    margin-top: -10px;
}

.header-trigger.active span {
    background: none !important;
}

.header-trigger.active span::before {
    transform: rotate(-45deg) translate(-11px, 0px);
    background: hsl(var(--white));
}

.header-trigger.active span::after {
    transform: rotate(45deg) translate(-11px, 0px);
    background: hsl(var(--white));
}

.header-trigger span {
    width: 25px;
    height: 2px;
    background: hsl(var(--base));
    position: relative;
    transition: all ease 0.3s;
}

.header-trigger span::after, .header-trigger span::before {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    left: 0;
    background: hsl(var(--base));
}

.header-trigger span::after {
    bottom: -8px;
}

.header-trigger span::before {
    top: -8px;
}

.dashboard-sidebar {
    position: fixed;
    top: 0;
    width: 310px;
    height: 100%;
    padding: 20px;
    border-right: 1px solid hsl(var(--border));
    background-color: hsl(var(--white));
    overflow-y: auto;
}

.dashboard-sidebar .profile-info {
    margin: 30px 0px;
    padding: 20px;
}

@media (max-width: 1199px) {
    .dashboard-sidebar {
        width: 280px;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        transform: translateX(-100%);
        transition: 0.4s;
        z-index: 111;
    }

    .dashboard-sidebar .logo {
        padding-top: 0;
        padding-inline: 20px;
    }

    .dashboard-sidebar.active {
        transform: translateX(0);
    }

    .dashboard-sidebar .btn-close,
.dashboard-sidebar .dash-sidebar-close {
        position: absolute;
        right: 8px;
        top: 8px;
        line-height: 1;
        padding: 3px;
    }
}
.dashboard-container{
    max-width:1140px;
    margin:0 auto;
}
.dashboard-container .dashboard-inner{
    padding: 40px 20px;

}
@media (max-width: 575px) {
    .dashboard-container .dashboard-inner{
        padding: 30px 10px;
    }
}
.dashboard-wrapper {
    background-color: hsl(var(--light));
    width: calc(100% - 310px);
    margin-left: auto;
    min-height: 100vh;
}

@media (max-width: 1199px) {
    .dashboard-wrapper {
        width: 100%;
    }
}

.dash-sidebar-toggler {
    font-size: 20px;
}

@media (max-width: 450px) {
    .dash-sidebar-toggler {
        font-size: 18px;
    }
}

.sidebar-menu{
    margin-top: 15px;
    font-weight: bold;
}
.sidebar-menu .sidebar-title {
    margin-left: 20px;
    font-size: 14px;
    border-bottom: 1px solid hsl(var(--base)/0.4);
    display: inline-block;
    margin-bottom: 5px;
    margin-top: 8px;
}

.sidebar-menu li {
    padding: 2px 0;
}

.sidebar-menu li.has-submenu a {
    position: relative;
    padding-right: 20px;
}

.sidebar-menu li.has-submenu a::before {
    content: "\f107";
    right: 20px;
    color: hsl(var(--body)/0.7);
    top: 50%;
    transform: translateY(-50%);
    font-size: 13px;
}

.sidebar-menu li a {
    padding: 8px 30px;
    align-items: center;
    font-size: 16px;
    border-radius: 20px;
}
@media (max-width:1199px) {
    .sidebar-menu li a {
        padding-inline: 25px;
    }
}
.sidebar-menu li a img {
    width: 17px;
    height: 17px;
    object-fit: contain;
    margin-right: 12px;
    transition: 0;
}

.sidebar-menu li a.active, .sidebar-menu li a:hover {
    color: hsl(var(--base));
    background-color: hsl(var(--base)/0.1);
}

.sidebar-menu li a.active img, .sidebar-menu li a:hover img {
    filter: invert(45%) sepia(49%) saturate(7409%) hue-rotate(228deg) brightness(101%) contrast(92%);
}

.sidebar-menu .sidebar-submenu {
    padding-left: 30px;
    display: none;
}

.sidebar-menu .sidebar-submenu li a {
    font-size: 15px;
    position: relative;
}

.sidebar-menu .sidebar-submenu li a::before {
    position: absolute;
    content: "";
    width: 4px;
    height: 4px;
    border-radius: 50%;
    background: hsl(var(--body));
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
}

.sidebar-menu .sidebar-submenu li a:hover::before {
    background-color: hsl(var(--base));
}

.sidebar-menu .sidebar-submenu.active {
    display: block;
}
.alert {
    display: flex;
    align-items: center;
    padding: 0;
    border: none;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    overflow: hidden;
    align-items: stretch;
    background-color: #fff;
}

.alert button.close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 12px;
    display: flex;
    align-items: center;
    height: 100%;
    background: transparent;
}

.alert__message {
    padding: 12px;
    padding-right: 22px;
}

.alert__icon {
    padding: 13px 14px;
}
.dashboard-widget{
    padding: 25px;
    background: #fff;
    border: 1px solid #e5e5e5;
    border-left: 3px solid #4c7de6;
    border-radius: 3px;
}
/* .dashboard-widget {
    padding: 20px;
    box-shadow: 0 3px 20px hsl(var(--base)/0.05);
    background-color: hsl(var(--white));
    border-radius: 10px;
    position: relative;
    overflow: hidden;
}

.dashboard-widget__content {
    width: calc(100% - 55px);
}

.dashboard-widget__content .title {
    margin-bottom: 5px;
    font-size: 15px;
}

.dashboard-widget__content .balance {
    color: hsl(var(--primary));
}

.dashboard-widget .status {
    position: absolute;
    right: 20px;
    top: 20px;
    line-height: 1;
    padding-left: 18px;
}

.dashboard-widget .status::before {
    position: absolute;
    content: "";
    left: 0;
    top: 0px;
}

.dashboard-widget .status.text--success::before {
    content: "\f062";
}

.dashboard-widget .status.text--danger::before {
    content: "\f063";
}

.dashboard-widget .line-shape {
    position: absolute;
    bottom: -15px;
    right: -10px;
    width: 180px;
    height: 55px;
    -webkit-mask-image: url(../images/shape/shape1.png);
    mask-image: url(../images/shape/shape1.png);
    -webkit-mask-size: contain;
    mask-size: contain;
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    background-color: hsl(var(--primary));
}

@media (max-width: 1700px) {
    .dashboard-widget .line-shape {
        width: 150px;
        bottom: -20px;
    }
}

@media (max-width: 1500px) {
    .dashboard-widget .line-shape {
        width: 130px;
        height: 50px;
    }
}

@media (max-width: 1400px) {
    .dashboard-widget .line-shape {
        width: 150px;
        height: 55px;
    }
}

.dashboard-widget.widget-primary .balance {
    color: hsl(var(--base));
}

.dashboard-widget.widget-primary .line-shape {
    background-color: hsl(var(--base));
}

.dashboard-widget.widget-secondary .balance {
    color: hsl(var(--secondary));
}

.dashboard-widget.widget-secondary .line-shape {
    background-color: hsl(var(--secondary));
}

.dashboard-widget.widget-success .balance {
    color: hsl(var(--success));
}

.dashboard-widget.widget-success .line-shape {
    background-color: hsl(var(--success));
}

.dashboard-widget.widget-warning .balance {
    color: hsl(var(--warning));
}

.dashboard-widget.widget-warning .line-shape {
    background-color: hsl(var(--warning));
}

.dashboard-widget.widget-info .balance {
    color: hsl(var(--info));
}

.dashboard-widget.widget-info .line-shape {
    background-color: hsl(var(--info));
}

.dashboard-widget.widget-danger .balance {
    color: hsl(var(--danger));
}

.dashboard-widget.widget-danger .line-shape {
    background-color: hsl(var(--danger));
} */

.cmn--tabs {
    border-bottom: 1px solid hsl(var(--border));
}

.cmn--tabs li {
    padding-right: 25px;
}

.cmn--tabs li a {
    font-weight: 500;
    padding: 10px 0;
    border-bottom: 2px solid transparent;
}

.cmn--tabs li a.active {
    color: hsl(var(--base));
    border-color: hsl(var(--base));
}

.dashboard-nav {
    position: sticky;
    top: 0;
    padding: 15px 25px;
    background-color: hsl(var(--white));
    box-shadow: 0px 3px 15px hsl(var(--base)/0.05);
    z-index: 11;
}

@media (max-width: 767px) {
    .dashboard-nav {
        padding-inline: 20px;
    }
}

@media (max-width: 575px) {
    .dashboard-nav {
        padding-inline: 15px;
        position: relative;
    }
}

@media (max-width: 575px) {
    .langSel {
        font-size: 15px;
    }
}

.nav-header-link li {
    position: relative;
}

.nav-header-link li .link {
    width: 40px;
    height: 40px;
    line-height: 1;
    border-radius: 50%;
    display: grid;
    place-items: center;
    background: #4c7de6;
    font-weight: bold;
    color: #fff;
}

@media (max-width: 450px) {
    .nav-header-link li .link {
        width: 30px;
        height: 30px;
        font-size: 15px;
    }
}

.nav-header-link li .link:focus img {
    box-shadow: 0px 4px 15px 4px hsl(var(--base)/0.3);
}

.nav-header-link li .link.notification-link {
    position: relative;
}

.nav-header-link li .link.notification-link::before {
    position: absolute;
    content: "";
    width: 7px;
    height: 7px;
    background: hsl(var(--warning));
    border-radius: 50%;
    right: 10px;
    top: 7px;
}

.nav-header-link li .link.notification-link::after {
    position: absolute;
    content: "";
    width: 6px;
    height: 6px;
    background: hsl(var(--warning));
    border-radius: 50%;
    right: 7px;
    top: 10px;
    animation: play-button 2s linear infinite;
}

.nav-header-link li a:focus ~ .dropdown-wrapper,
.nav-header-link li .dropdown-wrapper:hover {
    visibility: visible;
    opacity: 1;
    transform: translate(0) scale(1);
}

.nav-header-link li img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
}

.nav-header-link .dropdown-wrapper {
    width: 220px;
    background: hsl(var(--white));
    padding: 20px;
    box-shadow: 0 2px 7px 3px hsl(var(--base)/0.1);
    position: absolute;
    right: 0;
    top: calc(100% + 15px);
    visibility: hidden;
    opacity: 0;
    transform: translateY(20px) scaleY(0.8);
    transform-origin: top;
    z-index: 11;
}

.nav-header-link .dropdown-wrapper::before {
    position: absolute;
    content: "";
    bottom: 100%;
    right: 5px;
    border: 15px solid transparent;
    border-bottom-color: hsl(var(--white));
}

.nav-header-link .dropdown-wrapper .dropdown-header {
    text-align: center;
    padding-bottom: 10px;
}

.nav-header-link .dropdown-wrapper .links li a {
    display: block;
    padding: 5px 0;
    border-top: 1px solid hsl(var(--border));
    font-size: 15px;
}

.nav-header-link .dropdown-wrapper .links li a:hover {
    color: hsl(var(--base));
}

.nav-header-link .dropdown-wrapper.notification-dropdown {
    width: 250px;
    padding: 0;
}

.notification-item {
    padding: 15px;
}

.notification-item.notification-warning .icon {
    background-color: hsl(var(--warning));
}

.notification-item.notification-success .icon {
    background-color: hsl(var(--success));
}

.notification-item.notification-info .icon {
    background-color: hsl(var(--info));
}

.notification-item:not(:first-child) {
    border-top: 1px solid hsl(var(--border));
}

.notification-item:hover {
    background-color: hsl(var(--base)/0.05);
}

.notification-item .icon {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: grid;
    place-items: center;
    background-color: hsl(var(--base));
    color: hsl(var(--white));
    font-size: 18px;
}

.notification-item .content {
    width: calc(100% - 35px);
    padding-left: 10px;
}

.notification-item .content .title {
    font-size: 13px;
}

.notification-item .content .time {
    font-size: 12px;
}

.search-form {
    width: 260px;
}

.search-form ::placeholder {
    font-size: 14px;
}

@media (max-width: 767px) {
    .search-form {
        width: 220px;
    }
}

@media (max-width: 575px) {
    .search-form {
        position: absolute;
        top: 99%;
        left: 50%;
        right: 0;
        padding: 25px;
        background-color: hsl(var(--white));
        width: 100%;
        visibility: hidden;
        opacity: 0;
        transition: 0.4s;
        transform: translate(-50%, -100%);
    }

    .search-form.active {
        transform: translate(-50%, 0);
        opacity: 1;
        visibility: visible;
        z-index: 11;
    }
}

.dashboard-content {
    padding: 25px;
    border-radius: 10px;
    background: hsl(var(--white));
    box-shadow: 0 3px 25px hsl(var(--base)/0.05);
}

@media (max-width: 575px) {
    .dashboard-content {
        padding: 0;
        background-color: transparent;
    }
}

@media (max-width: 767px) {
    .dashboard-content .right-content .cmn--btn {
        padding: 6px 20px;
    }

    .dashboard-content .right-content .cmn--btn.btn--outline {
        padding: 4px 20px;
    }
}

.noti-item {
    padding: 20px 0;
}

.noti-item:not(:last-child) {
    border-bottom: 1px solid hsl(var(--border));
}

@media (max-width: 575px) {
    .investment-card .card-header {
        background-color: hsl(var(--white));
    }
}

.plan-item {
    background-color: hsl(var(--white));
    padding: 40px;
    border-radius: 5px;
    box-shadow: 0 5px 20px 5px hsl(var(--base)/0.05);
    width: 100%;
    margin: 0 auto;
}
.dashboard-inner .plan-item{
    box-shadow: none !important;
    border: 1px solid #e5e5e5;
}

.plan-item .rate{
    font-family: 'Lora', serif;
}

.plan-btn{
    background-color: #2a3962 !important;
    border: 1px solid #2a3962 !important;
    width: 100%;
}

.plan-section{
    background: linear-gradient(to top, #f5f6fa 430px, #1f2b3a 110px);
}
@media(max-width:767px){
    .plan-section{
        background: none;
    }
}

@media (min-width: 450px) {
    .plan-item {
        max-width: 450px;
    }
}

@media (min-width: 650px) {
    .plan-item {
        max-width: 100%;
        width: calc(50% - 12px);
    }
}

@media (min-width: 650px) and (max-width: 700px) {
    .plan-item {
        padding: 35px 30px;
    }
}

@media (min-width: 950px) {
    .plan-item {
        width: calc(50% - 12px);
    }
}

@media (min-width: 950px) and (max-width: 1300px) {
    .plan-item {
        padding: 35px 30px;
    }
}

@media (min-width: 1400px) {
    .plan-item {
        width: calc(33.3333333333% - 16px);
    }
}

@media (min-width: 1800px) {
    .plan-item {
        width: calc(25% - 18px);
    }
}

@media (max-width: 450px) {
    .plan-item {
        padding: 35px 30px;
    }
}

.plan-item .plan-name {
    font-size: 16px;
    margin-bottom: 10px;
    padding: 20px;
    border-radius: 5px;
    color: hsl(var(--base));
    background-color: hsl(var(--base)/0.1);
}

.plan-item .price-range {
    padding: 10px 0;
    border-radius: 15px;
    display: block;
    font-size: 36px;
    font-weight: 700;
    line-height: 1.2;
}

@media (max-width: 1399px) {
    .plan-item .price-range {
        font-size: 32px;
    }
}

.plan-item.style--two {
    box-shadow: 0 2px 5px 3px hsl(var(--dark)/0.05);
   padding: 40px 25px;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    justify-content: space-between;
}

.plan-item.style--two .plan-name {
    background-color: transparent;
    padding: 0;
    margin-bottom: 20px;
    font-size: 22px;
}

@media (max-width: 1199px) {
    .plan-item.style--two {
        padding: 40px 25px;
    }

    .plan-item.style--two::before {
        transform: translate(-55%, 55%);
    }
}
@media (max-width: 991px) {
    .plan-item.style--two {
        padding: 30px 15px;
    }
}
.plan-item.style--two .plan-rate .rate{
    color: #2a3962;
    font-size: 50px;
}
@media (max-width: 991px) {
    .plan-item.style--two .plan-rate .rate{
        font-size: 40px;
    }
}@media (max-width: 575px) {
    .plan-item.style--two .plan-rate .rate{
        font-size: 30px;
    }
}


.plan-item-two {
    background-color: hsl(var(--white));
    border: 1px solid hsl(var(--border));
    padding: 15px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

@media (max-width: 1399px) {
    .plan-item-two {
        flex-wrap: wrap;
        flex-flow: column;
        gap: 20px;
        width: calc(33.3333333333% - 16px);
        border: 0;
        box-shadow: 0 3px 15px hsl(var(--base)/0.05);
    }
}

@media (min-width: 1400px) {
    .plan-item-two:not(:last-child) {
        border-bottom: 0;
    }
}

@media (max-width: 991px) {
    .plan-item-two {
        width: calc(50% - 8px);
    }
}

@media (max-width: 650px) {
    .plan-item-two {
        width: 100%;
    }
}

.plan-item-two .plan-inner-div {
    flex-grow: 1;
    flex-shrink: 0;
    max-width: 350px;
}

@media (min-width: 1400px) {
    .plan-item-two .plan-inner-div {
        padding-inline: 10px;
    }
}

@media (max-width: 1399px) {
    .plan-item-two .plan-inner-div {
        flex-grow: 1;
        max-width: 100%;
        text-align: left;
        width: 100%;
        display: flex;
        justify-content: space-between;
        gap: 15px;
    }
}

.plan-item-two .plan-label {
    font-weight: 600;
}

.account-section {
    background-color: #f2f3f5;
    flex-shrink: 1;
    flex-grow: 1;
    flex-basis: auto;
    padding: 60px 0;
}

.account-section .bg-image {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    max-width: 100%;
    max-height: 100%;
    margin: auto;
}

.account-form {
    padding: 40px;
    z-index: 1;
    position: relative;
    border-radius: 5px;
    background-color: hsl(var(--white));
    border: 1px solid #e5e5e5;
}

@media (max-width: 450px) {
    .account-form {
        padding: 20px;
    }
}

.content-item:not(:last-child) {
    margin-bottom: 35px;
}

.content-item .title {
    margin-bottom: 20px;
}

.faq-item {
    border: 1px solid hsl(var(--border));
    border-radius: 5px;
    background-color: hsl(var(--white));
}

.faq-item:not(:last-child) {
    margin-bottom: 15px;
}

.faq-item__title {
    padding: 20px;
    cursor: pointer;
    position: relative;
}

.faq-item__title::before {
    content: "\f067";
    right: 15px;
    top: 18px;
}

.faq-item__content {
    padding: 20px;
    padding-top: 0;
    display: none;
}

.faq-item.active .faq-item__content {
    display: block;
}

.faq-item.open .faq-item__title::before {
    content: "\f068";
}

.link-color {
    color: hsl(var(--link-color));
}
.link-color:hover {
    color: hsl(var(--link-color-hover));
}
.work-process-card {
    text-align: center;
    padding: 15px;
    background: #fff;
    border-radius: 3px;
    border: 1px solid #e5e5e5;
}
.work-process-card .icon-area img{
    height: 35px;
    margin-bottom: 5px;
}
.plan-section{
    margin-top: -20px;
}
.menu-btn a{
    background: hsl(var(--base));
    border-radius: 5px;
    padding: 5px 15px;
    transition: all .3s;
}
.menu-btn a:hover{
    background: hsl(var(--base-h),var(--base-s),55%);
}
/*# sourceMappingURL=main.css.map */
.trx-icon {
    width: 2.5rem;
    height: 2.5rem;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    font-size: 1.625rem;
    margin-right: 12px;
}
.trx-icon.plus {
    background-color: rgba(40, 199, 111, 0.15);
    color: #28c76f;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
.trx-icon.minus {
    background-color: rgba(234, 84, 85, 0.15);
    color: #ea5455;
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
}

.trx-table .plan-inner-div{
    padding-left:0
}

.custom-input-box {
    background-color: #fff;
    border: 1px solid #cacaca;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    padding: 0.125rem 0.5rem;
}

.custom-input-box label {
    color: #a0a0a0;
    font-size: 0.75rem;
    margin-bottom: 0;
}

.custom-input-box select, .custom-input-box input {
    background-color: transparent;
    width: 100%;
    border: none;
    font-family: "Maven Pro", sans-serif;
    color: #373e4a;
    font-size: 0.875rem;
    font-weight: 500;
}

.custom-input-box input:focus, .custom-input-box select:focus{
    outline: none;
}

.copy-link{
    position: relative;
}
.copy-link input{
    width: 100%;
    padding: 5px;
    border: 1px solid #d7d7d7;
    border-radius: 4px;
    transition: all .3s;
    padding-right: 70px;
}
.copy-link input:focus{
    outline: none;
    border: 1px solid #bfbdbd;
}
.copy-link span{
    text-align: center;
    position: absolute;
    top: 6px;
    right: 10px;
    cursor: pointer;
}



select.langSel {
    background-color: #fff0;
    border: 1px solid #ffffff36 !important;
    color: #fffffff2;
    margin-left: 20px;
}
@media (max-width: 991px) {
    select.langSel {
        margin-left: auto;
        margin-right: 20px;
    }
}
select.langSel option {
    background-color: #2a3962;
}

.plan-section {
    flex-grow: 1;
    flex-basis: auto;
    flex-shrink: 0;
}


@media (max-width: 450px) {
    .invest-statistics {
        display: block !important;
        text-align: center;
    }
    .invest-statistics__chart {
        text-align: center;
        margin-top: 10px;
    }
}


.full-height {
    flex-shrink: 1;
    flex-grow: 1;
    flex-basis: auto;
}


.thumb__350px {
	height: 350px;
}
.thumb__350px img {
	width: 100%;
	height: 100%;
	object-fit: cover;
}

@media screen and (max-width: 1199px) {
	.thumb__350px {
		height: 250px;
	}
}

/* Copy Animation */

.copyInput {
	display: inline-block;
	line-height: 50px;
	position: absolute;
	top: 0;
	right: 0;
	width: 40px;
	text-align: center;
	font-size: 14px;
	cursor: pointer;
	-webkit-transition: all .3s;
	-o-transition: all .3s;
	transition: all .3s;
  }

  .copied::after {
	position: absolute;
	top: 8px;
	right: 12%;
	width: 100px;
	display: block;
	content: "COPIED";
	font-size: 1em;
	padding: 5px 5px;
	color: #fff;
	background-color: #FF7000;
	border-radius: 3px;
	opacity: 0;
	will-change: opacity, transform;
	animation: showcopied 1.5s ease;
  }

  @keyframes showcopied {
	0% {
		opacity: 0;
		transform: translateX(100%);
	}
	50% {
		opacity: 0.7;
		transform: translateX(40%);
	}
	70% {
		opacity: 1;
		transform: translateX(0);
	}
	100% {
		opacity: 0;
	}
  }




  .cookies-card {
	width: 520px;
	padding: 30px;
	color: #1E2337;
	position:  fixed;
	bottom: 15px;
	left: 15px;
	z-index: 99;
	transition: all .5s;
	background: #d1d1d1;
    border-radius: 5px;
  }

  .cookies-card.hide{
	bottom: -500px !important;
  }
  .radius--10px {
	border-radius: 10px;
  }

  .cookies-card__icon {
	width: 55px;
	height: 55px;
	border-radius: 50%;
	background-color: #6e6f70;
    color: #fff;
	font-size: 32px;
	display: inline-flex;
	justify-content: center;
	align-items: center;
  }

  .cookies-card__content {
	margin-bottom: 0;
  }

  .cookies-btn {
	color: #363636;
	text-decoration: none;
	padding: 10px 35px;
	margin: 3px 5px;
	display: inline-block;
	border-radius:  999px;
  }

  .cookies-btn:hover {
	color: #363636;
  }


  @media (max-width: 767px) {
	  .cookies-card {
		  width:  100%;
		  left: 0;
		  bottom:  0;
		  font-size:  14px;
		  padding:  15px;
	  }
  }




.hover-input-popup {
        position: relative;
    }
    .input-popup {
        display: none;
    }
    .hover-input-popup .input-popup {
        display: block;
        position: absolute;
        bottom: 70%;
        left: 50%;
        width: 280px;
        background-color: #1a1a1a;
        color: #fff;
        padding: 20px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }
    .input-popup::after {
        position: absolute;
        content: '';
        bottom: -19px;
        left: 50%;
        margin-left: -5px;
        border-width: 10px 10px 10px 10px;
        border-style: solid;
        border-color: transparent transparent #1a1a1a transparent;
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }
    .input-popup p {
        padding-left: 20px;
        position: relative;
    }
    .input-popup p::before {
        position: absolute;
        content: '';
        font-family: 'Line Awesome Free';
        font-weight: 900;
        left: 0;
        top: 4px;
        line-height: 1;
        font-size: 18px;
    }
    .input-popup p.error {
        text-decoration: line-through;
    }
    .input-popup p.error::before {
        content: "\f057";
        color: #ea5455;
    }
    .input-popup p.success::before {
        content: "\f058";
        color: #28c76f;
    }



 .show-filter{
  display: none;
}
@media(max-width:767px){
  .responsive-filter-card{
      display: none;
      transition: none;
  }
  .show-filter{
      display: block;
  }
}
.form-group{
  margin-bottom: 15px
}

.treeview li.contains-items {
  background-image: url(icons/arrow-left.png) !important;
}

.treeview li.items-expanded {
  background-image: url(icons/arrow-down.png) !important;
}
#counter{
  font-family: 'lora';
}

.accordion-button {
  flex-wrap: wrap;
}
@media (max-width: 575px) {
  .accordion-button {
    padding: 15px 8px;
  }
}

@media (max-width: 575px) {
  .transaction-item {
      flex-wrap: wrap;
  }
}
@media (max-width: 767px) {
  .transaction-item .icon-wrapper .trans-title {
      font-size: 0.875rem;
  }
}
@media (max-width: 767px) {
  .transaction-item .icon-wrapper p, .transaction-item .icon-wrapper span {
      font-size: 0.75rem !important;
  }
}
@media (max-width: 575px) {
  .transaction-item .content-wrapper {
      padding-left: 2.5rem;
      margin-top: 8px !important;
  }
}
@media (max-width: 767px) {
  .transaction-item .content-wrapper p {
      font-size: 0.75rem !important;
  }
}
@media (max-width: 767px) {
  .transaction-item .amount-wrapper p {
      font-size: 0.8125rem !important;
  }
}
@media (max-width: 767px) {
  .transaction-item .amount-wrapper span {
      font-size: 0.75rem !important;
  }
}
.table--acordion {
  background-color: #fff;
}
.table--acordion .accordion-body {
  background-color: #faebd72e;
}
.table--acordion .accordion-button {
  text-align: left;
  align-items: center;
}
.table--acordion .accordion-button::after {
  display: none;
}
.table--acordion .accordion-button:focus {
  box-shadow: none;
}
.table--acordion .left {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  align-items: center;
}
.table--acordion .left .icon {
  width: 2.5rem;
  height: 2.5rem;
  background-color: rgba(69, 130, 255, 0.15);
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  color: #4582ff;
  border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  font-size: 1.625rem;
}
@media (max-width: 575px) {
  .table--acordion .left .icon {
      width: 1.875rem;
      height: 1.875rem;
      font-size: 16px;
  }
}
.table--acordion .left .content {
  width: calc(100% - 2.5rem);
  padding-left: 0.9375rem;
}
@media (max-width: 575px) {
  .table--acordion .left .content {
      padding-left: 0.625rem;
  }
}
.table--acordion .accordion-item.rcv-item .icon {
  background-color: rgba(40, 199, 111, 0.15);
  color: #28c76f;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.table--acordion .accordion-item.sent-item .icon {
  background-color: rgba(234, 84, 85, 0.15);
  color: #ea5455;
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
.caption-list li {
  display: flex;
  flex-wrap: wrap;
  padding: 0.625rem 0;
  font-size: 0.9375rem;
  border-bottom: 1px dashed #cacaca;
}
.caption-list li:first-child {
  padding-top: 0;
}
.caption-list li:last-child {
  padding-bottom: 0;
  border-bottom: none;
}
.caption-list li .caption {
  width: 30%;
  font-family: "Maven Pro", sans-serif;
  font-weight: 500;
  font-size: 0.875rem;
  position: relative;
}
@media (max-width: 480px) {
  .caption-list li .caption {
      width: 35%;
  }
}
.caption-list li .caption::after {
  position: absolute;
  content: ':';
  top: 0;
  right: 0;
}
.caption-list li .value {
  width: 70%;
  padding-left: 0.9375rem;
}
@media (max-width: 480px) {
  .caption-list li .value {
      width: 65%;
  }
}
.caption-list-two {
  padding: 0.625rem 0.9375rem;
  background-color: rgba(69, 130, 255, 0.1);
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
}
.caption-list-two li {
  font-family: "Maven Pro", sans-serif;
  font-weight: 500;
  color: #373e4a;
  font-size: 0.875rem;
  padding: 0.5rem 0;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  border-bottom: 1px dashed #b1b1b1;
}
.caption-list-two li:first-child {
  padding-top: 0;
}
.caption-list-two li:last-child {
  padding-bottom: 0;
  border-bottom: none;
}
.caption-list-two li .caption {
  width: 20%;
  position: relative;
}
.caption-list-two li .caption::after {
  position: absolute;
  content: ':';
  top: 0;
  right: 0;
}
.caption-list-two li .value {
  width: 80%;
  text-align: right;
}


.table--acordion .left .icon-success {
  background-color: #28c87026;
  color: #28c870;
}
.table--acordion .left .icon-warning {
  background-color: #ff9e4226;
  color: #ff9e42;
}
.table--acordion .left .icon-danger {
  background-color: #ea535326;
  color: #ea5353;
}
.table--acordion .left .icon-dark {
  background-color: #081f3026;
  color: #081f30;
}


.tr-icon.icon-success{
    transform: rotate(45deg);
}

.tr-icon.icon-danger{
    transform: rotate(-45deg);
}

.close{
  background-color: transparent;
  border: none;
}

label.required:after{
  content: '*';
  color: #DC3545!important;
  margin-left: 2px;
}

.auth-page-logo img{
  max-width: 180px !important;
}

.input-group-text{
  border: 1px solid hsl(var(--border));
}


:root{
    --base-h: 221;
    --base-s: 84%;
    --base-l: 66%;
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
              <h4 class="usd-balance text--base mb-2 fs--30">{{  $sumOfApprovedDeposits}}<sub class="top-0 fs--13px">USD <small>(Deposit Wallet)</small> </sub></h4>
              <p class="btc-balance fw-medium fs--18px">{{ $sumOfInterestInvest }}  <sub class="top-0 fs--13px">USD <small>(Interest Wallet)</small></sub></p>
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
                  <li><a href="/promotion" class=""><img src="https://calamosassets.net/share/assets/templates/invester//images/icon/promotion.png" alt="icon"> Promotional Banner</a></li>

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
                  <a class="link" href="javascript:void(0)">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                </a>
                  <div class="dropdown-wrapper">
                      <div class="dropdown-header">

                          <p class="fs--14px">{{ explode(' ', auth()->user()->name)[0] }}
                        </p>
                      </div>
                      <ul class="links">
                          <li><a href="/profile"> Profile</a></li>
                          <li><a href="/password"> Change Password</a></li>
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

        <main class="py-4">
            @yield('content')
        </main>


