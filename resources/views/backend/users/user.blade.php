@extends('layouts.app')

@section('content')
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
        <div class="bk-user w3-half w3-display-middle" id="bkUser">
            @if(session('status'))
                <div class="w3-center w3-text-red">{{session('status')}}</div>
            @endif
            <ul class="w3-ul w3-card-4" style="font-family: 'Manuale';">
            @foreach($users as $user)
                <li class="w3-bar w3-display-container" style="border-bottom: 1px groove rgba(128,128,128,0.55);">
                    <img src="{{asset('assets/images/ui/avatar2.png')}}" class="w3-bar-item w3-circle" style="width:85px">
                    <div class="w3-bar-item w3-small">
                        <span class="w3-large bk-user-name">{{$user->name}}</span><br>
                        <span class="mr-3">{{$user->email}}</span>
                        <a href="{{route('user.edit',['user'=>$user])}}" class="w3-btn w3-hover-text-blue text-decoration-none  w3-small w3-transparent w3-display-middle">Edit</a>
                        <a href="{{route('user.confirm',['user'=>$user])}}" class="w3-btn w3-hover-text-red text-decoration-none w3-small w3-transparent w3-display-right w3-margin-right">delete</a>
                    </div>

                </li>
            @endforeach
            </ul>

        </div>

    </div>
@endsection
