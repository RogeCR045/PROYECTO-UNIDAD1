<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<?php

//$z = new ZipArchive();
    //if(true === ($z->open('./foo.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE))){
        //$z->setArchiveComment('Interesting!');
        //$z->addFromString('domain.txt', 'wuxiancheng.cn');
        //$folder = './test';
        //!is_dir($folder) && mkdir($folder); // Create an folder for testing
        //if(true === $z->addFile($folder)){
            //echo 'success'; // !!!
        //}
        //rmdir($folder);
        //$z->close();
    //}
    ?>

    <form action="#" method="post">
    <div>
        <label for="">Seleccione los archivos:</label>
        <input type="file" name="[files]" id="">
    </div>
        <input type="submit" value="Subir archivos">
    </form>