@foreach($items as $menu_item)
    @php ($hasChildren = count($menu_item->children) > 0)
    <li class="nav-item">
        <a class="nav-link waves-effect" href="{{ $menu_item->link()  }}" data-offset="100">
            <span class="clearfix d-none d-sm-inline-block">{{ $menu_item->title }}</span>
        </a>
    </li>
    
@endforeach