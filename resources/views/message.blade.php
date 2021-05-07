@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="row text-center alert alert-danger push-down">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                {{$error}}
            </div>
            <div class="col-md-4"></div>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div id="hideMe" >
        <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{session('success')}}</strong>
            </div>
            
           
    </div>
@endif



@if(session('error'))
    <div class="row text-center alert alert-danger push-down">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('error')}}
        </div>
        <div class="col-md-4"></div>
    </div>
@endif