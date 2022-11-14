@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="row mt-3">
        <div class="col-lg-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2 class="text-success font-weight-bold">18390</h2>
                        <i class="mdi mdi-account-outline mdi-18px text-dark"></i>
                    </div>
                </div>
                <canvas id="newClient"></canvas>
                <div class="line-chart-row-title">MY NEW CLIENTS</div>
            </div>
        </div>
        <div class="col-lg-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2 class="text-danger font-weight-bold">839</h2>
                        <i class="mdi mdi-refresh mdi-18px text-dark"></i>
                    </div>
                </div>
                <canvas id="allProducts"></canvas>
                <div class="line-chart-row-title">All Products</div>
            </div>
        </div>
        <div class="col-lg-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2 class="text-info font-weight-bold">244</h2>
                        <i class="mdi mdi-file-document-outline mdi-18px text-dark"></i>
                    </div>
                </div>
                <canvas id="invoices"></canvas>
                <div class="line-chart-row-title">NEW INVOICES</div>
            </div>
        </div>
        <div class="col-lg-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2 class="text-warning font-weight-bold">3259</h2>
                        <i class="mdi mdi-folder-outline mdi-18px text-dark"></i>
                    </div>
                </div>
                <canvas id="projects"></canvas>
                <div class="line-chart-row-title">All PROJECTS</div>
            </div>
        </div>
        <div class="col-lg-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2 class="text-secondary font-weight-bold">586</h2>
                        <i class="mdi mdi-cart-outline mdi-18px text-dark"></i>
                    </div>
                </div>
                <canvas id="orderRecieved"></canvas>
                <div class="line-chart-row-title">Orders Received</div>
            </div>
        </div>
        <div class="col-lg-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2 class="text-dark font-weight-bold">7826</h2>
                        <i class="mdi mdi-cash text-dark mdi-18px"></i>
                    </div>
                </div>
                <canvas id="transactions"></canvas>
                <div class="line-chart-row-title">TRANSACTIONS</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Support Tracker</h4>
                        <h4 class="text-success font-weight-bold">Tickets<span class="text-dark ms-3">163</span></h4>
                    </div>
                    <div id="support-tracker-legend" class="support-tracker-legend"></div>
                    <canvas id="supportTracker"></canvas>
                </div>
            </div>
        </div>
        <div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-lg-flex align-items-center justify-content-between mb-4">
                        <h4 class="card-title">Product Orders</h4>
                        <p class="text-dark">+5.2% vs last 7 days</p>
                    </div>
                    <div class="product-order-wrap padding-reduced">
                        <div id="productorder-gage" class="gauge productorder-gage"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_scripts')

<!-- End plugin js for this page -->
<script src="{{ asset('assets/admin/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/justgage/raphael-2.1.4.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/justgage/justgage.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.cookie.js" type="text/javascript') }}"></script>
<!-- Custom js for this page-->

<!-- Custom js for this page-->
<script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>
<!-- End custom js for this page-->
@endsection