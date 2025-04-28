document.addEventListener('DOMContentLoaded', function() {
  const draggables = document.querySelectorAll('.draggable');
  const tableArea = document.querySelector('.table-area');

  draggables.forEach(draggable => {
    draggable.addEventListener('mousedown', function(e) {
      e.preventDefault();

      let shiftX = e.clientX - draggable.getBoundingClientRect().left;
      let shiftY = e.clientY - draggable.getBoundingClientRect().top;

      draggable.style.position = 'absolute';
      draggable.style.zIndex = 1000;
      tableArea.appendChild(draggable); // <<< richtig auf tableArea!

      moveAt(e.pageX, e.pageY);

      function moveAt(pageX, pageY) {
        draggable.style.left = pageX - tableArea.getBoundingClientRect().left - shiftX + 'px';
        draggable.style.top = pageY - tableArea.getBoundingClientRect().top - shiftY + 'px';
      }

      function onMouseMove(event) {
        moveAt(event.pageX, event.pageY);
      }

      document.addEventListener('mousemove', onMouseMove);

      draggable.addEventListener('mouseup', function() {
        document.removeEventListener('mousemove', onMouseMove);
        draggable.onmouseup = null;
      });
    });

    draggable.ondragstart = function() {
      return false;
    };
  });
});