
<?php $form = '
<form role="search" method="get" id="searchform" class="searchform" action="' . esc_url( home_url( '/' ) ) . '">
    <input type="text" name="s" id="s"  value="" class="searchform__inputText" />
    <input type="submit" id="searchsubmit" class="searchform__submitButton" value="search" />
</form>';
echo $form;