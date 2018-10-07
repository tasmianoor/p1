 <?php ini_set('display_errors',1);
   $quotes=[
        [
            'author' => 'Henry Thomas Buckle, history scholar',
            'text' => 'Men and women range themselves into three classes or orders of intelligence; 
                you can tell the lowest class by their habit of always talking about persons;
                the next by the fact that their habit is always to converse about things; 
                the highest by their preference for the discussion of ideas.'
        ],
       [
            'author' => 'Admiral Grace Murray Hopper, U.S. Naval officer and an early computer programmer',
            'text' => 'It is easier to ask forgiveness than it is to get permission.'
        ],  
        [
            'author' => 'Rumi, 13th-century Persian poet and theologian',
            'text' => 'Sell your cleverness and buy bewilderment.'
        ],
     [
            'author' => 'Lucille Ball, American actress and producer',
            'text' => 'I am not funny. What I am is brave.'
        ],
         [
            'author' => 'Jackie Joyn, track and field athlete',
            'text' => 'If I stop to kick every barking dog I am not going to get where I’m going.'
        ]
    ]; 

$quoteno = rand (1,3);

 $quotesnow = $quotes[$quoteno-1];

$quoteText = $quote['text'];

$quoteAuthor= $quote['author'];

    ?> 



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
        <title>Tasmia Noor</title>
        <link rel="stylesheet" href="main.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Tasmia Noor</h1>
                <img src="images/photo.png" alt="Picture of Tasmia Noor">

            <h2>About Me</h2>
                <p>I'm a UX/UI Designer driven by curiosity and passion. Having studied behavior psychology and IoT solutions,  I design clean, intuitive designs with the user in mind.</p>
                <p>I have extensive training in Research, QA and Project Management with a Bachelor's degree in Behavioral Neuroscience. In my free time, go to meetups, oil paint or creating homemade shampoos!</p>
        
            <h2>Favorite Quotes</h2>
            <h5>(REFRESH THE PAGE TO SEE A NEW QUOTE)</h5>
            
                <blockquote>
                    <p>&ldquo;<?php echo $quoteText; ?>&rdquo;</p>
                    <span><?php echo $quoteAuthor; ?></span>
                </blockquote>
            
                
        </div>
    </body>
</html>

