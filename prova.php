<?php
$dataBase =
    [
        [
            "titolo" => "Titolo 1",
            "paragrafi" =>
            [
                "primo paragrafo",
                "secondo paragrafo",
            ],
        ],
        [
            "titolo" => "Titolo 1",
            "paragrafi" =>
            [
                "primo paragrafo",
                "secondo paragrafo",
            ],
        ],
    ];
foreach ($dataBase as $key) {
    var_dump($key);
}
