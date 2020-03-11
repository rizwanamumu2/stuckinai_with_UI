@extends('layouts.master')

@section('content')
<div class="dark">
<div class="login_container ">
    <div class="login_container_left">
        <div class="login_container_left_section_content fancy_panel animated fadeIn">
        	<div class="login_container_padding login_form">
                @if(Auth::user()->edit!== null)  
                    @if(Auth::user()->id === Auth::user()->edit->user_id)
                        <form action="/profile/store" method="post" enctype="multipart/form-data" 
                        class="pure-form pure-form-stacked" id="edit-form">
                            @csrf
                            <h2 class="login-title">Edit Information</h2>
                
                            <fieldset class="fields1">
                                <div class="first_half">
                                    <div>
                                        <label for="firstname">First Name</label>
                                        <input type="name" tabindex="1" name="firstname" id="firstname" 
                                        size="25" value="{{Auth::user()->edit->firstname}}" class="inputbox" />
                                    </div>
                                    <div>
                                        <label for="lastname">Last Name</label>
                                        <input type="name" tabindex="2" id="lastname" name="lastname" size="25" 
                                        class="inputbox" value="{{Auth::user()->edit->lastname}}" />
                                    </div>

                                    <div>
                                        <label for="name">User Name</label>
                                        <input type="name" tabindex="3" id="name" name="name" size="25" 
                                        class="inputbox" value="{{Auth::user()->edit->name}}" />
                                    </div>

                                    <div>
                                        <label for="phone">Phone</label>
                                        <input type="text" tabindex="4" id="phone" name="phone" size="25" 
                                        class="inputbox" value="{{Auth::user()->edit->phone}}" />
                                    </div>
                                    <div>
                                        <label for="gender">Gender</label>
                                    </div>
                                    <div>
                                        <input type="radio" tabindex="5" id="gender" name="gender" size="25" 
                                        class="inputbox" value="male" {{ ($user->edit->gender=="Male")? "checked" : "" }}>Male
                                        <input type="radio" tabindex="5" id="gender" name="gender" size="25" 
                                        class="inputbox" value="female" {{ ($user->edit->gender=="Female")? "checked" : "" }}>Female
                                        
                                    </div>
                                </div>


                                <div class="second_half">
                                    <div>
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" tabindex="6" id="dob" name="dob" size="25" 
                                        class="inputbox" value="{{Auth::user()->edit->dob}}" />
                                        
                                    </div>
                                    <div>
                                        <label for="description">Description</label>
                                        <input type="description" tabindex="7" id="description" name="description" size="25" 
                                        class="inputbox" value="{{Auth::user()->edit->description}}" >
                                    </div>
                                    <div>
                                        <label for="dob">Interests</label>
                                        <input type="interest" tabindex="8" id="interest" name="interest" size="25" 
                                        class="inputbox" value="{{Auth::user()->edit->interest}}" />
                                    </div>
                                    <div>
                                        <label for="city">City</label>
                                        <input type="city" tabindex="9" id="city" name="city" size="25" 
                                        class="inputbox" value="{{Auth::user()->edit->city}}" />
                                    </div>
                                    <div>
                                        <label for="country">Country</label>
                                        <input type="country" tabindex="10" id="country" name="country" size="25" 
                                        class="inputbox" value="{{Auth::user()->edit->country}}" />
                                    </div>
                                </div>

                                <input type="submit" name="login" tabindex="6" value="Update" 
                                class="button2 specialbutton" />                               
                            </fieldset>
                        </form>
                    @endif
                @else
                    <form action="/profile/store" method="post" enctype="multipart/form-data" 
                    class="pure-form pure-form-stacked" id="edit-form">
                        @csrf
                        <h2 class="login-title">Edit Information</h2>
                
                        <fieldset class="fields1">
                        <div class="first_half">
                            <div>
                                <label for="firstname">First Name</label>
                                <input type="name" tabindex="1" name="firstname" id="firstname" 
                                size="25" value="" class="inputbox" />
                            </div>
                            <div>
                                <label for="lastname">Last Name</label>
                                <input type="name" tabindex="2" id="lastname" name="lastname" size="25" 
                                class="inputbox" value="" />
                            </div>

                            <div>
                                <label for="name">User Name</label>
                                <input type="name" tabindex="3" id="name" name="name" size="25" 
                                class="inputbox" value="" />
                            </div>

                            <div>
                                <label for="phone">Phone</label>
                                <input type="text" tabindex="4" id="phone" name="phone" size="25" 
                                class="inputbox" value="" />
                            </div>
                            <div>
                                <label for="gender">Gender</label>
                            </div>
                            <div>
                                <input type="radio" tabindex="5" id="gender" name="gender" size="25" 
                                class="inputbox" value="male" style="color: white"/>Male
                                <input type="radio" tabindex="5" id="gender" name="gender" size="25" 
                                class="inputbox" value="female" style="color: white"/>Female
                                
                            </div>
                        
                            <div class="second_half">
                            <div>
                                <label for="dob">Date of Birth</label>
                                <input type="date" tabindex="6" id="dob" name="dob" size="25" 
                                class="inputbox" value="" />
                               
                            </div>
                            <div>
                                <label for="description">Description</label>
                                <input type="description" tabindex="7" id="description" name="description" size="25" 
                                class="inputbox" value="" />
                            </div>
                            <div>
                                <label for="dob">Interests</label>
                                <input type="interest" tabindex="8" id="interest" name="interest" size="25" 
                                class="inputbox" value="" />
                            </div>
                            <div>
                                <label for="city">City</label>
                                <input type="city" tabindex="9" id="city" name="city" size="25" 
                                class="inputbox" value="" />
                            </div>
                            <div>
                                <label for="country">Country</label>
                                <input type="country" tabindex="10" id="country" name="country" size="25" 
                                class="inputbox" value="" />
                            </div>
                        </div>
                                                                                   
                            <input type="submit" name="login" tabindex="6" value="Update" 
                            class="button2 specialbutton" />                               
                                    
                        </fieldset>
                    </form>
                 @endif  
            </div>
        </div>
    </div>      
    
	    <div class="login_container_right">
        <div class="login_container_right_section_content fancy_panel animated fadeIn"> 
			<div class="login_container_padding"> 
                <h3>Register</h3>
                <p class="login_container_info">In order to login you must be registered. Registering takes only a few moments but gives you increased capabilities. The board administrator may also grant additional permissions to registered users. Before you register please ensure you are familiar with our terms of use and related policies. Please ensure you read any forum rules as you navigate around the board.</p>
                <p><strong><a class="terms" href="./ucp.php?mode=terms&amp;sid=c82cf35d437eaf563136938c6790869e">Terms of use</a> | <a class="terms" href="./ucp.php?mode=privacy&amp;sid=c82cf35d437eaf563136938c6790869e">Privacy policy</a></strong></p>
                <p><a href="./ucp.php?mode=register&amp;sid=c82cf35d437eaf563136938c6790869e" class="button2 specialbutton">Register</a></p>
            </div> 
        </div>
    </div> 
	             

</div><!-- /.login_container -->
</div>
@endsection