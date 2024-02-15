@extends('layouts.app')

@section('content')
<div class="full-height">
    <center>
        <table border="0">
            <tr>
                <td width="0%">
                    <font class="edoc-logo"><a style ="color:green;"> DOCTOR's Appointment </a></font>
                    <font class="edoc-logo"><a style ="color:red;"> PROJECT_OF_GROUP 06 </a></font><br>
                    <font class="edoc-logo"><a href="https://khulna-ambulance-service.business.site"style ="color:green; font-weight:heading-text;"> Call An AMBULANCE </a></font>
                    <font class="edoc-logo"><a href="https://www.google.com/maps/dir//Opposite+road+of+Bank+morr,+Khulna+9241/@22.7995284,89.5045515,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x39ff8fdd505cef75:0x6bfb7166c7e62078!2m2!1d89.5869106!2d22.79954?entry=ttu"style ="color:red; font-weight:bold;"> Get Directions </a></font>
                    <font class="edoc-logo"><a href="https://www.lazzpharma.com"style ="color:green; font-weight:bold;">Medicine</a></font>
                </td>
                <td width='10%'>
                    <font class="edoc-logo-sub"><a style ="color:black; font-weight:bold;"><p>Call Today: 01979601652</p></a></font>
                    <font class="edoc-logo-sub"><a style ="color:green; font-weight:bold;"><p>Email: abidabidhusine@gmail.com </p> </a></font><br><td>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p class="heading-text">Our DEDICATION Is What!!!<br> You Can TRUST!!!</p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p class="sub-text2">We make Quakity Healthcare!!!<br>Don't worry. Find your doctor online Book as you wish with eDoc. <br>
                        We offer you a free doctor channeling service, Make your appointment now.</p>
                        
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <center>
                        <a href="{{ url('welcome') }}">
                            <input type="button" value="Make Appointment" class="login-btn btn-primary btn"
                                style="padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;">
                        </a>
                    </center>
                </td>
            </tr>
            <tr>
                <td cols+pan="3">
                </td>
            </tr>
        </table>
        
    </center>
</div>
@endsection

@section('styles')
<style>
    table {
        animation: transitionIn-Y-bottom 0.5s;
    }
</style>
<link rel="stylesheet" href="{{ asset('css/animations.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
