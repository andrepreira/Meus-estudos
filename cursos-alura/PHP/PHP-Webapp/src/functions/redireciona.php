<?php

function redireciona(string $url): void
{
    //retireciona com GET => pattern POST Redirect GET
    header("Location: $url");
    die();

}
