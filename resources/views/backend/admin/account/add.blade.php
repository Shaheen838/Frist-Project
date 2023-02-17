@extends('backend.admin.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Account Registion Form</h6>
                    <form action="{{ url('/accounts/store/') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name </label>
                            <input type="name" name='name' class="form-control" id="name"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email </label>
                            <input type="email" name='email' class="form-control" id="email"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone </label>
                            <input type="tel" name='phone' class="form-control" id="phone"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nid" class="form-label">Nid </label>
                            <input type="number" name='nid' class="form-control" id="nid"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type </label>
                            <select class="form-control" name="type">
                                <option selected disabled> Select a Type</option>
                                <option value="1"> Account Manager</option>
                                <option value="2"> Account Officer</option>
                             </select>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password </label>
                            <input type="password" name='nid' class="form-control" id="password"
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
