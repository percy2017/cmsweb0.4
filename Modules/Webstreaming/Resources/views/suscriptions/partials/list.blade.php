<div class="table-responsive">
    <table id="dataTable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Plan</th>
                <th>Detalles</th>
                <th>Fecha de registro</th>
                <th class="actions text-right">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($registers as $item)
                <tr>
                    <td>{{ $item->client }}</td>
                    <td>{{ $item->plan }}</td>
                    @switch($item->status)
                        @case(1)
                            <td>
                                @if ($item->hs_plan_id > 1)
                                    <p>
                                        Del {{ date('d-m-Y', strtotime($item->start)) }} al {{ date('d-m-Y', strtotime($item->finish)) }}
                                        <br>
                                        <small>Vence {{ \Carbon\Carbon::parse($item->finish)->diffForHumans() }}</small>                                    
                                    </p>
                                @endif
                                
                                Estado: <label class="label label-success">Activo</label>
                            </td>
                            @break
                        @case(2)
                            <td>Estado: <label class="label label-danger">Vencido</label></td> 
                            @break
                        @default
                            <td>Estado: <label class="label label-warning">En espera</label></td> 
                    @endswitch
                    <td>{{ date('d-m-Y H:i', strtotime($item->created_at)) }} <br> <small>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small> </td>
                    <td class="no-sort no-click bread-actions">
                        <a href="#" title="Borrar" class="btn btn-sm btn-danger pull-right delete" onclick="drop({{ $item->id }})">
                            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Borrar</span>
                        </a>
                        @if ($item->status)
                            @if ($item->status==1)
                                <a href="#" title="Dar de baja" class="btn btn-sm btn-warning pull-right delete" onclick="down({{ $item->id }})">
                                    <i class="voyager-power"></i> <span class="hidden-xs hidden-sm">Desactivar</span>
                                </a>
                            @endif
                            <a href="#" data-toggle="modal" data-target="#modal_edit" title="Editar" class="btn btn-sm btn-primary pull-right edit" onclick="edit('{{ json_encode($item) }}')">
                                <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>
                            </a>
                        @else
                            <a href="#" title="Borrar" class="btn btn-sm btn-success pull-right edit" onclick="up({{ $item->id }})">
                                <i class="voyager-wand"></i> <span class="hidden-xs hidden-sm">Activar</span>
                            </a>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Ningún dato para mostrar</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<div class="col-md-12">
    <div class="col-md-4" style="overflow-x:auto">
        @if(count($registers)>0)
            <p class="text-muted">Mostrando del {{$registers->firstItem()}} al {{$registers->lastItem()}} de {{$registers->total()}} registers.</p>
        @endif
    </div>
    <div class="col-md-8" style="overflow-x:auto">
        <nav class="text-right">
            {{ $registers->links() }}
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