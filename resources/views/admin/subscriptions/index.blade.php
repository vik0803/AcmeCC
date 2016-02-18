@extends('layouts.app')

@section('content')

    <link href="/css/jquery.dataTables.min.css" rel="stylesheet">

    <div class="container">
        <div class="row">
            <table class="table table-bordered" id="subscriptionTable">
                <thead>
                <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>User</th>
                    <th>Downloads Left</th>
                    <th>Subscription Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

        </div>
    </div>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/subscriptions.js"></script>
@endsection