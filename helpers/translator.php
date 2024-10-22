<?php

// set available languages
$availableLanguages = ['pt-br', 'en'];

// get language from url
$words = [];
$language = $_GET['lang'];

// get language from cookie
if (!isset($language) && isset($_COOKIE['lang'])) {
    $language = $_COOKIE['lang'];
}

// set default language to cookie
if (isset($language) && in_array($language, $availableLanguages)) {
    setcookie('lang', $language, time() + 60 * 60 * 24 * 30);
}

// read respective language file into /lang folder
foreach ($availableLanguages as $availableLanguage) {
    if ($availableLanguage === $language) {
        $words = require_once 'lang/' . $availableLanguage . '.php';
    }
}

// translate function
function __($key, $replaces = [])
{
    global $words;

    if (isset($words[$key])) {
        $translation = $words[$key];

        foreach ($replaces as $key => $value) {
            $translation = str_replace(':' . $key, $value, $translation);
        }

        return $translation;
    }

    return $key;
}
