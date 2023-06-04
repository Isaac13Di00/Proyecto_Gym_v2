<table>
    <tr>
        <th>nombre</th>
        <th>acciones</th>
    </tr>
    @foreach($admins as $admin)
    <tr>
        <td>{{$admin->name}}</td>
        <td>
            <a href="#">
                <button>Ver</button>
            </a>
        </td>
    </tr>
    @endforeach
</table>