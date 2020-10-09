<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>

    .home-main{
        background: #5812c5;
        color:#fff;
        padding: 8%;
        text-align: center;
    }
    .blinker{
        animation: blinker 1.5s linear infinite;
    }
    @keyframes blinker {
      30% {
        opacity: 0;
      }
    }
    .home-main button{
        background: #fff;
        color: #5812c5;
        border-radius: 0;
        font-weight: 700;
        width: 16%;
        height: 50px;
        top: 4%;
        margin-top: 3%;
    }
    .home-main button:hover{
        transition: 1s ease;
        color:#5812c5;
        width: 19%;
    }
    .content1-left{
        padding:9%;
    }
    .content1-right{
        padding:9%;
        background:#e4e4e4;
    }
    .home-content2{
        background: #adb5bd;
        padding: 1.4%;
        text-align: center;
    }
    .home-content2 p{
        font-size: 18px;
        line-height: 50px;
    }
    .home-content2 p span{
        font-weight: 500;
    }

    #home_quicklinks {
        padding: 20px 0;
        text-align: center;
    }
    a.quicklink.link1 {
        background: #fc6719;
    }
    a.quicklink {
        display: inline-block;
        width: 302px;
        height: 173px;
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
        line-height: 1.46em;
        color: #fff;
    }
    a.quicklink.link1 .ql_top {
        border-bottom-color: #fc6719;
    }
    a.quicklink.link1 .ql_bottom {
        border-top-color: #fc6719;
    }


    .ql_top {
        bottom: 173px;
        border-bottom: 89px solid #ccc;
    }
    .ql_bottom {
        top: 173px;
        border-top: 89px solid #ccc;
    }
    .ql_top, .ql_bottom {
        position: absolute;
        left: 0px;
        width: 0px;
        border-left: 151px solid transparent;
        border-right: 151px solid transparent;
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
                                <h2>Member</h2>
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
