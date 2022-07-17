@extends('layouts.app')
@section('title', $title)
@section('container')
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-7 col-lg-8 col-xl-6">
            <a href="/cars" class="btn btn-primary mb-2">Back to all cars</a>
            <h3 class="fs-5 text-wrap text-dark p-2 border-bottom border-4 border-primary">Create Car</h3>
            <form method="POST" action="/cars">
                @csrf
                <div class="col mb-2">
                    <label for="plat_no" class="col-form-label text-dark">Plat No</label>
                    <input type="text" maxlength="10" class="form-control @error('plat_no') is-invalid @enderror"
                        id="plat_no" oninput="this.value = this.value.toUpperCase()" name="plat_no" required autofocus
                        value="{{ old('plat_no') }}">
                    @error('plat_no')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col mb-2">
                    <label for="merk_id" class="col-form-label pt-7 text-dark">Merk</label>
                    <select name="merk_id" id="merk_id" class="form-select">
                        @foreach ($merks as $merk)
                            @if (old('merk_id') == $merk->id)
                                <option value="{{ $merk->id }}" selected>{{ $merk->name_merk }}</option>
                            @else
                                <option value="{{ $merk->id }}">{{ $merk->name_merk }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col mb-2">
                    <label for="production_year" class="col-form-label pt-7 text-dark">Year</label>
                    <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;"
                        class="form-control @error('production_year') is-invalid @enderror" id="production_year"
                        name="production_year" required value="{{ old('production_year') }}">
                    @error('production_year')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col mb-2">
                    <label for="color" class="col-form-label pt-7 text-dark">Color</label>
                    <input type="text" class="form-control @error('color') is-invalid @enderror" id="color"
                        name="color" required value="{{ old('color') }}">
                    @error('color')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="col-4 btn btn-primary btn-sm float-right mt-4 p-2" type="submit"
                    value="Create">Create</button>
            </form>
        </div>
    </div>
@endsection
