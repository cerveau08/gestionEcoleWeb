
        <style>
            body{
                background-image: url(https://bit.ly/2KhEw1d);
                background-position-x: center;
                background-position-y: center;
                background-size: cover;
                background-attachment: fixed;
                background-origin: initial;
                background-clip: initial;
                background-color: initial;
              }


              fieldset.scheduler-border {
                border: 1px groove #ddd !important;
                padding: 0 1.1em 1.1em 1.1em !important;
                margin: 0 0 1.1em 0 !important;
                -webkit-box-shadow:  0px 0px 0px 0px #000;
                    box-shadow:  0px 0px 0px 0px #000;
              }

                legend.scheduler-border {
                  font-size: 1.2em !important;
                  font-weight: bold !important;
                  text-align: left !important;
                  width:auto;
                  padding:0 1px;
                  border-bottom:none;
                }
              .login-wrapper {
                width: 80%;
                height: 80%;
                position: absolute;
                display: table;
                z-index: 2;
              }
              .note
              {
                text-align: center;
                height: 50px;
                background: -webkit-linear-gradient(left,  #3483AC,  rgb(30, 139, 198));
                color: #fff;
                font-weight: bold;
                line-height: 50px;
              }
              .note p{ font-size:30px; }
              .form-content
              {
                padding: 1%;
                border: 1px solid #ced4da;

              }
              .form-control{
                border-radius:1.5rem;
              }
              .bk{
                background-color: white;
              }
                                .button{
                                    background-color: rgb(134, 226, 188);
                                 }
              @media print {
                body * {
                  visibility: visible;
                  }
                  #section-to-print, #section-to-print * {
                  visibility: hidden;
                  }
                  #section-to-print {
                  position: absolute;
                  left: 0;
                  top: 0;
                  }
                 .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
                  float: left;
                 }
                 .col-sm-12 {
                  width: 90%;
                 }
                 .col-sm-11 {
                  width: 81.66666667%;
                 }
                 .col-sm-10 {
                  width: 83.33333333%;
                 }
                 .col-sm-9 {
                  width: 75%;
                 }
                 .col-sm-8 {
                  width: 66.66666667%;
                 }
                 .col-sm-7 {
                  width: 58.33333333%;
                 }
                 .col-sm-6 {
                  width: 50%;
                 }
                 .col-sm-5 {
                  width: 31.66666667%;
                 }
                 .col-sm-4 {
                  width: 30.33333333%;
                 }
                 .col-sm-3 {
                  width: 20%;
                 }
                 .col-sm-2 {
                  width: 16.66666667%;
                 }
                 .col-sm-1 {
                  width: 8.33333333%;
                 }
              }
        </style>
        <div class="container register-form top-buffer-1">
            <div class="form">
                <div class="note">
                    <p>Ajout d'un Parent</p>
                </div>
                <div class="form-content bk">
                    <form method="post" action="{{ url('register-parent') }}" id="login-form" class="form">
                        @csrf
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Les Informations du Parent</legend>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="firstName">FirstNmea</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="firstName" name="firstName" >
                                </div>
                                <div class="col-sm-3">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="lastNmae" name="lastName">
                                </div>
                                <div class="col-sm-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                </div>
                                <div class="col-sm-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="password">
                                </div>
                                <div class="col-sm-3">
                                    <label for="password">Confirm Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="confirm password">
                                </div>
                                <div class="col-sm-3">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="phone">
                                </div>
                                <div class="col-sm-3">
                                    <label for="adresse">Adresse</label>
                                    <input type="text" class="form-control" id="adresse" placeholder="adresse">
                                </div>
                                <fieldset class="scheduler-border">
                                    <legend class="scheduler-border">Donnees Supplementaire</legend>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="profession">Profession</label>
                                            <input type="text" class="form-control" formControlName="profession" id="profession" placeholder="profession">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-info" value="submit">Creer Compte Parent</button>
                     </form>
                </div>
            </div>
        </div>



