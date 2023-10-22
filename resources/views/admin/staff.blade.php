@extends('admin/general')

@section('content')
<div class="admin-page">
    <section class="admin-container admin-section" id="staff-list-section">
        <p class="admin-section-title">
            Staff Members
        </p>
        <input type="text" placeholder="Search for a staff Member" class="searchField">
        <div id="staff-list">

        </div>
    </section>

    <section class="admin-container admin-section" id="staff-detail">
        <p class="admin-section-title">
            Staff Details
        </p>
        <div class="staff-details-container">
            <div class="staff-profile row">
                <img src="https://www.seekpng.com/png/detail/110-1100707_person-avatar-placeholder.png" alt="">
                <div class="staff-profile-details ">
                    <p class="name" id="staff-profile-name">Edwin Ndiritu</p>
                    <div class="row">
                        <p class="course" id="staff-profile-course">Accounting</p>
                        <span> . </span>
                        <p class="caption" id="staff-profile-role">Admin</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="staff-update-form">
            @csrf
            <div class="row">

                <div class="form-container">
                    <label for="">First Name</label>
                    <input type="text" placeholder="First Name" id="fname_update">
                </div>
                <div class="form-container">
                    <label for="">Last Name</label>
                    <input type="text" placeholder="Last Name" id="lname_update">
                </div>
            </div>
            <div class="row">


                <div class="form-container">
                    <label for="">Personal Email</label>
                    <input type="text" placeholder="Email" id="p_email_update">
                </div>
            </div>
            <div class="row">

                <div class="form-container">
                    <label for="">Department</label>
                    <select id="departments-update">

                    </select>
                </div>
                <div class="form-container">
                    <label for="">Role</label>
                    <select id="roles-update">

                    </select>
                </div>
            </div>
            <button class="primary-btn" id="update-profile-btn" onclick='updateProfile()'>
                <div class="row">
                    <i class="fas fa-user-edit"></i>
                    Update Profile
                </div>
            </button>
        </div>
        <div class="divider"></div>
        <div class="staff-send-email">
            <p class="admin-section-subtitle">Send An email</p>
            <input type="text" class="textarea" id="mail-message">
            <button class="send-mail-btn primary-btn">
                <div class="row">
                    <i class="fa fa-envelope"></i>
                    Send Message
                </div>
            </button>
        </div>

    </section>

    <section class="admin-container admin-section" id="staff-add">
        <p class="admin-section-title">Add a staff member</p>
        <div class="form">


            <div class="form-container">
                <label for="">First Name</label>
                <input type="text" placeholder="First Name" id='fname_new'>
            </div>
            <div class="form-container">
                <label for="">Last Name</label>
                <input type="text" placeholder="Last Name" id='lname_new'>
            </div>


            <div class="form-container">
                <label for="">Personal Email</label>
                <input type="text" placeholder="Email Address" id='email_new'>
            </div>

            <div class="row">

                <div class="form-container">
                    <label for="">Department</label>
                    <select id="departments-add">

                    </select>
                </div>
                <div class="form-container">
                    <label for="">Role</label>
                    <select id="roles-add">

                    </select>
                </div>
            </div>
            <button class="primary-btn" id="add-staff-btn" onclick='createProfile()'>
                <div class="row">
                    <i class="fas fa-users-plus"></i>
                    Add Staff
                </div>
            </button>
        </div>
</div>

</section>
</div>
@endsection

