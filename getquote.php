 <?php
    $quotes[
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


  $quotes = $quotes[rand (1,3)];

$quoteText = $quote['text'];

$quoteAuthor= $quote['author'];

    ?> 