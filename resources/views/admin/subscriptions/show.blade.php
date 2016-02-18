@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-bordered" id="subscriptionTable">
                <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>User</th>
                    <th>Downloads Left</th>
                    <th>Subscription Date</th>
                    <th>Actions</th>
                </tr>
            </table>

        </div>
    </div>
    <script src="/js/subscriptions.js"></script>
@endsection