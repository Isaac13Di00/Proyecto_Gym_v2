<table>
    <tr>
        <th>nombre</th>
        <th>acciones</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>
            <a href="{{route('user.showUser', $user->id)}}">
                <button>Ver</button>
            </a>
        </td>
    </tr>
    @endforeach
</table>