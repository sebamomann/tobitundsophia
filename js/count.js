function counter(obj) {
    var $this = obj, countTo = $this.attr('data-count');

    $({ countNum: 0 }).animate({
        countNum: countTo
    },
        {
            duration: 2000,
            easing: 'swing',
            step: function () {
                if (countTo.includes(".")) {
                    $this.text(Math.round(this.countNum * 10) / 10);
                } else {
                    $this.text(Math.floor(this.countNum));
                }

            },
            complete: function () {
                $this.text(this.countNum);
            }
        });
}

$.fn.animateRotate = function (angle, duration, easing, complete) {
    var args = $.speed(duration, easing, complete);
    var step = args.step;
    return this.each(function (i, e) {
        args.complete = $.proxy(args.complete, e);
        args.step = function (now) {
            $.style(e, 'transform', 'rotate(' + now + 'deg)');
            if (step) return step.apply(e, arguments);
        };

        $({ deg: 0 }).animate({ deg: angle }, args);
    });
};