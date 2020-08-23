@extends('layouts.app')

@section('content')
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
        <div class="bk-user w3-half w3-display-middle" id="bkUser">
            @if(session('status'))
                <div class="w3-center w3-text-red">{{session('status')}}</div>
            @endif
            <ul class="w3-ul w3-card-4" style="font-family: 'Manuale';">
                <li class="w3-display-container pt-4 pb-4" style="border-bottom: 1px groove rgba(128,128,128,0.55);">
                    <a href="{{route('permission.create')}}" class="w3-btn w3-card w3-hover-text-blue text-decoration-none w3-medium w3-transparent w3-display-middle">Create Permission</a>
                </li>
            </ul>
            @if(count($permissions))
                    <ul class="w3-ul w3-card-4" style="font-family: 'Manuale';">
                        <legend class="w3-text-blue w3-margin-left font-effect-3d-float">Manage Permission</legend>
                        @foreach($permissions as $permission)
                            <li class="w3-display-container" style="border-bottom: 1px groove rgba(128,128,128,0.55);">
                                <span style="font-size:15px;" class="bk-user-name">{{$permission->name}}</span>

                                <a href="{{route('permission.edit',['permission'=>$permission])}}" class="w3-btn w3-hover-text-blue text-decoration-none w3-small w3-transparent w3-display-middle">EDIT</a>
                                <a href="{{route('permission.confirm',['permission'=>$permission])}}" class="w3-btn w3-hover-text-deep-orange text-decoration-none w3-small w3-transparent w3-display-right">DEL</a>
                            </li>
                        @endforeach
                    </ul>
            @endif
        </div>

    </div>
@endsection
