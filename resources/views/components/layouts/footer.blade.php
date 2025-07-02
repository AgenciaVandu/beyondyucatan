<footer class="footer">
    <div class="iconobeyond">
        <img src="{{ asset('/img/iconobeyond.svg') }}" width="35" alt="Icono beyond yucatan">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <ul class="navtab">
                    @if (session()->get('locale') == 'es')
                        <li>
                            <a href="{{ route('home') }}">inicio</a>
                        </li>
                        <li>
                            <a href="{{ route('experiencias') }}">Experiencias</a>
                        </li>
                        <li>
                            <a href="{{ route('bucketlist') }}">bucketlist</a>
                        </li>
                        <li>
                            <a href="{{ route('contacto') }}">Contacto</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('experiencias') }}">Experiences</a>
                        </li>
                        <li>
                            <a href="{{ route('bucketlist') }}">Bucket List</a>
                        </li>
                        <li>
                            <a href="{{ route('contacto') }}">Contact Us</a>
                        </li>
                    @endif
                </ul>
            </div>
            @if (session()->get('locale') == 'es')
                <div class="col-lg-5 col-md-6 col-12">
                    <ul class="contactform">
                        <li>
                            <a href="tel:529994113039">
                                <span class="pe-1">
                                    <img src="{{ asset('/img/whats.svg') }}" width="20" alt="">
                                </span> contactanos <br> <strong>9994113039</strong>
                            </a>

                        </li>
                        <li>
                            <a href="mailto:hola@beyondyucatan.travel">
                                <span class="pe-1">
                                    <img src="{{ asset('/img/mail.svg') }}" width="20" alt="">
                                </span> ENVÍANOS UN CORREO <br> <strong> HOLA@BEYONDYUCATAN.TRAVEL</strong>
                            </a>

                        </li>

                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="newsletter">
                        <ul>
                            <li>
                                <span>¡ÚNETE A NUESTRO <br> NEWSLETTER!</span>
                                <div class="form-group">
                                    <input name="email" id="email" type="email" class="form-control"
                                        aria-label="email">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-secondary">Enviar</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            @else
                <div class="col-lg-5 col-md-6 col-12">
                    <ul class="contactform">
                        <li>
                            <a href="tel:529994113039">
                                <span class="pe-1">
                                    <img src="{{ asset('/img/whats.svg') }}" width="20" alt="">
                                </span> Contact Us <br> <strong>9994113039</strong>
                            </a>

                        </li>
                        <li>
                            <a href="mailto:hola@beyondyucatan.travel">
                                <span class="pe-1">
                                    <img src="{{ asset('/img/mail.svg') }}" width="20" alt="">
                                </span> SEND US AN EMAIL: <br> <strong> HOLA@BEYONDYUCATAN.TRAVEL</strong>
                            </a>

                        </li>

                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="newsletter">
                        <ul>
                            <li>
                                <span>JOIN TO OUR <br> NEWSLETTER!</span>
                                <div class="form-group">
                                    <input name="email" id="email" type="email" class="form-control"
                                        aria-label="email">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-secondary">SEND</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            @endif
        </div>
        <hr>
        <div class="contact pt-4">
            <ul>
                <li>
                    <a href="https://www.facebook.com/profile.php?id=100075617091253" target="blank">
                        <img src="{{ asset('img/border-facebook.svg') }}" width="30" alt="Beyondyucatan">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/beyondyucatan/" target="blank">
                        <img src="{{ asset('img/border-instagram.svg') }}" width="30" alt="Instagram">
                    </a>
                </li>
                <li>
                    <a target="blank" 
                        href="https://www.tripadvisor.com.mx/Attraction_Review-g150811-d19068532-Reviews-TURISMAYA-Merida_Yucatan_Peninsula.html">
                        <img src="{{ asset('img/border-turism.svg') }}" width="30" alt="Tripadvisor">
                    </a>
                </li>
            </ul>
        </div>
        <hr>
        @if (session()->get('locale') == 'es')
            <div class="pie">
                <p>BEYOND YUCATAN. 2023</p>
                <a href="#">Aviso de privacidad</a>
            </div>
        @else
            <div class="pie">
                <p>BEYOND YUCATAN. 2023</p>
                <a href="#">PRIVACY AND TERMS OF USE</a>
            </div>
        @endif
    </div>
</footer>
