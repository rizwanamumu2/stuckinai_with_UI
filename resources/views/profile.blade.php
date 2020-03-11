@extends('layouts.master')

@section('content')

<div class="vd_content-section clearfix" id="pro-h">
    <div class="row">
        <div class="col-sm-3">
            <div class="panel widget light-widget panel-bd-top">
                <div class="panel-heading no-title"> </div>
                    <div class="panel-body">
                        
                        <div class="text-center vd_info-parent"> 
                            <img alt="example image" style="width:100%" src="{{asset('uploads/avatars')}}/{{Auth::user()->avatar}}"> 
                        </div>
                        <div class="row">
                            <div class="col-xs-12"> 
                                <a class="btn vd_btn vd_bg-green btn-xs btn-block no-br" 
                                    href="/profile/{{Auth::user()->id}}/updateimage">
                                    <i class="fa fa-camera" ></i>Upload Photo</a>
                            </div>
                            <div class="col-xs-12"> 
                                <a class="btn vd_btn vd_bg-grey btn-xs btn-block no-br">
                                    <i class="fa fa-envelope append-icon"></i>Send Message</a> 
                            </div>
                        </div>
                        <h2 class="font-semibold mgbt-xs-5">{{Auth::user()->name}}</h2>
                        @if(Auth::user()->edit != null) 
                        @if(Auth::user()->edit->description === null)                           
                        <h4 class="text-muted">description</h4>
                        @else     
                            
                        <h4 class="text-muted">{{Auth::user()->edit->description}}</h4>

                        @endif 
                        @endif                   
                        <div class="mgtp-20">
                            <table class="table table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <td style="width:60%;">Status</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>User Rating</td>
                                        <td>
                                            <i class="fa fa-star vd_yellow fa-fw"></i>
                                            <i class="fa fa-star vd_yellow fa-fw"></i>
                                            <i class="fa fa-star vd_yellow fa-fw"></i>
                                            <i class="fa fa-star vd_yellow fa-fw"></i>
                                            <i class="fa fa-star vd_yellow fa-fw"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Member Since</td>
                                        <td>{{Auth::user()->created_at->diffForHumans()}}  </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- panel widget -->      
            </div>
            <div class="col-sm-9">
                <div class="tabs widget">
                    <ul class="nav nav-tabs widget" id="pro-nav">
                        <li class="active"> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                        <li> <a data-toggle="tab" href="#questions">Questions <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>    
                        <li> <a data-toggle="tab" href="#datasets"> Datasets <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                        
                    </ul>
                    <div class="tab-content">
                        <div id="profile-tab" class="tab-pane active">
                            <div class="pd-20">
                                <div class="vd_info tr"> 
                                    <a class="btn vd_btn btn-xs vd_bg-yellow pro-h" href="/edit/{{ Auth::user()->id }}/create"> 
                                        <i class="fa fa-pencil append-icon"></i> Edit </a> 
                                </div>      
                                <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-user profile-icon fa-2x"></i> ABOUT</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            @if(Auth::user()->edit != null) 
                                                @if(Auth::user()->edit->firstname === null)    
                                                    <label class="col-xs-5 control-label text-muted">First Name:</label>
                                                    <div class="col-xs-7 controls">

                                                    </div>
                                                @else
                                                    <label class="col-xs-5 control-label">First Name:</label>
                                                    <div class="col-xs-7 controls">
                                                        {{Auth::user()->edit->firstname}}
                                                    </div>
                                                @endif
                                            @endif

              <!-- col-sm-10 -->    
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            @if(Auth::user()->edit != null) 
                                                @if(Auth::user()->edit->lastname === null)   
                                                    <label class="col-xs-5 control-label text-muted">Last Name:</label>
                                                    <div class="col-xs-7 controls">

                                                    </div>
                                                @else
                                                <label class="col-xs-5 control-label">Last Name:</label>
                                                <div class="col-xs-7 controls">
                                                    {{Auth::user()->edit->lastname}}
                                                </div>
                                            @endif
                                        @endif
              <!-- col-sm-10 --> 
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row mgbt-xs-0">
                                        <label class="col-xs-5 control-label ">User Name:</label>
                                        <div class="col-xs-7 controls">{{Auth::user()->name}}</div>
              <!-- col-sm-10 -->     
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row mgbt-xs-0">
                                        <label class="col-xs-5 control-label">Email:</label>
                                        <div class="col-xs-7 controls">{{Auth::user()->email}}</div>
              <!-- col-sm-10 --> 
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row mgbt-xs-0">
                                        @if(Auth::user()->edit != null) 
                                            @if(Auth::user()->edit->city === null)   
                                                <label class="col-xs-5 control-label text-muted">City:</label>
                                                <div class="col-xs-7 controls">

                                                </div>
                                            @else
                                                <label class="col-xs-5 control-label">City:</label>
                                                <div class="col-xs-7 controls">
                                                    {{Auth::user()->edit->city}}
                                                </div>
                                            @endif
                                        @endif
                            <!-- col-sm-10 --> 
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row mgbt-xs-0">
                                        @if(Auth::user()->edit != null) 
                                            @if(Auth::user()->edit->country === null)  
                                                <label class="col-xs-5 control-label">Country:</label>
                                                <div class="col-xs-7 controls">

                                                </div>
              <!-- col-sm-10 -->            @else
                                                <label class="col-xs-5 control-label">Country:</label>
                                                <div class="col-xs-7 controls">
                                                    {{Auth::user()->edit->country}}
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row mgbt-xs-0">
                                        @if(Auth::user()->edit != null) 
                                            @if(Auth::user()->edit->dob === null) 
                                                <label class="col-xs-5 control-label">Birthdate:</label>
                                                <div class="col-xs-7 controls">

                                                </div>
              <!-- col-sm-10 -->            @else
                                                <label class="col-xs-5 control-label">Birthdate:</label>
                                                <div class="col-xs-7 controls">
                                                    {{Auth::user()->edit->dob}}
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row mgbt-xs-0">
                                        @if(Auth::user()->edit != null) 
                                            @if(Auth::user()->edit->interest === null)    
                                                <label class="col-xs-5 control-label text-muted">Interests:</label>
                                                <div class="col-xs-7 controls">

                                                </div>
                                            @else
                                                <label class="col-xs-5 control-label">Interests:</label>
                                                <div class="col-xs-7 controls">
                                                    {{Auth::user()->edit->interest}}
                                                </div>
                                            @endif
                                        @endif
              <!-- col-sm-10 --> 
                                    </div>
                                </div>
                            
                                <div class="col-sm-6">
                                    <div class="row mgbt-xs-0">
                                        @if(Auth::user()->edit != null) 
                                            @if(Auth::user()->edit->phone === null)    
                                                <label class="col-xs-5 control-label text-muted">Phone:</label>
                                                <div class="col-xs-7 controls">
                                                </div>
                                            @else
                                                <label class="col-xs-5 control-label">Phone:</label>
                                                <div class="col-xs-7 controls">
                                                    {{Auth::user()->edit->phone}}
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                                                         
                            <hr class="pd-10"  />
                    
                            <div class="row">
                                <div class="col-sm-7 mgbt-xs-20">
                                    <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-file-text-o mgr-10 profile-icon fa-2x"></i> EXPERIENCE</h3>
                                    <div class="content-list content-menu">
                                        <ul class="list-wrapper">
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">Owner</a> at <a href="http://www.venmond.com">Vendroid Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2013 ~ Now</span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">CEO</a> at <a href="http://www.venmond.com">Mc. Dondon</a> <span class="menu-info"><span class="menu-date"> March 2011 ~ February 2013</span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">Web Designer</a> at <a href="http://www.venmond.com">Web Design Company Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2010 ~ February 2011</span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">Sales</a> at <a href="http://www.venmond.com">Sales Company Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2009 ~ February 2010</span></span> </span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-trophy mgr-10 profile-icon fa-2x"></i> EDUCATION</h3>
                                    <div class="content-list content-menu">
                                        <ul class="list-wrapper">
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> Bachelor's degree, E-Commerce/Electronic Commerce at <a href="http://www.venmond.com">UCLA</a> <span class="menu-info"><span class="menu-date"> August 2003 ~ July 2008</span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com">Web Design Education</a> <span class="menu-info"><span class="menu-date"> March 2006 ~ February 2007</span></span> </span> </li>                
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com">St. Louis High School</a> <span class="menu-info"><span class="menu-date"> August 2000 ~ July 2003 </span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com">St. Monica Junior High School</a> <span class="menu-info"><span class="menu-date"> August 1998 ~ July 2000</span></span> </span> </li>
                                        </ul>
                                    </div>            
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="questions" class="tab-pane">
    	                <div class="pd-20">
				            <div class="vd_info tr"> 
                                <a class="btn vd_btn btn-xs vd_bg-yellow pro-h"> 
                                    <i class="fa fa-plus append-icon"></i> 
                                        Ask Question 
                                </a> 
                            </div>         
				            <h3 class="mgbt-xs-15 mgtp-10 font-semibold">
                                <i class="fa fa-bolt mgr-10 profile-icon"></i> 
                                Questions
                            </h3> 
                               
                        
				                <table class="navtable">
							        <thead>
							    	    <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            
                                            <th>Submitted On</th>                                        
							    	    </tr>
							        </thead>   
							        <tbody>
                                        @php
                                            $counter =1;
                                        @endphp

                                        @foreach($questions as $user->questions)
                                            
                                           
                                            <tr>
                                                <td scope="row">{{ $counter }}</td>
                                                <td style="color:#0095ff;font-weight:700">
                                                    <a href="/question/{{ $user->questions->id }}">
                                                        {{ $user->questions->title }}
                                                    </a>
                                                </td>
                                                
                                                <td>{{ $user->questions->created_at->toFormattedDateString() }}</td>
                                                <td class="menu-action rounded-btn">
                                            	                                         
                                            	    <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" 
                                                    data-original-title="edit" href="{{route('question.edit',['id'=>$user->questions->id])}}">
                                                       <i class="fa fa-pencil"></i>
                                                    </a>
                                                </td>
                                                <td class="menu-action rounded-btn">
                                            	    <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" 
                                                    data-original-title="delete" href="{{route('question.delete',['id'=>$user->questions->id])}}">
                                                       <i class="fa fa-times"></i>
                                                    </a>

							    		        </td> 
                                            </tr>
                                           
                                            @php
                                                $counter++;
                                            @endphp
                                        @endforeach

                                    
							        </tbody>
						        </table>
                                <div class=""> </div>  
                               
                            </div>
                        </div>
                    

                    <div id="datasets" class="tab-pane">
    	                <div class="pd-20">
				            <div class="vd_info tr"> 
                                <a class="btn vd_btn btn-xs vd_bg-yellow pro-h"> 
                                    <i class="fa fa-plus append-icon"></i> 
                                        Add Dataset 
                                </a> 
                            </div>         
				            <h3 class="mgbt-xs-15 mgtp-10 font-semibold">
                                <i class="fa fa-bolt mgr-10 profile-icon"></i> 
                                Datasets
                            </h3> 
                               
                            
				                <table class="navtable">
							        <thead>
							    	    <tr>
                                            <th scope="col">#</th>
                                            <th scope="col" style="width:350px">Title</th>
                                            <th scope="col" style="width:260px">Submitted On</th> 
                                            <th scope="col" style="width:260px">Download Link</th>                                       
							    	    </tr>
							        </thead>   
							        <tbody>
                                        @php
                                            $counter =1;
                                        @endphp

                                        @foreach($datasets as $user->datasets)
                                            
                                           
                                            <tr>
                                                <td scope="row">{{ $counter }}</td>
                                                
                                                <td style="color:#0095ff;font-weight:700">
                                                    <a href="/question/{{ $user->questions->id }}">
                                                        {{ $user->datasets->name }}
                                                    </a>
                                                </td>
                                                
                                                <td>{{ $user->datasets->created_at->toFormattedDateString() }}</td>
                                                <td>
                                                    <a download="{{ $user->datasetS->file }}" class="btn btn-sm btn-primary" 
                                                    href="/download/{{ $user->datasets->file }}">Download</a>
                                                </td>
                                                <td class="menu-action rounded-btn">
                                            	                                          
                                            	    <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                       <i class="fa fa-pencil"></i>
                                                    </a>
                                                </td> 
                                                <td class="menu-action rounded-btn">
                                            	    <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                       <i class="fa fa-times"></i>
                                                    </a>
                                                </td> 

							    		        
                                            </tr>
                                           
                                            @php
                                                $counter++;
                                            @endphp
                                        @endforeach

                                    
							        </tbody>
						        </table>
                                <div class=""> </div>  
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


