
        const PlusMinusHandler = (target,plus,minus,options = {}) => {
            // default value
            let value = options.defaultValue;
            // target which show value
            const targetElm = document.getElementById(target);
            // plus button
            const plusElm = document.getElementById(plus);
            // minus button
            const minusElm = document.getElementById(minus);
            // initial click event listener for plus and minus button
            const _initEventListeners = () => {
                plusElm.addEventListener('click', () => _increase());
                minusElm.addEventListener('click',() => _decrease());
            }
            // increase value if can be it.
            const _increase = () => {
                if(value >= options.maxValue) {
                    return;
                }
                value++;
                _setValue();
            }
            // decrease value if can be it.
            const _decrease = () => {
                if(value <= options.minValue) {
                    return;
                }
                value--;
                _setValue();
            }
            // setValue to input
            const _setValue = () => {
                targetElm.value = value;
            }

            return {
                 init: () => {
                     _initEventListeners();
                 }
            }

        }


        PlusMinusHandler('target','plus','minus',  {
            defaultValue:1,
            minValue: 1,
            maxValue: 10,
        }).init()



  const PlusMinusHandler1 = (targetchild,pluschild,minuschild,options = {}) => {
      // default value
      let value = options.defaultValue;
      // target which show value
      const targetElm = document.getElementById(targetchild);
      // plus button
      const plusElm = document.getElementById(pluschild);
      // minus button
      const minusElm = document.getElementById(minuschild);
      // initial click event listener for plus and minus button
      const _initEventListeners = () => {
          plusElm.addEventListener('click', () => _increase());
          minusElm.addEventListener('click',() => _decrease());
      }
      // increase value if can be it.
      const _increase = () => {
          if(value >= options.maxValue) {
              return;
          }
          value++;
          _setValue();
      }
      // decrease value if can be it.
      const _decrease = () => {
          if(value <= options.minValue) {
              return;
          }
          value--;
          _setValue();
      }
      // setValue to input
      const _setValue = () => {
          targetElm.value = value;
      }

      return {
           init: () => {
               _initEventListeners();
           }
      }

  }

  PlusMinusHandler1('targetchild','pluschild','minuschild',  {
      defaultValue:0,
      minValue: 0,
      maxValue: 10,
  }).init()

