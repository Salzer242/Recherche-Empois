@extends('./layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="font-weight:bold;">{{ __('Votre CV') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <table class="table table-bordered table-hover">
                  
                            <thead class="bill-header cs">
                                <tr>
                                    <th id="trs-hd" class="">Nom</th>
                                    <th id="trs-hd" class="">{{$cvs->nom}}</th>
                                </tr>
                                <tr>
                                    <th id="trs-hd" class="">Prenom</th>
                                    <th id="trs-hd" class="">{{$cvs->prenom}}</th>
                                </tr>
                                <tr>
                                    <th id="trs-hd" class="">Adresse</th>
                                    <th id="trs-hd" class="">{{$cvs->adresse}}</th>
                                </tr>
                                <tr>
                                    <th id="trs-hd" class="">Email</th>
                                    <th id="trs-hd" class="">{{$cvs->email}}</th>
                                </tr>
                                <tr>
                                    <th id="trs-hd" class="">Telephone</th>
                                    <th id="trs-hd" class="">{{$cvs->telephone}}</th>
                                </tr>
                                <tr>
                                    <th id="trs-hd" class="">Specialite</th>
                                    <th id="trs-hd" class="">{{$cvs->specialite}}</th>
                                </tr>
                                <tr>
                                    <th id="trs-hd" class="">Niveau Etude</th>
                                    <th id="trs-hd" class="">{{$cvs->niveauEtude}}</th>
                                </tr>
                                <tr>
                                    <th id="trs-hd" class="">A prospo de vous</th>
                                    <th id="trs-hd" class="">{{$cvs->description}}</th>
                                </tr>
                            </thead>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection