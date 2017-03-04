

    function doAGuess ( correctAnswer ) {

      var guess = Math.floor(Math.random() * 6);

      if ( correctAnswer == guess ) {

        return true;


      } else {

        return false;

      }

    }

    document.getElementById('guess').onclick = function() {

      var myNumber = document.getElementById('myNumber').value;

      var gotIt = false;

      var numOfGuesses = 1;

      while( gotIt == false ) {

        if( doAGuess( myNumber ) == true ) {

          gotIt = true;
          alert('Got it! It was a ' + myNumber + '. It took ' + numOfGuesses + ' number of guesses.' );

        } else {

          numOfGuesses++;

        }

      }

    }
