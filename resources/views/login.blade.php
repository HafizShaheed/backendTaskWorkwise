<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WorkWise Html Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/line-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/line-awesome-font-awesome.min.css') }}">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
</head>

<style>
    .error-message {
        margin-top: 5px; /* Adjust the margin as needed */
        color: red;
    }
</style>
<body class="sign-in" oncontextmenu="return true;">
    <div class="wrapper">
        <div class="sign-in-page">
            <div class="signin-popup">
                <div class="signin-pop">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cmp-info">
                                <div class="cm-logo">
                                    <img src="images/cm-logo.png" alt="">
                                    <p>Workwise, is a global freelancing platform and social networking where businesses and independent professionals connect and collaborate remotely</p>
                                </div>
                                <img src="images/cm-main-img.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="login-sec">
                                <ul class="sign-control">
                                    <li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>
                                    <li data-tab="tab-2"><a href="#" title="">Sign up</a></li>
                                   
                                </ul>
                                @if ($errors->any())
                                
                                
                                        @foreach ($errors->all() as $error)
                    
                                            <div class="alert alert-danger">
                                                {{ $error }}
                                            </div>
                                        @endforeach
                                    
                                
                            @endif
                                <div class="sign_in_sec current" id="tab-1">
                                    <h3>Sign in</h3>
                                    <form  id="loginForm" method="post" action="{{ route("attempt_login") }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="email" name="login_email" id="login_email" placeholder="Email" required>
                                                    <i class="la la-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="login_password" id="login_password" placeholder="Password" required>
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="cc" id="c1">
                                                        <label for="c1">
                                                            <span></span>
                                                        </label>
                                                        <small>Remember me</small>
                                                    </div>
                                                    <a href="#" title="">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="sign_in_sec" id="tab-2">
                                    <div class="dff-tab current" id="tab-3">
                                        <form name="registerForm" id="registerForm" >
                                            <div class="row">
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="firstname" id="firstname" placeholder="Full Name" >
                                                        <i class="la la-user"></i>
                                                    </div>
                                                    <span class="error-message mb-5" id="firstname-error"></span>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="lastname" id="lastname" placeholder="Full Name" >
                                                        <i class="la la-user"></i>
                                                    </div>
                                                    <span class="error-message" id="lastname-error"></span>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">

                                                        <select name="country" class="form-control form-control-sm all_countries" required>
                                                            <option value="0">Select Country</option>
                                                            @foreach ($countries as $country)
                                                            
                                                              <option id="country" value="{{$country['id']}}" >{{ $country['nicename'] }} </option>
                                                              
                                                            @endforeach
                                                          </select>
                                                        <i class="la la-globe"></i>
                                                    </div>
                                                    <span class="error-message" id="country-error"></span>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="email" name="email" id="email" placeholder="Email" >
                                                        
                                                        <i class="la la-at"></i>
                                                    </div>
                                                    <span class="error-message" id="email-error"></span>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="password" name="password" id="password" placeholder="Password" >
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                    <span class="error-message" id="password-error"></span>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat Password" >
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                    <span class="error-message" id="password_confirmation-error"></span>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="checky-sec st2">
                                                        <div class="fgt-sec">
                                                            <input type="checkbox" name="termCondition" id="termCondition">
                                                            <label for="termCondition">
                                                                <span></span>
                                                            </label>
                                                            <small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <button type="submit" id="signupButton" disabled>Get Started</button>
                                                </div>
                                                <div id="successMessage" class="mt-4   alert-success"> </div>
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
    </div>
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

    <script>
      
          
        $(document).ready(function() {


            $('#termCondition').change(function() {
                var agreeChecked = $(this).is(':checked');
                $('#signupButton').prop('disabled', !agreeChecked);
            });

            $('#registerForm').submit(function(e) {
                e.preventDefault();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                $('.error-message').text('');
        
                var formData = $(this).serialize();
         
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });
                $.ajax({
                    url:  '{{ route("signup") }}',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if(response){
                            $('#registerForm')[0].reset();

                            // Display success message
                            $('#successMessage').text(response.message);
            
                            // Optionally, you can hide the success message after a certain time
                            setTimeout(function() {
                                $('#successMessage').text('');
                            }, 5000);
                        }
                      
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(field, messages) {
                            var errorMessage = messages[0];
                            $('#' + field + '-error').text(errorMessage);
                        });
                    }
                });
            });
        });
        </script>
</body>
</html>
