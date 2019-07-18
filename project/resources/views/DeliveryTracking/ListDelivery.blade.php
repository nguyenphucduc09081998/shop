@extends('layouts.app')

@section('title', 'Avery Dennison | Delivery Tracking')

@push('page-styles')

<link rel="stylesheet" href="{{asset('lib/select2/select2.css')}}">
<link rel="stylesheet" href="{{asset('lib/datepicker/datepicker3.css')}}">

<link rel="stylesheet" href="{{asset('lib/datatables/dataTables.bootstrap4.css')}}">

<style>
    .select2-container .select2-selection--single {
        height: 36px !important;
    }

    .content-header {
        padding: 0px;
    }

    .card-body {
        padding: 0px;
    }

    .abcc {
        padding-top: 3px;
    }

    .form {
        padding-top: 3px;
        height: 45px;
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
                            <form role="form" class="form" style="">
                                <!-- <h2 class="card-title"><b>Delivery Tracking</b></h2> -->
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
                                                <input type="text" class="form-control" id="time-scan" name="time" placeholder="MM/DD/YYYY"  value="" autocomplete="off" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 ">
                                        <label>Tỉnh</label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <select id="cbx-pro" class="form-control select2" style="width: 100%;">
                                                <option selected="selected"></option>
                                           
                                                <option>     Nha Trang</option>
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
                                            <select id="cbx-dist" class="form-control select2" style="width: 100%;">

                                                <option selected="selected"></option>
                                                
                                                <option>Quận 1</option>
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
                        <div class="card">
                            <div class="table-responsive abcc">
                                <table id="tabledelivery" class="table table-bordered table-hover">
                                    <thead style="background-color: #17a2b8;color: white;">
                                        <tr>
                                            <th>ID</th>
                                            <th>DataScan</th>
                                            <th>Order_Number</th>
                                            <th>Delivery_Number</th>
                                            <th>UserScan</th>
                                            <th>StatusD</th>
                                            <th>Location</th>
                                            <th>AWB</th>
                                            <th>LINKDN</th>
                                            <th>CreatedDate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>933620</td>
                                            <td>33746234-1/30</td>
                                            <td>33746234</td>
                                            <td>1170805471</td>
                                            <td> ADWHROAD04</td>
                                            <td>IN</td>
                                            <td>
                                            </td>
                                            <td>VL-33449255</td>
                                            <td> NULL</td>
                                            <td>2019-07-16 13:18:10</td>
                                        </tr>
                                        <tr>
                                            <td>933621</td>
                                            <td>33653524-1/90</td>
                                            <td>33653524
                                            </td>
                                            <td>1170805471</td>
                                            <td> ADWHROAD04</td>
                                            <td>IN</td>
                                            <td>
                                            </td>
                                            <td>VL-33449255</td>
                                            <td> NULL</td>
                                            <td>2019-07-16 13:18:11</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet

                                                Explorer 4.0
                                            </td>
                                            <td>Trident</td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Trident</td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>933620</td>
                                            <td>33746234-1/30</td>
                                            <td>33746234</td>
                                            <td>1170805471</td>
                                            <td> ADWHROAD04</td>
                                            <td>IN</td>
                                            <td>
                                            </td>
                                            <td>VL-33449255</td>
                                            <td> NULL</td>
                                            <td>2019-07-16 13:18:10</td>
                                        </tr>

                                        <tr>
                                            <td>Trident</td>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>Trident</td>
                                            <td>X</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td>Trident</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>933621</td>
                                            <td>33653524-1/90</td>
                                            <td>33653524
                                            </td>
                                            <td>1170805471</td>
                                            <td> ADWHROAD04</td>
                                            <td>IN</td>
                                            <td>
                                            </td>
                                            <td>VL-33449255</td>
                                            <td> NULL</td>
                                            <td>2019-07-16 13:18:11</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>hTrident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td>l 4</td>
                                            <td>X</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet

                                                Explorer 4.0
                                            </td>
                                            <td>Trident</td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td>mInternet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Trident</td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>oWin 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                con cho
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>Trident</td>
                                            <td>X</td>
                                            <td>Internet
                                                Explorer 4.50
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td>Trident</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>

                                    </tbody>
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
<script src="{{asset('lib/datepicker/bootstrap-datepicker.js')}}"></script>

<script src="{{asset('lib/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('lib/datatables/dataTables.bootstrap4.js')}}"></script>

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2();
        $('#time-scan').datepicker({
            autoclose: true,
            todayHighlight: true,
            toggleActive: true,
            format: 'mm/dd/yyyy',
        });

        $('#tabledelivery').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    })
</script>
<script>
    $(function() {
        $('#cbx-pro').on('change', function() {
            alert('click-pro');
        });
        $('#cbx-dist').on('change', function() {
            alert('ckick-dist');
        });
    });
</script>
<script>
    $(function() {
        $('#time-scan').on('changeDate', function() {
            alert('click-time');
        });
        
    });
</script>
@endpush