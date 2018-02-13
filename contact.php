<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: mySimpleColors';
    $to = 'us.julija@gmail.com';
    $subject = 'Hello';
    $human = $_POST['human'];

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        if ($name != '' && $email != '') {
            if ($human == '4') {
                if (mail ($to, $subject, $body, $from)) {
    	        echo '<p class="itallic contact-sent-message">Your message has been sent!</p>';
    	    } else {
    	        echo '<p class="itallic contact-sent-message">Something went wrong, go back and try again!</p>';
    	    }
    	} else if ($_POST['submit'] && $human != '4') {
    	    echo '<p class="itallic contact-sent-message">You answered the anti-spam question incorrectly!</p>';
    	}
        } else {
            echo '<p class="itallic contact-sent-message">You need to fill in all required fields!!</p>';
        }
    }
?>
