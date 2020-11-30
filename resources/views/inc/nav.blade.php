@section('nav')


<div class="TopImage"></div>

<div class="navpanel" id="navpanel">
   <span class="logo"> <a href="/">Sherlock-Twi.tk</a></span>
        {{-------НАЧАЛО НАВИГАЦИИ ПК-------}}
        <div class="but"> <!--*wd -->
            <ul>
                    <li><a href="{{ route('home') }}"><i class="fas fa-newspaper"></i> Новости</a></li>{{--
                --}}<li><a href="{{ route('download') }}"><i class="fas fa-download"></i> Скачать игру</a></li>{{--
                --}}<li><a href="{{ route('dev') }}"><i class="fas fa-code"></i> Разработчики</a></li>{{--
                --}}<li><a href="#" style="cursor: default"><i class="fas fa-caret-down"></i> Прочее</a>{{--
                    --}}<ul>{{--
                        --}}<li><a href="{{ route('faq') }}"><i class="fas fa-question-circle"></i> FAQ</a></li>{{--
                        --}}<li><a href="{{ route('lib') }}"><i class="fas fa-book"></i> Библиотека</a></li>{{--
                        --}}<li><a href="{{ route('donate') }}"><i class="fas fa-medkit"></i> Поддержка сайта</a></li>{{--
                    --}}</ul>{{--
                --}}</li>{{--
            --}}</ul>{{--
        --}}</div>
        <div class="regist">
            @guest
            <a href="{{ route('register') }}" class="button reg"><i class="fas fa-sign-in-alt"></i> Регистрация</a></a>
            <a href="{{ route('login') }}" class="button reg log"><i class="fas fa-sign-in-alt"></i> Вход</a></a>
            @endguest
            @auth
            <a href="{{ route('logout') }}" class="button reg log"><i class="fas fa-sign-in-alt"></i> Выход</a></a>
            @endauth
        </div>
        {{-------КОНЕЦ НАВИГАЦИИ ПК-------}}
        {{-------НАЧАЛО НАВИГАЦИИ ТЕЛЕФОНОВ-------}}
        <div class="MobileMenu" id="MobileMenu" onclick="OpenMobileMenu()"><i class="fas fa-bars fa-2x"></i></div>
        <div class="menu" id="menu">
            <div onclick="closemenus()" id="closemenu" class="closemenu"><i class="far fa-times-circle fa-3x"></i></div>
            <ul>
                <a href="{{ route('home') }}"><li><i class="fas fa-newspaper"></i> Новости</li></a>
                <a href="{{ route('download') }}"><li><i class="fas fa-download"></i> Скачать игру</li></a>
                <a href="{{ route('dev') }}"><li><i class="fas fa-code"></i> Разработчики</li></a>
                <li ><div id="othermbut"><i class="fas fa-caret-down"></i> Прочее</div>
                    <ul id="oth">
                        <a href="{{ route('faq') }}"><li><i class="fas fa-question-circle"></i> FAQ</li></a>
                        <a href="{{ route('lib') }}"><li><i class="fas fa-book"></i> Библиотека</li></a>
                        <a href="{{ route('donate') }}"><li><i class="fas fa-medkit"></i> Поддержка сайта</li></a>
                    </ul>
                </li>
                @guest
                <a href="{{ route('register') }}"><li class="mobreg"><i class="fas fa-sign-in-alt"></i> Регистрация</li></a>
                <a href="{{ route('login') }}"><li class="mobreg"><i class="fas fa-sign-in-alt"></i> Вход</li></a>
                @endguest
                @auth
                <a href="{{ route('logout') }}" class="button reg log"><i class="fas fa-sign-in-alt"></i> Выход</a></a>
                @endauth
            </ul>
        </div>
        {{-------КОНЕЦ НАВИГАЦИИ ТЕЛЕФОНОВ-------}}
</div>
