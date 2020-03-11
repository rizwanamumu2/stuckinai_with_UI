<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3  bg-white border-bottom box-shadow" >
    <h5 class="my-0 mr-md-auto font-weight-normal"><a id="logo" style="text-decoration:none;" href="/">StuckInAI</a></h5>
    <nav class="my-2 my-md-0 mr-md-3">
        {{-- search form --}}
        @include('layouts.search')
    </nav>
    <nav class="my-2 my-md-0 mr-md-3" id="nav">
        <a class="p-2 " href="/question/create">Ask Question</a>
        <a class="p-2 " href="/questions">Browse Questions</a>
        <a class="p-2 " href="/datasets">Datasets</a>
        <a class="p-2 " href="/dataset/create">Add Data</a>
    </nav>
    @guest
        <a class="btn btn-outline-primary" href="/login">Sign in</a>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <img width="25" class="profile-image" src="{{asset('uploads/avatars')}}/{{Auth::user()->avatar}}" alt="">
            </a>
            
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <h5 style="text-transform:capitalize" class="profile-block-padding">
                <a class="profile" href="/profile/{{ Auth::user()->id }}">{{ Auth::user()->name }}</a> <span class="caret"></span>
                </h5>
                <p style="color:#777" class="profile-block-padding">
                    {{ Auth::user()->email }}
                </p>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</div>