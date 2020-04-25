<div class="table-responsive">
    <table id="dataTable" class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha y hora de inicio</th>
                <th>Creación</th>
                <th class="actions text-right">Acciones</th>
            </tr>
        </thead>
        <tbody id="body-list">
            @forelse ($meetings as $item)
            <tr id="tr-{{ $item->id }}">
                <td id="td-name_{{ $item->id }}">{{ $item->name }}</td>
                <td>{{ date('d-m-Y H:i', strtotime($item->start)) }} <br> <small>{{ \Carbon\Carbon::parse($item->start)->diffForHumans() }}</small> </td>
                <td><small>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small> </td>
                <td class="no-sort no-click bread-actions">
                    {{-- <a href="#" title="Borrar" class="btn btn-sm btn-danger pull-right delete" data-id="1" id="delete-1">
                        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Borrar</span>
                    </a> --}}
                    <a href="#" title="Editar" class="btn btn-sm btn-primary pull-right edit" data-toggle="modal" data-target="#edit_modal" onclick="setUpdate({{ $item->id }}, '{{ $item->name }}', '{{ $item->start }}')">
                        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>
                    </a>
                    <a href="{{ url('meet/'.$item->slug) }}" title="Ir" target="_blank" class="btn btn-sm btn-warning pull-right view">
                        <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Ir</span>
                    </a>
                </td>
            </tr>
            @empty
                
            @endforelse
        </tbody>
    </table>
</div>
<div class="col-md-12">
    <div class="col-md-4" style="overflow-x:auto">
        @if(count($meetings)>0)
            <p class="text-muted">Mostrando del {{$meetings->firstItem()}} al {{$meetings->lastItem()}} de {{$meetings->total()}} registros.</p>
        @endif
    </div>
    <div class="col-md-8" style="overflow-x:auto">
        <nav class="text-right">
            {{ $meetings->links() }}
        </nav>
    </div>
</div>

<script>
    $(document).ready(function(){

        $('.page-link').click(function(e){
            e.preventDefault();
            let link = $(this).attr('href');
            if(link){
                page = link.split('=')[1];
                // Set variable de pagina actual
                page_actual = page;
                $('#data-list').html(`<div class="text-center"><img src="${loader}" height="200px"></div>`);
                list(search, page);
            }
        });
    });
</script>