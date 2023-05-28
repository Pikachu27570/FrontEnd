var secretCode = generateSecretCode();
var guesses = [];
var currentGuess = [];

function generateSecretCode() {
    var colors = ['red', 'blue', 'green', 'yellow', 'orange', 'purple'];
    var secret = [];
    for (var i = 0; i < 4; i++) {
        var randomIndex = Math.floor(Math.random() * colors.length);
        secret.push(colors[randomIndex]);
    }
    return secret;
}

function selectColor(color) {
    if (currentGuess.length < 4) {
        currentGuess.push(color);
        var colorCircle = document.createElement('div');
        colorCircle.className = 'color-circle';
        colorCircle.style.backgroundColor = color;
        document.getElementById('guesses').appendChild(colorCircle);
    }
}

function submitGuess() {
    if (currentGuess.length === 4) {
        var guessResult = checkGuess(currentGuess);
        guesses.push({ guess: currentGuess, result: guessResult });
        displayGuesses();
        if (guessResult.exact ===

            4) {
            endGame(true);
        } else if (guesses.length === 12) {
            endGame(false);
        } else {
            currentGuess = [];
            var guessContainer = document.getElementById('guesses');
            while (guessContainer.firstChild) {
                guessContainer.removeChild(guessContainer.firstChild);
            }
        }
    }
}

function checkGuess(guess) {
    var exactMatches = 0;
    var colorMatches = 0;
    var secretCodeCopy = secretCode.slice();
    for (var i = 0; i < guess.length; i++) {
        if (guess[i] === secretCode[i]) {
            exactMatches++;
            secretCodeCopy[i] = null;
        }
    }
    for (var i = 0; i < guess.length; i++) {
        var position = secretCodeCopy.indexOf(guess[i]);
        if (position > -1) {
            colorMatches++;
            secretCodeCopy[position] = null;
        }
    }
    return { exact: exactMatches, color: colorMatches };
}

function displayGuesses() {
    var guessContainer = document.getElementById('guesses');
    guessContainer.innerHTML = '';
    for (var i = 0; i < guesses.length; i++) {

  var guess = guesses[i].guess;
      var result = guesses[i].result;
      var guessDiv = document.createElement('div');
      guessDiv.className = 'guess';
      for (var j = 0; j < guess.length; j++) {
        var colorCircle = document.createElement('div');
        colorCircle.className = 'color-circle';
        colorCircle.style.backgroundColor = guess[j];
        guessDiv.appendChild(colorCircle);
      }
      var resultDiv = document.createElement('div');
      resultDiv.innerHTML = 'Exact: ' + result.exact + ', Color: ' + result.color;
      guessDiv.appendChild(resultDiv);
      guessContainer.appendChild(guessDiv);
    }
  }

  function endGame(won) {
    var message = document.createElement('p');
    if (won) {
      message.innerHTML = 'Bravo, vous avez deviné la combinaison secrète !';
    } else {
      message.innerHTML = 'Dommage, vous avez épuisé toutes vos tentatives.';
    }
    document.body.appendChild(message);
    var colorPicker = document.getElementById('color-picker');
    colorPicker.parentNode.removeChild(colorPicker);
    var submitButton = document.getElementsByTagName('button')[0];
    submitButton.parentNode.removeChild(submitButton);
  }
