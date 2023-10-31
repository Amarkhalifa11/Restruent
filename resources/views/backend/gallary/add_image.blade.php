@extends('backend.inc.index')
@section('content')
    <h1 style="margin-left: 500px"> Add image </h1>
    <h1 style="margin-left: 500px "> user is :: {{ Auth::user()->name }}</h1>
    <hr>




    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <form action="{{ route('backend.gallary.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control" id="inputText">
                            </div>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">add image</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End Horizontal Form -->

                </div>
            </div>

        </div>
    </div>
@endsection
