<footer>
    <div class="blu-bar">
        <div class="container">
            <ul>
                @foreach ( $bluBarContent as $item ) 
                    <li>
                        <a href="{{ $item['link'] }}">
                            <img src="{{ Vite::asset($item['img']) }}" alt="{{ $item['title'] }}">
                            <span>{{ $item['title'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="nav-list">
        <div class="container">
            <nav>
                <div class="col">
                    <div class="list">
                        <h3>dc comics</h3>
                        <ul>
                            @foreach ($dcComicsContent as $item)  
                                <li>
                                    <a href="{{ $item['link'] }}"> {{ $item['title'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="list">
                        <h3>shop</h3>
                        <ul>
                            @foreach ($shopContent as $item )
                                <li>
                                    <a href="{{ $item['link'] }}"> {{ $item['title'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="list">
                        <h3>dc</h3>
                        <ul>
                            @foreach ($dcContent as $item)
                                <li>
                                    <a href="{{ $item['link'] }}"> {{ $item['title'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="list">
                        <h3>sites</h3>
                        <ul>
                            @foreach ($sitesContent as $item )
                                <li>
                                    <a href="{{ $item['link'] }}"> {{ $item['title'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="logo-bg">
            </div>
        </div>
    </div>        
    <div class="social-bar">
        <div class="container">
            <a class="btn" href="#">SIGN-UP NOW!</a>
            <div class="social-box">
                <span>FOLLOW US</span>
                    @foreach ($socialList as $item )
                        <a href="{{ $item['link'] }}">
                            <img src="{{ Vite::asset($item['img']) }}" alt="{{ $item['social'] }}">
                        </a>
                    @endforeach
            </div>
        </div>
    </div>
</footer>