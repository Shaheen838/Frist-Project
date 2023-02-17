<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{ url('/admin/dashboard') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>ADMIN PANEL</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('/backend/assets/') }}/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0"> Admin </h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ url('/admin/dashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i> Departments</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ '/department/create' }}" class="dropdown-item">Add</a>
                    <a href="{{ '/department/manage' }}" class="dropdown-item">Manage</a>

                </div>
            </div>
            <a href="{{ url('/students') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Students</a>
            <a href="{{ url('/teachers') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Teachers</a>
            <a href="{{ url('/admissions') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Admission</a>
            <a href="{{ url('/accounts') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Accounts</a>

        </div>
    </nav>
</div>
