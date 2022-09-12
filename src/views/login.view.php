<div class="row justify-content-center login-container">
    <div class="col-sm-12 col-md-4">
        <div class="msg"></div>
        <form id="login-form" class="form-control bg-dark text-light" action="/login" method="POST">
            <legend>Jelentkezz be!</legend>
            <div class="form-floating mb-3">
                <input type="email" class="form-control bg-dark text-light" name="email" id="email" placeholder="user@example.com" autofocus required>
                <label for="email">Email cím</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control bg-dark text-light" name="passwd" id="passwd" placeholder="Jelszó" required>
                <label for="passwd">Jelszó</label>
            </div>
            <div class="form-floating mb-3">
                <button class="btn btn-outline-success" type="submit" name="submit" id="submit">Bejelentkezés</button>
            </div>
        </form>
    </div>
</div>