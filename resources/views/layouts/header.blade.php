
<header class="header">
    <div class="header__inner">

        <h1 class="header__title header-title">
            <a href="{{ url('/') }}">
                FIND YOUR<br>
                BEST PARTNER
            </a>
        </h1>

        <nav class="header__nav nav" id="js-nav">
            <ul class="nav__items nav-items">          
                <li class="nav-items__item">
                    <a href="{{ route('test') }}">犬種診断</a>
                </li>
                <li class="nav-items__item">
                    <a href="{{ route('dogprofile') }}">世界のわんちゃんたち</a>
                </li>
                <li class="nav-items__item">
                    <a href="{{ route('inquiry') }}">お問い合わせ</a>
                </li>
            </ul>
        </nav>
        <button class="header__hamburger hamburger" id="js-hamburger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>