<script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);


    // var departments_select = document.getElementById("departments-update")
    var roles_select = document.getElementById("roles_update")



    window.onload = () => {
        getStaffs();
        getStaff();
        populateSelect();
    }


    function populateSelect() {
        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };
        fetch("http://127.0.0.1:8000/api/departments/", requestOptions)
            .then(response => response.json())
            .then(result => {

                result.map(function(e) {
                    var departments_select = document.getElementById("departments-update")
                    var departments2_select = document.getElementById("departments-add")

                    var optionValue = document.createElement('option')
                    optionValue.value = e['id'];
                    optionValue.innerText = e['name']
                    departments2_select.appendChild(optionValue, )
                    departments_select.appendChild(optionValue.cloneNode(true), )
                });
            })
            .catch(error => console.log('error', error));

        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };

        fetch("http://127.0.0.1:8000/api/roles/", requestOptions)
            .then(response => response.json())
            .then(result => {
                console.log(result)
                result.map(function(e) {
                    var departments_select = document.getElementById("roles-update")
                    var departments2_select = document.getElementById("roles-add")

                    var optionValue = document.createElement('option')
                    optionValue.value = e['id'];
                    optionValue.innerText = e['name']
                    departments_select.appendChild(optionValue, )
                    departments2_select.appendChild(optionValue.cloneNode(true), )
                });
            })
            .catch(error => console.log('error', error));
    }

    function getStaffs() {

        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };
        var staff_list = document.getElementById('staff-list')

        fetch("http://127.0.0.1:8000/api/staff/", requestOptions)
            .then(response => response.json())
            .then(result => {
                result.map((e) => {
                    var staff_card = document.createElement("div")
                    staff_card.classList.add("student-admission-card", "staff-card")
                    
                    console.log(e)
                    var date = Math.floor(Math.random() * (31 - 1 + 1)) + 1
                    staff_card.innerHTML = `
                        <img src="https://www.seekpng.com/png/detail/110-1100707_person-avatar-placeholder.png" alt="">
                        <div class="col">
                            <div class="text-margin">

                                <p class="name">${e['first_name']} ${e['last_name']}</p>
                                <p class="course">${e['department']['name']}</p>
                            </div>
                            <p class="date-applied caption">Applied on ${date} December</p>
                        </div>
                    `
                    staff_card.onclick = () => {
                        window.location = `?id=${e['id']}`
                    }
                    staff_list.appendChild(staff_card)
                });

            })
            .catch(error => console.log('error', error));
    }

    function getStaff() {
        if (urlParams.has('id')) {
            var requestOptions = {
                method: 'GET',
                redirect: 'follow'
            };

            fetch(`http://127.0.0.1:8000/api/staff/${urlParams.get('id')}`, requestOptions)
                .then(response => response.json())
                .then(result => {
                    var profile_name = document.getElementById("staff-profile-name")
                    var profile_course = document.getElementById("staff-profile-course")
                    var profile_role = document.getElementById("staff-profile-role")
                    var fname_update = document.getElementById("fname_update")
                    var lname_update = document.getElementById("lname_update")
                    var p_email_update = document.getElementById('p_email_update')
                    var departments_select = document.getElementById("departments-update")
                    var roles_select = document.getElementById("roles-update")

                    profile_name.innerText = `${result['first_name']} ${result['last_name']}`
                    profile_course.innerText = `${result['department']['name']}`
                    profile_role.innerText = `${result['role']['name']}`;
                    fname_update.value = `${result['first_name']}`;
                    departments_select.value = `${result['department']['id']}`;
                    roles_select.value = `${result['role']['id']}`;
                    lname_update.value = `${result['last_name']}`;
                    p_email_update.value = `${result['email_address']}`
                })
                .catch(error => console.log('error', error));
        }
    }

    function updateProfile() {
        var fname_update = document.getElementById("fname_update")
        var lname_update = document.getElementById("lname_update")
        var p_email_update = document.getElementById('p_email_update')
        var departments_select = document.getElementById("departments-update")
        var roles_select = document.getElementById("roles-update")
        var urlencoded = new URLSearchParams();
        var _token = document.getElementsByName("_token")[0];
        var myHeaders = new Headers();
        myHeaders.append('X-CSRF-TOKEN', _token.value)
        urlencoded.append("first_name", fname_update.value);
        urlencoded.append("last_name", lname_update.value);
        urlencoded.append("email_address", p_email_update.value);
        urlencoded.append("department_id", departments_select.value);
        urlencoded.append("role_id", roles_select.value);

        var requestOptions = {
            method: 'PUT',
            body: urlencoded,
            redirect: 'follow',
            headers: myHeaders
        };

        fetch("http://127.0.0.1:8000/api/staff/2/", requestOptions)
            .then(response => response.text())
            .then(result => {
                window.location.reload()
            })
            .catch(error => console.log('error', error));
    }

    function createProfile() {
        var fname_update = document.getElementById("fname_new")
        var lname_update = document.getElementById("lname_new")
        var p_email_update = document.getElementById('email_new')
        var departments_select = document.getElementById("departments-add")
        var roles_select = document.getElementById("roles-add")
        var _token = document.getElementsByName("_token")[0];
        var myHeaders = new Headers();
        myHeaders.append('X-CSRF-TOKEN', _token.value)
        var formdata = new FormData();
        formdata.append("email_address", p_email_update.value);
        formdata.append("first_name", fname_update.value);
        formdata.append("last_name", lname_update.value);
        formdata.append("role_id", roles_select.value);
        formdata.append("department_id", departments_select.value);

        var requestOptions = {
            method: 'POST',
            headers: myHeaders,
            body: formdata,
            redirect: 'follow'
        };

        fetch("http://127.0.0.1:8000/api/staff/", requestOptions)
            .then(response => response.text())
            .then(result => {
                window.location.reload()
            })
            .catch(error => console.log('error', error));
    }
</script>