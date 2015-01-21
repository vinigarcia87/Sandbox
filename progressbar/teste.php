<?php
	require './Progressbar.php';
     
    echo 'Starting&hellip;<br />';
     
    $p = new ProgressBar();
    echo '<div style="width: 300px;">';
    $p->render();
    echo '</div>';
    for ($i = 0; $i < ($size = 100); $i++) {
            $p->setProgressBarProgress($i*100/$size);
            usleep(1000000*0.1);
    }
    $p->setProgressBarProgress(100);
     
    echo 'Done.<br />';
