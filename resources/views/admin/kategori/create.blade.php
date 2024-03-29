<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/apps-ecommerce-add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 03:20:57 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Create Kategori | Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Plugins css -->
    <link href="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/dropzone/dropzone.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('template/themesbrand.com/velzon/html/default/assets/css/bootstrap.min.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('template/themesbrand.com/velzon/html/default/assets/css/icons.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('template/themesbrand.com/velzon/html/default/assets/css/app.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('template/themesbrand.com/velzon/html/default/assets/css/custom.min.css') }}" rel="stylesheet"
        type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('admin.header')

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        @include('admin.sidebar')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Create Kategori</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Create Kategori</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    {{-- <form id="createproduct-form" autocomplete="off" class="needs-validation" novalidate> --}}
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        @if (count($errors) > 0)
                                            @foreach ($errors->all() as $error)
                                                <div class="alert alert-warning">{{ $error }}</div>
                                            @endforeach
                                        @endif
                                        @if ($message = Session::get('error'))
                                            <div class="alert alert-warning">
                                                <p>{{ $message }}</p>
                                            </div>
                                        @endif
                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{ $message }}</p>
                                            </div>
                                        @endif
                                <form action="{{ route('datakategori.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label" for="nama_kategori">Kategori</label>
                                                <input type="text" class="form-control" name="nama_kategori"
                                                    id="nama_kategori" placeholder="Masukan kategori" required>
                                                <div class="invalid-feedback">Masukan Kategori</div>
                                            </div>

                                            <div class="mb-3">
                                                <div>
                                                    <h5 class="fs-14 mb-1">Foto-Foto Kategori</h5>
                                                    <p class="text-muted">Masukan kumpulan-kumpulan foto kategori</p>

                                                    <div class="dropzone">
                                                        <div class="form-control">
                                                            <input type="file" name="foto" id="foto"  multiple="multiple">
                                                        </div>
                                                        {{-- <div class="dz-message needsclick">
                                                            <div class="mb-3">
                                                                <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                            </div>

                                                            <h5>Upload Foto</h5>
                                                        </div>
                                                    </div> --}}

                                                    {{-- <ul class="list-unstyled mb-0" id="dropzone-preview">
                                                        <li class="mt-2" id="dropzone-preview-list">
                                                            <!-- This is used as the file preview template -->
                                                            <div class="border rounded">
                                                                <div class="d-flex p-2">
                                                                    <div class="flex-shrink-0 me-3">
                                                                        <div class="avatar-sm bg-light rounded">
                                                                            <img data-dz-thumbnail
                                                                                class="img-fluid rounded d-block"
                                                                                src="#" alt="Product-Image" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="pt-1">
                                                                            <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                                            <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                                            <strong class="error text-danger"
                                                                                data-dz-errormessage></strong>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-3">
                                                                        <button data-dz-remove
                                                                            class="btn btn-sm btn-danger">Delete</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul> --}}
                                                    <!-- end dropzon-preview -->
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <!-- end card -->
                                <!-- end card -->
                                <div class="text-end mb-3">
                                    <button type="submit" class="btn btn-success w-sm">Submit</button>
                                    <button type="reset" class="btn btn-warning w-sm">Reset</button>
                                </div>
                            </form>
                            </div>
                            <!-- end col -->

                    {{-- <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Publish</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="choices-publish-status-input" class="form-label">Status</label>

                                            <select class="form-select" id="choices-publish-status-input" data-choices data-choices-search-false>
                                                <option value="Published" selected>Published</option>
                                                <option value="Scheduled">Scheduled</option>
                                                <option value="Draft">Draft</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="choices-publish-visibility-input" class="form-label">Visibility</label>
                                            <select class="form-select" id="choices-publish-visibility-input" data-choices data-choices-search-false>
                                                <option value="Public" selected>Public</option>
                                                <option value="Hidden">Hidden</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Publish Schedule</h5>
                                    </div>
                                    <!-- end card body -->
                                    <div class="card-body">
                                        <div>
                                            <label for="datepicker-publish-input" class="form-label">Publish Date & Time</label>
                                            <input type="text" id="datepicker-publish-input" class="form-control" placeholder="Enter publish date" data-provider="flatpickr" data-date-format="d.m.y" data-enable-time>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Product Categories</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted mb-2"> <a href="#" class="float-end text-decoration-underline">Add
                                                New</a>Select product category</p>
                                        <select class="form-select" id="choices-category-input" name="choices-category-input" data-choices data-choices-search-false>
                                            <option value="Appliances">Appliances</option>
                                            <option value="Automotive Accessories">Automotive Accessories</option>
                                            <option value="Electronics">Electronics</option>
                                            <option value="Fashion">Fashion</option>
                                            <option value="Furniture">Furniture</option>
                                            <option value="Grocery">Grocery</option>
                                            <option value="Kids">Kids</option>
                                            <option value="Watches">Watches</option>
                                        </select>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Product Tags</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="hstack gap-3 align-items-start">
                                            <div class="flex-grow-1">
                                                <input class="form-control" data-choices data-choices-multiple-remove="true" placeholder="Enter tags" type="text" value="Cotton" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Product Short Description</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted mb-2">Add short description for product</p>
                                        <textarea class="form-control" placeholder="Must enter minimum of a 100 characters" rows="3"></textarea>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->

                            </div> --}}
                    <!-- end col -->
                </div>
                <!-- end row -->



            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings -->
    @include('admin.setting')

    <!-- JAVASCRIPT -->
    <script
        src="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/simplebar/simplebar.min.js') }}">
    </script>
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/feather-icons/feather.min.js') }}">
    </script>
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/js/pages/plugins/lord-icon-2.1.0.js') }}">
    </script>
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/js/plugins.js') }}"></script>

    <!-- ckeditor -->
    <script
        src="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}">
    </script>

    <!-- dropzone js -->
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/dropzone/dropzone-min.js') }}">
    </script>

    <script
        src="{{ asset('template/themesbrand.com/velzon/html/default/assets/js/pages/ecommerce-product-create.init.js') }}">
    </script>

    <!-- App js -->
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/js/app.js') }}"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/apps-ecommerce-add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 03:21:03 GMT -->

</html>
