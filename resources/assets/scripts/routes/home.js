import anime from 'animejs';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    anime({
      targets: '.anime .persiana',
      scaleX: 0,
      delay: anime.stagger(100, {direction: 'reverse'}, {start: 500}), // increase delay by 100ms for each elements.
    });
  },
};
