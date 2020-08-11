@extends('layouts.admin')


@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Listado de Usuarios</h6>
        </div>
        <div class="card-body">
            <div  class="table-responsive">
                <table id="laravel_datatable" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>{{ __('id') }}</th>
                            <th>{{ __('Name')  }}</th>
                            <th>{{ __('E-mail') }}</th>
                            <th>{{ __('Data') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@stop