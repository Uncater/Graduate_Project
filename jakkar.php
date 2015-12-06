<?php

    if(isset($_POST['optionsRadios'])){
        switch ($_POST['optionsRadios'])
        {
            case 'option_url': echo "URL"; break;
            case 'option_H1' : echo "H1"; break;
        }

    }
else echo "select value!";
