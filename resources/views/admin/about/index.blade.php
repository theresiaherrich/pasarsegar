<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 03:19:21 GMT -->
<head>

    <meta charset="utf-8" />
    <title>About Us | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('template/themesbrand.com/velzon/html/default/assets/images/favicon.ico') }}">

    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/swiper/swiper-bundle.min.css') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('template/themesbrand.com/velzon/html/default/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('template/themesbrand.com/velzon/html/default/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('template/themesbrand.com/velzon/html/default/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('template/themesbrand.com/velzon/html/default/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('admin.header')<!-- /.modal -->
        <!-- ========== App Menu ========== -->
        @include('admin.sidebar')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <div class="profile-foreground position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg">
                            <img src="{{ asset('template/themesbrand.com/velzon/html/default/assets/images/profile-bg.jpg') }}" alt="" class="profile-wid-img" />
                        </div>
                    </div>
                    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                        <div class="row g-4">
                            @forelse ($bot as $row)
                            <div class="col-auto">
                                <div class="avatar-lg">
                                    @if ($row->foto != null)
                                    <img src="{{ asset('storage/about/'.$row->foto) }}"
                                    alt="user-img" class="img-thumbnail rounded-circle">
                                @endif
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col">
                                <div class="p-2">
                                    <h3 class="text-white mb-1"> {{ $row->nama }}</h3>
                                    <p class="text-white-75"> {{ $row->email }}</p>
                                    <div class="hstack text-white-50 gap-1">
                                        <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i> {{ $row->alamat }}</div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="d-flex">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                                    </ul>
                                    <div class="flex-shrink-0">
                                        <a href="{{ route('aboutus.edit', $row->id) }}" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Tab panes -->
                                <div class="tab-content pt-4 text-muted">
                                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-xxl-3">
                                                <div class="card">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-3">Info</h5>
                                                        <div class="table-responsive">
                                                            <table class="table table-borderless mb-0">
                                                                <tbody>
                                                                    @forelse ($bot as $row)
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Full Name :</th>
                                                                        <td class="text-muted"> {{ $row->nama }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Mobile :</th>
                                                                        <td class="text-muted"> {{ $row->telp }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">E-mail :</th>
                                                                        <td class="text-muted"> {{ $row->email }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Location :</th>
                                                                        <td class="text-muted"> {{ $row->alamat }}
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            <div class="col-xxl-9">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-3">About</h5>
                                                        <p> {!! $row->deskripsi  !!}</p>
                                                        <div class="row">
                                                            <div class="col-6 col-md-4">
                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                                            <i class="ri-user-2-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <p class="mb-1">Facebook :</p>
                                                                        <h6 class="text-truncate mb-0"> {{ $row->facebook }}</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-6 col-md-4">
                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                                            <i class="ri-global-line"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <p class="mb-1">Instagram :</p>
                                                                        <a href="#" class="fw-semibold"> {{ $row->insta }}</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <!--end card-body-->
                                                </div><!-- end card -->
                                    </div>

                                    <!--end tab-pane-->
                                </div>
                                <!--end tab-content-->
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div><!-- container-fluid -->
            </div><!-- End Page-content -->


        </div><!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->


    <!-- JAVASCRIPT -->
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/js/plugins.js') }}"></script>

    <!-- swiper js -->
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- profile init js -->
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/js/pages/profile.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/js/app.js') }}"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 03:19:22 GMT -->
</html>
