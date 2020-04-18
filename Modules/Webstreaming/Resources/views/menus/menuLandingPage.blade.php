@foreach($items as $menu_item)
@php ($hasChildren = count($menu_item->children) > 0)
<li class="nav-item">
    <a class="nav-link title" href="{{ $menu_item->link() }}"  data-offset="90" >{{ $menu_item->title }}</a>
</li>
@endforeach