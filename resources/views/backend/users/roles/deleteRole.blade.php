@extends('layouts.app')

@section('content')
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
        <div class="bk-user w3-half w3-display-middle text-center">
            <p class="w3-xlarge" style="font-family: 'Literata';margin-top: 50px;margin-bottom: 50px;">permanently delete <strong class="w3-text-orange">{{$role->name}}</strong> role</p>
            <div class="mb-5">
                <a href="{{route('role')}}" style="background-color: #293034"
                   class="w3-btn w3-text-deep-orange w3-shadow w3-hover-grayscale w3-circle text-decoration-none">
                    Cancel
                </a>
                <a href="{{route('role.destroy',['role'=>$role])}}" style="background-color: #293034"
                   class="w3-btn w3-text-deep-orange w3-shadow w3-hover-grayscale w3-circle text-decoration-none">
                    Confirm
                </a>
            </div>
        </div>
    </div>
@endsection
