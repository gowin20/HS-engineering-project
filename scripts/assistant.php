<?php
function apologize($message)
    {
        render("error.php", ["message" => $message]);
    }
 function render($view, $values = [])
    {
        // if view exists, render it
        if (file_exists("C:/Users/gboow/Documents/My Web Sites/EmptySite/views/{$view}"))
        {
            // extract variables into local scope
            extract($values);

            // render view (between header and footer)
            require("C:/Users/gboow/Documents/My Web Sites/EmptySite/views/header.php");
            require("C:/Users/gboow/Documents/My Web Sites/EmptySite/views/{$view}");
            require("C:/Users/gboow/Documents/My Web Sites/EmptySite/views/footer.php");
            exit;
        }

        // else err
        else
        {
            trigger_error("Invalid view: {$view}", E_USER_ERROR);
        }
    }

?>