@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="font-weight:bold;">{{ __('Publier Une Offre') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('offres') }}">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Description Emplois') }}</label>

                            <div class="col-md-6">
                                <!--<input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>-->
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" rows="3" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Date Publication') }}</label>

                            <div class="col-md-6">
                                <input id="dateP" type="date" class="form-control @error('dateP') is-invalid @enderror" name="dateP" required autocomplete="Date-publication">

                                @error('dateP')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Date Limite') }}</label>

                            <div class="col-md-6">
                                <input id="dateL" type="date" class="form-control @error('dateL') is-invalid @enderror" name="dateL" required autocomplete="Date-limite">

                                @error('dateL')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" required autocomplete="current-pays">

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Entreprise') }}</label>

                            <div class="col-md-6">
                                <input id="entreprise" type="text" class="form-control @error('entreprise') is-invalid @enderror" name="entreprise" required autocomplete="current-adresse">
                                @error('entreprise')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Contrat') }}</label>

                            <div class="col-md-6">
                                <!--<input id="contrat" type="text" class="form-control @error('adresse') is-invalid @enderror" name="contrat" required autocomplete="current-contrat">-->
                                <select id="contrat" class="form-control @error('adresse') is-invalid @enderror" name="contrat" required autocomplete="current-contrat">
                                    <optgroup>
                                        <option selected=""></option>
                                        <option>CDD</option>
                                        <option>CDI</option>
                                    </optgroup>
                                </select>
                                @error('contrat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Publier Offre') }}
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