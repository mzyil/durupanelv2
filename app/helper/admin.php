<?php

function error($msg) {
    echo '<div class="message error box-">' . $msg . '</div>';
}

function warning($msg)
{
    echo '<div class="message warning box-">' . $msg . '</div>';
}

function info($msg)
{
    echo '<div class="message info box-">' . $msg . '</div>';
}

function success($msg)
{
    echo '<div class="message success box-">' . $msg . '</div>';
}
