<center>
@if($message=Session::get('success'))

<div id="fla" class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">X</button>
    <strong> {{$message}}</strong>
</div>


@endif

@if($message=Session::get('successupdate'))

<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">X</button>
    <strong> {{$message}}</strong>
</div>


@endif

@if($message=Session::get('successdelete'))

<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">X</button>
    <strong> {{$message}}</strong>
</div>


@endif
</center>

<style>
    #fla{

        width: 50%;
    }
</style>