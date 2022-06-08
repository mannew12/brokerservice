@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('PLEACE FILL YOUR INFORMATION ') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('Account/create_account') }}"
>
 @csrf
 <div class="form-group row">
 <label for="fName" class="col-md-4 col-formlabel text-md-right">{{ __('First Name') }}</label>
 <div class="col-md-6">
 <input id="fName" type="text" class="formcontrol @error('fName') isinvalid @enderror" name="fName" value="{{ old('fName') }}" required autocomplete="
 fName" autofocus>
 @error('fName')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="lName" class="col-md-4 col-formlabel text-md-right">{{ __('Last Name') }}</label>
 <div class="col-md-6">
 <input id="lName" type="text" class="formcontrol @error('lName') isinvalid @enderror" name="lName" value="{{ old('lName') }}" required autocomplete="
 lName" autofocus>
 @error('lName')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="address" class="col-md-4 col-formlabel text-md-right">{{ __('Address') }}</label>
 <div class="col-md-6">
 <input id="address" type="text" class="formcontrol @error('address') isinvalid @enderror" name="address" value="{{ old('address') }}" required autocomplete
="address">
 @error('address')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="phone" class="col-md-4 col-formlabel text-md-right">{{ __('Phone Number') }}</label>
 <div class="col-md-6">
 <input id="phone" type="text" class="formcontrol @error('phone') isinvalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete
="phone">
 @error('phone')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="password" class="col-md-4 col-formlabel text-md-right">{{ __('Password') }}</label>
 <div class="col-md-6">
 <input id="password" type="text" class="formcontrol @error('password') isinvalid @enderror" name="password" value="{{ old('password') }}" required autocomplete
="password">
 @error('password')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
 {{ __('Create Account') }}
 </button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection