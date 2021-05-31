<link  href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<div class="container">

<h4>Formulario para subir archivos</h4>

<form action="{{ route('files.store') }}" method="post" enctype="multipart/form-data">
    
    @csrf

    <div class="mb-3 row">

        <label class="col-sm-2 col-form-label text-right">Imagen:</label>
        <div class="col-sm-10">
        <input class="form-control" type="file" name="coverPage" id="" accept=".jpg, .png" required>
    </div>
    </div>
    <div class="mb-3 row">

        <label class="col-sm-2 col-form-label text-right">Audio:</label>
        <div class="col-sm-10">
        <input class="form-control" type="file" name="audio_file" id="" accept=".mp3, .wav, .wma, .mid" required>
        </div>
    </div>

        <div class="mb-3 row">

            <label class="col-sm-2 col-form-label text-right" for="">Video:</label>
            <div class="col-sm-10">
            <input class="form-control" type="file" name="video_file" id="" accept=".mp4, .mov, .wmv, .avi" required>   
            </div>
        </div>

            <div class="mb-3 row">

                <label class="col-sm-2 col-form-label text-right" for="">PDF:</label>
                <div class="col-sm-10">
                <input class="form-control" type="file" name="pdf_file" id="" accept=".pdf" required>
                </div>    
            </div>

            <div class="mb-3 row">

                <label class="col-sm-2 col-form-label text-right">Offimática:</label>
                <div class="col-sm-10">
                <input class="form-control" type="file" name="office_file" id="" accept=".docx, .xlsx, .pptx" required>
                </div>
            </div>
            
           
            <input  type="submit" value="Guardar">
            </div>

</form>
</div>