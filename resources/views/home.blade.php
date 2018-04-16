@extends('layouts.base')
@section('styles')
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{url('css/datatables.css')}}" rel="stylesheet">
@endsection
@section('content')
    <input type="hidden" id="coindar_route" value="{{ route('datatable.getcoinmarketcap') }}">
    <div class="table-responsive">
        <table id="coinmarketcap" class="table table-hover table-condensed table-striped" style="width:100%; padding-top:1%">
            <thead>
            <tr>
                <th>Symbol</th>
                <th>Rank</th>
                <th>Price (USD)</th>
                <th>Volume (24h)$</th>
                <th>Market Cap($)</th>
                <th>Available Supply</th>
                <th>Total Supply</th>
                <th>Percent Change(1h)</th>
                <th>Percent Change(24h)</th>
                <th>Percent Change(7d)</th>
                <th>Last updated</th>
            </tr>
            </thead>
        </table>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('js/home.js') }}"></script>
@endsection