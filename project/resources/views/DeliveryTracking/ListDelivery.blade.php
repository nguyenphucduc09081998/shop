@extends('layouts.app')

@section('title', 'BMS | Project')

@push('page-styles')

<link rel="stylesheet" href="{{asset('lib/select2/select2.css')}}">
<link rel="stylesheet" href="{{asset('lib/datepicker/datepicker3.css')}}">
<style>
.select2-container .select2-selection--single{
    height: 36px !important;
}
</style>
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Delivery Tracking</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">List Delivery</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 connectedSortable ui-sortable">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-md-1 ">
                                        <label for="end_date" class="control-label">Time</label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="time" name="time" placeholder="MM/DD/YYYY" maxlength="10" value="" autocomplete="off" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 ">
                                        <label>Tỉnh</label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Nha Trang</option>
                                                <option>Hà Nội</option>
                                                <option>Hồ CHí Minh</option>
                                                <option>Bình Dương</option>
                                                <option>Đồng Nai</option>
                                                <option>Bình Thuận</option>
                                                <option>Hải Phòng</option>
                                                <option>Đà Nẵng</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">
                                        <label style="width:100px;">Quận Huyện</label>
                                    </div>

                                    <div class="col-md-2" style="">
                                        <div class="form-group">
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Quận 1</option>
                                                <option>Quận 2</option>
                                                <option>Quận 3</option>
                                                <option>Quận 4</option>
                                                <option>Quận 7</option>
                                                <option>Quận 5</option>
                                                <option>Quận 6</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>

                                    <!-- /.col-md-5 -->
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="projectTable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>column1</th>
                                            <th>column1</th>
                                            <th>column1</th>
                                            <th data-type="date" data-format="YYYY/MM/DD">column1</th>
                                            <th data-type="date" data-format="YYYY/MM/DD">column1</th>
                                            <th>column1</th>
                                            <th>column1</th>
                                            <th>column1</th>
                                            <th>column1</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
content
@endsection

@push('page-scripts')
<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib/select2/select2.full.min.js')}}"></script>
<script src="{{asset('lib/datepicker/bootstrap-datepicker.js')}}"></script> Nẵng

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2();
        $('#time').datepicker({
            autoclose: true,
            todayHighlight: true,
            toggleActive: true,
            format: 'mm/dd/yyyy',
        });
    })
</script>
@endpush