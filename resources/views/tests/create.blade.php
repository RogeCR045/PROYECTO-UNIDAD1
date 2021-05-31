<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">

<h1>Formulario</h1>

<form action="{{ route('test.store') }}" method="post">
    
    @csrf

    <div class="mb-3 row">

        <label class="col-sm-2 text-end" for="">Titulo:</label>
        <div class="col-10">
        <input class="form-control" type="text" name="title" id="" required>
    </div>
    </div>
    <div class="mb-3 row">

        <label class="col-sm-2 text-end" for="">Director:</label>
        <div class="col-10">
        <input class="form-control" type="text" name="director" id="" required>
        </div>
    </div>

        <div class="mb-3 row">

            <label class="col-sm-2 text-end" for="">Fecha de estreno:</label>
            <div class="col-10">
            <input class="form-control" type="date" name="date" id="" required>   
            </div>
        </div>

            <div class="mb-3 row">

                <label class="col-sm-2 text-end" for="">Sinopsis:</label>
                <div class="col-10">
                <textarea class="form-control" required name="synopsis" id="" cols="30" rows="5"></textarea>
                </div>    
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-primary text-left" type="submit" value="Guardar">
            </div>

</form>
</div>