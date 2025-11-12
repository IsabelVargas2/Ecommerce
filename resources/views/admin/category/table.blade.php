@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Categories List</h3>
            <a type="button" class="btn btn-success" href="{{ route('admin.category.create') }}">Add new Category</a>

            <table class="table aling-items-center mb-0">
                <thead>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="aling-middle text-center">{{ $category->id }}</td>
                            <td class="aling-middle text-center">{{ $category->name }}</td>
                            <td class="aling-middle text-center">{{ $category->created_at }}</td>
                            <td class="aling-middle text-center">{{ $category->updated_at }}</td>
                            <td class="text-center">
                                <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        style="color: red; border: none; background: none; cursor: pointer;"
                                        onclick="return confirm('¿Estás seguro de eliminar esta categoría?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Paginación --}}
            {{ $categories->links() }}
        </div>
    </div>
@endsection
