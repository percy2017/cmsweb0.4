@foreach($items as $menu_item)
    @php ($hasChildren = count($menu_item->children) > 0)
    <li>
        <a class="dark-grey-text" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
    </li>
@endforeach