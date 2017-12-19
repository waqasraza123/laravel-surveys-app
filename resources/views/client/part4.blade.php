@extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="container">

        <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <form class="form-horizontal" method="post">
                {{ csrf_field() }}

                <h1 class="logo-name" style="font-size: 65px; margin-left: -5px;">Part D</h1>

                <h2>Instructions</h2>
                Please select up to 4 faviourite hobbies/interests
                </br>
                Note: You can select less than 4 if you wish

                <div class="ibox float-e-margins" style="margin-top: 40px">
                    <div class="ibox-content">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="information_technology" value="true" @if(isset($saved_input["information_technology"])) checked @endif> Information Technology
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="computer_games" value="true" @if(isset($saved_input["computer_games"])) checked @endif> Computer Games
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="astrology" value="true" @if(isset($saved_input["astrology"])) checked @endif> Astrology
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="investing" value="true" @if(isset($saved_input["investing"])) checked @endif> Investing
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="home_improvements" value="true" @if(isset($saved_input["home_improvements"])) checked @endif> Home Improvements
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="cooking" value="true" @if(isset($saved_input["cooking"])) checked @endif> Cooking
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="camping" value="true" @if(isset($saved_input["camping"])) checked @endif> Camping
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="gardening" value="true" @if(isset($saved_input["gardening"])) checked @endif> Gardening
                                  </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="musical_instruments" value="true" @if(isset($saved_input["musical_instruments"])) checked @endif> Musical Instruments
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="movies" value="true" @if(isset($saved_input["movies"])) checked @endif> Movies
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="travel" value="true" @if(isset($saved_input["travel"])) checked @endif> Travel
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="sport" value="true" @if(isset($saved_input["sport"])) checked @endif> Sport
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="sailing" value="true" @if(isset($saved_input["sailing"])) checked @endif> Sailing
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="arts_crafts" value="true" @if(isset($saved_input["arts_crafts"])) checked @endif> Arts / Crafts
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="english_literature" value="true" @if(isset($saved_input["english_literature"])) checked @endif> English Literature
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="photography" value="true" @if(isset($saved_input["photography"])) checked @endif> Photography
                                  </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="panel-footer">
                        <a href="../part/3"><button type="button" class="btn btn-primary">Back</button></a>
                        <div style="float:right">
                            <button type="submit" class="btn btn-primary">Save & Next</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.min.css">
<script>
var theCheckboxes = $("input[type='checkbox']");
theCheckboxes.click(function()
{
    if (theCheckboxes.filter(":checked").length > 4){
        this.checked = false;
        swal(
          'Alert!',
          "You cannot select more than 4 options."
        );
    }
});
</script>

@endsection
