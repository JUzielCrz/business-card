<div class="row barTop">
    <div class="col-md-6 justify-content-start align-items-center">
        {{$title}}
    </div>
    <div class="col-md-6 d-flex justify-content-end align-items-center">
        {{$slot}}
    </div>
    {{-- <div class="d-flex justify-content-between align-items-center">
        
        
    </div> --}}
</div>

<style>
    .barTop{
        margin: 0;
        padding: 15px;
        background-color: #676f9d;
        color: #ffff;
    }
    .btn-title{
        text-decoration: none;
        color: #ffffff;
        margin-inline: 5px;
        text-transform: uppercase;
    }
</style>