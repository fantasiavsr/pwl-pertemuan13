@extends('layouts\main2')

@section('content')


    <!--Main layout-->
    <main class="bg-light" style="margin-top: 58px; margin-left:260px; margin-right: 60px">

        <div class="container pt-4">

            {{-- <div class="row">
                <div class="col">
                    <h5 class="" style="font-weight: 400">Dashboard</h5>
                </div>
            </div> --}}

        <br>

        <div class="row">

            <div class="col">

                <div class="card shadow-sm text-light rounded-3" style="background-color: #576ACA">
                    <div class="card-body">
                        <div class="row">
                            <h7 class="card-subtitle mb-2 fw-lighter">Home Page</h7>
                        </div>
                        <div class="row">
                            <h5 class="card-title fw-bolder">Edit Data</h5>
                        </div>
                        <div class="row mt-3">
                            <form action="/editUser/{{ $id}}" method="post">
                                @csrf
                                {{-- @method('PUT') --}}
                                <input type="hidden" name="id" value="{{ $data['id'] }}">

                                <div class="mb-3">
                                    <label for="" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username"
                                        name="username" value="{{ $data['username'] }}">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name"
                                        name="name" value="{{ $data['name'] }}">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Email;</label>
                                    <input type="email" class="form-control" id="email"
                                        name="email" value="{{ $data['email'] }}">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Password;</label>
                                    <input type="text" class="form-control" id="password"
                                        name="password" value="{{ $data['password'] }}">
                                </div>

                                <button type="submit" class="btn btn-outline-light">Update</button>

                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>

    </main>


    {{-- @include('Partials.footer') --}}
@endsection
