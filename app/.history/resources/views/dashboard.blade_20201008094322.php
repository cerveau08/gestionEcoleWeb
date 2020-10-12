<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    .content1-left{
        padding:3%;
    }
    .content1-right{
        padding:3%;
        background:#e4e4e4;
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
        background: #3d8907;
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
        border-bottom-color: #13b3d6;
    }
    a.quicklink.link1 .ql_bottom {
        border-top-color: #13b3d6;
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
        background: #fcf4e7;
    }
    a.quicklink.link2 .ql_top {
        border-bottom-color: #fcf4e7;
    }
    a.quicklink.link2 .ql_bottom {
        border-top-color: #fcf4e7;
    }


    a.quicklink.link3 .ql_top {
        border-bottom-color: #bcbdc0;
    }
    a.quicklink.link3 .ql_bottom {
        border-top-color: #bcbdc0;
    }
    a.quicklink.link3 {
        background: #bcbdc0;
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
                    <h3>Why to use Bootstrap <span class="blinker">?</span></h3>
                    <p>Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.</p>
                    <!-- <div class="content1-left"></div> -->
                </div>
                <div class="col-md-6 content1-right">
                    <p>Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid home-content2">
            <p><span>News</span> and <span>announcements</span> for all things <span>Bootstrap</span>, including new <span>releases</span> and <span>Bootstrap Themes</span>.</p>
        </div>
    </x-slot>

</x-app-layout>
