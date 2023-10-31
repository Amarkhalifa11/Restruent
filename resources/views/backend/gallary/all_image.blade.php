@extends('backend.inc.index')
@section('content')
    <h1 style="margin-left: 500px"> Gallary </h1>
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
                                <th scope="col">name image</th>
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

                             @foreach ($gallarys as $gallary)

                                <tr>
                                    <td scope="row">{{ $i++ }}</td>
                                    <td><img src="{{ asset('frontend/assets/img/gallery/' . $gallary->image) }}" width="50" alt="" srcset=""></td>
                                    <td>{{ $gallary->created_at }}</td>
                                    <td>{{ $gallary->updated_at }}</td>
                                    <td><a href="{{ route('backend.gallary.edit', ['id'=>$gallary->id]) }}" class="btn btn-primary rounded-pill">edit</a></td>
                                    <td><a href="{{ route('backend.gallary.destroy', ['id'=>$gallary->id]) }}" class="btn btn-danger rounded-pill">delete</a></td>

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
