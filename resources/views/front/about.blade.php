@extends('master')
@section('content')
    <div class="row" style="padding-top: 50px;">
        <div class="col-lg-12 text-center">
            <h1 style="font-weight: bold;color:red;">Што е krvodaritel.mk ?</h1>
        </div>
        <div class="container">
            <div class="row">
                <p style="color:black;font-size: 15px;padding:5px 5px">krvodaritel.mk e веб апликација koja  ќе им помогне на оние лице на кои им е потребна крв,
                    а покрај тоа ќе ги поттикне тие што ќе ја даруваат за во иднина да станат редовни крводарители.
                    Без разлика дали некои ќе даруваат крв или не, најмалку што можат да направат е да почнат да размислуваат на
                    похуман начин со тоа што ќе се информираат и ќе читаат искуства на веб апликацијата.За тие што ќе решат
                    да станат крводарители ќе можат да закажат термин,што претстатува многу олеснителна околност поради
                    зафатеноста во работата и дво-сменското работење.</p>
            </div>
            <hr style="height:1px;border:none;color:#333;background-color:#333;" >
            <div class="row text-center" style="padding-top:50px;">
                <div class="col-lg-12">
                    <h1 style="font-weight: bold;color:red;">Нашиот Тим</h1>
                </div>
            </div>
            <div class="row text-center">
                    <p style="color:black;font-size: 15px;padding:5px 5px">Сите сме многу различни. Родени сме во различни градови,
                        во различни периоди, сакаме поинаква музика, храна, филмови. Но, имаме нешто што сите нас ги обединува.
                        Тоа е нашата компанија. Ние сме неговото срце. Ние не сме само тим, ние сме семејство.
                    </p>
            </div>
            <div class="row" style="padding-top:50px;">
                <div class="col-md-6 col-sm-12">
                    <!-- begin team -->
                    <div class="team">
                        <div class="image" data-animation="true" data-animation-type="flipInX">
                            <img src="team1.jpg" alt="Ryan Teller" />
                        </div>
                        <div class="info">
                            <h3 class="name">Јосиф Сиркаров</h3>
                            <div class="title text-theme">Full Stack PHP Laravel developer / System Administrator</div>
                            <p>Факултетот за информатички науки и компјутерско инженерство ме мотивираше да станам тоа што сакав одсекогаш, а
                            тоа е Web developer и System Administrator.</p>
                        </div>
                    </div>

                    <!-- end team -->
                </div>
                <div class="col-md-6 col-sm-12">
                    <!-- begin team -->
                    <div class="team">
                        <div class="image" data-animation="true" data-animation-type="flipInX">
                            <img src="team2.jpg" alt="Ryan Teller" />
                        </div>
                        <div class="info">
                            <h3 class="name">Душица Димовска</h3>
                            <div class="title text-theme">UI Designer /Web Designer</div>
                            <p>Цртањето беше моја јака страна,а со тоа вешто работев со различните нијанси на бои,затоа Веб дизајнерството
                            беше добра прилика која што ја искористив.</p>
                        </div>
                    </div>
                    <!-- end team -->
                </div>


            </div>
            <hr style="height:1px;border:none;color:#333;background-color:#333;" >
            <div class="row text-center" style="padding-top:50px;">
                <div class="col-lg-12">
                    <h1 style="font-weight: bold;color:red;">Контакт</h1>
                </div>
            </div>
            <div class="row text-center">
                <p style="color:black;font-size: 15px;padding:5px 5px">Доколку имате забелешки во врска со нашата апликација, или не можете да
                    се најавите и имате проблеми технички со останатите работи ве молиме да не контактирате.
                </p>
                <div class="container" style="padding-bottom:50px;">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="well well-sm">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">
                                                    <strong>Име</strong></label>
                                                <input type="text" class="form-control" id="name" placeholder="Внеси name" required="required" />
                                            </div>
                                            <div class="form-group">
                                                <label for="email">
                                                   <strong> Email Адреса </strong></label>
                                                <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                                    <input type="email" class="form-control" id="email" placeholder="Внеси email" required="required" /></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="subject">
                                                    <strong>Предмет</strong></label>
                                                <select id="subject" name="subject" class="form-control" required="required">
                                                    <option value="na" selected="">Одберете едно од понудените</option>
                                                    <option value="service">Кориснички Сервис</option>
                                                    <option value="suggestions">Предлог</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">
                                                    <strong>Порака</strong></label>
                                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                                          placeholder="Место за Пораката"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary pull-right"  style="background-color: red;" id="btnContactUs">
                                                Испрати Порака</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <form>
                                <legend  style="color:black;"><span class="glyphicon glyphicon-globe"></span> Нашата Канцеларија</legend>
                                <address>
                                    <strong style="color:black;">Локација</strong><br>
                                    Браќа поп-Јорданови бр:11<br>
                                    Велес, Македонија<br>
                                        тел:
                                    +38975615978
                                </address>
                                <address>
                                    <strong style="color:black;">Контакт Емаил</strong><br>
                                    <a href="mailto:#"> support@krvodaritel.mk</a>
                                </address>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    .jumbotron {
        background: #358CCE;
        color: #FFF;
        border-radius: 0px;
    }
    .jumbotron-sm { padding-top: 24px;
        padding-bottom: 24px; }
    .jumbotron small {
        color: #FFF;
    }
    .h1 small {
        font-size: 24px;
    }
</style>
