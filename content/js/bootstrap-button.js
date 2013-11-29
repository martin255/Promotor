
return this.each(function () {
var $this = $(this)
, data = $this.data('button')
, options = typeof option == 'object' && option
if (!data) $this.data('button', (data = new Button(this, options)))
if (option == 'toggle') data.toggle()
else if (option) data.setState(option)
})
}
$.fn.button.defaults = {
loadingText: 'loading...'
}
$.fn.button.Constructor = Button
/* BUTTON NO CONFLICT
* ================== */
$.fn.button.noConflict = function () {
$.fn.button = old
return this
}
/* BUTTON DATA-API
* =============== */
$(document).on('click.button.data-api', '[data-toggle^=button]', function (e) {
var $btn = $(e.target)
if (!$btn.hasClass('btn')) $btn = $btn.closest('.btn')
$btn.button('toggle')
})
}(window.jQuery);
