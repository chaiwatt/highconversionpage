function onePageScroll(t) {
    if (!isEmpty(t)) {
        jQuery(t).find('a[href ^= "#"]').on('click', function (e) {
            e.preventDefault();
            var target = this.hash,
                jtarget = jQuery(target);
            if (jtarget.length > 0) {
                try {
                    jQuery('html, body').stop().animate({
                        'scrollTop': (jtarget.offset().top - 150)
                    }, 900, 'swing', function () {
                        if (history.pushState) {
                            history.pushState(null, null, target);
                        } else {
                            location.hash = target;
                        }
                    });
                } catch (e) { }
            } else {
                if (target != "#" && target.length > 2 && jQuery(this).closest("nav").length) document.location = window.location.protocol + "//" + window.location.host;
            }
        });
    }
}

onePageScroll($(".smoothScroll"));

// function scrollBy(element, value, duration, easingFunc) {
//     console.log('here')
//     var startTime;
//     var startPos = element.scrollTop;
//     var clientHeight = element.clientHeight;
//     var maxScroll = element.scrollHeight - clientHeight;
//     var scrollIntendedDestination = startPos + value;
//     // low and high bounds for possible scroll destinations
//     var scrollEndValue = Math.min(Math.max(scrollIntendedDestination, 0), maxScroll)
//     // create recursive function to call every frame
//     var scroll = function(timestamp) {
//       startTime = startTime || timestamp;
//       var elapsed = timestamp - startTime;
//       element.scrollTop = startPos + (scrollEndValue - startPos) * easingFunc(elapsed / duration);
//       elapsed <= duration && window.requestAnimationFrame(scroll);
//     };
//     // call recursive function
//     if (startPos != scrollEndValue) window.requestAnimationFrame(scroll);
//   }
  
//   var containerEl = document.getElementById("scroll-container");
//   var scrollingDistance = window.innerHeight * 3;
//   var scrollingTime = 1000;
//   var easeInOutCubic = function(t) {
//     return t < .5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
//   }
  
//   scrollBy(containerEl , scrollingDistance , scrollingTime , easeInOutCubic )