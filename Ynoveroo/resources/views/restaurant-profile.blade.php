<form action="/restaurant/profil-update" method="post" enctype="multipart/form-data" class="needs-validation my-5">
    {{ csrf_field() }}
    <div class="row g-3">
        <div class="col-sm-6">
            <label for="name" class="form-label">Nom</label>
            <p class="form-control my-0" id="name">{{$user->name}}</p>
            <div class="invalid-feedback">
                Valid name is required.
            </div>
        </div>
        <div class="col-sm-6">
            <div class="text-center">

                <img src="{{ '/storage'.$user->restaurantProfile->getImagePath($user->restaurantProfile->image_id) }}" alt="">

            </div>
        </div>
        <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{$user->email}}" required>
            <div class="invalid-feedback">
                Please enter a valid email address.
            </div>
        </div>

        <div class="col-12">
            <label for="address" class="form-label">Adresse</label>
            <input type="text" name="address" class="form-control" id="address"
                   value="{{$user->restaurantProfile->address}}" required>
            <div class="invalid-feedback">
                Please enter your address.
            </div>
        </div>

        <div class="col-sm-6">
            <label for="logo" class="form-label">Logo</label>
            <input type="file" name="logo" class="form-control" id="logo" accept=".jpg,.jpeg,.png">
        </div>

    </div>

    <hr class="my-4">

    <button class="w-100 btn btn-primary btn-lg" type="submit">Mettre à jour le profil</button>
</form>
