(function() {
function clickHandler(event) {
  var elem = document.documentElement;
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.msRequestFullscreen) {
    elem.msRequestFullscreen();
  } else if (elem.mozRequestFullScreen) {
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) {
    elem.webkitRequestFullscreen();
  }
};
document.addEventListener('DOMContentLoaded', function() {
  document.documentElement.allowFullscreen = true;
  var btn = document.createElement('div');
  btn.className = 'btn-fullscreen';
  btn.innerHTML = '<i class="fa fa-expand"></i>';
  btn.addEventListener('click', clickHandler, false);
  var elem = document.body;
  if (elem.requestFullscreen) {
    elem.appendChild(btn);
  } else if (elem.msRequestFullscreen) {
    elem.appendChild(btn);
  } else if (elem.mozRequestFullScreen) {
    elem.appendChild(btn);
  } else if (elem.webkitRequestFullscreen) {
    elem.appendChild(btn);
  }
}, false);
})();
