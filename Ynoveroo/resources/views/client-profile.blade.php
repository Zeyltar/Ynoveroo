<form action="/clientProfileUpdate" method="post" class="needs-validation my-5">
    {{ csrf_field() }}
    <div class="row g-3">
        <div class="col-sm-6">
            <label for="name" class="form-label">Nom</label>
            <p class="form-control my-0" id="name" >{{$user->name}}</p>
            <div class="invalid-feedback">
                Valid name is required.
            </div>
        </div>

        <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{$user->email}}" required>
            <div class="invalid-feedback">
                Please enter a valid email address.
            </div>
        </div>

        <div class="col-sm-6">
            <label for="birthday" class="form-label">Date de naissance</label>
            <input type="date" name="birthday" class="form-control" id="birthday"
                   value="{{$user->clientProfile->birthday}}" required>
        </div>

        <div class="col-sm-6">
            <label for="currency" class="form-label">Solde</label>
            <p class="form-control my-0" id="currency">{{$user->clientProfile->currency}}€</p>
        </div>

        <div class="col-12">
            <label for="address" class="form-label">Adresse</label>
            <input type="text" name="address" class="form-control" id="address"
                   value="{{$user->clientProfile->address}}" required>
            <div class="invalid-feedback">
                Please enter your address.
            </div>
        </div>

    </div>

    <hr class="my-4">

    <button class="w-100 btn btn-primary btn-lg" type="submit">Mettre à jour le profil</button>
</form>
