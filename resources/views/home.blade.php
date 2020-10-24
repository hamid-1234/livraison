@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    @include('navClient')
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}

          </div>
          @endif
          <!--   {{ Auth::user()->type }} -->


          <?php switch (Auth::user()->type ) {
            case '0':
            /* return redirect('/colis'); */
            /*****************************************You are  in Client Dashboard! ********************************/                  
            ?>
            

            <?php 
            break;
            case '1':
            echo 'You are  in livreur Dashboard! ';
            break;
            case '2':
            echo 'You are  in assistante Dashboard! ';
            break;
            case '3':
            echo 'You are  in Admin Dashboard! ';
            break; 
            default:
            echo 'Errrr ';
            break;
          } ?>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
