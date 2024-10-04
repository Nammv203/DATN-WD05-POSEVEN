@extends('admin.layouts.master')

@section('content')
    <div class="dashboard-page-content">
        <div class="row mb-9 align-items-center justify-content-between">
            <div class="col-sm-6 mb-8 mb-sm-0">
                <h2 class="fs-4 mb-0">Transactions</h2>
            </div>
          
        </div>
        <div class="card mb-4 rounded-4 p-7">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card-header bg-transparent px-0 pt-0 pb-7">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-4 col-12 mr-auto mb-md-0 mb-6">
                                <a href="{{route('admin.product.create')}}" class="btn btn-success mt-3 mb-3">Create</a>
                                <input type="text" placeholder="Search..." class="form-control bg-input border-0">
                            </div>
                            <div class="col-md-8">
                                <div class="row justify-content-end flex-nowrap d-flex">
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <select class="form-select">
                                            <option>Method</option>
                                            <option>Master Card</option>
                                            <option>Paypal</option>
                                            <option>Visa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-7 pb-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle table-nowrap mb-0 table-borderless">
                                <thead class="table-light">
                                    <tr>
                                        <th class="align-middle" scope="col">Transaction ID
                                        </th>
                                        <th class="align-middle" scope="col">Paid
                                        </th>
                                        <th class="align-middle" scope="col">Method
                                        </th>
                                        <th class="align-middle" scope="col">Date
                                        </th>
                                        <th class="align-middle text-center" scope="col">Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">#456667</a></td>
                                        <td>$294.00</td>
                                        <td>
                                            <img src="#" data-src="../assets/images/dashboard/card-1.png"
                                                alt="Amex" class="lazy-image" width="45" height="29"
                                                class="border me-6">
                                            <span class="text-muted">Amex</span>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.product.update')}}" class="btn btn-warning btn-xs fs-13px p-4">Edit</a>
                                            <a href="#" class="btn btn-primary btn-xs fs-13px p-4">Details</a>
                                            <a href="#" class="btn btn-danger btn-xs fs-13px p-4">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">#134768</a></td>
                                        <td>$294.00</td>
                                        <td>
                                            <img src="#" data-src="../assets/images/dashboard/master-card.png"
                                                alt="Master card" class="lazy-image" width="45" height="29"
                                                class="border me-6">
                                            <span class="text-muted">Master card</span>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.product.update')}}" class="btn btn-warning btn-xs fs-13px p-4">Edit</a>
                                            <a href="#" class="btn btn-primary btn-xs fs-13px p-4">Details</a>
                                            <a href="#" class="btn btn-danger btn-xs fs-13px p-4">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">#887780</a></td>
                                        <td>$294.00</td>
                                        <td>
                                            <img src="#" data-src="../assets/images/dashboard/card-3.png"
                                                alt="Paypal" class="lazy-image" width="45" height="29"
                                                class="border me-6">
                                            <span class="text-muted">Paypal</span>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.product.update')}}" class="btn btn-warning btn-xs fs-13px p-4">Edit</a>
                                            <a href="#" class="btn btn-primary btn-xs fs-13px p-4">Details</a>
                                            <a href="#" class="btn btn-danger btn-xs fs-13px p-4">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">#887780</a></td>
                                        <td>$294.00</td>
                                        <td>
                                            <img src="#" data-src="../assets/images/dashboard/card-4.png"
                                                alt="Visa" class="lazy-image" width="45" height="29"
                                                class="border me-6">
                                            <span class="text-muted">Visa</span>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.product.update')}}" class="btn btn-warning btn-xs fs-13px p-4">Edit</a>
                                            <a href="#" class="btn btn-primary btn-xs fs-13px p-4">Details</a>
                                            <a href="#" class="btn btn-danger btn-xs fs-13px p-4">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">#456667</a></td>
                                        <td>$294.00</td>
                                        <td>
                                            <img src="#" data-src="../assets/images/dashboard/card-1.png"
                                                alt="Amex" class="lazy-image" width="45" height="29"
                                                class="border me-6">
                                            <span class="text-muted">Amex</span>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.product.update')}}" class="btn btn-warning btn-xs fs-13px p-4">Edit</a>
                                            <a href="#" class="btn btn-primary btn-xs fs-13px p-4">Details</a>
                                            <a href="#" class="btn btn-danger btn-xs fs-13px p-4">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">#134768</a></td>
                                        <td>$294.00</td>
                                        <td>
                                            <img src="#" data-src="../assets/images/dashboard/master-card.png"
                                                alt="Master card" class="lazy-image" width="45" height="29"
                                                class="border me-6">
                                            <span class="text-muted">Master card</span>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.product.update')}}" class="btn btn-warning btn-xs fs-13px p-4">Edit</a>
                                            <a href="#" class="btn btn-primary btn-xs fs-13px p-4">Details</a>
                                            <a href="#" class="btn btn-danger btn-xs fs-13px p-4">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">#134768</a></td>
                                        <td>$294.00</td>
                                        <td>
                                            <img src="#" data-src="../assets/images/dashboard/master-card.png"
                                                alt="Master card" class="lazy-image" width="45" height="29"
                                                class="border me-6">
                                            <span class="text-muted">Master card</span>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.product.update')}}" class="btn btn-warning btn-xs fs-13px p-4">Edit</a>
                                            <a href="#" class="btn btn-primary btn-xs fs-13px p-4">Details</a>
                                            <a href="#" class="btn btn-danger btn-xs fs-13px p-4">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">#887780</a></td>
                                        <td>$294.00</td>
                                        <td>
                                            <img src="#" data-src="../assets/images/dashboard/card-3.png"
                                                alt="Paypal" class="lazy-image" width="45" height="29"
                                                class="border me-6">
                                            <span class="text-muted">Paypal</span>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.product.update')}}" class="btn btn-warning btn-xs fs-13px p-4">Edit</a>
                                            <a href="#" class="btn btn-primary btn-xs fs-13px p-4">Details</a>
                                            <a href="#" class="btn btn-danger btn-xs fs-13px p-4">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">#887780</a></td>
                                        <td>$294.00</td>
                                        <td>
                                            <img src="#" data-src="../assets/images/dashboard/card-4.png"
                                                alt="Visa" class="lazy-image" width="45" height="29"
                                                class="border me-6">
                                            <span class="text-muted">Visa</span>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.product.update')}}" class="btn btn-warning btn-xs fs-13px p-4">Edit</a>
                                            <a href="#" class="btn btn-primary btn-xs fs-13px p-4">Details</a>
                                            <a href="#" class="btn btn-danger btn-xs fs-13px p-4">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">#456667</a></td>
                                        <td>$294.00</td>
                                        <td>
                                            <img src="#" data-src="../assets/images/dashboard/card-1.png"
                                                alt="Amex" class="lazy-image" width="45" height="29"
                                                class="border me-6">
                                            <span class="text-muted">Amex</span>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.product.update')}}" class="btn btn-warning btn-xs fs-13px p-4">Edit</a>
                                            <a href="#" class="btn btn-primary btn-xs fs-13px p-4">Details</a>
                                            <a href="#" class="btn btn-danger btn-xs fs-13px p-4">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">#134768</a></td>
                                        <td>$294.00</td>
                                        <td>
                                            <img src="#" data-src="../assets/images/dashboard/master-card.png"
                                                alt="Master card" class="lazy-image" width="45" height="29"
                                                class="border me-6">
                                            <span class="text-muted">Master card</span>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.product.update')}}" class="btn btn-warning btn-xs fs-13px p-4">Edit</a>
                                            <a href="#" class="btn btn-primary btn-xs fs-13px p-4">Details</a>
                                            <a href="#" class="btn btn-danger btn-xs fs-13px p-4">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">#887780</a></td>
                                        <td>$294.00</td>
                                        <td>
                                            <img src="#" data-src="../assets/images/dashboard/card-3.png"
                                                alt="Paypal" class="lazy-image" width="45" height="29"
                                                class="border me-6">
                                            <span class="text-muted">Paypal</span>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.product.update')}}" class="btn btn-warning btn-xs fs-13px p-4">Edit</a>
                                            <a href="#" class="btn btn-primary btn-xs fs-13px p-4">Details</a>
                                            <a href="#" class="btn btn-danger btn-xs fs-13px p-4">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bg-body-tertiary h-100">
                        <p class="text-center text-muted py-8">
                            Please select transaction <br>
                            to see details
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example" class="mt-6 mb-4">
            <ul class="pagination justify-content-start">
                <li class="page-item active mx-3"><a class="page-link" href="#">01</a></li>
                <li class="page-item mx-3"><a class="page-link" href="#">02</a></li>
                <li class="page-item mx-3"><a class="page-link" href="#">03</a></li>
                <li class="page-item mx-3"><a class="page-link dot" href="#">...</a></li>
                <li class="page-item mx-3"><a class="page-link" href="#">16</a></li>
                <li class="page-item mx-3">
                    <a class="page-link" href="#"><i class="far fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
