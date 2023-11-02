@extends('backend.inc.index')
@section('content')
    <h1 style="margin-left: 500px"> All Events </h1>
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
                                <th scope="col">image</th>
                                <th scope="col">price</th>
                                <th scope="col">description</th>
                                <th scope="col">user_id</th>
                                <th scope="col">advan1</th>
                                <th scope="col">advan2</th>
                                <th scope="col">advan3</th>
                                <th scope="col">advan4</th>
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

                             @foreach ($events as $event)

                                <tr>
                                    <td scope="row">{{ $i++ }}</td>
                                    <td>{{ $event->title }}</td>
                                    <td><img src="{{ asset('frontend/assets/img/' . $event->image) }}" width="50" alt="" srcset=""></td>
                                    <td>{{ $event->price }}</td>
                                    <td>{{ $event->description }}</td>
                                    <td>{{ $event->user->name  }}</td>
                                    <td>{{ $event->advan1 }}</td>
                                    <td>{{ $event->advan2 }}</td>
                                    <td>{{ $event->advan3 }}</td>
                                    <td>{{ $event->advan4 }}</td>
                                    <td>{{ $event->created_at }}</td>
                                    <td>{{ $event->updated_at }}</td>
                                    <td><a href="{{ route('backend.events.edit', ['id'=>$event->id]) }}" class="btn btn-primary rounded-pill">edit</a></td>
                                    <td><a href="{{ route('backend.events.destroy', ['id'=>$event->id]) }}" class="btn btn-danger rounded-pill">delete</a></td>

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
