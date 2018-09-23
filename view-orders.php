<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Metronic | Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <?php include 'style.php' ?>
    <link href="assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>

    <!--RTL version:<link href="assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--begin::Page Vendors Styles -->


</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <?php include "header.php" ?>
    <!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        <?php include "asideMenu.php" ?>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title text-capitalize ">all Orders</h3>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-12">
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Orders
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <ul class="nav nav-tabs  m-tabs-line m-tabs-line--success" role="tablist">
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_7_1" role="tab"><i class="far fa-list-alt"></i> Underway</a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_7_2" role="tab"><i class="fas fa-list-alt"></i> Complete</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="m_tabs_7_1" role="tabpanel">
                                        <table class="table table-striped- table-bordered table-hover table-checkable"
                                               id="m_table_1">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>delegate Name</th>
                                                <th>Recipient Name</th>
                                                <th>Car Type</th>
                                                <th>Request Type</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>2</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>1</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>3</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>1</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>2</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>1</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>3</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>1</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>2</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>1</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>3</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>1</td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>                                    </div>
                                    <div class="tab-pane" id="m_tabs_7_2" role="tabpanel">
                                        <table class="table table-striped- table-bordered table-hover table-checkable"
                                               id="m_table_2">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Car Type</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>2</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>1</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>3</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>1</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>2</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>1</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>3</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>1</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>2</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>1</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>3</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Name</td>
                                                <td>0123456789</td>
                                                <td>info@gmail.cpm</td>
                                                <td>1</td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- end:: Body -->

    <!-- begin::Footer -->
    <?php include "footer.php" ?>
    <!-- end::Footer -->
</div>

<!-- end:: Page -->

<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->


<?php include "javascript.php" ?>

<!--begin::Page Vendors -->
<script src="assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts -->
    <!--Data table Start-->
    <script>
        var DatatablesBasicHeaders = function () {

            var initTable1 = function () {
                var table = $('#m_table_1');
                var table2 = $('#m_table_2');
                // begin first table
                table.DataTable({
                    responsive: true,
                    columnDefs: [
                        {
                            targets: 5,
                            title: 'Actions',
                            orderable: false,
                            render: function (data, type, full, meta) {
                                return `
                            <a href="single-order.php" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                              <i class="far fa-eye"></i>
                            </a>`
                            },
                        },
                        {
                            targets: 4,
                            render: function (data, type, full, meta) {
                                var status = {
                                    1: {'title': 'Shop & Restaurant ', 'state': 'danger'},
                                    2: {'title': 'Taxi', 'state': 'primary'},
                                    3: {'title': 'Transportation', 'state': 'accent'},
                                };
                                if (typeof status[data] === 'undefined') {
                                    return data;
                                }
                                return '<span class="m-badge m-badge--' + status[data].state + ' m-badge--dot"></span>&nbsp;' +
                                    '<span class="m--font-bold m--font-' + status[data].state + '">' + status[data].title + '</span>';
                            },
                        },
                    ],
                });
                //Table tow
                table2.DataTable({
                    responsive: true,
                    columnDefs: [
                        {
                            targets: 5,
                            title: 'Actions',
                            orderable: false,
                            render: function (data, type, full, meta) {
                                return `
                            <a href="single-order.php" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                              <i class="far fa-eye"></i>
                            </a>`
                            },
                        },
                        {
                            targets: 4,
                            render: function (data, type, full, meta) {
                                var status = {
                                    1: {'title': 'Shop & Restaurant ', 'state': 'danger'},
                                    2: {'title': 'Taxi', 'state': 'primary'},
                                    3: {'title': 'Transportation', 'state': 'accent'},
                                };
                                if (typeof status[data] === 'undefined') {
                                    return data;
                                }
                                return '<span class="m-badge m-badge--' + status[data].state + ' m-badge--dot"></span>&nbsp;' +
                                    '<span class="m--font-bold m--font-' + status[data].state + '">' + status[data].title + '</span>';
                            },
                        },
                    ],
                });
            };

            return {

                //main function to initiate the module
                init: function () {
                    initTable1();
                },

            };

        }();

        jQuery(document).ready(function () {
            DatatablesBasicHeaders.init();
        });
    </script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>