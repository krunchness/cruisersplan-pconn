@extends('layouts.main-dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <h3 class="title-5">User Management</h3>
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
            <div class="table-data__tool-right">
                <button class="au-btn au-btn-icon au-btn--green au-btn--small add-item-btn">
                    <i class="zmdi zmdi-plus"></i>Add New User</button>
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

        <input type="hidden" class="hidden-inputs" data-path="{{ asset('files/') }}">
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2" id="filesTable">
                <thead>
                    <tr>
                        <th>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </th>
                        <th>ID</th>
                        <th>Username</th>
                        <th width="25%">Name</th>
                        <th>Email</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr class="tr-shadow">
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>
                            <span class="block-email">{{ $user->name }}</span>
                        </td>
                        <td class="desc">{{ $user->email }}</td>
                        <td>
                            <div class="table-data-feature">
                                <!-- <button class="item download-file" data-file="	" data-toggle="tooltip" data-placement="top" title="Download">
                                    <i class="zmdi zmdi-cloud-download"></i>
                                </button> -->
                                <button class="item edit-user-btn" data-toggle="tooltip" data-placement="top" title="Edit" user-data="{{ json_encode($user) }}" update-path="{{ route('usermanagement.editUser', $user->id) }}">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item delete-user-btn" data-toggle="modal" data-placement="top" title="Delete" delete-user-id="{{ $user->id }}" delete-user-name="{{ $user->username }}" data-target="#deleteUserModal">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                                <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="More">
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
                <form action="{{ route('usermanagement.addUser') }}" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Username</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="username" placeholder="Username" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">First Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="first_name" placeholder="First Name" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Last Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="last_name" placeholder="Last Name" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Email Address</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" name="email" placeholder="Email Address" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <!-- <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Role</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="user_role" id="select" class="form-control">
                                <option>Please select Role</option>
                            </select>
                        </div>
                    </div> -->
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
    <div data-remodal-id="edit_user">
      <button data-remodal-action="close" class="remodal-close"></button>
      <div class="remodal-container">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Edit User</strong>
                </div>
                <div class="card-body card-block">
                    <form action="" method="post" class="form-horizontal edit_user_form">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Username</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="username" placeholder="Username" class="form-control edit_username_input">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="name" placeholder="Name" class="form-control edit_name_input">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Email Address</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="email" name="email" placeholder="Email Address" class="form-control edit_email_input">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class=" form-control-label">Password</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <!-- <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Role</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="user_role" id="select" class="form-control">
                                    <option>Please select Role</option>
                                </select>
                            </div>
                        </div> -->
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

    <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-sm delete-modal" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModal">Delete User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Are you Sure You want to Delete This User? 
                        </br>
                        Username : <span class="deleteuser-name"></span>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary confirm-delete-btn" data-id="">Confirm</button>
                    <form action="" class="user-delete-form" method="POST">
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

        $('.delete-user-btn').on('click', function(){

            var username = $(this).attr('delete-user-name');
            var user_id = $(this).attr('delete-user-id'); 
            $('.deleteuser-name').text(username);
            $('.confirm-delete-btn').attr('data-id', user_id);
            // $('[data-remodal-id=deleteUser/z/Modal]').remodal().open();
        });

        $('.confirm-delete-btn').on('click', function(){
            var user_id = $(this).attr('data-id');
            $('.user-delete-form').attr('action', '{{ route("usermanagement.deleteUser", '') }}/' + user_id);
            $('.user-delete-form').submit();
        });


        

    </script>
@endsection