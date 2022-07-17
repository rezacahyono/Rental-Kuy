@extends('layouts.app')
@section('title', $title)
@section('container')
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-7 col-lg-8 col-xl-6">
            <a href="/merks" class="btn btn-primary mb-2">Back to all cars</a>
            <h3 class="fs-5 text-wrap text-dark p-2 border-bottom border-4 border-primary">Create Merk</h3>
            <form action="/merks" method="POST">
                @csrf
                <div class="col mb-2">
                    <label for="kode" class="col-form-label text-dark">Kode</label>
                    <input type="text" maxlength="3" class="form-control @error('kode') is-invalid @enderror"
                        id="plat_no" oninput="this.value = this.value.toUpperCase()" id="kode" name="kode"
                        required autofocus value="{{ old('kode') }}">
                    @error('kode')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col mb-2">
                    <label for="name_merk" class="col-form-label pt-7 text-dark">Name Merk</label>
                    <input type="text" class="form-control @error('name_merk') is-invalid @enderror" id="name_merk"
                        name="name_merk" required value="{{ old('name_merk') }}">
                    @error('name_merk')
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
