<!-- Basic Meta Page Needs -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#03AC0E" />
<meta name="msapplication-TileColor" content="#03AC0E">
<meta name="msapplication-navbutton-color" content="#FFFFFF">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#03AC0E">
<meta content="text/html; charset=UTF-8" name="Content-Type" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- <link rel="icon" type="image/x-icon" href="{{ asset('ico/icon-epic.png') }}" /> --}}
<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-ges.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-ges.png') }}">
<link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

<title>Green Energy Solution</title>
{{-- <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon-96x96.png') }}" /> --}}

{{-- <meta name="description" content="Smarthome solutions that guarantes green eficient, secure benefits">
<meta name="keywords" content="Smarthome, Green, Efficient, Secured">

<meta itemprop="name" content="Green Energy Solution | Smarthome">
<meta itemprop="description" content="Smarthome solutions that guarantes green eficient, secure benefits">
<meta itemprop="image" content="assets/favicon/favicon-ges.png">

<meta property="og:url" content="#" />
<meta property="og:title" content="Green Energy Solution | Smarthome" />
<meta property="og:description" content="Smarthome solutions that guarantes green eficient, secure benefits" />
<meta property="og:image" content="assets/favicon/favicon-ges.png" />

<meta name="twitter:card" content="Green Energy Solution | Smarthome" />
<meta name="twitter:site" content="#" />
<meta name="twitter:title" content="Green Energy Solution | Smarthome" />
<meta name="twitter:description" content="Smarthome solutions that guarantes green eficient, secure benefits" />
<meta name="twitter:image" content="assets/favicon/favicon-ges.png" /> --}}

@yield ('open-graph')

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<!-- Styles -->
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

{{-- @yield ('open-graph') --}}

<!-- Google Tag Manager -->
{{-- <script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TCS6W5K');
</script> --}}
<!-- End Google Tag Manager -->
