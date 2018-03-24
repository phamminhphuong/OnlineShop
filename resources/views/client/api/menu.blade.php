<ul class="nav-list">
    @foreach($menus as $menu)
    <li class="nav-item">
        <a href="/menu/{!! $menu->id !!}" title="{!!$menu->name!!}">{!!$menu->name!!}</a>
        <ul class="nav-submenu">
            @foreach($menu->Category as $category)
            <li class="nav-submenu-item">
                <a href="may-do-huyet-ap.html" title="{!!$category->name!!}">{!!$category->name!!}</a>
            </li>
            @endforeach
        </ul>
    </li>
    @endforeach
</ul>