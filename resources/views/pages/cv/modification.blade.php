@extends('./layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="font-weight:bold;">{{ __('Modifier Votre CV') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('modification.update') }}">
                        @csrf
                        @method('PATCH')
                        <input type="number" hidden="hidden" name="id" value="{{$userCv->id}}">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text"  value="{{$userCv->nom}}" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" var autocomplete="nom" autofocus>
                
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
                                <input id="prenom" type="text"  value="{{$userCv->prenom}}" class="form-control @error('prenom') is-invalid @enderror" name="prenom" var autocomplete="prenom">

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
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" var autocomplete="current-age">

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
                                <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" value="{{$userCv->adresse}}" name="adresse" var autocomplete="current-adresse">
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
                                <input id="email" type="email"  value="{{$userCv->email}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" var autocomplete="email" autofocus>

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
                                <input id="numero" type="number"  value="{{$userCv->telephone}}" class="form-control @error('DateL') is-invalid @enderror" name="telephone" var autocomplete="numero">

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
                                <!--<input id="contrat" type="text" class="form-control @error('adresse') is-invalid @enderror" name="contrat" var autocomplete="current-contrat">-->
                                <select id="specialite" class="form-control @error('specialite') is-invalid @enderror" name="specialite" value="{{$userCv->specialite}}" var autocomplete="current-specialite">
                                    <optgroup>
                                        <option>Architecte Informatique</option>
                                        <option>Designer 3D</option>
                                        <option>Developpeur Web</option>
                                        <option>Developpeur FullStack</option>
                                        <option>Developpeur Mobile</option>
                                        <option>Expert Cyber-security</option>
                                        <option>DevOps</option>
                                        <option>Data Scientist</option>
                                        <option>DevOps</option>
                                        <option>Developpeur Front-End</option>
                                        <option>Developpeur Front-end</option>                
                                        <option>Expert Comptable</option>
                                        <option>Expert Finance</option>
                                        <option>Electicien</option>
                                        <option>FullStack Back-end</option>
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
                                <!--<input id="contrat" type="text" class="form-control @error('adresse') is-invalid @enderror" name="contrat" var autocomplete="current-contrat">-->
                                <select id="etude" class="form-control @error('etude') is-invalid @enderror" name="etude" var autocomplete="current-etude">
                                    <optgroup>
                                        <option>License</option>
                                        <option>License 2</option>
                                        <option>License 3</option>
                                        <option>Master</option>
                                        <option>Master 2</option>
                                        <option>Doctorat</option>
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
                                <!--<input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" var autocomplete="description" autofocus>-->
                                <textarea id="propos"   class="form-control @error('propos') is-invalid @enderror" rows="3" name="propos" value="{{ old('propos') ?? $userCv->propos }}" var autocomplete="propos" autofocus></textarea>
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
                                    {{ __('Mise a jour CV') }}
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