@extends('backend.admin.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
             <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Department List </h6>
                        <table class="table table-hover">  
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col"> Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departments as $department )
                                 <tr>
                                    <th scope="row">{{ $loop->index+1}}</th>
                                    <td>{{ $department->name }}</td>
                                    <td>
                                        <a href="{{ url('/department/edit/'.$department->id.'/'.$department->slug) }}"> <i class="fa fa-edit"></i> </a>
                                        <a href="{{ url('/department/delete/'.$department->id) }}" onclick="return confirm('Are you delete this info ?')">
                                        <i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
@endsection
