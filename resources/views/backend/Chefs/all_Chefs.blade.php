@extends('backend.inc.index')
@section('content')
    <h1 style="margin-left: 500px"> All chefs </h1>
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
                                <th scope="col">name</th>
                                <th scope="col">image</th>
                                <th scope="col">position</th>
                                <th scope="col">twitter</th>
                                <th scope="col">instagram</th>
                                <th scope="col">facebook</th>
                                <th scope="col">linkiden</th>
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

                             @foreach ($chefs as $chef)

                                <tr>
                                    <td scope="row">{{ $i++ }}</td>
                                    <td>{{ $chef->name }}</td>
                                    <td><img src="{{ asset('frontend/assets/img/chefs/' . $chef->image) }}" width="50" alt="" srcset=""></td>
                                    <td>{{ $chef->position }}</td>
                                    <td>{{ $chef->twitter }}</td>
                                    <td>{{ $chef->instagram }}</td>
                                    <td>{{ $chef->facebook }}</td>
                                    <td>{{ $chef->linkiden }}</td>
                                    <td>{{ $chef->created_at }}</td>
                                    <td>{{ $chef->updated_at }}</td>
                                    <td><a href="{{ route('backend.chefs.edit', ['id'=>$chef->id]) }}" class="btn btn-primary rounded-pill">edit</a></td>
                                    <td><a href="{{ route('backend.chefs.destroy', ['id'=>$chef->id]) }}" class="btn btn-danger rounded-pill">delete</a></td>

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
