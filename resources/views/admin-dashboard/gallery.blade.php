@extends('admin-dashboard.layouts.body')
@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

         @include('admin-dashboard.layouts.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                   <!-- Topbar -->
                   <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    
                    @include('admin-dashboard.layouts.topbar')

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   <!-- Page Heading -->
                   <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
                   </div>

                    <div class="row mb-4 ml-2">
                        <span class="btn-md btn-success" style="cursor:pointer; padding-top:10px; padding-bottom:10px; padding-left:10px; padding-right:10px; border-radius:10px; border:0px; margin-top:10px; margin-bottom:10px;"
                         data-toggle="modal" data-target="#branchModal">                   
                            <i class="fas fa-fw fa-plus"></i>
                              Add Picture
                         </span>
                    </div>

                    <div class="row">

                        <!-- DataTales Example -->
                    <div class="card col-md-12 col-lg-12 shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Testimonies</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="branchesTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>picture</th>
                                            <th>Year</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>picture</th>
                                            <th>Year</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img style="border:2px solid blue; border-radius:100%;" src="corporate-dashboard/img/kra_logo.png" height="50" width="50" alt="Corporate Logo">
                                            </td>
                                            <td>2022</td>
                                            <td>
                                                <button class="btn-sm btn-warning">edit</button>
                                                <button class="btn-sm btn-info">delete</button>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <img style="border:2px solid blue; border-radius:100%;" src="corporate-dashboard/img/kra_logo.png" height="50" width="50" alt="Corporate Logo">
                                            </td>
                                            <td>2022</td>
                                            <td>
                                                <button class="btn-sm btn-warning">edit</button>
                                                <button class="btn-sm btn-info">delete</button>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <img style="border:2px solid blue; border-radius:100%;" src="corporate-dashboard/img/kra_logo.png" height="50" width="50" alt="Corporate Logo">
                                            </td>
                                            <td>2022</td>
                                            <td>
                                                <button class="btn-sm btn-warning">edit</button>
                                                <button class="btn-sm btn-info">delete</button>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <img style="border:2px solid blue; border-radius:100%;" src="corporate-dashboard/img/kra_logo.png" height="50" width="50" alt="Corporate Logo">
                                            </td>
                                            <td>2022</td>
                                            <td>
                                                <button class="btn-sm btn-warning">edit</button>
                                                <button class="btn-sm btn-info">delete</button>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                     </div>

                 
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                       
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Add Employee Modal-->
    <div class="modal fade" id="branchModal" tabindex="-1" role="dialog" aria-labelledby="employeeModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Picture</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="exampleInputEmail1">Year</label><br>
                        <select style="border-radius:5px; width:100%; padding:10px;" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                          <option selected>2018</option>
                          <option value="1">2019</option>
                          <option value="1">2022</option>
                          <option value="1">2021</option>
                          <option value="1">2022</option>
                        </select>
                    </div>
                    <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                        <label style="margin-left:0px; font-weight:bold;" for="exampleInputEmail1">Photo</label>
                        <input type="file" style="padding-top:10px; padding-bottom:40px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name">
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Add Picture</a>
                </div>
                </form>
            </div>
        </div>
    </div>

    @include('admin-dashboard.layouts.javascript')

@endsection