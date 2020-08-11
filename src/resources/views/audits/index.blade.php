@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Activity Logs</h6>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>{{ __('id') }}</th>
                            <th>{{ __('Updated at') }}</th>
                            <th>{{ __('User Type')  }}</th>
                            <th>{{ __('Event') }}</th>
                            <th>{{ __('Auditable type') }}</th>
                            <th>{{ __('Old Values') }}</th>
                            <th>{{ __('New Values') }}</th>
                            <th>{{ __('Url') }}</th>
                            <th>{{ __('Ip Address') }}</th>
                            <th>{{ __('User Agent') }}</th>
                            <th>{{ __('Tags') }}</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
