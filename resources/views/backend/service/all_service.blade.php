@extends('backend.inc.index')
@section('content')
    <h1 style="margin-left: 500px"> All Service </h1>
    <h1 style="margin-left: 500px "> user is :: {{ Auth::user()->name }}</h1>
    <hr>




    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    @if (session('success'))
                        <h2 class="text-center text-success my-3">{{session('success')}}</h2>
                    @endif
                    
                    <!-- Table with stripped rows -->
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">title</th>
                                <th scope="col">description</th>
                                <th scope="col">user_name</th>
                                <th scope="col">created at</th>
                                <th scope="col">updated at</th>
                                <th scope="col">edit</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>

                        <tbody>


                            @php
                                $i = 1;
                            @endphp

                            @foreach ($services as $service)

                                <tr>
                                    <td scope="row">{{ $i++ }}</td>
                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td>{{ $service->user->name }}</td>
                                    <td>{{ $service->created_at }}</td>
                                    <td>{{ $service->updated_at }}</td>
                                    <td><a href="{{ route('backend.service.edit', ['id'=>$service->id]) }}" class="btn btn-primary rounded-pill">edit</a></td>
                                    <td><a href="{{ route('backend.service.destroy', ['id'=>$service->id]) }}" class="btn btn-danger rounded-pill">delete</a></td>

                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
@endsection
