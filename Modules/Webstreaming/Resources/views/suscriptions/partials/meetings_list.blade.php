<div class="table-responsive">
    <table id="dataTable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Inicio</th>
                <th>Creado</th>
                <th class="actions text-right">Acciones</th>
            </tr>
        </thead>
        <tbody id="body-list">
            @forelse ($meetings as $item)
            <tr>
                <td style="max-width: 400px">
                    <b>{{ $item->name }}</b> <button type="button" class="btn btn-link btn-copy" onclick="copy('{{ $item->slug }}')">Copiar <i class="fa fa-copy"></i></button>
                    <br>
                    <small>{{ $item->descriptions }}</small>
                    <hr style="margin-bottom:5px; margin-top: 10px">
                    Participantes:
                    <button class="btn btn-success btn-sm btn-badge" data-toggle="tooltip" title="Activos"><i class="voyager-smile"></i> {{ $item->participants_active }}</button>
                    <button class="btn btn-danger btn-sm btn-badge" data-toggle="tooltip" title="Rechazados"><i class="voyager-frown"></i> {{ $item->participants_reject }}</button>
                    <button class="btn btn-default btn-sm btn-badge" data-toggle="tooltip" title="Total"><i class="voyager-people"></i> {{ $item->participants }}</button>
                </td>
                <td>{{ date('d-m-Y H:i', strtotime($item->day.' '.$item->start)) }} <br> <small>{{ \Carbon\Carbon::parse($item->day.' '.$item->start)->diffForHumans() }}</small> </td>
                <td><small>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small> </td>
                <td class="no-sort no-click bread-actions">
                    <a href="#" title="Suscritos" class="btn btn-sm btn-success pull-right edit" data-toggle="modal" data-target="#modal_participants" onclick="suscribs_list({{ $item->id }})">
                        <i class="voyager-people"></i> <span class="hidden-xs hidden-sm">Suscritos ({{ $item->suscriptions }})</span>
                    </a>
                    {{-- <a href="{{ url('conferencia/'.$item->slug) }}" title="Ir" target="_blank" class="btn btn-sm btn-warning pull-right view">
                        <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Ir</span>
                    </a> --}}
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
    .btn-badge{
        padding: 0px 10px
    }
</style>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
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
                $(this).html('Copiar <i class="fa fa-copy"></i>');
            }, 2000);
        });
    });
</script>