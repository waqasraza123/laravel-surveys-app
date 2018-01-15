@extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="container">

            <div class="row">

                <div class="col-md-10 col-md-offset-1">
                    <form class="form-horizontal" method="post">
                        {{ csrf_field() }}

                        <h1 class="logo-name" style="font-size: 65px; margin-left: -5px;">Part C</h1>

                        <h2>Instructions</h2>
                        Please select up to 4 faviourite subjects whilst you were at school
                        </br>
                        Note: You can select less than 4 if you wish

                        <div class="ibox float-e-margins" style="margin-top: 40px">
                            <div class="ibox-content">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="maths" value="true" @if(isset($saved_input["maths"])) checked @endif> Maths
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="science" value="true" @if(isset($saved_input["science"])) checked @endif> Science
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="physics" value="true" @if(isset($saved_input["physics"])) checked @endif> Physics
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="chemistry" value="true" @if(isset($saved_input["chemistry"])) checked @endif> Chemistry
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="languages" value="true" @if(isset($saved_input["languages"])) checked @endif> Languages
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="legal_studies" value="true" @if(isset($saved_input["legal_studies"])) checked @endif> Legal Studies
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="geography" value="true" @if(isset($saved_input["geography"])) checked @endif> Geography
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="history" value="true" @if(isset($saved_input["history"])) checked @endif> History
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="social_studies" value="true" @if(isset($saved_input["social_studies"])) checked @endif> Social Studies
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="music" value="true" @if(isset($saved_input["music"])) checked @endif> Music
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="religion" value="true" @if(isset($saved_input["politics"])) checked @endif> Politics
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="psychology" value="true" @if(isset($saved_input["psychology"])) checked @endif> Psychology
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="art" value="true" @if(isset($saved_input["art"])) checked @endif> Art
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="design" value="true" @if(isset($saved_input["design"])) checked @endif> Design
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="politics" value="true" @if(isset($saved_input["english_literature"])) checked @endif> English Literature
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="english" value="true" @if(isset($saved_input["english"])) checked @endif> English
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="panel-footer">
                                <a href="../part/2"><button type="button" class="btn btn-primary">Back</button></a>
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
