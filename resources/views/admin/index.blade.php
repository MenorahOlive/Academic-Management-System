@extends('admin.general')

@section('content')

<div class="admin-hero">

    <div class="notices-section">


        <div class="row-wrap" id='notices-list'>

            


        </div>
    </div>

    <!-- <div class="col">
        <img src="{{URL::asset('assets/admin/admin_hero.png')}}" alt="">
        <div class="hero-text">

            <h3>You are in control</h3>
            <p class="hero-caption">Do not worry, you can deal with everything from here :)</p>
            <div class="hero-links">
                <a href="">Admissions</a>
                <a href="">Staff</a>
                <a href="">Departments</a>
                <a href="">Announcements</a>
            </div>
        </div>
    </div </div> -->
</div>
@endsection

<style>
    @import url('https://fonts.googleapis.com/css2?family=Kalam&display=swap');

    /* Some positioning and ratios */
    .sticky-container {
        max-width: 270px;
        position: relative;
    }

    .sticky-outer {
        display: flex;
        padding-top: 92.5925926%;
        position: relative;

        width: 260px;
        height:270px
    }

    .sticky {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    /* Shadow behind the sticky note */
    .sticky:before {
        box-shadow: -2px 2px 15px 0 rgba(0, 0, 0, 0.5);
        background-color: rgba(0, 0, 0, 0.25);
        content: '';
        width: 90%;
        left: 5px;
        height: 75%;
        position: absolute;
        top: 30%;
    }

    /* The sticky note itself */
    .sticky-content {
        background: linear-gradient(180deg,
                rgba(187, 235, 255, 1) 0%,
                rgba(187, 235, 255, 1) 12%,
                rgba(170, 220, 241, 1) 75%,
                rgba(195, 229, 244, 1) 100%);
        width: 100%;
        height: 100%;
        padding: 1em;

        /* display: flex;
        justify-content: center;
        align-items: center; */
        font-family: 'Kalam', cursive;
        font-size: 1em;

        clip-path: url(#stickyClip);
    }

    .sticky-title {
        font-size: 1em;
        font-weight: bold;
        text-align: center;
    }

    .sticky-target {
        font-size: small;
        font-weight: 500;
        text-align: center;
        color: gray;
    }

    .sticky-message {
        margin: 1em 0;
        font-size: 1em;
        font-weight: 600;
    }

    /* Position the sticky nicely, so it looks better */


    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
    }

    .container-inner {
        width: 50%;
        margin: 25px;
    }

    /* Add responsiveness */
    @media screen and (min-width: 640px) {
        .sticky-content {
            font-size: 1.5rem;
        }

        .container-inner {
            width: 50%;
        }
    }

    @media screen and (min-width: 768px) {
        .sticky-content {
            font-size: 1.5rem;
        }

        .container-inner {
            width: 50%;
        }
    }

    @media screen and (min-width: 1024px) {
        .sticky-content {
            font-size: 1em;
        }

        .container-inner {
            width: 25%;
        }
    }
</style>

<script>
    window.onload = ()=>{
        getNotices()
    }
    function getNotices(){

    
    var notices_list = document.getElementById('notices-list')

    var requestOptions = {
        method: 'GET',
        redirect: 'follow'
    };

    fetch("http://127.0.0.1:8000/api/public/notices/", requestOptions)
        .then(response => response.json())
        .then(result => {

            result.map(e => {

                var sticky_note = document.createElement('div')
                sticky_note.classList.add('container1')

                sticky_note.innerHTML = `
                <div class="container-inner">
                    <div class="sticky-container">
                        <div class="sticky-outer">
                            <div class="sticky">
                                <svg width="0" height="0">
                                    <defs>
                                        <clipPath id="stickyClip" clipPathUnits="objectBoundingBox">
                                            <path d="M 0 0 Q 0 0.69, 0.03 0.96 0.03 0.96, 1 0.96 Q 0.96 0.69, 0.96 0 0.96 0, 0 0" stroke-linejoin="round" stroke-linecap="square" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="sticky-content">
                                    <p class="sticky-title">${e['title']}</p>
                                    <p class="sticky-target">To: ${e['to']}</p>
                                    <p class="sticky-message">${e['message']}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                `;
                notices_list.appendChild(sticky_note)
            })

        })
        .catch(error => console.log('error', error));

    }
</script>