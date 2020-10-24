


@extends('layouts.app')
@section('title',' Index')
@section('content')


@include('navClient')

<!-- start dashbord clien  -->
<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading">Dashboard</div>

		<div class="panel-body">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">synthèse de colies</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3">livré:   50</div>
						<div class="col-md-3">retour:   30</div>
						<div class="col-md-3">encore:   40</div>
						<div class="col-md-3">refuser:   20 </div>
					</div>
				</div>
			</div>
			<div class="panel panel-warning">
				<div class="panel-heading">
					<h3 class="panel-title">synthèse de facture</h3>
				</div>
				<div class="panel-body">
					<div class="row">

						<div class="col-md-4">non payé:   30</div>
						<div class="col-md-4">payé:   40</div>
						<div class="col-md-4">facteur :   40</div>

					</div>
				</div>
			</div>
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h3 class="panel-title">synthèse de réclamation </h3>
				</div>
				<div class="panel-body">
					<div class="row">

						<div class="col-md-6">traité :   30</div>
						<div class="col-md-6">Non traité :   40</div>

					</div>
				</div>
			</div>
		</div></div>
	</div>
</div>
<!-- start dashbord clien  -->
@endsection