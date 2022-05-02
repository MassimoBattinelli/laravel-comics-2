<header class="container">
    <nav>
        <img src="{{ asset('images/dc-logo.png')}}" alt="">

        @php
            $arrMenu = [
                [
                    'name' => 'characters',
                    'route' => ''
                ],
                [
                    'name' => 'comics',
                    'route' => 'comics'
                ],
                [
                    'name' => 'movies',
                    'route' => ''
                ],
                [
                    'name' => 'tv',
                    'route' => ''
                ],
                [
                    'name' => 'games',
                    'route' => ''
                ],
                [
                    'name' => 'collectibles',
                    'route' => ''
                ],
                [
                    'name' => 'videos',
                    'route' => ''
                ],
                [
                    'name' => 'fans',
                    'route' => ''
                ],
                [
                    'name' => 'news',
                    'route' => ''
                ],
                [
                    'name' => 'shop',
                    'route' => ''
                ],
            ]
        @endphp
        <ul>
            @foreach ($arrMenu as $menuItem)
                <li><a href="/{{$menuItem['route']}}">{{$menuItem['name']}}</a></li>
            @endforeach
        </ul>
        <div class="input-sec">
            <input type="text" placeholder="Search">
            <i class="fas fa-search"></i>
        </div>
    </nav>
</header>
<div class="banner-header"><img src="{{asset('images/jumbotron.jpg')}}" alt=""></div>
