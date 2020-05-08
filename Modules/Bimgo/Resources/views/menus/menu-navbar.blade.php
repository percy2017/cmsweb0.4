@foreach($items as $menu_item)
    @php ($hasChildren = count($menu_item->children) > 0)
    <li class="nav-item">
        <a class="nav-link heather-color" href="{{ $menu_item->link()  }}" data-offset="100">
            <strong>{{ $menu_item->title }}</strong>
        </a>
    </li>
@endforeach
