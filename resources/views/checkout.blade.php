@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-6 mx-auto">
    <p class="text-center"><strong>Total: {{Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} €</strong></p>
    <hr>
    <div class="row primary" style="background-color:#0d6efd">
        <div class="col-md-12">
            <form action="{{ route('checkout.store') }}" method="POST" class="row mt-2">
                @csrf

                <div class="col-md-4">
                    <label for="total" class="form-label">Total</label>
                    <input type="text" class="form-control" id="total" name="total" value="{{ Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}" readonly>
                </div>
                <div class="col-md-4">
                    <label for="inputLast" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="inputLast" name="last" value="{{ Auth::user()->name }}" readonly>
                </div>
                <div class="col-md-4">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" value="{{ Auth::user()->email }}" readonly>
                </div>
                <div class="col-4">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" id="address" name="address"
                        class="form-control @error('address') is-invalid @enderror"
                        value="{{ old('address') }}">
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="col-md-4">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" id="inputCity" name="city"
                    class="form-control @error('city') is-invalid @enderror"
                    value="{{ old('city') }}">
                
                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <input type="text" id="inputState" name="state"
                    class="form-control @error('state') is-invalid @enderror"
                    value="{{ old('state') }}">
                    @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-4">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" id="inputZip" name="zip" 
                class="form-control @error('zip') is-invalid @enderror"
                value="{{ old('zip') }}">
                @error('zip')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="col-12 mt-4">
                <button type="submit" class="btn btn-success btn-block btn-sm">Buy Now</button>
              </div>
            </form>
        </div>
          
    </div>

  </div>
</div>
@endsection

<style>
    form, label {
        color: white !important;
}
</style>