@extends('layouts.app')

@section('content')
    <!-- Start: Table With Search -->
<div class="col-md-12 search-table-col mt-5">
        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span>
        <div class="table-responsive table-bordered table table-hover table-bordered results">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr style="background-color: #e3f2fd;">
                        <th id="trs-hd" class="">Description d'emplois</th>
                        <th id="trs-hd" class="">Date publication</th>
                        <th id="trs-hd" class="">Date limite</th>
                        <th id="trs-hd" class="">Pays</th>
                        <th id="trs-hd" class="">Entreprise</th>
                        <th id="trs-hd" class="">Contrat</th>
                        <th id="trs-hd" class="">Action</th>
                    </tr>
                    @foreach($offres as $offre) 
                    <tr>
                        <th id="trs-hd" class="">{{$offre->descriptionEmplois}}</th>
                        <th id="trs-hd" class="">{{$offre['datePublication']}}</th>
                        <th id="trs-hd" class="">{{$offre['dateLimite']}}</th>
                        <th id="trs-hd" class="">{{$offre['adresse']}}</th>
                        <th id="trs-hd" class="">{{$offre['entreprise']}}</th>
                        <th id="trs-hd" class="">{{$offre['contrat']}}</th>
                        <!--<th id="trs-hd" class="btn btn-primary" href="{{ route('login') }}">Postuler</th>-->
                        <th id="trs-hd"><a class="btn btn-primary" href="{{ route('login') }}">Postuler</a></th>
                    </tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </div>
<!-- End: Table With Search -->
@endsection