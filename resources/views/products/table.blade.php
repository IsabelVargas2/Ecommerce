@extends('admin.layouts.app')

@section('content')
    <div class="card">

        <div class="card-body">
             <h3>Products List</h3>
            <table class="table aling-items-center mb-0">
                <thead>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                   {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>--}}
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Brand</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td class="aling-middle text-center">
                            {{ $product->id }}
                        </td>
                        <td class="aling-middle text-center">
                            {{ $product->name }}
                        </td>
                        {{-- <td class="aling-middle text-center">
                            {{ $product->description }}
                        </td> --}}
                        <td class="aling-middle text-center">
                            {{ $product->price }}
                        </td>
                        <td class="aling-middle text-center">
                            {{ $product->brand_id }}
                        </td>
                        <td class="aling-middle text-center">
                            {{ $product->category_id }}
                        </td>
                        <td class="aling-middle text-center">
                            {{ $product->created_at }}
                        </td>
                        <td class="aling-middle text-center">
                            {{ $product->updated_at }}
                        </td>
                        <td>
                            <a style="color: red" href="#">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection