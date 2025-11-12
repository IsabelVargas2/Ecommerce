@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Brands List</h3>
            <a type="button" class="btn btn-success" href="{{ route('admin.brands.create') }}">Add new Brand</a>

            <table class="table aling-items-center mb-0">
                <thead>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                </thead>
                <tbody>
                    @foreach ($brands as $brand)
                        <tr>
                            <td class="aling-middle text-center">{{ $brand->id }}</td>
                            <td class="aling-middle text-center">{{ $brand->name }}</td>
                            <td class="aling-middle text-center">{{ $brand->created_at }}</td>
                            <td class="aling-middle text-center">{{ $brand->updated_at }}</td>
                            <td class="text-center">
                                <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        style="color: red; border: none; background: none; cursor: pointer;"
                                        onclick="return confirm('¿Estás seguro de eliminar esta marca?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Paginación --}}
            {{ $brands->links() }}
        </div>
    </div>
@endsection
