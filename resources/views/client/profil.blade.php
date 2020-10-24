@extends('layouts.app')
@section('title','Enseignant Index')
@section('content')
@include('navClient')
<div class="container">
	<div class="row">

		<?php echo Auth::user()->id; 
		$i=0; 
		$test=5;?>
		

		@foreach($clients as $client) 

		<?php if ($test=5) {
			$i++;
			/*Auth::user()->type==0  &&  Auth::user()->id==$client->user_id */
			?>

			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="well well-sm">
					<div class="row">
						<div class="col-sm-6 col-md-4">
							<img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
						</div>
						<div class="col-sm-6 col-md-8">
							<h4>
								{{$client->magazine}}</h4>
								<small><cite title="San Francisco, USA"><i class="glyphicon glyphicon-map-marker">{{$client->Nom_Personnel}} 
								</i></cite></small>
								<p>
									<i class="glyphicon glyphicon-envelope"></i>{{$client->E_Mail}}
									<br />

									<i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
									<br />
									<i >ville :</i> {{$client->ville}}
									<br />
									<i >Phone :</i> {{$client->Phone}}
									<br />
									<i >RC :</i> {{$client->RC}}
									<br />
									<i >RIB :</i> {{$client->RIB}}
									<br />
									<i >Address :</i> {{$client->Address}}
									<br />
									<i >Site_Web :</i> {{$client->Site_Web}}
									<br />
									<i >user_id :</i> {{$client->user_id}}
									<br /><br />
									<i >user_id :</i> {{$client->id}}
									<br />


								</p>

							</div>
						</div>
					</div>
				</div>


				<?php 
			} 




			?>



			@endforeach

			<?php  echo $i;
			if ($i==0) { ?>
				<div class="col-md-10">
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
											<input name="magazine" placeholder="magazine" class="form-control" type="text">
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
												<input name="user_id" placeholder="" value="{{Auth::user()->id}}" class="form-control" type="text">
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

						<?php 
					}

					?>

				</div>
			</div>

			@endsection