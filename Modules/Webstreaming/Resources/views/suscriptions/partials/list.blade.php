<div class="table-responsive">
    <table id="dataTable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Plan</th>
                <th>Estado</th>
                <th>Fecha de registro</th>
                {{-- <th class="actions text-right">Acciones</th> --}}
            </tr>
        </thead>
        <tbody>
            @forelse ($registers as $item)
                <tr>
                    <td>{{ $item->client }}</td>
                    <td>{{ $item->plan }}</td>
                    @if ($item->status)
                    <td><label class="label label-success">Activo</label></td>
                    @else
                    <td><label class="label label-warning">En espera</label></td> 
                    @endif
                    <td>{{ date('d-m-Y H:i', strtotime($item->created_at)) }} <br> <small>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small> </td>
                </tr>
            @empty
                
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
                get_data(search, page);
            }
        });
    });
</script>