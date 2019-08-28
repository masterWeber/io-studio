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

const numberWithSpaces = (x) => {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
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

//Separation of numbers into digits
{

  const costElementCollection = document.querySelectorAll('.number-with-spaces');

  for (let i = 0; i < costElementCollection.length; i++) {
    const element = costElementCollection[i];
    const inner = element.innerText;
    element.innerText = numberWithSpaces(inner);
  }

}

/**
 * Up button
 */
{

  const upDownElem = document.querySelector('.button-scroll-to');
  window.addEventListener('scroll', () => {
    const pageY = window.pageYOffset || document.documentElement.scrollTop;
    const innerHeight = document.documentElement.clientHeight;
    switch (upDownElem.className) {
      case 'button-scroll-to':
        if (pageY > innerHeight) {
          upDownElem.classList.add('up');
        }
        break;
      case 'button-scroll-to up':
        if (pageY < innerHeight) {
          upDownElem.classList.remove('up');
        }
        break;
    }
  });

  let pageYLabel = 0;

  upDownElem.addEventListener('click', (event) => {
    const target = event.currentTarget;
    const pageY = window.pageYOffset || document.documentElement.scrollTop;
    if (target.className === 'button-scroll-to up') {
      target.classList.remove('up');
      pageYLabel = pageY;
      try {
        $('html').animate({scrollTop: 0}, 1000);
      } catch (e) {
        window.scrollTo(0, 0);
      }
    }
  });

}