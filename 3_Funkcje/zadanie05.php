<?php

$data = [
    [3,2,1],
    [1,2,2],
    [3,1,2],
    [3,3,0],
    [0,0,-1],
];

function translateInput($word)
{
    switch($word){
        case "papier":
            return 1;
        case "nożyce":
            return 2;
        case "kamień";
            return 3;
        default:
            return 0;
    }
}

function translateOutput($code)
{
    switch($code)
    {
        case -1:
            return "Nieprawidłowe dane";
        case 0:
            return "Remis";
        default:
            return "Gracz " . $code . " wygrał";
    }
}

function play($one,$two)
{
    if ($one * $two == 0)           { return -1; }
    if ($one > $two && $two != 1)   { return 1;  }
    elseif ($one == $two)           { return 0;  }
    else                            { return 2;  }
}

function rockPaperScissors($player1,$player2)
{
    $one = translateInput($player1);
    $two = translateInput($player2);
    return translateOutput(play($one,$two));
}

echo "-----------------------------\n";
echo "| 1 | 2 | exp | res | agree |\n";
echo "-----------------------------\n";
foreach($data as $values) {
    $res = play($values[0],$values[1]);
    echo sprintf("| %1d | %1d | %3d | %3d | %5s |\n",
        $values[0],
        $values[1],
        $values[2],
        $res,
        ($res==$values[2])?"true":"false"
    );
}
echo "-----------------------------\n";

//-----------------------------
//| 1 | 2 | exp | res | agree |
//-----------------------------
//| 3 | 2 |   1 |   1 |  true | // kamień vs nożyce
//| 1 | 2 |   2 |   2 |  true | // papier vs nożyce
//| 3 | 1 |   2 |   2 |  true | // kamień vs papier
//| 3 | 3 |   0 |   0 |  true | // kamień vs kamień
//| 0 | 0 |  -1 |  -1 |  true | // błędne vs błędne
//-----------------------------
