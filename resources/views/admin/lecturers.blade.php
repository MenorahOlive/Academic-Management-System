@extends('admin/general')

@section('content')
<div class="admin-page">
    <section class="admin-container admin-section lec-section">
        <p class="admin-section-title">
            Lecturers Class Allocation
        </p>

        <div class="form" id='class-allocation-form'>
            <div class="form-container">
                <label for="">Lecturer</label>
                <select name="" id="lecturers-select">


                </select>
            </div>
            <div class="form-container">
                <label for="">Unit</label>
                <select name="" id="unit-select">

                </select>
            </div>
            <div class="form-container">
                <label for="">Group</label>
                <select name="" id="group-select">
                </select>
            </div>

            <button class="primary-btn full-btn" onclick="allocateClass()">Assign Class</button>
        </div>
    </section>

    <section class="admin-container admin-section lec-section">
        <p class="admin-section-title">
            Register A Lecturer
        </p>

        <div class="form">
            @csrf
            <div class="form-container">
                <label for="">Lecturer Name</label>
                <input type="text" name="" id="lec_name_add">
            </div>
            <div class="form-container">
                <label for="">Id Number</label>
                <input type="text" id='id_number'>
            </div>
            <div class="form-container">
                <label for="">Qualifications</label>
                <input type="text" name="" id="lec_qualifications">
            </div>
            <button class="primary-btn full-btn" onclick='addLecturer()'>Add Lecturer</button>

        </div>
    </section>
</div>

<script>
    window.onload = () => {
        getLectures()
        getUnits()
        getGroups()
    }

    function getLectures() {
        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };

        fetch("http://127.0.0.1:8000/api/lecturers/", requestOptions)
            .then(response => response.json())
            .then(result => {
                var lec_select = document.getElementById("lecturers-select");
                result.map(e => {
                    var lec_option = document.createElement('option')
                    lec_option.value = e['id']
                    lec_option.innerHTML = `
                            <div class="row">
                                        <img src="https://www.seekpng.com/png/detail/110-1100707_person-avatar-placeholder.png" alt="" class="small-image">
                                        <p class="option-lecturer-id">${e['id']}. </p>
                                        <p class="option-lecturer-name">${e['name']}</p>
                                    </div>
                
                    `
                    lec_select.appendChild(lec_option)
                });

            })
            .catch(error => console.log('error', error));
    }

    function getUnits() {
        var unit_select = document.getElementById("unit-select")
        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };

        fetch("http://127.0.0.1:8000/api/units/", requestOptions)
            .then(response => response.json())
            .then(result => {
                result.map(e => {
                    var unit = document.createElement("option")
                    unit.value = e['id']
                    unit.innerHTML = `
                    <div class="row">
                            <p class="option-unit-code">${e['id']}</p>
                            <p class="option-unit-name">${e['name']}</p>
                        </div>
                    
                    `

                    unit_select.appendChild(unit)
                })
            })
            .catch(error => console.log('error', error));
    }

    function getGroups() {
        var group_select = document.getElementById('group-select')

        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };

        fetch("http://127.0.0.1:8000/api/groups/", requestOptions)
            .then(response => response.json())
            .then(result => {
                result.map(e => {
                    var group = document.createElement("option")
                    group.value = e['id'];
                    group.innerText = e['name']

                    group_select.appendChild(group)
                })
            })
            .catch(error => console.log('error', error));

    }

    function addLecturer() {
        var lec_name = document.getElementById('lec_name_add')
        var _token = document.getElementsByName("_token")[0];

        var myHeaders = new Headers();
        myHeaders.append('X-CSRF-TOKEN', _token.value)
        var formdata = new FormData();
        formdata.append("name", lec_name.value);

        var requestOptions = {
            method: 'POST',
            body: formdata,
            headers: myHeaders,
            redirect: 'follow'
        };

        fetch("http://127.0.0.1:8000/api/lecturers/", requestOptions)
            .then(response => response.json())
            .then(result => {
                window.alert("That was a success :)");
                window.location.reload()
            })
            .catch(error => window.alert("Oopsies"));
    }

    function allocateClass() {
        var _token = document.getElementsByName("_token")[0];
        var _lec = document.getElementById("lecturers-select")
        var _unit = document.getElementById('unit-select');
        var _group = document.getElementById('group-select')



        var myHeaders = new Headers();

        myHeaders.append('X-CSRF-TOKEN', _token.value)

        var formdata = new FormData();
        formdata.append("lecturer", _lec.value);
        formdata.append("unit", _unit.value);
        formdata.append("group", _group.value);

        var requestOptions = {
            method: 'POST',
            body: formdata,
            headers: myHeaders,
            redirect: 'follow'
        };

        fetch("http://127.0.0.1:8000/api/allocation/", requestOptions)
            .then(response => response.json())
            .then(result => window.alert("That was a success"))
            .catch(error => window.alert("Oopsie"));
    }
</script>
@endsection