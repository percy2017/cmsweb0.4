@foreach($items as $menu_item)
@php ($hasChildren = count($menu_item->children) > 0)
<p>

    <a target="_blank" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>

</p>
@endforeach