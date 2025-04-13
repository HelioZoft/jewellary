<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>i-groups Admin</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="{{asset('user/img/ilogo.png')}}" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="{{asset('admin/assets/js/plugin/webfont/webfont.min.js')}}"></script>
  <script>
    WebFont.load({
      google: { families: ["Public Sans:300,400,500,600,700"] },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["admin/assets/css/fonts.min.css"],
      },
      active: function () {
        sessionStorage.fonts = true;
      },
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="{{asset("admin/assets/css/bootstrap.min.css")}}" />
  <link rel="stylesheet" href="{{asset("admin/assets/css/plugins.min.css")}}" />
  <link rel="stylesheet" href="{{asset("admin/assets/css/kaiadmin.min.css")}}" />
 {{-- // <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css"> --}}
 {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous"> --}}

 <!-- Add this in your layout head section -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" referrerpolicy="no-referrer" />

 <!-- Font Awesome CDN -->
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-9DT4GSVE+3Q6vnnZLZoAwtdNgN7np8N9l08VSmMBNeYQ52bOB3B5cKIVzm+7LqMsUpxIMRAGVZ/dHw05lyc3mA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}" />
</head>

<body>
  <div class="wrapper">