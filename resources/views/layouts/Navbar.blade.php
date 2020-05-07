<style>
a:hover{
color: #255784;
background: #2196f3;
box-shadow: 0 0 10px #2196f3,0 0 40px #2196f3,0 0 80px #2196f3;
transition-delay: 1s;
}
a span{
position: absolute;
display: block;
}
a span:nth-child(1){
top: 0;
height: 2px;
background: linear-gradient(90deg,transparent,#2196f3);
}
a:hover span:nth-child(1){
transition: 1s;
}
a span:nth-child(3){
bottom: 0;
height: 2px;
background: linear-gradient(270deg,transparent,#2196f3);
}
a:hover span:nth-child(3){
transition: 1s;
transition-delay: 0.5s;
}
a span:nth-child(2){

right: 0;
width: 2px;
background: linear-gradient(180deg,transparent,#2196f3);
}
a:hover span:nth-child(2){
transition: 1s;
transition-delay: 0.25s;
}
a span:nth-child(4){
left: 0;
width: 2px;
background: linear-gradient(360deg,transparent,#2196f3);
}
a:hover span:nth-child(4){
    transition: 1s;
transition-delay: 0.75s;
}
</style>
<div class="bg">
    <div>
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="header__logo">
                        <img src="{{ asset('img/activebox-logo.png')}}" alt="">
                    </div>
                    <nav class="nav">
                        <a class="nav__link" href="#">Magazine</a>
                        <a class="nav__link" href="#">{{$text ?? 'Works'}}</a>
                        <a class="nav__link" href="{{route('tasks.index')}}">Work shops</a>
                        <a class="nav__link" href="{{url('/sms_page')}}">Testimonials</a>

                        <a class="nav__link">
                            <!-- Authentication Links -->
                            @guest
                                    <a style="color: #8c8c8c" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                    <a>
                                        <a class="nav__link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </a>
                                @endif
                            @else
                                <a class="nav__link">
                                  <a>    {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="nav__link">
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </a>
                            @endguest
                        </a>
                    </nav>
                </div>
            </div>
        </header>
    </div>
</div>


