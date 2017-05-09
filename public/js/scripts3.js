            /**
     * Push right instantiation and action.
     */
    var pushRight = new Menu({
      wrapper: '#o-wrapper',
      type: 'push-right',
      menuOpenerClass: '.c-button',
      maskId: '#c-mask'
    });

    var pushRightBtn = document.querySelector('#c-button--push-right');
    
    pushRightBtn.addEventListener('click', function(e) {
      e.preventDefault;
      pushRight.open();
    });