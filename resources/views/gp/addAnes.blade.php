@extends('layouts.appHead')
@section('content')

<div class="container">
      <div class="row">
            <div class="col-md-10 text-center">
            <br>
            <table class="table table-bordered table-striped">
                  <tr>
                  <th>Anes List of</th></tr>
                  <tr>
                  <th>"{{Auth::user()->name}} {{Auth::user()->surname}}"</th></tr>
            </table>
            </div>
      </div>
</div>
<div class="container">
      <div class="row">
            <div class="col-md-8">
               <br>
                  <table class="table table-bordered table-striped">
                        <tr> 
                        <th>Anes</th>
                        <th>add</th>
                        <?php 
                        for ($i = 0; $i < count($anes); $i++) {     
                              if($anes[$i]->operation_id == null) {?>
                                    <tr>
                                    <td>{{$anes[$i]->name}}</td>     
                                    <td><a href="{{action('gpController@addfirst',$anes[$i]->id )}}" class="btn btn-primary">add</a></td>
                                    </tr>
                        <?php }}?>

                  </table>
            </div>
      </div>
</div>









@stop