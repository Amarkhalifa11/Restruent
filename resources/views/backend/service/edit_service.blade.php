@extends('backend.inc.index')
@section('content')
    <h1 style="margin-left: 500px"> edit Service </h1>
    <h1 style="margin-left: 500px "> user is :: {{ Auth::user()->name }}</h1>
    <hr>




    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <form action="{{ route('backend.service.update', ['id'=>$service->id]) }}" method="POST">
                        @csrf


                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">title</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{$service->title}}" name="title" class="form-control" id="inputText">
                            </div>
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">description</label>
                            <div class="col-sm-10">
                                <textarea name="description" value="" class="form-control" id="inputText">{{$service->description}}</textarea>
                            </div>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-3 mt-5">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">user_id </label>
                             <div class="col-sm-10">
 
                                <select class="form-select" value="{{$service->user_id}}" name="user_id" >
                                    @foreach ($users as $user)
                                    
                                    <option value="{{$user->id}}">{{$user->name}}</option>

                                    @endforeach

                                </select>
                                
                            </div>
                            
                            @error('user_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">edit Service</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End Horizontal Form -->

                </div>
            </div>

        </div>
    </div>
@endsection
