@extends('layouts.app')

@section('content')
    <div class="row height d-flex justify-content-center align-items-center">
        <form class="form-outline" method="GET" action="#">
            <input type="text" name="searchData" id="form1" class="form-control" value="{{ request('searchData') }}"/>
            <label class="form-label" for="form1">Search</label>
        </form>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Database all weapons</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>weapon name</th>
                                <th>weapon type</th>
                                <th>weapon img</th>
                                <th>weapon lore</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($weapon as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->weaponname }}</td>
                                    <td>{{ $item->weapontype }}</td>
                                    <td>{{ $item->weaponimg }}</td>
                                    <td>{{ $item->weaponlore }}</td>
                                    <td>
                                        <a href="{{ url('edit-weapons/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('delete-weapons/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
