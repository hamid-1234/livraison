@extends('layouts.app')
@section('title','coli Index')
@section('content')


@include('navClient')
<div class="jumbotron col-md-10">
	@if(session()->has('success'))
	<div class="alert alert-success">
		{{session()->get('success')}}
	</div>
	@endif
	<div class="well form-horizontal" action=" " method="" id="contact_form">
		<fieldset>
			<!-- Form Name -->
			<legend>client</legend>
			<div class="col-md-2">
				<input id="search_input_all" onkeyup="FilterkeyWord_all_table()"  type="text" class="form-control" placeholder="Rechercher "></div>
				<div class=" pull-right">
					<a href="{{url('/colis/create')}}" class="btn btn-primary">Nouveau clois</a>
				</div>
				<table class="table table-bordered table-striped"  id= "table-id">
					<thead>
						<tr>



							<th> Id</th>
							<th> Nom destinataire</th>
							<th> prénom destinataire</th>
							<th> Address</th>
							<th> ville</th>
							<th> Telephone</th>
							<th> statu</th>
							<th> prix</th>
              

							<th><span class="glyphicon glyphicon-wrench
								"></span></th>
							</tr>
						</thead>
						<tbody id="myTable">
							@foreach($colis as $coli) 
							<tr class = "text-center">
               <td> {{$coli->id}}</td>
               <td> {{$coli->Nom_destinataire}}</td>
               <td> {{$coli->prénom_destinataire}}</td>
               <td> {{$coli->Adresse_destinataire}}</td>
               <td> {{$coli->Ville_destinataire}}</td>
               <td> {{$coli->phon_destinataire}}</td>
               <td> {{$coli->statu}}</td>
               <td> {{$coli->prix}}</td>
               
               

               
               

               <td>
                 <form action="{{url('colis/'.$coli->id)}}" method="post">
<!-- 
  <a href="{{route('colis.edit',['id'=>$coli->id])}}" class = "btn btn-info btn-sm"><span class="glyphicon glyphicon-pencil"></span> </a> -->
  {{csrf_field()}}
  {{method_field('DELETE')}}

<!--  <a href="{{route('colis.destroy',['id'=>$coli->id])}}" class = "btn btn-danger"> <span class="
	glyphicon glyphicon-trash"></span></a> -->
	<button type="submit"  class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-trash"></span></button>


</form>


</td>
</tr>
@endforeach
</tbody>
</table>
</div>

<!-- end table --> 
</fieldset>



<script type="text/javascript">  getPagination('#table-id');
$('#maxRows').trigger('change');
function getPagination (table){

	$('#maxRows').on('change',function(){
            $('.pagination').html('');                      // reset pagination div
            var trnum = 0 ;                                 // reset tr counter 
            var maxRows = parseInt($(this).val());          // get Max Rows from select option

            var totalRows = $(table+' tbody tr').length;        // numbers of rows 
             $(table+' tr:gt(0)').each(function(){          // each TR in  table and not the header
                trnum++;                                    // Start Counter 
                if (trnum > maxRows ){                      // if tr number gt maxRows

                    $(this).hide();                         // fade it out 
                }if (trnum <= maxRows ){$(this).show();}// else fade in Important in case if it ..
             });                                            //  was fade out to fade it in 
             if (totalRows > maxRows){                      // if tr total rows gt max rows option
                var pagenum = Math.ceil(totalRows/maxRows); // ceil total(rows/maxrows) to get ..  
                                                            //  numbers of pages 
                for (var i = 1; i <= pagenum ;){            // for each page append pagination li 
                	$('.pagination').append('<li data-page="'+i+'">\
                		<span>'+ i++ +'<span class="sr-only">(current)</span></span>\
                		</li>').show();
                }                                           // end for i 


            }                                               // end if row count > max rows
            $('.pagination li:first-child').addClass('active'); // add active class to the first li 


        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
        showig_rows_count(maxRows, 1, totalRows);
        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT

        $('.pagination li').on('click',function(e){     // on click each page
        	e.preventDefault();
                var pageNum = $(this).attr('data-page');    // get it's number
                var trIndex = 0 ;                           // reset tr counter
                $('.pagination li').removeClass('active');  // remove active class from all li 
                $(this).addClass('active');                 // add active class to the clicked 


        //SHOWING ROWS NUMBER OUT OF TOTAL
        showig_rows_count(maxRows, pageNum, totalRows);
        //SHOWING ROWS NUMBER OUT OF TOTAL
        
        
        
                 $(table+' tr:gt(0)').each(function(){      // each tr in table not the header
                    trIndex++;                              // tr index counter 
                    // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                    if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
                    	$(this).hide();     
                    }else {$(this).show();}                 //else fade in 
                 });                                        // end of for each tr in table
                    });                                     // end of on click pagination list
      });
                                            // end of on select change 

                                // END OF PAGINATION 

                              }   




// SI SETTING
$(function(){
    // Just to append id number for each row  
    default_index();

  });

//ROWS SHOWING FUNCTION
function showig_rows_count(maxRows, pageNum, totalRows) {
   //Default rows showing
   var end_index = maxRows*pageNum;
   var start_index = ((maxRows*pageNum)- maxRows) + parseFloat(1);
   var string = 'Showing '+ start_index + ' to ' + end_index +' of ' + totalRows + ' entries';               
   $('.rows_count').html(string);
 }

// CREATING INDEX
function default_index() {
	$('table tr:eq(0)').prepend('<th> ID </th>')

	var id = 0;

	$('table tr:gt(0)').each(function(){    
		id++
		$(this).prepend('<td>'+id+'</td>');
	});
}

// All Table search script
function FilterkeyWord_all_table() {

// Count td if you want to search on all table instead of specific column

var count = $('.table').children('tbody').children('tr:first-child').children('td').length; 

        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("search_input_all");
        var input_value =     document.getElementById("search_input_all").value;
        filter = input.value.toLowerCase();
        if(input_value !=''){
        	table = document.getElementById("table-id");
        	tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 1; i < tr.length; i++) {

        	var flag = 0;

        	for(j = 0; j < count; j++){
        		td = tr[i].getElementsByTagName("td")[j];
        		if (td) {

        			var td_text = td.innerHTML;  
        			if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                //var td_text = td.innerHTML;  
                //td.innerHTML = 'shaban';
                flag = 1;
              } else {
                  //DO NOTHING
                }
              }
            }
            if(flag==1){
             tr[i].style.display = "";
           }else {
             tr[i].style.display = "none";
           }
         }
       }else {
      //RESET TABLE
      $('#maxRows').trigger('change');
    }
  }</script>
</div>
</div>


@endsection







