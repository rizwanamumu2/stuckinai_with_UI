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

<body>
    
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <a id="back-top" href="#" data-action="backtop" class="vd_back-top visible">
         <i class="fa  fa-angle-up"> </i> 
    </a>

    <div class="vd_chat-menu hidden-xs">
        <div class="vd_mega-menu-wrapper">
            <div class="vd_mega-menu">
                <ul class="mega-ul">
                   <li class="profile mega-li pdlr-15 bordered"> 
                        <a class="mega-link" href="#"  data-action="click-trigger"> 
                            <span class="menu-name" style="padding-right:10px margin-left=15px; margin-right:15px; color:white; font-size:13px">
                                <i class="fa fa-comments append-icon"></i> Chat
                            </span>
                        </a> 
                    </li> 

                    <li class="profile mega-li pdlr-15 bordered"> 
                        <a class="mega-link" id="chat_list" href="#"  data-action="click-trigger" > 
                            <span class="menu-name" style="padding-right:5px; margin-left=5px; margin-right:5px; color:white; font-size:13px">
                                 Chat List
                            </span>
                        </a> 
                        <div class="vd_mega-menu-content  width-xs-3  center-xs-3 open-top" data-action="click-target" id="chatlist">
                            <div class="child-menu"> 
                            	<div class="content-list  content-image">
                                    <div data-rel="scroll">
                                        <ul class="list-wrapper pd-lr-10">
                                            <li>  
                                                <a href="#"> 
                                                    <div class="menu-icon"><img src="img/avatar/avatar.jpg" alt="example image"></div> 
                                                    <div class="menu-text">Jessylin
	                                                    <div class="menu-info">
                                                    	    <span class="menu-date">Administrator </span>                                                         
                                                	    </div>
                                                    </div>
                                                    <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                                                </a>
                                            </li>
                                            <li>  
                                                <a href="#"> 
                                                    <div class="menu-icon"><img src="img/avatar/avatar-2.jpg" alt="example image"></div> 
                                                    <div class="menu-text">Rodney Mc.Cardo
	                                                    <div class="menu-info">
                                                        	<span class="menu-date">Designer </span>                                                         
                                                    	</div>
                                                    </div>
                                                    <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div> 
                                                </a>
                                         </li>
                                         <li>  
                                             <a href="#"> 
                                                <div class="menu-icon"><img src="img/avatar/avatar-3.jpg" alt="example image"></div> 
                                                <div class="menu-text">Theresia Minoque
	                                                <div class="menu-info">
                                                    	<span class="menu-date">Engineering </span>                                                         
                                                    </div>
                                                </div>
                                                <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                                             </a>
                                         </li>
                                         <li>  
                                             <a href="#"> 
                                                     <div class="menu-icon"><img src="img/avatar/avatar-4.jpg" alt="example image"></div> 
                                                     <div class="menu-text">Greg Grog
	                                                     <div class="menu-info">
                                                         	<span class="menu-date">Developer </span>                                                         
                                                 		</div>
                                                     </div>
                                                     <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div> 
                                             </a>
                                         </li> 
                                         <li>  
                                             <a href="#"> 
                                                     <div class="menu-icon"><img src="img/avatar/avatar-5.jpg" alt="example image"></div> 
                                                     <div class="menu-text">Stefanie Imburgh
	                                                     <div class="menu-info">
                                                         	<span class="menu-date">Dancer</span>                                                         
                                                 		</div>
                                                     </div>
                                                     <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                                             </a>
                                         </li> 
                                         <li>  
                                             <a href="#"> 
                                                     <div class="menu-icon"><img src="img/avatar/avatar-6.jpg" alt="example image"></div> 
                                                     <div class="menu-text">Matt Demon
	                                                     <div class="menu-info">
                                                         	<span class="menu-date">Musician </span>                                                         
                                                 		</div>
                                                     </div>
                                                     <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                                             </a>
                                         </li>
                                         <li>  
                                             <a href="#"> 
                                                     <div class="menu-icon"><img src="img/avatar/avatar-7.jpg" alt="example image"></div> 
                                                     <div class="menu-text">Jeniffer Anastasia
	                                                     <div class="menu-info">
                                                         	<span class="menu-date">Senior Developer </span>                                                         
                                                 		</div>
                                                     </div>
                                                     <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                                             </a>
                                         </li>                    
                                         <li>  
                                             <a href="#"> 
                                                     <div class="menu-icon"><img src="img/avatar/avatar-8.jpg" alt="example image"></div> 
                                                     <div class="menu-text">Daniel Dreamon
	                                                     <div class="menu-info">
                                                         	<span class="menu-date">Sales Executive </span>                                                         
                                                 		</div>
                                                     </div>
                                                     <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                                             </a>
                                         </li>                                                                                                                  
                                     </ul>
                                     </div>
                                 </div> 
                             </div> 
                           </div>     
                    </li> 
                </ul> 
            </div> 
        </div>
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