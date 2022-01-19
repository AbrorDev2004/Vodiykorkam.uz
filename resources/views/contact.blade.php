@extends('layouts.site')
@section('content')
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="100%" height="350" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1229.9155965873747!2d72.35908521824194!3d40.74793382206803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bced630e0f4795%3A0xf72460c2369068a8!2sDigital%20City!5e1!3m2!1sru!2s!4v1640884433356!5m2!1sru!2s" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://www.emojilib.com/"></a>
        </div>
        <style>
        .mapouter {
            position: relative;
            text-align: right;
            height: 350px;
            width: 100%;
        }
        
        .gmap_canvas {
            overflow: hidden;
            background: none!important;
            height: 350px;
            width: 100%;
        }
        </style>
    </div>
    <section class="contact-section bg-grey padding">
        <div class="dots"></div>
        <div class="container">
            <div class="contact-wrap d-flex align-items-center row">
                <div class="col-md-6 padding-15">
                    <div class="contact-info">
                        <h2>Savol va takliflar uchun</h2>
                        <p>"VODIY KO‘RKAM QURILISH" Lorem ipsum dolor sit amet consectetur adipisicing elit. Id esse distinctio alias tenetur sint excepturi repellat fuga architecto enim sit.</p>
                        <h4><span>Email:</span> _________@gmail.com <br> <span>telefon nomer:</span> +998(93)410-99-49 <br></h4> </div>
                </div>
                <div class="col-md-6 padding-15">
                    <div class="contact-form">
                        <form action="{{ route('contact.store') }}" method="POST" id="ajax_form" class="form-horizontal">
                            @csrf
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Ism kiriting" required> </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Emailni kiriting" required> </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Xabarni kiriting" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="submit" class="default-btn" type="submit">Xabarni yuborish</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection