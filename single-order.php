<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>ManDoPick | Dashboard</title>
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
                        <h3 class="m-subheader__title text-capitalize ">Add a new delegate account </h3>
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
                                            Add Account
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <!--begin::Form-->
                                <div class="m-widget2">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="m-widget2__item m-widget2__item--primary">
                                                <div class="m-widget2__checkbox">
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                        <input type="checkbox">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="m-widget2__desc">
															<span class="m-widget2__text">
																Make Metronic Great Again.Lorem Ipsum Amet
															</span><br>
                                                    <span class="m-widget2__user-name">
																<a href="#" class="m-widget2__link">
																	By Bob
																</a>
															</span>
                                                </div>
                                                <div class="m-widget2__actions">
                                                    <div class="m-widget2__actions-nav">
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                             m-dropdown-toggle="hover">
                                                            <a href="#" class="m-dropdown__toggle">
                                                                <i class="la la-ellipsis-h"></i>
                                                            </a>
                                                            <div class="m-dropdown__wrapper">
                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                <div class="m-dropdown__inner">
                                                                    <div class="m-dropdown__body">
                                                                        <div class="m-dropdown__content">
                                                                            <ul class="m-nav">
                                                                                <li class="m-nav__item">
                                                                                    <a href="" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                                        <span class="m-nav__link-text">Activity</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                        <span class="m-nav__link-text">Messages</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                        <span class="m-nav__link-text">Support</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Form-->
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
<script src="assets/demo/custom/crud/forms/validation/form-controls.js"></script>
<script>
    //Change file img
    $(document).ready(function () {


        var readURL = function (input = ['file']) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.pic1').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };


        $(".up1").on('change', function () {
            readURL(this);
        });


    });

    $(document).ready(function () {


        var readURL = function (input = ['file']) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.pic2').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };


        $(".up2").on('change', function () {
            readURL(this);
        });


    });


    $(document).ready(function () {


        var readURL = function (input = ['file']) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.pic3').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };


        $(".up3").on('change', function () {
            readURL(this);
        });


    });


    $(document).ready(function () {


        var readURL = function (input = ['file']) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.pic4').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };


        $(".up4").on('change', function () {
            readURL(this);
        });

    });

</script>
<!--end::Page Vendors -->
</body>

<!-- end::Body -->
</html>