
<div class="container">
    <div class="row" style="padding-top:150px;padding-bottom: 50px;">
        <div class="col-lg-12 text-center" style="margin-bottom:10px"><h1><strong>Листа на Крводарители во Македонија</strong></h1></div>
        @foreach($blood_donors as $donor)
        <div class="col-lg-4" style="margin-bottom:25px">
                <div class="card border-pink border-lighten-3" style="background-color: lightgrey">
                    <div class="text-center">
                        <div class="card-body">
                            <img src="images/user-1.jpg" class="rounded-circle  height-150" alt="Card image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"> {{$donor -> name}} {{$donor -> surname}}</h5>
                            <h6 class="card-subtitle">Крвна Група <strong>{{$donor->bloodType->type}}</strong></h6>
                        </div>
                            <a  href="{{route('blood_donors.profile', $donor->id )}}"><button type="button"  class="btn btn-primary btn-md" style="margin-bottom:15px;background-color: red">Профил     <i class="fa fa-plus-square"></i></button></a>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
</div>