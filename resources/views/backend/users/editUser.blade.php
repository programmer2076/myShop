@extends('layouts.app')

@section('content')
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

        <div class="container-fluid col-md-6 col-md-offset">
            <div class="card mt-5 bg-dark bk-edit-user" id="bkEditUser">
                <div class="card-body">
                    <form method="post">
                        @csrf
                        <legend class="w3-text-blue">Edit User</legend>
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger p-1" role="alert">
                                {{$error}}
                            </div>
                        @endforeach
                        @if(session('status'))
                            <div class="pt-1 pb-1 text-center rounded-0 alert alert-success">{{session('status')}}</div>
                        @endif
                        <div class="form-group">
                            <label for="name" class="w3-text-white">User name</label>
                            <input type="text" class="form-control form-control-sm w3-text-blue rounded-0" value="{{$user->name}}" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="w3-text-white">Email address</label>
                            <input type="email" class="form-control form-control-sm w3-text-blue rounded-0" value="{{$user->email}}" name="email" id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label class="mr-sm-2 w3-text-white" for="selectRole">Select role</label>
                            <select class="form-control form-control-sm border border-info mr-sm-2 rounded-0 w3-text-red" name="role[]" multiple id="selectRole">
                                <option class="p-2" value="">none</option>
                                @foreach($roles as $role)
                                    <option class="p-2" value="{{$role->id}}"
                                            @if(in_array($role->name,$selectedRoles))
                                            selected
                                        @endif
                                    >{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="mr-sm-2  w3-text-white" for="permission">Select permission</label>
                            <select class="form-control form-control-sm border border-info mr-sm-2 rounded-0 w3-text-red" name="permission[]" multiple id="permission">
                                <option class="p-2" value="">none</option>
                                @foreach($permissions as $permission)
                                    <option class="p-2" value="{{$permission->id}}"
                                            @if(in_array($permission->name,$selectedPermissions))
                                            selected
                                        @endif
                                    >{{$permission->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="w3-btn w3-green w3-hover-teal w3-block w3-small w3-text-light rounded-0">Update</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
