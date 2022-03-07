form
<form method="post" action="store">
    {{@csrf_field()}}
    <div class="mb-3 row">
        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input
                    type="text"
                    class="form-control"
                    id="inputName"
                    name="name"/>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input
                    type="password"
                    class="form-control"
                    id="inputPassword"
                   name="password"/>
        </div>
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </div>
</form>