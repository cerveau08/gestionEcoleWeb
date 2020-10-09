<div class="container register-form top-buffer-1" *ngIf="!afficherContrat">
	<div class="form">
		<div class="note">
			<p>Creation D'un Compte Partenaire</p>
		</div>
		<div class="form-content bk">
			<form [formGroup]="registreCompte">
            <ngx-loading [show]="loading" [config]="{ backdropBorderRadius: '14px' }"></ngx-loading>
			    <fieldset class="scheduler-border">
					<legend class="scheduler-border">Les Information du Partenaire</legend>
					<div class="row" formGroupName="partenaire">
                <div class="col-sm-3">
					<label for="ninea">Ninea</label>
					<input type="ninea" [(ngModel)]="ninea" class="form-control" formControlName="ninea" id="ninea" placeholder="Ninea" name="ninea" >
				</div>
				<div class="col-sm-3">
					<label for="nomComplet">Nom Complet</label>
					<input type="nomComplet" class="form-control" [value]="nomComplet" formControlName="nomComplet" id="nomComplet" placeholder="Nom Complet" name="nomComplet">
				</div>
                <div class="col-sm-3">
					<label for="rc">Registre De Commerce</label>
					<input type="rc" class="form-control" id="rc" [value]="registreCommercial" formControlName="registreCommercial" placeholder="Registre De Commerce" name="rc">
							</div>
							<div class="col-sm-3">
							  <label for="telephone">Telephone</label>
							  <input type="telephone" class="form-control" [value]="telephone" formControlName="telephone" id="telephone" placeholder="telephone">
              </div>
              <div class="col-sm-3">
							  <label for="adresse">Adresse</label>
							  <input type="text" class="form-control" [value]="adresse" formControlName="adresse" id="adresse" placeholder="adresse">
              </div>
              <fieldset class="scheduler-border">
              <legend class="scheduler-border">Donnees Utilisateur</legend>
              <div class="row" formGroupName="userComptePartenaire">
                <div class="col-sm-3">
                  <label for="cname">Email</label>
                  <input type="text" class="form-control" [value]="email" formControlName="email" id="title" placeholder="email" name="email">
                </div>
                <div class="col-sm-3">
                  <label for="uname">Username</label>
                  <input type="text" class="form-control" [value]="username" formControlName="username" id="usermane" placeholder="username" name="uname">
                </div>
                <div class="col-sm-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" [value]="password" formControlName="password" id="password" placeholder="password" name="pasword">
                </div>
              </div>
            </fieldset>
            </div>

					</fieldset>
					<!-- Educational Qualification -->
					<!--Educational Qualification -->

					<!-- Test Prep -->
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Faire Depot</legend>
						<div class="row" formGroupName="depot">
							<div class="col-sm-3">
							  <label for="place">Montant</label>
							  <input type="number" class="form-control" formControlName="montant" id="fmane" placeholder="Montant" name="place">
							</div>
						</div>
					</fieldset>
					<!-- Study Abroad Plans -->
					<button type="submit" class="btn btn-primary" (click)="create()">Creer Compte Partenaire</button>
				</form>
			</div>
		  </div>
    </div>
