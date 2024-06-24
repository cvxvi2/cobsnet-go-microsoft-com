<?php
    include('processing.html');
    echo '<p>Phase 1 -- Check LinkID...</p>';
    if(empty($_GET["LinkId"])) {
        echo '<p>[ERROR] No LinkID got! Try for Round 2...</p>';

        if(empty($_GET["LinkID"])) {
            echo '<p>Round 2 failure.</p>';
            include('error.html');
        } else {
            echo '<p>Round 2 Success, begin redirect.</p>';
            if(is_file('db/'.$_GET["LinkID"].'.txt')) {
                $strbldr = file_get_contents('db/'.$_GET["LinkID"].'.txt');
                include('redir.html');
    
            } else {
                echo '<p>LinkID not in database!</p>';
                include('notarchived.html');
            }
        }

        
    } else {
        echo '<p>LinkID present, verify database...</p>';
        if(is_file('db/'.$_GET["LinkId"].'.txt')) {
            $strbldr = file_get_contents('db/'.$_GET["LinkId"].'.txt');
            include('redir.html');

        } else {
            echo '<p>LinkId not in database!</p>';
            include('notarchived.html');
        }

    }

?>