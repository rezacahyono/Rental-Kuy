@extends('layouts.app')
@section('title', $title)
@section('container')
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-7 col-lg-8 col-xl-6">
            <a href="/cars" class="btn btn-primary mb-2">Back to all cars</a>
            <h3 class="fs-5 text-wrap text-dark p-2 border-bottom border-4 border-primary">Update Car : {{ $car->plat_no }}
            </h3>

            <form action="/cars" method="PUT">
                @csrf
                <div class="col mb-2">
                    <label for="plat_no" class="col-form-label text-dark">Plat No</label>
                    <input type="text" maxlength="10" class="form-control" id="plat_no"
                        oninput="this.value = this.value.toUpperCase()" value="{{ $car->plat_no }}">
                </div>

                <div class="col mb-2">
                    <label for="merk" class="col-form-label pt-7 text-dark">Merk</label>
                    <select name="merk" id="merk" class="form-select">
                        @foreach ($merks as $merk)
                            @if ($car->merk->id == $merk->id)
                                <option value="{{ $merk->id }}" selected>{{ $merk->name_merk }}</option>
                            @else
                                <option value="{{ $merk->id }}">{{ $merk->name_merk }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col mb-2">
                    <label for="year" class="col-form-label pt-7 text-dark">Year</label>
                    <input type="text" class="form-control" id="year" value="{{ $car->production_year }}">
                </div>
                <div class="col mb-2">
                    <label for="color" class="col-form-label pt-7 text-dark">Color</label>
                    <input type="text" class="form-control" id="color" value="{{ $car->color }}">
                </div>
                <button class="col-4 btn btn-primary btn-sm float-right mt-4 p-2">Update</button>
            </form>
        </div>
    </div>
@endsection
