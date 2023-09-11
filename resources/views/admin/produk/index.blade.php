<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/apps-ecommerce-customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 03:21:13 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Data Produk | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon"
        href="{{ asset('template/themesbrand.com/velzon/html/default/assets/images/favicon.ico') }}">

    <!-- Sweet Alert css-->
    <link href="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/sweetalert2/sweetalert2.min.css') }}"
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
                                <h4 class="mb-sm-0">Data Product</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Product</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="customerList">
                                <div class="card-header border-bottom-dashed">

                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm">
                                            <div>
                                                <h5 class="card-title mb-0">Data Product</h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="d-flex flex-wrap align-items-start gap-2">
                                                <button class="btn btn-soft-danger" id="remove-actions"
                                                    onClick="deleteMultiple()"><i
                                                        class="ri-delete-bin-2-line"></i></button>
                                                <a href="{{ route('dataproduk.create') }}" class="btn btn-success add-btn"><i
                                                        class="ri-add-line align-bottom me-1"></i> Add Product</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive table-card mb-1">
                                            <table class="table align-middle" id="customerTable">
                                                <thead class="table-light text-muted">
                                                    <tr>
                                                        <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="checkAll" value="option">
                                                            </div>
                                                        </th>

                                                        <th class="sort" data-sort="foto">Foto Produk</th>
                                                         <th class="sort" data-sort="nama_produk">Produk</th>
                                                        <th class="sort" data-sort="satuan">Jumlah</th>
                                                        <th class="sort" data-sort="harga">Harga</th>
                                                        <th class="sort" data-sort="kategori">Kategori</th>
                                                        <th class="sort" data-sort="stock">Stock</th>
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    @forelse ($prod as $row)
                                                        <tr>
                                                            <th scope="row">{{ $no++ }}</th>
                                                            <td class="id" style="display:none;"><a
                                                                    href="javascript:void(0);"
                                                                    class="fw-medium link-primary">#VZ2101</a></td>
                                                            <td>
                                                                @if ($row->foto != null)
                                                                    <img src="{{ asset('storage/produk/'.$row->foto) }}"
                                                                        width='150px' class="img-thumbnail">
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{ $row->nama_produk }}
                                                            </td>
                                                            <td>
                                                                {{ $row->satuan }}
                                                            </td>
                                                            <td>
                                                                {{ number_format($row->harga, 2) }}
                                                            </td>
                                                            <td>
                                                                {{ $row->kategori_id }}
                                                            </td>
                                                            <td>
                                                                {{ $row->stock }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('dataproduk.edit', $row->id) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                                                                  Edit
                                                                </a>
                                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"  action="{{ route('dataproduk.destroy', $row->id) }}" method="post" style="display:inline;">
                                                                  @csrf
                                                                  {{ method_field('delete') }}
                                                                  <button type="submit" class="btn btn-sm btn-danger mb-2">
                                                                    Hapus
                                                                  </button>
                                                                </form>

                                                              </td>
                                                        </tr>

                                                        @endforeach
                                                </tbody>
                                            </table>
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                                        trigger="loop" colors="primary:#121331,secondary:#08a88a"
                                                        style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ customer
                                                        We did not find any customer for you search.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <div class="pagination-wrap hstack gap-2">
                                                {{ $prod->links() }}
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Modal -->
                                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" id="deleteRecord-close"
                                                        data-bs-dismiss="modal" aria-label="Close"
                                                        id="btn-close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mt-2 text-center">
                                                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                                            trigger="loop" colors="primary:#f7b84b,secondary:#f06548"
                                                            style="width:100px;height:100px"></lord-icon>
                                                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                            <h4>Are you sure ?</h4>
                                                            <p class="text-muted mx-4 mb-0">Are you sure you want to
                                                                remove this record ?</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                        <button type="button" class="btn w-sm btn-light"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn w-sm btn-danger"
                                                            id="delete-record">Yes, Delete It!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end modal -->
                                </div>
                            </div>

                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
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

    <!-- list.js min js -->
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/list.js/list.min.js') }}"></script>
    <script
        src="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/list.pagination.js/list.pagination.min.js') }}">
    </script>

    <!--ecommerce-customer init js -->
    <script
        src="{{ asset('template/themesbrand.com/velzon/html/default/assets/js/pages/ecommerce-customer-list.init.js') }}">
    </script>

    <!-- Sweet Alerts js -->
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/libs/sweetalert2/sweetalert2.min.js') }}">
    </script>

    <!-- App js -->
    <script src="{{ asset('template/themesbrand.com/velzon/html/default/assets/js/app.js') }}"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/apps-ecommerce-customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 03:21:15 GMT -->

</html>
