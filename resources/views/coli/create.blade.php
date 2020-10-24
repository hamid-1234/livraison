@extends('layouts.app')
@section('title',' Index')
@section('content')



<div class="col-md-12">
	@include('navClient')
	<div class="col-md-9">
		<!--  start create Client -->
		<div class="jumbotron ">
			<form class="well form-horizontal" action="{{url('/colis')}}" method="post" id="contact_form" enctype="multipart/form-data">
				{{csrf_field()}}
				<fieldset>
					<!-- Form Name -->
					<legend>nouveau colis</legend>
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4  control-label">Nom destinataire</label>
						<div class="col-md-6  inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="Nom_destinataire" placeholder="Nom destinataire" class="form-control" type="text">
							</div>
						</div>
					</div>
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4  control-label">prénom destinataire</label>
						<div class="col-md-6  inputGroupContainer"> 
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="prénom_destinataire" placeholder="magazine" class="form-control" type="text">
							</div>
						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4  control-label">Address</label>
						<div class="col-md-6  inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input name="Adresse_destinataire" placeholder="E-Mail Address" class="form-control" type="text">
							</div>
						</div>
					</div>
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4  control-label">ville</label>
						<div class="col-md-6  inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-certificate
									"></i></span>
									<input name="Ville_destinataire" placeholder="ville" class="form-control" type="text">
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4  control-label">Telephone</label>
							<div class="col-md-6  inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
									<input name="phon_destinataire" placeholder="(+212)555-1212" class="form-control" type="text">
								</div>
							</div>
						</div>
						<!-- Text input-->
						
						

						<!-- Text area -->

						<div class="form-group">
							<label class="col-md-4  control-label">statu </label>
							<div class="col-md-6  inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earbanque"></i></span>
									<input name="statu" placeholder="" class="form-control" type="text">
								</div>
							</div>
						</div>  
						<!-- Text area -->


						<div class="form-group">
							<label class="col-md-4  control-label">prix </label>
							<div class="col-md-6  inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earbanque"></i></span>
									<input name="prix" placeholder="" class="form-control" type="text">
								</div>
							</div>
						</div>
						<div class="form-group" style="
						display: none;
						">
						<label class="col-md-4  control-label"> </label>
						<div class="col-md-6  inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-earbanque"></i></span>
								<input name="client_id" placeholder="" value="12" class="form-control" type="text">
							</div>
						</div>
					</div>



					<!-- Button -->
					<div class="form-group">
						<label class="col-md-4  control-label"></label>
						<div class="col-md-8 ">
							<button type="submit" class="btn btn-warning">Ajouter <span class="glyphicon glyphicon-send"></span></button>
							<button type="submit" class="btn btn-danger">Annuler </button>
						</div>
					</div>
				</fieldset>
			</form>
		</div></div>
	</div>
	<!--  end create client -->

	@endsection