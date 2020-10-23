var myWords = {
    x: 0,
    y: 0,
    z: 0,
    
    askWords: function(){
    myWords.x = prompt("Please Enter Your Name");
    myWords.y = prompt("Please Enter Your Crush's Name");
    myWords.z = prompt("Please Enter Your Favorite Name");
    myWords.a = prompt("Please Enter Your Precious Object");
    myWords.b = prompt("Please Enter Your Favorite Dance Move");
},
    addWords: function() {
        return myWords.x + " and " + myWords.y + " sitting on the tree<br>K-I-S-S-I-N-G<br>First comes love.<br>Then comes marriage.<br>Then comes baby " + myWords.z + " in the baby carriage,<br>Sucking your " + myWords.a + ",<br>Wetting his pants,<br>Doing the " + myWords.b + " dance!" ;   
    },
    
//    askForTwoNumbers: function(){
//    myNumbers.x = prompt("Type a number?");
//    myNumbers.y = prompt("Type another number?");
//    },
//    
//    addTwoNumbers: function() {
//        return myNumbers.x*1 + myNumbers.y*1;   
//    },
    
};


window.onload = function() {
    
    var link = document.getElementById("add");

    link.onclick = function() {  
        //myNumbers.x = prompt("Type a number?");
        // myNumbers.y = prompt("Type another number?");
        //myNumbers.z = prompt("third number?");
        myWords.askWords();
        var added = myWords.addWords();
        document.getElementById("kiss").innerHTML = added;
    }
    
//    var added2 = document.getElementById("add2");
//    added2.onclick = function(){
//        myNumbers.askForTwoNumbers();
//        var added = myNumbers.addTwoNumbers();
//        document.getElementById("number2").innerHTML = added;
//    }
        
    }
