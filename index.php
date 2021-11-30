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
$headerLinks = ["Introduzione", "Norme sulla privacy", "Termini di Servizio", "Tecnologie", "Domande Frequenti"];
$dataBase = [
    "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?" =>
    [
        "paraghaps" => [
            "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
            "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",
            "Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",
        ],
    ],
    "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?" =>
    [
        "paragraphs" => [
            "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",
            "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",

        ]
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Google Faqs</title>
</head>

<body>
    <header class="ps-4">
        <div class=" d-flex align-items-center">
            <img src="data:image/png;base64,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" alt="" style="width:100px">
            <h3 class="text-grey ps-3">Privacy e Termini</h3>
        </div>
        <div class="d-flex text-grey">
            <?php
            foreach ($headerLinks as $link) {
                echo "<h2 class='links p-2'>$link</h2>";
            }
            ?>
        </div>
    </header>
    <main>

        <div class="container w-75">
            <?php
            foreach ($dataBase as $chiavi => $valore) {
                echo "<h3>$chiavi</h3>";
                foreach ($valore as $paragrafi) {
                    foreach ($paragrafi as $testo) {
                        echo "<p>$testo</p>";
                    }
                }
            };
            ?>

        </div>
    </main>

</body>

</html>