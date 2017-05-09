 var clicks = 0; //counts how may picks have been made in each turn
    var firstchoice; //stores index of first card selected
    var secondchoice; //stores index of second card selected

    var match = 0; //counts matches made
    var backcard = "card.jpg"; //shows back of card when turned over

    var faces = []; //array to store card images
    faces[0] = 'card1.png';
    faces[1] = 'card2.png';
    faces[2] = 'card3.png';
    faces[3] = 'card4.png';
    faces[4] = 'image3.png';
    faces[5] = 'image3.png';
    faces[6] = 'card5.png';
    faces[7] = 'card7.png';
    faces[8] = 'card1.png';
    faces[9] = 'card8.png';
    faces[10] = 'card6.png';
    faces[11] = 'card5.png';
    faces[12] = 'card4.png';
    faces[13] = 'card6.png';
    faces[14] = 'card7.png';
    faces[15] = 'card3.png';
    faces[16] = 'card2.png';
    faces[17] = 'card8.png';

    function choose(card) {
            if (clicks == 2) {
                return;
            }
            if (clicks == 0) {
                firstchoice = card;
                document.images[card].src = faces[card];
                clicks = 1;
            } else {
                clicks = 2;
                secondchoice = card;
                document.images[card].src = faces[card];
                timer = setInterval("check()", 1000);
            }
        }
        /* Check to see if a match is made */

    function check() {
        clearInterval(timer); //stop timer
        if (faces[secondchoice] == faces[firstchoice]) {
            match++;
            document.getElementById("matches").innerHTML = match;
        } else {
            document.images[firstchoice].src = backcard;
            document.images[secondchoice].src = backcard;
            clicks = 0;
            return;
        }
    }

    function check() {
    clearInterval(timer); //stop timer
    clicks = 0;
    if (faces[secondchoice] == faces[firstchoice]) {
        match++;
        document.getElementById("matches").innerHTML = match;
    } else {
        document.images[firstchoice].src = backcard;
        document.images[secondchoice].src = backcard;
        return;
    }
} 