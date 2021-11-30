<?php
// $dates = [
//     '10/01/2020' => [
//         [
//             'title' => 'Post 1',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 1'
//         ],
//         [
//             'title' => 'Post 2',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 2'
//         ],
//     ],
//     '10/02/2019' => [
//         [
//             'title' => 'Post 3',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 3'
//         ]
//     ],
//     '15/05/2019' => [
//         [
//             'title' => 'Post 4',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 4'
//         ],
//         [
//             'title' => 'Post 5',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 5'
//         ],
//         [
//             'title' => 'Post 6',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 6'
//         ]
//     ],
// ];

// foreach ($dates as $date => $posts) {
//     echo "<div>
//             <h4>$date</h4>
//             <ul>
//             ";
//     foreach ($posts as $post) {
//         // var_dump($post);
//         echo "<li>";
//         foreach ($post as $key => $contenuto) {
//             echo "<strong>$key</strong>:$contenuto <br>";
//         };
//         echo "</li>";
//     }
//     echo "</ul>
//     </div>";
// }

$dataBase = [
    "Come state implementando..." => [
        "paraghaps" => [
            "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
            "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",
            "Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",
        ],
    ],
    "Come fa Google..." => [
        "paragraphs" => [
            "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",
            "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",

        ]
    ]
];

foreach ($dataBase as $chiavi => $valore) {
    echo "<h3>$chiavi</h3>";
    foreach ($valore as $paragrafi) {
        foreach ($paragrafi as $testo) {
            echo "<p>$testo</p>";
        }
    }
};
