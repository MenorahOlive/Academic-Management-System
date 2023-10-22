@extends('admin/general')

@section('content')
<div class="admin-page">


    <section class="admin-container admin-section" id="notices-private-section">
        <p class="admin-section-title">
            Send To A Group
        </p>

        <div class="form">
            <div class="form-container">
                <label for="">Subject</label>
                <input type="text" name="" id="" placeholder="Subject or title">
            </div>
            <div class="form-container">
                <label for="">Content</label>
                <input type="text" class="textarea" placeholder="Message Content">
            </div>
            <div class="row">
                <button class="primary-btn">Send to staff</button>
                <button class="primary-btn">Send to students</button>
                <button class="primary-btn">Send to everyone</button>
            </div>
        </div>
    </section>
    <section class="admin-container admin-section" id="notices-unit-section">
        <p class="admin-section-title">
            Unit Registration Requests
        </p>
        <div class="form">
            <div class="form-container">

            </div>
        </div>
    </section>

    <section class="admin-container admin-section" id="notices-public-section">
        <p class="admin-section-title">Post to Public </p>
        <div class="form">
            @csrf
            <div class="form-container">
                <label for="">To:</label>
                <input type="text" placeholder="Target" id='public_target'>
            </div>
            <div class="form-container">
                <label for="">Title</label>
                <input type="text" placeholder="Title" id='public_title'>
            </div>
            <div class="form-container">
                <label for="">Message</label>
                <input type="text" class='textarea' placeholder='Message' id='public_message'>
            </div>
            <button class="primary-btn full-btn" onclick='postPublic()'>Post To Public </button>
        </div>
    </section>

</div>
@endsection
<script>
    function postPublic() {
        var _token = document.getElementsByName("_token")[0];

        var myHeaders = new Headers();
        myHeaders.append('X-CSRF-TOKEN', _token.value)
        var public_target = document.getElementById('public_target');
        var public_title = document.getElementById('public_target');
        var public_message = document.getElementById('public_message');

        var formdata = new FormData();
        formdata.append("to", public_target.value);
        formdata.append("title", public_title.value);
        formdata.append("message", public_message.value);

        var requestOptions = {
            method: 'POST',
            body: formdata,
            headers:myHeaders,
            redirect: 'follow'
        };

        fetch("http://127.0.0.1:8000/api/public/notices/", requestOptions)
            .then(response => response.text())
            .then(result => {
                window.alert("Notice has been posted");
            })
            .catch(error => console.log('error', error));


    }
</script>