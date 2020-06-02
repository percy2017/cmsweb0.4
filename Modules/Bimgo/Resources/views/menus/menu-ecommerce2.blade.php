@foreach($items as $menu_item)
    @php ($hasChildren = count($menu_item->children) > 0)
    <li class="nav-item ml-3">

        <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="{{ $menu_item->link() }}">

          <i class="{{ $menu_item->icon_class }}"></i>{{ $menu_item->title }}</a>

    </li>
@endforeach