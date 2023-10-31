@extends('backend.inc.index')
@section('content')
    <h1 style="margin-left: 500px"> Add Chef </h1>
    <h1 style="margin-left: 500px "> user is :: {{ Auth::user()->name }}</h1>
    <hr>




    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <form action="{{ route('backend.chefs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Chef Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="inputText">
                            </div>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Chef position</label>
                            <div class="col-sm-10">
                                <input type="text" name="position" class="form-control" id="inputText">
                            </div>
                            @error('position')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Chef twitter</label>
                            <div class="col-sm-10">
                                <input type="text" name="twitter" class="form-control" id="inputText">
                            </div>
                            @error('twitter')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        
                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Chef instagram</label>
                            <div class="col-sm-10">
                                <input type="text" name="instagram" class="form-control" id="inputText">
                            </div>
                            @error('instagram')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Chef facebook</label>
                            <div class="col-sm-10">
                                <input type="text" name="facebook" class="form-control" id="inputText">
                            </div>
                            @error('facebook')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Chef linkiden</label>
                            <div class="col-sm-10">
                                <input type="text" name="linkiden" class="form-control" id="inputText">
                            </div>
                            @error('linkiden')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Chef image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control" id="inputText">
                            </div>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">add chef</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End Horizontal Form -->

                </div>
            </div>

        </div>
    </div>
@endsection
