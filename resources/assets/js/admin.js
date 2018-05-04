var $ = require('jquery')

$('.js-input-title').on('keyup', function() {
  $.ajax({
    url: $(this).data('url'),
    type: 'get',
    dataType: 'json',
    data: {title: $(this).val()},
    success: function(response) {
      $('.js-input-slug').val(response)
    },
    error: function(response) {}
  })
});