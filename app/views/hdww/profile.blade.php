@extends('hdww.layout')

@section('content')
	@parent
    @include('hdww.partials.nav-header')
	<div class="row well">
        <div class="col-md-12">
                <div class="panel">
                    <img class="pic" src="http://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/twDq00QDud4/s120-c/photo.jpg" alt="...">
                    <div class="name"><small>Apple K, India</small></div>
                    <a href="#" class="btn btn-xs btn-primary pull-right" style="margin:10px;"><span class="glyphicon glyphicon-picture"></span> Change cover</a>
                </div>
                
    <br><br><br>
    <ul class="nav nav-tabs" id="myTab">
      <li class="active">
      	<a href="#inbox" data-toggle="tab"><i class="glyphicon glyphicon-info-sign"></i> Your Information</a>
      </li>
      <li><a href="#sent" data-toggle="tab"><i class="glyphicon glyphicon-picture"></i> Your Photo</a></li>
      <li><a href="#assignment" data-toggle="tab"><i class="glyphicon glyphicon-star"></i> Your Ratings</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="inbox">
        Inbox
        </div>
        
        
        <div class="tab-pane" id="sent">
        Sent
        </div>
        
        
        <div class="tab-pane" id="assignment">
        Assignment
        </div>
    </div>
     </div>
 </div>   
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"><br/><br/>
            <form class="form-horizontal">
            <fieldset>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="body">Body :</label>  
              <div class="col-md-8">
              <input id="body" name="body" type="text" placeholder="Message Body" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="message">Message :</label>
              <div class="col-md-8">                     
                <textarea class="form-control" id="message" name="message"></textarea>
              </div>
            </div>
            
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="send"></label>
              <div class="col-md-8">
                <button id="send" name="send" class="btn btn-primary">Send</button>
              </div>
            </div>
            
            </fieldset>
            </form>

    </div>
  </div>
@stop