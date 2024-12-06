<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <table class="table table-dark">
    <thead>
        <tr>
            <th>Rol</th>
            <th>Permiso</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($roles as $rol)
        <tr>
            <td>{{ $rol->name }}</td>
            <td>
                @forelse ($rol->permissions as $permission)
                    <span>{{ $permission->name }}</span>
                @empty
                    <samp>No tiene permisos asignados.</samp>
                @endforelse
            </td>
            <td>
                <a href="{{ url('role/'.$rol->id.'/edit') }}">Editar</a>
            </td>
            <td>
                <form action="{{ url('dashboard/role/'.$rol->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>

    <body>
        
    </body>
</x-app-layout>