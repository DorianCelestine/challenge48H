<!-- Modifier une image -->

<div class="modal fade" id="editimg" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajouter ou modifier une image</h5>
        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close"><i class="fas fa-times text-white"></i></button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
          <input type="hidden" name="MAX_FILE_SIZE" value="900000" />
          <div>
            <div class="custom-file my-4">
              <input type="file" class="custom-file-input" id="customFile" name="img_url">
              <label class="custom-file-label" for="customFile">Choisir une image</label>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nom/Libellé</label>
                <input type="text" class="form-control" name="name" aria-describedby="name">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Crédits photos (Auteur/Banque d'images)</label>
                <input type="text" class="form-control" name="credits" aria-describedby="text">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Fin des droits</label>
                <input type="date" class="form-control" name="end_date" aria-describedby="date" value>
            </div>
          </div>

          <div class="mb-3">
            <input class="form-control" type="text" name="tags" value>
          </div>

          <label>Image :</label>
          <div class="px-4">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="with_product" name="with_product" value="1">
              <label class="custom-control-label" for="with_product">avec produit(s)</label>
            </div>

            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="with_human" name="with_human" value="1">
              <label class="custom-control-label" for="with_human">avec humain(s)</label>
            </div>

            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="institutional" name="institutional" value="1">
              <label class="custom-control-label" for="institutional">institutionnelle</label>
            </div>

            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="limited" name="limited" value="1">
              <label class="custom-control-label" for="limited">aux droits d'utilisation limités</label>
            </div>
          </div>

          <div class="my-4 text-center">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline1" name="type" class="custom-control-input" value="Logo">
              <label class="custom-control-label" for="customRadioInline1">Logo</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2" name="type" class="custom-control-input" value="Photo Passionfroid">
              <label class="custom-control-label" for="customRadioInline2">Photo Passionfroid</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline3" name="type" class="custom-control-input" value="Photo Fournisseur">
              <label class="custom-control-label" for="customRadioInline3">Photo Fournisseur</label>
            </div>
            
            <input type="hidden" name="id" value="0">
            <input type="hidden" name="_form" value="formEdit">
            <button type="submit" class="btn btn-primary mt-4">Terminer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <!-- Outer Row -->
  <div class="row justify-content-center">

  <div class="col-xl-10 col-lg-12 col-md-9">

  <div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">
      <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
      <div class="col-lg-6">
          <div class="p-5">
              <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Connectez vous</h1>
              </div>
              <form class="user" action="/login" method="post">
                  <div class="form-group">
                      <label for="InputEmail">Email: </label>
                      <input type="email" name="email" class="form-control form-control-user"
                          placeholder="" label="Email" id="InputEmail" aria-describedby="emailHelp">
                      <!-- @if($errors->has('email')) -->
                      <small id="emailHelp" class="form-text text-muted"><!-- {{$errors->first('email')}} --></small>
                      <!-- @endif -->
                  </div>
                  <div class="form-group">
                      <label for="InputPassword">Password: </label>
                      <input type="password" name="password" class="form-control form-control-user"
                          placeholder=""  label="Password" id="InputPassword" aria-describedby="passwordlHelp">
                      <!-- @if($errors->has('password')) -->
                      <small id="passwordlHelp" class="form-text text-muted"><!-- {{$errors->first('password')}} --></small>
                      <!-- @endif -->
                  </div>
                  <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                          <input type="checkbox" class="custom-control-input" id="customCheck">
                          <label class="custom-control-label" for="customCheck">Remember
                              Me</label>
                      </div>
                    </div>
                    <input type="submit" value="Se connecter" class="btn btn-primary btn-user btn-block">
                  </form>
                  <hr>
                  <!-- <div class="text-center">
                      <a class="small" href="{{url('/forgotpassword')}}">Mot de passe oublié?</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>