<div class="table-responsive">
    <table id="dataTable" class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Participantes</th>
                <th>Fecha y hora de inicio</th>
                <th>Creación</th>
                <th class="actions text-right">Acciones</th>
            </tr>
        </thead>
        <tbody id="body-list">
            @forelse ($meetings as $item)
            <tr>
                <td id="td-name_{{ $item->id }}">{{ $item->name }} <button type="button" class="btn btn-link btn-copy" onclick="copy('{{ $item->slug }}')">Copiar</button> </td>
                <td>{{ $item->participants_active }} <small>activo(s)</small><br> {{ $item->participants }} <small>total</small></td>
                <td>{{ date('d-m-Y H:i', strtotime($item->day.' '.$item->start)) }} <br> <small>{{ \Carbon\Carbon::parse($item->day.' '.$item->start)->diffForHumans() }}</small> </td>
                <td><small>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small> </td>
                <td class="no-sort no-click bread-actions">
                    {{-- <a href="#" title="Borrar" class="btn btn-sm btn-danger pull-right delete" data-id="1" id="delete-1">
                        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Borrar</span>
                    </a> --}}
                    <a href="#" title="Editar" class="btn btn-sm btn-primary pull-right edit" data-toggle="modal" data-target="#edit_modal" onclick="edit('{{ json_encode($item) }}')">
                        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>
                    </a>
                    <a href="{{ url('conferencia/'.$item->slug) }}" title="Ir" target="_blank" class="btn btn-sm btn-warning pull-right view">
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

<style>
    .btn-copy{
        padding:0px;
        margin:5px 0px;
        color: #1D80DC !important;
        font-size: 12px;
    }
</style>

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

        // Script adicional
        $('.btn-copy').click(function(){
            $(this).text('Copiado');
            setTimeout(() => {
                $(this).text('Copiar');
            }, 2000);
        });
    });
</script>