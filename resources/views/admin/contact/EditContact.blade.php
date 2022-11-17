@extends('admin.layout')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Contact Information</h5>
                    @include('admin.include.error')
                    <form id="contactForm" action="{{ route('admin.contact.doEdit') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @include('admin.include.error')
                        @include('admin.include.internalError')
                        @include('admin.include.message')
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">City</label>
                            <div class="col-sm-10">
                                <input name="city" id="city" type="text" class="form-control"
                                    value="{{ $contact->city }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Arabic City</label>
                            <div class="col-sm-10">
                                <input dir="rtl" name="arabic_city" id="arabic_city" type="text" class="form-control"
                                    value="{{ $contact->arabic_city }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Street</label>
                            <div class="col-sm-10">
                                <input name="street" id="street" type="text" class="form-control"
                                    value="{{ $contact->street }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Arabic Street</label>
                            <div class="col-sm-10">
                                <input dir="rtl" name="arabic_street" id="arabic_street" type="text"
                                    class="form-control" value="{{ $contact->arabic_street }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Mobile</label>
                            <div class="col-sm-10">
                                <input name="mobile" id="mobile" type="text" class="form-control"
                                    value="{{ $contact->mobile }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input name="phone" id="phone" type="text" class="form-control"
                                    value="{{ $contact->phone }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" id="email" type="text" class="form-control"
                                    value="{{ $contact->email }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="map" class="col-sm-2 col-form-label">Map (Here put the iframe from google
                                map the text after the "src" word and between the double qutations)</label>
                            <div class="col-sm-10">
                                <textarea id="map" name="map" form="contactForm" class="form-control"
                                    style="height: 200px">{{ $contact->map }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
