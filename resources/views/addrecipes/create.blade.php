@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Recipes Galore</h1>

    <form method="post" action="{{ route('home') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title') }}" required autocomplete="title" autofocus>

                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="mealtype" class="col-md-4 col-form-label text-md-right">{{ __('Meal Type') }}</label>

            <div class="col-md-6">
                <input id="mealtype" type="text" class="form-control @error('mealtype') is-invalid @enderror"
                    name="mealtype" value="{{ old('mealtype') }}" required autocomplete="mealtype">

                @error('mealtype')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="numberofpeople"
                class="col-md-4 col-form-label text-md-right">{{ __('Number of people') }}</label>

            <div class="col-md-6">
                <input id="numberofpeople" type="number"
                    class="form-control @error('numberofpeople') is-invalid @enderror" name="numberofpeople"
                    value="{{ old('numberofpeople') }}" required autocomplete="numberofpeople">

                @error('numberofpeople')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="difficulty" class="col-md-4 col-form-label text-md-right">{{ __('Difficulty Level') }}</label>

            <div class="col-md-6">
                <input id="difficulty" type="text" class="form-control @error('difficulty') is-invalid @enderror"
                    name="difficulty" value="{{ old('difficulty') }}" required autocomplete="difficulty">

                @error('difficulty')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="ingredients"
                class="col-md-4 col-form-label text-md-right">{{ __('List of ingredients') }}</label>

            <div class="col-md-6">
                <input id="ingredients" type="text"
                    class="form-control @error('ingredients') is-invalid @enderror" name="ingredients"
                    value="{{ old('ingredients') }}" required autocomplete="ingredients">

                @error('ingredients')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="prepsteps" class="col-md-4 col-form-label text-md-right">{{ __('Preparation steps') }}</label>

            <div class="col-md-6">
                <input id="prepsteps" type="text" class="form-control @error('prepsteps') is-invalid @enderror"
                    name="prepsteps" value="{{ old('prepsteps') }}" required autocomplete="prepsteps">

                @error('prepsteps')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }}
                </button>
            </div>
        </div>

    </form>

</div>
@endsection