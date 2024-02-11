@extends('layouts.app')

@section('content')
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg mt-5 mb-5">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis">شرایط ثبت نام</h1>
        <p class="lead">توضیحات مرتبط با ثبت نام اولیه.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">بیشتر بدانید</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">درباره ما</button>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-5 overflow-hidden">
          <img class="rounded-lg-3" src="{{asset('img/logo.png')}}" alt="" width="320">
      </div>
    </div>

    <div class="row g-5">
          <h4 class="mb-3">مشخصات آزمون</h4>
          <form class="needs-validation" novalidate="">
            <div class="row g-3">
              <div class="col-sm-4">
                <label for="firstName" class="form-label">نام آزمون</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  نام معتبر مورد نیاز می‌باشد.
                </div>
              </div>
              
              <div class="col-md-4">
                <label for="grade" class="form-label">حداقل مقطع تحصیلی</label>
                <select class="form-select" id="grade" required="">
                  <option value="">انتخاب کنید...</option>
                  <option>دکتری</option>
                  <option>کارشناسی ارشد</option>
                  <option>کارشناسی</option>
                  <option>کاردانی</option>
                  <option>دیپلم</option>
                  <option>زیر دیپلم</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid grade.
                </div>
              </div>

              <div class="col-md-5">
                  <label for="country" class="form-label">رشته</label>
                  <select class="form-select" id="country" required="">
                      <option value="">انتخاب کنید...</option>
                      <option>گرایش مهندسی نرم ‌افزار</option>
                      <option>گرایش رایانش امن</option>
                      <option>گرایش شبکه های کامپیوتری</option>
                      <option>گرایش هوش مصنوعی</option>
                      <option>گرایش معماری سیستم های کامپیوتر</option>
                      <option>گرایش الگوریتم ها و محاسبات</option>

                      <option>صنایع خودرو</option>
                      <option>الکترونیک</option>
                      <option>صنایع چوب</option>
                      <option>صنایع کاغذ</option>
                      <option>جوشکاری و بازرسی جوش</option>
                      <option>حمل ونقل زمینی</option>
                      <option>حمل ونقل دریایی</option>
                      <option>حمل و نقل ریلی</option>
                      <option>تاسیسات</option>
                      <option>صنایع دریایی</option>
                      <option>صنایع رنگ</option>
                      <option>صنایع شیمیایی</option>
                      <option>پلیمر</option>
                      <option>پتروشیمی</option>
                      <option>صنایع چرم وپوست و خز</option>
                      <option>صنایع نساجی</option>
                      <option>متالورژی</option>
                      <option>فناوری ارتباطات</option>
                      <option>مدیریت صنایع</option>
                      <option>سرامیک</option>
                      <option>مکانیک</option>
                      <option>کنترل وابزار دقیق</option>
                      <option>برق</option>
                      <option>صنایع فلزی</option>
                      <option>ساختمان</option>
                      <option>معماری</option>
                      <option>صنعت چاپ</option>
                      <option>معدن</option>
                      <option>امور اداری</option>
                      <option>امور مالی و بازرگانی</option>
                      <option>بهداشت و ایمنی</option>
                      <option>فناوری اطلاعات</option>
                      <option>مراقبت و زیبایی</option>
                      <option>خدمات آموزشی</option>
                      <option>صنایع پوشاک</option>
                      <option>گردشگری</option>
                      <option>هتلداری</option>
                      <option>امورشیلات و آبزی پروری</option>
                      <option>امور دام و ماکیان</option>
                      <option>امور باغی</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
              </div>
  
              <div class="col-md-4">
                <label for="state" class="form-label">شهر</label>
                <select class="form-select" id="state" required="">
                  <option value="">انتخاب کنید...</option>
                  <option>ورامین</option>
                  <option>آزادی</option>
                  <option>پاسدارن</option>
                  <option>تهران سر</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
  
              <div class="col-md-3">
                <label for="zip" class="form-label">کد پستی</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
              
            <div class="col-12">
              <label for="address" class="form-label">آدرس</label>
              <input type="text" class="form-control" id="address" placeholder="میدان آزادی، نبش خوش جنوبی" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">آدرس 2 <span class="text-body-secondary">(اختیاری)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="ساختمان شماره 128">
            </div>

  
            <hr class="my-4">
  
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="same-address">
              <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
  
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Save this information for next time</label>
            </div>
  
            <hr class="my-4">
  
            <h4 class="mb-3">Payment</h4>
  
            <div class="my-3">
              <div class="form-check">
                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
                <label class="form-check-label" for="credit">Credit card</label>
              </div>
              <div class="form-check">
                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                <label class="form-check-label" for="debit">Debit card</label>
              </div>
              <div class="form-check">
                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                <label class="form-check-label" for="paypal">PayPal</label>
              </div>
            </div>
  
            <div class="row gy-3">
              <div class="col-md-6">
                <label for="cc-name" class="form-label">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-body-secondary">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
  
              <div class="col-md-6">
                <label for="cc-number" class="form-label">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
  
              <div class="col-md-3">
                <label for="cc-expiration" class="form-label">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
  
              <div class="col-md-3">
                <label for="cc-cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
  
            <hr class="my-4">
  
            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
          </form>
    </div>
@endsection