'use strict';

const isVisible = target => {
  'use strict';
  const targetPosition = {
    top: window.pageYOffset + target.getBoundingClientRect().top,
    left: window.pageXOffset + target.getBoundingClientRect().left,
    right: window.pageXOffset + target.getBoundingClientRect().right,
    bottom: window.pageYOffset + target.getBoundingClientRect().bottom,
  };

  const windowPosition = {
    top: window.pageYOffset,
    left: window.pageXOffset,
    right: window.pageXOffset + document.documentElement.clientWidth,
    bottom: window.pageYOffset + document.documentElement.clientHeight,
  };

  return targetPosition.bottom > windowPosition.top &&
      targetPosition.top < windowPosition.bottom &&
      targetPosition.right > windowPosition.left &&
      targetPosition.left < windowPosition.right;
};

const numberWithSpaces = x => {
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
  const ESC = 27;

  const mdClose = event => {
    const target = event.currentTarget;
    const modalDialog = target.closest('.md');
    modalDialog.classList.remove('md_open');
  };

  const mdOpen = event => {
    let target = event.currentTarget;
    const modalDialogId = target.getAttribute('data-modal');
    const modalDialog = document.querySelector('#' + modalDialogId);
    modalDialog.classList.add('md_open');
  };

  const closeButtons = document.querySelectorAll('.md__close-btn');
  for (let i = 0; i < closeButtons.length; i++) {
    closeButtons[i].addEventListener('click', mdClose);
  }

  const triggers = document.querySelectorAll('.md-trigger');
  for (let i = 0; i < triggers.length; i++) {
    triggers[i].addEventListener('click', mdOpen);
  }

  window.addEventListener('keyup', function(event) {
    const openDialog = document.querySelector('.md_open');
    if (event.keyCode === ESC && openDialog) {
      openDialog.classList.remove('md_open');
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

  upDownElem.addEventListener('click', event => {
    const target = event.currentTarget;
    const pageY = window.pageYOffset || document.documentElement.scrollTop;
    if (target.className === 'button-scroll-to up') {
      target.classList.remove('up');
      pageYLabel = pageY;
      try {
        $('html').animate({scrollTop: 0}, 1000);
      }
      catch (e) {
        window.scrollTo(0, 0);
      }
    }
  });

}

// Cards
{

  const hide = element => element.classList.add('hidden');
  const show = element => element.classList.remove('hidden');

  const isShow = element => !element.classList.contains('hidden');

  const animateCard = cardElement => {
    const header = cardElement.querySelector('.card__header');
    show(header);
    const background = cardElement.querySelector('.card__background');
    show(background);
    const footer = cardElement.querySelector('.card__footer');
    show(footer);
  };

  const cards = document.querySelectorAll('.card');
  cards.forEach(card => {
    const header = card.querySelector('.card__header');
    hide(header);
    const background = card.querySelector('.card__background');
    hide(background);
    const footer = card.querySelector('.card__footer');
    hide(footer);
  });

  const scrollHandler = () => {
    if (cards.length < 1) {
      return false;
    }
    cards.forEach(card => {
      if (isVisible(card)) {
        setTimeout(() => {
          animateCard(card);
        }, 500);
      }
    });

    const lastCard = cards[cards.length - 1];
    const lastCardFooter = lastCard.querySelector('.card__footer');

    const firstCard = cards[0];
    const firstCardFooter = firstCard.querySelector('.card__footer');

    if (isShow(lastCardFooter) && isShow(firstCardFooter)) {
      window.removeEventListener('scroll', scrollHandler);
    }
  };

  window.addEventListener('scroll', scrollHandler);
}

//Active background
{
  let pageOffset;
  let offsetVideo;

  const activeBackgroundVideo = document.querySelector('.active-background__video');

  const init = () => {
    pageOffset = pageYOffset;
    if (!activeBackgroundVideo) {
      return false;
    }
    activeBackgroundVideo.style.transform = `translateY(0)`;
    offsetVideo = -activeBackgroundVideo.getBoundingClientRect().top + window.innerHeight / 4;
    activeBackgroundVideo.style.transform = `translateY(${offsetVideo}px)`;
  };

  window.addEventListener('resize', init);

  const scrollHandler = () => {
    if (!activeBackgroundVideo) {
      return false;
    }
    let offset = pageYOffset - pageOffset;
    pageOffset = pageYOffset;

    activeBackgroundVideo.style.transform = `translateY(${offsetVideo + offset}px)`;
    offsetVideo += offset;
  };

  window.addEventListener('scroll', scrollHandler);
  init();
}

//Component logo
{
  const logo = document.querySelector('.component-logo');
  const logoVideo = document.querySelector('.component-logo__video');
  window.addEventListener('scroll', () => {
    if (!logo) {
      return false;
    }

    logo.style.transform = `translateY(${pageYOffset}px)`;

    logoVideo.style.transform = `scale(1.3) translateY(${-pageYOffset / 1.2}px)`;
    if (pageYOffset >= window.innerHeight) {
      logo.style.opacity = '0';
    } else {
      logo.style.opacity = '1';
    }
  });
}