@extends('layouts\main2')

@section('content')
    @include('Partials.navbar2')


    <!--Main layout-->
    <main class="bg-light" style="margin-top: 58px; margin-left:260px; margin-right: 60px">

        <div class="container pt-4">

            <div class="row">
                <div class="col">
                    <h5 class="" style="font-weight: 400">Edit Order</h5>
                </div>
            </div>

            <br>


            <div class="row mt-4">

                <div class="col">

                    <div class="card shadow-sm bg-white rounded-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <a href="/register"><button class="btn text-light bg-success">Tambah User</button></a>
                                </div>

                                {{-- Form Search --}}
                                <div class="col col-md-auto">
                                    <form action="/editUser/cari" method="GET">
                                        <input type="text" name="username" placeholder="username.." value="{{ old('username') }}">
                                        <input type="text" name="name" placeholder="name.." value="{{ old('name') }}">
                                        <input type="submit" value="Cari">
                                    </form>
                                </div>
                            </div>


                            <br>
                            <br>
                            <table class="table table-hover table-borderless table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->username }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->password }}</td>
                                            <td>
                                                <form action="/editUser/{{ $item->id }}" method="POST">
                                                    @method("delete")
                                                    @csrf
                                                    <button class="btn text-danger text-decoration-none">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                            <td>
                                                <a class="text-warning text-decoration-none" href="/editUser/mengubah/{{ $item->id }}">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </main>


    {{-- @include('Partials.footer') --}}
@endsection
