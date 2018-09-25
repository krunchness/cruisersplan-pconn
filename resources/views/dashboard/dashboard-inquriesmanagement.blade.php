@extends('layouts.main-dashboard')

@section('custom_html_metas')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <h3 class="title-5">Inquries</h3>
                <!-- div class="rs-select2--light rs-select2--md">
                    <select class="js-select2" name="property">
                        <option selected="selected">All Properties</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <div class="rs-select2--light rs-select2--sm">
                    <select class="js-select2" name="time">
                        <option selected="selected">Today</option>
                        <option value="">3 Days</option>
                        <option value="">1 Week</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <button class="au-btn-filter">
                    <i class="zmdi zmdi-filter-list"></i>filters</button> -->
            </div>

            <?php 
                $csv_data = [
                    'export_url' => route("inquiries.exportToCSV"),
                    'token' => csrf_token(),
                ];
            ?>
            <div class="table-data__tool-right">
                <a href="{{route('inquiries.exportToCSV')}}" target="_blank" class="chosen-single"><button class="au-btn au-btn-icon au-btn--green au-btn--small export-csv-btn" export-data='{{ json_encode($csv_data) }}' download-file=''>
                    <i class="zmdi zmdi-plus"></i>Export to CSV</button></a>
                <!-- <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                    <select class="js-select2" name="type">
                        <option selected="selected">Export</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div> -->
            </div>
        </div>

        <input type="hidden" class="hidden-inputs inquiries-datas" datefilter-json-path="{{ route('inquiries.getInquiryByDate') }}">
        <label>Start Date</label>
        <input type="date" name="start_date" class="start_date">
        <label>End Date</label>
        <input type="date" name="end_date" class="end_date">

        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2" id="filesTable">
                <thead>
                    <tr>
                        <th>Created Date</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Birth Date</th>
                        <th>Anniversary Date</th>
                        <th>Mobile No</th>
                        <th>Reference</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inquiries as $inquiry)
                        <tr class="tr-shadow">
                            <td>{{ ucfirst($inquiry->created_at) }}</td>
                            <td>{{ ucfirst($inquiry->first_name) }}</td>
                            <td>{{ ucfirst($inquiry->last_name) }}</td>
                            <td>
                                <span class="block-email">{{ ucfirst($inquiry->gender) }}</span>
                            </td>
                            <td class="desc">{{ ucfirst($inquiry->birth_date) }}</td>
                            <td>{{ ucfirst($inquiry->anniv_date) }}</td>
                            <td>{{ ucfirst($inquiry->mobile_no) }}</td>
                            <td>{{ ucfirst($inquiry->cpconnect_question) }}</td>
                            <td>
                            <div class="table-data-feature">
                                <!-- <button class="item download-file" data-file=" " data-toggle="tooltip" data-placement="top" title="Download">
                                    <i class="zmdi zmdi-cloud-download"></i>
                                </button> -->
                               <!--  <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button> -->
                                <button class="item delete-inquiry-btn" data-toggle="modal" data-name="{{ $inquiry->first_name . ' ' . $inquiry->last_name }}" delete-inquiry-id="{{ $inquiry->id }}" data-placement="top" title="Delete" data-target="#deleteInquiryModal">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                               <!--  <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                    <i class="zmdi zmdi-more"></i>
                                </button> -->
                            </div>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>

<div data-remodal-id="modal">
  <button data-remodal-action="close" class="remodal-close"></button>
  <div class="remodal-container">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Add New User</strong>
            </div>
            <div class="card-body card-block">
                <form action="" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input1" name="name" placeholder="Name" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Email Address</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="text-input2" name="email" placeholder="Email Address" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="text-input3" name="password" placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Role</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="user_role" id="select" class="form-control">
                                <option>Please select Role</option>
                                
                                <option value=""></option> 
                               
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                        <span class="modal-submit-spaces"></span>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>



@endsection

@section('modal')

    <div class="modal fade" id="deleteInquiryModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-sm delete-modal" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModal">Delete File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Are you Sure You want to Delete This Inquiry? 
                        </br>
                        Inquiry Name : <span class="inquiry-name"></span>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary confirm-delete-btn" data-id="">Confirm</button>
                    <form action="" class="inquiry-delete-form" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-style')
    <link rel="stylesheet" type="text/css" href="{{ asset( 'vendor/remodal/remodal.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset( 'vendor/remodal/remodal-default-theme.css') }}">
@endsection
@section('custom-script')
    <script src="{{ asset( 'vendor/remodal/remodal.min.js') }}"></script>
    <script>





        $('.confirm-delete-btn').on('click', function(){
            var inquiry_id = $(this).attr('data-id');
            $('.inquiry-delete-form').attr('action', '{{ route("inquiries.destroyInquiry", '') }}/' + inquiry_id);
            $('.inquiry-delete-form').submit();
        });

        
        $('.download-file').on('click', function(){
            var filename = $(this).attr('data-file');
            // alert(filename);
            var path = $('.hidden-inputs').attr('data-path');
            window.location.href = path + '/' + filename;
        });

        // var table = $('#filesTable').dataTable();

        

    </script>
@endsection