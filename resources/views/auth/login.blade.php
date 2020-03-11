<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StuckInAI</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/icon.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/comment.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/form.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/button.min.css" rel="stylesheet">
    <link href="{{ asset('/vendor/laravelLikeComment/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/path/to/material-icons/iconfont/material-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    {{-- <script src="/js/jquery.tinymce.min.js"></script> --}}
    {{-- <script src="/js/tiny.cloud.min.js"></script> --}}
    
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5/tinymce.min.js"></script>

    @yield('js')
</head>

<body id="phpbb" class="nojs notouch section-ucp ltr  sidebar-both body-layout-Boxed auth-page dark_base">
  <div class="dark">
    <div class="login_container ">
      <div class="login_container_left">
        <div class="login_container_left_section_content fancy_panel animated fadeIn">
        	<div class="login_container_padding login_form">
          <div class="card-header card-header-primary text-center">
            <h2 class="card-title">{{ __('StuckInAI') }}</h2>
            <h4 class="card-title" style="font-size:12px">{{ __('Login in to your account') }}</h4>
            <div class="social-line">
              <a href="#" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square" style="color:white"></i>
              </a>
              <a href="#" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter" style="color:white"></i>
              </a>
              <a href="#" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus" style="color:white"></i>
              </a>
            </div>
          </div>

            <form action="{{ route('login') }}" method="post" id="login">
              
              @csrf
              <fieldset class="fields1">
                <div>
                  <div class="input-group-prepend login-icon">
                    <span class="input-group-text">
                      <i class="material-icons">email</i>
                    </span>
                  </div>
                  <input type="text" tabindex="1" name="email" id="username" size="25" value="" class="inputbox" />
                  @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
                <div>
                  <div class="input-group-prepend login-icon">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" tabindex="2" id="password" name="password" size="25" class="inputbox" 
                  autocomplete="off" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required/>
                  @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="remember">                    
                  <label for="autologin"><input type="checkbox" name="autologin" id="autologin" tabindex="4"/>
                    Remember me
                  </label>                            
                </div>
               
                <input type="submit" name="login" tabindex="6" value="Login" class="button2 specialbutton" />
              </fieldset>            
            </form>
            <div class="login_form_forgot_link">
              <div class="back"><a href="/"><span class="material-icons">arrow_back</span></a></div>
              Back to home
            </div>
          </div>
        </div>
      </div>
                
    
	    <div class="login_container_right">
        <div class="login_container_right_section_content fancy_panel animated fadeIn"> 
			    <div class="login_container_padding"> 
            <h3>Register</h3>
            <p class="login_container_info">In order to login you must be registered. Registering takes only a few moments but gives you increased capabilities. The board administrator may also grant additional permissions to registered users. Before you register please ensure you are familiar with our terms of use and related policies. Please ensure you read any forum rules as you navigate around the board.</p>
            <p><strong><a class="terms" href="./ucp.php?mode=terms&amp;sid=c82cf35d437eaf563136938c6790869e">Terms of use</a> | <a class="terms" href="./ucp.php?mode=privacy&amp;sid=c82cf35d437eaf563136938c6790869e">Privacy policy</a></strong></p>
            <p><a href="{{ route('register') }}" class="button2 specialbutton">Register</a></p>
          </div> 
        </div>
      </div> 
    </div><!-- /.login_container -->
  </div>
  <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    {{-- <script src="/js/jquery.tinymce.min.js"></script> --}}
    <script src="{{ asset('/vendor/laravelLikeComment/js/script.js') }}" type="text/javascript"></script>
    <script src="/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    

</body>

</html>
