@extends('admin.layout')
@section('content')
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
            <div class="row">
                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Newsletter <span>| Subscribers</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-subtract"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>145</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Emails <span>| Today</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>$3,264</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">

                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Date <span>| Time</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-clock-history"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>1244</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Customers Card -->
            </div>
        </div>
        {{-- End Of Left Side Columns --}}

        <!-- Right side columns -->
        <div class="col-lg-4">
            <div class="col-xxl-4 col-md-6" style="width: 100%">
                    <div class="card info-card customers-card">
                        <div class="card-body" >
                            <h5 class="card-title">Visitors <span>| Today</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-view-list"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>$3,264</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

        </div>
    </div>
</section>
@endsection
