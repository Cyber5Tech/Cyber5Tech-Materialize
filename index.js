//START JQUERY

$('form.ajax').on('submit', function() {
    // console.log('Trigger')
    $("#btn").attr("disabled", "disabled");
    var that = $(this),
        url = that.attr('action'),
        type = that.attr('method')
    data = {

    };
    that.find('[name]').each(function(index, value) {
        // console.log(value);
        var that = $(this),
            name = that.attr('name'),
            value = that.val()
        data[name] = value;
    });
    $.ajax({
        url: url,
        type: type,
        data: data,
        success: function(response) {
            $('form').trigger("reset")
            $('#success').fadeIn().html('sent sucessfully');
            setTimeout(function() {
                $('#success').fadeOut('slow');
            }, 2000);
            alert('Message sent successfully');
            $('#btn').removeAttr('disabled');

        },
        failure: function(err) {
            console.log(err);
            $('#btn').removeAttr('disabled');
        }
    });
    // console.log(data);
    return false;
});