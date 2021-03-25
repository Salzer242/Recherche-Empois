@extends('./layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="font-weight:bold;">{{ __('Deposer Votre CV') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('creation') }}">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                
                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" required autocomplete="prenom">

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--<div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" required autocomplete="current-age">

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>-->

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" required autocomplete="current-adresse">
                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Numero Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="numero" type="number" class="form-control @error('DateL') is-invalid @enderror" name="numero" required autocomplete="numero">

                                @error('numero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Specialite') }}</label>

                            <div class="col-md-6">
                                <!--<input id="contrat" type="text" class="form-control @error('adresse') is-invalid @enderror" name="contrat" required autocomplete="current-contrat">-->
                                <select id="specialite" class="form-control @error('specialite') is-invalid @enderror" name="specialite" required autocomplete="current-specialite">
                                    <optgroup>
                                        <option selected="">Designer 3D</option>
                                        <option>FullStack Back-end</option>
                                        <option>Developpeur Web</option>
                                    </optgroup>
                                </select>
                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Niveau Etude') }}</label>

                            <div class="col-md-6">
                                <!--<input id="contrat" type="text" class="form-control @error('adresse') is-invalid @enderror" name="contrat" required autocomplete="current-contrat">-->
                                <select id="etude" class="form-control @error('etude') is-invalid @enderror" name="etude" required autocomplete="current-etude">
                                    <optgroup label="This is a group">
                                        <option>Bac</option>
                                        <option>License</option>
                                        <option>Master</option>
                                    </optgroup>
                                </select>
                                @error('etude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                        

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('A Propos De Vous') }}</label>

                            <div class="col-md-6">
                                <!--<input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>-->
                                <textarea id="propos" class="form-control @error('propos') is-invalid @enderror" rows="3" name="propos" value="{{ old('propos') }}" required autocomplete="propos" autofocus></textarea>
                                @error('propos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Deposer CV') }}
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