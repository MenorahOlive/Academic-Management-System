@extends('admin/general')

@section('content')
<div class="admissions-page admin-page">
    <section class="admin-container admin-section" id="admissions-list">
        <p class="admin-section-title">
            Admission List
        <p class="caption" style='text-align:center;'>A list of students awaiting admissions</p>

        <div class="students-admission-list" id="adm-list">

        </div>
        </p>
    </section>
    <!-- <section class="admin-container admin-section" id="admissions-detail">
        @if(Request::get('id'))
        @else
        <div class="div-placeholder">
            <img src="https://studio.uxpincdn.com/studio/wp-content/uploads/2016/04/image04-3.png" alt="">
            <p class="caption">Select a student to begin admission process</p>
        </div>
        @endif
    </section> -->


</div>
@endsection


<script>
    window.onload = () => {
        getAdmissions()
    }

    function getAdmissions() {

        var adm_list = document.getElementById("adm-list")
        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };

        fetch("http://127.0.0.1:8000/api/admissions/requests/", requestOptions)
            .then(response => response.json())
            .then(result => {
                result.map(e => {
                    var adm_card = document.createElement('div');
                    adm_card.classList.add('student-admission-card')
                    adm_card.innerHTML = `
                    <img src="https://www.seekpng.com/png/detail/110-1100707_person-avatar-placeholder.png" alt="">
                <div class="col">
                    <div class="text-margin">


                        <p class="name">${e['first_name']} ${e['last_name']}</p>
                        <p class="course">${e['course']['name']}</p>
                    </div>
                    <div class="row">
                        <p class="text-btn primary" id ='approve_${e['id']}'>
                            Approve
                        </p>
                        <p class="text-btn warning">
                            Reject
                        </p>
                    </div>
                    <p class="date-applied caption">Applied on 3rd December</p>
                </div>
                    
                    `;



                    adm_card.onclick = () => {
                        window.location = `?id=${e['id']}`;
                    }

                    adm_list.appendChild(adm_card);
                    var approvebtn = document.getElementById(`approve_${e['id']}`);
                    approvebtn.onclick = () => {
                        var requestOptions = {
                            method: 'GET',
                            redirect: 'follow'
                        };

                        fetch(`http://127.0.0.1:8000/api/admissions/requests/approve/${e['id']}`, requestOptions)
                            .then(response => response.json())
                            .then(result => {
                                window.alert("Successfully admitted student. An email has been sent to the student")
                            })
                            .catch(error => window.alert("An error has occcured"));
                    };


                })
            })
            .catch(error => console.log('error', error));

    }
</script>