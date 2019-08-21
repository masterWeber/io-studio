const getParent = (element, parentClassName) => {
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
};

//Process width Scrollbar
{

  const getScrollbarWidth = () => {
    const div = document.createElement('div');

    div.style.overflowY = 'scroll';
    div.style.width = '50px';
    div.style.height = '50px';
    div.style.visibility = 'hidden';

    document.body.appendChild(div);
    const scrollWidth = div.offsetWidth - div.clientWidth;
    document.body.removeChild(div);

    return scrollWidth;
  };

  const setScrollbarWidth = () => {
    const scrollWidth = getScrollbarWidth();
    const root = document.querySelector(':root');
    root.style.setProperty('--scrollbar-width', scrollWidth + 'px');
  };

  window.addEventListener('resize', function() {
    setScrollbarWidth();
  });

  setScrollbarWidth();
}

//Dialogs
{

  const mdClose = event => {
    const target = event.target;
    const modalDialog = getParent(target, 'md');
    modalDialog.classList.remove('open');
  };

  const mdOpen = event => {
    let target = event.target;
    if (!target.classList.contains('md-trigger')) {
      target = getParent(target, 'md-trigger');
    }
    const modalDialogId = target.getAttribute('data-modal');
    const modalDialog = document.querySelector('#' + modalDialogId);
    modalDialog.classList.add('open');
  };

  const closeButtons = document.querySelectorAll('.md-close');
  for (let i = 0; i < closeButtons.length; i++) {
    closeButtons[i].addEventListener('click', mdClose);
  }

  const triggers = document.querySelectorAll('.md-trigger');
  for (let i = 0; i < triggers.length; i++) {
    triggers[i].addEventListener('click', mdOpen);
  }

  window.addEventListener('keyup', function(event) {
    const ESC = 27;
    const openDialog = document.querySelector('.md.open');
    if (event.keyCode === ESC && openDialog) {
      openDialog.classList.remove('open');
    }
  });

}