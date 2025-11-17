<?php
// Song Information
$title = "Crazy For You";
$artist = "Madonna";
$mood = "Love and Great Energy";

//Demo for Tye Juggling (String Counts)
$verseCount = "1"; 
$chorusCount = "1"; 

//Array for Verses
$verses = ["Swaying room as the music starts
    Strangers making the most of the dark
    Two by two, their bodies become one
    I see you through the smokey air
    Can't you feel the weight of my stare?
    You're so close but still a world away
    What I'm dying to say, is that",
    
    "Trying hard to control my heart
    I walk over to where you are
    Eye to eye, we need no words at all
    Slowly now we begin to move
    Every breath I'm deeper into you
    Soon we two are standing still in time
    If you read my mind, you'll see"
];

//Array for Choruses
$choruses = ["I'm crazy for you
    Touch me once and you'll know it's true
    I never wanted anyone like this
    It's all brand new
    You'll feel it in my kiss
    I'm crazy for you
    Crazy for you",

    "I'm crazy for you
    Touch me once and you'll know it's true
    I never wanted anyone like this
    It's all brand new
    You'll feel it in my kiss
    You'll feel it in my kiss
    Because I'm crazy for you
    Touch me once and you'll know it's true
    I never wanted anyone like this
    It's all brand new
    You'll feel it in my kiss
    I'm crazy for you"
];

//Array for Nouns
$nouns = ["room", "music", "strangers", "dark", "bodies", "air", "weight",
"stare", "world", "touch", "kiss", "heart", "words", "breach", "time", "mind", "baby"];

//Array for Verbs
$verbs = ["swaying", "starts", "making", "become", "see", "feel", "stare",
"dying", "say", "touch", "know", "wanted", "feel", "trying", "control", "walk",
"begin", "move", "standing", "read", "see", "know"];

//Type Juggling Demo: String + boolean or int
$totalChorus = $chorusCount + 1; //"1" + 1, automatically converts string 1 to int
$totalVerse = $verseCount + true; //"1" + true, converts string 1 to in and true is equal to 1

//Concatenation Operator
$header = $title . " - " . $artist;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $header; ?></title>
    <style>
        body {
            font-family: "Helvetica Neue";
            background: #fff;
            color: #222;
            margin: 40px auto;
            max-width: 500px;
            line-height: 1.6;
            padding: 0 20px;
        }
        h1 {
            font-size: 1.8em;
            margin-bottom: 0.2em;
            color: #111;
        }
        h1 small {
            font-size: 0.5em;
        }
        h2 {
            margin-top: 1.5em;
            font-size: 1.4em;
            border-bottom: 1px solid #ddd;
            padding-bottom: 0.3em;
        }
        .verse, .chorus {
            margin: 1em 0;
            padding: 0.8em;
            border-left: 3px solid #ccc;
            background: #f7f7f7;
        }
        .highlight {
            color: #b22222;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1><?php echo $title; ?> <small>by <?php echo $artist; ?></small></h1>
    <p>Mood: <?php echo $mood; ?></p>

    <!-- Display Verse number and the coreesponding verse -->
    <div class="verse">Verse 1:<br><?php echo nl2br($verses[0]); ?></div>
    <div class="verse">Verse 2:<br><?php echo nl2br($verses[1]); ?></div>

    <!-- Display Chorus number and the coressponding chorus -->
    <div class="chorus">Chorus 1:<br><?php echo nl2br($choruses[0]); ?></div>
    <div class="chorus">Chorus 2:<br><?php echo nl2br($choruses[1]); ?></div>
    <!-- I used nl2br for easier break lines of codes and not many <br> -->

    <!-- This is where the chorus and verses show their count -->
    <p>Total Choruses: <?php echo $totalChorus; ?></p>
    <p>Total Verses: <?php echo $totalVerse; ?></p>
    
    <!-- Displays the Nouns and Verbs found in the song -->
    <h2>Nouns and Verbs</h2>
    <p>Nouns: <span class="highlight"><?php echo implode(", ", $nouns); ?></span></p>
    <p>Verbs: <span class="highlight"><?php echo implode(", ", $verbs); ?></span></p>
    <!-- I used implode for easier conversion of my array to string and the first parameter is the seperator -->

    <!-- REFERENCE FOR nl2br and implode: W3Schools -->
</body>
</html>
