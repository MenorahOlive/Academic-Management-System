@extends('admin/general')

@section('content')
<div class="departments-page">
    <section class="admin-container" id="departments-list">
        <p class="admin-section-title">
            Department Lists
        </p>
        <div class="department-list" id="dep-items">


        </div>
    </section>
    <section class="admin-container" id="departments-crud">
        <p class="admin-section-title">
            Add a department
        </p>

        <div class="department-form">
            <div class="form">
                @csrf
                <div class="form-container">
                    <label for="Name">
                        Name
                    </label>
                    <input type="text" placeholder="Department Name" id="create-dep-name">
                </div>

                <button class="submit-btn" onclick="addDepartments()">
                    Add Department
                </button>
            </div>
        </div>
    </section>
    <section class="admin-container" id="departments-crud">
        <p class="admin-section-title">
            Update a department
        </p>

        <div class="department-form">
            @if(Request::get('id'))
            <div class='form'>
                @csrf
                <div class="form-container">
                    <label for="Name">
                        Name
                    </label>
                    <input type="text" placeholder="Department Name" id="update-dep-name">
                </div>

                <button class="submit-btn" onclick='updateDepartment()'>
                    Update Department
                </button>
            </div>

            @else
            <div class="warning-container">
                <img src="{{URL::asset('assets/admin/admin_down.png')}}" alt="">

                <p class="warning">Oops :( You need to select a deparment</p>
            </div>
            @endif
        </div>
    </section>

</div>
@endsection


<script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    window.onload = function() {
        getDepartments();
        getDepartment();
    }

    function getDepartments() {
        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };

        fetch("http://127.0.0.1:8000/api/departments/", requestOptions)
            .then(response => response.json())
            .then(result => {

                var doc_ref = document.getElementById("dep-items");

                result.map(function(e) {
                    var doc_card = document.createElement('div');
                    doc_card.classList.add("department-list-card")

                    doc_card.innerHTML = `
                            <div class="row">

                                <p class='medium-large-text'>${e['name']}</p>
                                <i class="fa fa-trash delete-icon" id='delete_${e['id']}'></i>
                            </div>
                    `;
                    doc_card.onclick = () => {
                        window.location = `/admin/departments/?id=${e["id"]}`
                    }

                    doc_ref.appendChild(doc_card)
                });
            })
            .catch(error => console.log('error', error));
    }

    function getDepartment() {


        if (urlParams.has('id')) {
            var inputField = document.getElementById('update-dep-name')
            var paramId = urlParams.get('id');
            var requestOptions = {
                method: 'GET',
                redirect: 'follow'
            };

            fetch(`http://127.0.0.1:8000/api/departments/${paramId}`, requestOptions)
                .then(response => response.json())
                .then(result => {
                    inputField.value = result['name']
                })
                .catch(error => console.log('error', error));
        }
    }

    function addDepartments() {
        var name = document.getElementById("create-dep-name");
        var _token = document.getElementsByName("_token")[0];

        var myHeaders = new Headers();
        myHeaders.append('X-CSRF-TOKEN', _token.value)
        // myHeaders.append("Authorization", "Bearer 1|zvzY2LUa4Um6gkePeNXKoRH4Omn4quaLBKXwgtnh");

        var formdata = new FormData();
        formdata.append("name", name.value);

        var requestOptions = {
            method: 'POST',
            headers: myHeaders,
            body: formdata,
            redirect: 'follow'
        };

        fetch("http://127.0.0.1:8000/api/departments/", requestOptions)
            .then(response => response.text())
            .then(result => window.location.reload())
            .catch(error => console.log('error', error));
    }

    function updateDepartment() {
        var myHeaders = new Headers();

        var urlencoded = new URLSearchParams();
        var _token = document.getElementsByName("_token")[0];

        var text = document.getElementById('update-dep-name');
        myHeaders.append('X-CSRF-TOKEN', _token.value)

        urlencoded.append("name", text.value);

        var requestOptions = {
            method: 'PATCH',
            body: urlencoded,
            headers:myHeaders,
            redirect: 'follow'
        };

        fetch(`http://127.0.0.1:8000/api/departments/${urlParams.get('id')}/`, requestOptions)
            .then(response => response.text())
            .then(result => {
                console.log(result)
                window.location = "/admin/departments/";
            })
            .catch(error => console.log('error', error));
    }
</script>