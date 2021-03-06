<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    .content1-left{
        padding:3%;
        background:#faf4f4;
    }
    .content1-right{
        padding:3%;
        background:#d8d2d2;
    }
    .home-content2{
        background: #adb5bd;
        padding: 0.4%;
        text-align: center;
    }
    .home-content2 p{
        font-size: 18px;
        line-height: 50px;
    }
    .home-content2 p span{
        font-weight: 900;
    }

    #home_quicklinks {
        padding: 5px 0;
        text-align: center;
    }
    a.quicklink.link1 {
        background: #adb5bd;
    }
    a.quicklink {
        display: inline-block;
        width: 222px;
        height: 133px;
        position: relative;
        margin: 90px 30px;
    }
    a.quicklink .ql_caption {
        display: block;
        height: 100%;
        width: 100%;
        position: relative;
    }
    .outer {
        display: table;
        position: relative;
        vertical-align: middle;
        text-align: center;
        height: 100%;
        width: 100%;
        border-spacing: 0px;
        padding: 0px;
    }
    .inner {
        display: table-cell;
        position: relative;
        vertical-align: middle;
        text-align: center;
        height: 100%;
        width: 100%;
        border-spacing: 0px;
        padding: 0px;
    }
    a.quicklink .ql_caption h2 {
        margin: 0px;
        padding: 0px;
        text-transform: uppercase;
        line-height: 0.0em;
        color: black;
    }
    a.quicklink.link1 .ql_top {
        border-bottom-color: #adb5bd;
    }
    a.quicklink.link1 .ql_bottom {
        border-top-color: #adb5bd;
    }


    .ql_top {
        bottom: 133px;
        border-bottom: 69px solid #ccc;
    }
    .ql_bottom {
        top: 133px;
        border-top: 69px solid #ccc;
    }
    .ql_top, .ql_bottom {
        position: absolute;
        left: 0px;
        width: 0px;
        border-left: 111px solid transparent;
        border-right: 111px solid transparent;
    }

    a.quicklink.link2 {
        background: #e4e4e4;
    }
    a.quicklink.link2 .ql_top {
        border-bottom-color: #e4e4e4;
    }
    a.quicklink.link2 .ql_bottom {
        border-top-color: #e4e4e4;
    }


    a.quicklink.link3 .ql_top {
        border-bottom-color: #adb5bd;
    }
    a.quicklink.link3 .ql_bottom {
        border-top-color: #adb5bd;
    }
    a.quicklink.link3 {
        background: #adb5bd;
    }
    a.quicklink {
        font-size: 30px;
        font-weight: 800;
        text-decoration:none;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <div class="container-fluid home-content1">
            <div id="home_quicklinks">
                <a class="quicklink link1" href="#">
                    <span class="ql_caption">
                        <span class="outer">
                            <span class="inner">
                                <h2>Inscription</h2>
                            </span>
                        </span>
                    </span>
                    <span class="ql_top"></span>
                    <span class="ql_bottom"></span>
                </a>
                <a class="quicklink link2" href="#">
                    <span class="ql_caption">
                        <span class="outer">
                            <span class="inner">
                                <h2>Event</h2>
                            </span>
                        </span>
                    </span>
                    <span class="ql_top"></span>
                    <span class="ql_bottom"></span>
                </a>
                <a class="quicklink link3" href="#">
                    <span class="ql_caption">
                        <span class="outer">
                            <span class="inner">
                                <h2>Gallery </h2>
                            </span>
                        </span>
                    </span>
                    <span class="ql_top"></span>
                    <span class="ql_bottom"></span>
                </a>
            </div>
            <div class="row">
                <div class="col-md-6 content1-left">
                    <h3>Gestion d'Ecole</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quia amet, doloremque sapiente unde explicabo eius provident fuga ab illo, ipsum impedit reprehenderit vitae maiores eos, beatae quod recusandae dolorum.</p>
                    <!-- <div class="content1-left"></div> -->
                </div>
                <div class="col-md-6 content1-right">
                    <p> Magna officia magna culpa sit laborum pariatur dolore nulla et nulla cillum. Commodo et nulla enim consectetur minim ad ullamco officia in id officia cillum. Ex anim pariatur velit veniam esse nostrud. Velit excepteur aliquip occaecat enim aliquip labore officia. </p>
                </div>
            </div>
        </div>
        <div class="container-fluid home-content2">
            <p><span>Malick Coly</span> je suis <span>Etudiant en Mathematiques Appliques</span> et <span>Developpeur Web et Mobile</span>, including new <span>releases</span> and <span>Bootstrap Themes</span>.</p>
        </div>
    </x-slot>

</x-app-layout>
