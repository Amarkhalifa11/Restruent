@extends('backend.inc.index')
@section('content')
    <h1 style="margin-left: 500px"> Add Event </h1>
    <h1 style="margin-left: 500px "> user is :: {{ Auth::user()->name }}</h1>
    <hr>




    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <form action="{{ route('backend.events.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Event title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="inputText">
                            </div>
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Event price</label>
                            <div class="col-sm-10">
                                <input type="text" name="price" class="form-control" id="inputText">
                            </div>
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Event description</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="description" class="form-control" id="inputText"></textarea>
                            </div>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Event advan1</label>
                            <div class="col-sm-10">
                                <input type="text" name="advan1" class="form-control" id="inputText">
                            </div>
                            @error('advan1')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Event advan2</label>
                            <div class="col-sm-10">
                                <input type="text" name="advan2" class="form-control" id="inputText">
                            </div>
                            @error('advan2')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Event advan3</label>
                            <div class="col-sm-10">
                                <input type="text" name="advan3" class="form-control" id="inputText">
                            </div>
                            @error('advan3')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Event advan4</label>
                            <div class="col-sm-10">
                                <input type="text" name="advan4" class="form-control" id="inputText">
                            </div>
                            @error('advan4')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">event image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control" id="inputText">
                            </div>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">add Event</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End Horizontal Form -->

                </div>
            </div>

        </div>
    </div>
@endsection
