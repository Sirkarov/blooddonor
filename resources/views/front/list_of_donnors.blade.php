
<div class="container">
    <div class="row" style="padding-top:150px;padding-bottom: 50px;">
        @foreach($blood_donors as $donor)
        <div class="col-lg-4" style="margin-bottom:25px">
                <div class="card border-pink border-lighten-2">
                    <div class="text-center">
                        <div class="card-body">
                            <img src="images/user-1.jpg" class="rounded-circle  height-150" alt="Card image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"> {{$donor -> name}} {{$donor -> surname}}</h5>
                            <h6 class="card-subtitle">Крвна Група <strong>{{$donor->bloodType->type}}</strong></h6>
                        </div>
                            <a href="/profile"><button type="button"  class="btn btn-primary btn-sm" style="margin-bottom:15px"> Профил</button></a>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
</div>
