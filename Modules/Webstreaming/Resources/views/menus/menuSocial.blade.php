@foreach($items as $menu_item)
@php ($hasChildren = count($menu_item->children) > 0)
<li class="nav-item">
    <a class="nav-link">
        <i class="{{ $menu_item->icon_class }}"  href="{{ $menu_item->link() }}"></i>
    </a>
</li>
@endforeach