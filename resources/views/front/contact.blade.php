@extends('front.layouts.master')
@section('title','İletişim')
@section('bg-image', asset('front/assets/img/contact-bg.jpg'))
@section('content')
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-8 col-xl-7">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                        @endif
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{$error}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <p>Bizimle iletişime geçebilirsiniz.</p>
                        <div class="my-5">
                            <form id="contactForm" method="post" action="{{route('contact.post')}}">
                                @csrf
                                <div class="form-floating">
                                    <input class="form-control" name="name" value="{{old('name')}}" type="text" placeholder="Ad Soyad giriniz..." data-sb-validations="required" />
                                    <label for="name">Ad Soyad</label>
                                   
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="email" value="{{old('email')}}" type="email" placeholder="Email adresinizi giriniz." data-sb-validations="required,email" />
                                    <label for="email">Email Adresiniz</label>
                                
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="topic" value="{{old('topic')}}" type="topic" placeholder="Buraya mesajınızın konusunu giriniz." data-sb-validations="required,topic" />
                                    <label for="topic">Konu</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="messeage" placeholder="Buraya bir mesajınızı giriniz..." style="height: 12rem" data-sb-validations="required">{{old('messeage')}}</textarea>
                                    <label for="message">Mesajınız</label>
                                    
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                {{-- <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder alert alert-success">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div> --}}
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                {{-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> --}}
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">GÖNDER</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                       
                            <div class="card card-default">
                                <div class="card-body">
                                    Adress: Acıpayam/DENİZLİ
                                </div>
                            </div>

                        
                    </div>
                </div>
            </div>
        </main>

@endsection