@extends('backend.admin.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="col-md-12">
        <div class="bg-light rounded h-100 p-4">
               <h6 class="mb-4">Student List </h6>
               <table class="table table-hover">
                   <thead>
                       <tr>

                           <th scope="col">SL</th>
                           <th scope="col"> Name</th>
                           <th scope="col"> Email</th>
                           <th scope="col"> Phone</th>
                           <th scope="col"> Dept</th>
                           <th scope="col">Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($students as $student )
                       <tr>
                           <th scope="row">{{ $loop->index+1}}</th>
                           <td>{{ $student->name }}</td>
                           <td>{{ $student->email }}</td>
                           <td>{{ $student->phone }}</td>
                           <td>{{ ucfirst($student->dept) }}</td> 
                           <td>
                               <a href="{{ url('/students/edit/'.$student->id) }}"> <i class="fa fa-edit"></i> </a>
                               <a href="{{ url('/students/delete/'.$student->id) }}" onclick="return confirm(' Are you sure delete this info ?')">
                                <i class="fa fa-trash"></i> </a>
                           </td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
           </div>
           {{ $students->links() }}
        </div>
    </div>
@endsection
