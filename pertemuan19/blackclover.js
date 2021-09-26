let search = document.getElementById('search');
let container = document.querySelector('.container-fluid');

search.addEventListener( 'keypress', function() {
  let xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if ( xhr.readyState == 4 && xhr.status == 200 ) {
      container.innerHTML = xhr.responseText;
    }

  return search.value;
  }

  xhr.open('GET', 'ajax/blackclover.php?search=' + search.value, true);
  xhr.send();



















} )