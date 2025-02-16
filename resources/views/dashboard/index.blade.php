@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('dashboard')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <!-- ----------------------------------------- -->
            <!-- Welcome Card -->
            <!-- ----------------------------------------- -->
            <div class="card text-white bg-primary-gt overflow-hidden">
                <div class="card-body position-relative z-1">
                  <span class="badge badge-custom-dark d-inline-flex align-items-center gap-2 fs-3">
                    <iconify-icon icon="solar:check-circle-outline" class="fs-5"></iconify-icon>
                    <span class="fw-normal">This month <span class="fw-semibold">+15%
                        Profit</span>
                    </span>
                  </span>
                    <h4 class="text-white fw-normal mt-5 pt-7 mb-1">Hey, <span class="fw-semibold">David
                      McMichael</span>
                    </h4>
                    <h6 class="opacity-75 fw-normal text-white mb-0">Aenean vel libero id metus
                        sollicitudin</span>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-6">
                    <!-- ----------------------------------------- -->
                    <!-- Subscriptions -->
                    <!-- ----------------------------------------- -->
                    <div class="card bg-danger-subtle overflow-hidden shadow-none">
                        <div class="card-body px-4">
                            <div class="d-flex align-items-center justify-content-between mb-8">
                                <div>
                                    <span class="text-dark-light fw-semibold fs-12">Subscriptions</span>
                                    <div class="hstack gap-2">
                                        <h5 class="card-title fw-semibold mb-0 fs-7">78,298</h5>
                                        <span class="fs-11 text-dark-light fw-semibold">-12%</span>
                                    </div>
                                </div>
                                <span class="round-48 d-flex align-items-center justify-content-center bg-white rounded">
                          <iconify-icon icon="solar:layers-linear" class="text-danger fs-6"></iconify-icon>
                        </span>
                            </div>
                            <div class="me-n2">
                                <div id="subscriptions" class="rounded-bars"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <!-- ----------------------------------------- -->
                    <!-- Users -->
                    <!-- ----------------------------------------- -->
                    <div class="card bg-secondary-subtle overflow-hidden shadow-none">
                        <div class="card-body px-4">
                            <div class="d-flex align-items-center justify-content-between mb-9">
                                <div>
                                    <span class="text-dark-light fw-semibold">Users</span>
                                    <div class="hstack gap-2">
                                        <h5 class="card-title fw-semibold mb-0 fs-7">14,872</h5>
                                        <span class="fs-11 text-dark-light fw-semibold">+6.4%</span>
                                    </div>
                                </div>
                                <span class="round-48 d-flex align-items-center justify-content-center bg-white rounded">
                          <iconify-icon icon="solar:pie-chart-3-line-duotone" class="text-secondary fs-6"></iconify-icon>
                        </span>
                            </div>


                        </div>
                        <div id="users"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ----------------------------------------- -->
        <!-- Revenue Forecast -->
        <!-- ----------------------------------------- -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center justify-content-between mb-3">
                        <div>
                            <h5 class="card-title">Revenue Forecast</h5>
                            <p class="card-subtitle mb-0">Overview of Profit</p>
                        </div>

                        <div class="hstack gap-9 mt-4 mt-md-0">
                            <div class="d-flex align-items-center gap-2">
                                <span class="d-block flex-shrink-0 round-10 bg-primary rounded-circle"></span>
                                <span class="text-nowrap text-muted">2024</span>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="d-block flex-shrink-0 round-10 bg-danger rounded-circle"></span>
                                <span class="text-nowrap text-muted">2023</span>
                            </div>
                        </div>
                    </div>
                    <div style="height: 305px;" class="me-n2 rounded-bars">
                        <div id="revenue-forecast"></div>
                    </div>
                    <div class="row mt-4 mb-2">
                        <div class="col-md-4">
                            <div class="hstack gap-6 mb-3 mb-md-0">
                        <span class="d-flex align-items-center justify-content-center round-48 bg-light rounded">
                          <iconify-icon icon="solar:pie-chart-2-linear" class="fs-7 text-dark"></iconify-icon>
                        </span>
                                <div>
                                    <span>Total</span>
                                    <h5 class="mt-1 fw-medium mb-0">$96,640</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hstack gap-6 mb-3 mb-md-0">
                        <span class="d-flex align-items-center justify-content-center round-48 bg-primary-subtle rounded">
                          <iconify-icon icon="solar:dollar-minimalistic-linear" class="fs-7 text-primary"></iconify-icon>
                        </span>
                                <div>
                                    <span>Profit</span>
                                    <h5 class="mt-1 fw-medium mb-0">$48,820</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hstack gap-6">
                        <span class="d-flex align-items-center justify-content-center round-48 bg-danger-subtle rounded">
                          <iconify-icon icon="solar:database-linear" class="fs-7 text-danger"></iconify-icon>
                        </span>
                                <div>
                                    <span>Earnings</span>
                                    <h5 class="mt-1 fw-medium mb-0">$48,820</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ----------------------------------------- -->
        <!-- Annual Profit -->
        <!-- ----------------------------------------- -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Annual Profit</h5>
                    <div class="bg-primary bg-opacity-10 rounded-1 overflow-hidden mb-4">
                        <div class="p-4 mb-9">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-dark-light">Conversion Rate</span>
                                <h3 class="mb-0">18.4%</h3>
                            </div>
                        </div>
                        <div id="annual-profit"></div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pb-6 border-bottom">
                        <div>
                            <span class="text-muted fw-medium">Added to Cart</span>
                            <span class="fs-11 fw-medium d-block mt-1">5 clicks</span>
                        </div>
                        <div class="text-end">
                            <h6 class="fw-bolder mb-1 lh-base">$21,120.70</h6>
                            <span class="fs-11 fw-medium text-success">+13.2%</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between py-6 border-bottom">
                        <div>
                            <span class="text-muted fw-medium">Reached to Checkout</span>
                            <span class="fs-11 fw-medium d-block mt-1">12 clicks</span>
                        </div>
                        <div class="text-end">
                            <h6 class="fw-bolder mb-1 lh-base">$16,100.00</h6>
                            <span class="fs-11 fw-medium text-danger">-7.4%</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-6">
                        <div>
                            <span class="text-muted fw-medium">Added to Cart</span>
                            <span class="fs-11 fw-medium d-block mt-1">24 views</span>
                        </div>
                        <div class="text-end">
                            <h6 class="fw-bolder mb-1 lh-base">$6,400.50</h6>
                            <span class="fs-11 fw-medium text-success">+9.3%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <!-- ----------------------------------------- -->
                <!-- New Customers -->
                <!-- ----------------------------------------- -->
                <div class="col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-6 mb-4 pb-9">
                        <span class="round-48 d-flex align-items-center justify-content-center rounded bg-secondary-subtle">
                          <iconify-icon icon="solar:football-outline" class="fs-7 text-secondary"> </iconify-icon>
                        </span>
                                <h6 class="mb-0 fs-4 fw-medium">New Customers</h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-6">
                                <h6 class="mb-0 fw-medium">New goals</h6>
                                <h6 class="mb-0 fw-medium">83%</h6>
                            </div>
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-secondary" style="width: 83%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ----------------------------------------- -->
                <!-- Total Income -->
                <!-- ----------------------------------------- -->
                <div class="col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-6 mb-4">
                        <span class="round-48 d-flex align-items-center justify-content-center rounded bg-danger-subtle">
                          <iconify-icon icon="solar:box-linear" class="fs-7 text-danger"></iconify-icon>
                        </span>
                                <h6 class="mb-0 fs-4 fw-medium">Total Income</h6>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="fs-7">$680</h4>
                                    <span class="fs-11 text-success fw-semibold">+18%</span>
                                </div>
                                <div class="col-6">
                                    <div id="total-income"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ----------------------------------------- -->
        <!-- Weekly Schedules -->
        <!-- ----------------------------------------- -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Weekly Scheduels</h5>
                    <div style="height: 300px;">
                        <div id="weekly-schedules" class="rounded-pill-bars"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ----------------------------------------- -->
        <!-- Revenue by product -->
        <!-- ----------------------------------------- -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap gap-3 mb-9 justify-content-between align-items-center">
                        <h5 class="card-title fw-semibold mb-0">Revenue by Product</h5>
                        <select class="form-select w-auto fw-semibold">
                            <option value="1">Sep 2024</option>
                            <option value="2">Oct 2024</option>
                            <option value="3">Nov 2024</option>
                        </select>
                    </div>

                    <div class="table-responsive">
                        <ul class="nav nav-tabs theme-tab gap-3 flex-nowrap" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#app" role="tab">
                                    <div class="hstack gap-2">
                                        <iconify-icon icon="solar:widget-linear" class="fs-4"></iconify-icon>
                                        <span>App</span>
                                    </div>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#mobile" role="tab">
                                    <div class="hstack gap-2">
                                        <iconify-icon icon="solar:smartphone-line-duotone" class="fs-4"></iconify-icon>
                                        <span>Mobile</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#saas" role="tab">
                                    <div class="hstack gap-2">
                                        <iconify-icon icon="solar:calculator-linear" class="fs-4"></iconify-icon>
                                        <span>SaaS</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#other" role="tab">
                                    <div class="hstack gap-2">
                                        <iconify-icon icon="solar:folder-open-outline" class="fs-4"></iconify-icon>
                                        <span>Others</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="app" role="tabpanel">
                            <div class="table-responsive" data-simplebar>
                                <table class="table text-nowrap align-middle table-custom mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-dark fw-normal ps-0">Assigned
                                        </th>
                                        <th scope="col" class="text-dark fw-normal">Progress</th>
                                        <th scope="col" class="text-dark fw-normal">Priority</th>
                                        <th scope="col" class="text-dark fw-normal">Budget</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-1.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Minecraf App</h6>
                                                    <span>Jason Roy</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-success-subtle text-success">Low</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-2.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Web App Project</h6>
                                                    <span>Mathew Flintoff</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-warning-subtle text-warning">Medium</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-3.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Modernize Dashboard</h6>
                                                    <span>Anil Kumar</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                <span class="badge bg-secondary-subtle text-secondary">Very
                                  High</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-4.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Dashboard Co</h6>
                                                    <span>George Cruize</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-danger-subtle text-danger">High</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="mobile" role="tabpanel">
                            <div class="table-responsive" data-simplebar>
                                <table class="table text-nowrap align-middle table-custom mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-dark fw-normal ps-0">Assigned
                                        </th>
                                        <th scope="col" class="text-dark fw-normal">Progress</th>
                                        <th scope="col" class="text-dark fw-normal">Priority</th>
                                        <th scope="col" class="text-dark fw-normal">Budget</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-2.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Web App Project</h6>
                                                    <span>Mathew Flintoff</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-warning-subtle text-warning">Medium</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-3.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Modernize Dashboard</h6>
                                                    <span>Anil Kumar</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                <span class="badge bg-secondary-subtle text-secondary">Very
                                  High</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-1.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Minecraf App</h6>
                                                    <span>Jason Roy</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-success-subtle text-success">Low</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-4.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Dashboard Co</h6>
                                                    <span>George Cruize</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-danger-subtle text-danger">High</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="saas" role="tabpanel">
                            <div class="table-responsive" data-simplebar>
                                <table class="table text-nowrap align-middle table-custom mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-dark fw-normal ps-0">Assigned
                                        </th>
                                        <th scope="col" class="text-dark fw-normal">Progress</th>
                                        <th scope="col" class="text-dark fw-normal">Priority</th>
                                        <th scope="col" class="text-dark fw-normal">Budget</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-2.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Web App Project</h6>
                                                    <span>Mathew Flintoff</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-warning-subtle text-warning">Medium</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-1.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Minecraf App</h6>
                                                    <span>Jason Roy</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-success-subtle text-success">Low</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-3.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Modernize Dashboard</h6>
                                                    <span>Anil Kumar</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                <span class="badge bg-secondary-subtle text-secondary">Very
                                  High</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-4.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Dashboard Co</h6>
                                                    <span>George Cruize</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-danger-subtle text-danger">High</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="other" role="tabpanel">
                            <div class="table-responsive" data-simplebar>
                                <table class="table text-nowrap align-middle table-custom mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-dark fw-normal ps-0">Assigned
                                        </th>
                                        <th scope="col" class="text-dark fw-normal">Progress</th>
                                        <th scope="col" class="text-dark fw-normal">Priority</th>
                                        <th scope="col" class="text-dark fw-normal">Budget</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-1.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Minecraf App</h6>
                                                    <span>Jason Roy</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-success-subtle text-success">Low</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-3.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Modernize Dashboard</h6>
                                                    <span>Anil Kumar</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                <span class="badge bg-secondary-subtle text-secondary">Very
                                  High</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-2.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Web App Project</h6>
                                                    <span>Mathew Flintoff</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-warning-subtle text-warning">Medium</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="../assets/images/products/dash-prd-4.jpg" alt="prd1" width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Dashboard Co</h6>
                                                    <span>George Cruize</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-danger-subtle text-danger">High</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ----------------------------------------- -->
        <!-- Sales from locations -->
        <!-- ----------------------------------------- -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sales from Locations</h5>
                    <p class="card-subtitle">United Stats</p>
                    <div id="usa" class="h-280"></div>


                    <div class="mt-2">
                        <div class="hstack gap-4 mb-3">
                            <h6 class="mb-0 flex-shrink-0 w25 fs-3 text-dark-light">LA</h6>
                            <div class="progress bg-light-subtle mt-1 w-100 h-5">
                                <div class="progress-bar text-bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6 class="mb-0 flex-shrink-0 w35 text-muted fs-3">28%</h6>
                        </div>
                        <div class="hstack gap-4 mb-3">
                            <h6 class="mb-0 flex-shrink-0 w25 fs-3 text-dark-light">NY</h6>
                            <div class="progress bg-light-subtle mt-1 w-100 h-5">
                                <div class="progress-bar text-bg-secondary" role="progressbar" style="width: 21%" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6 class="mb-0 flex-shrink-0 w35 text-muted fs-3">21%</h6>
                        </div>
                        <div class="hstack gap-4 mb-3">
                            <h6 class="mb-0 flex-shrink-0 w25 fs-3 text-dark-light">KA</h6>
                            <div class="progress bg-light-subtle mt-1 w-100 h-5">
                                <div class="progress-bar text-bg-warning" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6 class="mb-0 flex-shrink-0 w35 text-muted fs-3">18%</h6>
                        </div>
                        <div class="hstack gap-4">
                            <h6 class="mb-0 flex-shrink-0 w25 fs-3 text-dark-light">AZ</h6>
                            <div class="progress bg-light-subtle mt-1 w-100 h-5">
                                <div class="progress-bar text-bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6 class="mb-0 flex-shrink-0 w35 text-muted fs-3">12%</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ----------------------------------------- -->
        <!-- Weekly Stats -->
        <!-- ----------------------------------------- -->
        <div class="col-lg-4">
            <div class="card mb-lg-0">
                <div class="card-body">
                    <h5 class="card-title">Weekly Stats</h5>
                    <p class="card-subtitle">Overview of Profit</p>

                    <div class="me-n5">
                        <div id="weekly-stats"></div>
                    </div>
                    <div class="pt-7 mt-7 border-top">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="hstack gap-6 mb-3 mb-md-0">
                          <span class="d-flex align-items-center justify-content-center round-48 flex-shrink-0 bg-danger-subtle rounded">
                            <iconify-icon icon="solar:course-down-linear" class="fs-7 text-danger"></iconify-icon>
                          </span>
                                    <div>
                                        <span class="text-muted">Sales</span>
                                        <h6 class="fw-bolder mb-0">$36,850</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="hstack gap-6">
                          <span class="d-flex align-items-center justify-content-center round-48 flex-shrink-0 bg-primary-subtle rounded">
                            <iconify-icon icon="solar:chart-linear" class="fs-7 text-primary"></iconify-icon>
                          </span>
                                    <div>
                                        <span class="text-muted">Expenses</span>
                                        <h6 class="fw-bolder mb-0">$4,720</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ----------------------------------------- -->
        <!-- Daily activities -->
        <!-- ----------------------------------------- -->
        <div class="col-lg-4">
            <div class="card mb-lg-0">
                <div class="card-body">
                    <h5 class="card-title mb-4">Daily activities</h5>
                    <ul class="timeline-widget mb-0 position-relative mb-n5" data-simplebar style="height: 397px;">
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time mt-n1 text-muted flex-shrink-0 text-end">09:46
                            </div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge bg-primary flex-shrink-0 mt-2"></span>
                                <span class="timeline-badge-border d-block flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-12 text-muted mt-n1">Payment received from John
                                Doe of $385.90</div>
                        </li>
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time mt-n8 text-muted flex-shrink-0 text-end">09:46
                            </div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge bg-warning flex-shrink-0"></span>
                                <span class="timeline-badge-border d-block flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-12 text-dark-light mt-n8 fw-medium d-flex">
                                <span class="flex-shrink-0">New sale recorded</span>
                                <a href="javascript:void(0)" class="text-primary flex-shrink-0">#ML-3467</a>
                            </div>
                        </li>
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time mt-n8 text-muted flex-shrink-0 text-end">09:46
                            </div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge bg-warning flex-shrink-0"></span>
                                <span class="timeline-badge-border d-block flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-12 text-dark-light mt-n8">Payment was made of $64.95
                                to Michael</div>
                        </li>
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time mt-n8 text-muted flex-shrink-0 text-end">09:46
                            </div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge bg-secondary flex-shrink-0"></span>
                                <span class="timeline-badge-border d-block flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-12 text-dark-light mt-n8 fw-medium d-flex">
                                <span class="flex-shrink-0">New sale recorded</span>
                                <a href="javascript:void(0)" class="text-primary flex-shrink-0">#ML-3467</a>
                            </div>
                        </li>
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time mt-n8 text-muted flex-shrink-0 text-end">09:46
                            </div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge bg-danger flex-shrink-0"></span>
                                <span class="timeline-badge-border d-block flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-12 text-dark-light mt-n8 fw-medium">Project meeting
                            </div>
                        </li>
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time mt-n8 text-muted flex-shrink-0 text-end">09:46
                            </div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge bg-primary flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-12 text-dark-light mt-n8">Payment received from John
                                Doe of $385.90</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ----------------------------------------- -->
        <!-- Blog Card -->
        <!-- ----------------------------------------- -->
        <div class="col-lg-4">
            <div class="card mb-0">
                <img src="../assets/images/backgrounds/blog.jpg" alt="blog" class="card-img-top" />
                <div class="card-body">
                    <h5 class="mb-3">Figma tips and tricks with Stephan</h5>
                    <p class="card-subtitle mb-3 text-muted lh-lg">Nullam lobortis sodales dolor vitae
                        viverra. Cras lacinia bibendum metus vel rhoncus.</p>
                    <ul class="hstack mb-0 pt-1">
                        <li class="ms-n8">
                            <a href="javascript:void(0)" class="me-1">
                                <img src="../assets/images/profile/user-4.jpg" class="rounded-circle border border-2 border-white" width="44" height="44" alt="matdash-img">
                            </a>
                        </li>
                        <li class="ms-n8">
                            <a href="javascript:void(0)" class="me-1">
                                <img src="../assets/images/profile/user-2.jpg" class="rounded-circle border border-2 border-white" width="44" height="44" alt="matdash-img">
                            </a>
                        </li>
                        <li class="ms-n8">
                            <a href="javascript:void(0)" class="me-1">
                                <img src="../assets/images/profile/user-3.jpg" class="rounded-circle border border-2 border-white" width="44" height="44" alt="matdash-img">
                            </a>
                        </li>
                        <li class="ms-n8">
                            <a href="javascript:void(0)" class="me-1">
                                <img src="../assets/images/profile/user-6.jpg" class="rounded-circle border border-2 border-white" width="44" height="44" alt="matdash-img">
                            </a>
                        </li>
                        <li class="ms-n8">
                            <span class="bg-primary-subtle text-primary round-40 rounded-circle d-flex align-items-center justify-content-center">+12</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
