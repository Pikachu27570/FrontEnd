function addTime(time1, time2) {
    // Convertir les temps en secondes
    var seconds1 = timeToSeconds(time1);
    var seconds2 = timeToSeconds(time2);
  
    // Additionner les secondes
    var totalSeconds = seconds1 + seconds2;
  
    // Convertir le total en format HH:MM:SS
    var result = secondsToTime(totalSeconds);
  
    // Afficher le résultat
    console.log(result);
  }
  
  function timeToSeconds(time) {
    var parts = time.split(':');
    var hours = parseInt(parts[0], 10);
    var minutes = parseInt(parts[1], 10);
    var seconds = parseInt(parts[2], 10);
  
    // Convertir en secondes
    var totalSeconds = hours * 3600 + minutes * 60 + seconds;
    return totalSeconds;
  }
  
  function secondsToTime(seconds) {
    var hours = Math.floor(seconds / 3600);
    var minutes = Math.floor((seconds % 3600) / 60);
    var seconds = seconds % 60;
  
    // Formater le temps
    var result = pad(hours) + ':' + pad(minutes) + ':' + pad(seconds);
    return result;
  }
  
  function pad(value) {
    // Ajouter un zéro devant si nécessaire
    return value < 10 ? '0' + value : value;
  }
  
  // Exemple d'utilisation
  var time1 = '14:29:00';
  var time2 = '00:45:30';
  addTime(time1, time2);
  