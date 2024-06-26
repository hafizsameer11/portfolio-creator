@extends('admin.layouts.main')
@section('main-section')
    <div class="content">
        <!-- Top Bar Start -->
        <div class="topbar">
            <nav class="navbar-custom">
                <ul class="list-inline float-right mb-0">
                    <!-- language-->
                    <li class="list-inline-item hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control" />
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                    <li class="list-inline-item dropdown notification-list hide-phone">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect text-white" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt="" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right language-switch">
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg"
                                    alt="" height="16" /><span> Italian </span></a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg"
                                    alt="" height="16" /><span> French </span></a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg"
                                    alt="" height="16" /><span> Spanish </span></a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/russia_flag.jpg"
                                    alt="" height="16" /><span> Russian </span></a>
                        </div>
                    </li>
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ti-email noti-icon"></i>
                            <span class="badge badge-danger noti-icon-badge">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <span class="badge badge-danger float-right">745</span>Messages
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="assets/images/users/avatar-2.jpg" alt="user-img"
                                        class="img-fluid rounded-circle" />
                                </div>
                                <p class="notify-details">
                                    <b>Charles M. Jones</b><small class="text-muted">Dummy text of the printing
                                        and typesetting
                                        industry.</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="assets/images/users/avatar-3.jpg" alt="user-img"
                                        class="img-fluid rounded-circle" />
                                </div>
                                <p class="notify-details">
                                    <b>Thomas J. Mimms</b><small class="text-muted">You have 87 unread
                                        messages</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="assets/images/users/avatar-4.jpg" alt="user-img"
                                        class="img-fluid rounded-circle" />
                                </div>
                                <p class="notify-details">
                                    <b>Luis M. Konrad</b><small class="text-muted">It is a long established
                                        fact that a reader
                                        will</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                View All
                            </a>
                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ti-bell noti-icon"></i>
                            <span class="badge badge-success noti-icon-badge">23</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <span class="badge badge-danger float-right">87</span>Notification
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary">
                                    <i class="mdi mdi-cart-outline"></i>
                                </div>
                                <p class="notify-details">
                                    <b>Your order is placed</b><small class="text-muted">Dummy text of the printing
                                        and typesetting
                                        industry.</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success">
                                    <i class="mdi mdi-message"></i>
                                </div>
                                <p class="notify-details">
                                    <b>New Message received</b><small class="text-muted">You have 87 unread
                                        messages</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning">
                                    <i class="mdi mdi-martini"></i>
                                </div>
                                <p class="notify-details">
                                    <b>Your item is shipped</b><small class="text-muted">It is a long established
                                        fact that a reader
                                        will</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                View All
                            </a>
                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>Welcome</h5>
                            </div>
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-account-circle m-r-5 text-muted"></i>
                                Profile</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i>
                                My Wallet</a>
                            <a class="dropdown-item" href="#"><span
                                    class="badge badge-success float-right">5</span><i
                                    class="mdi mdi-settings m-r-5 text-muted"></i>
                                Settings</a>
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-lock-open-outline m-r-5 text-muted"></i>
                                Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i>
                                Logout</a>
                        </div>
                    </li>
                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>

                <div class="clearfix"></div>
            </nav>
        </div>
        <!-- Top Bar End -->

        <div class="page-content-wrapper">
            <div class="container">

                <form action="" class="" style="width:100%">
                    @csrf
                    <div class="row">



                        <div class="form-group col-lg-4">
                            <label for="" class="form-label">Text</label>
                            <input type="text" class="form-control" name="" id="">
                            {{-- <label for="" class="form-label">Text</label> --}}
                        </div>
                    </div>
                </form>
                <div class="form-group ">
                    <label for="form-label">Image Upload</label>
                    <div id="image" class="dropzone dz-clickable">
                        <div class="dz-message needsclick">
                            <br>Drop files here or click to upload.<br><br>
                        </div>
                    </div>

                </div>

            </div>
            <!-- container -->
        </div>
        <!-- Page content Wrapper -->
    </div>
@endsection
@section('custom-script')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        Dropzone.autoDiscover = false;
        const dropzone = $("#image").dropzone({
            init: function() {
                this.on('addedfile', function(file) {
                    if (this.files.length > 10) {
                        this.removeFile(this.files[0]);
                    }
                });
            },
            url: "{{ route('temp-image-upload') }}",
            maxFiles: 10,
            paramName: 'image',
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, response) {
                $("#image_id").val(response.image_id);
                //console.log(response)
            }
        });
    </script>
@endsection
