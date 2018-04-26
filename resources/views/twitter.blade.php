@extends('layouts.base')
@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.4/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{url('css/datatables.css')}}" rel="stylesheet">
    <link href="{{url('css/twitter.css')}}" rel="stylesheet">
@endsection
@section('content')

    <div class="m-content">
        <button type="button" class="btn m-btn--pill btn-primary m-btn m-btn--custom add" data-toggle="modal" data-target="#m_modal_1">
            Add Twitter Account
        </button>
    </div>

    <div class="m-content">
        <!--Begin::Section-->
        <div class="m-portlet" >
            <div class="m-portlet__body  m-portlet__body--no-padding">
                <input type="hidden" id="twitter_route" value="{{ route('datatable.gettwitter') }}">
                <div class="table-responsive">
                    <table id="twitter" class="table table-hover table-condensed table-striped" style="width:100%; padding-top:1%">
                        <thead>
                            <tr>
                                <th>Coin</th>
                                <th>Account</th>
                                <th>Related Coins</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <!--End::Section-->
    </div>


    <!--begin::Modal-->
    <div class="modal fade" id="m_modal_1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Modal title
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" id="coin_id" >
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="recipient-name" class="form-control-label">
                                        Coin: *
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <select  name="state" id="coin" style="width: 100%">
                                    @foreach($coins as $coin)
                                        <option value="{{$coin->symbol}}"> {{$coin->symbol}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <label for="recipient-name" class="form-control-label">
                                    Related Coins:
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <select class="coins-multiple" name="states" multiple="multiple" id="rel_coins">
                                    @foreach($coins as $coin)
                                        <option value="{{$coin->symbol }}"> {{$coin->symbol}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br/>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="message-text" class="form-control-label">
                                        Twitter Account: *
                                    </label>
                                    <textarea class="form-control" id="twitter_account"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary account_action">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.4/select2.min.js"></script>
    <script src="{{ url('assets/demo/default/custom/components/base/sweetalert2.js') }}" type="text/javascript" defer></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('js/twitter.js') }}"></script>
@endsection