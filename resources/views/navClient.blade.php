 <div class="col-md-2"><ul class="nav nav-pills nav-stacked">
  <li class="active"><a href="{{url('tabBord_Client')}} ">tableau de bord</a></li>
  <li><a  href="{{url('profil_client')}} ">Profile</a></li>
  <li><a href="#">facture </a></li>
  <li><a href="#">réclamation </a></li>
  <li><a href="#">bon de livraison</a></li>

  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      coulis  <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="{{url('/colis/create')}}">nouveau colis</a></li>
      <li><a href="{{url('/colis')}}">Liste colis</a></li>
      <li><a href="#">colis en attente de ramassage</a></li>

    </ul>
  </li>
</ul></div>