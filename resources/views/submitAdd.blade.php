@extends('layouts.app')
@section('content')
<!-- ***** Addform Area Start ***** -->
<div class="dorne-contact-area d-md-flex" id="contact">
    <!-- Contact Form Area -->
    <div class="contact-form-area ">
        <div class="contact-text">
            <h4> ثبت رایگان آگهی </h4>
            <p>در این بخش شما میتوانید آگهی آرایشگاه ،آموزشگاه ،فروشگاه لوازم آرایشی و انواع خدمات آرایشی و بهداشتی
                خود را  به ضورت کاملا رایگان ثبت کنید.
                پس  تمامی اطلاعات درخواست شده را به درستی ثبت کنید تا مخاطبان عزیز بتوانند به شما دسترسی
                سریع و راحت داشته باشند.
                با تشکر مدیریت وبسایت 
                </p>
            <br>
        </div>
        <div class="contact-form">
            <div class="contact-form-title">
                <h6> مشخصات ثبت کننده آگهی </h6>
            </div>
            <form action="/a" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-4">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="نام و نام خانوادگی">
                               @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    </div>
                    <div class="col-12 col-md-4">
                         <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="شماره تماس">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="col-12 col-md-4">
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ایمیل">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="col-12 contact-form-title">
                        <h6> مشخصات آگهی </h6>
                    </div>
                    <div class="col-12 col-md-6">
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">آپلود گالری تصاویر</label>
                                </div>
                            </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <select class="form-control" id="ostan" name="ostan">
                            <option selected>استان</option>
                            <option onclick="selectList(this)"> آذربایجان شرقی </option>
                            <option onclick="selectList(this)"> آذربایجان غربی </option>
                            <option onclick="selectList(this)"> اردبیل </option>
                            <option onclick="selectList(this)"> اصفهان </option>
                            <option onclick="selectList(this)"> البرز </option>
                            <option onclick="selectList(this)"> ایلام </option>
                            <option onclick="selectList(this)"> بوشهر </option>
                            <option onclick="selectList(this)"> تهران </option>
                            <option onclick="selectList(this)"> چهارمحال و بختیاری </option>
                            <option onclick="selectList(this)"> خراسان جنوبی </option>
                            <option onclick="selectList(this)"> خراسان رضوی </option>
                            <option onclick="selectList(this)"> خراسان شمالی </option>
                            <option onclick="selectList(this)"> خوزستان </option>
                            <option onclick="selectList(this)"> زنجان </option>
                            <option onclick="selectList(this)"> سمنان </option>
                            <option onclick="selectList(this)"> سیستان و بلوچستان </option>
                            <option onclick="selectList(this)"> فارس </option>
                            <option onclick="selectList(this)"> قزوین </option>
                            <option onclick="selectList(this)"> قم </option>
                            <option onclick="selectList(this)"> کردستان </option>
                            <option onclick="selectList(this)"> کرمان </option>
                            <option onclick="selectList(this)"> کرمانشاه </option>
                            <option onclick="selectList(this)"> کهگیلویه و بویراحمد </option>
                            <option onclick="selectList(this)"> گلستان </option>
                            <option onclick="selectList(this)"> گیلان </option>
                            <option onclick="selectList(this)"> لرستان </option>
                            <option onclick="selectList(this)"> مازندران </option>
                            <option onclick="selectList(this)"> مرکزی </option>
                            <option onclick="selectList(this)"> هرمزگان </option>
                            <option onclick="selectList(this)"> همدان </option>
                            <option onclick="selectList(this)"> یزد </option>
                        </select>
                        <script>
                            /* $('#ostan option').click(function () {
                                //var txt = $(this).text();
                                alert(1);
                            }); */

                            function selectList(tag) {
                                option_tag = $(tag);
                                var txt = option_tag.text();
                                //alert(txt);
                            }
                            
                        </script>
                    </div>
                    <div class="col-12 col-md-6">
                        <input id="telegram" type="url" class="form-control @error('telegram') is-invalid @enderror" name="telegram" value="{{ old('telegram') }}" required autocomplete="telegram" autofocus placeholder="کانال تلگرام">
                                @error('telegram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <input id="instagram" type="url" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') }}" required autocomplete="instagram" autofocus placeholder="صفحه اینستاگرام">
                                @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="col-12">
                        <textarea name="address" class="form-control" id="Message" cols="30" rows="10" placeholder="آدرس"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn dorne-btn"> ارسال </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- ***** Addform Area End ***** -->
<!-- Modal -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">ثبت نام</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="orangeForm-name">نام کاربری</label>
                    <input type="text" id="orangeForm-name" class="form-control">

                </div>
                <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="orangeForm-email">ایمیل</label>
                    <input type="email" id="orangeForm-email" class="form-control">

                </div>

                <div class="md-form mb-4">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">رمزعبور</label>
                    <input type="password" id="orangeForm-pass" class="form-control">

                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn dorne-btn">ثبت نام</button>
            </div>
        </div>
    </div>
</div>

@endsection