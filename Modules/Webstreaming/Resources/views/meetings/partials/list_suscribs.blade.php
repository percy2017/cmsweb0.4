<div class="table-responsive">
    <table id="dataTable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th></th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Localidad</th>
            </tr>
        </thead>
        <tbody id="body-list">
            @forelse ($suscribs as $item)
            <tr>
                <td><img src="{{ 'https://gravatar.com/avatar/'.md5($item->email) }}" alt="Avatar" width="50px"></td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->city }}</td>
            </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No hay ninguna suscripción</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
