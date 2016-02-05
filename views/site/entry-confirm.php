<?php
use yii\helpers\Html;
use app\controllers\SaveController;

?>


<html xmlns="http://www.w3.org/1999/html">
    <head>
        <style id = 'textStyle' type="text/css">
            .fullText {
                font-size: 200%;
                white-space: pre;
            }

            textarea {
                white-space: pre;
            }
        </style>
    </head>

    <body>
    <script src="http://localhost:8080/ckeditor/ckeditor.js")></script>
    <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: '#pukanchik',
            plugins: ['code'],
            forced_root_block : "",
            extended_valid_elements: 'script[type|src]',
            remove_linebreaks : false
        });
    </script>

    <p>You have entered the following information:</p>
    <label>File</label>

    <form action="http://localhost:8080/index.php/save/save" method = post>
        <textarea id = "pukanchik" name="text">

            <?php
            $addr = Html::encode($model->fileName);

            $fullPath = ".\\..\\views\\dashboard\\" . $addr;

            $file = fopen($fullPath, "r");

            while(!feof($file)) {
	            echo htmlentities(fgets($file));
	        }

            fclose($file);
            ?>
        </textarea>

<!--        <script>-->
<!--            CKEDITOR.replace("pukanchik",-->
<!--                {-->
<!--                    enterMode : CKEDITOR.ENTER_BR-->
<!--                }-->
<!--            )-->
<!--        </script>-->

        <input name="fileName" type="hidden" value="<?= $fullPath; ?>" />
<!--        <input name="getDataTest" type="hidden" value= />-->
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </form>


    </body>

    </html>
