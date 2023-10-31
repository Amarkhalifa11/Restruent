@extends('backend.inc.index')
@section('content')
    <h1 style="margin-left: 500px"> All Books </h1>
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
                                <th scope="col">email</th>
                                <th scope="col">subject</th>
                                <th scope="col">message</th>
                                <th scope="col">created at</th>
                                <th scope="col">updated at</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>

                        <tbody>


                            @php
                                $i = 1;
                            @endphp

                             @foreach ($contacts as $contact)

                                <tr>
                                    <td scope="row">{{ $i++ }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{{ $contact->message }}</td>
                                    <td>{{ $contact->created_at }}</td>
                                    <td>{{ $contact->updated_at }}</td>
                                    <td><a href="{{ route('backend.contact.destroy', ['id'=>$contact->id]) }}" class="btn btn-danger rounded-pill">delete</a></td>

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
