<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.2.0
* @link https://tabler.io
* Copyright 2018-2025 The Tabler Authors
* Copyright 2018-2025 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign in Nexstaff</title>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('protected/resources/css/tabler.css?1744816591') }}" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PLUGINS STYLES -->
    <link href="{{ asset('protected/resources/css/tabler-flags.css?1744816591') }}" rel="stylesheet" />
    <link href="{{ asset('protected/resources/css/tabler-socials.css?1744816591') }}" rel="stylesheet" />
    <link href="{{ asset('protected/resources/css/tabler-payments.css?1744816591') }}" rel="stylesheet" />
    <link href="{{ asset('protected/resources/css/tabler-vendors.css?1744816591') }}" rel="stylesheet" />
    <link href="{{ asset('protected/resources/css/tabler-marketing.css?1744816591') }}" rel="stylesheet" />
    <link href="{{ asset('protected/resources/css/tabler-themes.css?1744816591') }}" rel="stylesheet" />
    <!-- END PLUGINS STYLES -->
    <!-- BEGIN DEMO STYLES -->
    <link href="{{ asset('protected/resources/css/demo.css?1744816591') }}" rel="stylesheet" />
    <!-- END DEMO STYLES -->
    <!-- BEGIN CUSTOM FONT -->
    <style>
      @import url("https://rsms.me/inter/inter.css");
    </style>
    <!-- END CUSTOM FONT -->
  </head>
  <body>
    <!-- BEGIN GLOBAL THEME SCRIPT -->
    <script src="{{ asset('protected/resources/js/tabler-theme.min.js?1744816591') }}"></script>
    <!-- END GLOBAL THEME SCRIPT -->
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <!-- BEGIN NAVBAR LOGO --><a href="." class="navbar-brand navbar-brand-autodark"
                ><img src="{{ asset('protected/resources/static/logo.svg') }}" height="36" alt="" class="navbar-brand-image" />
              <h4 class="d-inline-block align-middle mb-0">Nexstaff</h4>
              </a><!-- END NAVBAR LOGO -->
        </div>
        <div class="card card-md">
          <div class="card-body">
            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <h2 class="h2 text-center mb-4">Login</h2>
            <form action="{{ env('APP_URL') }}/login" method="post" autocomplete="off">
              @csrf
              <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" autocomplete="off" autofocus required value="{{ old('email') }}" />
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-2">
                <label class="form-label" for="password">
                  Password
                  <span class="form-label-description">
                    <a href="./forgot-password.html">Lupa Password</a>
                  </span>
                </label>
                <div class="input-group input-group-flat">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" required />
                  <span class="input-group-text">
                    <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"
                      ><!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-1"
                      >
                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg
                    ></a>
                  </span>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Sign in</button>
              </div>
            </form>
          </div>
          <div class="hr-text">or</div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <a href="#" class="btn btn-4 w-100">
                  <!-- Download SVG icon from http://tabler.io/icons/icon/brand-gmail -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-gmail">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16" />
                    <path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1" />
                    <path d="M16 4l-4 4l-4 -4" />
                    <path d="M4 6.5l8 7.5l8 -7.5" />
                  </svg>
                  Login with Gmail
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center text-secondary mt-3">Belum mempunyai akun? <a href="./sign-up.html" tabindex="-1">Sign up</a></div>
      </div>
    </div>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('protected/resources/js/tabler.min.js?1744816591') }}" defer></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN DEMO SCRIPTS -->
    <script src="{{ asset('protected/resources/js/demo.min.js?1744816591') }}" defer></script>
    <!-- END DEMO SCRIPTS -->
    <!-- BEGIN PAGE SCRIPTS -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var themeConfig = {
          theme: "light",
          "theme-base": "gray",
          "theme-font": "sans-serif",
          "theme-primary": "blue",
          "theme-radius": "1",
        };
        var url = new URL(window.location);
        var form = document.getElementById("offcanvasSettings");
        var resetButton = document.getElementById("reset-changes");
        var checkItems = function () {
          for (var key in themeConfig) {
            var value = window.localStorage["tabler-" + key] || themeConfig[key];
            if (!!value) {
              var radios = form.querySelectorAll(`[name="${key}"]`);
              if (!!radios) {
                radios.forEach((radio) => {
                  radio.checked = radio.value === value;
                });
              }
            }
          }
        };
        form.addEventListener("change", function (event) {
          var target = event.target,
            name = target.name,
            value = target.value;
          for (var key in themeConfig) {
            if (name === key) {
              document.documentElement.setAttribute("data-bs-" + key, value);
              window.localStorage.setItem("tabler-" + key, value);
              url.searchParams.set(key, value);
            }
          }
          window.history.pushState({}, "", url);
        });
        resetButton.addEventListener("click", function () {
          for (var key in themeConfig) {
            var value = themeConfig[key];
            document.documentElement.removeAttribute("data-bs-" + key);
            window.localStorage.removeItem("tabler-" + key);
            url.searchParams.delete(key);
          }
          checkItems();
          window.history.pushState({}, "", url);
        });
        checkItems();
      });
    </script>
    <!-- END PAGE SCRIPTS -->
  </body>
</html>
