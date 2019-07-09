function getParent (element, parentClassName) {
  'use strict';
  let parent = element.parentElement;

  while (!parent.classList.contains(parentClassName)) {
    parent = parent.parentElement;
    if (!parent) {
      return false;
    }
  }

  if (!parent.classList.contains(parentClassName)) {
    return false;
  }

  return parent;
}

{

  function mdClose(event) {
    var target = event.target;
    var modalDialog = getParent(target, 'md');
    modalDialog.classList.remove('open');
  }

  function mdOpen(event) {
    var target = event.target;
    if (!target.classList.contains('md-trigger')) {
      target = getParent(target, 'md-trigger');
    }
    var modalDialogId = target.getAttribute('data-modal');
    var modalDialog = document.querySelector('#' + modalDialogId);
    modalDialog.classList.add('open');
  }

  var closeButtons = document.querySelectorAll('.md-close');
  for (var i = 0; i < closeButtons.length; i++) {
    closeButtons[i].addEventListener('click', mdClose);
  }

  var triggers = document.querySelectorAll('.md-trigger');
  for (var i = 0; i < triggers.length; i++) {
    triggers[i].addEventListener('click', mdOpen);
  }

  window.addEventListener('keyup', function (event) {
    var ESC = 27;
    var openDialog = document.querySelector('.md.open');
    if (event.keyCode === ESC && openDialog) {
      openDialog.classList.remove('open');
    }
  });


}