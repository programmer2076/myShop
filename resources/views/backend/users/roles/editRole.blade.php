@extends('layouts.app')

@section('content')
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

        <div class="w3-half w3-padding" style="background: rgba(29,33,36,0.11)">

            <form class="w3-container" method="post">
                @csrf
                <legend class="w3-text-blue font-effect-3d-float" style="font-family: 'Manuale';">Edit Role</legend>
                <input class="w3-input w3-animate-input w3-text-sand w3-margin-top" autofocus value="{{$role->name}}" name="name" id="name" type="text" style="width:135px;background: none;">
                @error('name')
                        <span class="w3-text-red">{{ $errors->first('name') }}</span>
                @enderror
                @if(session('status'))
                    <span class="w3-text-green text-center w3-large">{{session('status')}}</span>
                @endif
                    <button class="w3-btn w3-blue w3-hover-blue-gray w3-right w3-margin">Update</button>
            </form>

        </div>

    </div>
@endsection
