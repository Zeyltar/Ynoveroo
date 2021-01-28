<form action="/restaurantProfileUpdate" method="post" enctype="multipart/form-data" class="needs-validation my-5">
    {{ csrf_field() }}
    <div class="card bg-black mb-3">
        <div class="card-img-overlay position-relative">
            <img src="{{ $user->restaurantProfile->image_id ? route('image.path', $user->restaurantProfile->image_id) : "" }}" class="card-img-top" alt="">
            <div class="w-50 position-absolute end-0 bottom-0 p-3">
                <input type="file" name="logo" class="form-control" id="logo" accept=".jpg,.jpeg,.png">
            </div>
        </div>

        <div class="card-body">
                <div class="w-50 mb-3">
                    <h5 class="card-title form-label position-relative start-50">Nom</h5>
                    <p class="form-control position-relative start-50 my-0 text-center" id="name">{{$user->name}}</p>
                    <div class="invalid-feedback">
                        Valid name is required.
                    </div>
                </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="email" class="form-label card-text">Email</label>
                    <input type="email" name="email" class="form-control text-center " id="email" value="{{$user->email}}" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>

                <div class="col-12">
                    <label for="address" class="form-label card-text">Adresse</label>
                    <input type="text" name="address" class="form-control text-center" id="address"
                           value="{{$user->restaurantProfile->address}}" required>
                    <div class="invalid-feedback">
                        Please enter your address.
                    </div>
                </div>
            </div>

            <hr class="">
            <button class="btn btn-primary btn-lg" type="submit">Mettre à jour</button>
            <p class="card-text"><small class="text-muted">Dernière mise à jour {{$user->restaurantProfile->updated_at}}</small></p>
        </div>

    </div>
</form>



