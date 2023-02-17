@extends('backend.admin.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Depertment Form</h6>
                    <form action="{{ url('/department/store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="depertment" class="form-label">Name </label>
                            <input type="text" name='name' class="form-control" id="depertment"
                                aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
@endsection
