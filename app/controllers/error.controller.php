<?php
class ErrorController extends Controller
{
    function index($message)
    {
        return view(['message' => $message], false);
    }
    function apiNotFound($message): Json
    {
        return new Json(['error' => $message]);
    }
}
