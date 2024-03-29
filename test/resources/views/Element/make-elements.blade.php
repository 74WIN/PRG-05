@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Add Element</h4>
                        <a href="{{ url('elementsData') }}" class="btn btn-danger float-end">BACK</a>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('make-elements') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group mb-3">
                                <label for="">Element Name</label>
                                <input type="text" name="elementname" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Element type</label>
                                <input type="text" name="elementtype" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Element image</label>
                                <input type="file" name="elementimg" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Element lore</label>
                                <input type="text" name="elementlore" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save Element</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
