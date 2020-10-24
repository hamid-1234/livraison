@extends('layouts.app')
@section('title','Client Index')
@section('content')



<div class="col-md-12">
	@include('navClient')
	<div class="col-md-9">
		<!--  start create Client -->
		<div class="jumbotron ">
			<form class="well form-horizontal" action="{{url('/clients')}}" method="post" id="contact_form" enctype="multipart/form-data">
				{{csrf_field()}}
				<fieldset>
					<!-- Form Name -->
					<legend>Client </legend>
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4  control-label">Nom Personnel</label>
						<div class="col-md-6  inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="nom_personnel" placeholder="nom_personnel" class="form-control" type="text">
							</div>
						</div>
					</div>
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4  control-label">magazin</label>
						<div class="col-md-6  inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="magazine" placeholder="magazin" class="form-control" type="text">
							</div>
						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4  control-label">E-Mail</label>
						<div class="col-md-6  inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input name="email" placeholder="E-Mail Address" class="form-control" type="text">
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
									<input name="ville" placeholder="ville" class="form-control" type="text">
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4  control-label">Telephone</label>
							<div class="col-md-6  inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
									<input name="phone" placeholder="(+212)555-1212" class="form-control" type="text">
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4  control-label">Address</label>
							<div class="col-md-6  inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
									<input name="address" placeholder="Address" class="form-control" type="text">
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4  control-label">CIN_Recto</label>
							<div class="col-md-6  inputGroupContainer">
								<div class="input-group">
									<input name="CIN_Recto"  id="CIN_Recto" placeholder="CIN_Recto" class="file-path validate" type="file">
								</div>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4  control-label">CIN_versso</label>
							<div class="col-md-6  inputGroupContainer">
								<div class="input-group">
									<input name="CIN_versso"  id="CIN_versso" placeholder="CIN_versso" class="file-path validate" type="file">
								</div>
							</div>
						</div>
						<!-- Text area -->

						<div class="form-group">
							<label class="col-md-4  control-label">RC </label>
							<div class="col-md-6  inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earbanque"></i></span>
									<input name="RC" placeholder="" class="form-control" type="text">
								</div>
							</div>
						</div>  
						<!-- Text area -->


						<div class="form-group">
							<label class="col-md-4  control-label">RIB </label>
							<div class="col-md-6  inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earbanque"></i></span>
									<input name="RIB" placeholder="" class="form-control" type="text">
								</div>
							</div>
						</div>
						<!-- Text area -->

						<div class="form-group">
							<label class="col-md-4  control-label" >RIB </label>
							<div class="col-md-6  inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earbanque"></i></span>
									<input name="RIB" placeholder="" class="form-control" type="text">
								</div>
							</div>
						</div>    
						<!-- Text area -->

						<div class="form-group">
							<label class="col-md-4  control-label">Site Web </label>
							<div class="col-md-6  inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earbanque"></i></span>
									<input name="Site_Web" placeholder="" class="form-control" type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4  control-label"> user id </label>
							<div class="col-md-6  inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earbanque"></i></span>
									<input name="user_type" placeholder="" value="{{Auth::user()->type}}" class="form-control" type="text">
								</div>
							</div>
						</div>
						<!-- Text area -->

						
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