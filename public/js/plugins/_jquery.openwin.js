(function ($) {
  $.fn.openwin = function (settings) {
    settings = jQuery.extend({
      option: {
        width: false,
        height: false,
        top: false,
        left: false,
        menubar: "no",
        toolbar: "no",
        location: "no",
        status: "no",
        resizable: "yes",
        scrollbars: "yes",
        directories: "no",
        titlebar: "yes",
        fullscreen: "yes"
      },
      target: "_blank",
      blur: false,
      focus: false
    }, settings);

    this.click(function () {
      var options = [];
      if ($(this).attr("rel")) {
        var rel = $(this).attr("rel").split(",");
        var reloption = {};
        for (var i in rel) {
          var a = rel[i].split("=");
          reloption[a[0]] = a[1];
        }
      }
      for (var k in settings.option) {
        var v = settings.option[k];
        if (reloption) {
          if (reloption[k]) {
            v = reloption[k];
          }
        }
        if (v != false) {
          options.push(k + "=" + v);
        }
      }
      var target = settings.target;
      if (reloption) {
        if (reloption["target"]) {
          target = reloption["target"];
        }
      }
      var win = window.open($(this).attr("href"), target, options.join(","));
      if (settings.blur == true) {
        win.blur();
      }
      if (settings.focus == true) {
        win.focus();
      }
      return false;
    });
  }
})(jQuery);