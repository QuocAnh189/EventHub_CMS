@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Admin Dashboard</h1>
        </div>
    </section>

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a class="{{ setActive(['admin.users.*']) }}" href="">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total User</h4>
                        </div>
                        <div class="card-body">
                            100
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a class="{{ setActive(['admin.categories.*']) }}" href="">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-list"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Categories</h4>
                        </div>
                        <div class="card-body">
                            100
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a class="{{ setActive(['admin.events.*']) }}" href="">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-ruler"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Events</h4>
                        </div>
                        <div class="card-body">
                            100
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a class="{{ setActive(['admin.coupons.*']) }}" href="">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fab fa-ravelry"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Coupons</h4>
                        </div>
                        <div class="card-body">
                            100
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a class="{{ setActive(['admin.ticket-types.*']) }}" href="">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-sign"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Ticket-Types</h4>
                        </div>
                        <div class="card-body">
                            100
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a class="{{ setActive(['admin.reviews.*']) }}" href="">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-stamp"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Reviews</h4>
                        </div>
                        <div class="card-body">
                            100
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a class="{{ setActive(['admin.labels.*']) }}" href="">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-th"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Labels</h4>
                        </div>
                        <div class="card-body">
                            100
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a class="{{ setActive(['admin.payments.*']) }}" href="">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-tablet-alt"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Payments</h4>
                        </div>
                        <div class="card-body">
                            100
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a class="{{ setActive(['admin.tickets.*']) }}" href="">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Tickets</h4>
                        </div>
                        <div class="card-body">
                            100
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a class="{{ setActive(['admin.conversations.*']) }}" href="">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fab fa-weebly"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Conversations</h4>
                        </div>
                        <div class="card-body">
                            100
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a class="{{ setActive(['admin.functions.*']) }}" href="">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-tired"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Functions</h4>
                        </div>
                        <div class="card-body">
                            100
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a class="{{ setActive(['admin.commands.*']) }}" href="">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fab fa-themeco"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Commands</h4>
                        </div>
                        <div class="card-body">
                            100
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
