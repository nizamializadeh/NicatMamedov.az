@extends('layouts.frontend.frontend')
@section('content')









    <section style="padding: 100px 0px;">

    </section>


    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Get in Touch</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <form method="POST" action="https://formspree.io/Nicatmamedov@yahoo.com
">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <input type="text" name="name" class="validate" id="name">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-field">
                                    <label class="sr-only" for="email">Email</label>
                                    <input id="email" type="email" name="email" class="validate">
                                    <label for="email" data-error="wrong" data-success="right">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <input id="phone" type="tel" name="phone" class="validate">
                                    <label for="phone">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-field">
                                    <input id="website" type="text" name="website" class="validate">
                                    <label for="website">Your Website</label>
                                </div>
                            </div>
                        </div>
                        <div class="input-field">
                            <textarea name="message" id="message" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30 mb-sm-30">Göndər</button>
                    </form>
                </div>
                <div class="col-md-4 contact-info">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5222.486802438195!2d49.86299788802808!3d40.39181379122023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d14592c3719%3A0x7023dbf7d0cbe23b!2sLuksen+Plaza%2C+34+X%C9%99tai+prospekti%2C+Bak%C4%B1%2C+Azerbaycan!5e0!3m2!1str!2s!4v1561900337478!5m2!1str!2s" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                    <address>
                        <i class="material-icons brand-color">&#xE55F;</i>
                        <div class="address">
                            <p>Xətai prospekti 34
                                Bakü</p>
                        </div>
                        <i class="material-icons brand-color">&#xE61C;</i>
                        <div class="phone">
                            <p>Telefon:(012) 489 88 48</p>
                        </div>
                        <i class="material-icons brand-color">&#xE0E1;</i>
                        <div class="mail">
                            <p><a href="mailto:#">Nicatmamedov@yahoo.com</a><br>
                        </div>
                    </address>
                </div>
            </div>
        </div>
    </section>



@endsection