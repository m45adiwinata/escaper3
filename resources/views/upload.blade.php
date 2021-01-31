@extends('layouts.phone')
@section('content')
@include('components.headerphone2')
<div class="upload-wrapper">
	<div class="container-lg">
        <div class="upload-content">
            <p> Please upload your payment/transfer proof</p>
            <form class="form-row" action="/cart/post-upload" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$checkout->id}}">
                <div>
                    <label for="username">Bank account name *</label>
                    <input type="email" class="form-control" name="username" id="username" placeholder="" autocomplete="off">
                </div>
                <div>
                    <label for="upload">Upload Evidence Of Payment *</label>
                    <input type="file" class="form-control" name="upload" id="imgInp" name="file">
                    <img id="preview"></img>
                </div>
                <div>
                    <label for="inputNotes">Message (optional)</label>
                    <textarea class="form-control" id="inputNotes" rows="4" name="notes" placeholder=></textarea>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</div>
@include('components.footerphone')
@endsection

@section('script')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#imgInp").change(function() {
        readURL(this);
    });
</script>
@endsection